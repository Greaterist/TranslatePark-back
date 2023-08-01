<?php

namespace App\Http\Controllers;

use App\Models\word_status;
use Illuminate\Http\Request;

class WordStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return word_status::all();
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
        $result = word_status::where('id', $id)->get();

        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(word_status $word_status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, word_status $word_status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(word_status $word_status)
    {
        //
    }
}
