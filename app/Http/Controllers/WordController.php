<?php

namespace App\Http\Controllers;

use App\Models\word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return word::all();
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
        $validatedData = $request->validate([
            'status_id' => 'required|exists:word_statuses,id',
            'word' => 'required|string',
            'language_id' => 'required|exists:languages,id',
            'phonetic' => 'required|string',
            'creator_id' => 'required|exists:users,id',
        ]);

        word::firstOrCreate([
            'word' => $request->word,
            'language_id' => $request->language_id,
        ],
        [

        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(word $word)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(word $word)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, word $word)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(word $word)
    {
        //
    }

    public function test(){
        return response()->json('test');
    }

    public function getAll(){

    }

    public function getByLang($id){
        return word::where('language_id', $id)
            ->get();
    }


    public function getWordSearch($text){

        $result = word::where('word', 'like', '%'. $text . '%')->get();

        return response()->json($result);
    }
}
