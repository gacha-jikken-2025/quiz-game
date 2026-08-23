<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Log;

class ResultController extends Controller
{
    public function result(){
        $answers = session('quiz.answers', []);

        // セッションが存在しなければ1問目のページへリダイレクト
        if(!$answers) {
            return redirect('/quiz/1');
        }

        return view('result/result', compact(
            'answers',
        ));
    }
}
