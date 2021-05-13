<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новинки</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <style>
        .header {
            width: 100%;
            height: 300px;
        }

        body {
            padding: 0;
            width: 1000px;
            margin: auto;
            background: #ffffff;
        }

        .menu {
            width: 100%;
            height: 300px;
            background: #E8F1F5;
        }

        .logo {
            text-align: center;
        }

        .bord {
            background: white;
            width: 100% px;
            height: 70px;
            border: 1px solid gainsboro;
        }

        ul {
            /* Убираю маркеры у списка*/
            list-style: none;
            /* Делаю элементы блочными. */
            display: block;
            /* Убираю отступы. */
            padding: 0px;
            margin: 20px 0px 0px;
            padding-left: 1px;
        }

        ul:after {
            /* Делаю элементы блочными. */
            display: block;
            /* Убираю выравнивание. */
            float: none;
            content: ' ';
            clear: both;
        }

        ul.mmenuu > li {
            /* Задаю выравнивание и позиционирование. */
            float: left;
            /* Считаем координаты относительно исходного места*/
            position: relative;
            list-style: none;
            padding-left: 150px;
        }

        ul.mmenuu > li > a {
            display: block;
            color: black;
            padding: 22px;
            text-decoration: none;
            background-color: white;
            border: 2px solid black;
            margin-top: -19px;
            margin-left: -152px;
            width: 100px;
        }

        ul.mmenuu > li > a:hover {
            /* Задаю цвет при наведении. */
            background-color: white;
        }

        ul.ssubmenuu {
            position: absolute;
            top: 20px;
            /* Делаю субменю скрытыми. */
            display: none;

        }

        ul.ssubmenuu > li {
            /* Блочное расположение элементов*/
            display: block;
        }

        ul.ssubmenuu > li > a {
            /* Делаю элементы блочными. */
            display: block;
            /* Убираю форматирование*/
            text-decoration: none;
            /* Задаю отступ. */
            padding: 10px;
            /* Задаю цвет. */
            color: #ffffff;
            /* Еще цвет. */
            background-color: black;
            list-style: none;
            margin-left: -152px;

        }

        ul.ssubmenuu > li > a:hover {
            /* Цвет бэкграунда при наведении. */
            background-color: black;
            /* Задаю подчеркивание*/
            text-decoration: underline;
        }

        ul.mmenuu > li:hover > ul.ssubmenuu {
            /* Делаю элементы блочными. */
            display: block;
        }

        * {
            box-sizing: border-box;
        }

        form {
            position: relative;
            width: 300px;
            margin: -50px auto;
        }

        input, button {
            outline: none;
            background: transparent;
        }

        input {
            width: 100%;
            height: 42px;
            padding-left: 95px;
            border: 2px solid black;
        }

        button {
            border: none;
            height: 42px;
            width: 42px;
            position: absolute;
            top: 0;
            right: 0;
            cursor: pointer
        }

        button:before {
            content: "\f002";
            font-family: FontAwesome;
            font-size: 16px;
            color: black;
        }

        input:focus {
            border-color: black;
        }

        .ikon-icon {
            float: right;
            font-size: 40px;
            margin-right: 70px;
        }

        a {
            text-decoration: none;
            color: black;
        }
        .nis{
            border: 1px solid #e6e6e6;
            background: white;
            height: 450px;
            width: 1000px;
        }
        .money{
            font-size: 50px;
            margin-top: 1px;
            margin-left: 40px;
        }
        .truck{
            margin-top: 1px;
            margin-left: 80px;
        }
        .help{
            font-size: 50px;
            margin-top: 1px;
            margin-left: 1px;
            padding-right: 120px;
            padding-left: 120px;

        }
        .confiden{
            margin-top: 1px;
            margin-left: 1px;

        }
        .apple{
            font-size: 50px;
            margin-top: 1px;
            margin-left: 1px;
        }
        .android{
            font-size: 50px;
            margin-top: 1px;
            margin-left: 1px;
        }
        .card{
            font-size: 50px;
            margin-top: 1px;
            margin-left: 1px;
            padding-right: 120px;
            padding-left: 120px;

        }
        .p1{
            text-align: center;
            display: inline-block;
            font-size: 20px;
            padding:25px ;
        }
        .nis hr{
            margin-top: 25px;
            width: 100%;
        }
        .p2{
            display: inline-block;
            font-size: 20px;
            margin-left: 87px;
            margin-top: 45px;
        }
        .conse{
            font-size: 30px;
            margin-top: -10px;
            margin-left: 20px;
        }
        .pi{
            color: #22242887;
            float: right;
            margin-right: 13px;
            font-size: 17px;
            margin-top: -48px;
        }
        .p3{
            margin-left: 317px;
            color: #949494;
            font-size: 15px;
        }
        .div_p3{
            margin-top: -45px;
        }
        .p4 {
            margin-left: 524px;
            color: #949494;
            font-size: 15px;
        }
        .div_p4{
            margin-top: -125px;
        }
        .p5{
            margin-left: 706px;
            color: #949494;
            font-size: 15px;
        }
        .div_p5{
            margin-top: -153px;
        }

        .box {
            background: #E8F1F5;
            height: 389px;
            margin-top: -118px;
        }
        .tovari{
            border: 1px solid gainsboro;
            background: white;
            border-radius:2px ;
            height: 370px;
            margin-top: 10px;
        }
        .reit{
            float: right;
            margin-right: 796px;
            margin-top: -3px;
        }
        .icon{
            float: left;
            font-size: 30px;
            margin-left: 18px;
        }
        .tovary{
            border: 1px solid #e6e6e6;
            margin-top: 54px;
            width: 200px;
            margin-left: 28px;
            height: 284px;
        }

        .tovary p{
            margin-left: 33px;
            margin-top: -17px;
            color: #747575;
        }
        .tovary h3{
            margin-top: 0px;
            margin-left: 9px;
            color: #4e4e4e;

        }
        .tovary ion-icon{
            color: #ffbd30;
            margin-top: -39px;
            font-size: 18px;
            display: block;
            margin-left: 8px;
        }

        .tovary h4 {
            margin-left: 121px;
            padding-top: 10px !important;
            color: #6fc7ef;
        }
        .img-1{
            width: 100%;
        }
        .tovary2 { /*https://aliexpress.ru/item/1005001623867448.html?spm=a2g0o.productlist.0.0.2db17fbeLdI1T0&algo_pvid=fa1edbea-44b8-494b-b049-302ad621f19d&algo_expid=fa1edbea-44b8-494b-b049-302ad621f19d-18&btsid=0b8b037216157851478818673e2c14&ws_ab_test=searchweb0_0,searchweb201602_,searchweb201603_*/
            border: 1px solid #e6e6e6;
            margin-top: -284px;
            width: 200px;
            height: 284px;
            margin-left: 269px;
        }
        .tovary2 p{
            margin-left: 33px;
            margin-top: -17px;
            color: #747575;
        }
        .tovary2 h3{
            margin-top: 0px;
            margin-left: 9px;
            color: #4e4e4e;

        }
        .tovary2 ion-icon{
            color: #ffbd30;
            margin-top: -39px;
            font-size: 18px;
            display: block;
            margin-left: 8px;
        }

        .tovary2 h4 {
            margin-left: 121px;
            padding-top: 10px !important;
            color: #6fc7ef;
        }
        .img-2{
            width: 100%;
        }
        .tovary3{
            border: 1px solid #e6e6e6;
            margin-top: -284px;
            width: 200px;
            margin-left: 513px;
            height: 284px;

        }
        .tovary3 p{
            margin-left: 33px;
            margin-top: -17px;
            color: #747575;
        }
        .tovary3 h3{
            margin-top: 0px;
            margin-left: 9px;
            color: #4e4e4e;

        }
        .tovary3 ion-icon{
            color: #ffbd30;
            margin-top: -39px;
            font-size: 18px;
            display: block;
            margin-left: 8px;
        }

        .tovary3 h4 {
            margin-left: 121px;
            padding-top: 10px !important;
            color: #6fc7ef;
        }
        .img-1 {
            width: 100%;
        }
        .tovary4{
            border: 1px solid #e6e6e6;
            margin-top: -284px;
            width: 200px;
            margin-left: 755px;
            height: 284px;

        }
        .tovary4 p{
            margin-left: 33px;
            margin-top: -17px;
            color: #747575;
        }
        .tovary4 h3{
            margin-top: 0px;
            margin-left: 9px;
            color: #4e4e4e;

        }
        .tovary4 ion-icon{
            color: #ffbd30;
            margin-top: -39px;
            font-size: 18px;
            display: block;
            margin-left: 8px;
        }

        .tovary4 h4 {
            margin-left: 121px;
            padding-top: 10px !important;
            color: #6fc7ef;
        }
    </style>
</head>
<body>
    @yield('novinki')
</body>
</html>
