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
          <p><img src="/renrakunote/image/key.png" width="327" height="214"></p>
        </div>
      </section>
      
      
    </body>
</html>