<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::all();
        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        // o laravel usa "." ao invés de "/" para referenciar diretórios
        // para referenciar o arquivo "create" dentro do diretório "series"
        return view('series.create');
    }

    public function store(Request $request)
    {
        // salvando dados no banco utilizando o eloquentORM
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');
    }
}
