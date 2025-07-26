@extends('layouts.app')
@section('title', 'ASCS Conference')

@push('styles')
<link href="{{ asset('css/photo-bootstrap.min.css') }}" rel="stylesheet">
<style>
section {
    display: none;
    /* Hide all by default */
    padding: 60px 0;
}

section.active {
    display: block;
    /* Show active section */
}
</style>
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_12">
            <h2 class="v3">ASCS Conference</h2>

            <br>

            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('ascs-conference') }}">Conference</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ascs-conference.natura_aeropack') }}">Natura Aeropack</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">UPLB Tour</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ascs-conference.videos') }}">Videos</a>
                </li>
            </ul>

            <br>


            <div id="photoCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($photos as $key => $photo)
                    {{$photo->image_path}}
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset($photo->image_path) }}" class="d-block w-100" alt="{{ $photo->title }}">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $photo->title }}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>

            </div>


        </div>

    </div>
</div>
@stop

@push('scripts')
<script src="{{ asset('js/photo-bootstrap.bundle.min.js') }}"></script>
@endpush