<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">New features</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>
            <a class="nav-link" href="#">About</a>
            @if (Auth::check())
                <a class="nav-link ml-auto" href="#"> {{ Auth()->user()->name }} </a>
                <a class="nav-link" href="/logout">Logout</a>
            @else
                <a class="nav-link ml-auto" href="/login">Login</a>
                <a class="nav-link ml-auto" href="/register">Register</a>
            @endif
        </nav>
    </div>
</div>

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">NBA Website (ORIGINAL)</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
    </div>
</div>
