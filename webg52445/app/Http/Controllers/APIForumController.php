<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class APIForumController extends Controller
{
    public function getAllMessages($id){
        $allMess = Message::getMessages($id);
        return response()->json($allMess);
    }

    public function insertMessage(Request $request, $thread){
        $name  = $request->input('name');
        $password = $request->input('password');

        $login = Message::getUser($name, $password);
        if(is_null($login)){
            echo "No login on this name !!!" ;
        }else{
            $message = $request->input('message');
            Message::insertMess($login, $message, $thread);
        }
        return view('login');

    }
}
