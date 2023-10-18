<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    
    public function topRated()
    {
        $top50Movies = DB::select(
            'SELECT *
            FROM `movies`
            WHERE `votes_nr` > 25000 AND `movie_type_id` = 1
            ORDER BY `rating` DESC
            LIMIT 50'
        );
        
        return view('movies.top-rated', compact('top50Movies'));
    }

    public function shawshank()
    {
        $shawshank = DB::select(
            'SELECT *
            FROM `movies`
            WHERE `id` = 111161'
        );

        
        $cast = DB::select(
            'SELECT `movie_person`.`person_id`,
            `movie_person`.`description` AS `name`,
            `positions`.`name` AS `description`
            FROM `movie_person`
            LEFT JOIN `positions`
                ON `movie_person`.`position_id` = `positions`.`id`
            WHERE `movie_id` = 111161'
        );
        
        // dd($cast);
        return view('movies.detail', compact('shawshank', 'cast'));
    }

    public function index()
    {
        $movies = Movie::query()
                    ->orderBy('rating', 'desc')
                    ->limit(20)
                    ->where('votes_nr', '>=', 10000)
                    ->get();

        return view('movies.index', compact('movies'));
    }

    public function search()
    {
        $searchItem = $_GET['search'] ?? null;

        if ($searchItem == null) {
            return view('movies.search', compact('searchItem'));
        } else {    
            $search = DB::select(
                "SELECT `name`
                FROM `movies`
                WHERE `name` LIKE '%$searchItem%'"
                );
            // dd($search);
            return view('movies.search', compact('search', 'searchItem'));
        }
    }
}