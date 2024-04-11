<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Thread;

class ForumController extends Controller
{

    public function index(){
        return view('login');
    }

    public function getTitle()
    {
        $all = Thread::get();
        return view('home', ["all" => $all]);
    }

    public function getMessagesByThread($id){
        $allMess = Message::getMessages($id);
        return view('messages', ["allMess" => $allMess]);
    }

    public function getThread($id){
        $thread = Thread::getThreadId($id);
        return view('messages', ["thread" => $thread]);// à mettre dans model Thread
    }

}
