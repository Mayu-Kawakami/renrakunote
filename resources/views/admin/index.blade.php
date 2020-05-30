@extends('layouts.admin')
@section('title', '保護者マイページ')

@section('content')
    <div class="container">
        <div class="row">
            <h2>保護者マイページ</h2>
        </div>

                            <label class="mail">E-mail</label>
                <div class="col-md-8">
                    <input type="emai" name="mail" value="{{ old('mail') }}">
                </div>
            </div>
            
             <div class="form-group row">
                <label class="col-md-4">パスワード</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="password" value="{{ old('password') }}">
                </div>
            </div>
            
              <div class="form-group row">
                <label class="col-md-4">名前</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
              </div>
            
            <div class="form-group row">
                <label class="col-md-2">続柄</label>
                <div class="row col-md-10">
                    <label><input type="radio" name="zokugara" value="mother">母</label>
                    <label><input type="radio" name="zokugara" value="father">父</label>
                    <label><input type="radio" name="zokugara" value="grandparents">祖父母</label>
                </div>
            </div>
        </section>
        
        <input type="submit" class="btn btn-primary" value="更新">
@endsection