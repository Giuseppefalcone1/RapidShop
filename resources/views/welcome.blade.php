<x-layout title="rapidshop homepage">


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
