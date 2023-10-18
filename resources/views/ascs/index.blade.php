@extends('layouts.app')
@section('title', 'About ASCS')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_8">
            <h2>About ASCS</h2>
            <div class="wrapper">
                <p>The ASCS was officially established in 1992 when an agreement was reached among the Presidents of the
                    Japanese, South Korean, Taiwanese, Indonesian and Filipino Societies who gathered to attend the
                    IFSCC Yokohama Congress.
                    It was decided then that the ASCS Conferences will be held on odd years and that the Japanese
                    Society (SCCJ) will act as the Secretariat for the time being. The establishment of ASCS was highly
                    welcomed by the IFSCC who allowed the expression of “Supported by the IFSCC” as well as its logo to
                    be used for promoting ASCS activities.</p>

                <p>The establishment of ASCS the purpose and idea of which was to exchange cosmetic technologies within
                    the Asian region, emerged in the early 1980s. In 1987, Dr. Takeo Mitsui, the then IFSCC Praesidium
                    member representing Japan, took the opportunity to crystallize the idea when he became the PR
                    Committee member in charge of the Asia/Oceania region. As a trial prior to setting up ASCS, the 28th
                    SCCJ cosmetic research symposium held in 1990 was made open to Asian scientists. According to the
                    record, there were 8 presentations and 50 attendees from outside of Japan.</p>

                <p>The 1st ASCS Conference was held in Kobe, Japan in 1993 June 16, 17th. Over 600 delegates gathered
                    with presentations counting 20 from Japan and 17 from overseas creating active discussions. The 2nd
                    ASCS Conference was in Seoul, South Korea (1995 June 7, 8th) gathering about 500 delegates with 56
                    presentations. The 3rd Conference took place in Taipei, Taiwan (1997 May 23, 24th) attended by 527
                    delegates with 59 presentations.</p>

                <p>During the Council Meeting at the 22nd IFSCC Congress held in Edinburgh (2002), a new rule for
                    determining the venues of future IFSCC Conferences/Congresses was approved in which all IFSCC
                    Societies were grouped into 3 geographical zones. A total of 9 Societies comprised of Asian,
                    Oceanian Societies and South Africa were assigned as Zone 2 Societies. At this point, ASCS and Zone
                    2 Societies became synonymous. Later, the Middle Eastern Society joined the IFSCC as a Zone 2
                    Society. The South African Society moved to Zone 1 in 2016, and hence as of present, the ASCS is
                    comprised of Asian, Oceanian Societies and the Middle East Society.</p>

                    <img src="{{ asset('images/ascs/ascs-kerman-iran-2017.jpeg') }}" alt="ascs-kerman-iran-2017" style="margin-top: 45px;">
                    <p style="margin-top: 5px">ASCS in Kerman, Iran (2017)</p>
            </div>

        </div>

        <div class="grid_4">
            <h2>Events</h2>

            <div class="wrapper">
                <img src="{{ asset('images/ascs/ascs-in-kobe-japan-1993-a.jpeg') }}" alt="ascs-in-kobe-japan-1993" style="margin-top: 45px; margin-right: 21px">
                <p style="margin-top: 5px">ASCS in Kobe, Japan (1993)</p>
            </div>

            <div class="wrapper marTop2">
                <img src="{{ asset('images/ascs/ascs-in-kobe-japan-1993-b.jpeg') }}" alt="ascs-in-kobe-japan-1993" style="margin-top: 45px; margin-right: 21px">
                <p style="margin-top: 5px">ASCS in Kobe, Japan (1993)</p>
            </div>

            <div class="wrapper marTop2">
                <img src="{{ asset('images/ascs/ascs-yokohama-japan-2009-a.jpeg') }}" alt="ascs-yokohama-japan-2009" style="margin-top: 45px; margin-right: 21px">
                <p style="margin-top: 5px">ASCS in Yokohama, Japan (2009)</p>
            </div>

            <div class="wrapper marTop2">
                <img src="{{ asset('images/ascs/ascs-yokohama-japan-2009-b.jpeg') }}" alt="ascs-yokohama-japan-2009" style="margin-top: 45px; margin-right: 21px">
                <p style="margin-top: 5px">ASCS in Yokohama, Japan (2009)</p>
            </div>

            <!-- <a href="#" class="more_btn bg5">more</a> -->
        </div>

    </div>
</div>
@stop