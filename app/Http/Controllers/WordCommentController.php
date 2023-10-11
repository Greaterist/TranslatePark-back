<?php

namespace App\Http\Controllers;

use App\Models\word_comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WordCommentController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(word_comment $word_comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(word_comment $word_comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, word_comment $word_comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(word_comment $word_comment)
    {
        //
    }

    public function getByWordId($id){

        $result = DB::table('word_comments')
            ->join('users', 'word_comments.creator_id', '=', 'users.id')
            ->join('word_comment_votes', 'word_comments.id', '=', 'word_comment_votes.word_comment_id')
            ->select('word_comments.text', 'users.name', DB::raw('SUM(CASE WHEN word_comment_votes.isPositive = true THEN 1 ELSE 0 END) AS positive'), DB::raw('SUM(CASE WHEN word_comment_votes.isPositive = true THEN 0 ELSE 1 END) AS negative'), 'word_comments.created_at')
            ->where('word_comments.word_id', $id)
            ->groupBy('word_comments.text', 'users.name', 'word_comments.created_at')
            ->get();

        return response()->json($result);
    }
}
