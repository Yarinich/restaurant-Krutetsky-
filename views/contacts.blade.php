@extends('layouts.app')

@section('title', 'Наші контакти')

@section('content')
    <div class="firsSection">
        <div class="paragraph">
            Наші контакти:
        </div>
            <div class="par">Контакти</div>
            <div class="inf">Моб. тел. : 0686565656</div>
            <div class="inf2">Email: krytetsky@gmail.com</div>
            <div class="par">Місцезнаходження</div>
            <div class="inf2">Вул. Академіка Янгеля 5, м.Київ</div>
            <div class="par">Графік роботи</div>
            <div class="inf">Пн-Чт, 10:00 - 22:00</div>
            <div class="inf2">Пт-Нд, 11:00 - 23:00</div>

        <div class="paragraph">Геолокація</div>
        <div class="geo">
            @include('layouts.maps')<br>
        </div>
        <div class="contentButton">
            <div class="forButton"><a href="{{ route('menu') }}" class="gradient-button1">Переглянути меню</a></div>
        </div>
        <div class="contentButton">
            <div class="forButton"><a href="{{ route('order') }}" class="gradient-button1">Замовити столик</a></div>
        </div>
    </div>
@endsection

