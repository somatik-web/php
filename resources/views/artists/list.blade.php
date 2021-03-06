@extends('layouts.app')

@section('content')
    <ul class="artists">
        @foreach($artists as $artist)
            <li class="artists__item"><a class="artists__link" href="/artist/{{ $artist->id }}">
                    <img class="artists__img"
                         src="/img/artists/thumb/{{ $artist->photo_url }}"
                         alt="{{ $artist->name }}"
                         width="300" height="400">
                    <h2 class="artists__title">{{ $artist->name }}</h2></a>
            </li>
        @endforeach
    </ul>
@endsection
