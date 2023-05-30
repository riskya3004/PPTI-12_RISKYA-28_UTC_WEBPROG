@extends('partials.master')

@section('title', 'detail')

@section('contain')

    <div class="container">
        <h6>IT Really Counts</h6> <br>

        <div class="post-title">
            {{ $books->post_title }}
        </div>
        <br>
        <div class="post-description">
            {{ $books->post_description }}
        </div>
        <br>
        <div class="post-author">
            By : {{ $books->author }}
            <span>| {{ $books->date }}</span>
            <br>
            {{ $books->Category->names }}
        </div>
        <br>
        <div class="image-book">
            <img src="/assets/{{ $books->image }}" alt="">
        </div>
        <div class="share-button d-flex flex-wrap">
            <a href="{{ $books->link_social_media }}" class="btn btn-primary">Linkedin</a>
            <a href="{{ $books->link_social_media }}" class="btn btn-primary">Twitter</a>
            <a href="{{ $books->link_social_media }}" class="btn btn-primary">Facebook</a>
            <a href="{{ $books->link_social_media }}" class="btn btn-primary">Instagram</a>
        </div>
        <br>
        <div class="post-paragraph">
            {{ $books->body_description }}
        </div>
        <br>
        <div class="video-section-title">
            <h5>Video Section</h5>
            <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">
            </iframe>
        </div>
    </div>


@endsection
