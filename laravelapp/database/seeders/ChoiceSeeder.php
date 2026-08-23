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
                'choice_text' => '馬',
                'is_correct' => false,
            ],
            [
                "question_id" => "1",
                "choice_id" => "2",
                'choice_text' => '豚',
                'is_correct' => false,
            ],
            [
                "question_id" => "1",
                "choice_id" => "3",
                'choice_text' => '牛',
                'is_correct' => true,
            ],
            [
                "question_id" => "1",
                "choice_id" => "4",
                'choice_text' => '羊',
                'is_correct' => false,
            ],
            [
                "question_id" => "2",
                "choice_id" => "1",
                'choice_text' => '牛',
                'is_correct' => false,
            ],
            [
                "question_id" => "2",
                "choice_id" => "2",
                'choice_text' => '馬',
                'is_correct' => true,
            ],
            [
                "question_id" => "2",
                "choice_id" => "3",
                'choice_text' => '鷹',
                'is_correct' => false,
            ],
            [
                "question_id" => "2",
                "choice_id" => "4",
                'choice_text' => '竜',
                'is_correct' => false,
            ],
            [
                "question_id" => "3",
                "choice_id" => "1",
                'choice_text' => '鯛',
                'is_correct' => false,
            ],
            [
                "question_id" => "3",
                "choice_id" => "2",
                'choice_text' => '蝶',
                'is_correct' => false,
            ],
            [
                "question_id" => "3",
                "choice_id" => "3",
                'choice_text' => '鶴',
                'is_correct' => true,
            ],
            [
                "question_id" => "3",
                "choice_id" => "4",
                'choice_text' => '貝',
                'is_correct' => false,
            ],
            [
                "question_id" => "4",
                "choice_id" => "1",
                'choice_text' => '獅子',
                'is_correct' => true,
            ],
            [
                "question_id" => "4",
                "choice_id" => "2",
                'choice_text' => '河馬（カバ）',
                'is_correct' => false,
            ],
            [
                "question_id" => "4",
                "choice_id" => "3",
                'choice_text' => '熊猫（パンダ）',
                'is_correct' => false,
            ],
            [
                "question_id" => "4",
                "choice_id" => "4",
                'choice_text' => '孔雀',
                'is_correct' => false,
            ],
        ]);
    }
}
