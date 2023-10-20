<footer>
    <div class="footer_priv">

        <div class="container">
            <p class="txt_priv">&copy; <span id="copyright-year"></span> <span class="color2">&bull;</span>
                <a href="index-5.html" class="link2">Privacy policy</a>
            </p>

            <ul class="list_menu_footer">
                <li class="{{ Request::segment(1) === null ? 'current' : null }}"><a href="{{ url('/') }}">Welcome<strong></strong></a></li>
                <li class="{{ Request::segment(1) === 'pscs' || Request::segment(1) === 'ifscc' || Request::segment(1) === 'ascs' ? 'current' : null }}"><a href="{{ route('pscs.index') }}">About us<strong></strong></a></li>
                <li class="{{ Request::segment(1) === 'registration' ? 'current' : null }}"><a href="{{ route('registration.index') }}"><a href="{{ route('registration.index') }}">Registration<strong></strong></a></li>
                <li><a href="javascript:void(0)">Sponsoring<strong></strong></a></li>
                <li><a href="javascript:void(0)">Promotion<strong></strong></a></li>
            </ul>
        </div>

    </div>
</footer>