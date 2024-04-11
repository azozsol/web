<?php

namespace App\Models;

use PDO;
use PDOException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class repositories extends Model
{
    use HasFactory;

    private  $pdo;

    public function __construct()
    {
        //
        try {
            $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=commitsDepot', 'root', '');
            //$this->pdo = DB::connection()->getPdo();
        } catch (PDOException $e) {
            echo 'Connection error: ' . $e->getMessage();
        }
    }

    public function getAllRepo()
    {
        $sql = "SELECT * FROM repositories;";
        $result = $this->pdo->query($sql);
        return $result->fetchall();
    }

    public static function getAll()
    {
        return DB::table('repositories')
            ->select('repositories.id as id', 'repositories.name as name', 'contributors.name as contr', DB::raw("count(commits.id) as count"))
            ->leftjoin('commits', 'repositories.id', '=', 'commits.repository_id')
            ->leftjoin('contributors', 'repositories.contributor_login', '=', 'contributors.login')
            ->groupBy('repositories.id', 'repositories.name', 'contributors.name')
            ->get();
    }

    public static function getRepoDet($id)
    {
        $details =  DB::table('repositories')
            ->select('repositories.name as name', 'contributors.name as contr', 'commits.message as message', 'commits.date as date')
            ->join('commits', 'repositories.id', '=', 'commits.repository_id')
            ->join('contributors', 'repositories.contributor_login', '=', 'contributors.login')
            ->where('repositories.id', '=', $id)
            ->get();
        return json_decode($details);
    }
}
