@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('assets/css/product.css') }}" rel="stylesheet" type='text/css'>
@endsection

@section('title')
Products
@endsection


@section('content')
<section class="whole">
<section class="topImgSection" style='background-image:url("{{ asset("assets/images/cover1.jpg") }}")'>
    <div class="topImgContent">
        <h2>Cyber Key</h2>
        <h3>@lang('productpage.section1caption')</h3>
        <p>@lang('productpage.section1text')</p>
        <a href="{{route('contact', app()->getLocale())}}">
            <button class="blue_but">Contact Us</button>
        </a>
    </div>
</section>
<section class='two_video'>
    <div id="featured" locale_lookup>
        <video id='video' loop>
            <source src='{{ asset("assets/videos/cyber_security.mp4") }}' type="video/mp4" />
        </video>
        <div class="play_button" id='playStop'>
            <i class="far fa-play-circle"></i>
        </div>
    </div>
</section>
<section class='third_from_now'>
    <div class="from_now_content">
        <h3>From now on, your fingers can replace all your keys, passwords, bank cards, etc.</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
            has been the industry's standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into electronic typesetting, remaining
            essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
    <div class="from_now_flex d-flex justify-content-around flex-wrap mt-5">
        <div class="from_now_item">
            <div class="from_now_item_img downer">
                <img src='{{ asset("assets/icons/Group 704.png") }}' alt="">
            </div>
            <h5>Car</h5>
            <p>Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem
                Ipsum has been the industry's standard
                dummy text ever since the 1500s

            </p>
        </div>
        <div class="from_now_item">
            <div class="from_now_item_img" style='background-image:'>
                <img class='smaller_img' src='{{ asset("assets/icons/Group 708.png") }}' alt="">
            </div>
            <h5>Home</h5>
            <p>Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem
                Ipsum has been the industry's standard
                dummy text ever since the 1500s
            </p>
        </div>
        <div class="from_now_item">
            <div class="from_now_item_img downer">
                <img class='smaller_img1' src='{{ asset("assets/icons/Group 705.png") }}' alt="">
            </div>
            <h5>Computer</h5>
            <p>Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem
                Ipsum has been the industry's standard
                dummy text ever since the 1500s
            </p>
        </div>
        <div class="from_now_item">
            <div class="from_now_item_img">
                <img src='{{ asset("assets/icons/Group 706.png") }}' alt="">
            </div>
            <h5>Computer systems</h5>
            <p>Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem
                Ipsum has been the industry's standard
                dummy text ever since the 1500s
            </p>
        </div>
        <div class="from_now_item">
            <div class="from_now_item_img">
                <img src='{{ asset("assets/icons/Group 707.png") }}' alt="">
            </div>
            <h5>Bank card</h5>
            <p>Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem
                Ipsum has been the industry's standard
                dummy text ever since the 1500s
            </p>
        </div>
    </div>
</section>
<section class="four_benefits">
    <div class="benefits_content width85">
        <h2>Benefits</h2>
    </div>
    <div class="benefits_flex d-flex width85 justify-content-between mt-5">
        <div class="benefits_item1 d-flex justify-content-between ">
            <div class="benefits_item1_item">
                <div class="benefits_item1_item_img">
                    <img src='{{ asset("assets/icons/security.png") }}' alt="">
                </div>
                <h6>Car</h6>
                <p>Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard
                    dummy text ever since the 1500s
                </p>

                <div class="benefits_item1_item_img">
                    <img src='{{ asset("assets/icons/suitcase.png") }}' alt="">
                </div>
                <h6>Car</h6>
                <p>Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard
                    dummy text ever since the 1500s
                </p>


            </div>
            <div class="benefits_item1_item">
                <div class="benefits_item1_item_img">
                    <img src='{{ asset("assets/icons/time-management (1).png") }}' alt="">
                </div>
                <h6>Car</h6>
                <p>Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard
                    dummy text ever since the 1500s
                </p>

                <div class="benefits_item1_item_img">
                    <img src='{{ asset("assets/icons/smartphone.png") }}' alt="">
                </div>
                <h6>Car</h6>
                <p>Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard
                    dummy text ever since the 1500s
                </p>
            </div>

        </div>
        <div class="benefits_item2"></div>
    </div>
    <div class="cell_phone_abs" style='background-image:url("{{ asset("assets/icons/cell_phone.jpg") }}")'>
    </div>
