<?php

namespace App\Http\Controllers;

use App\Pict;

class PictController extends Controller
{
    public function index()
    {
        $picts = Pict::all()->sortByDesc('created_at');

        return view('picts.index', ['picts' => $picts]);
    }

    public function show(Pict $pict)
    {
       return view('picts.show', ['pict' => $pict]);
    }

    public function create()
    {
        return view('picts.create');
    }

    public function store()
    {
        Pict::create([
            'question' => request('question'),
            'answer' => request('answer'),
        ]);

        return redirect()->action('PictController@index');
    }

    public function delete(Pict $pict)
    {
        $pict->delete();

        return redirect()->action('PictController@index');
    }
}
