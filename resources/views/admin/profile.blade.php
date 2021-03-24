@extends('main')

@section('title')
    Change Profile
@endsection

@section('content')
    <h1 class="content__head">Change profile</h1>
    <form class="content__form" action="{{ route('updateProfile') }}" method="post">
        @csrf
        <p class="content__formHead">Name</p>
        @if($errors->has('title'))
            <div class="content__error_validation">
                @foreach($errors->get('title') as $error)
                    <p style="margin-bottom: 0;">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <input type="text" class="content__formInput" name="name" value="{{ $user->name }}">
        <p class="content__formHead">Email.</p>
        @if($errors->has('email'))
            <div class="content__error_validation">
                @foreach($errors->get('email') as $error)
                    <p class="content__error_validationText">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <input type="text" class="content__formInput" name="email" value="{{ $user->email }}">
        <p class="content__formHead">Password.</p>
        @if($errors->has('password'))
            <div class="content__error_validation">
                @foreach($errors->get('password') as $error)
                    <p class="content__error_validationText">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <input type="password" class="content__formInput" name="password">
        <p class="content__formHead">New password.</p>
        @if($errors->has('newPassword'))
            <div class="content__error_validation">
                @foreach($errors->get('newPassword') as $error)
                    <p class="content__error_validationText">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <input type="password" class="content__formInput" name="newPassword">
        <p class="content__formHead">Является ли администратором:</p>
        <p class="content__formHead">Да</p>
        <input type="radio" class="content__formInput" name="is_admin" value="1" @if ($user->is_admin == 1) checked @endif>
        <p class="content__formHead">Нет</p>
        <input type="radio" class="content__formInput" name="is_admin" value="0" @if ($user->is_admin == 0) checked @endif>
        <button class="content__formButton" type="submit">Отправить на сервер</button>
    </form>
@endsection
