<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QuizMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) { //terminale php artisan make:migration -- create='quizzes' yazarak bunu hazır olarak elde edebiliriz.
            $table->id();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->timestamp('finished_at')->nullable();  //quizin bitme zamanı
            $table->enum('status',['publish','draft','passive'])->default('draft'); //status isminde tablo ve içeriği.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
}
