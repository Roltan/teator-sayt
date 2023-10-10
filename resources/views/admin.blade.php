<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/mainstyle.css')}}">
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
    <script defer src="/js/adminAdd.js"></script>
    @yield('links')
</head>
<body>
    <header>
        <div class="href">
            <img src="{{url('/images/logo.png')}}" alt="">
            <a href="/admin/afisha">Афиша</a>
            <a href="/admin/news">Новости</a>
            <a href="/admin/ticket">Проданно билетов</a>
        </div>
        <div class="login">
            <a href="/">Выйти</a>
        </div>
    </header>

    @yield('mainContent')

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