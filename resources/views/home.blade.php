@extends('header')

@section('title')
    главная
@endsection

@section('links')
    <link rel="stylesheet" href="{{asset('/css/home.css')}}">
@endsection

@section('mainContent')
    <div class="inno">
        <span>Башкирский государственный <br>
            театр оперы и балета</span>
    </div>

    <div class="infoBar">
        <div class="info">
            <span>дата основания</span>
            <span>репертуар</span>
            <span>абсолютно для всех</span>

            <span class="info-text">1938 г.</span>
            <span class="info-text">72 произведения</span>
            <span class="info-text">0+</span>
        </div>
        <a href="" class="exit" data-bs-toggle="modal" data-bs-target="#exampleModal3" onclick="inModal1()">узнать подробнее</a>
    </div>
    
    <div class="premiere">
        <div class="up">
            <span>Ближайшие премьеры</span>
            <span><a href="/afisha">Показать все <img src="{{url('images/arrow.png')}}" alt=""></a></span>
        </div>
        <div class="cards">
            @foreach ($premiere as $item)
                <div class="card">
                    <img src="{{$item -> img}}" alt="" class="bg">
                    <div class="up">
                        <span class="time">{{$item -> time}}</span>
                        <span class="age">{{$item -> age}}</span>
                    </div>
                    <div class="down">
                        <span class="name">{{$item -> name}}</span> <br>
                        <span class="coment">{{$item -> coment}}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="navigation">
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal3" onclick="inModal3()">Правила поведения</a>
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal3" onclick="inModal4()">Схема зала</a>
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal3" onclick="inModal1()">История театра</a>
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal3" onclick="inModal2()">Коллектив театра</a>
    </div>

    <div class="news">
        <div class="up">
            <span>Новости театра</span>
            <span><a href="">Показать все <img src="{{url('images/arrow.png')}}" alt=""></a></span>
        </div>
        <div class="newStor">
            @foreach ($news as $item)
                <div class="new">
                    <img src="{{$item -> img}}">
                    <div>
                        <span class="name"><b>{{$item -> name}}</b></span>
                        <span class="time">{{$item -> time}}</span>
                        <span class="text">{{$item -> text}}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection