<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [
                "question_id" => "1",
                'choice_id' => '4',
            ],
            [
                "question_id" => "2",
                'choice_id' => '2',
            ],
            [
                "question_id" => "3",
                'choice_id' => '3',
            ],
            [
                "question_id" => "4",
                'choice_id' => '1',
            ],
        ]);
    }
}
