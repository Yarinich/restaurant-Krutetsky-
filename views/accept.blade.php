@extends('layouts.app')

@section('title', 'Замовлення підтвердженно')


@section('content')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @else
            <div>
                Ваше замовлення прийняте. У найближчий час з вами зв'яжеться адміністратор для підтвердження броні.
            </div>
        @endif


@endsection
