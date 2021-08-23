@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('assets/css/home.css') }}" rel="stylesheet" type='text/css'>
@endsection


@section('title')
CyberKey Homepage
@endsection

@section('content')
<section class="topImgSection" style='background-image:url("{{ asset("assets/images/cover.jpg") }}")'>
    <div class="topImgContent">
        <h2>Cyber Key </h2>
        <h3>@lang('homepage.section1caption')</h3>
        <p>@lang('homepage.section1text')</p>
    </div>
</section>

<section class="about_flex d-flex">
    <div class="about_flex_item1">
        <h5>@lang('homepage.section2caption')</h5>
        <p>@lang('homepage.section2text')</p>
        <a href="{{route('aboutUs', app()->getLocale())}}">
            <button class="blue_but">
                @lang('buttons.but_learnMore')
            </button>
        </a>
    </div>
    <div class="about_flex_item2">
        <div class="abs_about_flex_item2" style='background-image:url("{{ asset("assets/images/sec2abs.jpg") }}")'>

        </div>
    </div>
</section>
<section class="third_finger_auth">
    <h4>@lang('homepage.section3maincaption')</h4>
    <div class="finger_auth_flex d-flex justify-content-between flex-wrap">
        <div class="finger_auth_flex_item">
            <div class="finger_auth_flex_item_img_div">
                <img src="{{ asset('assets/icons/surface1.png') }}" alt="" class='finger_auth_flex_item_img'>
            </div>
            <div class="finger_auth_flex_item_cap">
                @lang('homepage.section3item1caption')
            </div>
            <div class="finger_auth_flex_item_text">
                @lang('homepage.section3item1text')
            </div>
        </div>
        <div class="finger_auth_flex_item">
            <div class="finger_auth_flex_item_img_div">
                <img src="{{ asset('assets/icons/easy-use.png') }}" alt="" class='finger_auth_flex_item_img'>
            </div>
            <div class="finger_auth_flex_item_cap">
                @lang('homepage.section3item2caption')
            </div>
            <div class="finger_auth_flex_item_text">
                @lang('homepage.section3item2text')
            </div>
        </div>
        <div class="finger_auth_flex_item">
            <div class="finger_auth_flex_item_img_div">
                <img src="{{ asset('assets/icons/lock.png') }}" alt="" class='finger_auth_flex_item_img'>
            </div>
            <div class="finger_auth_flex_item_cap">
                @lang('homepage.section3item3caption')
            </div>
            <div class="finger_auth_flex_item_text">
                @lang('homepage.section3item3text')
            </div>
        </div>
        <div class="finger_auth_flex_item">
            <div class="finger_auth_flex_item_img_div">
                <img src="{{ asset('assets/icons/fingerprint.png') }}" alt="" class='finger_auth_flex_item_img'>
            </div>
            <div class="finger_auth_flex_item_cap">
                @lang('homepage.section3item4caption')
            </div>
            <div class="finger_auth_flex_item_text">
                @lang('homepage.section3item4text')
            </div>
        </div>
        <div class="finger_auth_flex_item">
            <div class="finger_auth_flex_item_img_div">
                <img src="{{ asset('assets/icons/fingerprint1.png') }}" alt="" class='finger_auth_flex_item_img'>
            </div>
            <div class="finger_auth_flex_item_cap">
                @lang('homepage.section3item5caption')
            </div>
            <div class="finger_auth_flex_item_text">
                @lang('homepage.section3item5text')
            </div>
        </div>
    </div>
