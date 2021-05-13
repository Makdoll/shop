<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
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
            height: 447px;
        }
        .erorr{
            margin-left: 326px;
            margin-top: -123px;
        }
    </style>
</head>
<body>
    @yield('corzina')
</body>
</html>
