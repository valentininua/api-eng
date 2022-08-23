<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EngWord;
use DB;
use Illuminate\Support\Str;

use function PHPUnit\Framework\exactly;

class EngWords extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=10;$i++) {
            DB::table('eng_words')->insert([
                'eng' => Str::random(40),
                'rus' => Str::random(40).'@gmail.com',
                'description' => Str::random(40),
            ]);
        }
    }
}
