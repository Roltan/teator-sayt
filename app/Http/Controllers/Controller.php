<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home() {
        $premiere = DB::select('SELECT * FROM premiere ORDER BY time DESC');
        $news = DB::select('SELECT * FROM news ORDER BY time DESC');
        return view('home', ['premiere' => $premiere, 'news' => $news]);
    }

    public function afisha() {
        $premiere = DB::select('SELECT * FROM premiere ORDER BY time DESC');
        return view('afisha', ['premiere' => $premiere]);
    }

    public function news() {
        $news = DB::select('SELECT * FROM news ORDER BY time DESC');
        return view('news', ['news' => $news]);
    }

    public function signup(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $table = DB::table('signups')->get();
        
        foreach($table as $key){
            if($key->id == 1){
                if($key->email == $email){
                    if($key->password == $password){
                        return view('admin');
                    }
                }
            }
        }
    }

    public function Aafisha() {
        $premiere = DB::select('SELECT * FROM premiere ORDER BY time DESC');
        return view('admin-Afisha', ['premiere' => $premiere]);
    }

    public function Anews() {
        $news = DB::select('SELECT * FROM news ORDER BY time DESC');
        return view('admin-News', ['news' => $news]);
    }

    public function СhangeAfisha(Request $request){
        $id = $request->input('id');
        $img = $request->input('img');
        $time = $request->input('time');
        $age = $request->input('age');
        $name = $request->input('name');
        $coment = $request->input('coment');
        $baner = $request->input('baner');
        $length = $request->input('length');
        $text = $request->input('text');
        $colecktiv = $request->input('colecktiv');
        $price = $request->input('price');

        DB::select("UPDATE premiere SET `img`='$img',
                                        `time`='$time',
                                        `age`='$age',
                                        `name`='$name',
                                        `coment`='$coment',
                                        `baner`='$baner',
                                        `length`='$length',
                                        `text`='$text',
                                        `coleckiv`='$colecktiv',
                                        `price`='$price' 
                                        WHERE id=$id");

        $premiere = DB::select('SELECT * FROM premiere ORDER BY time DESC');
        return view('admin-Afisha', ['premiere' => $premiere]);
    }

    public function СhangeNews(Request $request){
        $id = $request->input('id');
        $img = $request->input('img');
        $name = $request->input('name');
        $time = $request->input('time');
        $depiction = $request->input('depiction');
        $text = $request->input('text');

        DB::select("UPDATE news SET `img`='$img',
                                    `name`='$name',
                                    `time`='$time',
                                    `depiction`='$depiction',
                                    `text`='$text'
                                    WHERE id=$id");

        $news = DB::select('SELECT * FROM news ORDER BY time DESC');
        return view('admin-News', ['news' => $news]);
    }
}
