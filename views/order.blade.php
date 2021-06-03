@extends('layouts.app')

@section('title', 'Замовлення столів')


@section('content')
    <div class="forOrders">
    <br><br><br>
    <form action="{{ route('order-accept') }}" method="post" class="decor">
        @csrf
        <div class="form-left-decoration"></div>
        <div class="form-right-decoration"></div>
        <div class="circle"></div>
        <div class="form-inner">
            <h3>Замовлення столиків</h3>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @else
                <div class="alert-good">
                    {{ $message ?? '' }}
                </div>
            @endif
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Ім'я" id="name"><br>
            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Мобільний телефон у форматі: 0671111111" id="phone"><br>
            <textarea type="text" name="comments" value="{{ old('comments') }}" placeholder="Кількість людей та час" id="comments" rows="3"></textarea><br>
            <input type="submit" value="Замовити" class="btn-order">
        </div>
    </form>
    <br><br><br>
    </div>

@endsection



