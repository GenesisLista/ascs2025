@extends('layouts.app')
@section('title', 'Welcome')

@section('content')
<div class="container">
    <div class="row">
        <h2>Congratulations to Top 10 Winners of Oral and Poster Presentation ASCS 2025</h2>
        <br>
        <div class="grid_3" style="margin-left: 20px;">
            <img src="{{ asset('images/ascs/poster-1.jpg') }}" alt="philippine-society-for-cosmetic-science">
        </div>
        <div class="grid_3" style="margin-left: 20px;">
            <img src="{{ asset('images/ascs/poster-2.jpg') }}" alt="philippine-society-for-cosmetic-science">
        </div>
        <div class="grid_3" style="margin-left: 20px;">
            <img src="{{ asset('images/ascs/podium-1.jpg') }}" alt="philippine-society-for-cosmetic-science">
        </div>
        <div class="grid_3" style="margin-left: 20px;">
            <img src="{{ asset('images/ascs/podium-2.jpg') }}" alt="philippine-society-for-cosmetic-science">
        </div>
    </div>

    <div class="row">
        <div class="grid_5">
            <h2>Thank you message</h2>
            &nbsp;
            <div class="wrapper">
                <img src="{{ asset('images/ascs/Ms-Linda-Yu-Message.jpg') }}"
                    alt="philippine-society-for-cosmetic-science" style="width: 520px; height: 630px">

                <p>Heartfelt congratulations to all participants, speakers, sponsors, and the organizing team on the
                    outstanding success of the 17th ASCS Scientific Conference in Manila! Your dedication,
                    groundbreaking research, and vibrant discussions made this a truly exceptional gathering. Hosting
                    this prestigious event in Manila was a triumph, showcasing not only remarkable scientific progress
                    but also the warm hospitality and vibrant energy of the Philippines.</p>

                <p>
                    Ms. Linda Yu <br>
                    ASCS 2025 Chairwoman
                </p>
            </div>
        </div>

        <div class="grid_6 preffix_1">
            <h2>watch our latest uploads</h2>
            &nbsp;
            <div class="row">
                <div class="grid_3_latest_uploads video-responsive">
                    <video width="500" height="300" controls>
                        <source src="{{URL::asset('/video/ascs_empowering_cosmetic_science_day_2.mp4')}}"
                            type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="box-2">
    <div class="container">
        <div class="row">
            <div class="grid_6">
                <h2 class="welcome_page">Our Theme</h2>
                <p class="txt5_welcome_page">
                    "Empowering Cosmetic Science"
                </p>
                <p>
                    Our theme emphasizes the tradition, cultures and natural resources mix with technology, research,
                    and
                    innovation to drive the cosmetic industry.
                </p>
            </div>

            <div class="grid_6">
                <h2 class="welcome_page">Sub-Themes</h2>
                <p>
                    <span>1. Beauty Technology and Digital Application </br></span>
                    <span>2. Beauty Innovation in Raw Materials, Packaging and Finished Products </br></span>
                    <span>3. Beauty Tradition and Evolution </br></span>
                    <span>4. Beauty Safety and Efficacy Testing </br></span>
                    <span>5. Natural Resources for New Ingredients </br></span>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="grid_6">
            <h2 class="welcome_page">Be part of ASCS 2025</h2>
            <p class="txt12_welcome_page">
                We encourage our fellow societies to support us in this worthwhile endeavor through the following:
            </p>

            <p>
                <span>1. Abstract/Paper/Poster Submission </br></span>
                <span>2. Attendance of the ASCS 2025 Conference </br></span>
                <span>3. Sponsorship and Exhibition </br></span>
                <span>4. Country Pavilion </br></span>
                <span>5. Advertisement Subscription </br></span>
            </p>
        </div>
    </div>
</div>

<div class="box-2" style="padding-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <h2 class="v3">Why Join ASCS 2025?</h2>
                <div class="row">
                    <div class="grid_4">
                        <p class="txt8_welcome_page">Invaluable Opportunity for Networking</p>
                        <p style="text-align: justify;">The event will be a gathering of like-minded individuals with
                            limitless passion to discover and experience advancement in cosmetic science. It will be
                            well
                            attended by local and international
                            formulators, researchers, chemists, chemical engineers, academe, and supporters of the
                            industry.
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
</div>

<div class="container">
    <div class="row">
        <div class="grid_5">
            <h2 class="no_line">useful links</h2>
            <ul class="listWithMarker">
                <li><a href="{{ route('ascs.index') }}">About ASCS</a></li>
                <li><a href="{{ route('ifscc.index') }}">About IFSCC</a></li>
                <li><a href="{{ route('pscs.index') }}">About PSCS</a></li>
                <li><a href="{{ route('registration.create') }}">Conference Registration Form</a></li>
                <li><a href="{{ route('abstract_submission.index') }}">Abstract Submission Guidelines</a></li>
                <li><a href="{{ route('abstract_submission.create') }}">Abstract/Paper/Poster Submission Form</a>
                </li>
                <li><a href="{{ route('ifscc_benefactors.index') }}">IFSCC Benefactors</a></li>
            </ul>
        </div>

        {{-- <div class="grid_6 preffix_1">
            <h2 class="ascs-video">About Cosmetic Garden</h2>
            <div class="row">
                &nbsp;
                <div class="grid_6 video-responsive">
                    <iframe width="400" height="300"
                        src="https://www.youtube.com/embed/vYiuiR-PYss?autoplay=1&mute=1&rel=0"></iframe>
                </div>
            </div>
        </div> --}}
    </div>
</div>

<br />

<div class="box-4">
    <div class="container">
        <img src="{{ asset('images/icon1.png') }}" alt="" class="img3 no_resize">
        <p class="txt10">Lot 2 Arty II, Talipapa 2, Quezon City, 1116 Philippines</p>
        <img src="{{ asset('images/icon2.png') }}" alt="" class="img3 no_resize">
        <p class="txt11"><a
                href="mailto:&#115;&#101;&#99;&#114;&#101;&#116;&#97;&#114;&#105;&#97;&#116;&#64;&#97;&#115;&#99;&#115;&#50;&#48;&#50;&#53;&#46;&#99;&#111;&#109;"
                class="link2">&#115;&#101;&#99;&#114;&#101;&#116;&#97;&#114;&#105;&#97;&#116;&#64;&#97;&#115;&#99;&#115;&#50;&#48;&#50;&#53;&#46;&#99;&#111;&#109;</a>
        </p>
    </div>
</div>
@stop