<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Student;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function getStudent()
    {
        $student = Student::getStudentCred();
        return view('home', ['student' => $student]);
    }

    public function showProg($id)
    {
        $progame = Student::getProgbyStud($id);
        return $progame;
    }

    public function deleteCourseFromStudent($ele)
    {
        //$course = $_POST['course'];
        //$course ="hello course";
        var_dump($ele);
       // Program::deleteCourse($course);
    }
}
