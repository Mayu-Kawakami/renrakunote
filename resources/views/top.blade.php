<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>トップページ</title>
    </head>
    
    <body>
        <h1>○○保育園連絡帳</h1>
      <section>    
        <h2 class="information">お知らせ</h2>
        <ul class="information-list">
            <li>2020年○月○日　タイトル</li>
            <li>2020年○月○日　タイトル</li>
            <li>2020年○月○日　タイトル</li>
            <li>2020年○月○日　タイトル</li>
            <li>2020年○月○日　タイトル</li>
        </ul>
      </section>
      
      <section>
        <div class="account">
          <h2>アカウント登録</h2>
          <p>会員情報の登録・編集</p>
          <p>お子さまのプロフィール登録・編集</p>
          <p><a href="{{ action('Admin\MypageController@add') }}">設定</a></p>
          <p><img src="./renrakunote/public/images/key.png" width="327" height="214"></p>
        </div>
        
        <div class="renraku-note">
          <h2>連絡ノート</h2>
          <p>お子さまの健康状態、投薬依頼など</p>
          <p><a href="{{ action('Admin\MypageController@create') }}">連絡ノートを書く</a></p>
          <p><img src="./renrakunote/public/images/renrakunote.png" width="327" height="214"></p>
        </div>
        
        <div class="blog">
          <h2>今日のできごと</h2>
          <p>園での様子やお知らせ</p>
          <p><a href="{{ action('Admin\MypageController@renraku') }}">詳しく見る</a></p>
          <p><img src="./renrakunote/public/images/picture.png" width="327" height="214"></p>
        </div>
      </section>
      
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