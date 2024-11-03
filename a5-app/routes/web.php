<?php

use App\Models\Fichero;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome')->with('ficheros', Fichero::all());
});

Route::post('/upload', function(Request $request){
    $request->validate(['uploaded_file' => 'file']);

    $file = new Fichero;
    $file->path = $request->file('uploaded_file')->store();
    $file->name = $request->file('uploaded_file')->getClientOriginalName();
    $file->user_id = Auth::user()->id;
    $file->save();

    return redirect('/');
})->can('upload', Fichero::class);


Route::get('/share', function(Request $request){
    $request->validate(['ficheros_ids' => 'required']);

    return view('share')
        ->with('ficheros', Fichero::find(array_keys($request->ficheros_ids)))
        ->with('users', User::all());
});

Route::get('/download/{fichero}', function(Fichero $fichero){
    return Storage::download($fichero->path);
})->can('download', 'fichero');








// -- LOGIN / LOGOUT
Route::get('login', function() {
    return view('login');
});

Route::post('login', function(Request $request){
    if (Auth::attempt($request->validate(['email' => ['required', 'email'], 'password' => ['required']]))) {
        $request->session()->regenerate();
        return redirect()->intended('/');
    }
    return back()->withErrors('The provided credentials do not match our records.');
});

Route::get('logout', function(Request $request){
    Auth::logout(); 
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});