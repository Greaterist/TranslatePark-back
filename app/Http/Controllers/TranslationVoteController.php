<?php

namespace App\Http\Controllers;

use App\Models\translation_vote;
use Illuminate\Http\Request;

class TranslationVoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'user_id' => 'required|image|exists:users,id',
            'translation_id' => 'required|exists:translations,id',
            'isPositive' => 'required|boolean',
        ]);

        if ($validatedData->fails()) {
            return redirect('post/create')
                        ->withErrors($validatedData)
                        ->withInput();
        }

        if (translation_vote::where('user_id', $request->user_id)->where('translation_id', $request->translation_id)->exists()){
            translation_vote::create([
                'user_id' => $request->user_id,
                'translation_id' => $request->translation_id,
                'isPositive' => $request->isPositive
            ]);
            return response()->json(['message' => 'Favourite stored successfully']);
        }

        

        return response()->json('error', '400');

    }

    /**
     * Display the specified resource.
     */
    public function show(translation_vote $translation_vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(translation_vote $translation_vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|image|exists:users,id',
            'translation_id' => 'required|exists:translations,id',
            'isPositive' => 'required|boolean',
        ]);

        if ($validatedData->fails()) {
            return redirect('post/create')
                        ->withErrors($validatedData)
                        ->withInput();
        }

        translation_vote::where('user_id', $request->user_id)->where('translation_id', $request->translation_id)->update(['isPositive' => $request->isPositive]);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(translation_vote $translation_vote)
    {
        //
    }
}
