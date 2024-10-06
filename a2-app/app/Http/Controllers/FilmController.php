<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Models\Film;

use function Laravel\Prompts\error;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index')->with('films', Film::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {
        Film::create($request->validated());

        return redirect('/films');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return view('show')->with('film', $film);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        return view('edit')->with('film', $film);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {

        Film::where('id', $film->id)->update($request->validated());

        return redirect('/films');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        Film::destroy($film->id);
        return redirect('/films')->with('success', 'Se ha eliminado la pelicula');
    }
}
