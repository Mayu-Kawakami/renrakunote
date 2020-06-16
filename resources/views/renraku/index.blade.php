@extends('layouts.admin')
@section('title', '今日のできごと')

@section('content')

<div class="container">
    <div class="row">
        <h2>今日のできごと</h2>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="{{ action('JournalController@add') }}" role="button" class="btn btn-primary">新規作成</a>
        </div>
        <div class="col-md-8">
            <form action="{{ action('JournalController@index') }}" method="get">
                <div class="form-group row">
                    <label class="col-md-3">クラス</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                    </div>
                    <div class="col-md-2">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="検索">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="list-news col-md-12 mx-auto">
            <div class="row">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th width="10%">ID</th>
                            <th width="20%">クラス</th>
                            <th width="50%">本文</th>
                            <th width="10%">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $journal)
                            <tr>
                                <th>{{ $journal->id }}</th>
                                <td>{{ \Str::limit($journal->year, 10) }}</td>
                                <td>{{ \Str::limit($journal->body, 250) }}</td>
                                <td>
                                    <div>
                                        <a href="{{ action('JournalController@edit', ['id' => $journal->id]) }}">編集</a>
                                    </div>
                                    <div>
                                        <a href="{{ action('JournalController@delete', ['id' => $journal->id]) }}">削除</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection