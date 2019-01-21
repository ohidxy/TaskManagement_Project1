<div class="container mt-2">
    <div class="row">
        <div class="col-6">
            <a class="btn btn-outline-primary" href="/">Home</a>
            @auth
                <a class="btn btn-outline-primary" href="{{ route('projects.create') }}"> + Create a Project</a>
            @endauth
        </div>
        <div class="col-6 text-right">
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-danger" onChange="this.form.submit()">Logout</button>
            </form>        
            @endauth
        
            @guest
                <a class="btn btn-success" href="{{ route('login') }}">Login</a>
                <a class="btn btn-outline-info" href="{{ route('register') }}">Register</a>
            @endguest
        </div>
    </div>
</div>