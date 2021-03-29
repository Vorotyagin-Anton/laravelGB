@extends('main')

@section('title')
    {{ $newsOne->title }}
@endsection

@section('content')
    <h1 class="content__head">{{ $newsOne->title }}</h1>
    <p class="content__text">{{!! $newsOne->inform !!}}</p>
@endsection
