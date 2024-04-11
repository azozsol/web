<?php

namespace App\Http\Controllers;

use App\Models\repositories;

class ProController extends Controller
{
    public function getRepo(){
        $all = repositories::getAll();
        return view('home', ['all' => $all]);
       // return view('home', compact("all"));
    }

    public function details($id){
        $depot = repositories::getRepoDet($id);
        return $depot;
        //echo json_encode($depot);
    }

    public function index(){
        $repositorie = new repositories();
        $result = $repositorie->getAllRepo();
        return $result;
        //return json_decode($result);
    }
}
