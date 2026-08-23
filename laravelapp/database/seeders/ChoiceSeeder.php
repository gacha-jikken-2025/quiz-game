<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choices')->insert([
            [
                "question_id" => "1",
                "choice_id" => "1",
                'choice_text' => 'lawyer',
            ],
            [
                "question_id" => "1",
                "choice_id" => "2",
                'choice_text' => 'warrior',
            ],
            [
                "question_id" => "1",
                "choice_id" => "3",
                'choice_text' => 'surgeon',
            ],
            [
                "question_id" => "1",
                "choice_id" => "4",
                'choice_text' => 'bride',
            ],
            [
                "question_id" => "2",
                "choice_id" => "1",
                'choice_text' => 'branch',
            ],
            [
                "question_id" => "2",
                "choice_id" => "2",
                'choice_text' => 'globe',
            ],
            [
                "question_id" => "2",
                "choice_id" => "3",
                'choice_text' => 'scale',
            ],
            [
                "question_id" => "2",
                "choice_id" => "4",
                'choice_text' => 'trail',
            ],
            [
                "question_id" => "3",
                "choice_id" => "1",
                'choice_text' => 'glory',
            ],
            [
                "question_id" => "3",
                "choice_id" => "2",
                'choice_text' => 'balance',
            ],
            [
                "question_id" => "3",
                "choice_id" => "3",
                'choice_text' => 'difficulty',
            ],
            [
                "question_id" => "3",
                "choice_id" => "4",
                'choice_text' => 'priority',
            ],
            [
                "question_id" => "4",
                "choice_id" => "1",
                'choice_text' => 'tendency',
            ],
            [
                "question_id" => "4",
                "choice_id" => "2",
                'choice_text' => 'discrimination',
            ],
            [
                "question_id" => "4",
                "choice_id" => "3",
                'choice_text' => 'shelter',
            ],
            [
                "question_id" => "4",
                "choice_id" => "4",
                'choice_text' => 'content',
            ],
        ]);
    }
}
