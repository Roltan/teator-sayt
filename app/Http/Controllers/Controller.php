<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $halls = DB::select("SELECT * FROM halls");
        return view('afisha', ['premiere' => $premiere, 'halls' => $halls]);
    }

    public function news() {
        $news = DB::select('SELECT * FROM news ORDER BY time DESC');
        return view('news', ['news' => $news]);
    }

    public function signup(Request $request) {
        $name = $request->input('name');
        $password = $request->input('password');
        $table = DB::table('signups')->get();
        
        foreach($table as $key){
            if($key->id == 1){
                if($key->login == $name){
                    if($key->password == $password){
                        return view('admin');
                    }
                }
            }
        }

        $request -> validate([
            'name' => ['min:5','required'],
            'password' => ['min:5', 'required'],
        ]);
        if(Auth::attempt($request->only('name','password'))){
            $premiere = DB::select('SELECT * FROM premiere ORDER BY time DESC');
            $news = DB::select('SELECT * FROM news ORDER BY time DESC');
            return view('home', ['premiere' => $premiere, 'news' => $news]);
        }
        else{
            $premiere = DB::select('SELECT * FROM premiere ORDER BY time DESC');
            $news = DB::select('SELECT * FROM news ORDER BY time DESC');
            return view('home', ['premiere' => $premiere, 'news' => $news]);
        }
    }

    public function register(Request $request){
        $request -> validate([
            'name' => ['min:5','required'],
            'email' => ['min:5','required','email','unique:users'],
            'password' => ['min:5','confirmed','required'],
            'check' => ['accepted','required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        Auth::login($user);
        $premiere = DB::select('SELECT * FROM premiere ORDER BY time DESC');
        $news = DB::select('SELECT * FROM news ORDER BY time DESC');
        return view('home');


        
        // $login = $request -> input('login');
        // $email = $request -> input('email');
        // $password = $request -> input('password');
        // $buf = DB::select('SELECT id FROM signups ORDER BY id');
        // foreach ($buf as $i){
        //     $id = $i -> id + 1;
        //     break;
        // }
        // DB::select("INSERT INTO `signups`(`id`, `login`, `email`, `password`) VALUES ('$id','$login','$email','$password')");
        // DB::select("CREATE TABLE ")
    }

    public function logout(){
        Auth::logout();

        $premiere = DB::select('SELECT * FROM premiere ORDER BY time DESC');
        $news = DB::select('SELECT * FROM news ORDER BY time DESC');
        return view('home', ['premiere' => $premiere, 'news' => $news]);
    }

    public function LKab(){
        return view('LKab');
    }

    public function Aafisha() {
        $premiere = DB::select('SELECT * FROM premiere');
        return view('admin-Afisha', ['premiere' => $premiere]);
    }

    public function Anews() {
        $news = DB::select('SELECT * FROM news');
        return view('admin-News', ['news' => $news]);
    }

    public function СhangeAfisha(Request $request){
        $id = $request->input('id');
        switch(request('key')) {
            case 'add':
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
            break;
            case 'del':
                $buf = $id;
                DB::delete("DELETE FROM premiere WHERE id=$id");
                DB::delete("DELETE FROM halls WHERE hallID=$id");
            
                while (true) {
                    $idS = $id;
                    $id++;
                    if(DB::table('premiere')->where('id',$id)->exists()){
                        DB::select("UPDATE premiere SET `id`='$idS' WHERE id=$id");
                    }
                    else{
                        break;
                    }
                }

                $id = 14 * $buf;
                $idS = $id - 14;
                $hallID = $buf;
                $incr = 0;
                while (true) {
                    $id++;
                    $idS++;
                    if($incr == 14){
                        $incr = 0;
                        $hallID++;
                    }
                    else{
                        $incr++;
                    }
                    
                    if(DB::table('halls')->where('id',$id)->exists()){
                        DB::select("UPDATE halls SET `id`='$idS',`hallID`='$hallID' WHERE id=$id");
                    }
                    else{
                        break;
                    }
                }
            break;
        }

        $premiere = DB::select('SELECT * FROM premiere');
        return view('admin-Afisha', ['premiere' => $premiere]);
    }

    public function СhangeNews(Request $request){
        $id = $request->input('id');
        switch(request('key')) {
            case 'add':
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
            break;
            case 'del':
                DB::delete("DELETE FROM news WHERE id=$id");
            
                while (true) {
                    $idS = $id;
                    $id++;
                    if(DB::table('news')->where('id',$id)->exists()){
                        DB::select("UPDATE news SET `id`='$idS' WHERE id=$id");
                    }
                    else{
                        break;
                    }
                }
            break;
        }

        $news = DB::select('SELECT * FROM news');
        return view('admin-News', ['news' => $news]);
    }

    public function AddNews(Request $request){
        $id = $request->input('id');
        $img = $request->input('img');
        $name = $request->input('name');
        $time = $request->input('time');
        $depiction = $request->input('depiction');
        $text = $request->input('text');

        DB::select("INSERT INTO `news`(`id`, `img`, `name`, `time`, `depiction`, `text`) VALUES 
        ('$id','$img','$name','$time','$depiction','$text')");

        $news = DB::select('SELECT * FROM news');
        return view('admin-News', ['news' => $news]);
    }

    public function AddAfisha(Request $request){
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

        DB::select("INSERT INTO `premiere`(`id`, `img`, `time`, `age`, `name`, `coment`, `baner`, `length`, `text`, `coleckiv`, `price`) VALUES 
        ('$id','$img','$time','$age','$name','$coment','$baner','$length','$text','$colecktiv','$price')");

        
        $k = 14*($id-1);
        for($i = 1; $i <= 10; $i++){
            $k++;
            DB::select("INSERT INTO `halls`(`id`, `hallID`, `column`, `row1`, `row2`, `row3`, `row4`, `row5`) VALUES 
                ('$k','$id','$i','free','free','free','free','free')");
        }
        for($i = 11; $i <= 12; $i++){
            $k++;
            DB::select("INSERT INTO `halls`(`id`, `hallID`, `column`, `row1`, `row2`, `row3`, `row4`, `row5`) VALUES 
                ('$k','$id','$i','none','free','free','free','free')");
        }
        for($i = 13; $i <= 14; $i++){
            $k++;
            DB::select("INSERT INTO `halls`(`id`, `hallID`, `column`, `row1`, `row2`, `row3`, `row4`, `row5`) VALUES 
                ('$k','$id','$i','none','none','free','free','free')");
        }

        $premiere = DB::select('SELECT * FROM premiere');
        return view('admin-Afisha', ['premiere' => $premiere]);
    }
}
