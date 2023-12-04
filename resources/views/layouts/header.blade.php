<div id="stuck_container">
    <header>
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <nav>
                        <ul class="sf-menu header_menu">
                            <li class="{{ Request::segment(1) === null ? 'current' : null }}"><a
                                    href="{{ url('/') }}">Welcome<strong></strong></a></li>
                            <li
                                class="{{ Request::segment(1) === 'pscs' || Request::segment(1) === 'ifscc' || Request::segment(1) === 'ascs' ? 'current' : null }}">
                                <a href="javascript:void(0)"><span></span>About us<strong></strong></a>
                                <ul class='submenu'>
                                    <li><a href="{{ route('pscs.index') }}">PSCS</a></li>
                                    <li><a href="{{ route('ifscc.index') }}">IFSCC</a></li>
                                    <li><a href="{{ route('ascs.index') }}">ASCS</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::segment(1) === 'registration' ? 'current' : null }}">
                                <a href="{{ route('registration.index') }}">Registration<strong></strong></a>
                                <ul class='submenu'>
                                    <li><a href="{{ route('registration.create') }}">Registration Form</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::segment(1) === 'sponsorship' ? 'current' : null }}">
                                <a href="{{ route('sponsorship.index') }}">Sponsorship<strong></strong></a>
                                <ul class='submenu'>
                                    <li><a href="{{ route('sponsorship.create') }}">Sponsorship Form</a></li>
                                </ul>
                            </li>
                            <li id="last-li"><a href="javascript:void(0)">Promotion<strong></strong></a></li>
                        </ul>
                    </nav>

                    <h3 class="soc_icons txt6"><strong><u>Website Under Construction!</u></strong></h3>

                    <!-- <ul class="soc_icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul> -->

                    <div class="clear"></div>

                </div>

            </div>
        </div>

        @if(Request::segment(1) == null)
        <!-- Welcome page -->
        <div class="box-1">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <h1><img src="{{ asset('images/ASCS-2025-Small-W.png') }}" alt="Nature"></h1>
                    </div>
                </div>
            </div>
        </div>
        @else
        <!-- Other page -->
        <div class="box-5 content_box">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <h1><img src="{{ asset('images/ASCS-2025-Small-W.png') }}" alt="Nature"></h1>
                    </div>
                </div>
            </div>
        </div>
        @endif

    </header>
</div>

@if(Request::segment(1) == null)
<!-- Welcome page -->
<div class="header-box">
    <div class="container_no_image">
        &nbsp;
    </div>
</div>
@endif