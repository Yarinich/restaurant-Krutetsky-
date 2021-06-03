@extends('layouts.app')

@section('title', 'Krutetsky')

@section('content')
<div class="firsSection">
    <div class="imgFirst"><img src="img/11.jpg" class="img1"></div>
    <div class="text_1"> Відвідайте місце, де виможете відпочити забувши про усі свої турботи насолоджуючись кожною молекулою мікровсесвіту, який буде вас оточувати <br>
        Зробити це легко. Єдине, що треба зробити - це завітати до ресторану "Krutetsky". <br>
        Вас буде очікувати вишукана та смачна їжа, ваші улюблені напої, хороше обслуговування, а також чудовий краєвид. <br>
        Ласкаво просимо, друзі.
    </div>
    <div class="contentButton">
        <div class="forButton"><a href="{{ route('contacts') }}" class="gradient-button">Де нас знайти</a></div>
    </div>
</div>

<div class="secondSection">
    <div class="paragraph">
        Наші найкращі страви:
    </div>
    <div class="content">
        <div class="name">Сендвіч з грудинкою</div>
        <div class="dish">Нарізана тонкими скибочками яловича грудинка повільного копчення, маринована окра, помідори і чорний хліб. Подається з гарніром або смаженою картоплею.</div>
    </div>
    <div class="content">
        <div class="name">Вівсянка Steel Cut</div>
        <div class="dish">Подається з патокою, бананами і свіжими ягодами.</div>
    </div>
    <div class="content">
        <div class="name">Клуб дикої індички</div>
        <div class="dish">Товсті нарізки смаженої дикої індички, салату, помідорів, майонезу і чорного хліба.</div>
    </div>
    <div class="content">
        <div class="name">Плече дикого кабана</div>
        <div class="dish">Обсмажений кабан, тріснутий перець і глазур з червоного вина. Подається з гарячими кукурудзяними коржиками і гарніром.</div>
    </div>
    <div class="content">
        <div class="name">Рагу з баранини</div>
        <div class="dish">М'яка баранина, морква, селера, помідори, цибуля, розмарин і чорний перець. Подається з двома бісквітами на заквасці.</div>
    </div>
    <div class="contentButton">
        <div class="forButton"><a href="{{ route('menu') }}" class="gradient-button">Переглянути усе меню</a></div>
    </div>
</div>

<div class="thirdSection">
    <div class="imgFirst"><img src="img/2.jpg" class="img1"></div>
    <div class="text_1">  Якщо ви бажаєте чудово провести вечір у нашому закладі, вам потрібно обов'язково зробити наступні речі:<br><br>
        1) Прийти захопивши друзів, сім'ю, другу половинку, а то і усіх разом, адже одному не так весело.<br>
        2) Пройтися перед застіллям, для того, щоб нагуляти апетит.<br>
        3) Замовити столик заздалегідь, адже бажаючих, повірте, буде дуже багато.<br><br>
        Якщо ви зробили усе з даного списку, ми Вам обіцяємо - ваш вечір буде незабутнім.<br>
    </div>
    <div class="contentButton">
        <div class="forButton"><a href="{{ route('order') }}" class="gradient-button">Замовити столик</a></div>
    </div>
</div>

<div class="fourthSection">
    <div class="paragraph">
        Рецензії:
    </div>
    <div class="content">
        <div class="review">'Якщо ви хочете просто ловити кайф від усього, то вам сюди.'</div>
        <div class="name_p"> - журнал "Студенство"</div>
    </div>
    <div class="content">
        <div class="review">'Одного разу туди прийшов наш найсуворіший критик... Він ніколи нікуди не ходить двічі... Але у цьому закладі він майже щодня.'</div>
        <div class="name_p"> - журнал "Київ"</div>
    </div>
    <div class="content">
        <div class="review">'Про цей заклад можна сказати тільки одне: ЖАХЛИВО... Жахливо, що не всі заклади такі, адже це шматочок раю на Землі.'</div>
        <div class="name_p"> - журнал "Дівочі вісті"</div>
    </div>
    <div class="contentButton">
        <div class="forButton"><a href="{{ route('order') }}" class="gradient-button">Прочитати більше рецензій</a></div>
    </div>
</div>

@endsection
