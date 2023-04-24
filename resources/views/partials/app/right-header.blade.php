<div class="hc_dec_color">
    <div class="page-subtitle"><span>Home</span></div>
    <div class="page-subtitle logout">
        <form action="{{ route('user.logout') }}" method="post" id="logout-form">
            @csrf
        </form>
        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
    </div>
</div>
