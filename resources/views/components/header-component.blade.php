<nav>
    <div class="header">
        <div class="sideNav">
            <a href="./" class="logo">
                    <img src="/images/nextweather-color.png" class="logoImage" alt="NextWeather Logo">
            </a>
            @auth
                <p style="color: #DFF8EB">Hello, {{ auth()->user()->name }}</p>
                <p style="color: #DFF8EB">User ID: {{ auth()->user()->id }}</p>
            @endauth
            <ul class="navLinks">
                @auth
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="styleLogout" style="with: 195px; background: none; border: none;"><i class="fa-solid fa-unlock"></i><p>Logout</p></button>
                        </form>
                    </li>
                    <li>
                        <a href="/favorites"><i class="fa-solid fa-bookmark"></i><p>Favorites</p></a>
                    </li>
                    <li>
                        <a href="/search"><i class="fa-solid fa-magnifying-glass"></i><p>Search</p></a>
                    </li>
                    <li>
                        <a href="/news"><i class="fa-solid fa-newspaper"></i><p>News</p></a>
                    </li>
                    <li>
                        <a href="/news/create"><i class="fa-solid fa-pen-nib"></i><p>Article</p></a>
                    </li>
                @else
                    <li>
                        <a href="/"><i class="soloActive fa-solid fa-unlock"></i><p>Login</p></a>
                    </li>
                @endauth
                <div class="active">

                </div>
            </ul>
        </div>
    </div>
</nav>