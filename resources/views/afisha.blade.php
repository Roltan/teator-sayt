@extends('header')

@section('title')
    afisha
@endsection

@section('links')
    <link rel="stylesheet" href="{{asset('/css/afisha.css')}}">
    <link rel="stylesheet" href="{{asset('/css/home.css')}}">
    <script defer src="/js/premierList.js"></script>
@endsection

@section('mainContent')
    <div class="premiere">
        <div class="up">
            <span>Афиша</span>
        </div>
        <div class="cards">
            @foreach ($premiere as $item)
                <div class="card" data-bs-toggle="modal" name="{{$item -> id}}" data-bs-target="#{{$item -> id}}" onclick="PremierList1(this)">
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
                                <div class="fromPremier">
                                    <div class="baner">
                                        <img src="{{$item -> baner}}" alt="">
                                    </div>
                                    <div class="infoPremier" id="infoPremier{{$item -> id}}">
                                        <div class="headPremier">
                                            <div>
                                                <span class="name G">{{$item -> name}}</span>
                                                <span class="durationUP">длительность</span>
                                                <span class="ageUP">ограницения</span>
                                                
    
                                                <span class="durationDown G">{{$item -> length}}</span>
                                                <span class="ageDown G">{{$item -> age}}</span>
                                                <span class="coment">{{$item -> coment}}</span>
                                            </div>
                                            @auth
                                                <button class="btn-primary buy" id="buyTicket{{$item -> id}}" name="{{$item -> id}}" onclick="buyTicket(this, 1)">купить билет</button>    
                                            @endauth
                                        </div>
                                        <div class="buttonPremier">
                                            <button class="im im-in" id="premierBut1{{$item -> id}}" name="{{$item -> id}}" onclick="PremierList1(this)">О спектакле</button>
                                            <button class="im" id="premierBut2{{$item -> id}}" name="{{$item -> id}}" onclick="PremierList2(this)">Коллектив</button>
                                        </div>
                                        <div class="modal-text-1" id="premierText1{{$item -> id}}">
                                            {{$item -> text}}
                                        </div>
                                        <div class="modal-text-2" style="display: none" id="premierText2{{$item -> id}}">
                                            <span>
                                                {{$item -> coleckiv}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="buyPremier" id="buyPremier{{$item -> id}}">
                                        <div class="headPremier">
                                            <span>покупка билета</span>
                                            <span>{{$item -> price}}</span>
                                        </div>
                                        <div class="buyBody">
                                            <div class="mesta">
                                                <span class="b">Схема зала</span>
                                                <div class="rowMest">
                                                    <span>1</span>
                                                    @foreach ($halls as $mesta)
                                                        @if ($mesta->hallID == $item->id)
                                                            @if ($mesta->row1 != 'none')
                                                                <button id="1{{$mesta->column}}" class="{{$mesta->row1}}" onclick="picChair(this)"></button>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <div class="rowMest">
                                                    <span>2</span>
                                                    @foreach ($halls as $mesta)
                                                        @if ($mesta->hallID == $item->id)
                                                            @if ($mesta->row2 != 'none')
                                                                <button id="2{{$mesta->column}}" class="{{$mesta->row2}}" onclick="picChair(this)"></button>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <div class="rowMest">
                                                    <span>3</span>
                                                    @foreach ($halls as $mesta)
                                                        @if ($mesta->hallID == $item->id)
                                                            <button id="3{{$mesta->column}}" class="{{$mesta->row3}}" onclick="picChair(this)"></button>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <div class="rowMest">
                                                    <span>4</span>
                                                    @foreach ($halls as $mesta)
                                                        @if ($mesta->hallID == $item->id)
                                                            <button id="4{{$mesta->column}}" class="{{$mesta->row4}}" onclick="picChair(this)"></button>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <div class="rowMest">
                                                    <span>5</span>
                                                    @foreach ($halls as $mesta)
                                                        @if ($mesta->hallID == $item->id)
                                                            <button id="5{{$mesta->column}}" class="{{$mesta->row5}}" onclick="picChair(this)"></button>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <span class="b">Выберите дату показа премьеры</span>
                                            <span class="time">{{$item -> time}}</span>
                                            <span>Внимание! Выбранные вами билеты должны быть оплачены банковской картой в течение 30 минут. Обязательно распечатайте приобретенный вами электронный билет. Его необходимо предъявить при входе в театр. </span>
                                            <div>
                                                <button class="btn-primary" data-bs-toggle="modal" data-bs-target="#pay{{$item -> id}}">Оплатить билет</button>
                                                <button class="btn-secondary" name="{{$item -> id}}" id="beck{{$item -> id}}" onclick="buyTicket(this, 2)">Отменить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="pay{{$item -> id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                        <div class="modal-content pay">
                            <div class="modal-header">
                                Оплата билета
                            </div>
                            <div class="modal-body">
                                <span class="b">Мероприятие:</span>
                                <span>{{$item -> name}}</span>
                                <span class="b">Длительность:</span>
                                <span>{{$item -> length}}</span>
                                <span class="b">Ограничение:</span>
                                <span>{{$item -> age}}</span>
                                <span class="b">Время:</span>
                                <span>{{$item -> time}}</span>
                                <span class="b">Место:</span>
                                <span class="chairText"></span>
                            </div>
                            <div class="modal-footer">
                                <form action="/buyTicket" method="POST">
                                    @csrf
                                    <input type="text" style="display: none" name="hallID" value="{{$item->id}}">
                                    <input type="text" style="display: none" class="payOutRow" name="row">
                                    <input type="text" style="display: none" class="payOutColumn" name="column">
                                    <button type="submit" class="btn-primary">Оплатить билет</button>
                                    <button type="button" class="btn-secondary" data-bs-toggle="modal" data-bs-target="#{{$item -> id}}">Отмена</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection