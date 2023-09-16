<x-layout title="rapidshop homepage">

    @if (session('message'))
        <div class="alert alert-success m-0">
            {{ session('message') }}
        </div>
    @endif
    <header class="container" >
        <div class="row">
            <div class="col-12 mb-4">
                <h1 class="text-center" >Compra e Vendi articoli usati</h1>
                <h2 class="text-center subtitle-header" id="searchBarHeader">con un click</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 d-flex justify-content-center">
                <form action="{{ route('announcements.search') }}" method="GET" class="search w-100" >
                    <input name="searched" placeholder="Cerca..." type="text">
                    <button type="submit">Ricerca</button>
                </form>
            </div>
        </div>

    </header>
    <main class="container mt-5">
        <section>
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center mt-5">ULTIMI PRODOTTI</h3>
                </div>
            </div>
            <div class="row">
                @forelse ($announcements as $announcement)
                    <div class="col-3 my-3">
                        <x-card :announcement='$announcement' />
                    </div>
                @empty
                    <h2>NON CI SONO ANCORA ANNUNCI</h2>
                @endforelse
            </div>
        </section>

    </main>

</x-layout>
