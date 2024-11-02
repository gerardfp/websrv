<?php

use App\Http\Controllers\ProfileController;
use App\Http\Requests\ComentarioStoreRequest;
use App\Http\Requests\NoticiaStoreRequest;
use App\Http\Requests\VotoStoreRequest;
use App\Models\Comentario;
use App\Models\Noticia;
use App\Models\Voto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->with('noticias', Noticia::paginate(30));
});



Route::get('/noticia/{noticia}', function(Noticia $noticia) {
    return view('show')->with(compact('noticia'));
});


Route::middleware('auth')->group(function () {
    Route::get('/enviar', function() {
        return view('enviar');
    });


    Route::post('/store', function(NoticiaStoreRequest $noticiaStoreRequest){
        $noticia = new Noticia;
        $noticia->fill($noticiaStoreRequest->validated());
        $noticia->user_id = Auth::id();
        $noticia->save();

        return redirect('/noticias');
    });

    Route::post('/vote/{noticia_id}', function($noticia_id) {
        $voto = new Voto;
        $voto->noticia_id = $noticia_id;
        $voto->user_id = Auth::user()->id;
        $voto->save();

        return redirect()->back();
    });


    Route::post('/comment/{noticia_id}', function(ComentarioStoreRequest $comentarioStoreRequest, string $noticia_id){
        $comentario = new Comentario;
        $comentario->text = $comentarioStoreRequest->text;
        $comentario->noticia_id = $noticia_id;
        $comentario->user_id = Auth::user()->id;
        $comentario->comentario_id = $comentarioStoreRequest->comentario_id;
        $comentario->save();

        return redirect()->back();
    });



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
