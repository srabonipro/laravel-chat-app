<?php

namespace Database\Seeders;

use App\Models\Word;
use Illuminate\Database\Seeder;

class PhraseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Word::create([
            'language_id' => 1,
            'key' => 'home',
            'translation' => 'হোম',
        ]);
        Word::create([
            'language_id' => 1,
            'key' => 'courses',
            'translation' => 'কোর্স',
        ]);
        Word::create([
            'language_id' => 1,
            'key' => 'total',
            'translation' => 'টোটাল',
        ]);
        Word::create([
            'language_id' => 1,
            'key' => 'sign_up',
            'translation' => 'সাইন আপ',
        ]);
        Word::create([
            'language_id' => 1,
            'key' => 'log_in',
            'translation' => 'লগইন',
        ]);
    }
}
