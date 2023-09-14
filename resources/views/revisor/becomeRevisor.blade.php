<x-layout>
    <div class="container">
    <form action="{{route('become.revisor',Auth::user())}}" method="get">
        @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Cover letter</label>
            <textarea name="coverLetter" class="form-control" id="" cols="30" rows="10"></textarea>
            <div class="text-danger">@error('coverLetter') {{ $message }} @enderror</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</x-layout>