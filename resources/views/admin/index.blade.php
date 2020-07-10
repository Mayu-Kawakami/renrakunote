@extends('layouts.admin')
@section('title', 'お子さまのプロフィール一覧')

@section('content')
<div class="container">
    
    <div class="row">
        <h2>お子さまのプロフィール一覧</h2>
    </div>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ action('Admin\MypageController@index') }}" method="get">
                <div class="form-group row">
                    <label class="col-md-2">名前</label>
                    <div class="col-md-2">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="検索">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mxauto">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="10%">ID</th>
                            <th width="15%">ニックネーム</th>
                            <th width="10%">性別</th>
                            <th width="20%">生年月日</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $profile)
                        <tr>
                            <th>{{ $profile->id }}</th>
                            <td>{{ \str::limit($profile->name, 100) }}</td>
                            <td>{{ \str::limit($profile->gender, 10) }}</td>
                            <td>{{ \str::limit($profile->birthday, 100) }}</td>
                            <td>
                                <div>
                                    <a href="{{ action('Admin\MypageController@edit , ['id' => $profile->id]) }}">編集</a>
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