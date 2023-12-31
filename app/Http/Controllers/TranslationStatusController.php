<?php

namespace App\Http\Controllers;

use App\Models\translation_status;
use Illuminate\Http\Request;

class TranslationStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return translation_status::all();
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

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $result = translation_status::where('id', $id)->get();

        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(translation_status $translation_status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, translation_status $translation_status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(translation_status $translation_status)
    {
        
    }
}
