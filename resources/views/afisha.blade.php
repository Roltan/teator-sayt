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
                <button class="card" data-bs-toggle="modal" name="{{$item -> id}}" data-bs-target="#{{$item -> id}}" onclick="PremierList1(this)">
                    <img src="{{$item -> img}}" alt="" class="bg">
                    <div class="up">
                        <span class="time">{{$item -> time}}</span>
                        <span class="age">{{$item -> age}}</span>
                    </div>
                    <div class="down">
                        <span class="name">{{$item -> name}}</span> <br>
                        <span class="coment">{{$item -> coment}}</span>
                    </div>
                </button>

                <div class="modal fade" id="{{$item -> id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                        <div class="modal-content signup-modal">
                            <div class="modal-header">
                                <div class="href">
                                    <img src="{{url('/images/logo.png')}}" alt="">
                                    <a href="/">главная</a>
                                    <a href="/afisha">афиша</a>
                                    <a href="">новости</a>
                                    <a href="">о театре</a>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <div class="fromPremier">
                                    <div class="baner">
                                        <img src="{{url('/images/banerPremier.png')}}" alt="">
                                    </div>
                                    <div class="infoPremier" id="infoPremier{{$item -> id}}">
                                        <div class="headPremier">
                                            <div>
                                                <span class="name G">{{$item -> name}}</span>
                                                <span class="durationUP">длительность</span>
                                                <span class="ageUP">ограницения</span>
                                                
    
                                                <span class="durationDown G">2 часа 30 минут</span>
                                                <span class="ageDown G">{{$item -> age}}</span>
                                                <span class="coment">{{$item -> coment}}</span>
                                            </div>
                                            <button class="btn-primary buy" id="buyTicket{{$item -> id}}" name="{{$item -> id}}" onclick="buyTicket(this, 1)">купить билет</button>
                                        </div>
                                        <div class="buttonPremier">
                                            <button class="im im-in" id="premierBut1{{$item -> id}}" name="{{$item -> id}}" onclick="PremierList1(this)">О спектакле</button>
                                            <button class="im" id="premierBut2{{$item -> id}}" name="{{$item -> id}}" onclick="PremierList2(this)">Коллектив</button>
                                        </div>
                                        <div class="modal-text-1" id="premierText1{{$item -> id}}">
                                            14 декабря, в свой день рождения, Башкирский театр оперы и балета отдаст дань памяти и восхищения выдающемуся башкирскому и российскому композитору Загиру Исмагилову. В нынешнем году в республике отмечается 105-летний юбилей основоположника башкирской академической музыки. Праздничный концерт в его честь будет целиком посвящён творческому наследию композитора.
                                            Имя Загира Исмагилова – символ музыкальной культуры Башкортостана. С ним связано становления и развитие профессионального музыкального искусства республики; произведения композитора составляют золотой фонд башкирской академической музыки.
                                            Творчество Загира Исмагилова тесно переплетено с Башкирским театром оперы и балета. В настоящее время зрители могут познакомиться с тремя постановками по произведениям башкирского классика. Это созданный совместно с композитором Львом Степановым балет «Журавлиная песнь», опера «Салават Юлаев» и музыкальная комедия «Кодаса». В своё время в BashOpera шли его оперы «Кахым-Туря», «Шаура», «Волны Агидели», «Послы Урала» и «Акмулла», а также музыкальная комедия «Кодаса». Творчество Загира Исмагилова масштабно. Огромный вклад он внёс также в развитие камерно-вокальной, хоровой и инструментальной музыки.
                                            В праздничном вечере в честь 105-летия композитора будет представлена антология его театральных произведений – отрывки из опер, музыка из балетов, а также премьера сюиты из неизданного балета «Шонкар» в оркестровке Валерия Скобёлкина.
                                        </div>
                                        <div class="modal-text-2" id="premierText2{{$item -> id}}">
                                            <span>
                                                Диляра Идрисова
                                                Айтуган Вальмухаметов
                                                Артур Каипкулов
                                                Салават Киекбаев
                                                Идель Аралбаев
                                                Айгиз Гизатуллин
                                                Рим Рахимов
                                                Лилия Халикова
                                                Эльвина Ахметханова
                                                Алим Каюмов
                                                Светлана Аргинбаева
                                                Эльвира Алькина
    
                                                Дирижёр - Артём Макаров
                                            </span>
                                        </div>
                                    </div>
                                    <div class="buyPremier" id="buyPremier{{$item -> id}}">
                                        <div class="headPremier">
                                            <span>покупка билета</span>
                                            <span>600 рублей</span>
                                        </div>
                                        <div class="buyBody">
                                            <div class="mesta">
                                                <span class="b">Схема зала</span>
                                                <div class="rowMest">
                                                    <span>1</span>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                </div>
                                                <div class="rowMest">
                                                    <span>2</span>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                </div>
                                                <div class="rowMest">
                                                    <span>3</span>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                </div>
                                                <div class="rowMest">
                                                    <span>4</span>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                </div>
                                                <div class="rowMest">
                                                    <span>5</span>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                    <button></button>
                                                </div>
                                            </div>
                                            <span class="b">Выберите дату показа премьеры</span>
                                            <span class="time">14 Декабря, 19:30</span>
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
                                <span>Театр. Музыка. Любовь.</span>
                                <span class="b">Длительность:</span>
                                <span>2 часа 30 минут</span>
                                <span class="b">Ограничение:</span>
                                <span>12 +</span>
                                <span class="b">Время:</span>
                                <span>14 Декабря, 19:30</span>
                                <span class="b">Место:</span>
                                <span>1 ряд, 5 место</span>
                            </div>
                            <div class="modal-footer">
                                <button class="btn-primary">Оплатить билет</button>
                                <button type="button" class="btn-secondary" data-bs-toggle="modal" data-bs-target="#{{$item -> id}}">Отмена</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection