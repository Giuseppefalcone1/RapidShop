<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    {{ $announcement_to_check ? 'Annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}
                </h1>
                @if (session('message'))
                <div class="alert alert-success m-0 mx-auto w-50">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>
        <form action="{{route('revisor.annul_announcement')}}" method="post" class="d-flex justify-content-center">
            @csrf
            @method('PATCH')
            <button class="btn btn-danger mx-auto mt-4" type="submit">
                <p class="text-center my-1">Annulla operazione</p>
                <i class="fa-solid fa-arrow-rotate-left fa-2x"></i>
            </button>
        </form>


        @if ($announcement_to_check)
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-5 col-md-6 col-lg-5">
                    <x-cardShow :announcement='$announcement_to_check' />
                </div>
            </div>
            <div class="row mt-4 w-50 mx-auto">
                <div class="col-6 d-flex justify-content-end">
                    <form action="{{ route('revisor.accept_announcement', $announcement_to_check) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn-login fs-5">ACCETTA</button>
                    </form>
                </div>
                <div class="col-6 d-flex justify-content-start">
                    <form action="{{ route('revisor.reject_announcement', $announcement_to_check) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger btn-rifiuta fs-5">RIFIUTA</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
</x-layout>