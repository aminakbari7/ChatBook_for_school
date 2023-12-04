<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Childeren;
use App\Models\UserChilderen;
use App\Models\ChMessage;
use Chatify\Facades\ChatifyMessenger as Chatify;
use Chatify\Traits\UUID;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use App\Models\ChMessage as Message;
use App\Models\ChFavorite as Favorite;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class ChilderenController extends Controller
{
    public function listChilderen()
    {
        $Childerens = Childeren::all();
        $UserChilderens=UserChilderen::all();
		return view('Childerens')->with('Childerens', $Childerens)->with('UserChilderens', $UserChilderens);
    }
    public function search(request $request)
    {
        $Childerens = Childeren::select()->where('id','LIKE',"%$request->x%")
                                        ->orwhere('name','LIKE',"%$request->x%")->get();
                                        $UserChilderens=UserChilderen::all();
                                        return view('Childerens')->with('Childerens', $Childerens)->with('UserChilderens', $UserChilderens);
    }
    public function createchild()
    {
        $users = User::select()->where('role', 'teacher')->orwhere('role', 'parent')->get();
		return view('createchild',['users'=>$users]);
    }



    public function addchild(Request $request)
    {
            $request->validate([
                'name' => 'string|required',
                'birth' => 'required',
            ]);
            $name = $request->name;
            $birth = $request->birth;
            $new=Childeren::Create(['name'=>$name, 'birth'=>$birth]);
            UserChilderen::Create(['Childeren_id'=>$new->id,'parent_id'=>$request->parent_id,'teacher_id'=>$request->teacher_id]);


            $message = Chatify::newMessage([
                'type' =>'',
                'from_id' => $request->parent_id,
                'to_id' => $request->teacher_id,
                'body' => htmlentities(trim($request['']), ENT_QUOTES, 'UTF-8'),
                'attachment' => ("") ? json_encode((object)[
                    'new_name' => '',
                    'old_name' => htmlentities(trim(''), ENT_QUOTES, 'UTF-8'),
                ]) : null,
            ]);
        session()->flash('msg','کودک ثبت شد');
            return redirect()->back();

    }
    public function destroyc(Childeren $childeren ,UserChilderen $UserChilderen)
    {

        session()->flash('msg','کودک حذف شد');

        $childeren->delete();
        $UserChilderen->delete();
		return redirect()->back();
    }
    public function upchilderen( request $request  ,childeren $childeren,UserChilderen $UserChilderen)
    {
        $childeren->name=$request->name;
        $childeren->birth=$request->birth;
        $childeren->save();
        $UserChilderen->parent_id=$request->parent_id;
        $UserChilderen->teacher_id=$request->teacher_id;
        $UserChilderen->save();

        session()->flash('msg',' اطلاعات به روز رسانی شد');

		$Childerens = Childeren::all();
        $UserChilderens=UserChilderen::all();
		return view('Childerens')->with('Childerens', $Childerens)->with('UserChilderens', $UserChilderens);

    }
    public function edchilderen( childeren $childeren,UserChilderen $UserChilderen)
    {
        $users = User::select()->where('role', 'teacher')->orwhere('role', 'parent')->get();
        return view('childedit',['childeren'=>$childeren,'UserChilderen'=>$UserChilderen,'users'=>$users]);
    }
    public function getid( $userid)
    {
        $user = User::find($userid);
        return view('showuser',['user'=>$user]);
    }

}
