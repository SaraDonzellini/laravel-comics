@extends('layouts.app')

@section('main-content')
    <div class="wrapper-comics">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <p class="bluebox">
                        CURRENT SERIES
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <div class="little-box">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                            <p class="text-uppercase">
                                {{ $comic['series'] }}

                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bluebutton">
                        LOAD MORE
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection