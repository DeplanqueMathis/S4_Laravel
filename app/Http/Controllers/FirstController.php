<?php

namespace App\Http\Controllers;
use App\Models\Song;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
		$songs = Song::All();
		return view("firstcontroller.index", ['songs' => $songs]);
	}
	
	public function about(){
		return view("firstcontroller.about");
	}
	
	public function articles(){
		$articles = [1 => "Premier article", 2 => "Deuxième" , 3 => "Article numéro 3"];
		return view("firstcontroller.articles", ["articles" => $articles]);
	}
	
	public function article($id){
		return view("firstcontroller.article",["id" => $id]);
	}

	public function create(){
		return view("firstcontroller.create");
	}

	public function store(Request $request) {
		
		$request->validate([
            'title' => 'required|min:4|max:255',
            'song' => 'required|file|mimes:mp3,ogg'
		]);
		
        $song = new Song();
        $song->title = $request->input('title');
		$song->votes = 0;
		$song->user_id = Auth::id();
		$name = $request->file('song')->hashName();
		$request->file('song')->move("uploads/".Auth::id(), $name);
		$song->url = "/uploads/".Auth::id()."/".$name; 
		$song->save(); // INSERT INTO songs.....

        return redirect("/");

	}
	
	public function user($id){
		$user = User::findorfail($id);
		return view("firstcontroller.user", ["user" => $user]);
	}

	public function changeLike($id) {
        Auth::user()->ILikeThem()->toggle($id);
        return back();
    }
}
