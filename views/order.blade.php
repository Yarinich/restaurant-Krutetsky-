@extends('layouts.app')

@section('title', 'Order')


@section('content')
    <div class="forOrders">
    <br><br><br>
    <form action="{{ route('order-form') }}" method="post" class="decor">
        @csrf
        <div class="form-left-decoration"></div>
        <div class="form-right-decoration"></div>
        <div class="circle"></div>
        <div class="form-inner">
            <h3>Замовлення столиків</h3>
            <input type="text" name="name" placeholder="Ім'я" id="name"><br>
            <input type="text" name="phone" placeholder="Мобільний телефон" id="phone"><br>
            <textarea type="text" name="comments" placeholder="Кількість людей та час" id="comments" rows="3"></textarea><br>
            <input type="submit" value="Замовити">
        </div>
    </form>
    <br><br><br>
    </div>
@endsection

