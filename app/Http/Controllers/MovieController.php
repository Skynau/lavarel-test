<?php

namespace App\Http\Controllers;

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
}