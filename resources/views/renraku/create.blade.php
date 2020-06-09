@extends('layouts.admin')
@section('title', '今日のできごと')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>今日のできごと</h2>
                <form  class="border p-3" action="{{ action('NoticeController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-3 text-right">クラス:</label>
                        <div class="row col-md-9">
                            <label class="p-1"><input type="radio" name="year" value="0">0歳</label>
                            <label class="p-1"><input type="radio" name="year" value="1">1歳</label>
                            <label class="p-1"><input type="radio" name="year" value="2">2歳</label>
                            <label class="p-1"><input type="radio" name="year" value="3">3歳</label>
                            <label class="p-1"><input type="radio" name="year" value="4">4歳</label>
                            <label class="p-1"><input type="radio" name="year" value="5">5歳</label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 text-right" for="body">本文:</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <div class="row text-center">
                        <div class="col-12">
                        <input type="submit" class="btn btn-primary" value="登録">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection