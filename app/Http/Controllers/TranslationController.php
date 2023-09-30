<?php

namespace App\Http\Controllers;

use App\Models\translation;
use App\Models\word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return translation::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $result = DB::table('words')
            ->where('id', $id)
            ->select('id', 'word', 'phonetic')
            ->get();

        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(translation $translation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, translation $translation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(translation $translation)
    {
        //
    }

    public function getTranslationById($id)
    {
        $result = DB::table('words')
            ->join('translations', function ($join) use ($id) {
                $join->on('words.id', '=', 'translations.second_word_id')
                    ->where('translations.first_word_id', '=', $id)
                    ->orWhere(function ($query) use ($id) {
                        $query->on('words.id', '=', 'translations.first_word_id')
                            ->where('translations.second_word_id', '=', $id);
                    });
            })
            ->select('words.id', 'word')
            ->get();




        return response()->json($result);
    }
}
