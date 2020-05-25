<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>トップページ</title>
    </head>
    
    <body>
      <header class="mb-5">
        <div class="container">
        <h1>○○保育園連絡帳</h1>
        </div>
      </header>
      <div class="container">
      <section class="top-info border p-3 mb-5">    
        <h2 class="information text-center">お知らせ</h2>
        <ul class="information-list">
            <li>2020年○月○日　タイトル</li>
            <li>2020年○月○日　タイトル</li>
            <li>2020年○月○日　タイトル</li>
            <li>2020年○月○日　タイトル</li>
            <li>2020年○月○日　タイトル</li>
        </ul>
      </section>
      </div>
      
      <div class="container mb-5">
      <section class="top-menu">
        <div class="row justify-content-between">
        <div class="account p-3 border col-3">
          <h2>アカウント登録</h2>
          <div class="text-area">
          <p class="mb-1">会員情報の登録・編集</p>
          <p>お子さまのプロフィール登録・編集</p>
          </div>
          <p class="text-center"><a  class="btn btn-primary" href="{{ action('Admin\MypageController@add') }}">設定</a></p>
          <p class="picture"><img src="{{ asset('images/key.png') }}" ></p>
        </div>
        
        <div class="renraku-note p-3 border col-3">
          <h2>連絡ノート</h2>
          <div class="text-area">
          <p>お子さまの健康状態、投薬依頼など</p>
          </div>
          <p class="text-center"><a class="btn btn-primary" href="{{ action('Admin\MypageController@create') }}">連絡ノートを書く</a></p>
          <p class="picture"><img src="{{ asset('images/renrakunote.png') }}"></p>
        </div>
        
        <div class="blog p-3 border col-3">
          <h2>今日のできごと</h2>
          <div class="text-area">
          <p>園での様子やお知らせ</p>
          </div>
          <p class="text-center"><a class="btn btn-primary" href="{{ action('Admin\MypageController@renraku') }}">詳しく見る</a></p>
          <p class="picture"><img src="{{ asset('images/picture.png') }}"></p>
        </div>
        </div>
      </section>
      </div>
      
      <footer class="p-3">
        <div class="container">
          <p>○○保育園</p>
          <ul class="mb-0">
            <li>〒123-4567 〇〇県〇〇市〇〇町1-2-3</li>
            <li>TEL:0000-123-4567</li>
            <li>FAX:0000-123-4568</li>
          </ul>
        </div>
      </footer>
    </body>
    
</html>