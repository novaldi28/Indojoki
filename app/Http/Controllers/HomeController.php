<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function  index(){
        $role=Auth::user()->role;
        if ($role=='1'){
            return view('admin.home');
        }
        else {
            return view('welcome');
        }
    }

    public function shop(){
        $game=Game::paginate(5);
        return view('shop', compact('game'));
    }


    public function detail_games($id){
        $game=game::find($id);
        return view('ml', compact('game'));

    }

    public function indexx(){

    }


    public function tambah_pesanan(Request $request, $id){
        if(Auth::id()){
            $user=Auth::user();
            $game=game::find($id);
            $pesanan=new pesanan;
            $pesanan->nama=$user->name;
            $pesanan->email=$user->email;
            $pesanan->id_users=$user->id;

            $pesanan->nama_game=$game->nama_game;
            $pesanan->harga=$game->harga * $request->naik_rank;
            $pesanan->gambar=$game->gambar;
            $pesanan->id_games=$game->id;
            $pesanan->naik_rank=$request->naik_rank;
            $pesanan->save();
            return redirect()->back();
        }
        else{
            return redirect('login');
        }
    }
}
