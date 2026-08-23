<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Support\Facades\Log;

class QuestionController extends Controller
{
    public function question($id){

        $question = Question::with(['choices', 'answer'])->findOrFail($id);

        // Log::info("question", ["question" => $question]);

        return view('quiz/quiz', compact('question'));
    }
}
