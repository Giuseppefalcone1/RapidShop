<x-layout title="rapidshop homepage">

    @if (session('message'))
        <div class="alert alert-success m-0 position-absolute success-message w-100">
            {{ session('message') }}
        </div>
    @endif
    <header class="container" >
        <div class="row">
            <div class="col-12 mb-4">
                <h1 class="text-center" >{{__('ui.headerTitle')}}</h1>
                <h2 class="text-center subtitle-header" id="searchBarHeader">{{__('ui.headerSub')}}</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 d-flex justify-content-center">
                <form action="{{ route('announcements.search') }}" method="GET" class="search w-100" >
                    <input name="searched" placeholder="{{__('ui.searchPlaceholder')}}" type="text">
                    <button type="submit">Ricerca</button>
                </form>
            </div>
        </div>

    </header>
    <main class="container mt-5">
        <section>
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center my-5">{{__('ui.lastProducts')}}</h3>
                </div>
            </div>
            <div class="row">
                @forelse ($announcements as $announcement)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 my-3">
                        <x-card :announcement='$announcement' />
                    </div>
                @empty
                    <h2 class="text-center">NON CI SONO ANCORA ANNUNCI</h2>
                @endforelse
            </div>
        </section>

    </main>

</x-layout>
