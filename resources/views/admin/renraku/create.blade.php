@extends('layouts.admin')
@section('title', '連絡ノート')

@section('content')

<div class="container">
    <div class="row">
        <form class="col-8 mx-auto" action="{{ action('Admin\RenrakuController@create') }}" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
            <h2>連絡ノート</h2>
            <div class="col-md-12 border p-3 mb-5">
                <div class="form-group row">
                    <label class="col-md-2 text-right">体温：</label>
                    <div class="col-md-8 form-inline">
                        <input type="number" step="0.1"  class="form-control" name="taion">℃
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 text-right">朝食：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="breakfast">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 text-right">便：</label>
                        <div class="row col-md-8">
                            <label><input type="radio" name="ben" value="あり">あり</label>
                            <label><input type="radio" name="ben" value="なし">なし</label>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 text-right">薬：</label>
                    <div class="row col-md-8">
                        <label><input type="radio" name="medicine" value="あり">あり</label>
                        <label><input type="radio" name="medicine" value="なし">なし</label>
                        <p>※「あり」の場合は投薬依頼を登録して下さい。</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 text-right">連絡事項：</label>
                    <div class="col-md-8">
                    <textarea class="form-control" name="renraku" rows="10"></textarea>
                    </div>
                </div>
            </div>
            
              <h2>投薬依頼</h2>
            
            <div class="border p-4 mb-5">
                <div class="form-group row">
                    <label class="col-md-2 text-right">病院名：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="hospital">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 text-right">症状：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="symptom">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 text-right">与薬時間：</label>
                    <div class="row col-md-8">
                        <label><input type="radio" name="time" value="食前">食前</label>
                        <label><input type="radio" name="time" value="食後">食後</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 text-right">薬の種類：</label>
                    <div class="row col-md-8 text-inline">
                        <label class="col-md-2 text-right"><input type="radio" name="type" value="粉">粉</label>
                        <label class="col-md-3 text-right"><input type="radio" name="type" value="シロップ">シロップ</label>
                        <label class="col-md-3 text-right"><input type="radio" name="type" value="錠剤">錠剤</label>
                        <label class="col-md-3 text-right"><input type="radio" name="type" value="外用薬">外用薬</label>
                    </div>
                </div>
            
                {{ csrf_field() }}
                <!--<input type="hidden" name="user_id" value="{{ Auth::user()->id }}"-->
                </div>
                <div class="row text-center">
                    <div class="col-12">
                        <input type="submit" class="btn btn-primary mb-3" value="登録">
                    </div>
                </div>
        </form>
    </div>
<!--container-->
</div>        
@endsection