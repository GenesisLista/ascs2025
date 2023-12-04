@extends('layouts.app')
@section('title', 'Welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_6">
            <h2 class="welcome_page">Our Theme</h2>
            <p class="txt5_welcome_page">
                "Empowering Cosmetic Science"
            </p>
            <p>
                Our theme emphasizes the tradition, cultures and natural resources mix with technology, research, and
                innovation to drive the cosmetic industry.
            </p>
        </div>

        <div class="grid_6">
            <h2 class="welcome_page">Sub-Themes</h2>
            &nbsp;
            <p>1. Beauty Technology and Innovation.</p>
            <p>2. Tradition of Beauty products and their evolution.</p>
            <p>3. Diversity and Individuality of cosmetic products.</p>
        </div>
    </div>
</div>

<div class="box-2">
    <div class="container">
        <div class="row">
            <div class="grid_6">
                <h2 class="welcome_page">Program at a glance</h2>
                <p class="txt12_welcome_page">
                    Day 1 (June 4, 2025, 9:30am to 5:00pm)
                </p>
                <ul class="listWithMarker">
                    <li>Welcome Ceremony</li>
                    <li>Plenary Sessions</li>
                    <li>Poster Presentations</li>
                </ul>

                <p class="txt12_welcome_page">
                    Day 2 (June 5, 2025, 10:00am to 5:00pm)
                </p>

                <ul class="listWithMarker">
                    <li>Plenary Sessions</li>
                    <li>Poster Presentations</li>
                    <li>Gala Night (6:00pm to 9:00pm)</li>
                </ul>
            </div>

            <div class="grid_6">
                <h2 class="welcome_page">Be part of ASCS 2025</h2>
                <p class="txt12_welcome_page">
                    We encourage our fellow societies to support us in this worthwhile endeavor through the following:
                </p>

                <ul class="listWithMarker">
                    <li>Abstract/Paper/Poster Submission</li>
                    <li>Attendance of the ASCS 2025 Conference</li>
                    <li>Sponsorship and Exhibition</li>
                    <li>Country Pavilion</li>
                    <li>Advertisement Subscription</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="grid_12">
            <h2 class="v3">Why Join ASCS 2025?</h2>
            <div class="row">
                <div class="grid_4">
                    <p class="txt8_welcome_page">Invaluable Opportunity for Networking</p>
                    <p style="text-align: justify;">The event will be a gathering of like-minded individuals with
                        limitless passion to discover and experience advancement in cosmetic science. It will be well
                        attended by local and international
                        formulators, researchers, chemists, chemical engineers, academe, and supporters of the industry.
                        A better opportunity to extend your visibility and foster friendship in the cosmetic
                        science community.</p>
                </div>

                <div class="grid_4">
                    <p class="txt8_welcome_page">Diversify Your Perspective</p>
                    &nbsp;
                    <p style="text-align: justify;">Be exposed to different ideas, advancements, technology, issues,
                        regulations,
                        concepts, discoveries, and breakthroughs to broaden your horizon and challenge yourself to
                        new, fresh, and contemporary perspectives</p>
                </div>

                <div class="grid_4">
                    <p class="txt8_welcome_page">Discover Local Technology, Traditions, and Cultures</p>
                    <p style="text-align: justify;">Experience first hand the warm hospitality and smiles of the
                        Filipinos. Be amazed by our vibrant
                        culture and inspiring traditions. Be here and love it.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-2">
    <div class="container">
        <div class="row">
            <div class="grid_5">
                <h2 class="no_line">useful links</h2>
                <ul class="listWithMarker">
                    <li><a href="{{ route('ascs.index') }}">About ASCS</a></li>
                    <li><a href="{{ route('ifscc.index') }}">About IFSCC</a></li>
                    <li><a href="{{ route('pscs.index') }}">About PSCS</a></li>
                    <li><a href="https://www.pscs.org.ph/become_member" target="_blank" rel=”noreferrer”>PSCS Membership Form</a></li>
                    <li><a href="{{ route('registration.create') }}">Conference Registration Form</a></li>
                    <li><a href="javascript:void(0)">Abstract/Paper/Poster Submission</a></li>
                    <li><a href="javascript:void(0)">Program at glance</a></li>
                    <li><a href="{{ route('sponsorship.index') }}">Sponsorship package</a></li>
                    <li><a href="javascript:void(0)">Booth Exhibition / Country Pavilion Registration Form</a></li>
                    <li><a href="javascript:void(0)">Travel Package</a></li>
                    <li><a href="{{ route('ifscc_benefactors.index') }}">IFSCC Benefactors</a></li>
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