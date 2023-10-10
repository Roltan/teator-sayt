@extends('header')

@section('title')
    Личный кабинет
@endsection

@section('mainContent')
    <div class="container">
        <form action="">
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
@endsection