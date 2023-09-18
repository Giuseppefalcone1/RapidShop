<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Esplora la categoria '{{ strtoupper($category->name) }}'</h1>
            </div>
        </div>
        <div class="row">
            @forelse ($category->announcements as $announcement)
                <div class="col-12 col-sm-6 col-md-3 my-3">
                    <x-card :announcement='$announcement' />
                </div>
            @empty
                <p class="text-center my-4">Non ci sono ancora annunci per questa categoria</p>
                <a href="{{ route('announcement.create') }}" class="btn btn-success">Aggiungi un articolo</a>
            @endforelse
        </div>
    </div>
</x-layout>
