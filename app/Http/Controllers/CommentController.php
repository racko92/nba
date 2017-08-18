<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Team;
use App\Mail\CommentReceived;

class CommentController extends Controller
{
    public function store($id)
    {

        $this->validate(request(), [
            'content' => 'required|min:10'
        ]);

        $comment = new Comment;
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $comment->team_id = $id;
        $comment->save();

        $team = Team::findOrFail($id);
        \Mail::to($team->email)->send(new CommentReceived($team));


        return back();
    }
}
