@extends('layouts.admin')
@section('title', 'お知らせ')

@section('content')
    <div class="container">
        <div class="row">
            <h2>お知らせ</h2>
        </div>
        <div class="row">
            <div class="col md-12">
                <form class="col-md-12 mx-auto" action="{{ action('OsiraseController@index') }}" method="get">
                    <div class="col-md-12 mx-auto">
                        @foreach($posts as $notice)
                        <div class="osirase-post">
                            <ul class="row">
                                <li class="col-md-12 row">
                                    <h3>{{ $notice->updated_at->isoformat("Y年MM月DD日(ddd)") }}</h3>
                                    <h3>【{{ $notice->title }}】</h3>
                                </li>
                            </ul>
                            <div class="osirase-body mb-5">
                                {{ $notice->body }}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection