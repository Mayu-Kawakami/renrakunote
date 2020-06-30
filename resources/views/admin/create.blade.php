@extends('layouts.admin')
@section('title', 'お子さまのプロフィール登録')

@section('content')
<div class="container">
    <div class="row">
        
        <form class="col-8 mx-auto" actionactionactionaction="{{ action('Admin\MypageController@create') }}" method="post" enctype="multipart/form-data">
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
                <label class="col-md-2 text-right">性別</label>
                <div class="row col-md-10">
                　<label><input type="radio"  name="gender" value="man">男</label>
　　　　　　　　　<label><input type="radio"  name="gender" value="woman">女</label>　
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 text-right">生年月日</label>
                <div class="row col-md-10">
                    <select name="year">
                        <option value="">-</option>
                        <option value="2013">2013</option>
                        <option value="2013">2014</option>
                        <option value="2013">2015</option>
                        <option value="2013">2016</option>
                        <option value="2013">2017</option>
                        <option value="2013">2018</option>
                        <option value="2013">2019</option>
                        <option value="2013">2020</option>
                    </select>年
                    <select name="month">
                        <option value="">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>月
                    <select name="day">
                        <option value="">-</option>
                        <option value="1">1</option>
                        <option value="2">2/option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>日
                </div>
            </div>

            {{ csrf_field() }}
            <div class="row text-center">
                <div class="col-md-12 mb-5">
                <input type="submit" class="btn btn-primary" value="登録">
                </div>
            </div>
        </form>
    </div>
</div><!--container-->        
@endsection