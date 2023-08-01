<?php

namespace App\Http\Controllers;

use App\Models\language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return language::all();
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
        $result = language::where('id', $id)->get();

        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, language $language)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(language $language)
    {
        //
    }
}
