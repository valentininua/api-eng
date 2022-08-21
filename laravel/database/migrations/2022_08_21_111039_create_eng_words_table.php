<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {

        Schema::create('eng_words', static function (Blueprint $table) {

            #$table->id();
            $table->increments('id')->first()->autoIncrement();
            $table->uuid('uuid')->default(DB::raw('gen_random_uuid()'));
            $table->string('eng', 256)->nullable();
            $table->string('rus', 256)->nullable();
            $table->longText('description')->nullable();
            $table->timestamps($precision = 0);

//          $table->foreignId('table_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eng_words');
    }
};
