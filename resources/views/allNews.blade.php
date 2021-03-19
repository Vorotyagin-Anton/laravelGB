@extends('home')

@section('title')
    All News
@endsection

@section('content')
    <h1 class="content__head">Управление новостями</h1>
    <section class="content__news">
        <a class="content__newsOneLink content__addNews" href="{{ route('addNews') }}">Добавить новость</a>
        @forelse($news as $newsOne)
            <div class="content__newsOne">
                <h2 class="content__newsOneHead"><a href="{{ route('news', ['news' => $newsOne->id]) }}" class="content__newsOneLink">{{ $newsOne->title }}</a></h2>
                <p class="content__newsOneText">{{ $newsOne->inform }}</p>
            </div>
            <div class="content__manageNews">
                <a class="content__newsOneLink" href="{{ route('updateNews', ['news' => $newsOne->id]) }}">Изменить новость</a>
                <a class="content__newsOneLink" href="{{ route('deleteNews', ['news' => $newsOne->id]) }}">Удалить новость</a>
            </div>
        @empty
            <p>Нет новостей</p>
        @endforelse
        {{ $news->links() }}
    </section>
@endsection
