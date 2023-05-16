<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;


class TeamController extends Controller
{

    public function index()
    {
        $teams = Team::all();
        return $teams;
    }


    public function create()
    {
        //

    }

    public function store(Request $request)
    {
        $team = new Team();
        $team->name = $request->name;
        $team->country_id  = $request->country_id ;
        $team->status = $request->status;

        $team->save();
    }

  
    public function show($id)
    {
        $team = Team::find($id);
        return $team;
    }

 
    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($request->id);
        $team->name = $request->name;
        $team->country_id  = $request->country_id ;
        $team->status = $request->status;
        $team->save();
        return $team;
    }

    public function destroy($id)
    {
        //
        $team = Team::destroy($id);

        return $team;
    }
}
