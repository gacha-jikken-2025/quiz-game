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
            ],
            [
                "question_id" => "1",
                "choice_id" => "2",
                'choice_text' => '豚',
            ],
            [
                "question_id" => "1",
                "choice_id" => "3",
                'choice_text' => '牛',
            ],
            [
                "question_id" => "1",
                "choice_id" => "4",
                'choice_text' => '羊',
            ],
            [
                "question_id" => "2",
                "choice_id" => "1",
                'choice_text' => '牛',
            ],
            [
                "question_id" => "2",
                "choice_id" => "2",
                'choice_text' => '馬',
            ],
            [
                "question_id" => "2",
                "choice_id" => "3",
                'choice_text' => '鷹',
            ],
            [
                "question_id" => "2",
                "choice_id" => "4",
                'choice_text' => '竜',
            ],
            [
                "question_id" => "3",
                "choice_id" => "1",
                'choice_text' => '鯛',
            ],
            [
                "question_id" => "3",
                "choice_id" => "2",
                'choice_text' => '蝶',
            ],
            [
                "question_id" => "3",
                "choice_id" => "3",
                'choice_text' => '鶴',
            ],
            [
                "question_id" => "3",
                "choice_id" => "4",
                'choice_text' => '貝',
            ],
            [
                "question_id" => "4",
                "choice_id" => "1",
                'choice_text' => '獅子',
            ],
            [
                "question_id" => "4",
                "choice_id" => "2",
                'choice_text' => '河馬（カバ）',
            ],
            [
                "question_id" => "4",
                "choice_id" => "3",
                'choice_text' => '熊猫（パンダ）',
            ],
            [
                "question_id" => "4",
                "choice_id" => "4",
                'choice_text' => '孔雀',
            ],
        ]);
    }
}
