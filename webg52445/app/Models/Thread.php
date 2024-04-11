<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Thread extends Model
{
    use HasFactory;

    public static function get()
    {
        return DB::table('threads')
            ->select('*')
            ->get();
    }

    public static function getThreadId($id)
    {
        $data =  DB::table('threads')
            ->select('id')
            ->where('id', $id)
            ->get();
        return $data[0]->id;
    }
}
