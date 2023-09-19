            <div class="card rounded-4">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0 p-3">Pubblicato da: {{$announcement->user->name}}</p class="m-0 p-4">
                    </div>
                </div>
                <!-- inizio carosello -->
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner p-2">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/300" class="d-block w-100 rounded-4 img-fluid p-2" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/300" class="d-block w-100 rounded-4 img-fluid p-2" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/300" class="d-block w-100 rounded-4 img-fluid p-2" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- fine carosello -->
                <div class="card-body">
                    <h5 class="card-title">{{ $announcement->name }}</h5>
                    <p class="card-text">{{ $announcement->description }}</p>
                    <div class="row">
                        <div class="col-6">
                            <p>{{ $announcement->price }}</p>
                        </div>
                    </div>
                    <a href="#" class="nav-link mb-3">{{ $announcement->category->name }}</a>
                    <div class="card-footer">
                        <p class="text-center my-auto">data di pubblicazione: {{ $announcement->created_at->format('d/m/y') }}</p>
                    </div>
                </div>
            </div>