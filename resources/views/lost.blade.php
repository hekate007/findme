@extends('layouts.app')

@section('content')
    <div class="card-columns  text-dark">
        <div class="card" onclick="document.location.href='{{ url('/person') }}'">
            <div class="card-header">
                Николай
            </div>
            <img src='{{ url("jpg/07.jpg") }}' class="card-img-top p-2" alt="..." height="500px">
            <div class="card-body">
                <h5 class="card-title">Пропал</h5>
                <p class="card-text">Пошёл в магазин за колбасой. В магазине его видели. Но после магазина он пропал. Помогите</p>
                <p class="card-text">
                    <small class="text-muted">1 день назад</small>
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Филипп
            </div>
            <img src="{{ url('jpg/02.jpg') }}" class="card-img-top p-2" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title">Пропал</h5>
                <p class="card-text">Ушёл из дома на работу. Вечером так и не вернулся</p>
                <p class="card-text">
                    <small class="text-muted">2 дня назад</small>
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Самосий
            </div>
            <img src="{{ url('jpg/03.jpg') }}" class="card-img-top p-2" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title">Пропал</h5>
                <p class="card-text">Самосий пропал днём. На работе мне сказали, что он не вернулся с обеда в столовой. Ушёл и не вернулся</p>
                <p class="card-text">
                    <small class="text-muted">4 дня назад</small>
                </p>
            </div>
        </div>
        <div class="card d-none">
            <div class="card-header">
                Сиборгий
            </div>
            <img src="{{ url('jpg/04.jpg') }}" class="card-img-top p-2" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title">Пропал</h5>
                <p class="card-text">Мой Сиборгий вышел вынести мусор. Через 20 минут он так и не вернулся. Я звонила ему на телефо, он так и не отвечал мне.</p>
                <p class="card-text">
                    <small class="text-muted">5 дней назад</small>
                </p>
            </div>
        </div>
        <div class="card d-none">
            <div class="card-header">
                Боромир
            </div>
            <img src="{{ url('jpg/05.jpg') }}" class="card-img-top p-2" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title">Пропал</h5>
                <p class="card-text">Мы были вместе в супермаркете. Боромир ушёл в отдел сладостей. Я долго ждала его у касс. Потом пошла искать по залу. Я так его ине нашла. Он пропал. Пожалуйста, помогите</p>
                <p class="card-text">
                    <small class="text-muted">8 дней назад</small>
                </p>
            </div>
        </div>
        <div class="card d-none">
            <div class="card-header">
                Никодим
            </div>
            <img src="{{ url('jpg/06.jpg') }}" class="card-img-top p-2" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title">Пропал</h5>
                <p class="card-text">Никодим пропал во время грозы. У нас сломалась крыша. Он ушёл чинить. Куда он мог пропасть? Помогите.</p>
                <p class="card-text">
                    <small class="text-muted">10 дней назад</small>
                </p>
            </div>
        </div>
        <div class="card d-none">
            <div class="card-header">
                Ксения
            </div>
            <img src="{{ url('jpg/01.jpg') }}" class="card-img-top p-2" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title">Пропала</h5>
                <p class="card-text">Ксения пошла на занятия по пилатесу. Студия находится на улице Калошинской. На занятиях она была. Но после занятий её никто не видел.</p>
                <p class="card-text">
                    <small class="text-muted">11 дней назад</small>
                </p>
            </div>
        </div>
        <div class="card d-none">
            <div class="card-header">
                Мия
            </div>
            <img src="{{ url('jpg/08.jpg') }}" class="card-img-top p-2" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title">Пропала</h5>
                <p class="card-text">Мия вышла погулять в двор. Я её видел там до 10 утра. Я искал её в течение двух часов.</p>
                <p class="card-text">
                    <small class="text-muted">12 дней назад</small>
                </p>
            </div>
        </div>
        <div class="card d-none">
            <div class="card-header">
                Андалусия
            </div>
            <img src="{{ url('jpg/15.jpg') }}" class="card-img-top p-2" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title">Пропала</h5>
                <p class="card-text">Ушла в магазин за хлебом. В магазине по её описанию никого не видели</p>
                <p class="card-text">
                    <small class="text-muted">13 дней назад</small>
                </p>
            </div>
        </div>
        <div class="card d-none">
            <div class="card-header">
                Мария
            </div>
            <img src="{{ url('jpg/11.jpg') }}" class="card-img-top p-2" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title">Пропала</h5>
                <p class="card-text">Маша была на выпускном друга. Друг оставил её в клубе на некоторое время. Когда он вернулся, её уже не нашёл. Помогите найти. Адрес клуба такой-то</p>
                <p class="card-text">
                    <small class="text-muted">15 дней назад</small>
                </p>
            </div>
        </div>
        <div class="card d-none">
            <div class="card-header">
                Борис
            </div>
            <img src="{{ url('jpg/10.jpg') }}" class="card-img-top p-2" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title">Пропал</h5>
                <p class="card-text">Борис катался на лыжах в парке. После 3 часов езды он так и не вернулся. Помогите найти. Парк был Михайловский</p>
                <p class="card-text">
                    <small class="text-muted">20 дней назад</small>
                </p>
            </div>
        </div>
        <div class="card d-none">
            <div class="card-header">
                Казимир
            </div>
            <img src="{{ url('jpg/12.jpg') }}" class="card-img-top p-2" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title">Пропал</h5>
                <p class="card-text">Казимир пошёл рисовать в парк атракционов. Я нашла его мольберт у продавщицы. Мне сказали что он ушёл в туалет. Помогите найти</p>
                <p class="card-text">
                    <small class="text-muted">23 дня назад</small>
                </p>
            </div>
        </div>
        <div class="card d-none">
            <div class="card-header">
                Патюрель
            </div>
            <img src="{{ url('jpg/13.jpg') }}" class="card-img-top p-2" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title">Пропал</h5>
                <p class="card-text">Мой брат ушёл готовиться к экзаменам в универ. На входе его никто не видел. Видимо он пропал по дороге.</p>
                <p class="card-text">
                    <small class="text-muted">25 дней назад </small>
                </p>
            </div>
        </div>
        <div class="card d-none">
            <div class="card-header">
                Кирилл
            </div>
            <img src="{{ url('jpg/14.jpg') }}" class="card-img-top p-2" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title">Пропал</h5>
                <p class="card-text">Кирилл был с друзьями на улице. Друзья рассказали как он садился в чью-то машину. Машина красного цвета киа спектра. Номер такой-то</p>
                <p class="card-text">
                    <small class="text-muted">1 месяц назад</small>
                </p>
            </div>
        </div>
        <div class="card d-none">
            <div class="card-header">
                Гринвальд
            </div>
            <img src="{{ url('jpg/09.jpg') }}" class="card-img-top p-2" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title">Пропал</h5>
                <p class="card-text">Гринвальд занимался магией в лесу. Он обещал вернуться к 10 вечера. Но его не было дома ни через день, ни после</p>
                <p class="card-text">
                    <small class="text-muted">1 месяц назад</small>
                </p>
            </div>
        </div>
    </div>
@endsection