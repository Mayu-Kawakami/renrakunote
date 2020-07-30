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
                   @foreach($posts as $note)
                   <div class="renraku-post border p-3">
                       <p>{{ $note->created_at->isoformat("Y年MM月DD日(ddd)") }}</p>
                       <ul class="row">
                           <li class="col-md-4 row">
                               <h3 class="col-md-5">体温：</h3>
                               <p class="col-md-5">{{ $note->taion }}℃</p>
                           </li>
                           <li class="col-md-4 row">
                               <h3 class="col-md-5">朝食：</h3>
                               <p class="col-md-5">{{ $note->breakfast }}</p>
                           </li>
                           <li class="col-md-4 row">
                               <h3 class="col-md-5">便：</h3>
                               <p class="col-md-5">{{ $note->ben }}</p>
                           </li>
                       </ul>
                       <h3>連絡事項</h3>
                       <div class="renraku-cont">
                           {{ $note->renraku }}
                       </div>
                       @if( $note->medicine == 'あり' )
                       <h2 class="mt-5">【投薬依頼】</h2>
                       <ul class="row">
                           <li class="col-md-4 row">
                               <h3 class="col-md-5">病院名：</h3>
                               <p class="col-md-5">{{ $note->hospital }}</p>
                           </li>
                           <li class="col-md-4 row">
                               <h3 class="col-md-5">症状：</h3>
                               <p class="col-md-5">{{ $note->symptom }}</p>
                           </li>
                           <li class="col-md-4 row">
                               <h3 class="col-md-5">投薬時間：</h3>
                               <p class="col-md-5">{{ $note->time }}</p>
                           </li>
                           <li class="col-md-4 row">
                               <h3 class="col-md-5">薬の種類：</h3>
                               <p class="col-md-5">{{ $note->type }}</p>
                           </li>
                       </ul>
                       @endif
                   </div>
                   @endforeach
                </div>
            </form>
        </div>
    </div>
</div>
@endsection