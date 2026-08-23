<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->id();
            $table->integer("question_id")->comment("問題のID");
            $table->integer("choice_id")->comment("選択肢のID");
            $table->string("choice_text")->comment("選択肢のテキスト");
            $table->boolean("is_correct")->comment("選択肢の正誤");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('choices');
    }
};
