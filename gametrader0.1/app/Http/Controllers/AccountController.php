<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;
use App\Game;
use Auth;

class AccountController extends Controller
{
    public function index(User $id) {

        $userId = Auth::user()->id;

        /*if ($userId == $id) {
            echo "goeien bal"        
        }
        else {
            echo "eeyh verkeerd account"
        }*/

        $games = DB::table('games')->where('userId', $userId)->get();

        $reviews = DB::table('reviews')->where('reviewUserId', $userId)->get();

        return view('account.index', compact('id', 'games', 'reviews'));
    }

    public function edit(User $id) {
        return view('account.edit', compact('id'));
    }

    public function update(Request $request, User $id) {

        $id->update($request->all());
        return back();

    }

    public function addGame()
    {
        return view('account.addgame');
    }

    public function storeGame(Request $request)
    {
        $game = new Game();

        $user = Auth::user();

        $game->name = $request->name;
        $game->genre = $request->genre;
        $game->console = $request->console;
        $game->userId = $user->id;

        $game->save();

        return back();
    }

    public function storeComment(Request $request){
        echo 'test';
    }
}
