<header>

    <div>
        <div class="container dc-links d-flex justify-content-end gap-4">
            <small>dc power</small>
            <small>dc links</small>
        </div>
    </div>

    <div class="container">

        <div class="menu">
            <nav class="menu__main">
                <ul class="list-unstyled d-flex justify-content-center gap-4 ">
                    <li>logo</li>
                    <li><a class="{{ Str::startsWith(Route::currentRouteName(), 'home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li><a class="{{ Str::startsWith(Route::currentRouteName(), 'product') ? 'active' : '' }}" href="{{ route('products') }}">Prodotti</a></li>
                    <li><a class="{{ Str::startsWith(Route::currentRouteName(), 'news') ? 'active' : '' }}" href="{{ route('news') }}">News</a></li>
                    <li><a class="{{ Str::startsWith(Route::currentRouteName(), 'home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li><a class="{{ Str::startsWith(Route::currentRouteName(), 'product') ? 'active' : '' }}" href="{{ route('products') }}">Prodotti</a></li>
                    <li><a class="{{ Str::startsWith(Route::currentRouteName(), 'news') ? 'active' : '' }}" href="{{ route('news') }}">News</a></li>
                    <li><a class="{{ Str::startsWith(Route::currentRouteName(), 'product') ? 'active' : '' }}" href="{{ route('products') }}">Prodotti</a></li>
                    <li><a class="{{ Str::startsWith(Route::currentRouteName(), 'news') ? 'active' : '' }}" href="{{ route('news') }}">News</a></li>
                    <li><input type="text"></li>
                </ul>
            </nav>
        </div>
    </div>
</header>