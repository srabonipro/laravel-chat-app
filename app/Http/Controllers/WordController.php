<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function phrase(Language $language)
    {
        $phrases = Word::where('language_id', $language->id)->get();
        return view('language.phrase', compact('language', 'phrases'));
    }
}
