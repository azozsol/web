<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manga extends Model
{
    use HasFactory;


    public static function getAllSerie()
    {
        return DB::table('series')
            ->select('*')
            ->get();
    }

    public static function insertManga($titre, $auteur, $nombre, $date, $couverteur, $fini)
    {

       return DB::table('series')
            ->insert([
                [
                    'titre' => $titre,
                    'auteur' => $auteur,
                    'nombre_volumes' => $nombre,
                    'couverture' => $couverteur,
                    'date_premiere_parution' => $date,
                    'serie_finie' => $fini,
                ]
            ]);
    }

    public static function getManga($id){
        return DB::table('personnages')
        ->select('personnages.id as perID','series.id as SerID','personnages.nom', 'personnages.type', 'personnages.description')
        ->join('series', 'personnages.serie_id','=','series.id')
        ->where('personnages.serie_id' ,'=',$id)
        ->get();
    }
}
