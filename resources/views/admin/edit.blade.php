@extends('layouts.admin')
@section('title', 'お子さまのプロフィール編集')

@section('content')
<div class="container">
    <div class="row">
        <form class="col-8 mx-auto" action="{{ action('Admin\MypageController@update') }}" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
            <h2>お子さまのプロフィール編集</h2>
            <div class="form-group row">
                <label class="col-md-4 text-right">ニックネーム</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="nickname" value="{{ $profile_form->nickname }}">
                </div>
            </div>
            <div class="form-group row mb-5">
                <label class="col-md-4 text-right">性別</label>
                <div class="row col-md-8">
                　<label><input type="radio"  name="gender" value="男の子" @if($profile_form->gender == '男の子') checked @endif>男の子</label>
　　　　　　　　　<label><input type="radio"  name="gender" value="女の子" @if($profile_form->gender == '女の子') checked @endif>女の子</label>　
                </div>
            </div>
            <div class ="form-group row mb-5">
                <label class="col-md-4 text-right">生年月日</label>
                <input type="date" class="form-control col-md-8" name="birthday" value="{{ $profile_form->birthday }}">
            </div>
            

            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ Auth::user()->ID }}">
            <div class="row text-center">
                <div class="col-md-12 mb-5">
                <input type="submit" class="btn btn-primary" value="更新">
                </div>
            </div>
        </form>
    </div>
<!--container-->
</div>        
@endsection