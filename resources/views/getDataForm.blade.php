@extends('home')

@section('title')
    Get Data Form
@endsection

@section('content')
    <h1 class="content__head">Форма запроса на получение выгрузки данных</h1>
    <form class="content__form" action="{{ route('getDataForm') }}" method="post">
        @csrf
        <p class="content__formHead">Имя заказчика.</p>
        <input type="text" class="content__formInput" name="name" value="{{ old('name') }}">
        <p class="content__formHead">Номер телефона.</p>
        <input type="text" class="content__formInput" name="phone" value="{{ old('phone') }}">
        <p class="content__formHead">Email-адрес.</p>
        <input type="text" class="content__formInput" name="email" value="{{ old('email') }}">
        <p class="content__formHead">Информации о том, что хотите получить.</p>
        <input type="text" class="content__formInput" name="info" value="{{ old('info') }}">
        <button class="content__formButton" type="submit">Отправить запрос</button>
    </form>
@endsection
