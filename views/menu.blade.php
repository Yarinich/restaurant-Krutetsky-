@extends('layouts.app')

@section('title', 'Menu')


@section('content')
{{--    <div style="background-color: bisque">--}}
{{--        <br><br><br>--}}
{{--        <a href="{{ route('order') }}">Замовити стіл</a>--}}
{{--        <br><br><br>--}}
{{--    </div>--}}

<div class="secondSection">
    <div class="paragraph">
        Меню:
    </div>
    <div class="paragraph_small">
        Сніданки<br>
        Подаються з відкриття до 12
    </div>
    <div class="content">
        <div class="name">Вівсянка Steel Cut</div>
        <div class="dish">Подається з патокою, бананами і свіжими ягодами.</div>
    </div>
    <div class="content">
        <div class="name">Гречані коржики з медом</div>
        <div class="dish">Два товстих гречаних коржа з медом і фірмовими збитими вершками з кокосом.</div>
    </div>
    <div class="content">
        <div class="name">Печиво на заквасці</div>
        <div class="dish">Чотири маленьких печива подаються з компотом з ожини і яблучно-кленовим маслом.</div>
    </div>
    <div class="content">
        <div class="name">Запечені яйця і бекон</div>
        <div class="dish">Яйця вкруту, бекон домашнього копчення і шпинат, запечені на залізній сковороді і посипані витриманим чеддер. Подається з двома шматочками смаженого хліба.</div>
    </div>
    <div class="content">
        <div class="name">Омлет з устрицями</div>
        <div class="dish">Три свіжих очищених устриці Корпус-Крісті, сир, хрін і цибуля. Подається з двома бісквітами на заквасці.</div>
    </div>

    <div class="paragraph_small">
        Обіди<br>
        Подаються з 12 до 18
    </div>
    <div class="content">
        <div class="name">Сендвіч з грудинкою</div>
        <div class="dish">Нарізана тонкими скибочками яловича грудинка повільного копчення, маринована окра, помідори і чорний хліб. Подається з гарніром або смаженою картоплею.</div>
    </div>
    <div class="content">
        <div class="name">Бургер з олениною</div>
        <div class="dish">Картопляна булочка, салат, помідори, цибуля, маринад з червоного вина і швейцарський сир. Подається з гарніром або смаженою картоплею.</div>
    </div>
    <div class="content">
        <div class="name">Копчена форель</div>
        <div class="dish">Ціла озерна форель, копчена з устричним соусом. Подається зі смаженою цибулею-пореєм і салсіфом над кремом з ріпи.</div>
    </div>
    <div class="content">
        <div class="name">Скумбрія на грилі</div>
        <div class="dish">Натерте філе скумбрії з лимоном і перцем на подушці з Суккоташ і картопляного пюре.</div>
    </div>
    <div class="content">
        <div class="name">Пиріг з куркою</div>
        <div class="dish">Курка на вільному вигулі, морква, селера, горох і картопля, запечені з розмарином і чебрецем. Настояна скоринка з лаврового листа.</div>
    </div>

    <div class="paragraph_small">
        Вечері<br>
        Подаються з 18 до закриття
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
    <div class="content">
        <div class="name">Озерна форель на грилі</div>
        <div class="dish">Ціла озерна форель на грилі з каперсами і артишоками. Подається з холодним салатом з огірків, помідорів і квасолі.</div>
    </div>
    <div class="content">
        <div class="name">Устриці на дровах</div>
        <div class="dish">Півдюжини устриць, смажені на відкритому вогні. Подається з соусом з кмину і чіпотле.</div>
    </div>

    <div class="paragraph_small">
        Напої<br>
        Подаються увесь час
    </div>
    <div class="content">
        <div class="name">Сік та газованка</div>
        <div class="dish">Усі наявні смаки</div>
    </div>
    <div class="content">
        <div class="name">Кактусове вино</div>
        <div class="dish">Текіла з 100% блакитної агави, перемішана з завареним на сонці чаєм ПЕЙОТА і медовим лікером. Подається в стакані хайбол..</div>
    </div>
    <div class="content">
        <div class="name">Совіньон Блан</div>
        <div class="dish">Шато Форье. Валле Луара, Франція, 2011. Сухий. Середнє тіло. Дуже легкі таніни. Ноти кропиви і бузини.</div>
    </div>
    <div class="content">
        <div class="name">Шардоне</div>
        <div class="dish">Gemsbok. Стелленбош, Південна Африка, 2013. Сухий. Світлове Тіло. Дуже легкі таніни. Цитрусові і бузкові нотки.</div>
    </div>
    <div class="content">
        <div class="name">Скіннер мула</div>
        <div class="dish">Кентуккійський бурбон з домашнім ожинним лікером. Подається в келиху lowball з імбирним гарніром.</div>
    </div>

    <div class="contentButton">
        <div class="forButton"><a href="{{ route('order') }}" class="gradient-button">Замовити столик</a></div>
    </div>
</div>

@endsection

