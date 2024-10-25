@extends('layouts.app')
@section('title', 'Welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_12">
            <h2 class="v3">Current Events</h2>
            <div class="row">
                <div class="grid_4">
                    <img src="{{ asset('images/cosmobeaute/Cosmobeaute-PH.jpg') }}" alt="Cosmobeaut&#233; - Empowering Cosmetic Science" class="img7_pscs_events">
                </div>
                
                <div class="grid_4">
                    <iframe width="100%" height="350px" src="https://www.youtube.com/embed/m2XE6pEI3N4?autoplay=1&mute=1&rel=0" style="margin-top: 7%;"></iframe>
                </div>

                <div class="grid_4">
                    <img src="{{ asset('images/Call_For_Abstract_2024.jpg') }}" alt="Cosmobeaut&#233; - Empowering Cosmetic Science" class="img7_pscs_events">
                </div>
            </div>
        </div>
    </div>

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

<div class="box-2">
    <div class="container">
        <div class="row">
            <!-- <div class="grid_6">
                <h2 class="welcome_page">Program at a glance</h2>
                <p class="txt12_welcome_page">
                    Day 1 (June 4, 2025, 9:00am to 5:00pm)
                </p>
                <p>
                    <span>1. Welcome Ceremony </br></span>
                    <span>2. Plenary Sessions </br></span>
                    <span>3. Poster Presentations </br></span>
                </p>

                <p class="txt12_welcome_page">
                    Day 2 (June 5, 2025, 10:00am to 5:00pm)
                </p>

                <p>
                    <span>1. Plenary Sessions </br></span>
                    <span>2. Poster Presentations </br></span>
                    <span>3. Gala Night (6:00pm to 9:00pm) </br></span>
                </p>
            </div> -->

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

<!-- <div class="box-2" style="padding-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <h2 class="v3">Announcements</h2>
                <div class="row">
                    <div class="grid_6">
                        <img src="{{ asset('images/Tentative_Theme.png') }}" alt="ASCS 2025 Theme"
                            class="img7_pscs_events">
                    </div>

                    <div class="grid_6">
                        <img src="{{ asset('images/Important_Dates_to_Remember.png') }}" alt="Suppliers Day 2023 Day 2"
                            class="img7_pscs_events">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="box-2" style="padding-bottom: 40px;">
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
                    <!-- <li><a href="{{ route('program_at_a_glance.index') }}">Program at a glance</a></li>
                    <li><a href="{{ route('sponsorship.index') }}">Sponsorship package</a></li>
                    <li><a href="{{ route('sponsorship.create') }}">Sponsorship/Exhibition Registration Form</a></li> -->
                    <!-- <li><a href="{{ route('hotel_reservation.index') }}">Hotel Reservation</a></li> -->
                    <li><a href="{{ route('ifscc_benefactors.index') }}">IFSCC Benefactors</a></li>
                </ul>
            </div>

            <div class="grid_6 preffix_1">
                <h2 class="ascs-video">About ASCS</h2>
                <div class="row">
                    &nbsp;
                    <div class="grid_6 video-responsive">
                        <iframe width="400" height="300"
                            src="https://www.youtube.com/embed/hlRAwh-24NQ?autoplay=1&mute=1&rel=0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container" style="padding-top: 30px; padding-bottom: 20px;">
    <div class="row">
        <div class="grid_5">
            <h2 class="no_line">useful links</h2>
            <ul class="listWithMarker">
                <li><a href="{{ route('ascs.index') }}">About ASCS</a></li>
                <li><a href="{{ route('ifscc.index') }}">About IFSCC</a></li>
                <li><a href="{{ route('pscs.index') }}">About PSCS</a></li>
                <li><a href="https://www.pscs.org.ph/become_member" target="_blank" rel=”noreferrer”>PSCS Membership
                        Form</a></li>
                <li><a href="{{ route('registration.create') }}">Conference Registration Form</a></li>
                <li><a href="{{ route('abstract_submission.index') }}">Abstract Submission Guidelines</a></li>
                <li><a href="{{ route('abstract_submission.create') }}">Abstract/Paper/Poster Submission Form</a></li> -->
                <!-- <li><a href="{{ route('program_at_a_glance.index') }}">Program at a glance</a></li>
                <li><a href="{{ route('sponsorship.index') }}">Sponsorship package</a></li>
                <li><a href="{{ route('sponsorship.create') }}">Sponsorship/Exhibition Registration Form</a></li> -->
                <!-- <li><a href="{{ route('hotel_reservation.index') }}">Hotel Reservation</a></li> -->
                <!-- <li><a href="{{ route('tour_package.index') }}">Tour Package</a></li>
                <li><a href="{{ route('ifscc_benefactors.index') }}">IFSCC Benefactors</a></li>
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
</div> -->

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