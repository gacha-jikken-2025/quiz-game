<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                "question_id" => "1",
                'question_text' => '鶏口となるも（　）後となるなかれ',
            ],
            [
                "question_id" => "2",
                'question_text' => '天高く（　）肥ゆる秋',
            ],
            [
                "question_id" => "3",
                'question_text' => '掃き溜めに（　）',
            ],
            [
                "question_id" => "4",
                'question_text' => "（　　）に牡丹",
            ],
        ]);
    }
}
