@extends('layouts.admin')
@section('title', 'お子さまのプロフィール登録')

@section('content')
<div class="container">
    <div class="row">
        
        <form class="col-8 mx-auto" action="{{ action('Admin\MypageController@create') }}" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
            <h2>お子さまのプロフィール登録</h2>
            <div class="form-group row">
                <label class="col-md-4 text-right">ニックネーム</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="nickname" value="{{ old('nickname') }}">
                </div>
            </div>
            <div class="form-group row mb-5">
                <label class="col-md-4 text-right">性別</label>
                <div class="row col-md-8">
                　<label><input type="radio"  name="gender" value="男の子">男の子</label>
　　　　　　　　　<label><input type="radio"  name="gender" value="女の子">女の子</label>　
                </div>
            </div>
            <div class ="form-group row mb-5">
                <label class="col-md-4 text-right">生年月日</label>
                <input type="date" class="form-control col-md-8" name="birthday" value="{{ old('birthday') }}">
            </div>
            

            {{ csrf_field() }}
            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
            <div class="row text-center">
                <div class="col-md-12 mb-5">
                <input type="submit" class="btn btn-primary" value="登録">
                </div>
            </div>
        </form>
    </div>
<!--container-->
</div>        
@endsection