<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class ChatController extends Controller
{
    /**
     * @param Request $request
     * @return string
     */
    public function __invoke(Request $request): string
    {

        try {
            /** @var array $response */
            $response = Http::withHeaders([
                "Authorization" => "Bearer " . env('CHAT_GPT_KEY'),
                "Content-Type" => "application/json"
            ])->post('https://api.openai.com/v1/chat/completions', [
                "model" => $request->post('model'),
                "messages" => [
                    [
                        "role" => "user",
                        "content" => $request->post('content')
                    ]
                ],
                "temperature" => 0,
                "max_tokens" => 2048
            ])->body();

            // Log the entire response for debugging
            Log::info('OpenAI API Response:', $response);

            // Check if the response contains the expected keys
            if (isset($response['choices'][0]['message']['content'])) {
                return $response['choices'][0]['message']['content'];
            } else {
                // Log if the expected keys are not present
                Log::warning('Unexpected API response structure:', $response);
                return "Unexpected API response structure.";
            }

            // return $response['choices'][0]['message']['content'];
        } catch (Throwable $e) {
            Log::error('Error communicating with OpenAI API:', ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return "Chat GPT Limit Reached. This means too many people have used this demo this month and hit the FREE limit available. You will need to wait, sorry about that.";
        }
    }
}
