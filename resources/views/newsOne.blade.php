@extends('home')

@section('title')
    {{ $newsOne['head'] }}
@endsection

@section('content')
    <h1 class="content__head">{{ $newsOne['head'] }}</h1>
    <p class="content__text">{{ $newsOne['text'] }}</p>
@endsection
