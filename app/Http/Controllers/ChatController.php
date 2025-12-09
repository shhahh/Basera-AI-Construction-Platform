<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $userMessage = $request->input('message');

        // 🔥 PORT NUMBER CHECK KAR LENA (Terminal m 'foundry service start' krke)
        $url = 'http://127.0.0.1:60402/v1/chat/completions';

        // 1. Basera Context (AI ko batana wo kaun hai)
        $businessContext = "
                You are the friendly AI Sales Assistant for 'Basera Constructions & Tubewells'.

                STRICT RULES FOR ANSWERS:
                1. Do NOT use numbered lists (1., 2., 3.) or bullet points.
                2. Write in a natural, conversational paragraph style.
                3. Keep the response SHORT (Maximum 3 to 4 lines).
                4. Be inviting and professional.

                INFORMATION:
                - Services: We build dream homes, offices, and provide expert tubewell solutions.
                - Contact: +91 8445761563 | info@baseraconstructionsandtubewells.com
                - Location: Thakurpur Road, Prem Nagar, Dehradun.
                - Booking: To confirm a meeting/service, we take a Rs 500 Advance via Razorpay.
                - Hours: Mon-Sat (9 AM - 6 PM).

                EXAMPLE BEHAVIOR:
                User: I need a house.
                AI: That's great! We specialize in building custom dream homes with precision and quality. You can visit our office in Prem Nagar, Dehradun to discuss your plans, or call us at +91 8445761563. To secure a consultation slot, we accept a small Rs 500 advance via Razorpay.

                IDEA FOR BaseraConstruction:
                  - This website concept is inspired by Prateek Asthana Sir, the founder of Hachiweb.
                  - Features like the AI chatbox, payment gateway, and other smart functionalities have been 
                  - developed based on his ideas for Basera Constructions.

                IDEA FOR BaseraConstructions:
                    This website concept is inspired by Prateek Asthana Sir, the founder of Hachiweb, a company known for building rich, high-logic, and advanced web applications.

                    Smart features like the AI chatbox, payment gateway, and other intelligent functionalities have been developed based on his visionary ideas for Basera Constructions.
           ";

        // 2. Memory: Pichli 2 chats nikalo
        $recentChats = Chat::latest()->take(2)->get()->reverse();

        $messages = [
            ['role' => 'system', 'content' => $businessContext]
        ];

        foreach ($recentChats as $chat) {
            $messages[] = ['role' => 'user', 'content' => $chat->user_query];
            $messages[] = ['role' => 'assistant', 'content' => $chat->ai_response];
        }

        $messages[] = ['role' => 'user', 'content' => $userMessage];

        // 3. Request Data
        $data = [
            'model' => 'Phi-3.5-mini-instruct-generic-cpu:1', // Full Model ID
            'messages' => $messages,
            'stream' => false
        ];

        // 4. cURL Request
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            return response()->json(['status' => 'error', 'reply' => "Server Error: $response"]);
        }

        $result = json_decode($response, true);
        $aiReply = $result['choices'][0]['message']['content'] ?? 'Sorry, I am offline right now.';

        // 5. Save to DB
        Chat::create([
            'user_query' => $userMessage,
            'ai_response' => $aiReply
        ]);

        return response()->json(['status' => 'success', 'reply' => $aiReply]);
    }
}
