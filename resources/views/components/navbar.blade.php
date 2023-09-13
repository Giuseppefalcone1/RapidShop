<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img src="/media/logo.svg" alt="RapidShop logo" class="me-2" width="30" height="24">
        <a class="navbar-brand font-titoli" href="{{ route('welcome') }}">RapidShop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                @auth
                <li class="nav-item d-flex align-items-center">
                    <button class="btn-aggiungi-prodotto">
                        <span class="d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path>
                            </svg>
                            <a href="{{ route('announcement.create') }}" class="nav-link text-nowrap p-0">Aggiungi
                                annuncio</a>
                        </span>
                    </button>
                </li>
                @endauth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle m-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-custom">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{ route('announcement.bycategory', $category) }}">{{ $category->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-1 text-nowrap text-black" href="{{ route('announcement.index') }}">Tutti i Prodotti</a>
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
                <li class="nav-item dropdown my-auto">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="navbardropdown">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-custom">
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form class="w-100" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="nav-link text-decoration-underline tx-secondary logout-link ps-2">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>
            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
        </div>
    </div>
</nav>