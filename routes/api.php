<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['email'],
        'password' => [],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        // return redirect()->intended('dashboard');

        return response()->json(['message' => 'your lucky man']);
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
});


Route::post('logout', function (Request $request) {
    Auth::guard('api')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return response()->noContent();
});
