@extends('layouts.app')
@section('title', 'About IFSCC')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_8">
            <h2>About IFSCC</h2>
            <div class="wrapper">
                <p>The International Federation of Societies of Cosmetic
                    Chemists (IFSCC) was organized on September 8, 1959 in Brussels, Belgium with 8 countries
                    collaborating to promote international cooperation in cosmetic science and
                    technology. PSCS was the 22nd society to be affiliated with the IFSCC in September 1980.</p>
            </div>

            <div class="wrapper">
                <p>The organization continues to grow now having 16,000 individual membership with 51 member societies
                    representing 81 Countries from Eastern Europe, Asia, Africa, and Latin America. Fundamentally, the
                    federation aims to advance cosmetic science as the industry continues to grow worldwide. It aims
                    also to help elevate professional status and technology worldwide by providing and promoting
                    educational and scientific programmes and activities.</p>
            </div>

            <div class="wrapper">
                <p>IFSCC supports member societies by organizing conferences, congresses, educational programs, and
                    webinars to bridge the invaluable opportunity to meet other Scientists from different parts of the
                    world; and promote the exchange of ideas, advancement, technology, and cultures to motivate,
                    inspire, and promote its aim for advancement in cosmetic science.</p>
            </div>
        </div>

        <div class="grid_4">
            <h2>Events</h2>

            <div class="wrapper">
                <img src="{{ asset('images/ifscc/Uruguay-Workshop-Dr.-Tharwat-Tadros.png') }}"
                    alt="ascs-in-kobe-japan-1993" style="margin-top: 45px; margin-right: 21px">
                <p style="margin-top: 5px">Uruguay Workshop – Dr. Tharwat Tadros</p>
            </div>

        </div>

    </div>
</div>
@stop