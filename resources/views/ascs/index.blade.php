@extends('layouts.app')
@section('title', 'About ASCS')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_8">
            <h2>About ASCS</h2>
            <div class="wrapper">
                <p>In 1992, Asian Societies of Cosmetic Scientists (ASCS) was established among the cosmetic scientist
                    societies of Japan, Indonesia, South Korea, Taiwan, and the Philippines as the founding members.</p>

                <p>With the support of the International Federation of Societies of Cosmetic Chemists (IFSCC), the
                    primary purpose of its creation is to foster mutual collaboration among the Societies in the region
                    through active exchange of
                    technologies and cultures. Now known as the Zone 2 Societies of IFSCC, its membership now grows into
                    31 countries consistently promoting advancement in
                    cosmetic science through cooperation and exchange of development, studies, and research.</p>

                <img src="{{ asset('images/ascs/ascs-kerman-iran-2017.jpeg') }}" alt="ascs-kerman-iran-2017"
                    style="margin-top: 45px;">
                <p style="margin-top: 5px">ASCS in Kerman, Iran (2017)</p>
            </div>

        </div>

        <div class="grid_4">
            <h2>Events</h2>

            <div class="wrapper">
                <img src="{{ asset('images/ascs/ascs-in-kobe-japan-1993-a.jpeg') }}" alt="ascs-in-kobe-japan-1993"
                    style="margin-top: 45px; margin-right: 21px">
                <p style="margin-top: 5px">ASCS in Kobe, Japan (1993)</p>
            </div>

            <div class="wrapper marTop2">
                <img src="{{ asset('images/ascs/ascs-in-kobe-japan-1993-b.jpeg') }}" alt="ascs-in-kobe-japan-1993"
                    style="margin-top: 45px; margin-right: 21px">
                <p style="margin-top: 5px">ASCS in Kobe, Japan (1993)</p>
            </div>

            <div class="wrapper marTop2">
                <img src="{{ asset('images/ascs/ascs-yokohama-japan-2009-a.jpeg') }}" alt="ascs-yokohama-japan-2009"
                    style="margin-top: 45px; margin-right: 21px">
                <p style="margin-top: 5px">ASCS in Yokohama, Japan (2009)</p>
            </div>

            <div class="wrapper marTop2">
                <img src="{{ asset('images/ascs/ascs-yokohama-japan-2009-b.jpeg') }}" alt="ascs-yokohama-japan-2009"
                    style="margin-top: 45px; margin-right: 21px">
                <p style="margin-top: 5px">ASCS in Yokohama, Japan (2009)</p>
            </div>

            <!-- <a href="#" class="more_btn bg5">more</a> -->
        </div>

    </div>
</div>
@stop