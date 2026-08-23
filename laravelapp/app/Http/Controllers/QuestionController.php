<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Support\Facades\Log;

class QuestionController extends Controller
{
    public function question($id){

        // question_idで関連する選択肢、答えを紐づける
        $question = Question::with(['choices'])->findOrFail($id);

        $correct_choice = $question->choices->where("is_correct", true)->first();

        Log::info("question", ["question" => $correct_choice]);

        return view('quiz/quiz', compact('question', 'correct_choice'));
    }
}
