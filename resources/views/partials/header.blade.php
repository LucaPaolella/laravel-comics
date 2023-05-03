<header>
    <div class="container">
        <div class="logo text-center">
            img
        </div>
        <div class="menu">
            <nav class="menu__main">
                <ul class="list-unstyled d-flex justify-content-center gap-4">
                    <li><a class="{{ Str::startsWith(Route::currentRouteName(), 'home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li><a class="{{ Str::startsWith(Route::currentRouteName(), 'product') ? 'active' : '' }}" href="{{ route('products') }}">Prodotti</a></li>
                    <li><a class="{{ Str::startsWith(Route::currentRouteName(), 'news') ? 'active' : '' }}" href="{{ route('news') }}">News</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>