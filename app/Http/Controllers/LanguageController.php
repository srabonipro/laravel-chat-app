<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        return view('language.index', compact('languages'));
    }

    public function create()
    {
        return view('language.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:30',
        ]);

        Language::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return back()->with('message', 'Language added successfully!!');
    }
}
