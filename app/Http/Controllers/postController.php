<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\post;
use App\Models\comment;
class postController extends Controller
{
    public function addpost(Request $request)
    {
        $request->validate([
        'body' => 'string|required',
         ]);
        $temp=auth()->user()->role;
        if($temp=='admin') {
            $temp='ادمین';
        } else {
            $temp='معلم';
        }

        post::Create(['user_id'=>auth()->user()->id,'author'=>auth()->user()->name,'arole'=>$temp, 'body'=>$request->body]);
        return redirect()->back();

    }
    public function listpost()
    {
        //$posts = post::all();
        $users=user::all();
        $postx = Post::all();
        foreach($postx as $post) {
            foreach($users as $user) {
                if($user->id==$post->user_id) {
                    $post->author=$user->name;
                    $post->save();
                }

            }
        }
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('dashboard', ['posts'=>$posts]);
    }
    public function destroy(post $post)
    {
        $comments=comment::select('*')->where('post_id', $post->id)->get();
        foreach($comments as $comment) {
            $comment->delete();
        }
        $post->delete();
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('dashboard', ['posts'=>$posts]);
    }
    public function postshow(post $post)
    {
        $comments=comment::select()->where('post_id', $post->id)->get();
        $users=user::all();
        return view('postshow', ['post'=>$post,'comments'=>$comments,'users'=>$users]);
    }
    public function edpost(post $post)
    {
        return view('edpost', ['post'=>$post]);
    }
    public function uppost(request $request, post $post)
    {
        if(auth()->user()->id==$post->user_id or auth()->user()->role=='admin') {
            $post->body=$request->body;
            $post->created_at=$request->created_at;
            $post->save();
            $comments=comment::select()->where('post_id', $post->id)->get();
            $users=user::all();
            return view('postshow', ['post'=>$post,'comments'=>$comments,'users'=>$users]);
        } else {
            return abort(404);
        }
    }
}
