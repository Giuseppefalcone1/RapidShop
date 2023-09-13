<x-layout title="rapidshop homepage">

    <h1 class="tx-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis dolorum, repellendus ea,
        temporibus cumque, error ducimus adipisci veniam consequuntur ullam voluptate tenetur dolorem velit dolores
        natus iusto? Architecto, rem!</h1>

    <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore soluta doloribus explicabo at
        reiciendis, reprehenderit facere magni dolores voluptatum assumenda, impedit expedita, mollitia voluptates nihil
        quaerat tenetur et eligendi vero?</p>

    <div class="container">
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
