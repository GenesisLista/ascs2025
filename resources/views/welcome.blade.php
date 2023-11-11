@extends('layouts.app')
@section('title', 'Welcome')

@section('content')
<div class="container">
    <div class="hline2">
        <p class="txt4"><span style="color: red">ASCS</span> Conference 2025</p>
        <p class="txt5">17th Asian Societies of Cosmetic Scientists Conference</p>
        <p class="txt5">4 - 5 June 2025 / Manila, Philippines</p>
    </div>

    <div class="row">
        <div class="grid_5">
            <h2 class="welcome_page">Our Theme</h2>
            <p class="txt6">
                Our theme emphasizes the traditions, cultures, and natural resources meld with technology, research, and
                innovation to drive the cosmetic industry.
            </p>
            <p class="txt6">
                Our logo serves to embody the theme’s philosophies:
            </p>
            <ul class="listWithMarker">
                <li>Hexagonal shape – ties to chemistry, technology. Shape is sturdy, robust, yet organic.</li>
                <li>Sapling – evokes naturality, freshness, rebirth, and growth. Illustrates the following points:</li>
            </ul>

            <p class="lh24">
                - Growth of the Philippine B&PC market <br />
                - The importance of the natural ingredients in which the traditional medicine and personal care of the
                Philippines is built upon <br />
                - The importance of natural feedstock that is converted into modern ingredients in personal care via
                research and innovation
            </p>
        </div>

        <div class="grid_6 preffix_1">
            <h2 class="welcome_page">Sub-Theme</h2>
            <p class="txt6">1. Beauty Technology and Innivation.</p>
            <p class="txt6">2. Tradition of Beauty products and third evolution.</p>
            <P class="txt6">3. Diversity and Individuality of cosmetic products.</P>
        </div>

    </div>
</div>

<div class="box-2">
    <div class="container">
        <div class="row">
            <div class="grid_5">
                <h2 class="no_line">useful links</h2>
                <ul class="listWithMarker">
                    <li><a href="{{ route('ascs.index') }}">About <span style="color: red">ASCS</span></a></li>
                    <li><a href="{{ route('ifscc.index') }}">About IFSCC</a></li>
                    <li><a href="{{ route('pscs.index') }}">About PSCS</a></li>
                    <li><a href="javascript:void(0)">Program at glance</a></li>
                    <li><a href="{{ route('sponsorship.index') }}">Sponsorship package</a></li>
                    <li><a href="{{ route('registration.index') }}">Registration</a></li>
                    <li><a href="javascript:void(0)">Booth Exhibition</a></li>
                    <li><a href="javascript:void(0)">Travel Package</a></li>
                    <li><a href="javascript:void(0)">Abstract/Paper/Poster Submission</a></li>
                    <li><a href="javascript:void(0)">Attendance of the ASCS 2025 Conference</a></li>
                    <li><a href="javascript:void(0)">Country Pavilion</a></li>
                    <li><a href="javascript:void(0)">Advertisement Subscription</a></li>
                </ul>
            </div>

            <div class="grid_6 preffix_1">
                <h2 class="ascs-video">About ASCS</h2>
                <div class="row">
                    &nbsp;
                    <div class="grid_6 video-responsive">
                        <iframe width="400" height="300"
                            src="https://www.youtube.com/embed/hlRAwh-24NQ?autoplay=0&rel=0"></iframe>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<div class="box-4">
    <div class="container">
        <img src="{{ asset('images/icon1.png') }}" alt="" class="img3 no_resize">
        <p class="txt10">Lot 2 Arty II, Talipapa 2, Quezon City, 1116 Philippines</p>
        <img src="{{ asset('images/icon2.png') }}" alt="" class="img3 no_resize">
        <p class="txt11"><a
                href="mailto:&#115;&#101;&#99;&#114;&#101;&#116;&#97;&#114;&#105;&#97;&#116;&#46;&#112;&#115;&#99;&#115;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;"
                class="link2">&#115;&#101;&#99;&#114;&#101;&#116;&#97;&#114;&#105;&#97;&#116;&#46;&#112;&#115;&#99;&#115;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a>
        </p>
    </div>
</div>
@stop