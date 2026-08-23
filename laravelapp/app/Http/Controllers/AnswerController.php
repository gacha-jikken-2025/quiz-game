<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AnswerController extends Controller
{
    public function answer(Request $request, $id){
        $question = Question::with(['choices'])->findOrFail($id);
        $user_choice_id = $request->input('choice');
        $user_choice = $question->choices->where("choice_id", $user_choice_id)->first();
        $correct_choice = $question->choices->where("is_correct", true)->first();

        Log::info("correct_choice", ["correct_choice" => $correct_choice]);

        // 回答があっているか判定
        $check = $user_choice_id == $correct_choice->choice_id;

        // sessionに記録する
        session()->put("quiz.answers.{$id}", [
            'user_choice' => $user_choice,
            'question' => $question,
            'answer' => $correct_choice,
            'check' => $check,
        ]);

        // 表示されているIDの回答データを表示
        $result = session("quiz.answers.{$id}");

        return view('quiz/submit', compact('result'));
    }
}
