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
                'question_text' => 'In many countries, the (      ) wears a white dress at a wedding. However, in some contries, she may wear a red dress.',
            ],
            [
                "question_id" => "2",
                'question_text' => 'The teacher asked her students to find Argentina on a (      ). She wanted them to learn about countries that are far away from Japan.',
            ],
            [
                "question_id" => "3",
                'question_text' => 'Yuki only started studying Korean two years ago, but she can already read the newspaper without any (      ). Everyone is surpried by how quickly she has learned the language.',
            ],
            [
                "question_id" => "4",
                'question_text' => "A: Are you all right? You have a (      ) to be quiet when you're worried. B: Do I? I never realized I was like that. I'm fine. I just don't have much to say today.",
            ],
        ]);
    }
}
