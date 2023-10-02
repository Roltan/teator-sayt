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
            <span class="name" id="0" onclick="lever(this)">Новая новость</span>
            @foreach ($news as $item)
                <span class="name" id="{{$item -> id}}" onclick="lever(this)">{{$item -> name}}</span>
            @endforeach
        </div>
        <div class="panel">
            <div class="up">
                <span>Создание новости</span>
                <span class="r">/</span>
                <span>Редактирование новости</span>
            </div>
            <form method="POST" action="/admin/AddNews" id="emptyForm" class="form" class="form">
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
            @foreach ($news as $item)
                <form method="POST" action="/admin/СhangeNews" id="form{{$item -> id}}" class="form" style="display: none">
                    @csrf
                    <input type="text" style="display: none" name="id" value="{{$item -> id}}">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Загаловок:</label>
                        <input type="text" class="form-control" name="name" value="{{$item -> name}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Описание</label>
                        <textarea class="form-control" name="depiction">{{$item -> depiction}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Текст</label>
                        <textarea class="form-control" name="text">{{$item -> text}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Изображение:</label>
                        <input type="text" class="form-control" name="img" value="{{$item -> img}}">    
                    </div>
                    <div class="btn-cont">
                        <button type="submit" class="btn btn-primary">Изменить</button>
                        <button type="button" class="btn-secondary" data-bs-dismiss="modal">Удалить</button>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection