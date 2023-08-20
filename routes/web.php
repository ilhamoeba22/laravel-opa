<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;


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

Route::get('/',  fn()=> redirect(
    '/home'
)); 

Route::get('home', function () {
   
return view('Welcome');

});

// Route::get('About', function(Request $request){
//    dd($request);
// });

Route::get('login', function(){

    return view('login');
 })->middleware('guest');
 Route::post('login', function(Request $request){


if (Auth::attempt(['email'=>$request->input ('femail'),'password'=>$request->input ('fpassword')])) {
    $request->session()->regenerate();

    return redirect('/');
}

return back();
 });


 Route::get('register', function(){

    return view('register');
 })->middleware('guest');
 Route::post('register', function(Request $request){
    $name = $request->input('fname');
    $email = $request->input('femail');
    $password = $request->input('fpassword');

    
    DB::table('users')->insert(['name'=>$name,'email'=>$email,'password'=>bcrypt($password)]);

    return redirect('register');
 });
