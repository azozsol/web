<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    //

    public function showAll()
    {

        $all = Manga::getAllSerie();

        return view('mainContent', ['all' => $all]);
    }

    public function showFomulaire()
    {
        return view('register');
    }
    public function registeManga(Request $request)
    {
        $fini = 0;
        if ($request->input('fini')) {
            $fini = 1;
        }
        $check = Manga::insertManga(
            $request->input('title'),
            $request->input('author'),
            $request->input('volumes'),
            $request->input('date'),
            $request->input('cover'),
            $fini
        );
        if ($check) {
            return $this->showFomulaire();
        }
    }

    public function showItem($id)
    {
        return json_decode(Manga::getManga($id));
    }
}
