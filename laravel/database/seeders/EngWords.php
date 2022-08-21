<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EngWord;
use function PHPUnit\Framework\exactly;
use \DB;
use Illuminate\Support\Str;

class EngWords extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('eng_words')->insert([
            'eng' => Str::random(40),
            'rus' => Str::random(40).'@gmail.com',
            'description' => Str::random(40),
        ]);
    }
}
