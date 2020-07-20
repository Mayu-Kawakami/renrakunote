<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <title>トップページ</title>
    </head>
    
    <body>
      <header class="mb-5 top-header">
        <div class="container">
        <h1>○○保育園連絡帳</h1>
        </div>
        <div id="app">
          <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                     <!-- Authentication Links -->
                {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>
  
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
  
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                    {{-- 以上までを追記 --}}
                </ul>
           </div>
        </nav>
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
          <h2>お子さま情報</h2>
          <div class="text-area">
          <p>お子さまのプロフィール登録・編集</p>
          </div>
          <p class="text-center mb-1"><a  class="btn btn-primary" href="{{ action('Admin\MypageController@add') }}">設定</a></p>
          <p class="picture"><img src="{{ asset('images/key.png') }}"></p>
        </div>
        
        <div class="renraku-note p-3 border col-3">
          <h2>連絡ノート</h2>
          <div class="text-area">
          <p>お子さまの健康状態、投薬依頼など</p>
          </div>
          <p class="text-center mb-1"><a class="btn btn-primary" href="{{ action('Admin\RenrakuController@create') }}">連絡ノートを書く</a></p>
          <p class="picture"><img src="{{ asset('images/renrakunote.png') }}"></p>
        </div>
        
        <div class="blog p-3 border col-3">
          <h2>今日のできごと</h2>
          <div class="text-area">
          <p>園での様子やお知らせ</p>
          </div>
          <p class="text-center mb-1"><a class="btn btn-primary" href="{{ action('JournalController@add') }}">詳しく見る</a></p>
          <p class="picture"><img src="{{ asset('images/picture.png') }}"></p>
        </div>
        </div>
      </section>
      </div>
      
      <footer class="p-3">
        <div class="container text-right">
          <p>○○保育園</p>
          <ul class="mb-0">
            <li>〒123-4567 〇〇県〇〇市〇〇町1-2-3</li>
            <li>TEL:0000-123-4567</li>
            <li>FAX:0000-123-4568</li>
          </ul>
        </div>
      </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>