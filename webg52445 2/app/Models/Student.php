<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    public static function getStudentCred()
    {
        $credits = DB::table('students')
            ->select('name', DB::raw('sum(courses.credits) as credits'))
            ->leftjoin('programs', 'students.id', '=', 'programs.student')
            ->leftjoin('courses', 'programs.course', '=', 'courses.id')
            ->groupBy('name')
            ->get();
            if(is_null($credits)){
                return 0;
            }
        return $credits;
    }

    public static function getProgbyStud($id)
    {
        $name = Student::getId($id);
        return DB::table('programs')
            ->select('courses.id', 'courses.title', 'courses.credits')
            ->join('courses', 'programs.course', '=', 'courses.id')
            ->where('programs.student', $name)
            ->get();
    }

    public static function getId($name)
    {
        $nameStudent = DB::table('students')
            ->select('id')
            ->where('students.name', 'like', $name)
            ->get();

        return $nameStudent[0]->id;
    }
}
