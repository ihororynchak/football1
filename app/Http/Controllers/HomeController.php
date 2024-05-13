<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Sportmonks\Soccer\SoccerApi;

class HomeController extends Controller
{
    private $seasonId = 21644;

    public function index()
    {
        $teams = SoccerApi::teams()
            ->setIncludes(['country', 'trophies', 'coach', 'league'])
            ->getBySeasonId($this->seasonId);

//        dd($teams->data[0]);


        return view('home', [
            'teams' => $teams->data,
        ]);
    }


    public function teamSquad($id)
    {
        $squad = SoccerApi::teamSquads()
            ->setIncludes(['player'])
            ->getByTeamAndSeason($id, $this->seasonId);


        $team = SoccerApi::teams()
            ->setIncludes(['country', 'trophies', 'rivals', 'coach', 'stats', 'venue', 'league', 'activeSeasons'])
            ->getById($id);


        return view('teamSquad', [
            'team' => $team->data,
            'squad' => $squad->data,
        ]);
    }
}
