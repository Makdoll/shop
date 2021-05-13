@extends('loyaout.header5')

@section('tovar')

    <div class="header">
    <div class="menu">
        <div class="logo"><a href="/"><img src="img/logo1.LMDO1-removebg-preview.png"></a></div>
        <div class="bord">
            <ul class="mmenuu">
                <li><a href=#>Каталог</a>
                    <ul class="ssubmenuu">
                        <li><a href=#>Мужские носки</a></li>
                        <li><a href=#>Женские носки</a></li>
                        <li><a href=#>Носки унисекс</a></li>
                    </ul>
                </li>
            </ul>
            <form>
                <input type="text" placeholder="Искать здесь...">
                <button type="submit"></button>
            </form>
            <a href="/corzina">
                <ion-icon class="ikon-icon" name="basket-outline"></ion-icon>
            </a>
            <a href="/register">
                <ion-icon class="ikon-icon" name="person-add-outline"></ion-icon>
            </a>
            <a href="#">
                <ion-icon class="ikon-icon" name="heart-outline"></ion-icon>
            </a>
        </div>
    </div>
    <div>
        <div class="box">
            <div class="img-1">
                <img src="img/1%20tovar.png">
            </div>
            <div class="text">
                <p>Носки из хлопка с изображениями. В стиле «хип-хоп»,средней высоты, 1 пара, мягкие длинные носки для
                    мужчин</p>
                <p>200 отзывов 250 заказов</p>
                <hr>
                <h1>145₽</h1>
                <p>количество:</p>
                <ion-icon class="icons" name="remove-circle-outline"></ion-icon><ion-icon class="icons" name="add-circle-outline"></ion-icon><h4>1</h4>
                <hr>
                <a>Купить</a><a>Добавить в корзину</a><a><ion-icon class="ico" name="heart-outline"></ion-icon></a>



            </div>
        </div>
        <div class="nis">
            <ion-icon class="money" name="cash-outline"></ion-icon>

            <img class="truck" src="img/delivery-truck.svg" height="50px" width="50px">

            <ion-icon class="card" name="card-outline"></ion-icon>

            <img class="confiden" src="img/self-confidence.svg" height="50px" width="50px">

            <ion-icon class="help" name="people-outline"></ion-icon>

            <ion-icon class="apple" name="logo-apple"></ion-icon>

            <ion-icon class="android" name="logo-android"></ion-icon>
            <p class="p1">Большое <br>значение</p>
            <p class="p1">Доставка по<br>всему миру</p>
            <p class="p1">Безопасная<br>оплата</p>
            <p class="p1">Делайте покупки<br>с уверенностью</p>
            <p class="p1">24/7 Справочный<br>центр</p>
            <p class="p1">Магазин на<br>ходу</p>
            <hr>
            <p class="p2">Следите за нами</p>
            <p class="p2">Как покупать</p>
            <p class="p2">Поддержка</p>
            <p class="p2">Сотрудничество</p><br>
            <ion-icon class="conse" name="logo-facebook"></ion-icon>
            <ion-icon class="conse" name="logo-twitter"></ion-icon>
            <ion-icon class="conse" name="logo-instagram"></ion-icon>
            <ion-icon class="conse" name="logo-vk"></ion-icon>
            <ion-icon class="conse" name="logo-youtube"></ion-icon>
            <div class="div_p3">
                <p class="p3">Заказы и оплата</p>
                <p class="p3">Доставка</p>
                <p class="p3">Защита покупателя</p>
                <p class="p3">Блог для покупателей</p>
            </div>
            <div class="div_p4"></div>
            <p class="p4">Поддержка</p>
            <p class="p4">Финансовые операции</p>
            <p class="p4">Оставить отзыв</p>
        </div>
        <div class="div_p5"></div>
        <p class="p5">Стать продавцом</p>
        <p class="p5">Партнёрская программа</p>
    </div>
</div>
@endsection
