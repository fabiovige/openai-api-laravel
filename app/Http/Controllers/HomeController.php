<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class HomeController extends Controller
{
    // models
    public function models(Request $request)
    {
        $result = OpenAI::models()->list()->toArray();
        dd($result);
    }

    // completions
    public function completions(Request $request)
    {
        $prompt = $request->get('prompt');
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $prompt,
        ]);
        dd($result);
    }
}
