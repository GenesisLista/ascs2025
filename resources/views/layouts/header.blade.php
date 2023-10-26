<div id="stuck_container">
    <header>
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <nav>
                        <ul class="sf-menu header_menu">
                            <li class="{{ Request::segment(1) === null ? 'current' : null }}"><a
                                    href="{{ url('/') }}">Welcome<strong></strong></a></li>
                            <li class="{{ Request::segment(1) === 'pscs' || Request::segment(1) === 'ifscc' || Request::segment(1) === 'ascs' ? 'current' : null }}">
                                <a href="javascript:void(0)"><span></span>About us<strong></strong></a>
                                <ul class='submenu'>
                                    <li><a href="{{ route('pscs.index') }}">PSCS</a></li>
                                    <li><a href="{{ route('ifscc.index') }}">IFSCC</a></li>
                                    <li><a href="{{ route('ascs.index') }}">ASCS</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::segment(1) === 'registration' ? 'current' : null }}"><a href="{{ route('registration.index') }}">Registration<strong></strong></a></li>
                            <li class="{{ Request::segment(1) === 'sponsorship' ? 'current' : null }}"><a href="{{ route('sponsorship.index') }}">Sponsorship<strong></strong></a></li>
                            <li id="last-li"><a href="javascript:void(0)">Promotion<strong></strong></a></li>
                        </ul>
                    </nav>

                    <ul class="soc_icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>

                    <div class="clear"></div>

                </div>

            </div>
        </div>

        <div class="box-1 content_box">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <h1><a href="index.html"><img src="{{ asset('images/logo1.png') }}" alt="Nature"></a></h1>
                    </div>
                </div>
            </div>
        </div>

    </header>
</div>