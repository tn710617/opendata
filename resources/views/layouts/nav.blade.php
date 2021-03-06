<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        @if(Auth::check() && Auth::user()->type == 'admin')
            <a class="p-2 text-muted" href="/admin">Admin</a>
        @endif

        @Auth
            <div class="p-2 text-muted">Welcome <a
                    href="/edit"><strong><i>{{ \Illuminate\Support\Facades\Auth::user()->name }}</i></strong></a></div>
            <a class="p-2 text-muted" href="/logout">Logout</a>
        @endauth
        @guest
            <a class="p-2 text-muted" href="/register">Register</a>
            <a class="p-2 text-muted" href="/login">Login</a>
        @endguest

        <a class="p-2 text-muted" href="/home">Home</a>
    </nav>
</div>
<hr>

</div>

