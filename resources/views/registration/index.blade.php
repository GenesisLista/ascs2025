@extends('layouts.app')
@section('title', 'Welcome')

@section('content')
<div class="container">

    <div class="row">
        <div class="grid_12">
            <h2 class="v3">Registration fees for 17th ASCS 2025 Conference</h2>

            <div class="row">

                <div class="grid_12">
                    <h2 class="no_line2">International Delegate - Physical Attendees</h2>
                    <div>
                        <table style="width: 100%;">
                            <tr>
                                <th>Delegates</th>
                                <th>Very Early Bird Jan - Jun 2024</th>
                                <th>Early Bird Jul - Dec 2024</th>
                                <th>Regular Jan 2024 - Jun 2025</th>
                            </tr>
                            <tr>
                                <td>IFSCC Members</td>
                                <td>450 USD</td>
                                <td>500 USD</td>
                                <td>550 USD</td>
                            </tr>
                            <tr>
                                <td>Non IFSCC Members</td>
                                <td>486 USD</td>
                                <td>540 USD</td>
                                <td>600 USD</td>
                            </tr>
                            <tr>
                                <td>Students</td>
                                <td>384 USD</td>
                                <td>360 USD</td>
                                <td>400 USD</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<div class="box-2">
    <div class="container">
        <div class="row">

            <div class="grid_12">
                <h2 class="no_line2">Local Delegate - Physical Attendees</h2>
                <div>
                    <table style="width: 100%;">
                        <tr>
                            <th>Delegates</th>
                            <th>Very Early Bird Jan - Jun 2024</th>
                            <th>Early Bird Jul - Dec 2024</th>
                            <th>Regular Jan 2024 - Jun 2025</th>
                        </tr>
                        <tr>
                            <td>PSCS Members</td>
                            <td>Php 20,250</td>
                            <td>Php 22,500</td>
                            <td>Php 25,000</td>
                        </tr>
                        <tr>
                            <td>Non PSCS Members</td>
                            <td>Php 24,300</td>
                            <td>Php 27,000</td>
                            <td>Php 30,000</td>
                        </tr>
                        <tr>
                            <td>Students</td>
                            <td>Php 16,200</td>
                            <td>Php 18,000</td>
                            <td>Php 20,000</td>
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

<div class="container">

    <div class="row">
        <div class="grid_12">
            <div class="row">
                &nbsp;
                <div class="grid_12">
                    <h2 class="no_line2">International Delegate - Online Attendees</h2>
                    <div>
                        <table style="width: 100%;">
                            <tr>
                                <th>Delegates</th>
                                <th>Very Early Bird Jan - Jun 2024</th>
                                <th>Early Bird Jul - Dec 2024</th>
                                <th>Regular Jan 2024 - Jun 2025</th>
                            </tr>
                            <tr>
                                <td>IFSCC Members</td>
                                <td>257 USD</td>
                                <td>285 USD</td>
                                <td>315 USD</td>
                            </tr>
                            <tr>
                                <td>Non IFSCC Members</td>
                                <td>284 USD</td>
                                <td>315 USD</td>
                                <td>350 USD</td>
                            </tr>
                            <tr>
                                <td>Students</td>
                                <td>122 USD</td>
                                <td>135 USD</td>
                                <td>150 USD</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<div class="box-2">
    <div class="container">
        <div class="row">

            <div class="grid_12">
                <h2 class="no_line2">Local Delegate - Online Attendees</h2>
                <div>
                    <table style="width: 100%;">
                        <tr>
                            <th>Delegates</th>
                            <th>Very Early Bird Jan - Jun 2024</th>
                            <th>Early Bird Jul - Dec 2024</th>
                            <th>Regular Jan 2024 - Jun 2025</th>
                        </tr>
                        <tr>
                            <td>PSCS Members</td>
                            <td>Php 6,075</td>
                            <td>Php 6,750</td>
                            <td>Php 7,500</td>
                        </tr>
                        <tr>
                            <td>Non PSCS Members</td>
                            <td>Php 8,100</td>
                            <td>Php 9,000</td>
                            <td>Php 10,000</td>
                        </tr>
                        <tr>
                            <td>Students</td>
                            <td>Php 4,050</td>
                            <td>Php 4,500</td>
                            <td>Php 4,950</td>
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

<div class="container">

    <div class="row">
        <div class="grid_12">
            <div class="row">
                &nbsp;
                <div class="grid_12">
                    <h2 class="no_line2">Cancellation Policy</h2>
                    <div class="row">


                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<div class="box-2">
    <div class="container">
        <div class="row">

            <div class="grid_12">
                <h2 class="no_line2">Rooms at Conference Venue - Marriott Hotel</h2>
                <div class="row">


                </div>

                <p>To register for the conference, kindly click the button below and fill the registration form.</p>

                <a href="{{ route('registration.create') }}" class="more_btn bg5">
                    Offline Registration </br>
                    (Pay by cheque / Demand Draft / Bank Transfer)
                </a>

                <p>
                    For any queries regarding registration, please contact:</br>
                    Conference Secretariat-ASCS Conference 2025</br>
                    Mobile: +63 917 801 4640</br>
                    Email: <a
                        href="&#115;&#101;&#99;&#114;&#101;&#116;&#97;&#114;&#105;&#97;&#116;&#46;&#112;&#115;&#99;&#115;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;">&#115;&#101;&#99;&#114;&#101;&#116;&#97;&#114;&#105;&#97;&#116;&#46;&#112;&#115;&#99;&#115;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a>
                </p>

            </div>

            <div class="wrapper">
                <div class="indent1"></div>
            </div>



        </div>
    </div>
</div>
@stop