</section>
<section class="four_redefined">
    <h4> @lang('homepage.section4mainCaption')</h4>
    <div class="four_redefined_flex d-flex justify-contect-between flex-wrap">
        <div class="four_redefined_flex_item_content_container">
            <div class="four_redefined_flex_item_content red_cont_right">
                <h4>
                    @lang('homepage.section4title1')
                </h4>
                <p>
                    @lang('homepage.section4text1')
                </p>
            </div>
        </div>
        <div class="four_redefined_flex_item_background" style='background-image:url("{{ asset("assets/images/in-display-cover.jpg") }}")'>
        </div>

        <div class="four_redefined_flex_item_background" style='background-image:url("{{ asset("assets/images/gs10-ultrasonic-sensor-recovered.jpg") }}")'>
        </div>
        <div class="four_redefined_flex_item_content_container">
            <div class="four_redefined_flex_item_content red_cont_left">
                <h4>
                    @lang('homepage.section4title1')
                </h4>
                <p>
                    @lang('homepage.section4text1')
                </p>
            </div>
        </div>

        <div class="four_redefined_flex_item_content_container">
            <div class="four_redefined_flex_item_content red_cont_right">
                <h4>
                    @lang('homepage.section4title1')
                </h4>
                <p>
                    @lang('homepage.section4text1')
                </p>
            </div>
        </div>
        <div class="four_redefined_flex_item_background" style='background-image:url("{{ asset("assets/images/fingerprint.jpg") }}")'>
        </div>

    </div>
</section>
<section class="five_certificates center">
    <h4 class='common_caprion'>Cyber Tech certificates and patents</h4>
    <p>We get our first patent in may 2017. And now our certificates and patents are 19.</p>

    <div class="navigation_certificate d-flex justify-content-around special-offers-flex">
        <div class="certificate-item1" id="cert-1">
            <div class="certificate-img certificate-img1" style="background-image: url('{{ asset('assets/images/technical-support-certificate-1-638.jpg') }}');">

            </div>
        </div>

        <div class="certificate-item1" id="cert-2">
            <div class="certificate-img certificate-img1" style="background-image: url('{{ asset('assets/images/sec2abs.jpg') }}');">

            </div>
        </div>

        <div class="certificate-item1" id="cert-3">
            <div class="certificate-img certificate-img1" style="background-image: url('{{ asset('assets/images/Mask Group 29.jpg') }}');">

            </div>
        </div>

        <div class="certificate-item1" id="cert-4">
            <div class="certificate-img certificate-img1" style="background-image: url('{{ asset('assets/images/pexels-luis-gomes-546819 (2).jpg') }}');">

            </div>
        </div>

        <div class="certificate-item1" id="cert-5">
            <div class="certificate-img certificate-img1" style="background-image: url('{{ asset('assets/images/pexels-ali-pazani-2777898.jpg') }}');">

            </div>
        </div>

        <div class="certificate-item1" id="cert-6">
            <div class="certificate-img certificate-img1" style="background-image: url('{{ asset('assets/images/cover.jpg') }}');">

            </div>
        </div>
        <div class="certificate-item1" id="cert-7">
            <div class="certificate-img certificate-img1" style="background-image: url('{{ asset('assets/images/technical-support-certificate-1-638.jpg') }}');">

            </div>
        </div>
    </div>
    <div class="d-flex certNavigator" id='display_none'>
        <div class="certNavItem1">
            <span class="left_cert">
                <img src="{{ asset('assets/icons/arrow.png')}}" alt="" class='left_right'>
                <!-- arrow.png -->
            </span>
            <span class="right_cert">
                <img src="{{ asset('assets/icons/arrow right.png')}}" alt="" class='left_right'>
                <!-- arrow right.png -->
            </span>
        </div>
        <div class="certBorder d-flex">
            <div class="certBorder_item certBorder_bottom certBorder_item_0"></div>
        </div>
    </div>
