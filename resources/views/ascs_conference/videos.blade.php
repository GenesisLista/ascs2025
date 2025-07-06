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
                        <a class="nav-link" href="#">Natura Aeropack</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">UPLB Tour</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('ascs-conference.videos') }}">Videos</a>
                    </li>
                </ul>

                <br>

                    
                    


        </div>

    </div>
</div>
@stop

@push('scripts')
    <script src="{{ asset('js/photo-bootstrap.bundle.min.js') }}"></script>
@endpush