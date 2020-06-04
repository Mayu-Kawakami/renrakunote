@extends('layouts.admin')
@section('title', 'アカウント登録')

@section('content')
<div class="container">
    <div class="row">
        <h2>アカウント登録</h2>
    </div>

    <div class="form-group row">
        <label class="col-md-4 text-right">E-mail:</label>
        <div class="col-md-6">
            <input type="mail" class="form-control" name="mail" value="{{ old('mail') }}">
        </div>
    </div>
            
     <div class="form-group row">
        <label class="col-md-4 text-right">パスワード:</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="password" value="{{ old('password') }}">
        </div>
    </div>
            
    <div class="form-group row">
        <label class="col-md-4 text-right">名前:</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>
    </div>
            
    <div class="form-group row">
        <label class="col-md-4 text-right">続柄:</label>
        <div class="row col-md-8">
            <label><input type="radio" name="zokugara" value="mother">母</label>
            <label><input type="radio" name="zokugara" value="father">父</label>
            <label><input type="radio" name="zokugara" value="grandparents">祖父母</label>
        </div>
    </div>
    
    <div class="row text-center">
        <div class="col-md-12 mb-5">
             <input type="submit" class="btn btn-primary" value="登録">
        </div>
    </div>

    <div class="form-group row">
        <h2>お子さまのプロフィール登録</h2>
    </div>
    <div class="row">
        <h3>子①</h3>
    </div>
    <div class="form-group row">
        <label fclass="col-md-4 text-right">ニックネーム:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="name1">
            </div>
    </div>
        <div class="form-group row">
            <label class="col-md-2 text-right">生年月日:</label>
            <div class="row col-md-10">
    　　　　　　　<select name="year">
    　　　　　　　<option value="">-</option>
        　　　　　<option value="2013">2013</option>
    　　　　　　　<option value="2014">2014</option>
    　　　　　　　<option value="2015">2015</option>
    　　　　　　　<option value="2016">2016</option>
    　　　　　　　<option value="2017">2017</option>
    　　　　　　　<option value="2018">2018</option>
    　　　　　　　<option value="2019">2019</option>
    　　　　　　　<option value="2020">2020</option>
    　　　　　　　</select> 年
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
    　　　　　　　</select> 月　
    　　　　　　　<select name="day">
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
              </select> 日
            </div>
        </div>
        <div class="form-group row mb-5">
        <label class="col-md-2 text-right">性別:</label>
            <div class="row col-md-10">
                <label><input type="radio"  name="gender" value="man">男</label>
　　　　　　　　　　　　<label><input type="radio"  name="gender" value="woman">女</label>　
            </div>
        </div>
                
            <div class="row">
                <h3>子②</h3>
            </div>
            <div class="form-group row">
                <label fclass="col-md-4 text-right">ニックネーム:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name1">
                    </div>
            </div>
        <div class="form-group row">
            <label class="col-md-2 text-right">生年月日:</label>
            <div class="row col-md-10">
    　　　　　　　<select name="year">
    　　　　　　　<option value="">-</option>
        　　　　　<option value="2013">2013</option>
    　　　　　　　<option value="2014">2014</option>
    　　　　　　　<option value="2015">2015</option>
    　　　　　　　<option value="2016">2016</option>
    　　　　　　　<option value="2017">2017</option>
    　　　　　　　<option value="2018">2018</option>
    　　　　　　　<option value="2019">2019</option>
    　　　　　　　<option value="2020">2020</option>
    　　　　　　　</select> 年
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
    　　　　　　　</select> 月　
    　　　　　　　<select name="day">
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
              </select> 日
            </div>
        </div>
        <div class="form-group row mb-5">
        <label class="col-md-2 text-right">性別:</label>
            <div class="row col-md-10">
                <label><input type="radio"  name="gender" value="man">男</label>
　　　　　　　　　　　　<label><input type="radio"  name="gender" value="woman">女</label>　
            </div>
        </div>

            <div class="row">
                <h3>子③</h3>
            </div>
            <div class="form-group row">
                <label fclass="col-md-4 text-right">ニックネーム:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name1">
                    </div>
            </div>
        <div class="form-group row">
            <label class="col-md-2 text-right">生年月日:</label>
            <div class="row col-md-10">
    　　　　　　　<select name="year">
    　　　　　　　<option value="">-</option>
        　　　　　<option value="2013">2013</option>
    　　　　　　　<option value="2014">2014</option>
    　　　　　　　<option value="2015">2015</option>
    　　　　　　　<option value="2016">2016</option>
    　　　　　　　<option value="2017">2017</option>
    　　　　　　　<option value="2018">2018</option>
    　　　　　　　<option value="2019">2019</option>
    　　　　　　　<option value="2020">2020</option>
    　　　　　　　</select> 年
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
    　　　　　　　</select> 月　
    　　　　　　　<select name="day">
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
              </select> 日
            </div>
        </div>
        <div class="form-group row">
        <label class="col-md-2 text-right mb-5">性別:</label>
            <div class="row col-md-10">
                <label><input type="radio"  name="gender" value="man">男</label>
　　　　　　　　　　　　<label><input type="radio"  name="gender" value="woman">女</label>　
            </div>
        </div>
        
        <div class="row text-center">
            <div class="col-md-12 mb-5">
                <input type="submit" class="btn btn-primary" value="登録">
            </div>
        </div>

</div><!--container-->        
@endsection