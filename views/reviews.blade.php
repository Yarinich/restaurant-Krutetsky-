@extends('layouts.app')

@section('title', 'Reviews')


@section('content')
    <div class="fourthSection">
        <div class="paragraph">
            Усі рецензії відомих видань на нас:
        </div>
        <div class="content">
            <div class="review">'Якщо ви хочете просто ловити кайф від усього, то вам сюди.'</div>
            <div class="name_p"> - журнал "Студенство"</div>
        </div>
        <div class="content">
            <div class="review">'Гостинно, смачно, комфортно. Ось що говорять усі хто тут був.'</div>
            <div class="name_p"> - газета "Поляк"</div>
        </div>
        <div class="content">
            <div class="review">'Одного разу туди прийшов наш найсуворіший критик... Він ніколи нікуди не ходить двічі... Але у цьому закладі він майже щодня.'</div>
            <div class="name_p"> - журнал "Київ"</div>
        </div>
        <div class="content">
            <div class="review">'Можна і наїстися і напитися... Або мрія усіх людей після роботи. А як ви називаєте це чудове місце?'</div>
            <div class="name_p"> - спілка "Програмістів, що роблять курсову вночі"</div>
        </div>
        <div class="content">
            <div class="review">'Про цей заклад можна сказати тільки одне: ЖАХЛИВО... Жахливо, що не всі заклади такі, адже це шматочок раю на Землі.'</div>
            <div class="name_p"> - журнал "Дівочі вісті"</div>
        </div>
        <div class="contentButton">
            <div class="forButton"><a href="{{ route('order') }}" class="gradient-button">Замовити столик</a></div>
        </div>
    </div>
@endsection

