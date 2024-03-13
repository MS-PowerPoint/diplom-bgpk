@extends('layouts.index')

@section('title', 'Школы')

@section('content')
<style>
    * {

padding: 0px;
margin: 0px auto;
font-family: 'Sedgwick Ave Display', cursive;
color: rgb(186, 186, 186);
text-shadow: black 1px 0 3px,
    black -1px 0 3px,
    black 0px 1px 3px,
    black 0px -1px 3px;
}

body {
top: 0 !important;
background-color: rgb(227, 227, 227);

.skiptranslate {
    display: none;
    height: 0;
}

.language__img {
    cursor: pointer;
}

}
    header {
    background-color: rgb(50, 50, 50);

}

.logo {
    width: 40%;
}

.menu-content {
    max-height: 0;
    overflow: hidden;
    font-family: 'Oswald', sans-serif;

}

li a:hover {
    color: red;
    background-color: rgb(30, 30, 30);
}

.menu-content li {
    width: 16.6%;
}

input:checked~label {
    background-image: url(/menu-png/cross.png);
}

input:checked~.menu-content {
    max-height: 100%;
}

.collapsible-menu {


    border-bottom: 3px solid black;


}

.collapsible-menu ul {
    border-top: 3px solid black;
    display: flex;
    list-style-type: none;
    padding: 0;

}

.collapsible-menu a {
    display: block;
    color: rgb(186, 186, 186);
    text-decoration: none;
}


.collapsible-menu label {

    font-size: 20px;
    margin: 1px;
    display: block;
    cursor: pointer;
    background: url(/menu-png/menu-bar.png) no-repeat center;
    background-size: 30px 80%;
    background-position: 0;
    width: 90px;


    padding: 5px
}

.collapsible-menu label:hover {
    color: red;

}

input#menu {
    display: none;
}

input:checked+label {
    background-image: url(/menu-png/cross.png);
}



footer {
    width: 100%;
    background-color: rgb(50, 50, 50);

    background-image: url(/png/logo-no-background.png);
    background-repeat: no-repeat;
    background-size: 70%;
    background-position: center;
}

.blur {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    padding: 10px 0;
    backdrop-filter: blur(5px);
}

.menu-footer {
    max-height: 100%;
    text-align: center;
    margin: 0 15px;


}

.menu-footer a {
    font-size: 15px;
    text-decoration: none;
    color: rgb(186, 186, 186);

}

.menu-footer Label {

    font-size: 30px;
}

.menu-footer ul {
    list-style-type: none;
    padding: 0px;

}

.Payment-method-footer {

    margin: 10px;

}

.Connection-method-footer img {
    width: 10%;
}

.Payment-method-footer img {
    width: 15%;
}

.footer-column {
    display: flex;
    width: 33%;
    align-items: center;
    justify-content: center;

}

.footer-column.two {


    padding-top: 20px;
    flex-direction: column;
    justify-content: space-between;
}





.btn-up {
    position: fixed;
    background-color: grey;
    left: 20px;
    bottom: 20px;
    border-radius: 30px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.3s ease-in-out;
    width: 50px;
    height: 50px;
    opacity: 1;
}

.btn-up::before {
    content: "";
    width: 40px;
    height: 40px;
    background-size: 100% 100%;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23fff' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z'/%3E%3C/svg%3E");
}

.btn-up_hide {
    display: none;
}

.btn-up_hiding {
    opacity: 0;
}

@media (hover: hover) and (pointer: fine) {
    .btn-up:hover {
        background-color: grey;
    }
}
</style>

<a href="/" class="btn btn-primary" >☜(ﾟヮﾟ☜)BACK</a>
<a href="/schools/create" class="btn btn-primary" >CREATE💹</a>
<div class="row">
    @foreach($schools as $school)
    <div class="col-6  p-3">
        <div class="card text-center p-3">
        <div class="card-header p-3">
            <h1>Категория № {{$school->id}}</h1>
        </div>

        <div class="body-body">
            <h5 class="card-title">{{$school->name}}</h5>
            <p class="card-text">{{$school->desk}}</p>
            <a href="schools/{{$school->id}}" class="btn btn-primary" > Подробнее😲</a>
            <a href="schools/{{$school->id}}/update" class="btn btn-primary" > Изменить✍</a>
            
            <form action="{{ route('schools.delete', ['school' => $school->id]) }}" method="post">
            @method('delete')
            @csrf 
            <input class="btn btn-primary" type="submit" value="Удалить😡">
            
            </form>

        </div>
        </div>
    </div>   
    @endforeach
</div>
@endsection


<script>
    /*!***************************************************
 * google-translate.js v1.0.3
 * https://Get-Web.Site/
 * author: Vitalii P.
 *****************************************************/

const googleTranslateConfig = {
    /* Original language */
    lang: "ru",
    /* The language we translate into on the first visit*/
    /* Язык, на который переводим при первом посещении */
    // langFirstVisit: 'en',
    /* Если скрипт не работает на поддомене, 
    раскомментируйте и
    укажите основной домен в свойстве domain */
    /* domain: "Get-Web.Site" */
};

function TranslateInit() {

    if (googleTranslateConfig.langFirstVisit && !Cookies.get('googtrans')) {
        // Если установлен язык перевода для первого посещения и куки не назначены
        TranslateCookieHandler("/auto/" + googleTranslateConfig.langFirstVisit);
    }

    let code = TranslateGetCode();
    // Находим флаг с выбранным языком для перевода и добавляем к нему активный класс
    if (document.querySelector('[data-google-lang="' + code + '"]') !== null) {
        document.querySelector('[data-google-lang="' + code + '"]').classList.add('language__img_active');
    }

    if (code == googleTranslateConfig.lang) {
        // Если язык по умолчанию, совпадает с языком на который переводим
        // То очищаем куки
        TranslateCookieHandler(null, googleTranslateConfig.domain);
    }

    // Инициализируем виджет с языком по умолчанию
    new google.translate.TranslateElement({
        pageLanguage: googleTranslateConfig.lang,
    });

    // Вешаем событие  клик на флаги
    TranslateEventHandler('click', '[data-google-lang]', function (e) {
        TranslateCookieHandler("/" + googleTranslateConfig.lang + "/" + e.getAttribute("data-google-lang"), googleTranslateConfig.domain);
        // Перезагружаем страницу
        window.location.reload();
    });
}

function TranslateGetCode() {
    // Если куки нет, то передаем дефолтный язык
    let lang = (Cookies.get('googtrans') != undefined && Cookies.get('googtrans') != "null") ? Cookies.get('googtrans') : googleTranslateConfig.lang;
    return lang.match(/(?!^\/)[^\/]*$/gm)[0];
}

function TranslateCookieHandler(val, domain) {
    // Записываем куки /язык_который_переводим/язык_на_который_переводим
    Cookies.set('googtrans', val);
    Cookies.set("googtrans", val, {
        domain: "." + document.domain,
    });

    if (domain == "undefined") return;
    // записываем куки для домена, если он назначен в конфиге
    Cookies.set("googtrans", val, {
        domain: domain,
    });

    Cookies.set("googtrans", val, {
        domain: "." + domain,
    });
}

function TranslateEventHandler(event, selector, handler) {
    document.addEventListener(event, function (e) {
        let el = e.target.closest(selector);
        if (el) handler(el);
    });
}
</script>