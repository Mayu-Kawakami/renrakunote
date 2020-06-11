@extends('layouts.admin')
@section('title', '今日のできごと編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>今日のできごと編集</h2>
                <form  class="border p-3" action="{{ action('JournalController@edit') }}" method="post" enctype="multipart/form-data">

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
                            <label class="p-1"><input type="radio" name="year" value="0歳" @if($journal_form == '0歳') checked @endif>0歳</label>
                            <label class="p-1"><input type="radio" name="year" value="1歳" @if($journal_form == '1歳') checked @endif>1歳</label>
                            <label class="p-1"><input type="radio" name="year" value="2歳" @if($journal_form == '2歳') checked @endif>2歳</label>
                            <label class="p-1"><input type="radio" name="year" value="3歳" @if($journal_form == '3歳') checked @endif>3歳</label>
                            <label class="p-1"><input type="radio" name="year" value="4歳" @if($journal_form == '4歳') checked @endif>4歳</label>
                            <label class="p-1"><input type="radio" name="year" value="5歳" @if($journal_form == '5歳') checked @endif>5歳</label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 text-right" for="body">本文:</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="body" rows="20">{{ $journal_form->body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $journal_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection