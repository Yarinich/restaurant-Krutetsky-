{{--<a href="{{ route('main') }}">Krutetsky</a>--}}
{{--<a href="{{ route('menu') }}">Меню</a>--}}
{{--<a href="{{ route('order') }}">Замовити стіл</a>--}}
{{--<a href="{{ route('contacts') }}">Контакти</a>--}}

<header class="top">
    <div class="section_left">
        <div class="Logo"><a href="{{ route('main') }}"><img src="img/logo.png" width="50" height="50"></a></div>
        <div class="Slogan"><a href="{{ route('main') }}">Krutetsky - запорука хорошого вечора!</a></div>

    </div>

    <div class="container">
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
