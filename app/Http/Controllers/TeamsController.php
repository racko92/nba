<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=> 'index']);
    }

    public function index()
    {
        $teams = Team::all();

        return view('teams.index', ['teams' => $teams]);
    }
    public function show($id)
    {
        $team = Team::findOrFail($id);

        return view('teams.show', [
            'team'=> $team
        ]);
    }
}
