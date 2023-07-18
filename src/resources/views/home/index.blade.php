@extends('layouts.main')

@section('content')

    <main class="main">
        <section class="promo">
            <div class="container">
                <div class="promo__inner">
                    <h1 class="promo__title">Discover Your Life, Travel Where You Want</h1>
                    <p class="promo__text">Would you explore natur paradise in the world, let’s find the best
                        destination in world with us.</p>
                </div>
            </div>
        </section>
        <section class="fly">
            <div class="container">
                <div class="fly__wrapper">
                    <div class="fly__top">
                        <div class="fly__top-inner">
                            <button class="fly_btn fly__inner-flight"><img src="{{asset('assets/images/icons/airplane.svg')}}"
                                                                           alt="" class="fly_img">Flight</button>
                            <button class="fly_btn fly__inner-hotel"><img src="{{asset('assets/images/icons/hotel.svg')}}" alt=""
                                                                          class="fly_img">Hotel</button>
                        </div>
                    </div>
                    <div class="fly__main">
                        <div class="fly__main-place">
                            <div class="fly__place-from">
                                <p class="fly__text"> Living From</p>
                                <p class="fly__text-info">Dubai</p>
                            </div>
                            <img src="{{asset('assets/images/icons/plane.svg')}}" alt="plane" class="fly__place-img">
                            <div class="fly__place-to">
                                <p class="fly__text">Going to</p>
                                <p class="fly__text-info">New York</p>
                            </div>
                        </div>
                        <div class="fly__main-flight">
                            <div class="fly__flight-from">
                                <p class="fly__text">Leave</p>
                                <p class="fly__text-info">23 Jan, Sat</p>
                            </div>
                            <img src="{{asset('assets/images/icons/calendar.svg')}}" alt="plane" class="fly__flight-img">
                            <div class="fly__flight-from">
                                <p class="fly__text">Return</p>
                                <p class="fly__text-info">14 Feb, Mon</p>
                            </div>
                        </div>
                        <button class="fly__main-search">
                            <img src="{{asset('assets/images/icons/loopa.svg')}}" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="special-offers">
            <div class="container">
                <h1 class="special__title">Special Upcoming Offers</h1>
                <div class="tabs">
                    <div class="tabs_btn">
                        <button class="tabs__btn-item tabs__btn-item--active" data-button="content-1">Team</button>
                        <button class="tabs__btn-item" data-button="content-2">Couple</button>
                        <button class="tabs__btn-item" data-button="content-3">Family</button>
                    </div>
                    <div class="tabs__content">
                        <div class="tabs__content-item tabs__content-item--active" id="content-1">
                            <div class="travel-card">
                                <div class="travel-card__title">
                                    <img src="{{asset('assets/images/beach.png')}}" alt="" class="card_img">
                                    <p class="card__date">14 FEB 2022</p>
                                </div>
                                <div class="card__wrapper">
                                    <div class="card__wrapper-tag">
                                        <p class="card__tag"><span>Ralax</span></p>
                                        <p class="card__term">3 Days, 3 Nights</p>
                                    </div>
                                    <p class="card__title">Loga Sea</p>
                                    <div class="card__wrapper_buy">
                                        <p class="card__price">700$ <span>/Person</span></p>
                                        <button class="card__buy-now">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="travel-card">
                                <div class="travel-card__title">
                                    <img src="{{asset('assets/images/cave.png')}}" alt="" class="card_img">
                                    <p class="card__date">18 JUN 2022</p>
                                </div>
                                <div class="card__wrapper">
                                    <div class="card__wrapper-tag">
                                        <p class="card__tag"><span>Adventure</span></p>
                                        <p class="card__term">4 Days, 3 Nights</p>
                                    </div>
                                    <p class="card__title">Ansgar Scheffold</p>
                                    <div class="card__wrapper_buy">
                                        <p class="card__price">400$ <span>/Person</span></p>
                                        <button class="card__buy-now">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="travel-card">
                                <div class="travel-card__title">
                                    <img src="{{asset('assets/images/lake.png')}}" alt="" class="card_img">
                                    <p class="card__date">22 DEC 2022</p>
                                </div>
                                <div class="card__wrapper">
                                    <div class="card__wrapper-tag">
                                        <p class="card__tag"><span>Ralax</span></p>
                                        <p class="card__term">7 Days, 6 Nights</p>
                                    </div>
                                    <p class="card__title">Lona X</p>
                                    <div class="card__wrapper_buy">
                                        <p class="card__price">340$ <span>/Person</span></p>
                                        <button class="card__buy-now">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs__content-item" id="content-2">
                            <div class="travel-card">
                                <div class="travel-card__title">
                                    <img src="{{asset('assets/images/lake.png')}}" alt="" class="card_img">
                                    <p class="card__date">22 DEC 2022</p>
                                </div>
                                <div class="card__wrapper">
                                    <div class="card__wrapper-tag">
                                        <p class="card__tag"><span>Ralax</span></p>
                                        <p class="card__term">7 Days, 6 Nights</p>
                                    </div>
                                    <p class="card__title">Lona X</p>
                                    <div class="card__wrapper_buy">
                                        <p class="card__price">340$ <span>/Person</span></p>
                                        <button class="card__buy-now">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="travel-card">
                                <div class="travel-card__title">
                                    <img src="{{asset('assets/images/lake.png')}}" alt="" class="card_img">
                                    <p class="card__date">14 FEB 2022</p>
                                </div>
                                <div class="card__wrapper">
                                    <div class="card__wrapper-tag">
                                        <p class="card__tag"><span>Ralax</span></p>
                                        <p class="card__term">3 Days, 3 Nights</p>
                                    </div>
                                    <p class="card__title">Loga Sea</p>
                                    <div class="card__wrapper_buy">
                                        <p class="card__price">700$ <span>/Person</span></p>
                                        <button class="card__buy-now">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="travel-card">
                                <div class="travel-card__title">
                                    <img src="{{asset('assets/images/cave.png')}}" alt="" class="card_img">
                                    <p class="card__date">18 JUN 2022</p>
                                </div>
                                <div class="card__wrapper">
                                    <div class="card__wrapper-tag">
                                        <p class="card__tag"><span>Adventure</span></p>
                                        <p class="card__term">4 Days, 3 Nights</p>
                                    </div>
                                    <p class="card__title">Ansgar Scheffold</p>
                                    <div class="card__wrapper_buy">
                                        <p class="card__price">400$ <span>/Person</span></p>
                                        <button class="card__buy-now">Buy Now</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tabs__content-item" id="content-3">
                            <div class="travel-card">
                                <div class="travel-card__title">
                                    <img src="{{asset('assets/images/cave.png')}}" alt="" class="card_img">
                                    <p class="card__date">18 JUN 2022</p>
                                </div>
                                <div class="card__wrapper">
                                    <div class="card__wrapper-tag">
                                        <p class="card__tag"><span>Adventure</span></p>
                                        <p class="card__term">4 Days, 3 Nights</p>
                                    </div>
                                    <p class="card__title">Ansgar Scheffold</p>
                                    <div class="card__wrapper_buy">
                                        <p class="card__price">400$ <span>/Person</span></p>
                                        <button class="card__buy-now">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="travel-card">
                                <div class="travel-card__title">
                                    <img src="{{asset('assets/images/beach.png')}}" alt="" class="card_img">
                                    <p class="card__date">14 FEB 2022</p>
                                </div>
                                <div class="card__wrapper">
                                    <div class="card__wrapper-tag">
                                        <p class="card__tag"><span>Ralax</span></p>
                                        <p class="card__term">3 Days, 3 Nights</p>
                                    </div>
                                    <p class="card__title">Loga Sea</p>
                                    <div class="card__wrapper_buy">
                                        <p class="card__price">700$ <span>/Person</span></p>
                                        <button class="card__buy-now">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="travel-card">
                                <div class="travel-card__title">
                                    <img src="{{asset('assets/images/lake.png')}}" alt="" class="card_img">
                                    <p class="card__date">22 DEC 2022</p>
                                </div>
                                <div class="card__wrapper">
                                    <div class="card__wrapper-tag">
                                        <p class="card__tag"><span>Ralax</span></p>
                                        <p class="card__term">7 Days, 6 Nights</p>
                                    </div>
                                    <p class="card__title">Lona X</p>
                                    <div class="card__wrapper_buy">
                                        <p class="card__price">340$ <span>/Person</span></p>
                                        <button class="card__buy-now">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="travel">
            <div class="container">
                <div class="travel_block">
                    <div class="travel__img">
                        <img src="{{asset('assets/images/travel.png') }}" alt="" class="travel__img-img">
                        <div class="travel__tag tag1">
                            300+
                            <span>destination</span>
                        </div>
                        <div class="travel__tag tag2">
                            5000+
                            <span>tourists</span>
                        </div>
                        <div class="travel__tag tag3">
                            150+
                            <span>hotels</span>
                        </div>
                    </div>
                    <div class="travel__info">
                        <h1 class="travel__info-title">
                            Travel Any Corner of The World With Us
                        </h1>
                        <div class="travel__info-text">
                            <p class="travel__info_desc">
                                Would you explore nature paradise in the world, let’s find the best destination in world
                                with us, Would you explore nature paradise in the world, let’s find the best destination
                                in world with us. Would you explore nature paradise in the world, let’s find the best
                                destination in world with us.
                            </p>
                            <p class="travel__info_desc">
                                Would you explore nature paradise in the world, let’s find the best destination in world
                                with us.
                            </p>
                        </div>
                        <button class="btn_contactus">Contact Us</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="recommended">
            <div class="container">
                <h1 class="recommended__title">Recommended Destination</h1>
                <div class="recommended__tabs">
                    <div class="recommened_tabs-btn">
                        <button class="recomm__btn-item recomm__tabs__btn-item--active"
                                data-button="rec_content-1">Popular</button>
                        <button class="recomm__btn-item" data-button="rec_content-2">Adventure</button>
                        <button class="recomm__btn-item" data-button="rec_content-3">Beach</button>
                    </div>
                    <div class="recomm__content">
                        <div class="recomm__content-item recomm__content-item--active" id="rec_content-1">
                            <div class="recomm__card">
                                <div class="recomm__img">
                                    <img src="{{asset('assets/images/rec1.png')}}" alt="" class="recomm__img-img">
                                    <p class="recomm__rating">3.4</p>
                                </div>
                                <div class="recomm__info">
                                    <h3 class="recomm__info-title">Kina Mountain</h3>
                                    <p class="recomm__info-location">Cambodia</p>
                                </div>

                            </div>
                            <div class="recomm__card">
                                <div class="recomm__img">
                                    <img src="{{asset('assets/images/rec2.png')}}" alt="" class="recomm__img-img">
                                    <p class="recomm__rating">3.4</p>
                                </div>
                                <div class="recomm__info">
                                    <h3 class="recomm__info-title">Kina Mountain</h3>
                                    <p class="recomm__info-location">Cambodia</p>
                                </div>

                            </div>
                            <div class="recomm__card">
                                <div class="recomm__img">
                                    <img src="{{asset('assets/images/rec3.png')}}" alt="" class="recomm__img-img">
                                    <p class="recomm__rating">3.4</p>
                                </div>
                                <div class="recomm__info">
                                    <h3 class="recomm__info-title">Kina Mountain</h3>
                                    <p class="recomm__info-location">Cambodia</p>
                                </div>

                            </div>
                            <div class="recomm__card">
                                <div class="recomm__img">
                                    <img src="{{asset('assets/images/rec4.png')}}" alt="" class="recomm__img-img">
                                    <p class="recomm__rating">3.4</p>
                                </div>
                                <div class="recomm__info">
                                    <h3 class="recomm__info-title">Kina Mountain</h3>
                                    <p class="recomm__info-location">Cambodia</p>
                                </div>
                            </div>
                        </div>
                        <div class="recomm__content-item" id="rec_content-2">
                            <div class="recomm__card">
                                <div class="recomm__img">
                                    <img src="{{asset('assets/images/rec1.png')}}" alt="" class="recomm__img-img">
                                    <p class="recomm__rating">3.4</p>
                                </div>
                                <div class="recomm__info">
                                    <h3 class="recomm__info-title">Kina Mountain</h3>
                                    <p class="recomm__info-location">Cambodia</p>
                                </div>

                            </div>

                            <div class="recomm__card">
                                <div class="recomm__img">
                                    <img src="{{asset('assets/images/rec3.png')}}" alt="" class="recomm__img-img">
                                    <p class="recomm__rating">3.4</p>
                                </div>
                                <div class="recomm__info">
                                    <h3 class="recomm__info-title">Kina Mountain</h3>
                                    <p class="recomm__info-location">Cambodia</p>
                                </div>

                            </div>
                            <div class="recomm__card">
                                <div class="recomm__img">
                                    <img src="{{asset('assets/images/rec2.png')}}" alt="" class="recomm__img-img">
                                    <p class="recomm__rating">3.4</p>
                                </div>
                                <div class="recomm__info">
                                    <h3 class="recomm__info-title">Kina Mountain</h3>
                                    <p class="recomm__info-location">Cambodia</p>
                                </div>

                            </div>
                            <div class="recomm__card">
                                <div class="recomm__img">
                                    <img src="{{asset('assets/images/rec4.png')}}" alt="" class="recomm__img-img">
                                    <p class="recomm__rating">3.4</p>
                                </div>
                                <div class="recomm__info">
                                    <h3 class="recomm__info-title">Kina Mountain</h3>
                                    <p class="recomm__info-location">Cambodia</p>
                                </div>
                            </div>
                        </div>
                        <div class="recomm__content-item" id="rec_content-3">
                            <div class="recomm__card">
                                <div class="recomm__img">
                                    <img src="{{asset('assets/images/santamonica.jpg')}}" alt="" class="recomm__img-img">
                                    <p class="recomm__rating">3.4</p>
                                </div>
                                <div class="recomm__info">
                                    <h3 class="recomm__info-title">Santa Monica</h3>
                                    <p class="recomm__info-location">California</p>
                                </div>

                            </div>
                            <div class="recomm__card">
                                <div class="recomm__img">
                                    <img src="{{asset('assets/images/cocoa.jpg')}}" alt="" class="recomm__img-img">
                                    <p class="recomm__rating">3.4</p>
                                </div>
                                <div class="recomm__info">
                                    <h3 class="recomm__info-title">Cocoa Beach</h3>
                                    <p class="recomm__info-location">Florida</p>
                                </div>

                            </div>
                            <div class="recomm__card">
                                <div class="recomm__img">
                                    <img src="{{asset('assets/images/hanalei.jpg')}}" alt="" class="recomm__img-img">
                                    <p class="recomm__rating">3.4</p>
                                </div>
                                <div class="recomm__info">
                                    <h3 class="recomm__info-title">Hanalei Bay</h3>
                                    <p class="recomm__info-location">Hawaii</p>
                                </div>

                            </div>
                            <div class="recomm__card">
                                <div class="recomm__img">
                                    <img src="{{asset('assets/images/mavericks.jpg')}}" alt="" class="recomm__img-img">
                                    <p class="recomm__rating">3.4</p>
                                </div>
                                <div class="recomm__info">
                                    <h3 class="recomm__info-title">Mavericks</h3>
                                    <p class="recomm__info-location">California</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </section>
        <section class="rewies">
            <div class="container">
                <div class="reviews__inner swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="review__inner-block ">
                                <p class="review__text">Our trip to Morocco was truly a onece in a lifetime experience
                                    and
                                    we
                                    are so grateful to everyone that made it happen seamlessly. Our travel planner,
                                    Jaouad,
                                    was
                                    increadible.</p>
                                <p class="review__name">-Vand D</p>
                                <p class="review__location">Happy Treloo</p>
                                <div class="review__user">
                                    <img src="{{asset('assets/images/user1.png')}}" alt="" class="review__user-img">
                                    <div class="review__rating">
                                        <img src="{{asset('assets/images/icons/Star.svg')}}" alt="" class="review__rating-img">
                                        <p class="review__rating-text">4.5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review__inner-block">
                                <p class="review__text">Our trip to Morocco was truly a onece in a lifetime experience
                                    and
                                    we
                                    are so grateful to everyone that made it happen seamlessly. Our travel planner,
                                    Jaouad,
                                    was
                                    increadible.</p>
                                <p class="review__name">-Vand D</p>
                                <p class="review__location">Happy Treloo</p>
                                <div class="review__user">
                                    <img src="{{asset('assets/images/user2.png')}}" alt="" class="review__user-img">
                                    <div class="review__rating">
                                        <img src="{{asset('assets/images/icons/Star.svg')}}" alt="" class="review__rating-img">
                                        <p class="review__rating-text">4.9</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review__inner-block ">
                                <p class="review__text">Our trip to Morocco was truly a onece in a lifetime experience
                                    and
                                    we
                                    are so grateful to everyone that made it happen seamlessly. Our travel planner,
                                    Jaouad,
                                    was
                                    increadible.</p>
                                <p class="review__name">-Vand D</p>
                                <p class="review__location">Happy Treloo</p>
                                <div class="review__user">
                                    <img src="{{asset('assets/images/user1.png')}}" alt="" class="review__user-img">
                                    <div class="review__rating">
                                        <img src="{{asset('assets/images/icons/Star.svg')}}" alt="" class="review__rating-img">
                                        <p class="review__rating-text">4.5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review__inner-block">
                                <p class="review__text">Our trip to Morocco was truly a onece in a lifetime experience
                                    and
                                    we
                                    are so grateful to everyone that made it happen seamlessly. Our travel planner,
                                    Jaouad,
                                    was
                                    increadible.</p>
                                <p class="review__name">-Vand D</p>
                                <p class="review__location">Happy Treloo</p>
                                <div class="review__user">
                                    <img src="{{asset('assets/images/user2.png')}}" alt="" class="review__user-img">
                                    <div class="review__rating">
                                        <img src="{{asset('assets/images/icons/Star.svg')}}" alt="" class="review__rating-img">
                                        <p class="review__rating-text">4.9</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

