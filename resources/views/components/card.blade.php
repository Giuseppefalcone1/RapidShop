<div class="card">
    <img src="https://picsum.photos/300" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $announcement->name }}</h5>
        <p class="card-text">{{ $announcement->description }}</p>
        <div class="row">
            <div class="col-6">
                <p>{{ $announcement->price }}</p>
            </div>
            <div class="col-6">
                <a href="{{ route('announcement.show', $announcement) }}" class="btn btn-primary">Dettagli</a>
            </div>
        </div>
        <a href="{{route('announcement.bycategory', $announcement->category )}}" class="nav-link">{{ $announcement->category->name }}</a>
        <div class="card-footer">
            <p>data di pubblicazione: {{ $announcement->created_at->format('d/m/y') }}</p>
        </div>
    </div>
</div>