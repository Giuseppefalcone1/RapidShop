<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-5">TUTTI I PRODOTTI</h1>
            </div>
        </div>
        <div class="row">
            @forelse ($announcements as $announcement)
                <div class="col-3 my-3">
                    <x-card :announcement='$announcement' />
                </div>
            @empty
                <h4 class="text-center">La ricerca non ha dato risultati</h4>
            @endforelse
            {{ $announcements->links() }}
        </div>
    </div>
</x-layout>
