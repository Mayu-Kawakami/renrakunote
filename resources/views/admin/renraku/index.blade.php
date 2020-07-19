@extends('layouts.admin')
@section('title', '連絡ノート一覧')

@section('content')
<div class="container">
    <div class="row">
        <h2>連絡ノート一覧</h2>
    </div>
        <div class="row">
        <div class="col-md-4">
            <a href="{{ action('Admin\RenrakuController@add') }}" role="button" class="btn btn-primary">新規作成</a>
        </div>
        <div class="col-md-8">
            <form action="{{ action('Admin\RenrakuController@index') }}" method="get">
            </form>
        </div>
    </div>

    <div class="col-md-12 mx-auto">
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th width="5%">ID</th>
                        <th width="10%">ニックネーム</th>
                        <th width="10%">体温</th>
                        <th width="20%">朝食</th>
                        <th width="5%">便</th>
                        <th width="10%">薬</th>
                        <th width="30%">連絡事項</th>
                    </tr>
                </thead>
                <tbody>
                    @if(Auth::user()->notes != NULL)
                    @foreach(Auth::user()->notes as $note)
                    <tr>
                        <th>{{ $note->id }}</th>
                        <td>{{ $profile->nickname }}</td>
                        <td>{{ $note->taion }}</td>
                        <td>{{ $note->breakfast }}</td>>
                        <td>{{ $note->ben }}</td>
                        <td>{{ $note->medicine }}</td>
                        <td>{{ $note->renraku }}</td>
                    </tr>
                    @endforeach
                    @endif
                    <tr>
                        <td>{{ $note->hospital }}</td>
                        <td>{{ $note->symptom }}</td>
                        <td>{{ $note->time }}</td>
                        <td>{{ $note->type }}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <caption>投薬依頼</caption>
                <thead>
                    <tr>
                        <th width="20%">病院名</th>
                        <th width="20%">症状</th>
                        <th width="10%">与薬時間</th>
                        <th width="10%">薬の種類</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
                <tr>
                    <th>病院名</th><td>{{ $note_form->hospital }}</td>
                </tr>
                <tr>
                    <th>症状</th><td>{{ $note_form->symptom }}</td>
                </tr>
                <tr>
                    <th>与薬時間</th><td>{{ $note_form->time }}</td>
                </tr>
                <tr>
                    <th>薬の種類</th><td>{{ $note_form->type }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection