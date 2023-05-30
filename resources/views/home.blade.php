@extends('partials.master')

@section('title', 'home')

@section('contain')

    <div class="container">
        <div class="highlight-book-box" style="display:flex; border:1px solid red; heigth: 30px; margin-top: 10px">
            <div class="highligt-book">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="/assets/{{ $books->image }}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">IT Really Counts</h5>
                          <p class="card-text">{{ $books->post_title }}</p>
                          <p class="card-text"><small class="text-body-secondary">{{ $books->post_description }}</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <br>
            <div class="latest-books d-flex flex-column align-items-center justify-content-center">
                @foreach ($books as $books)
                    <div class="card" style="width: 18rem;">
                        <img src="/assets/{{ $books->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $books->post_title }}</h5>
                        <p class="card-text">{{ $books->post_description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
            <div class="book-review">
                @foreach ($books as $books)
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>{{ $books->post_title }}</h5>
                          <a href="/bookdetail/{{ $books->id }}" class="btn btn-primary">Read Post</a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                @endforeach
            </div>
            </div>
    </div>

@endsection
