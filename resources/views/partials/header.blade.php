<div class="container-fluid hd_container">
<div class="container">
<header>
    <div class="logo">
    <img class="main_logo" src="../img/dc-logo.png" alt="">
    </div>

    <nav>
        <ul class="menu ">
            <li>
                <a class="{{Route:: currentRouteName() === 'characters' ? 'active' : ''}}" href="{{route('characters')}}">CHARACTERS</a>
            </li>
            <li>
            <a class="{{Route:: currentRouteName() === 'comics' ? 'active' : ''}}" href="{{route('comics')}}">COMICS</a>

            </li>
            <li>
            <a class="{{Route:: currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">MOVIES</a>

            </li>
            <li>
            <a class="{{Route:: currentRouteName() === 'tv' ? 'active' : ''}}" href="{{route('tv')}}">TV</a>

            </li>
            <li>
            <a class="{{Route:: currentRouteName() === 'games' ? 'active' : ''}}" href="{{route('games')}}">GAMES</a>

            </li>
            <li>
            <a class="{{Route:: currentRouteName() === 'collectbles' ? 'active' : ''}}" href="{{route('collectbles')}}">COLLECTIBLES</a>

            </li>
            <li>
            <a class="{{Route:: currentRouteName() === 'videos' ? 'active' : ''}}" href="{{route('videos')}}">VIDEOS</a>

            </li>
            <li>
            <a class="{{Route:: currentRouteName() === 'fans' ? 'active' : ''}}" href="{{route('fans')}}">FANS</a>

            </li>
            <li>
            <a class="{{Route:: currentRouteName() === 'news' ? 'active' : ''}}" href="{{route('news')}}">NEWS</a>

            </li>
            <li>
            <a class="{{Route:: currentRouteName() === 'shop' ? 'active' : ''}}" href="{{route('shop')}}">SHOP</a>

            </li>
        </ul>
    </nav>

    <div class="inp">
    <input type="text" class="btn_search form-control" placeholder="Search.." aria-label="Username" aria-describedby="basic-addon1">
    </div>
</header>

</div>

</div>