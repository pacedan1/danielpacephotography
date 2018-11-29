{{-- extend master layout --}}
@extends('templates/master')

{{-- insert title --}}
@section('title', 'Daniel Pace Photography')

{{-- insert content to master template --}}
@section('content')

{{-- include header --}}
@include('inc.header')

{{-- main content --}}
<main class="container gallery">
    <section class="row">
        @for ($i = 0; $i < 10; $i++)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="gallery-item">
                <h2 class="gallery-item-title">Title</h2>
                <img class="gallery-item-img" src="images/img.jpg" alt="">
            </div>
        </div>
        @endfor
    </section>
</main>
@endsection