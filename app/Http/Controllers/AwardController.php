<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function index()
    {
        $hello = 'world';
        $awards = [
            'Oscars',
            'Golden Globes',
            'Bafta',
            'Emmy'
        ];

        
        return view('awards.index', [
            'greeting' => $hello,
            'name' => 'Jan',
            'awards' => $awards
        ]);
    }
}
