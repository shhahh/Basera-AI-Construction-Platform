<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // exit;
        // Validate form fields
        log::info('Contact form submission received', ['data' => $request->all()]);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'service' => 'required|string',
            'message' => 'required|string|max:2000',
        ]);

        log::info('Contact form data validated successfully', ['validated_data' => $validated]);
        Contact::create($validated);

        // Send email 
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port = env('MAIL_PORT');
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));

            // $mail->addCC('baseraconstructionsntubewells@gmail.com', env('MAIL_FROM_NAME'));
            // $mail->addCC('rajnishnigam7@gmail.com', env('MAIL_FROM_NAME'));

            $mail->addCC('ashu.pundir@hachiweb.com', env('MAIL_FROM_NAME'));
            $mail->addBCC('ayush.sharma@hachiweb.com', env('MAIL_FROM_NAME'));



            // $mail->addBCC('dev.prateek.asthana@gmail.com', env('MAIL_FROM_NAME'));


            $mail->isHTML(true);
            $mail->Subject = "New Contact Inquiry - {$validated['name']}";

            // Google-style HTML Email Template (same as before)
            $mail->Body = $this->getEmailTemplate($validated);

            // Plain text alternative
            $mail->AltBody = "
                New Contact Message
                
                Name: {$validated['name']}
                Email: {$validated['email']}
                Phone: {$validated['phone']}
                Address: {$validated['address']}
                Service: {$validated['service']}
                Message: {$validated['message']}
            ";

            // LOG BEFORE SENDING
            Log::info('PHPMailer: Preparing to send email', [
                'to' => 'info@baseraconstructionsandtubewells.com',
                'cc' => [
                    'baseraconstructionsntubewells@gmail.com',
                    'rajnishnigam7@gmail.com'
                ],
                'bcc' => [
                    'dev.prateek.asthana@gmail.com'
                ],
                'from' => env('MAIL_FROM_ADDRESS'),
            ]);


            $mail->send();

            Log::info(
                'PHPMailer: Email sent successfully',
                [
                    'to' => 'info@baseraconstructionsandtubewells.com',
                    'cc' => [
                        'baseraconstructionsntubewells@gmail.com',
                        'rajnishnigam7@gmail.com'
                    ],
                    'bcc' => [
                        'dev.prateek.asthana@gmail.com'
                    ],
                ]
            );
        } catch (Exception $e) {
            Log::error(
                'Mailtrap PHPMailer Error: ' . $mail->ErrorInfo,
                [
                    'exception' => $e->getMessage(),
                ]
            );
        }

        return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }

    private function getEmailTemplate($data)
    {
        $logoUrl = asset('images/logo.png');

        $name = htmlspecialchars($data['name']);
        $email = !empty($data['email']) ? htmlspecialchars($data['email']) : 'N/A';
        $phone = htmlspecialchars($data['phone']);
        $address = !empty($data['address']) ? htmlspecialchars($data['address']) : 'N/A';
        $service = htmlspecialchars($data['service']);
        $message = nl2br(htmlspecialchars($data['message']));

        // Build address HTML (normal text or Google Maps link)
        if (!empty($data['address'])) {
            $rawAddress = htmlspecialchars($data['address']);
            $mapsUrl = "https://www.google.com/maps/search/?api=1&query=" . rawurlencode($data['address']);

            $addressHtml = '<a href="' . $mapsUrl . '" target="_blank" style="color:#2563eb;text-decoration:none;">'
                . $rawAddress .
                '</a>';
        } else {
            $addressHtml = 'N/A';
        }

        return <<<HTML
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        </head>


        <body style="margin:0;padding:0;background:#f4f6f8;font-family:Arial,Helvetica,sans-serif;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f6f8;">
                <tr>
                    <td align="center" style="padding:40px 0;">

                        <table width="100%" cellpadding="0" cellspacing="0" style="max-width:600px;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.08);">

                            <!-- HEADER -->
                            <tr>
                                <td style="background:#fff;padding:40px;text-align:center;">
                                <img src="{$logoUrl}" width="180" style="display:block; margin-left:auto; margin-right:auto; margin-bottom:20px; background-color: #ffffff;">
                                    <div style="background:#f8f9fa;border-left:5px solid #000000;padding:25px 30px;border-radius:8px;box-shadow:0 2px 10px rgba(0,0,0,0.08);">
                                    <h1 style="margin:0;color:#000000;font-size:26px;font-weight:700;font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;letter-spacing:-0.3px;">New Website Inquiry</h1>
                                    <p style="margin:10px 0 0;color:#333333;font-size:15px;line-height:1.6;font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;">A potential client contacted you.</p></div>
                                </td>
                            </tr>

                            <!-- SERVICE BADGE -->
                            <tr>
                                <td style="padding:25px 40px 10px;text-align:center;">
                                    <div style="display:inline-block;background:#e0f2fe;padding:8px 20px;border-radius:50px;">
                                        <span style="color:#0369a1;font-weight:700;font-size:13px;text-transform:uppercase;">
                                            Interested in: {$service}
                                        </span>
                                    </div>
                                </td>
                            </tr>

                            <!-- USER DETAILS -->
                            <tr>
                                <td style="padding:20px 40px;">

                                    <!-- NAME -->
                                    <table width="100%" style="border-bottom:1px solid #f1f5f9;padding-bottom:20px;margin-bottom:20px;">
                                        <tr>
                                            <td width="40">
                                                <img src="https://img.icons8.com/ios-filled/50/user.png" width="26" height="26" style="display:block;">
                                            </td>
                                            <td style="padding-left:15px;">
                                                <div style="font-size:11px;color:#64748b;font-weight:600;text-transform:uppercase;">Customer Name</div>
                                                <div style="font-size:16px;color:#334155;font-weight:500;">{$name}</div>
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- EMAIL -->
                                    <table width="100%" style="border-bottom:1px solid #f1f5f9;padding-bottom:20px;margin-bottom:20px;">
                                        <tr>
                                            <td width="40">
                                                <img src="https://img.icons8.com/ios-filled/50/new-post.png" width="26" height="26" style="display:block;">
                                            </td>
                                            <td style="padding-left:15px;">
                                                <div style="font-size:11px;color:#64748b;font-weight:600;text-transform:uppercase;">Email</div>
                                               <a href="mailto:{$email}" 
                                                    style="color:#2563eb;font-size:16px;text-decoration:none;">
                                                    {$email}
                                                </a>

                                            </td>
                                        </tr>
                                    </table>

                                    <!-- PHONE -->
                                    <table width="100%" style="border-bottom:1px solid #f1f5f9;padding-bottom:20px;margin-bottom:20px;">
                                        <tr>
                                            <td width="40">
                                                <img src="https://img.icons8.com/ios-filled/50/phone.png" width="26" height="26" style="display:block;">
                                            </td>
                                            <td style="padding-left:15px;">
                                                <div style="font-size:11px;color:#64748b;font-weight:600;text-transform:uppercase;">Phone</div>
                                                <a href="tel:{$phone}" style="color:#2563eb;font-size:16px;text-decoration:none;">{$phone}</a>
                                            </td>
                                        </tr>
                                    </table>

                                    <table width="100%">
                                        <tr>
                                            <td width="40">
                                                <img src="https://img.icons8.com/ios-filled/50/address.png" width="26" height="26">
                                            </td>
                                            <td style="padding-left:15px;">
                                                <div style="font-size:11px;color:#64748b;font-weight:600;text-transform:uppercase;">Address</div>
                                                <div style="font-size:16px;color:#334155;font-weight:500;">
                                                    {$addressHtml}
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                            

                            <!-- MESSAGE -->
                            <tr>
                                <td style="padding:0 40px 30px;">
                                    <div style="font-size:11px;color:#64748b;font-weight:600;text-transform:uppercase;margin-bottom:10px;">Message</div>
                                    <div style="background:#f8fafc;border:1px solid #e2e8f0;padding:20px;border-radius:8px;color:#475569;font-size:15px;line-height:1.6;">
                                        "{$message}"
                                    </div>
                                </td>
                            </tr>

                            <!-- BUTTONS -->
                            <tr>
                                <td style="padding:0 40px 40px;text-align:center;">

                                    <table cellspacing="0" cellpadding="0" border="0" align="center">
                                        <tr>

                                            <!-- Reply Button -->
                                            <td align="center" style="padding-right:10px;">
                                                <a href="mailto:{$email}"
                                                style="background:#2563eb;color:#ffffff;font-size:14px;font-weight:600;
                                                        text-decoration:none;padding:14px 30px;border-radius:6px;
                                                        display:inline-block;">
                                                    Reply Via Gmail
                                                </a>
                                            </td>

                                            <!-- Call Button -->
                                            <td align="center">
                                                <a href="tel:{$phone}"
                                                style="background:#ffffff;border:1px solid #cbd5e1;color:#334155;
                                                        font-size:14px;font-weight:600;text-decoration:none;
                                                        padding:14px 30px;border-radius:6px;display:inline-block;">
                                                    Call Now
                                                </a>
                                            </td>

                                        </tr>
                                    </table>

                                </td>
                            </tr>


                            <!-- FOOTER -->
                            <tr>
                                <td style="background:#f8fafc;padding:20px;text-align:center;border-top:1px solid #e2e8f0;">
                                    <p style="margin:0;color:#94a3b8;font-size:12px;">
                                        <img src="https://i.ibb.co/7JRyZC3/bolt.png" width="14" style="vertical-align:middle;margin-right:5px;">Lead captured via website</p>
                                    <p>&copy; 2025 Basera Constructions & Tubewells. All Rights Reserved.</p>
                                </td>
                            </tr>

                        </table>

                    </td>
                </tr>
            </table>
        </body>
        </html>
        HTML;
    }
};
