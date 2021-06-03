<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/for_header_footer.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/lending.css">
    <link rel="stylesheet" href="/css/contacts.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/order.css">
    <link rel="stylesheet" href="/css/reviews.css">
    <link rel="stylesheet" href="/css/error.css">
    <link rel="stylesheet" href="/css/forForms.css">

    <title>@yield('title')</title>
</head>
<body>

<header class="top">
    <div class="section_left">
        <div class="Logo"><a href="{{ route('main') }}"><img src="img/logo.png" width="50" height="50"></a></div>
        <div class="Slogan"><a href="{{ route('main') }}">Krutetsky - запорука хорошого вечора!</a></div>

    </div>

    <div class="container1">
        <label for="toggle-1" class="toggle-menu"><i class="toggle-icon"></i></label>
        <input type="checkbox" id="toggle-1">
        <nav>
            <ul>
                <li><a href="{{ route('menu') }}">Меню</a></li>
                <li><a href="{{ route('order') }}">Замовити столик</a></li>
                <li><a href="{{ route('contacts') }}">Контакти</a></li>
            </ul>
        </nav>
    </div>
</header>

@yield('content')

<div class="footer">

    <div class="container">
        <div class="row">
            <div class="col-sm-3"><a href="{{ route('menu') }}"> МЕНЮ </a></div>
            <div class="col-sm-3"><a href="{{ route('order') }}"> ЗАМОВИТИ СТІЛ </a></div>
            <div class="col-sm-3"><a href="{{ route('reviews') }}"> ВІДГУКИ </a></div>
            <div class="col-sm-3"><a href="{{ route('contacts') }}"> КОНТАКТИ </a></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3"><a href="#"> <img src="img/youtube%20(1).png" width="20px" height="20px"> </a></div>
            <div class="col-sm-3"><a href="#"> <img src="img/instagram%20(2).png" width="20px" height="20px"> </a></div>
            <div class="col-sm-3"><a href="#"> <img src="img/telegram%20(2).png" width="20px" height="20px"> </a></div>
            <div class="col-sm-3"><a href="#"> <img src="img/free-icon-facebook-145802.png" width="20px" height="20px"> </a></div>
        </div>
    </div>
</div>

</body>
</html>
