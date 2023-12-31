@extends('header')

@section('title')
    news
@endsection

@section('links')
    <link rel="stylesheet" href="{{asset('/css/home.css')}}">
    <link rel="stylesheet" href="{{asset('/css/news.css')}}">
@endsection

@section('mainContent')
    <div class="news">
        <div class="up">
            <span>Новости театра</span>
        </div>
        <div class="newStor">
            @foreach ($news as $item)
                <div class="new" data-bs-toggle="modal" data-bs-target="#{{$item -> id}}">
                    <img src="{{$item -> img}}">
                    <div>
                        <span class="name"><b>{{$item -> name}}</b></span>
                        <span class="time">{{$item -> time}}</span>
                        <span class="text">{{$item -> depiction}}</span>
                    </div>
                </div>

                <div class="modal fade" id="{{$item -> id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                        <div class="modal-content signup-modal">
                            <div class="modal-header">
                                <div class="href">
                                    <img src="{{url('/images/logo.png')}}" alt="">
                                    <a href="/">главная</a>
                                    <a href="/afisha">афиша</a>
                                    <a href="/news">новости</a>
                                    <a class="nav-link p-0 text-body-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3" onclick="inModal1()">о театре</a>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <div class="baner">
                                    <img src="{{$item -> img}}" alt="">
                                </div>
                                <div class="newsBody">
                                    <span class="time">{{$item -> time}}</span>
                                    <span class="name">{{$item -> name}}</span>
                                    <span class="text">{{$item -> text}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection