<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\post;
class commentController extends Controller
{
    public function addc(request $request, post $post)
    {
        $request->validate([
            'body' => 'string|required',
        ]);
        comment::Create(['user_id'=>auth()->user()->id,'post_id'=>$post->id,'body'=>$request->body]);
        $comments=comment::select()->where('post_id', $post->id);
        $users=user::all();
        return redirect()->back();
        //return view('postshow',['post'=>$post,'comments'=>$comments,'users'=>$users]);

    }
    public function usid($usid)
    {
        $user = User::find($usid);
        return view('showuser', ['user'=>$user]);
    }


    public function edcomment(comment $comment, post $post)
    {
        return view('edcomment', ['comment'=>$comment ,'post'=>$post]);
    }
    public function upcomment(request $request, comment $comment, post $post)
    {
        if(auth()->user()->id==$comment->user_id or auth()->user()->role=='admin') {
            $comment->body=$request->body;
            $comment->save();
            $comments=comment::select()->where('post_id', $post->id)->get();
            $users=user::all();
            return view('postshow', ['post'=>$post,'comments'=>$comments,'users'=>$users]);
        } else {
            return abort(404);
        }
    }
    public function destroyc(comment $comment)
    {
        if(auth()->user()->id==$comment->user_id or auth()->user()->role=='admin') {
            $comment->delete();
            return redirect()->back();
        } else {
            return abort(404);
        }
    }



}
