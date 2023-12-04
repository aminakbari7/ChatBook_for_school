<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\haverole;
use App\Http\Middleware\adminmiddleware;
use App\Http\Middleware\isteacher;
use App\Http\Middleware\isteacheroradmin;
use App\Http\Controllers\ChilderenController;
use App\Http\Controllers\postController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\UserChilderenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', [postController::class, 'listpost'] )->name('dashboard');
    //Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/posts', [postController::class, 'listpost'] )->name('posts');
});


Route::middleware([
    'auth','haverole',
])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');

    ////parent
    Route::get('/pchild', [UserChilderenController::class, 'pc'] )->name('pchild');
    Route::get('/pteacher', [UserChilderenController::class, 'pt'] )->name('pteacher');
//////teacher
Route::middleware('isteacher')->get('/tparent', [UserChilderenController::class, 'tp'])->name('tparent');
Route::middleware('isteacher')->get('/tchild', [UserChilderenController::class, 'tc'] )->name('tchild');





    Route::middleware('adminmiddleware')->get('/admins', [UserController::class, 'listadmin'] )->name('admins');
    Route::middleware('adminmiddleware')->get('/admins/edadmin/{user}', [UserController::class, 'edadmin'] )->name('admins.edadmin');
    Route::middleware('adminmiddleware')->get('/admins/destroya/{user}', [UserController::class, 'destroya'] )->name('admins.destroya');
    Route::middleware('adminmiddleware')->get('/admins/upadmin/{user}', [UserController::class, 'upadmin'] )->name('admins.upadmin');



    //post

    Route::middleware('isteacheroradmin')->get('/posts/addpost', [postController::class, 'addpost'] )->name('posts.addpost');
    Route::middleware('isteacheroradmin')->get('/posts/destroy/{post}', [postController::class, 'destroy'] )->name('posts.destroy');
    Route::middleware('isteacheroradmin')->get('/posts/edpost/{post}', [postController::class, 'edpost'] )->name('posts.edpost');
    Route::middleware('isteacheroradmin')->get('/posts/uppost/{post}', [postController::class, 'uppost'] )->name('posts.uppost');
    Route::get('/postshow/{post}', [postController::class, 'postshow'] )->name('postshow.postshow');



    //comment

    Route::get('/postshow/addc/{post}', [commentController::class, 'addc'] )->name('postshow.addc');
    Route::get('/postshow/usid/{usid}', [commentController::class, 'usid'] )->name('postshow.usid');
    Route::get('/postshow/edcomment/{comment}/{post}', [commentController::class, 'edcomment'] )->name('comments.edcomment');
    Route::get('/postshow/upcomment/{comment}/{post}', [commentController::class, 'upcomment'] )->name('comments.upcomment');
    Route::get('/postshow/destroyc/{comment}/', [commentController::class, 'destroyc'] )->name('comments.destroyc');







    ///teachers
    Route::middleware('adminmiddleware')->get('/teachers', [UserController::class, 'listteacher'] )->name('teachers');
    Route::middleware('adminmiddleware')->get('/teachers/destroy/{user}', [UserController::class, 'destroy'] )->name('teachers.destroy');
    Route::middleware('adminmiddleware')->get('/teachers/edteacher/{user}', [UserController::class, 'edteacher'] )->name('teachers.edteacher');
    Route::middleware('adminmiddleware')->get('/teachers/upteacher/{user}', [UserController::class, 'upteacher'] )->name('teachers.upteacher');
    Route::middleware('adminmiddleware')->get('/teachers/tsearch', [UserController::class, 'tsearch'] )->name('teachers.tsearch');


    ////parent
    Route::middleware('adminmiddleware')->get('/parents', [UserController::class, 'listparent'] )->name('parents');
    Route::middleware('adminmiddleware')->get('/parents/destroyp/{user}', [UserController::class, 'destroyp'] )->name('parents.destroyp');
    Route::middleware('adminmiddleware')->get('/parents/edparent/{user}', [UserController::class, 'edparent'] )->name('parents.edparent');
    Route::middleware('adminmiddleware')->get('/parents/upparent/{user}', [UserController::class, 'upparent'] )->name('parents.upparent');
    Route::middleware('adminmiddleware')->get('/parents/psearch', [UserController::class, 'psearch'] )->name('parents.psearch');

    ////withoutrols
    Route::middleware('adminmiddleware')->get('/withoutrolls', [UserController::class, 'listwithoutroll'] )->name('withoutrolls');
    Route::middleware('adminmiddleware')->get('/withoutrolls/destroyw/{user}', [UserController::class, 'destroyw'] )->name('withoutrolls.destroyw');
    Route::middleware('adminmiddleware')->get('/withoutrolls/addparent/{user}', [UserController::class, 'addparent'] )->name('withoutrolls.addparent');
    Route::middleware('adminmiddleware')->get('/withoutrolls/addteacher/{user}', [UserController::class, 'addteacher'] )->name('withoutrolls.addteachert');
    Route::middleware('adminmiddleware')->get('/withoutrolls/addadmin/{user}', [UserController::class, 'addadmin'] )->name('withoutrolls.addadmint');
    Route::middleware('adminmiddleware')->get('/withoutrolls', [UserController::class, 'listwithoutroll'] )->name('withoutrolls');
    Route::middleware('adminmiddleware')->get('/withoutrolls/wsearch', [UserController::class, 'wsearch'] )->name('Childerens.wsearch');

    ///childeren
    Route::middleware('adminmiddleware')->get('/Childerens', [ChilderenController::class, 'listChilderen'] )->name('Childerens');
    Route::middleware('adminmiddleware')->get('/Childerens/search', [ChilderenController::class, 'search'] )->name('Childerens.search');
    Route::middleware('adminmiddleware')->get('/Childerens/destroyc/{childeren}/{UserChilderen}', [ChilderenController::class, 'destroyc'] )->name('Childerens.destroyc');
    Route::middleware('adminmiddleware')->get('/Childerens/edchilderen/{childeren}/{UserChilderen}', [ChilderenController::class, 'edchilderen'] )->name('Childerens.edchilderen');
    Route::middleware('adminmiddleware')->get('/Childerens/upchilderen/{childeren}/{UserChilderen}', [ChilderenController::class, 'upchilderen'] )->name('Childerens.upchilderen');
    Route::middleware('adminmiddleware')->get('/Childerens/{uid}', [ChilderenController::class, 'getid'] )->name('Childerens.getid');


    Route::middleware('adminmiddleware')->get('/createchild', [ChilderenController::class, 'createchild'] )->name('createchild');
    Route::middleware('adminmiddleware')->get('/createchild/addchild', [ChilderenController::class, 'addchild'] )->name('createchild.addchild');


});


//Route::get('/teachers', function () {return view('teachers');})->name('teachers');
