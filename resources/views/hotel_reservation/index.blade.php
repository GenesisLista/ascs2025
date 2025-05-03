@extends('layouts.app')
@section('title', 'Hotel Reservation')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_12">
            <h2 class="v3">Hotel Reservations</h2>

            <div class="row">
                <div class="grid_6">
                    <img src="{{ asset('images/hotel/grand-westside-hotel.jpg') }}"
                        alt="PSCS - ASCS - Gran Westside Hotel Philippines" class="img7_pscs_events">
                </div>

                <div class="grid_6">
                    <p class="txt12_welcome_page">
                        Grand Westside
                    </p>
                    <p>
                        Experience the best of leisure and entertainment at Grand Westside Hotel, the largest hotel in
                        the Philippines, located in Westside City, Entertainment City, Parañaque, near the stunning
                        Manila
                        Bay. With 1,500 modern rooms and suites, this vibrant hotel is perfect for families,
                        vacationers, and
                        corporate groups looking for a relaxing and exciting stay.
                    </p>

                    <p>
                        Guests can enjoy signature Filipino cuisine at LaMeza, soothing spa treatments, a fully equipped
                        fitness center, and an outdoor pool with scenic bay views. The hotel also offers Muslim-friendly
                        dining
                        options, ensuring an inclusive experience for all travelers.
                    </p>

                    <p>
                        Just 15 minutes from Ninoy Aquino International Airport (NAIA), Grand Westside Hotel provides
                        easy access to shopping malls, entertainment venues, convention centers, and cultural
                        attractions,
                        making it the perfect staycation, getaway, or corporate retreat in Manila’s premier leisure
                        district.
                    </p>

                    <p>
                        Grand Westside is a <span style="font-weight: bold;">Halal Certified</span> hotel, ensuring that
                        all food and beverage offerings meet Islamic dietary requirements.
                    </p>

                    <ul class="listWithMarker">
                        <li><a href="{{ asset('images/hotel/Grand-Westside-Hotel-Rates.pdf') }}" target="_blank">Check
                                the rates</a></li>
                    </ul>

                    <p>
                        Click the <span style="font-weight: bold;">BOOK NOW Button</span> and use the promo code below
                        to get a corporate rate: <span style="font-weight: bold;">GWHASCS2025</span>
                    </p>

                    <div class="form_btns">
                        <a href="https://www.simplebooking.it/ibe/hotelbooking/search?hid=9914&lang=EN#/offer&offerId=202268"
                            target="_blank" class="more_btn bg5">Book now!</a>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<div class="box-2">
    <div class="container">
        <div class="row">

            <div class="grid_6">
                <img src="{{ asset('images/hotel/Admiral-Hotel-Manila.jpg') }}" alt="PSCS - ASCS - Admiral Hotel Philippines"
                    class="img7_pscs_events">
            </div>
            <div class="grid_6">
                <p class="txt12_welcome_page">
                    Admiral Hotel
                </p>
                <p>
                    Admiral Hotel Manila is a luxury hotel located in the heart of Manila, Philippines. It is one of the few remaining historic landmarks along Roxas Boulevard.  Built in 1939, it was the social hub of the Philippine elite during the pre-war era.  It has been restored to its glory days and expanded to meet the demands of the present times.
                </p>

                <p>
                    It is known for its elegant design, modern amenities, and stunning views of Manila Bay. The hotel offers a range of accommodations, dining options, and recreational facilities, making it a popular choice for both business and leisure travelers.
                </p>

                <p>
                    The hotel features a variety of room types, including deluxe rooms and suites, all equipped with modern amenities such as flat-screen TVs, minibars, and complimentary Wi-Fi. Guests can enjoy dining at the hotel's restaurants, which offer a range of international cuisines.
                </p>

                <p>
                    Admiral Hotel Manila also serves <span style="font-weight: bold;">vegetarian and vegan
                        options</span>, catering to guests with dietary
                    preferences.
                </p>

                <ul class="listWithMarker">
                    <li><a href="{{ asset('images/hotel/Admiral-Hotel-Rates.pdf') }}" target="_blank">Check Rates</a></li>
                </ul>

                <div class="form_btns">
                    <a href="https://forms.gle/wNrdX45rzgUgNFcs9"
                        target="_blank" class="more_btn bg5">Book now</a>
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
        <div class="grid_6">
            <img src="{{ asset('images/hotel/Hotel-101-A.jpeg') }}" alt="PSCS - ASCS - Hotel 101 Philippines"
                class="img7_pscs_events">
                
        </div>

        <div class="grid_6">
            <p class="txt12_welcome_page">
                Hotel 101
            </p>
            <p>
                Hotel 101 is a modern hotel located in Manila, Philippines. It is known for its contemporary design,
                comfortable accommodations, and convenient location near various attractions. The hotel offers a range
                of amenities, including dining options, fitness facilities, and event spaces, making it suitable for
                both business and leisure travelers.
            </p>

            <p>
                Hotel 101 is friendly for <span style="font-weight: bold;">Muslim travelers but is not Halal
                    certified</span>. The hotel provides a
                variety of dining options, including vegetarian and vegan choices, to cater to guests with different
                dietary preferences. While the hotel may not have a specific Halal certification, it strives to
                accommodate the needs of all guests, including those who follow Halal dietary guidelines.
            </p>

            <ul class="listWithMarker">
                <li><a href="{{ asset('images/hotel/Hotel-101-Rates.pdf') }}" target="_blank">Check Rates</a></li>
            </ul>

            <div class="form_btns">
                <a href="https://forms.gle/CLPB9QCHXRX1BtNh7"
                    target="_blank" class="more_btn bg5">Book now</a>
            </div>
        </div>
    </div>
</div>

<div class="box-2">
    <div class="container">
        <div class="row">

            <div class="grid_6" style="padding-top: 30px;">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/1lkVxBh0IkI?autoplay=1&mute=1&rel=0" title="Okada Hotel"></iframe>
            </div>
            <div class="grid_6">
                <p class="txt12_welcome_page">
                    Okada Hotel
                </p>
                <p>
                    Okada Manila is occupying 30 hectares of Asia World City, the largest island development in the
                    country, and it is the biggest integrated resort in the booming Entertainment City. From its grand
                    size to its awe-inspiring architecture, Okada Manila is a vibrant addition to the Philippines’
                    rapidly growing entertainment and leisure industry.
                </p>

                <p>
                    Located 3 kilometers away from the Ninoy Aquino International Airport, Okada Manila is an exciting
                    multi-dimensional property that boasts of a premium selection of hospitality, dining, retail, gaming
                    and leisure options designed to exceed guest expectations. The Resort is located on the beautiful
                    Manila Bay, which provides guests with a spectacular view of one of the world’s best sunsets.
                </p>

                <p>
                    All of the above are complemented by enticing attractions such as the premium shopping promenade,
                    the largest and most exciting gaming areas, an impressive night-club and indoor beach club, the
                    finest and most technologically advanced hotel accommodations, a wide range of dining options and
                    one of the biggest fountains in the world.
                </p>

                <ul class="listWithMarker">
                    <li><a href="{{ asset('images/hotel/Okada-Hotel-Rates.pdf') }}" target="_blank">Check the rates</a></li>
                </ul>

                <div class="form_btns">
                    <a href="https://forms.gle/yneqvSafWFqrK8DBA" target="_blank" class="more_btn bg5">Book now</a>
                </div>
            </div>

            <div class="wrapper">
                <div class="indent1"></div>
            </div>

        </div>
    </div>
</div>
@stop