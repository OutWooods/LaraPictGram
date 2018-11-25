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
        Pict::create([
            'question' => request('question'),
            'answer' => request('answer'),
        ]);

        return redirect('/picts');
    }

    public function edit($id)
    {
        $pict = Pict::findOrFail($id);

        return view('picts.edit', compact('pict'));
    }

    public function update($id)
    {
        Pict::findOrFail($id)
            ->update([
                'question' => request('question'),
                'answer' => request('answer'),
            ]);

        return redirect("/picts/{$id}");
    }

    public function destroy(Pict $pict)
    {
        $pict->delete();

        return redirect('/picts');
    }
}
