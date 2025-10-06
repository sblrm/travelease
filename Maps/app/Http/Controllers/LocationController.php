<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class LocationController extends Controller
{
    public function submitLocation(Request $request)
    {
        $latitude = $request->latitude;
        $longitude = $request->longitude;

        // Just for demonstration: Log the data (optional)
        \Log::info('User location:', [
            'latitude' => $latitude,
            'longitude' => $longitude
        ]);

        // Return an iframe (example: embed Google Maps with the user's location)
        $iframe = '<iframe
                        width="100%"
                        height="400"
                        frameborder="0"
                        style="border:0"
                        src="https://www.google.com/maps?q=' . $latitude . ',' . $longitude . '&hl=es;z=14&output=embed"
                        allowfullscreen>
                   </iframe>';

        return response($iframe);
    }

    public function sendMessage(Request $request)
    {
        $message = $request->input('message');

        if (!$message) {
            return response()->json(['error' => 'No message provided.'], 400);
        }

        try {
            // Kirim ke Flask API (ganti URL sesuai Flask server kamu)
            $flaskResponse = Http::post('http://127.0.0.1:5000/chat', [
                'query' => $message
            ]);

            if ($flaskResponse->failed()) {
                return response()->json(['error' => 'Flask API error.'], 500);
            }

            $data = $flaskResponse->json();

            return response()->json([
                'reply' => $data['response'] ?? 'Maaf, ada yang salah!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Server error.',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
