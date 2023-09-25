<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    {{ $announcement_to_check ? __("ui.annuncio-revisore") : __("ui.no-announcements") }}
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
                <p class="text-center my-1">{{__("ui.cancel-operation")}}</p>
                <i class="fa-solid fa-arrow-rotate-left fa-2x"></i>
            </button>
        </form>
        @if ($announcement_to_check)
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5">
                    <x-cardShow :announcement='$announcement_to_check' />
                </div>
            </div>
            <div class="row mt-4 w-50 mx-auto">
                <div class="col-6 d-flex justify-content-end">
                    <form action="{{ route('revisor.accept_announcement', $announcement_to_check) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn-login fs-5">{{__("ui.ACCETTA")}}</button>
                    </form>
                </div>
                <div class="col-6 d-flex justify-content-start">
                    <form action="{{ route('revisor.reject_announcement', $announcement_to_check) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger btn-rifiuta fs-5">{{__("ui.RIFIUTA")}}</button>
                    </form>
                </div>
            </div>
        </div>
        @foreach ($announcement_to_check->images as $image)
        @if($image->announcement->is_accepted == null)
        <h4 class="p-3 pb-0">{{__('ui.imageReview')}}</h4>
        <div class="col-12 p-3 pt-0">
            <div class="container-fluid">
                <div class="row pt-0">
                    <div class="col-6 ps-0">
                        <p>{{__('ui.adult')}}: <span class="{{$image->adult}}"></span></p>
                        <p>{{__('ui.spoof')}}: <span class="{{$image->spoof}}"></span></p>
                        <p>{{__('ui.racy')}}: <span class="{{$image->racy}}"></span></p>
                    </div>
                    <div class="col-6">
                        <p>{{__('ui.violence')}}: <span class="{{$image->violence}}"></span></p>
                        <p>{{__('ui.medical')}}: <span class="{{$image->medical}}"></span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0">
                        <h4 class="pt-3 pb-0">Tags</h4>
                        @if($image->labels)
                        @foreach($image->labels as $label)
                        <p class="d-inline">{{$label}}, </p>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @endif
    </div>
</x-layout>