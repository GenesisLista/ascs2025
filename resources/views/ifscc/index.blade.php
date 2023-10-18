@extends('layouts.app')
@section('title', 'About IFSCC')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_8">
            <h2>About IFSCC</h2>
            <div class="wrapper">
                <h3>The International Federation of Societies of Cosmetic Chemists is a worldwide federation dedicated
                    to international cooperation in cosmetic science and technology.</h3>
                <p>Interest in the formation of such an organisation crystallized in Paris in 1956 and culminated in the
                    birth of the federation in Brussels, Belgium on September 8, 1959. At that time there were only 8
                    countries entering the Federation.</p>
                <p>Today, 51 Societies representing 81 countries have met the high standards of scientific and
                    educational qualifications of the IFSCC and, as members, support the organization’s aims and
                    programs. The number of individual members in the Federation now exceeds 16,000 and we are still
                    growing.</p>
                <p>The IFSCC continues to grow as the cosmetic industry expands worldwide. As new Societies develop in
                    Eastern Europe, Asia, Africa and Latin America, they will be welcomed into the Federation as they
                    qualify for membership.</p>
            </div>

            <div class="wrapper marTop2">
                <h3>The aims of the IFSCC are:</h3>
                <ul class="listWithMarker">
                    <li>To advance cosmetic science.</li>
                    <li>To help to elevate the professional status of cosmetic science and technology worldwide by
                        providing and promoting educational and scientific programmes and activities.</li>
                    <li>To encourage fundamental research work by universities and by independent workers in any and all
                        fields that may add to the knowledge of cosmetic science.</li>
                    <li>To coordinate by correspondence, interchange of information and in other ways, the work and
                        efforts of the autonomous member societies.</li>
                    <li>To cement relationships by reporting on activities in the various autonomous member societies.
                    </li>
                    <li>To publish and publicise literature of a scientific and technical nature. To help research
                        workers obtain from all lands information, literature, patents and other aids, as may be
                        requested and as may be possible.</li>
                    <li>To exchange information on any standardised procedures that may be adopted with regard to
                        analyses of raw materials or finished products, efficiency of products, etc., and to participate
                        in any effort to adopt such procedures internationally.</li>
                    <li>To publicise within the member societies and in the technical and other press of the various
                        countries, the activities of the societies of all lands.</li>
                    <li>To hold congresses, seminars and meetings on an international scale; to invite speakers from any
                        country, whenever feasible and give publicity to all meetings well in advance.</li>
                    <li>To sponsor awards of an international character for outstanding achievement in research,
                        publication, or other work on behalf of the cosmetic sciences.</li>
                </ul>
            </div>
        </div>

        <div class="grid_4">
            <h2>Events</h2>

            <div class="wrapper">
                <img src="{{ asset('images/ifscc/Uruguay-Workshop-Dr.-Tharwat-Tadros.png') }}" alt="ascs-in-kobe-japan-1993" style="margin-top: 45px; margin-right: 21px">
                <p style="margin-top: 5px">Uruguay Workshop – Dr. Tharwat Tadros</p>
            </div>
            
        </div>

    </div>
</div>
@stop