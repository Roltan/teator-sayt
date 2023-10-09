<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/mainstyle.css')}}">
    <script defer src="/js/modal-head.js"></script>
    @yield('links')
</head>
<body>
    <header>
        <div class="href">
            <img src="{{url('/images/logo.png')}}" alt="">
            <a href="/">Главная</a>
            <a href="/afisha">Афиша</a>
            <a href="/news">Новости</a>
            <button class="fromteator signup" data-bs-toggle="modal" data-bs-target="#exampleModal3" onclick="inModal1()">О театре</button>
        </div>
        <div class="login">
            <button class="signup" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Войти
            </button>
            <button class="signup" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Регестрация
            </button>
        </div>
    </header>

    @yield('mainContent')

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content signup-modal">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <h1>Войти в акаунт</h1>
                    <form method="POST" action="/signup/check">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Логин</label>
                            <input type="text" class="form-control" id="text" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Пароль</label>
                            <input type="password" class="form-control password" id="password" name="password">
                        </div>
                        <div class="btn-cont">
                            <button type="submit" class="btn btn-primary">Войти</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                        </div>
                    </form>
                    <br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content signup-modal">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <h1>Зарегестрироватся</h1>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="/reg">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Логин</label>
                            <input type="text" name="name" class="form-control" id="login">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Почта</label>
                            <input type="email" name="email" class="form-control email" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Пароль</label>
                            <input type="password" name="password" class="form-control password" id="password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Повторите пароль</label>
                            <input type="password" name="password_confirmation" class="form-control password" id="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
                            <label class="form-check-label" for="exampleCheck1">Согласие на обработку персональных данных</label>
                        </div>
                        <br>
                        <div class="btn-cont">
                            <button type="submit" class="btn btn-primary">Продолжить</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="infoBar r05">
                    <div class="info">
                        <span>дата создания</span>
                        <span>телефон</span>
                        <span>касса</span>

                        <span class="info-text">1938 год</span>
                        <span class="info-text">+7 (347) 272-77-12</span>
                        <span class="info-text">Уфа, ул. Ленина, 5/1</span>
                    </div>
                    <button type="button" class="btn-close exit" data-bs-dismiss="modal" aria-label="Вернутся"></button>
                </div>
                <div class="modal-body">
                    <div class="modalIMG">
                        <img src="{{url('/images/modalIMG.png')}}" alt="">
                    </div>
                    <div class="modal-text">
                        <div class="modal-text-head">
                            <button class="im im-in" id="textBt1" onclick="inModal1()">История театра</button>
                            <button class="im" id="textBt2" onclick="inModal2()">Коллектив театра</button>
                            <button class="im" id="textBt3" onclick="inModal3()">Правила поведения</button>
                            <button class="im" id="textBt4" onclick="inModal4()">Схема зала</button>
                        </div>
                        <div class="modal-text-1" id="modalText1">
                            С историей БГТОиБ неразрывно связано имя гениального танцовщика XX века Рудольфа Нуреева. Именно в Уфе, на этой сцене он сделал первые шаги на пути к мировой славе. С 1993 года по инициативе Юрия Григоровича проводятся фестивали балетного искусства им. Р.Нуреева. Авторитет нуреевских торжеств и их известность вышли далеко за пределы республики. В разные годы на сцене БГТОиБ выступали ведущие солисты Большого и Мариинского театров, танцовщики из Бразилии, Аргентины, Германии, Франции, Италии, Испании, Бельгии, Японии, Латвии, США, творческие коллективы «Григорович-балет», «Русский балет» В.Гордеева, Каирский балет, балетная труппа Пермского театра оперы и балета им. П.Чайковского и др. <br>
                            В 1997 году с большим успехом прошли Дни культуры РБ в Москве, в рамках которых были представлены спектакли «Журавлиная песнь» Л.Степанова-З.Исмагилова и «В ночь лунного затмения» С. Низаметдинова. В 2004 году опера З.Исмагилова «Кахым-туря» стала лауреатом Национальной театральной премии «Золотая маска» в номинации «Лучшая работа дирижёра». В 2006 году спектакль «Волшебная флейта» В.-А.Моцарта в постановке У. Шварца был выдвинут на эту премию в трех номинациях, а в 2007 году опера Дж. Верди «Бал-маскарад» претендовала сразу по пяти позициям. <br>
                            В 2008 году «Золотой маски» в номинации «За честь и достоинство» удостоена народная артистка СССР Зайтуна Насретдинова. За выдающийся вклад в культурные достижения Совет международного биографического центра (Кембридж, Великобритания) присудил З. А. Насретдиновой почетное звание «Международный профессионал». В 2005 году редакционной коллегией и творческим советом журнала «Балет» она удостоена приза «Душа танца» в номинации «Мэтр танца». В 2007 году призом «Душа танца» в номинации «Рыцарь танца» награжден заслуженный артист России, народный артист Башкортостана Шамиль Терегулов. <br>
                            В 2006 года театру присуждена Премия Правительства России имени Ф.Волкова в номинации «Лучший творческий коллектив». Она была вручена на VII Международном Волковском фестивале в Ярославле, который открылся балетом «Аркаим» Л.Исмагиловой. В 2007 году в составе делегации мастеров искусств РБ ведущие артисты оперы и балета, симфонический оркестр и хор театра приняли участие в Гала-концерте, посвящённом 450- летию добровольного вхождения Башкирии в состав России (Москва). В 2008 г. в составе делегации мастеров искусств РБ артисты театра выступили в штаб-квартире Юнеско в Париже на выставке-презентации «Башкортостан: 450 лет вместе с Россией». В этом же году симфонический оркестр успешно выступил на гастролях в Южной Корее и был удостоен высокой награды — копии Короны I Корейского императора. <br>
                            Башкирский государственный театр оперы и балета стал победителем X Всероссийского конкурса «1000 лучших предприятий и организаций России-2009» в номинации «Лучшее предприятие сферы культуры и искусства России» (Москва). БГТОиБ также был удостоен почетного статуса — «Национальное достояние России — 2010» (Москва). <br>
                            Всё больший авторитет на мировых подмостках завоевывают творческие коллективы театра. Балетная и оперная труппы тепло были приняты на зарубежных гастролях во Франции (1994), США (1995, 1996), Голландии и Бельгии (1995–1996), Турции (1999), Египте (2003, 2005), Португалии (2005, 2006, 2007), Таиланде (2006, 2008), Бразилии (2007), Китае (2008), Италии (2003,2009, 2010), Мексике (2009). <br>
                            С небывалым общественным резонансом в масштабе республики и России прошли премьеры спектаклей: «Мадам Баттерфляй» Дж. Пуччини и «Прометей» Р.Сабитова, «Наки» С. Низаметдинова «La marionette» («Марионетка») на музыку С. Стравинского, «Князь Игорь» А. Бородина. В 2009 году открылся Малый зал театра. На новой площадке уже идут новые спектакли и концертные программы: «Любовный напиток» Г. Доницетти, «Вальпургиева ночь» Ш. Гуно, «День рождения Кота Леопольда» Б. Савельева, «Неклассический дивертисмент», музыкальная комедия «Кодаса» («Свояченица») З.Исмагилова Недавно состоялась премьера балета «Семь красавиц» на музыку Кара Караева, которая прошла в рамках XVII Международного фестиваля балетного искусства имени Р. Нуреева. <br>
                            Творческие принципы, формировавшиеся в течение семи десятилетий, живут и развиваются: это бережное отношение к традициям, заложенное предыдущими поколениями, и постоянное совершенствование мастерства. Залог успеха театра — высокопрофессиональные творческие коллективы. Артисты БГТОиБ — лауреаты, дипломанты республиканских, российских и международных конкурсов, обладатели государственных и республиканских премий. По-прежнему коллектив ориентирован на постановку лучших образцов зарубежной и отечественной классики, в сценическом воплощении которых постановщикам и исполнителям удается достичь подлинного мастерства. <br>
                        </div>
                        <div class="modal-text-2" id="modalText2">
                            <div>
                                <img src="{{url('/images/kalektiv1.jpg')}}" class="bg">
                                <div class="kolektiv-name">
                                    <span>Валерия Исаева</span>
                                    <span>народная артистка РБ</span>
                                </div>
                            </div>
                            <div>
                                <img src="{{url('/images/kalektiv2.jpg')}}" class="bg">
                                <div class="kolektiv-name">
                                    <span>Рустам Исхаков</span>
                                    <span>народный артист РТ</span>
                                </div>
                            </div>
                            <div>
                                <img src="{{url('/images/kalektiv3.jpg')}}" class="bg">
                                <div class="kolektiv-name">
                                    <span>Лилия Зайнигабдинова</span>
                                    <span>заслуженная артистка РБ</span>
                                </div>
                            </div>
                            <div>
                                <img src="{{url('/images/kalektiv1.jpg')}}" class="bg">
                                <div class="kolektiv-name">
                                    <span>Валерия Исаева</span>
                                    <span>народная артистка РБ</span>
                                </div>
                            </div>
                            <div>
                                <img src="{{url('/images/kalektiv2.jpg')}}" class="bg">
                                <div class="kolektiv-name">
                                    <span>Рустам Исхаков</span>
                                    <span>народный артист РТ</span>
                                </div>
                            </div>
                            <div>
                                <img src="{{url('/images/kalektiv3.jpg')}}" class="bg">
                                <div class="kolektiv-name">
                                    <span>Лилия Зайнигабдинова</span>
                                    <span>заслуженная артистка РБ</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-text-3" id="modalText3">
                            <ul>
                                <li>Приобретая билет на представления Театра, зритель обязуется соблюдать общественный порядок в здании Театра. </li>
                                <li>Материальный ущерб, причиненный Театру по вине зрителя, должен быть возмещен в установленном законодательством Российской Федерации порядке. </li>
                                <li>Зритель должен соблюдать форму одежды, соответствующую мероприятию, не являться на мероприятия Театра в шортах, майках и сланцах. </li>
                                <li>При утере жетона или утрате личных вещей из гардероба зритель должен обратиться к работнику гардероба или дежурному администратору Театра. </li>
                                <li>Вход зрителей в Театр и работа обслуживающего персонала начинаются не ранее чем за 1 (один) час до начала мероприятия, вход в зрительный зал осуществляется после первого звонка. После третьего звонка вход в зрительный зал запрещён. </li>
                                <li>Во время проведения мероприятия все средства связи должны быть отключены или переведены в бесшумный режим. </li>
                                <li>В целях обеспечения охраны авторских и иных смежных прав фото-, кино-, видео-, телесъёмка, любые виды аудиозаписи спектаклей или их фрагментов без специального разрешения администрации запрещены. </li>
                                <li>Вход в зрительный зал не приветствуется в верхней одежде, с напитками, едой и в нетрезвом состоянии запрещён. </li>
                                <li>В целях безопасности зрителей в помещения театра запрещено проносить оружие, огнеопасные, взрывчатые, ядовитые, пахучие и радиоактивные вещества, колющие и режущие предметы, пиротехнические устройства, лазерные фонарики, наркотические вещества, алкогольные напитки, чемоданы, крупные свертки и сумки, животных. Запрещается находиться в пачкающей одежде или с предметами, которые могут испачкать других зрителей. </li>
                                <li>Запрещается заходить за установленные ограждения, открывать окна, сидеть и стоять в проходах и на лестницах в зрительных залах, входить в помещения, закрытые для посещения, наносить надписи и расклеивать объявления, плакаты и другую продукцию информационного содержания, демонстрировать символику, направленную на разжигание расовой, социальной, национальной и религиозной ненависти. </li>
                                <li>Опоздавший зритель в виде исключения (ветеран, инвалид) допускается к просмотру первого акта мероприятия на имеющееся свободное место при его наличии. Под свободным местом в данном случае понимается свободное крайнее место или свободное место в последнем ряду, расположенное в бельэтаже или в ложах бенуара и предложенное контролёром. В антракте опоздавший зритель должен пересесть на место, указанное в билете. Зритель самостоятельно обеспечивает своевременный приход к началу мероприятия.</li>
                                <li>Во время мероприятия запрещены любые передвижения по зрительному залу, шум, разговоры, приём пищи и напитков, использование мобильной техники.</li>
                                <li>Цветы, предназначенные для артистов, должны быть переданы сотрудникам Театра для последующего их вручения лицам, которым они предназначены. </li>
                                <li>В соответствии с Федеральным законом от 23.02.2013 N 15-ФЗ «Об охране здоровья граждан от воздействия окружающего табачного дыма и последствий потребления табака» курение в помещениях Театра запрещено.</li>
                            </ul>
                        </div>
                        <div class="modal-text-4" id="modalText4">
                            <img src="{{url('/images/zal.png')}}" alt="">
                            <img src="{{url('/images/malzal.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <img src="{{url('/images/logo.png')}}" alt="">
                </a>
                <p class="text-body-secondary">© 2023</p>
            </div>
      
            <div class="col mb-3"></div>
      
            <div class="col mb-3">
                <h5>Навигация по сайту:</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-body-secondary">Главная</a></li>
                    <li class="nav-item mb-2"><a href="/afisha" class="nav-link p-0 text-body-secondary">Афиша</a></li>
                    <li class="nav-item mb-2"><a href="/news" class="nav-link p-0 text-body-secondary">Новости</a></li>
                    <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3" onclick="inModal1()">о театре</a></li>
                    <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3" onclick="inModal3()">Правила поведения</a></li>
                    <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3" onclick="inModal4()">Схема зала</a></li>
                    <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3" onclick="inModal1()">История театра</a></li>
                    <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3" onclick="inModal2()">Каллектив театра</a></li>
                </ul>
            </div>
      
            <div class="col mb-3">
                <h5>Ссылки на социальные сети:</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="https://vk.com/bashopera" class="nav-link p-0 text-body-secondary">VK</a></li>
                    <li class="nav-item mb-2"><a href="https://www.youtube.com/channel/UCfW4myn8NvUYA2gZM4EXpQw" class="nav-link p-0 text-body-secondary">YouTube</a></li>
                </ul>
            </div>
      
            <div class="col mb-3">
                <h5>Контакты:</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">Заказ билетов:</li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">+7 (347) 272-77-12</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">ticket@bashopera.ru</a></li>
                    <li class="nav-item mb-2">Пресс-служба:</li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">+7 (347) 272-70-80</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">pr@bashopera.ru</a></li>
                    <li class="nav-item mb-2">Приемная:</li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">+7 (347) 272-10-12 </a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">bashopera@ufanet.ru</a></li>
                </ul>
            </div>
        </footer>
    </div>
    
</body>
</html>