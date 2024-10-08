<?php

namespace App\Http\Controllers;


use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index()
    {
        return view('index')->with('noticias', Noticia::paginate(15));
    }

    public function search(string $term)
    {
        return view('index')->with('noticias', Noticia::where('titulo', 'like', "%$term%")->paginate(15));
    }

    public function show(Noticia $noticia)
    {
        return view('show')->with('noticia', $noticia);
    }

}
