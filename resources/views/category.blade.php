@extends('main')

@section('title')
    {{ $category->title }}
@endsection

@section('content')
    <h1 class="content__head">{{ $category->title }}</h1>
    <p class="content__text">{{ $category->inform }}</p>
    <section class="content__news">
        @forelse($news as $newsOne)
            <div class="content__newsOne">
                <h2 class="content__newsOneHead"><a href="{{ route('news', ['news' => $newsOne->id]) }}" class="content__newsOneLink">{{ $newsOne->title }}</a></h2>
                <p class="content__newsOneText">{{ $newsOne->inform }}</p>
            </div>
        @empty
            <p>Нет новостей</p>
        @endforelse
        {{ $news->links() }}
    </section>
@endsection
