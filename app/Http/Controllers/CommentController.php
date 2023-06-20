<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'content' => 'required',
        ]);

        $comment = Comment::create([
            'user_id' => auth()->id(),
            'post_id' => $request->input('post_id'),
            'content' => $request->input('content'),
        ]);

        return redirect()->back()->with('success', 'Comment added successfully.');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }
}
