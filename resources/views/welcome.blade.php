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
            <h2>What is Naturopathy?</h2>
            <h3>Masagni dolores eoquie voluptmsequi nesciu iqui squam fASERestqui dolorem ipsumquia dolor mesrtase
                vertyader nierta niuyserdas</h3>
            <p>Sitamet consectet, adipisci uumquam eius modi tempora incidunte, ut labore et dolore magnam.
                Baliquamaerat voluptatem. ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                laboriosam, nisi ut aliquid ex ea commodi consequatur? Asruis autem vel eum iure feruyas reprehenderit,
                qui a voluptate nertyaesra.</p>
            <a href="#" class="more_btn">more</a>
        </div>

        <div class="grid_6 preffix_1">
            <h2>latest news</h2>
            <div class="row">
                <div class="grid_3">
                    <p class="txt7">24</p>
                    <p class="txt8">march</p>
                    <p class="txt6">nesciu iquequam voluptmse mioas feStuASE eui dolorem </p>
                    <p>Mertyrda odesa satrolrta Leugiat malesui nundg res lmasetnas raerase nlasadede fertas</p>
                    <a href="#" class="more_btn bg5">more</a>
                </div>

                <div class="grid_3">
                    <p class="txt7">22</p>
                    <p class="txt8">march</p>
                    <p class="txt6">kerptmse qui nesciu ideStuASERer estqui dolorem</p>
                    <p>Katrsas lasuytasa mauysta Lundg kertaseares lmasetugiat malesui tyuadede ferterase nlasce.</p>
                    <a href="#" class="more_btn bg5">more</a>
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