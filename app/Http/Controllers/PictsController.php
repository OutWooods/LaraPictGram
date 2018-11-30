<?php

namespace App\Http\Controllers;

use App\Pict;

class PictsController extends Controller
{
    public function index()
    {
        $picts = Pict::all()->sortByDesc('created_at');

        return view('picts.index', compact('picts'));
    }

    public function show(Pict $pict)
    {
        return view('picts.show', compact('pict'));
    }

    public function create()
    {
        return view('picts.create');
    }

    public function store()
    {
        request()->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        Pict::create(request(['question', 'answer']));

        return redirect('/picts');
    }

    public function edit(Pict $pict)
    {
        return view('picts.edit', compact('pict'));
    }

    public function update(Pict $pict)
    {
        $pict->update(request(['question', 'answer']));

        return redirect("/picts/{$pict->id}");
    }

    public function destroy(Pict $pict)
    {
        $pict->delete();

        return redirect('/picts');
    }
}
