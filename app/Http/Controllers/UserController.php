<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Chatify\Traits\UUID;

class UserController extends Controller
{
    public function listadmin()
    {
        $admins = User::select()->where('role', 'admin')->get();
		return view('admins',['admins'=>$admins]);
    }
    public function listteacher()
    {
        $teachers = User::select()->where('role', 'teacher')->get();
		return view('teachers',['teachers'=>$teachers]);
    }
    public function listparent()
    {
        $parents = User::select()->where('role', 'parent')->get();
		return view('parents',['parents'=>$parents]);
    }
    public function listwithoutroll()
    {
        $users = User::select()->where('role', '0')->get();
        return view('withoutrolls',['users'=>$users]);
    }
    public function destroy(user $user)
    {
        $user->delete();
		$teachers = User::select()->where('role', 'teacher')->get();
		return view('teachers',['teachers'=>$teachers]);
    }
    public function destroyp(user $user)
    {
        $user->delete();
        $parents = User::select()->where('role', 'parent')->get();
		return view('parents',['parents'=>$parents]);
    }
    public function destroyw(user $user)
    {
        $user->delete();
		$users = User::select()->where('role', '0')->get();
        return view('withoutrolls',['users'=>$users]);
    }
    public function addparent(user $user)
    {

		$user->role='parent';
        $user->save();
        $users = User::select()->where('role', '0')->get();
        return view('withoutrolls',['users'=>$users]);
    }
    public function addteacher(user $user)
    {

		$user->role='teacher';
        $user->save();
        $users = User::select()->where('role', '0')->get();
        return view('withoutrolls',['users'=>$users]);
    }
    public function addadmin(user $user)
    {

		$user->role='admin';
        $user->save();
        $users = User::select()->where('role', '0')->get();
        return view('withoutrolls',['users'=>$users]);
    }
    public function upteacher( request $request  ,user $user)
    {
        $request->validate([
			'name' => 'string|required',
			'email' => 'string|required',
            'phone' => 'string|required',
            'role' => 'string|required',
		]);

		$name = $request->name;
        $email = $request->email;
        $phone= $request->phone;
        $role= $request->role;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->role=$request->role;

		//$user->update(['name'=>$name, 'email'=>$email, 'phone'=>$phone, 'role'=>$role]);
        $user->save();
		$teachers = User::select()->where('role', 'teacher')->get();
		return view('teachers',['teachers'=>$teachers]);

    }
    public function edteacher( user $user)
    {
        return view('teacheredit',['user'=>$user]);
    }
    //////////parent
    public function upparent( request $request  ,user $user)
    {
        $request->validate([
			'name' => 'string|required',
			'email' => 'string|required',
            'phone' => 'string|required',
            'role' => 'string|required',
		]);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->role=$request->role;
        $user->save();
		$parents = User::select()->where('role', 'parent')->get();
		return view('parents',['parents'=>$parents]);

    }
    public function edparent( user $user)
    {
        return view('parentedit',['user'=>$user]);
    }

    public function psearch(request $request)
    {
        $parents = user::select()->where('id','LIKE',"%$request->x%")
                                        ->orwhere('name','LIKE',"%$request->x%")->get();
                                        return view('parents',['parents'=>$parents]);
    }

    public function tsearch(request $request)
    {
        $teachers = user::select()->where('id','LIKE',"%$request->x%")
                                        ->orwhere('name','LIKE',"%$request->x%")->get();
                                        return view('teachers',['teachers'=>$teachers]);
    }
    public function edadmin( user $user)
    {
        $admins=$user;
        return view('edadmin',['admin'=>$admins]);
    }
    public function destroya(user $user)
    {
        $user->delete();
		$admins = User::select()->where('role', 'admin')->get();
        return view('admins',['admins'=>$admins]);
    }
    public function upadmin( request $request  ,user $user)
    {
        $request->validate([
			'name' => 'string|required',
			'email' => 'string|required',
            'phone' => 'string|required',
            'role' => 'string|required',
		]);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->role=$request->role;
        $user->save();
		$admins = User::select()->where('role', 'admin')->get();
		return view('admins',['admins'=>$admins]);

    }
    public function wsearch(request $request)
    {
        $users = user::select()->where('id','LIKE',"%$request->x%")
                                ->orwhere('name','LIKE',"%$request->x%")->get();
                                 return view('withoutrolls',['users'=>$users]);
    }
}
