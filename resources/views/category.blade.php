@extends('home')

@section('title')
    {{ $category['title'] }}
@endsection

@section('content')
    <h1 class="content__head">{{ $category['title'] }}</h1>
    <p class="content__text">{{ $category['description'] }}</p>
    <section class="content__news">
        @forelse($news as $newsOne)
            <div class="content__newsOne">
                <h2 class="content__newsOneHead"><a href="/news/{{ $newsOne['id'] }}" class="content__newsOneLink">{{ $newsOne['head'] }}</a></h2>
                <p class="content__newsOneText">{{ $newsOne['text'] }}</p>
            </div>
        @empty
            <p>Нет новостей</p>
        @endforelse
    </section>
@endsection
