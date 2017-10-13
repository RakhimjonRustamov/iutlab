<h1>Новый проект</h1><br>
<h3>Краткое описание проекта: {{$bodyMessage}}</h3>
<h3>Название компании: {{$company}}</h3>
<h3>Имя: {{$full_name}}</h3>
<h3>Номер телефона: {{$phone}}</h3>
<h3>Бюджет проекта: {{$budget}}</h3>
<br>
@foreach($orders as $order)
    @switch($num =(int)$order)
        @case(1)
        <br>
        Редизайн моего сайта
        @break
        @case(2)
        <br>
        Новый веб-сайт
        @break
        @case(3)
        <br>
        Электронная торговля
        @break
        @case(4)
        <br>
        Мобильное приложение
        @break
        @case(5)
        <br>
        Брендинг
        @break
        @case(6)
        <br>
        Маркетинг
        @break
        @case(7)
        <br>
        Поддержка
        @break
        @case(8)
        <br>
        Другие
        @break
    @endswitch
@endforeach
<p>Sent an email {{$email}}</p>


