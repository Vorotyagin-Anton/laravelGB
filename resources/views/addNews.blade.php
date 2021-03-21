@extends('main')

@section('title')
    {{ $head }}
@endsection

@section('content')
    <h1 class="content__head">{{ $head }}</h1>
    <form class="content__form" action="{{ route($route, $news->id) }}" method="post">
        @csrf
        <p class="content__formHead">Заголовок.</p>
        @if($errors->has('title'))
            <div class="content__error_validation">
                @foreach($errors->get('title') as $error)
                    <p style="margin-bottom: 0;">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <input type="text" class="content__formInput" name="title" value="{{ $news->title }}">
        <p class="content__formHead">Содержание новости.</p>
        @if($errors->has('inform'))
            <div class="content__error_validation">
                @foreach($errors->get('inform') as $error)
                    <p class="content__error_validationText">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <textarea rows="15" class="content__formInput" name="inform">{{ $news->inform }}</textarea>
        <p class="content__formHead">Доступно ли содержание новости для неавторизованных пользователей:</p>
        <p class="content__formHead">Да</p>
        <input type="radio" class="content__formInput" name="isPrivate" value="1" @if ($news->is_private == 1) checked @endif>
        <p class="content__formHead">Нет</p>
        <input type="radio" class="content__formInput" name="isPrivate" value="0" @if ($news->is_private == 0) checked @endif>
        <button class="content__formButton" type="submit">Отправить на сервер</button>
    </form>
@endsection
