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
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Почта</label>
                    <input type="email" name="email" class="form-control">
                </div>
            </form>
        </div>

        <div class="tickets">
            <div class="none-ticket">
                <span>Вы ещё не покупали билеты</span>
                <a href="/afisha" class="btn-primary">выбрать предстовлеие</a>
            </div>
            {{-- <div class="ticket">
                <img src="http://teator-sayt/images/banerPremier.png" alt="">
                <div>
                    <span>Театр. Музыка. Любовь.</span>
                    <span>14 декабря, 19:30</span>
                    <span class="chair">1 ряд 1 место</span>
                </div>
            </div>
            <div class="ticket">
                <img src="http://teator-sayt/images/banerPremier.png" alt="">
                <div>
                    <span>Театр. Музыка. Любовь.</span>
                    <span>14 декабря, 19:30</span>
                    <span class="chair">1 ряд 2 место</span>
                </div>
            </div> --}}
        </div>
    </div>
@endsection