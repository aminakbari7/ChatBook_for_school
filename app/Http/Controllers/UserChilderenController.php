<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Childeren;
use App\Models\UserChilderen;
use Illuminate\Http\Request;


class UserChilderenController extends Controller
{
    public function pc()
    {
        $cids=UserChilderen::select('Childeren_id')->where('parent_id', auth()->user()->id)->get();
        $childerens = Childeren::whereIn('id', $cids)->get();
		return view('pchild',['childerens'=>$childerens]);
    }
    public function pt()
    {
        $cids=UserChilderen::select('teacher_id')->where('parent_id', auth()->user()->id)->get();
        $teachers = user::whereIn('id', $cids)->get();
		return view('pteacher',['teachers'=>$teachers]);
    }
    public function tc()
    {
        $cids=UserChilderen::select('Childeren_id')->where('teacher_id', auth()->user()->id)->get();
        $childerens = Childeren::whereIn('id', $cids)->get();
		return view('tchild',['childerens'=>$childerens]);
    }
    public function tp()
    {
        $cids=UserChilderen::select('parent_id')->where('teacher_id', auth()->user()->id)->get();
        $parents = user::whereIn('id', $cids)->get();
		return view('tparent',['parents'=>$parents]);
    }
}
