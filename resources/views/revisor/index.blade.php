<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    {{ $announcement_to_check ? 'Annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}</h1>
            </div>
        </div>
        <div class="row">
            @if (session('message'))
            <div class="alert alert-success m-0">
                {{ session('message') }}
            </div>
            @endif
        </div>
        <form action="{{route('revisor.annul_announcement')}}" method="post">
            @csrf
            @method('PATCH')
            <button class="nav-link" type="submit">
                 <i class="fa-solid fa-arrow-rotate-left tx-primary fa-2x"></i>
            </button>
        </form>

        <p>annulla operazione</p>
        @if ($announcement_to_check)
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <x-cardShow :announcement='$announcement_to_check' />
                </div>
                <div class="row my-2 w-50 mx-auto">
                    <div class="col-6 d-flex justify-content-center">
                        <form action="{{ route('revisor.accept_announcement', $announcement_to_check) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success">ACCETTA</button>
                        </form>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <form action="{{ route('revisor.reject_announcement', $announcement_to_check) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-danger">RIFIUTA</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-layout>
