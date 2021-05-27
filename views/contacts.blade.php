@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
{{--    <div style="background-color: bisque">--}}
{{--        <br><br><br>--}}
{{--        @include('inc.maps')<br>--}}
{{--        <a href="{{ route('menu') }}">Меню</a><br>--}}
{{--        <a href="{{ route('order') }}">Замовити стіл</a>--}}
{{--        <br><br><br>--}}
{{--    </div>--}}

    <div class="firsSection">
        <div class="paragraph">
            Наші контакти:
        </div>
        <div class="content">
            <div class="par">Контакти</div>
            <div class="inf">Моб. тел. : 0686565656</div>
            <div class="inf">Email: krytetsky@gmail.com</div>
        </div>
        <div class="content">
            <div class="par">Місцезнаходження</div>
            <div class="inf">Вул. Академіка Янгеля 5, м.Київ</div>
        </div>
        <div class="content">
            <div class="par">Графік роботи</div>
            <div class="inf">Пн-Чт, 10:00 - 22:00</div>
            <div class="inf">Пт-Нд, 11:00 - 23:00</div>
        </div>

        <div class="paragraph">Геолокація</div>
        <div class="geo">
            @include('inc.maps')<br>
        </div>

{{--        <div class="geo">--}}
{{--            <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">--}}
{{--                <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {--}}
{{--                        var setting = {"height":538,"width":803,"zoom":17,"queryString":"улица Академика Янгеля, 5, Киев, Украина","place_id":"ChIJo9e0NibM1EAR7rU7ItxTe-g","satellite":false,"centerCoord":[50.44981551923,30.453230250000008],"cid":"0xe87b53dc223bb5ee","lang":"ru","cityUrl":"/ukraine/kiev","cityAnchorText":"Карта [CITY1], Киевская область, Украина","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"498950"};--}}
{{--                        var d = document;--}}
{{--                        var s = d.createElement('script');--}}
{{--                        s.src = 'https://1map.com/js/script-for-user.js?embed_id=498950';--}}
{{--                        s.async = true;--}}
{{--                        s.onload = function (e) {--}}
{{--                            window.OneMap.initMap(setting)--}}
{{--                        };--}}
{{--                        var to = d.getElementsByTagName('script')[0];--}}
{{--                        to.parentNode.insertBefore(s, to);--}}
{{--                    })();</script><a href="https://1map.com/ru/map-embed">1 Map</a></div>--}}
{{--        </div>--}}


        <div class="contentButton">
            <div class="forButton"><a href="{{ route('menu') }}" class="gradient-button1">Переглянути меню</a></div>
        </div>
        <div class="contentButton">
            <div class="forButton"><a href="{{ route('order') }}" class="gradient-button1">Замовити столик</a></div>
        </div>


    </div>


@endsection

