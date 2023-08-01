<?php

namespace App\Http\Controllers;

use App\Models\user_role;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return user_role::all();
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
        $result = user_role::where('id', $id)->get();

        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user_role $user_role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user_role $user_role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user_role $user_role)
    {
        //
    }
}
