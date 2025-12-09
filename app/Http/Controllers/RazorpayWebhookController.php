<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
use App\Models\Payment;   // ✅ Payment Model

class RazorpayWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $webhookSecret = env('RAZORPAY_WEBHOOK_SECRET');

        $payload = $request->getContent();
        $signature = $request->header('X-Razorpay-Signature');

        try {
            $api = new Api(
                config('services.razorpay.key'),
                config('services.razorpay.secret')
            );

            // ✅ Signature Verify (SECURITY)
            $api->utility->verifyWebhookSignature($payload, $signature, $webhookSecret);

            $data = json_decode($payload, true);

            if (isset($data['event']) && $data['event'] === 'payment.captured') {

                $paymentEntity = $data['payload']['payment']['entity'];

                $paymentId = $paymentEntity['id'];
                $orderId   = $paymentEntity['order_id'] ?? null;
                $amount    = $paymentEntity['amount'] / 100;
                $method    = $paymentEntity['method'];

                // ✅ DUPLICATE PAYMENT PROTECTION
                if (!Payment::where('payment_id', $paymentId)->exists()) {

                    Payment::create([
                        'payment_id' => $paymentId,
                        'order_id'   => $orderId,
                        'amount'     => $amount,
                        'status'     => 'captured',
                        'method'     => $method,
                    ]);

                    Log::info("✅ Payment Saved in DB: " . $paymentId . " | ₹" . $amount);
                } else {
                    Log::warning("⚠️ Duplicate Webhook Ignored: " . $paymentId);
                }
            }

            return response()->json(['status' => 'success'], 200);

        } catch (SignatureVerificationError $e) {
            Log::error("❌ Razorpay Webhook Signature Failed: " . $e->getMessage());
            return response()->json(['error' => 'Invalid signature'], 403);
        }
    }
}
