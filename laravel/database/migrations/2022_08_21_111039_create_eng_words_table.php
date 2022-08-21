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

            $table->uuid('uuid')->default(DB::raw('gen_random_uuid()'))->primary('products_pkey');
            $table->string('eng', 256);
            $table->string('rus', 256);
            $table->longText('description');
            $table->timestamps($precision = 0);

//            $table->increments('id');
//            $table->foreignId('table_id')->constrained();
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
