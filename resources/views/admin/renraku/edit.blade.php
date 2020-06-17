@extends('layouts.admin')
@section('title', '連絡ノート編集')

@section('content')

<div class="container">
    <div class="row">
        <h2>連絡ノート</h2>
        <form action="{{ action('Admin\RenrakuController@create') }}" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="border p-3 mb-5">
                <div class="form-group row">
                    <label class="col-md-2 text-right">体温：</label>
                    <div class="row col-md-4 form-inline">
                        <input type="number"  class="form-control" name="taion" value="{{ $note_form->taion }}">℃
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 text-right">朝食：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="breakfast" value="{{ $note_form->breakfast }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 text-right">便：</label>
                        <div class="row col-md-8">
                            <label><input type="radio" name="ben" value="あり" @if($note_form->ben == 'あり') checked @endif>あり</label>
                            <label><input type="radio" name="ben" value="なし" @if($note_form->ben == 'なし') checked @endif>なし</label>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 text-right">薬：</label>
                    <div class="row col-md-8">
                        <label><input type="radio" name="medicine" value="あり" @if($note_form->medicine == 'あり') checked @endif>あり</label>
                        <label><input type="radio" name="medicine" value="なし" @if($note_form->medicine == 'なし') checked @endif>なし</label>
                        <p>※「あり」の場合は投薬依頼を登録して下さい。</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 text-right">連絡事項：</label>
                    <div class="col-md-8">
                    <textarea class="form-control" name="renraku" rows="10">{{ $note_form->renraku }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
              <h2>投薬依頼</h2>
            </div>
            <div class="border p-4 mb-5">
                <div class="form-group row">
                    <label class="col-md-2 text-right">病院名：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="hospital" value="{{ $note_form->hospital }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 text-right">症状：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="symptom" value="{{ $note_form->symptom }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 text-right">与薬時間：</label>
                    <div class="row col-md-8">
                        <label><input type="radio" name="time" value="食前" @if($note_form->time == '食前') checked @endif>食前</label>
                        <label><input type="radio" name="time" value="食後" @if($note_form->time == '食後') checked @endif>食後</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 text-right">薬の種類：</label>
                    <div class="row col-md-8 text-inline">
                        <label class="col-md-2 text-right"><input type="radio" name="type" value="粉" @if($note_form->time == '粉') checked @endif>粉</label>
                        <label class="col-md-3 text-right"><input type="radio" name="type" value="シロップ" @if($note_form->time == 'シロップ') checked @endif>シロップ</label>
                        <label class="col-md-3 text-right"><input type="radio" name="type" value="錠剤"　@if($note_form->time == '錠剤') checked @endif>錠剤</label>
                        <label class="col-md-3 text-right"><input type="radio" name="type" value="外用薬"　@if($note_form->time == '外用薬') checked @endif>外用薬</label>
                    </div>
                </div>
            
                {{ csrf_field() }}
            
                <div class="row text-center">
                    <div class="col-12">
                        <input type="submit" class="btn btn-primary mb-3" value="登録">
                    </div>
                </div>
            </div>
        </form>
    </div>
<!--container-->
</div>        

@endsection