</section>
<section class='five_opinion'>
    <div class="five_opinion_content d-flex justify-content-between">
        <div class="five_op_item1" style='background-image:url("{{ asset("assets/images/ceo_opinion.jpg") }}")'></div>
        <div class="five_op_item2">
            <h4>Steve Jobs</h4>
            <div>Apple CEO</div>

            <img class='opinion_img' src='{{ asset("assets/icons/left-quote.png")}}' alt="">
            <p>Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum has been
                the industry's standard dummy text ever since the
                1500s, when an unknown printer took a galley of
                type and scrambled it to make a type specimen
                book.
            </p>
        </div>

    </div>
</section>
<section class='six_questions'>
    <h3 class="common_caption">
        Have any questions?
    </h3>
    <p class='common_text'>Our specialists will be happy to answer your
        questions.
    </p>
    <a href="{{route('contact', app()->getLocale())}}">
        <button class="blue_but">Ask Consulant</button>
    </a>
</section>
<section class="seven_features">
    <div class="seven_features_captions">
        <h3 class="common_caption">
            Features
        </h3>
        <p class='common_text'>Reduce risks, secure assets</p>
    </div>
    <div class="seven_features_flex d-flex justify-content-between flex-wrap">
        <div class="seven_features_item seven_features_item_text">
            <div class="common_caption">Flexible
                integration
            </div>
            <p class="common_text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the
                1500s, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also
                the leap into electronic typesetting, remaining essentially unchanged.
            </p>
        </div>
        <div class="seven_features_item seven_features_background" style='background-image:url("{{ asset("assets/images/61aeFPrcN7L._AC_.jpg") }}")'>
        </div>

        <div class="seven_features_item seven_features_background" style='background-image:url("{{ asset("assets/images/fingerpint_phone_678_678x452.jpg") }}")'>
        </div>
        <div class="seven_features_item seven_features_item_text">
            <div class="common_caption">
                Customized User Interface
            </div>
            <p class="common_text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the
                1500s, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also
                the leap into electronic typesetting, remaining essentially unchanged.
            </p>
        </div>

        <div class="seven_features_item seven_features_item_text">
            <div class="common_caption">
                Multi - tenant
            </div>
            <p class="common_text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the
                1500s, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also
                the leap into electronic typesetting, remaining essentially unchanged.
            </p>
        </div>
        <div class="seven_features_item seven_features_background" style='background-image:url("{{ asset("assets/images/61aeFPrcN7L._AC_.jpg") }}")'>
        </div>

        <div class="seven_features_item seven_features_background" style='background-image:url("{{ asset("assets/images/fingerpint_phone_678_678x452.jpg") }}")'>
        </div>
        <div class="seven_features_item seven_features_item_text">
            <div class="common_caption">
                Full audit trail
            </div>
            <p class="common_text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the
                1500s, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also
                the leap into electronic typesetting, remaining essentially unchanged.
            </p>
        </div>
    </div>
</section>

