<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Sportmonks\Soccer\SoccerApi;

class HomeController extends Controller
{
    public function index()
    {
        $seasonId = 21644;

        $result = SoccerApi::teams()->getBySeasonId($seasonId);


//     dd($result->data[0]);


        return view('home', [
            'teams' => $result->data,
        ]);
    }
}
