@extends('layouts.admin')
@section('title', '連絡ノート一覧')

@section('content')
<div class="container">
    <div class="row">
        <h2>連絡ノート一覧</h2>
    </div>
        <div class="row">
        <div class="col-md-4">
            <a href="{{ action('Admin\RenrakueController@add') }}" role="button" class="btn btn-primary">新規作成</a>
        </div>
        <div class="col-md-8">
            <form action="{{ action('Admin\RenrakuController@index') }}" method="get">
                <div class="form-group row">
                    <label class="col-md-3">タイトル</label>
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

    <div class="list-renraku col-md-10 mx-auto">
        <div class="row">
            <table>
               <caption>連絡ノート</caption> 
               <tr>
                   <th>体温</th><td>{{ $note->taion }}</td>
               </tr>
               <tr>
                   <th>朝食</th><td>{{ $note->breakfast }}</td>
               </tr>
               <tr>
                   <th>便</th><td>{{ $note->ben }}</td>
               </tr>
               <tr>
                   <th>薬</th><td>{{ $note->medicine }}</td>
               </tr>
               <tr>
                   <th>連絡事項</th><td>{{ $note->renraku }}</td>
               </tr>
            </table>
            <table>
                <caption>投薬依頼</caption>
                <tr>
                    <th>病院名</th><td>{{ $note->hospital }}</td>
                </tr>
                <tr>
                    <th>症状</th><td>{{ $note->symptom }}</td>
                </tr>
                <tr>
                    <th>与薬時間</th><td>{{ $note->time }}</td>
                </tr>
                <tr>
                    <th>薬の種類</th><td>{{ $note->type }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection