@extends('layouts.admin')
@section('title', '今日のできごと')

@section('content')
    <div class="container">
        <div class="row">
            <h2>今日のできごと</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form class="col-md-12 mx-auto" action="{{ action('DekigotoController@index') }}" method="get">
                    <div class="col-md-12 mx-auto">
                        <h3>{{ $date->isoformat("Y年MM月DD日(ddd)") }}</h3>
                        @foreach($posts as $journal)
                        <div class="dekigoto-post">
                            <ul class="row">
                                <li class="col-md-12 mx-auto row">
                                    <h4 class="col-md-1">{{ $journal->year }}</h4>
                                    <p class="col-md-9">{{ $journal->body }}</p>
                                </li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection