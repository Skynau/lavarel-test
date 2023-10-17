<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class VideogameController extends Controller
{
    public function topRated()
    {
        $top50VideoGames = DB::select(
            'SELECT *
            FROM `movies`
            WHERE `movie_type_id` = 7
            ORDER BY `rating` DESC
            LIMIT 50'
        );

        return view('games.top-rated', compact('top50VideoGames'));
    }
}