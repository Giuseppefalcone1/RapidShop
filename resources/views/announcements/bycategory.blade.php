<x-layout>


@forelse ($category->announcements as $announcement)

    <x-card :announcement="$announcement"/>

    @empty

    <p>Non sono presenti annunci per questa categoria</p>
    
@endforelse



</x-layout>