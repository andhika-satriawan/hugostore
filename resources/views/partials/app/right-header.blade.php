<div class="hc_dec_color">
    {{-- <div class="page-subtitle"><span>Home</span></div> --}}
    @auth
        <div class="page-subtitle logout">
            <form action="{{ route('user.logout') }}" method="post" id="logout-form">
                @csrf
            </form>
            <a class="pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
        </div>
    @endauth
    @guest
        <div class="page-subtitle logout">
            <a href="{{ route('customer.login') }}">Login</a>
        </div>
    @endguest
</div>
