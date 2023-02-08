@extends('layouts.app')

@section('main-content')
    <div class="wrapper-comics">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <div class="little-box">
                            <img src="{{ $comic.thumb }}" alt="{{ $comic->series }}">
                            {{ $comic->series }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection