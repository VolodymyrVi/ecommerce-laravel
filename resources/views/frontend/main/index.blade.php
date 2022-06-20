@extends('frontend.layouts.main')

@section('content')
    <main class="overflow-hidden">

        <!-- newsLetter_popup Start -->
        <button data-mfp-src="#newsLetter-popup" class="modal-btn d-none"></button>
        <div id="newsLetter-popup" class="mfp-hide p-4" role="dialog">
            <div class="row align-items-center justify-content-sm-between">
                <div class="col-lg-5 d-lg-block d-none">
                    <div class="newsLetter-popup__thumb imgenews">
                        <img src="{{ asset('frontend/images/home-three/products-1.jpg') }}" alt="newsletter">
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-10">
                    <div class="newsLetter-popup__content mb-4">
                        <div class="text-center"> <a href="index.html" class="logo"> <img
                                    src="{{ asset('frontend/images/logo/logo.png') }}" alt="logo"> </a>
                            <h2> Приєднайся <span>до нас.</span> </h2>
                            <p> Підпишіться, щоб отримувати новини від DogTag.in.ua </p>
                        </div>
                        <form action="#0" class="newsLetter-popup__subscrib-form">
                            <div class="input_box"> <input type="email" placeholder="Enter your email Address"
                                    name="email"> <button type="submit" class="subscribe_btn"> Submit </button> </div>
                            <div class="form-group "> <input type="checkbox" id="html"> <label for="html"> By providing
                                    my information, I agree to Karte <a href="#0"> Політика приватності</a> and <a href="#0">
                                        Умови використання</a> </label> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!-- newsLetter-one style-two Start -->
        <section class="newsLetter-one border-0 style-two pt-60 pb-60 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="newsLetter-one__content-box d-flex align-items-center justify-content-md-start justify-content-center wow fadeInUp animated"
                            data-wow-delay="0.1s">
                            <div class="thumb"> <img src="{{ asset('frontend/images/home-two/envalop.png') }}" alt=""> </div>
                            <h3 class="t36"> <span>Підписатись на </span> Новини </h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="newsLetter-one__content-box d-flex align-items-center justify-content-md-start justify-content-center wow fadeInUp animated "
                            data-wow-delay="0.2s">
                            <h6 class="text-md-start text-center"> Підписатись на останні новини, щоб отримувати останні новини</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="newsLetter-one__content-box three d-flex align-items-center justify-content-md-start justify-content-center wow fadeInUp animated"
                            data-wow-delay="0.3s">
                            <form action="#0" class="form">
                                <div class="newsLetter-one__subscribe-box"> <input type="email"
                                        placeholder="Email address" name="email"> <button type="submit"
                                        class="subscrib-btn"> Підписатись </button> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsLetter-one style-two End -->

        <!--Start Categories Two-->
        <section class="categories-three overflow-hidden">
            <div class="auto-container container">
                <div class="row">
                    <div class="categories-three__inner pt-120 pb-120">
                        <div class="row align-items-center justify-content-xl-start justify-content-center">
                            <div class="col-xl-4 col-md-7">
                                <div class="categories-three__content text-xl-start text-center wow fadeInUp animated">
                                    <div class="sec-title-style2 style3">
                                        <h2>Магазин по категоріям</h2>
                                    </div>
                                    <p>Continually enhance long-term don high impact niche markets whereas user centric
                                        niche markets. actualize backward compatible...</p>
                                    <div class="btn-box"> <a href="shop-grid-left-sidebar.html"
                                            class="btn--primary style2">Переглянути більше</a> </div>
                                </div>
                            </div>

                            <div class="col-xl-8">
                                <div class="row  justify-content-center">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="categories-three__list-item mt-30 wow fadeInUp animated">
                                            <div class="categories-three__list-item-inner"> <a
                                                    href="shop-grid-right-sidebar.html" class="img-box"> <img
                                                        src="{{ asset('frontend/images/home-three/categories-v2-img1.jpg') }}" alt="" />
                                                    <div class="text"> <span>10 Позицій</span> </div>
                                                </a>
                                                <div class="title text-center">
                                                    <h4><a href="shop-grid-left-sidebar.html">Жетони</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="categories-three__list-item mt-30 wow fadeInUp animated">
                                            <div class="categories-three__list-item-inner"> <a
                                                    href="shop-grid-left-sidebar.html" class="img-box"> <img
                                                        src="{{ asset('frontend/images/home-three/categories-v2-img2.jpg') }}" alt="" />
                                                    <div class="text"> <span>12 Позицій</span> </div>
                                                </a>
                                                <div class="title text-center">
                                                    <h4><a href="shop-grid-left-sidebar.html">Бампери</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="categories-three__list-item mt-30 wow fadeInUp animated">
                                            <div class="categories-three__list-item-inner"> <a
                                                    href="shop-grid-left-sidebar.html" class="img-box"> <img
                                                        src="{{ asset('frontend/images/home-three/categories-v2-img3.jpg') }}" alt="" />
                                                    <div class="text"> <span>2 Позицій</span> </div>
                                                </a>
                                                <div class="title text-center">
                                                    <h4><a href="shop-grid-left-sidebar.html">Ланцюжки</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Categories Two-->

        <!-- core-features Start -->
        <section class="core-features pt-120 mb-60 overflow-hidden">
            <div class="container auto-container">
                <div class="row mt--30">
                    <div class="col-xxl-3 col-md-6 mt-30 wow fadeInUp animated " data-wow-delay="0.2s">
                        <div class="core-features__box d-flex ms-0"> <span class="one"></span> <span class="two"></span>
                            <div class="icon"> <img src="{{ asset('frontend/images/icon/f-icon-1.png') }}" alt=""> </div>
                            <div class="core-features__box-content"> <a href="login.html" class="d-block">
                                    <h4> Безпечні платежі </h4>
                                </a>
                                <p>Безпечність оплати гарантоана на нашому сайті.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 mt-30 wow fadeInUp animated " data-wow-delay="0.3s">
                        <div class="core-features__box d-flex "> <span class="one"></span> <span class="two"></span>
                            <div class="icon"> <img src="{{ asset('frontend/images/icon/f-icon-2.png') }}" alt=""> </div>
                            <div class="core-features__box-content"> <a href="login.html" class="d-block">
                                    <h4> Швидка доставка </h4>
                                </a>
                                <p>З початку війни найкраще і швидно працює Нова Пошта.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 mt-30 wow fadeInUp animated " data-wow-delay="0.4s">
                        <div class="core-features__box d-flex "> <span class="one"></span> <span class="two"></span>
                            <div class="icon"> <img src="{{ asset('frontend/images/icon/f-icon-3.png') }}" alt=""> </div>
                            <div class="core-features__box-content"> <a href="login.html" class="d-block">
                                    <h4> Персональне виготовлення </h4>
                                </a>
                                <p>Виготовлення жетонів персонально для кожного замовника в нас на виробництві.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 mt-30 wow fadeInUp animated " data-wow-delay="0.5s">
                        <div class="core-features__box d-flex me-0"> <span class="one"></span> <span class="two"></span>
                            <div class="icon"> <img src="{{ asset('frontend/images/icon/f-icon-4.png') }}" alt=""> </div>
                            <div class="core-features__box-content"> <a href="login.html" class="d-block">
                                    <h4> Кваліфікована підтримка </h4>
                                </a>
                                <p>Ми зможемо порадити обрати оптимальний варіант саме під Ваші потреби і завдання.
                                Можливі виконання нестандартних замовлень</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- review-one Start -->
        <section class="review-one pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="review-one__section-head text-center wow fadeInUp animated">
                            <div class="title">
                                <h2>Клієнти про нас</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp animated">
                        <div class="reviewOneSlider owl-carousel">
                            <div class="review-one__single-review">
                                <div class="review-one__single-content">
                                    <div class="review-one__aurthor">
                                        <div class="thumb"> <img src="{{ asset('frontend/images/testimonial/testimonial-v1-1.png') }}"
                                                alt=""> </div> <span class="quate"> <i
                                                class="flaticon-right-quotes-symbol"></i> </span>
                                    </div>
                                    <div class="review-one__review-text">
                                        <p> “Все круто! Останній раз робив замовлення ще в 2018 році і ось знову з початком війни.
                                        Повністю задоволений якістю, саме тоуу і знову замовив” </p>
                                        <h4> <a href="#0">Олександр </a> </h4> 
                                    </div>
                                </div>
                            </div>
                            <div class="review-one__single-review">
                                <div class="review-one__single-content">
                                    <div class="review-one__aurthor">
                                        <div class="thumb"> <img src="{{ asset('frontend/images/testimonial/testimonial-v1-2.png') }}"
                                                alt=""> </div> <span class="quate"> <i
                                                class="flaticon-right-quotes-symbol"></i> </span>
                                    </div>
                                    <div class="review-one__review-text">
                                        <p> “Заказала брату. Заказ оформила в понедельник ввечером і в четверг уже забрала на отделении Новой Почты. Брат остался довольным. Спасибо за оперативность!” </p>
                                        <h4> <a href="#0">Галя</a> </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="review-one__single-review">
                                <div class="review-one__single-content">
                                    <div class="review-one__aurthor">
                                        <div class="thumb"> <img src="{{ asset('frontend/images/testimonial/testimonial-v1-3.png') }}"
                                                alt=""> </div> <span class="quate"> <i
                                                class="flaticon-right-quotes-symbol"></i> </span>
                                    </div>
                                    <div class="review-one__review-text">
                                        <p> “Заказал на нашу тероборону. Все четко, то что и ожидал” </p>
                                        <h4> <a href="#0">Юрий </a> </h4> <span>Житомир </span>
                                    </div>
                                </div>
                            </div>
                            <div class="review-one__single-review">
                                <div class="review-one__single-content">
                                    <div class="review-one__aurthor">
                                        <div class="thumb"> <img src="{{ asset('frontend/images/testimonial/testimonial-v1-2.png') }}"
                                                alt=""> </div> <span class="quate"> <i
                                                class="flaticon-right-quotes-symbol"></i> </span>
                                    </div>
                                    <div class="review-one__review-text">
                                        <p> “Дуже дякую. Якість на висоті. Рекомендую” </p>
                                        <h4> <a href="#0">Юра </a> </h4> <span>Коростень</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsLetter-one Start -->


        <!--Start Blog Three-->
        <section class="blog-three pt-60 pb-120 overflow-hidden">
            <div class="container">
                <div class="section-header style3 text-center wow fadeInUp animated">
                    <h2>Останні новини </h2>
                </div>
                <div class="row justify-content-center">
                    <!--Start Blog Three Single-->
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp animated ">
                        <div class="blog-three__single mt-30 ">
                            <a href="blog-single.html" class="blog-three__single-img d-block">
                                <img src="{{ asset('frontend/images/blog/blog-v3-1.jpg') }}" alt="" />
                            </a>
                            <div class="blog-three__single-content text-center"> <span>Vendora Style</span>
                                <h4><a href="blog-single.html">A Perfect Style With Our Fashion Shoes</a></h4>
                                <div class="btn-box"> <a href="blog-single.html">Read More</a> </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Three Single-->
                    <!--Start Blog Three Single-->
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp animated">
                        <div class="blog-three__single mt-30"> <a href="blog-single.html"
                                class="blog-three__single-img d-block"> <img src="{{ asset('frontend/images/blog/blog-v3-2.jpg') }}"
                                    alt="" /> </a>
                            <div class="blog-three__single-content text-center"> <span>Vendora Style</span>
                                <h4><a href="blog-single.html">2021-2021 fall-winter men's shoe trends.</a></h4>
                                <div class="btn-box"> <a href="blog-single.html">Read More</a> </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Three Single-->
                    <!--Start Blog Three Single-->
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp animated">
                        <div class="blog-three__single mt-30"> <a href="blog-single.html"
                                class="blog-three__single-img d-block"> <img src="{{ asset('frontend/images/blog/blog-v3-3.jpg') }}"
                                    alt="" /> </a>
                            <div class="blog-three__single-content text-center"> <span>Vendora Style</span>
                                <h4><a href="blog-single.html">What men's shoes will be in fashion in the spring </a>
                                </h4>
                                <div class="btn-box"> <a href="blog-single.html">Read More</a> </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Three Single-->
                </div>
            </div>
        </section>
        <!--End Blog Three-->

        <!--Start Gallery Two-->
        <div class="gallery-two wow fadeInUp animated overflow-hidden">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="gallery-two__slider "> <a href="{{asset('frontend/images/home-three/gallery-v2-img1.jpg') }}"
                                class="gallery-two__single"> <img src="{{ asset('frontend/images/home-three/gallery-v2-img1.jpg') }}"
                                    alt="" /> <span class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                                href="{{asset('frontend/images/home-three/gallery-v2-img2.jpg') }}" class="gallery-two__single"> <img
                                    src="{{ asset('frontend/images/home-three/gallery-v2-img2.jpg') }}" alt="" /> <span
                                    class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                                href="{{asset('frontend/images/home-three/gallery-v2-img3.jpg') }}" class="gallery-two__single"> <img
                                    src="{{ asset('frontend/images/home-three/gallery-v2-img3.jpg') }}" alt="" /> <span
                                    class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                                href="{{asset('frontend/images/home-three/gallery-v2-img4.jpg') }}" class="gallery-two__single"> <img
                                    src="{{ asset('frontend/images/home-three/gallery-v2-img4.jpg') }}" alt="" /> <span
                                    class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                                href="{{asset('frontend/images/home-three/gallery-v2-img5.jpg') }}" class="gallery-two__single"> <img
                                    src="{{ asset('frontend/images/home-three/gallery-v2-img5.jpg') }}" alt="" /> <span
                                    class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                                href="{{asset('frontend/images/home-three/gallery-v2-img6.jpg') }}" class="gallery-two__single"> <img
                                    src="{{ asset('frontend/images/home-three/gallery-v2-img6.jpg') }}" alt="" /> <span
                                    class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                                href="{{asset('frontend/images/home-three/gallery-v2-img2.jpg') }}" class="gallery-two__single"> <img
                                    src="{{ asset('frontend/images/home-three/gallery-v2-img2.jpg') }}" alt="" /> <span
                                    class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                                href="{{asset('frontend/images/home-three/gallery-v2-img3.jpg') }}" class="gallery-two__single"> <img
                                    src="{{ asset('frontend/images/home-three/gallery-v2-img3.jpg') }}" alt="" /> <span
                                    class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                                href="{{asset('frontend/images/home-three/gallery-v2-img4.jpg') }}" class="gallery-two__single"> <img
                                    src="{{ asset('frontend/images/home-three/gallery-v2-img4.jpg') }}" alt="" /> <span
                                    class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Gallery Two-->


    </main>
@endsection

