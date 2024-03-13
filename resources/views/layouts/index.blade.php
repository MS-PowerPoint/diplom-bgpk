<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<header>

<div class="language">
    <img src="images_lang/lang__ru.png" alt="ru" data-google-lang="ru" class="language__img">
    <img src="images_lang/lang__en.png" alt="en" data-google-lang="en" class="language__img">
    <img src="images_lang/lang__de.png" alt="de" data-google-lang="de" class="language__img">
    <img src="images_lang/lang__fr.png" alt="fr" data-google-lang="fr" class="language__img">
    <img src="images_lang/lang__pt.png" alt="pt" data-google-lang="pt" class="language__img">
    <img src="images_lang/lang__es.png" alt="es" data-google-lang="es" class="language__img">
    <img src="images_lang/lang__it.png" alt="it" data-google-lang="it" class="language__img">
    <img src="images_lang/lang__zh.png" alt="zh" data-google-lang="zh-CN" class="language__img">
    <img src="images_lang/lang__ar.png" alt="ar" data-google-lang="ar" class="language__img">
    <img src="images_lang/lang__nl.png" alt="nl" data-google-lang="nl" class="language__img">
    <img src="images_lang/lang__sv.png" alt="sv" data-google-lang="sv" class="language__img">
</div>
<div align="center">
    <img class="logo" src="png/logo-no-background.png" alt="asd">
</div>
<div class="collapsible-menu" align="center">
    <input type="checkbox" id="menu">
    <label for="menu" align="right">Меню</label>
    <div class="menu-content">
        <ul>
            <li><a href="главная.html">Главная</a></li>
            <li><a href="каталог.html">Каталог</a></li>
            <li><a href="избранные.html">Избранные</a></li>
            <li><a href="корзина.html">Корзина</a></li>
            <li><a href="личный_кабинет.html">Личный кабинет</a></li>
            <li><a href="помощь.html">Помощь</a></li>
        </ul>
    </div>
</div>
</header>
@if(session('succes')=== 1)
<div class ="alert alert-succes alert-disamissible fade show m-2" role="alert">
    <h5 class="alert-heading">Успешно</h5>
    <p>Операция пройдена успешно</p>
</div>
@elseif(session('succes')=== 0)
<div class="alert alert-danger" role="alert">
 <h5 class="alert-heading">Ошибка</h5>
    <p>Что то пошло не так</p>
</div>
@endif
<section>
@yield('content')
</section>
<footer>

<div class="blur">
    <div class="footer-column one">
        <div class="menu-footer">
            <ul>
                <Label>Меню</Label>
                <li><a href="главная.html">Главная</a></li>
                <li><a href="каталог.html">Каталог</a></li>
                <li><a href="избранные.html">Избранные</a></li>
                <li><a href="корзина.html">Корзина</a></li>
                <li><a href="личный_кабинет.html">Личный кабинет</a></li>
                <li><a href="помощь.html">Помощь</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-column two">
        <div class="Connection-method-footer" align="center">
            <h5>Мы в соц. Сетях</h5>
            <img src="icons8/icons8-telegram-app-48.png" alt="telegram">
            <img src="icons8/icons8-facebook-новый-48.png" alt="facebook">
            <img src="icons8/icons8-vk-в-круге-48.png" alt="vk">
            <img src="icons8/icons8-whatsapp-48.png" alt="whatsapp">
            <img src="icons8/icons8-youtube-48.png" alt="youtube">
            <img src="icons8/icons8-твиттер-48.png" alt="твиттер">
            <h5>Иконки от <a target="_blank" href="https://icons8.com">Icons8</a></h5>

        </div>
        <div>
            <h5>© Чистоедов Алексей Александрович, 2024</h5>
        </div>
    </div>
    <div class="footer-column three">

        <div class="Payment-method-footer" align="center">
            <h5>Способы оплаты:</h5>
            <img src="../imgPayment-method-png/Discover.png" alt="Discover">
            <img src="Payment-method-png/Maestro.png" alt="Maestro">
            <img src="Payment-method-png/MasterCard.png" alt="MasterCard">
            <img src="Payment-method-png/PayPal.png" alt="PayPal">
            <img src="Payment-method-png/Qiwi.png" alt="Qiwi">
            <img src="Payment-method-png/Sberbank-online.png" alt="Sberbank-online">
            <img src="Payment-method-png/Visa.png" alt="Visa">
            <img src="Payment-method-png/WebMoney.png" alt="WebMoney">
            <img src="Payment-method-png/Yandex.png" alt="Yandex">
            <img src="Payment-method-png/American Express.png" alt="American Express">
        </div>
    </div>
</div>

</footer>
<div class="btn-up btn-up_hide"></div>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