</section>
<section class="six_media">
    <h4>Media Platforms about Cyber Key</h4>
    <p>Resent Press Releases</p>
    <div class="flex_media d-flex justify-content-between mt-5">
        <div class="flex_media_item1">
            <div class="flex_media_item1_content">
                <div class="media_item_img" style="background-image: url('{{ asset('assets/images/pexels-redrecords2872418.jpg') }}');"></div>
                <div class="media_item_date">21.06.2021</div>
                <div class="media_item_title">Mind the gap: China’s north-south
                    economic divide seen worsening</div>
                <div class="media_item_text">Nomura estimates northern China’s share of the national
                    economy shrank to 35.2% last year from 42.9% in 2012.Nomura estimates northern China’s share of the national
                    economy shrank to 35.2% last year from 42.9% in 2012.
                </div>
            </div>
            <div class="flex_media_item1_content1">
                <div class="media_item_img" style="background-image: url('{{ asset('assets/images/Mask Group 18.jpg') }}');"></div>
                <div class="media_item_date">21.06.2021</div>
                <div class="media_item_title">Mind the gap: China’s north-south
                    economic divide seen worsening</div>
                <div class="media_item_text">Nomura estimates northern China’s share of the national
                    economy shrank to 35.2% last year from 42.9% in 2012.Nomura estimates northern China’s share of the national
                    economy shrank to 35.2% last year from 42.9% in 2012.
                </div>
            </div>
        </div>
        <div class="flex_media_item2">
            <div class="media_item_img_long" style="background-image: url('{{ asset('assets/images/pexels-artem-podrez-5108651.jpg') }}');"></div>
            <div class="media_item_date">21.06.2021</div>
            <div class="media_item_title">Mind the gap: China’s north-south
                economic divide seen worsening</div>
            <div class="media_item_text_longer">Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
                economy shrank to 35.2% last year from 42.9% in 2012.Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
                economy shrank to 35.2% last year from 42.9% in 2012.Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
            </div>
        </div>

        <div class="flex_media_item3">
            <div class="flex_media_item1_content">
                <div class="media_item_img" style="background-image: url('{{ asset('assets/images/pexels-chris-schippers-421927.jpg') }}');"></div>
                <div class="media_item_date">21.06.2021</div>
                <div class="media_item_title">Mind the gap: China’s north-south
                    economic divide seen worsening</div>
                <div class="media_item_text">Nomura estimates northern China’s share of the national
                    economy shrank to 35.2% last year from 42.9% in 2012.Nomura estimates northern China’s share of the national
                    economy shrank to 35.2% last year from 42.9% in 2012.
                </div>
            </div>
            <div class="flex_media_item1_content1">
                <div class="media_item_img" style="background-image: url('{{ asset('assets/images/pexels-mart-production-7316909.jpg') }}');"></div>
                <div class="media_item_date">21.06.2021</div>
                <div class="media_item_title">Mind the gap: China’s north-south
                    economic divide seen worsening</div>
                <div class="media_item_text">Nomura estimates northern China’s share of the national
                    economy shrank to 35.2% last year from 42.9% in 2012.Nomura estimates northern China’s share of the national
                    economy shrank to 35.2% last year from 42.9% in 2012.
                </div>
            </div>

        </div>

    </div>
    <div class="view_all">
        <a href="{{route('pressReleases', app()->getLocale())}}">
            <button class='but_view_all'>@lang('buttons.viewAll')</button>
        </a>
    </div>
</section>

<section id="submit_newsletters_home" class="seven_subscribe" style='background-image:url("{{ asset("assets/images/cover.jpg") }}")'>
    <h4>Subscribe for our latest news and for our blog articles</h4>
    <form action="{{route('form-submit-home', app()->getLocale())}}#submit_newsletters_home" method='post'>
        @csrf
        <input type="text" placeholder="@lang('navbar.pl_enter_email')" class='subsInput' name='email'>
        <button type='submit' class="sendSubs">Send</button>
        <!-- <input type="text" name='email' class='footer_subs_inp form-control' placeholder="@lang('navbar.pl_enter_email')">
        <button type='submit' class='footbutSubmit'><img src="{{ asset('assets/icons/arrow.png') }}" alt="" class='arrow-rotate'></button> -->
    </form>
    <div class=''>
        <!-- if(error has any() class) -->
        @if($errors->has('email'))
        @foreach($errors->all() as $error)
        <div class='submitError1'>{{$error}}</div>
        @endforeach

        @elseif(session()->has('success'))

        <div class='submitSuccess'>@lang('validation.success')</div>
        <script>
            setTimeout(function() {
                $('.submitSuccess').html('');
            }, 3000)
        </script>
        @endif
    </div>
</section>

@include('includes/contact_sec')

<script src="{{ asset('assets/js/home.js')}}"></script>

@endsection
