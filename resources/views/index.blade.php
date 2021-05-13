@extends('loyaout.header1')

@section('index')
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
            <a href="/login">
                <ion-icon class="ikon-icon" name="person-add-outline"></ion-icon>
            </a>
            <a href="#">
                <ion-icon class="ikon-icon" name="heart-outline"></ion-icon>
            </a>
        </div>
    </div>
    <div class="box">
        <div class="kat">
            <h1>Категории</h1>
            <a href="/novinki"><p>Новинки</p></a>
            <a href="#"><p>Женские</p></a>
            <a href="#"><p>Мужские</p></a>
            <a href="#"><p>Наборы</p></a>
            <a href="#"><p>Подарок</p></a>
            <a href="#"><p>С принтом</p></a>
            <a href="#"><p>Короткие</p></a>
            <a href="#"><p>Гольфы</p></a>
        </div>
        <ul class="slides">
            <input type="radio" name="radio-btn" id="img-1" checked />
            <li class="slide-container">
                <div class="slide">
                    <img src="https://static.wixstatic.com/media/f63bfd_1ef3064da8e347389b780d971b984e2d~mv2.jpg/v1/fill/w_1200,h_800,al_c/f63bfd_1ef3064da8e347389b780d971b984e2d~mv2.jpg" />
                </div>
                <div class="nav">
                    <label for="img-3" class="prev">&#x2039;</label>
                    <label for="img-2" class="next">&#x203a;</label>
                </div>
            </li>

            <input type="radio" name="radio-btn" id="img-2" />
            <li class="slide-container">
                <div class="slide">
                    <img src="https://ae01.alicdn.com/kf/HTB1ZE47m_Zmx1VjSZFGq6yx2XXaW/-.jpg" />
                </div>
                <div class="nav">
                    <label for="img-1" class="prev">&#x2039;</label>
                    <label for="img-3" class="next">&#x203a;</label>
                </div>
            </li>

            <input type="radio" name="radio-btn" id="img-3" />
            <li class="slide-container">
                <div class="slide">
                    <img src="https://ae01.alicdn.com/kf/HTB1Bn7hKf5TBuNjSspmq6yDRVXa7/Crazy-Cute-FLY.jpg" />
                </div>
                <div class="nav">
                    <label for="img-2" class="prev">&#x2039;</label>
                    <label for="img-1" class="next">&#x203a;</label>
                </div>
            </li>
            <li class="nav-dots">
                <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                <label for="img-3" class="nav-dot" id="img-dot-3"></label>
            </li>
        </ul>
        <div class="tovari">
            <ion-icon class="icon" name="star-outline"></ion-icon><h1 class="reit">Рейтинги</h1><a href="#"><p class="pi">Смотреть ещё</p></a>
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

        <div>
            <p class="pi1">Рекомендуем вам</p>
            <div class="tova1">
                <a href="tovar.html">
                <img class="img-1" src="img/1.1%20tovar.png">
                <h3>Мужские носки</h3>
                <h4>145₽</h4>
                <ion-icon name="star"></ion-icon><p>4.7</p></a>
            </div>
            <div class="tova2">
                <a href="tovar.html">
                    <img class="img-1" src="img/1.1%20tovar.png">
                    <h3>Мужские носки</h3>
                    <h4>145₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.7</p></a>

            </div>
            <div class="tova3">
                <a href="tovar.html">
                    <img class="img-1" src="img/1.1%20tovar.png">
                    <h3>Мужские носки</h3>
                    <h4>145₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.7</p></a>

            </div>
            <div class="tova4">
                <a href="tovar.html">
                    <img class="img-1" src="img/1.1%20tovar.png">
                    <h3>Мужские носки</h3>
                    <h4>145₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.7</p></a>

            </div>
            <div class="tova5">
                <a href="tovar.html">
                    <img class="img-1" src="img/1.1%20tovar.png">
                    <h3>Мужские носки</h3>
                    <h4>145₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.7</p></a>

            </div>
            <div class="tova6">
                <a href="tovar.html">
                    <img class="img-1" src="img/1.1%20tovar.png">
                    <h3>Мужские носки</h3>
                    <h4>145₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.7</p></a>

            </div>
            <div class="tova7">
                <a href="tovar.html">
                    <img class="img-1" src="img/1.1%20tovar.png">
                    <h3>Мужские носки</h3>
                    <h4>145₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.7</p></a>

            </div>
            <div class="tova8">
                <a href="tovar.html">
                    <img class="img-1" src="img/1.1%20tovar.png">
                    <h3>Мужские носки</h3>
                    <h4>145₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.7</p></a>

            </div>
            <div class="tova9">
                <a href="tovar.html">
                    <img class="img-1" src="img/1.1%20tovar.png">
                    <h3>Мужские носки</h3>
                    <h4>145₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.7</p></a>

            </div>
            <div class="tova10">
                <a href="tovar.html">
                    <img class="img-1" src="img/1.1%20tovar.png">
                    <h3>Мужские носки</h3>
                    <h4>145₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.7</p></a>

            </div>
            <div class="tova11">
                <a href="tovar.html">
                    <img class="img-1" src="img/1.1%20tovar.png">
                    <h3>Мужские носки</h3>
                    <h4>145₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.7</p></a>

            </div>
            <div class="tova12">
                <a href="tovar.html">
                    <img class="img-1" src="img/1.1%20tovar.png">
                    <h3>Мужские носки</h3>
                    <h4>145₽</h4>
                    <ion-icon name="star"></ion-icon><p>4.7</p></a>

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
    </div>
</div>
@endsection
