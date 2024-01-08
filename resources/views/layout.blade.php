<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-white">Главная</a></li>
                <li><a href="/products" class="nav-link px-2 text-white">Наши продукты</a></li>
                <li><a href="/about" class="nav-link px-2 text-white">О нас</a></li>
            </ul>

            <div class="text-end">
                <a href="/login" type="button" class="btn btn-outline-light me-2">Авторизация</a>
                <a href="/registration" type="button" class="btn btn-warning">Регистрация</a>
            </div>
        </div>
    </div>
</header>
<body class="bg-dark text-white">
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
