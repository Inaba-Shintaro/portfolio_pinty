<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        @guest
        <!-- ログアウト時の表示 -->
        @if (Route::has('login'))
        <a class="nav-link active" aria-current="page" href="{{ route('login') }}">ログイン</a>
        @endif
        @if (Route::has('register'))
        <a class="nav-link active" aria-current="page" href="{{ route('register') }}">新規登録</a>
        <a class="nav-link active" aria-current="page" href="/login/guest">ゲストログイン</a>
        @endif
        @else
        <!-- ログイン時の表示 -->
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          ログアウト
        </a>
        <a class="nav-link" href="{{ route('mypage',['user' => Auth::id()]) }}">
          マイページ
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
        <a class="nav-link" href="{{ route('post.create') }}">投稿する</a>
        @endguest
      </div>
    </div>
  </div>
</nav>