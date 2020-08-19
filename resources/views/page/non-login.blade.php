<div class="container">
    <br>
    <div>Bạn chưa đăng nhập vào website. Vui lòng đăng nhập để thực hiện chức năng này.</div>
    <br>
    @guest
        <button class=""><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></button>
        @if (Route::has('register'))
            <button><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></button>
        @endif
    @endguest
</div>
<br>
