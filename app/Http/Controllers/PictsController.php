<?php

namespace App\Http\Controllers;

use App\Pict;
use App\Http\Requests\PictStoreRequest;
use App\Http\Requests\PictUpdateRequest;

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

    public function store(PictStoreRequest $request)
    {
        Pict::create($request->validated());

        return redirect('/picts');
    }

    public function edit(Pict $pict)
    {
        return view('picts.edit', compact('pict'));
    }

    public function update(Pict $pict, PictUpdateRequest $request)
    {
        $pict->update($request->validated());

        return redirect("/picts/{$pict->id}");
    }

    public function destroy(Pict $pict)
    {
        $pict->delete();

        return redirect('/picts');
    }
}