<section class="eight_testimonials">
    <div class="common_caption testimonials_caption">Testimonials</div>
    <div class="testimonial_fl">
        <div class="width85 d-flex justify-content-between">
            <div class="testimonials_item1 d-flex justify-content-between">
                <div class="testimonials_item1_img margin_right" style='background-image:url("{{ asset("assets/images/ceo_opinion.jpg") }}")'>
                </div>
                <div class="testimonials_item1_img" style='background-image:url("{{ asset("assets/images/ceo_opinion.jpg") }}")'>
                </div>
            </div>
            <div class="testimonials_item2">
                <div class="testimonials_item2_img" style='background-image:url("{{ asset("assets/images/ceo_opinion.jpg") }}")'>
                </div>
            </div>
            <div class="testimonials_item3">
                <h5 class='bolder'>Steve Jobs</h5>
                <div class='smaller'>Apple CEO</div>
                <img class='opinion_img' src='{{ asset("assets/icons/left-quote.png")}}' alt="">
                <p class='common_text'>Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
                </p>
            </div>
        </div>
    </div>
    <div class="testimonial_fl">
        <div class="width85 d-flex justify-content-between">
            <div class="testimonials_item1 d-flex justify-content-between">
                <div class="testimonials_item1_img margin_right" style='background-image:url("{{ asset("assets/images/john1.jpg") }}")'>
                </div>
                <div class="testimonials_item1_img" style='background-image:url("{{ asset("assets/images/john1.jpg") }}")'>
                </div>
            </div>
            <div class="testimonials_item2">
                <div class="testimonials_item2_img" style='background-image:url("{{ asset("assets/images/john1.jpg") }}")'>
                </div>
            </div>
            <div class="testimonials_item3">
                <h5 class='bolder'>John Doe1</h5>
                <div class='smaller'>Apple CEO</div>
                <img class='opinion_img' src='{{ asset("assets/icons/left-quote.png")}}' alt="">
                <p class='common_text'>Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
                </p>
            </div>
        </div>
    </div>
    <div class='testimonial_fl'>
        <div class="width85 d-flex justify-content-between">
            <div class="testimonials_item1 d-flex justify-content-between">
                <div class="testimonials_item1_img margin_right" style='background-image:url("{{ asset("assets/images/john2.jpg") }}")'>
                </div>
                <div class="testimonials_item1_img" style='background-image:url("{{ asset("assets/images/john2.jpg") }}")'>
                </div>
            </div>
            <div class="testimonials_item2">
                <div class="testimonials_item2_img" style='background-image:url("{{ asset("assets/images/john2.jpg") }}")'>
                </div>
            </div>
            <div class="testimonials_item3">
                <h5 class='bolder'>John Doe2</h5>
                <div class='smaller'>Apple CEO</div>
                <img class='opinion_img' src='{{ asset("assets/icons/left-quote.png")}}' alt="">
                <p class='common_text'>Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
                </p>
            </div>
        </div>
    </div>
    
    <div class="nav_testimonials_abs">
        <span class="left_testimonial">
            <img class='testimonial_img' src='{{ asset("assets/icons/arrow.png")}}' alt="">
        </span>
        <span class="right_testimonial">
            <img class='testimonial_img' src='{{ asset("assets/icons/arrow right.png")}}' alt="">
        </span>
    </div>
</section>


<section class='already_integrated'>
    <div class="integrated_title">
        <h2 class="common_caption">Cyber Key already integrated</h2>
        <h5>Already working</h5>
        <h5>Already effective - been proven</h5>
    </div>
    <div class='d-flex justify-content-between flex-wrap integrated_flex width85'>
        <div class="integrated_flex_item">
            <img class='sample_logo_img' src='{{ asset("assets/icons/sample-logo.png")}}' alt="">
            <h2 class="common_caption">ATMs</h2>
            <p class="common_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
            has been the industry's standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into electronic typesetting, remaining
            essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <div class="integrated_flex_item int_flex_item_back" style='background-image:url("{{ asset("assets/images/atm.jpg") }}")'>
            
        </div>

        <div class="integrated_flex_item int_flex_item_back" style='background-image:url("{{ asset("assets/images/car.jpg") }}")'>
            
        </div>
        <div class="integrated_flex_item">
            <img class='sample_logo_img' src='{{ asset("assets/icons/sample-logo.png")}}' alt="">
            <h2 class="common_caption">Automobiles and vehicles</h2>
            <p class="common_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
            has been the industry's standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into electronic typesetting, remaining
            essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>

        <div class="integrated_flex_item">
            <img class='sample_logo_img' src='{{ asset("assets/icons/sample-logo.png")}}' alt="">
            <h2 class="common_caption">Automobiles and vehicles</h2>
            <p class="common_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
            has been the industry's standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into electronic typesetting, remaining
            essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <div class="integrated_flex_item int_flex_item_back" style='background-image:url("{{ asset("assets/images/fingerprint.jpg") }}")'>
            
        </div>
        
    </div>

</section>
</section>
@include('includes/contact_sec')
<script src="{{ asset('assets/js/product.js')}}"></script>
@endsection