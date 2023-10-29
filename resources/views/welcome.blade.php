@extends('layouts.app')
@section('title', 'Welcome')

@section('content')
<div class="container">
    <div class="hline2">
        <p class="txt4">Welcome</p>
        <p class="txt5">"Empowering Cosmetic Science" 17th ASCS Conference</p>
        <p class="txt5">Manila, 2025</p>
    </div>

    <div class="row">
        <div class="grid_5">
            <h2>Empowering Cosmetic Science</h2>
            <p class="txt6">
                Our theme emphasizes the traditions, cultures, and natural resources meld with technology, research, and
                innovation to drive the cosmetic industry.
            </p>
            <p class="txt6">
                Our logo serves to embody the theme’s philosophies:
            </p>
            <ul class="listWithMarker">
                <li>Hexagonal shape – ties to chemistry, technology. Shape is sturdy, robust, yet organic.</li>
                <li>Sapling – evokes naturality, freshness, rebirth, and growth. Illustrates the following points:</li>
            </ul>

            <p class="lh24">
                - Growth of the Philippine B&PC market <br />
                - The importance of the natural ingredients in which the traditional medicine and personal care of the Philippines is built upon <br />
                - The importance of natural feedstock that is converted into modern ingredients in personal care via research and innovation
            </p>
        </div>

        <div class="grid_6 preffix_1">
            <h2>About ASCS</h2>
            <div class="row">
                <br />
                <div class="grid_6 video-responsive">
                    <iframe width="400" height="300"
                        src="https://www.youtube.com/embed/hlRAwh-24NQ?autoplay=0&rel=0"></iframe>
                </div>

            </div>
        </div>

    </div>
</div>

<div class="box-2">
    <div class="container">
        <div class="row">
            <div class="grid_3">
                <h2 class="no_line">useful links</h2>
                <ul class="listWithMarker">
                    <li><a href="#">sit avertas dero</a></li>
                    <li><a href="#">taserto yaeala miaseay</a></li>
                    <li><a href="#">mertae neory kastreas</a></li>
                    <li><a href="#">verode fase laisuase</a></li>
                    <li><a href="#">avertelero</a></li>
                    <li><a href="#">taserto yndolase</a></li>
                    <li><a href="#">miaser lasras lerty kasu</a></li>
                    <li><a href="#">kauisyase mertase</a></li>
                    <li><a href="#">desertae dertas</a></li>
                </ul>
                <a href="#" class="more_btn bg5">more</a>
            </div>

            <div class="grid_9">
                <div class="box-3">
                    <h2 class="v2 txt_cntr">fundamental principles</h2>

                    <div class="hline2 v2">
                        <div class="col2 marRight1">
                            <img src="images/page1_pic5.jpg" alt="" class="img2">
                            <p class="lh24"><span class="color3">Beciegast nveriti vitaesaert viasead</span><br>asety
                                kertya aset aplicaboserde miuas nerafae kertyerauas vitaesa ertyatya nemo eniptaiades.
                            </p>
                        </div>
                        <div class="col2 marRight1">
                            <img src="images/page1_pic6.jpg" alt="" class="img2">
                            <p class="lh24"><span class="color3">Nertyase riti masertas ltyakuhas</span><br>asety kertya
                                aset aplicaboserde miuas nerafae kertyerauas vitaesa ertyatya nemo eniptaiades.</p>
                        </div>
                        <div class="col2">
                            <img src="images/page1_pic7.jpg" alt="" class="img2">
                            <p class="lh24"><span class="color3">Mersertas lertyakuhasfuental nytras</span><br>asety
                                kertya aset aplicaboserde miuas nerafae kertyerauas vitaesa ertyatya nemo eniptaiades.
                            </p>
                        </div>

                        <div class="clear"></div>
                    </div>
                    <p class="txt9"><a href="#">read more </a></p>

                </div>
            </div>

        </div>
    </div>
</div>

<div class="box-4">
    <div class="container">
        <img src="{{ asset('images/icon1.png') }}" alt="" class="img3 no_resize">
        <p class="txt10">Lot 2 Arty II, Talipapa 2, Quezon City, 1116 Philippines</p>
        <img src="{{ asset('images/icon2.png') }}" alt="" class="img3 no_resize">
        <p class="txt11"><a
                href="mailto:&#115;&#101;&#99;&#114;&#101;&#116;&#97;&#114;&#105;&#97;&#116;&#46;&#112;&#115;&#99;&#115;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;"
                class="link2">&#115;&#101;&#99;&#114;&#101;&#116;&#97;&#114;&#105;&#97;&#116;&#46;&#112;&#115;&#99;&#115;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a>
        </p>
    </div>
</div>
@stop