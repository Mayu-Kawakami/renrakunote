<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>（保護者）子どものプロフィール登録</title>
    </head>
    <body>
        <header>
            <div class="header-title-area">
                <h1>○○保育園連絡帳</h1>
            </div>
        </header>
       
        <section>
            <h2>アカウント登録・編集</h2>
            <div class="form-group row">
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
        
        <input type="submit" class="btn btn-primary" value="登録">
        
        <section>
            <h2>お子さまのプロフィール登録</h2>
              <div class="form-group row">
                <h3>子①</h3> 
                <label class="col-md-4">ニックネーム</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="name1" value="{{ old('name1') }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2">生年月日</label>
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
                <label class="col-md-2">性別</label>
                    <div class="row col-md-10">
                        <label><input type="radio"  name="gender" value="man">男</label>
　　　　　　　　　　　　<label><input type="radio"  name="gender" value="woman">女</label>　
                    </div>
             </div>
                <h3>子②</h3> 
                <label class="col-md-4">ニックネーム</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="name1" value="{{ old('name1') }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2">生年月日</label>
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
                <label class="col-md-2">性別</label>
                    <div class="row col-md-10">
                        <label><input type="radio"  name="gender" value="man">男</label>
　　　　　　　　　　　　<label><input type="radio"  name="gender" value="woman">女</label>　
                    </div>
             </div>
                <h3>子③</h3> 
                <label class="col-md-4">ニックネーム</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="name1" value="{{ old('name1') }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2">生年月日</label>
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
                <label class="col-md-2">性別</label>
                    <div class="row col-md-10">
                        <label><input type="radio"  name="gender" value="man">男</label>
　　　　　　　　　　　　<label><input type="radio"  name="gender" value="woman">女</label>　
                    </div>
             </div>
        </section>
        
        <input type="submit" class="btn btn-primary" value="登録">
        
       <footer>
        <div class="footer">
          <p>○○保育園</p>
          <ul>
            <li>〒123-4567 〇〇県〇〇市〇〇町1-2-3</li>
            <li>TEL:0000-123-4567</li>
            <li>FAX:0000-123-4568</li>
          </ul>
        </div>
      </footer>
       
    </body>
</html>