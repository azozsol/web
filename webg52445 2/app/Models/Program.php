<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    public static function deleteCourse($course) {
        DB::table('program')
        ->where('course',$course)
        ->delete();
    }
}
