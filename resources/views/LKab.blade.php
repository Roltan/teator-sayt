@extends('header')

@section('title')
    Личный кабинет
@endsection

@section('links')
    <link rel="stylesheet" href="{{asset('/css/LKab.css')}}">
@endsection

@section('mainContent')
    <div class="container">
        <div class="ac">
            <span>Данные вашего акаунта</span>

            <form action="">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Логин</label>
                    <input type="text" name="name" class="form-control" value="{{$name}}" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">Почта</label>
                    <input type="email" name="email" class="form-control" value="{{$email}}" disabled>
                </div>
            </form>
        </div>

        <div class="tickets">
            @if ($user == "empty")
                <div class="none-ticket">
                    <span>Вы ещё не покупали билеты</span>
                    <a href="/afisha" class="btn-primary">выбрать предстовлеие</a>
                </div>
            @else
                @foreach ($user as $item)
                    <div class="ticket">
                        <img src="{{$item->baner}}" alt="">
                        <div>
                            <span>{{$item->nameMer}}</span>
                            <span>{{$item->time}}</span>
                            <span class="chair">{{$item->row}} ряд {{$item->column}} место</span>
                        </div>
                    </div> 
                @endforeach
            @endif
        </div>
    </div>
@endsection