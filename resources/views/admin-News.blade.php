@extends('admin')

@section('title')
    adminPanel
@endsection

@section('mainContent')
    <div class="head">
        <span>Упровление новостями</span>
    </div>
    <div class="main">
        <div class="list">
            <span class="up">список новостей</span>
            @foreach ($news as $item)
                <span class="name">{{$item -> name}}</span>
            @endforeach
        </div>
        <div class="panel">
            <div class="up">
                <span>Создание новости</span>
                <span class="r">/</span>
                <span>Редактирование новости</span>
            </div>
            <form method="POST" action="">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Загаловок:</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Описание</label>
                    <textarea class="form-control" name="depiction"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Текст</label>
                    <textarea class="form-control" name="text"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Изображение:</label>
                    <input type="text" class="form-control" name="img">    
                </div>
                <div class="btn-cont">
                    <button type="submit" class="btn btn-primary">Добавить</button>
                    <button type="button" class="btn-secondary" data-bs-dismiss="modal">Удалить</button>
                </div>
            </form>
        </div>
    </div>
@endsection