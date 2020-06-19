@extends('layouts.admin')
@section('title', '連絡ノート一覧')

@section('content')
<div class="container">
    <div class="row">
        <h2>連絡ノート一覧</h2>
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