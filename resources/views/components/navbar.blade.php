<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img src="/media/logo.png" alt="RapidShop logo" class="me-2" width="30" height="24">
        <a class="navbar-brand font-titoli" href="{{ route('welcome') }}">RapidShop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle m-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                        <li><a class="dropdown-item" href="{{route('announcement.bycategory', $category )}}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-1 text-nowrap" href="{{ route('announcement.index') }}">Tutti i Prodotti</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="btn-registrazione btn m-1" href="{{ route('register') }}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="btn-login btn m-1" href="{{ route('login') }}">Login</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                    <a href="{{route('announcement.create')}}" class="nav-link text-nowrap">Aggiungi annuncio</a>
                </li>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <li class="nav-item ">
                                <p class="my-auto text-end">Ciao {{ Auth::user()->name }}!</p>
                            </li>
                        </div>
                        <div class="col-4">
                            <li class="nav-item">
                                <form class="w-100" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-logout">Logout</button>
                                </form>
                            </li>
                        </div>
                    </div>
                </div>
                @endauth
            </ul>
            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
        </div>
    </div>
</nav>