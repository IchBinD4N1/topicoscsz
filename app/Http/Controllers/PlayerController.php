<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Http\Request;


class PlayerController extends Controller
{

    public function index()
    {
        $players = Player::all();
        return $players;
    }


    public function create()
    {
        //

    }



    public function store(Request $request)
    {
        $player = new Player();
        $player->nickname = $request->nickname;
        $player->name = $request->name;
        $player->team_id  = $request->team_id ;
        $player->country_id  = $request->country_id ;
        $player->age = $request->age;
        $player->status = $request->status;

        $player->save();
    }

  
    public function show($id)
    {
        $player = Player::find($id);
        return $player;
    }

 
    public function update(Request $request, $id)
    {
        $player = Player::findOrFail($request->id);
        $player->nickname = $request->nickname;
        $player->name = $request->name;
        $player->team_id  = $request->team_id ;
        $player->country_id  = $request->country_id ;
        $player->age = $request->age;
        $player->status = $request->status;
        $player->save();
        return $player;
    }

    public function destroy($id)
    {
        //
        $player = Player::destroy($id);

        return $player;
    }
}
