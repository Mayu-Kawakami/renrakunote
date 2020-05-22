<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>保護者からの連絡ノート投稿</title>
    </head>
    <body>
        <header>
        <div class="header-title-area">
        <h1>保護者からの連絡ノート投稿</h1>
        </div>
        </header>
        
        <section>
            <h2>連絡ノート</h2>
            <div class="form-group row">
                <label for="taion">体温：</label>
                <input type="number" name="taion">℃
            </div>
            <div class="form-group row">
                <label for="breakfast">朝食：</label>
                <input type="text" name="breakfast">
            </div>
            <div class="form-group row">
                <label for="ben">便：</label>
                <label for="kenkou">健康<input type="number" name="kenkou">回</label>
                <label for="nan">軟便<input type="number" name="nan">回</label>
                <label for="geri">下痢<input type="number" name="geri">回</label>
            </div>
            <div class="form-group row">
                <label class="col-md-2">薬：</label>
                <div class="row col-md-10">
                    <label><input type="radio" name="medicine" value="ari">あり</label>
                    <label><input type="radio" name="medicine" value="nashi">なし</label>
                    <p>※「あり」の場合は投薬依頼を登録して下さい。</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="renraku">連絡事項：</label>
                <textarea class="renraku" name="renraku" rows="10"></textarea>
            </div>
        </section>
        
        <input type="submit" class="btn btn-primary" value="登録">
        
        <section>
            <h2>投薬依頼</h2>
            <div class="form-group row">
                <label for="hospital">病院名：</label>
                <input type="text" name="hospital">
            </div>
            <div class="form-group row">
                <label for="symptom">症状：</label>
                <input type="text" name="symptom">
            </div>
            <div class="form-group row">
                <label class="col-md-2">与薬時間：</label>
                <div class="row col-md-10">
                    <label><input type="radio" name="before" value="before">食前</label>
                    <label><input type="radio" name="after" value="after">食後</label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2">薬の種類：</label>
                <div class="row col-md-10">
                    <label><input type="radio" name="powder" value="powder">粉</label>
                    <label><input type="radio" name="syrup" value="syrup">シロップ</label>
                    <label><input type="radio" name="tablet" value="tablet">錠剤</label>
                    <label for="other">その他</label><input type="text" name="other">
                </div>
            </div>    
            <div class="form-group row">
                <p>※家でのみ服用</p>
                <label class="col-md-2">薬の種類：</label>
                <div class="row col-md-10">
                    <label><input type="radio" name="powder" value="powder">粉</label>
                    <label><input type="radio" name="syrup" value="syrup">シロップ</label>
                    <label><input type="radio" name="tablet" value="tablet">錠剤</label>
                    <label for="other">その他</label><input type="text" name="other">        
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