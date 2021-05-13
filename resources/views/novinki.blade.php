@extends('loyaout.header3')

@section('novinki')
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
    <div class="box">
        <div class="tovari">
            <ion-icon class="icon" name="star-outline"></ion-icon><h1 class="reit">Новинки</h1><a href="#"><p class="pi">Смотреть ещё</p></a>
            <div class="tovary"><a href="/tovar">
                    <img class="img-1" src="img/1.1%20tovar.png">
                    <h3>Мужские носки</h3>
                    <h4>145₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.7</p></a>
            </div>
            <div class="tovary2"><a href="#">
                    <img class="img-2" src="img/2.png">
                    <h3>Мужские носки</h3>
                    <h4>150₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.5</p></a>
            </div>
            <div class="tovary3"><a href="#">
                    <img class="img-1" src="img/3.png">
                    <h3>Женские носки</h3>
                    <h4>115₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.5</p></a>
            </div>
            <div class="tovary4"><a href="#">
                    <img class="img-1" src="img/4.png">
                    <h3>Носки Smiley женские</h3>
                    <h4>150₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.5</p></a>
            </div>
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
@endsection
