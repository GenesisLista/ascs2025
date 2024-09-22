@extends('layouts.app')
@section('title', 'About PSCS')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_8">
            <h2>About PSCS</h2>
            <div class="wrapper">
                <p>
                    PHILIPPINE SOCIETY FOR COSMETIC SCIENCE, INC. (PSCS) is a member-affiliate of the International
                    Federation of Societies of Cosmetic Chemists (IFSCC) and one of the proud founding members of Asian
                    Societies of Cosmetic Scientists (ASCS) together with Japan, Indonesia, South Korea, and Taiwan.
                </p>
            </div>

            <div class="wrapper">
                <p>
                    Formed on 12 November 1979, PSCS was established to aid the local cosmetic chemists in their quest
                    for advancement and development in cosmetic formulations, research, discoveries, breakthroughs, and
                    technology.
                </p>
            </div>

            <div class="wrapper">
                <p>The organization continues to embrace such noble advocacy to keep members abreast with the fresh
                    and recent cosmetic trends and technology around the world, thus the reason for vying and accepting
                    the most exciting and ambitious endeavor of the organization - the hosting of the 17th ASCS
                    Conference in 2025.</p>

                <p><a href="https://www.pscs.org.ph/become_member" class="more_btn bg5" target="_blank" rel=”noreferrer”>PSCS Membership
                        Form</a></p>
            </div>

            <img src="{{ asset('images/pscs/PSCS-1.jpg') }}" alt="philippine-society-for-cosmetic-science"
                style="margin-top: 45px;">
        </div>

        <div class="grid_4">
            <h2>Events</h2>

            <div class="wrapper">
                <img src="{{ asset('images/cosmobeaute/Cosmobeaute-PH.jpg') }}" alt="Cosmobeaut&#233; - Empowering Cosmetic Science"
                    class="img7_pscs_events">
            </div>

            {{-- <div class="wrapper">
                <img src="{{ asset('images/pscs/suppliers_day_2023_day_2.jpg') }}" alt="Suppliers Day 2023 Day 2"
                    class="img7_pscs_events">
            </div> --}}

        </div>

    </div>
</div>
@stop