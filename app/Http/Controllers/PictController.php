<?php

namespace App\Http\Controllers;

use App\Pict;
use Illuminate\Http\Request;

class PictController extends Controller
{
    public function index()
    {
        $picts = Pict::all()->sortByDesc('created_at');

        return view('picts.index', ['picts' => $picts]);
    }

    public function show(Pict $pict)
    {
       return view ('picts.show', ['pict' => $pict]);
    }
}
