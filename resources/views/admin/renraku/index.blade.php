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
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="col-12 mx-auto" action="{{ action('Admin\RenrakuController@index') }}" method="get">
               <div class="col-md-12 mx-auto">
                    
                        <table>
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="10%">体温</th>
                                    <th width="30%">朝食</th>
                                    <th width="10%">便</th>
                                    <th width="10%">薬</th>
                                    <th width="35%">連絡事項</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $note)
                                <tr>
                                    <th>{{ $note->id }}</th>
                                    <td>{{ $note->taion }}</td>
                                    <td>{{ $note->breakfast }}</td>>
                                    <td>{{ $note->ben }}</td>
                                    <td>{{ $note->medicine }}</td>
                                    <td>{{ $note->renraku }}</td>
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
                                <tr>
                                    <th>{{ $note->hospital }}</th>
                                    <th>{{ $note->symptom }}</th>
                                    <th>{{ $note->time }}</th>
                                    <th>{{ $note->type }}</th>
                                </tr>
                            </tbody>
                            @endforeach
                            <!--
                            <tr>
                                <th>病院名</th><td>//{//{// $note->hospital }}</td>
                            </tr>
                            <tr>
                                <th>症状</th><td>//{//{ $note->symptom }}</td>
                            </tr>
                            <tr>
                                <th>与薬時間</th><td>//{//{ $note->time }}</td>
                            </tr>
                            <tr>
                                <th>薬の種類</th><td>//{//{ $note->type }}</td>
                            </tr>
                            -->
                        </table>
                    
                </div>
            </form>
        </div>
    </div>
</div>

@endsection