<a href="{{ route('announcement.show', $announcement) }}" class="text-decoration-none text-black">
  <div class="card card-custom rounded-4">
    <div class="row">
      <div class="col-12">
        <img src="https://picsum.photos/300" class="card-img-top p-2 rounded-4" alt="{{ $announcement->name }}">
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card-body">
          <h5 class="card-title text-truncate">{{ $announcement->name }}</h5>
          <div class="row">
            <div class="col-12">
              <p>{{ $announcement->price }} €</p>
            </div>
          </div>
          <a href="{{route('announcement.bycategory', $announcement->category )}}" class="tx-primary">{{ $announcement->category->name }}</a>
        </div>
      </div>
    </div>
  </div>
</a>