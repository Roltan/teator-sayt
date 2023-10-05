@extends('admin')

@section('title')
    adminPanel
@endsection

@section('mainContent')
    <div class="head">
        <span>Упровление мероприятиями</span>
    </div>
    <div class="main">
        <div class="list">
            <span class="up">список мероприятий</span>
            <span class="name" id="0" onclick="lever(this)">Новее мероприятие</span>
            @foreach ($premiere as $item)
                <span class="name" id="{{$item -> id}}" onclick="lever(this)">{{$item -> name}}</span>
            @endforeach
        </div>
        <div class="panel">
            <div class="up">
                <span>Создание мероприятие</span>
                <span class="r">/</span>
                <span>Редактирование мероприятие</span>
            </div>
            <?php $i=0 ?>
            @foreach ($premiere as $item)
                <?php $i++ ?>
                <form method="POST" action="/admin/СhangeAfisha" id="form{{$item -> id}}" class="form" style="display: none">
                    @csrf
                    <input type="text" style="display: none" name="id" value="{{$item -> id}}">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Загаловок:</label>
                        <input type="text" class="form-control" name="name" value="{{$item -> name}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Подзагаловое:</label>
                        <textarea class="form-control" name="text">{{$item -> text}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Описание:</label>
                        <textarea class="form-control" name="coment">{{$item -> coment}}"</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Время:</label>
                        <input type="text" class="form-control" name="time" value="{{$item -> time}}">    
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Длительность:</label>
                        <input type="text" class="form-control" name="length" value="{{$item -> length}}">    
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Коллектив:</label>
                        <textarea class="form-control" name="coleckiv">{{$item -> coleckiv}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Ограничение:</label>
                        <input type="text" class="form-control" name="age" value="{{$item -> age}}">    
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Цена:</label>
                        <input type="text" class="form-control" name="price" value="{{$item -> price}}">    
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Изображение карточки:</label>
                        <input type="text" class="form-control" name="img" value="{{$item -> img}}">    
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Изображение баннера:</label>
                        <input type="text" class="form-control" name="baner" value="{{$item -> baner}}">    
                    </div>
                    <div class="btn-cont">
                        <button type="submit" class="btn btn-primary" name="key" value="add">Изменить</button>
                        <button type="submit" class="btn-secondary" name="key" value="del">Удалить</button>
                    </div>
                </form>
            @endforeach
            <?php $i++ ?>
            <form method="POST" action="/admin/AddAfisha" id="emptyForm" class="form">
                @csrf
                <input type="text" style="display: none" name="id" value="{{$i}}">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Загаловок:</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Подзагаловое:</label>
                    <textarea class="form-control" name="text"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Описание:</label>
                    <textarea class="form-control" name="coment"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Время:</label>
                    <input type="text" class="form-control" name="time">    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Длительность:</label>
                    <input type="text" class="form-control" name="length">    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Коллектив:</label>
                    <textarea class="form-control" name="coleckiv"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ограничение:</label>
                    <input type="text" class="form-control" name="age">    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Цена:</label>
                    <input type="text" class="form-control" name="price">    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Изображение карточки:</label>
                    <input type="text" class="form-control" name="img">    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Изображение баннера:</label>
                    <input type="text" class="form-control" name="baner">    
                </div>
                <div class="btn-cont">
                    <button type="submit" class="btn btn-primary">Добавить</button>
                    <button type="button" class="btn-secondary" data-bs-dismiss="modal">Удалить</button>
                </div>
            </form>
        </div>
    </div>
@endsection