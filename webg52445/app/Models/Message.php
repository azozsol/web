<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Message extends Model
{
    use HasFactory;

    public static function getMessages($id)
    {
        return DB::table('messages')
            ->select('author', 'text', 'date')
            ->where('threadId', $id)
            ->get();
    }

    public static function getUser($login, $password)
    {
        $data = DB::table('users')
            ->select('login')
            ->where('login', '=', $login, 'AND', 'password', '=', $password)
            ->get();

        if (count($data) < 1) {
            return;
        } else {
            return $data[0]->login;
        }
    }

    public static function insertMess($login, $message, $thread)
    {
        DB::table('messages')
            ->insert([
                ['threadId' => $thread, 
                'author' => $login,
                'text'=> $message,
                'date' => date("Y-m-d")]
            ]);
    }
}
