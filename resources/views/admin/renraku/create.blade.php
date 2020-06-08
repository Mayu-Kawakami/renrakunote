@extends('layouts.admin')
@section('title', '連絡ノート')

@section('content')

<div class="container">
    <div class="form-group row">
        <h2>連絡ノート</h2>
    </div>
    <form class="border p-3 mb-5">
    <div class="form-group row">
        <label class="col-md-2 text-right">体温：</label>
        <div class="row col-md-4 form-inline">
            <input type="number"  class="form-control" name="taion">℃
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
        <label class="col-md-1 text-right">健康</label>
        <input type="number" class="form-control form-inline col-md-1" name="kenkou">回
        <label class="col-md-1 text-right">軟便</label>
        <input type="number" class="form-control form-inline col-md-1" name="kenkou">回
        <label class="col-md-1 text-right">下痢</label>
        <input type="number" class="form-control form-inline col-md-1" name="kenkou">回
    </div>
    <div class="form-group row">
        <label class="col-md-2 text-right">薬：</label>
        <div class="row col-md-8">
            <label><input type="radio" name="medicine" value="ari">あり</label>
            <label><input type="radio" name="medicine" value="nashi">なし</label>
            <p>※「あり」の場合は投薬依頼を登録して下さい。</p>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2 text-right">連絡事項：</label>
        <div class="col-md-8">
        <textarea class="form-control" name="renraku" rows="10"></textarea>
        </div>
    </div>
        
    <div class="row text-center">
        <div class="col-12">
        <input type="submit" class="btn btn-primary mb-3" value="登録">
        </div>
    </div>
    </form>

    <div class="row">
        <h2>投薬依頼</h2>
    </div>
    <form class="border p-4 mb-5">
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
            <label><input type="radio" name="time" value="before">食前</label>
            <label><input type="radio" name="time" value="after">食後</label>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2 text-right">薬の種類：</label>
        <div class="row col-md-8 text-inline">
            <label class="col-md-2 text-right"><input type="radio" name="powder" value="powder">粉</label>
            <label class="col-md-3 text-right"><input type="radio" name="syrup" value="syrup">シロップ</label>
            <label class="col-md-3 text-right"><input type="radio" name="tablet" value="tablet">錠剤</label>
            <label class="col-md-3 text-right"><input type="radio" name="tablet" value="tablet">外用薬</label>
        </div>
    </div>
    <div class="row">
        <p>※家でのみ服用</p>
    </div>
    <div class="form-group row">
    <label class="col-md-2 text-right">薬の種類：</label>
        <div class="row col-md-8 text-inline">
            <label class="col-md-2 text-right"><input type="radio" name="powder" value="powder">粉</label>
            <label class="col-md-3 text-right"><input type="radio" name="syrup" value="syrup">シロップ</label>
            <label class="col-md-3 text-right"><input type="radio" name="tablet" value="tablet">錠剤</label>
            <label class="col-md-3 text-right"><input type="radio" name="tablet" value="tablet">外用薬</label>
        </div>
    </div>
            
    <div class="row text-center">
        <div class="col-12">
        <input type="submit" class="btn btn-primary mb-3" value="登録">
        </div>
    </div>
    </form>

<!--container-->
</div>        
@endsection