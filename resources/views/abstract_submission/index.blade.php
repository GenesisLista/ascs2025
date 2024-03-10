@extends('layouts.app')
@section('title', 'Abstract')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_12">
            <h2 class="v3">Abstract submission regulation and guidelines</h2>

            <div class="row">

                <div class="grid_12">
                    &nbsp;
                    <div>
                        <p>
                            1. The presenting author has to be the one who submits the abstract and needs to be
                            registered in the abstract submitting platform. Select "Abstract Submission" and
                            proceed with the registration.
                        </p>
                        <p>
                            2. Topic list
                        <ul class="listWithMarker">
                            <li>Beauty technology and digital application</li>
                            <li>Beauty innovation in raw material packaging and finished products</li>
                            <li>Beauty tradition and evolution</li>
                            <li>Beauty safety and efficacy testing</li>
                            <li>Natural resources for new ingredients</li>
                        </ul>
                        </p>
                        <p>
                            3. Abstract guidelines
                        <ul class="listWithMarker">
                            <li>
                                Abstracts must be submitted in English and should have a minimum of 300 words but not
                                exceed 530 words.
                                Tables and figures can be included in the abstract only if they are essential to the
                                understanding of the abstract.
                            </li>
                            <li>
                                Abstract should describe original scientific work and must not have been previously
                                submitted for publication,
                                or submitted to any other conference or congress.
                            </li>
                            <li>
                                Abstract must include the following:
                                <p>
                                    1. Title ( Maximum 25 words ) </br>
                                    2. Authors and Affiliation </br>
                                    3. Three to five keywords should be submitted to aid the review process. </br>
                                    4. Introduction: Stating the purpose or aim of the paper. </br>
                                    5. Methods </br>
                                    6. Results </br>
                                    7. Discussion </br>
                                    <span style="padding-left:40px; padding-bottom: 5px; float: left;">
                                        * Authors should use INCI names or IUPAC, USP, NF names and avoid the use of any
                                        commercial or chemical trade names.
                                        The mentioning of equipment trade names is acceptable unless the intenction of the
                                        presentation is to promote the use of said equipment. </br>
                                    </span>
                                    <span style="padding-left:40px; padding-bottom: 5px; float: left;">
                                        * Authors of accepted abstracts must submit the full paper by the requested
                                        deadline.
                                        The manuscript should not exceed 5,000 words and can include illustrations, charts
                                        and tables. </br>
                                    </span>
                                    <span style="padding-left:40px; padding-bottom: 5px; float: left;">
                                        * At the time of the Congress, all scientific work in Podium presentation and
                                        posters must be original scientific work
                                        and must not have been previously purblished nor submitted for publication or
                                        presented at any conference or congress. </br>
                                    </span>
                                    <span style="padding-left:40px; padding-bottom: 5px; float: left;">
                                        * Each author whose abstract is accepted thereby is required to accept the copyright statement for both
                                        the abstract and the full paper. </br>
                                    </span>
                                    <span style="padding-left:40px; padding-bottom: 5px; float: left;">
                                        * Scientific committee will review all abstract submitted and include them into designtated sessions (podium or poster)
                                        as qualified by the committee. </br>
                                    </span>
                                    <span style="padding-left:40px; padding-bottom: 5px; float: left;">
                                        * Abstract selected must be presented by the designated author. </br>
                                    </span>
                                    <span style="padding-left:40px; padding-bottom: 5px; float: left;">
                                        * The designated presenter is expected to register and present the content in the abstract during the designated
                                        schedule of the conference. </br>
                                    </span>
                                    <span style="padding-left:40px; padding-bottom: 5px; float: left;">
                                        * Poster must be printed for the poster display throughout the conference and presenting author will be present
                                        during designated periods. </br>
                                    </span>
                                    <span style="padding-left:40px; float: left;">
                                        * Please do not email abstract, all abstracts will be submitted by this website. <a href="{{ route('abstract_submission.create') }}">CLICK HERE</a>.
                                    </span>
                                </p>
                            </li>

                        </ul>
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<div class="box-2" style="padding-top: 30px;">
    <div class="container">
        <div class="row">

            <div class="grid_12">
                &nbsp;
                <div>
                    <table style="width: 100%;">
                        <tr>
                            <th colspan=2>Schedule of Deadlines</th>
                        </tr>
                        <tr>
                            <td>January 2024</td>
                            <td>Call for papers and registration open</td>
                        </tr>
                        <tr>
                            <td>September 2024</td>
                            <td>Abstract submission deadline</td>
                        </tr>
                        <tr>
                            <td>November 2024</td>
                            <td>Acceptance and formal notification</td>
                        </tr>
                        <tr>
                            <td>December 2024</td>
                            <td>Deadline for full papers submission</td>
                        </tr>
                        <tr>
                            <td>January 2025</td>
                            <td>Deadline for author presenter registration</td>
                        </tr>
                        <tr>
                            <td>April 2025</td>
                            <td>Deadline to submit poster in PDF Format</td>
                        </tr>
                        <tr>
                            <td>June 2025</td>
                            <td>Conference podium and poster sessions</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="wrapper">
                <div class="indent1"></div>
            </div>

        </div>
    </div>
</div>
@stop