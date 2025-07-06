@extends('layouts.app')
@section('title', 'ASCS Conference')

@push('styles')
<link href="{{ asset('css/photo-bootstrap.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_12">
            <h2 class="v3">ASCS Conference</h2>

            <br>

            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('ascs-conference') }}">Conference</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ascs-conference.natura_aeropack') }}">Natura Aeropack</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">UPLB Tour</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="{{ route('ascs-conference.videos') }}">Videos</a>
                </li>
            </ul>

        </div>

    </div>
    <br>
    <div class="row">
        <div class="grid_12">
            <div class="row">
                <video width="500" height="300" controls>
                    <source src="{{URL::asset('/video/ascs_conference_highlights.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

    </div>

    <br>
    <div class="row">
        <div class="grid_12">
            <div class="row">
                <video width="500" height="300" controls>
                    <source src="{{URL::asset('/video/ascs_empowering_cosmetic_science_day_1.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

    </div>

    <br>
    <div class="row">
        <div class="grid_12">
            <div class="row">
                <video width="500" height="300" controls>
                    <source src="{{URL::asset('/video/ascs_empowering_cosmetic_science_day_2.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

    </div>

    <br>
    <div class="row">
        <div class="grid_12">
            <div class="row">
                <video width="500" height="300" controls>
                    <source src="{{URL::asset('/video/ascs_okada_sde.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

    </div>

</div>
@stop

@push('scripts')
<script src="{{ asset('js/photo-bootstrap.bundle.min.js') }}"></script>
@endpush