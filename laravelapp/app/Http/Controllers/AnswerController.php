<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AnswerController extends Controller
{
    public function answer(Request $request, $id){
        $answer = Answer::with(['question'])->findOrFail($id);
        $user_answer = $request->input('choice');

        // 回答があっているか判定
        $check = $user_answer == $answer->choice_id;

        // sessionに記録する
        session()->put("quiz.answers.{$id}", [
            'user_answer' => $user_answer,
            'question' => $answer->question,
            'answer' => $answer->choice_id,
            'check' => $check,
        ]);

        // 表示されているIDの回答データを表示
        $result = session("quiz.answers.{$id}");

        return view('quiz/submit', compact('result'));
    }
}
