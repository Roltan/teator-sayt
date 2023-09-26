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
        $premiere = DB::table('premiere')->get();
        $news = DB::table('news')->get();
        return view('home', ['premiere' => $premiere, 'news' => $news]);
    }

    public function afisha() {
        $premiere = DB::table('premiere')->get();
        return view('afisha', ['premiere' => $premiere]);
    }

    public function news() {
        $news = DB::table('news')->get();
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
        $premiere = DB::table('premiere')->get();
        return view('admin-Afisha', ['premiere' => $premiere]);
    }

    public function Anews() {
        $news = DB::table('news')->get();
        return view('admin-News', ['news' => $news]);
    }
}
