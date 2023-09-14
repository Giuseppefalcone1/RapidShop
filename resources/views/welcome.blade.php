<x-layout title="rapidshop homepage">

    @if (session('access.denied'))
            <div class="alert alert-danger m-0">
                {{ session('access.denied') }}
            </div>
    @endif
    @if (session('message'))
            <div class="alert alert-success m-0">
                {{ session('message') }}
            </div>
    @endif

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">ULTIMI PRODOTTI</h1>
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
    </div>

</x-layout>
