@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('assets/css/technologies.css') }}" rel="stylesheet" type='text/css'>
@endsection

@section('title')
Industries
@endsection


@section('content')
<section class="tech_top" style='background-image:url("{{ asset("assets/images/technologies_main.jpg") }}")'>
    <div class="darker_abs">
        <div class="topImgContent">
            <h2>Cyber Key</h2>
            <h3>@lang('techpage.section1caption')</h3>
            <a href="{{route('contact', app()->getLocale())}}">
                <button class="blue_but">Contact Us</button>
            </a>
        </div>
    </div>
</section>
<section class='techlogoly_sec width85 pb-5'>
    <h3 class="common_caption capt_tech">
        Technologies
    </h3>
    <div class="technogoly_flex d-flex justify-content-between">

        <div class="tech_flex_item1">
            <h4>Title</h4>
            <p class='common_text'>Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the
                1960s with the release of Letraset sheets containing Lorem
                Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including
                versions of Lorem Ipsum
            </p>
            <h4 class='marg_top'>Title</h4>
            <p class='common_text'>Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the
                1960s with the release of Letraset sheets containing Lorem
                Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including
                versions of Lorem Ipsum
            </p>
        </div>
        <div class="tech_flex_item2" style='background-image:url("{{ asset("assets/images/cell_phones.jpg") }}")'>

        </div>
        <div class="tech_flex_item3">
            <h4 class='marg_top1'>Title</h4>
            <p class='common_text'>Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the
                1960s with the release of Letraset sheets containing Lorem
                Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including
                versions of Lorem Ipsum</p>

        </div>
    </div>
</section>
<section class="hardware_sec">
    <div class="hard_title_area">
        <h3 class="common_caption">Hardware</h3>
        <h3 class="common_caption">Innovation</h3>
        <p class="common_text">Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry's
            standard dummy text ever since the 1500s, when an
            unknown printer took a galley of type and scrambled it to
            make a type specimen book.
        </p>
    </div>
    <div class="hardware_sec_flex d-flex justify-content-between">
        <div class="hardware_flex_item1">
            <h3 class="common_caption">Benefits</h3>
            <p class="common_text">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to
                make a type specimen book.
            </p>
        </div>
        <div class="hardware_flex_item2" style='background-image:url("{{ asset("assets/images/images.jpg") }}")'></div>
    </div>
</section>
<section class="features_sec">
    <h3 class="common_caption">
        Features
    </h3>
    <div class="flex_features d-flex justify-content-between">
        <div class="features_item1">
            <div class="fea_item_cont">
                <div><img src="{{ asset('assets/icons/skill-development.png')}}" alt=""></div>
                <h6>Flexible integration</h6>
            </div>
            <div class="fea_item_cont">
                <div><img class='larger' src="{{ asset('assets/icons/invisible.png')}}" alt=""></div>
                <h6>Invisible</h6>
            </div>
        </div>
        <div class="features_item2">
            <div class="fea_item_cont">
                <div><img src="{{ asset('assets/icons/barcode-scanner.png')}}" alt=""></div>
                <h6>Scanning in distance</h6>
            </div>
            <div>
                <img src="{{ asset('assets/images/black_cell1.jpg')}}" alt="">
            </div>
        </div>
        <div class="features_item3">
            <div class="fea_item_cont">
                <div><img src="{{ asset('assets/icons/XMLID_806_.png')}}" alt=""></div>
                <h6>Technology scanning in 0,5 millisecondn</h6>
            </div>
            <div class="fea_item_cont">
                <div><img src="{{ asset('assets/icons/friends.png')}}" alt=""></div>
                <h6>User friendly</h6>
            </div>
        </div>
    </div>
</section>
<section class='areas_sec'>
    <div class="width85">
        <h3 class="common_caption">Areas</h3>
        <div class="areas_flex d-flex justify-content-start flex-wrap">
            <div class="areas_flex_item">
                <div class="areas_flex_img" style='background-image:url("{{ asset("assets/images/51vQil665YL._AC_SL1001_.jpg") }}")'>
                    <div class="areas_flex_darker">
                        <div class="areas_flex_content">
                            <div class="areas_flex_title">
                                Area Access Security Systems - Electronic
                                Locks
                            </div>
                            <div class="areas_fle_line"></div>
                            <div class="areas_flex_text">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="areas_flex_item">
                <div class="areas_flex_img" style='background-image:url("{{ asset("assets/images/51vQil665YL._AC_SL1001_.jpg") }}")'>
                    <div class="areas_flex_darker">
                        <div class="areas_flex_content">
                            <div class="areas_flex_title">
                                Area Access Security Systems - Electronic
                                Locks
                            </div>
                            <div class="areas_fle_line"></div>
                            <div class="areas_flex_text">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="areas_flex_item">
                <div class="areas_flex_img" style='background-image:url("{{ asset("assets/images/51vQil665YL._AC_SL1001_.jpg") }}")'>
                    <div class="areas_flex_darker">
                        <div class="areas_flex_content">
                            <div class="areas_flex_title">
                                Area Access Security Systems - Electronic
                                Locks
                            </div>
                            <div class="areas_fle_line"></div>
                            <div class="areas_flex_text">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="areas_flex_item">
                <div class="areas_flex_img" style='background-image:url("{{ asset("assets/images/51vQil665YL._AC_SL1001_.jpg") }}")'>
                    <div class="areas_flex_darker">
                        <div class="areas_flex_content">
                            <div class="areas_flex_title">
                                Area Access Security Systems - Electronic
                                Locks
                            </div>
                            <div class="areas_fle_line"></div>
                            <div class="areas_flex_text">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="areas_flex_item">
                <div class="areas_flex_img" style='background-image:url("{{ asset("assets/images/51vQil665YL._AC_SL1001_.jpg") }}")'>
                    <div class="areas_flex_darker">
                        <div class="areas_flex_content">
                            <div class="areas_flex_title">
                                Area Access Security Systems - Electronic
                                Locks
                            </div>
                            <div class="areas_fle_line"></div>
                            <div class="areas_flex_text">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- opinion -->
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
<section class="software_sec">
    <h3 class='common_caption'>Software</h3>
    <h3 class='common_caption'>Technologies</h3>
    <div class="soft_flex d-flex justify-content-between">
        <div class="soft_flex_item">
            <img class='image_soft' src='{{ asset("assets/icons/Mask Group 38.png")}}' alt="">
            <div class="name_soft">
                Python
            </div>
        </div>
        <div class="soft_flex_item">
            <img class='image_soft' src='{{ asset("assets/icons/140px-The_C_Programming_Language_logo.svg.png")}}' alt="">
            <div class="name_soft">
                C
            </div>
        </div>
        <div class="soft_flex_item">
            <img class='image_soft' src='{{ asset("assets/icons/c_Logo.png")}}' alt="">
            <div class="name_soft">
                C++
            </div>
        </div>
        <div class="soft_flex_item">
            <img class='image_soft' src='{{ asset("assets/icons/Qt_logo_2016.svg.png")}}' alt="">
            <div class="name_soft">
                QT
            </div>
        </div>
        <div class="soft_flex_item">
            <img class='image_soft' src='{{ asset("assets/icons/sql-server.png")}}' alt="">
            <div class="name_soft">
                SQL
            </div>
        </div>
    </div>
</section>
<section class="encryption_sec">
    <h3 class='common_caption'>Encryption</h3>
    <div class="enc_flex d-flex justify-content-between width85">
        <div class="enc_item1">
            <h5 class="common_caption">AES 256</h5>
            <p class='common_text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the
                1500s, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book.
            </p>
        </div>
        <div class="enc_item2" style='background-image:url("{{ asset("assets/images/51vQil665YL._AC_SL1001_.jpg") }}")'>

        </div>
    </div>
</section>
<section class='dev_history_sec width85'>
    <div class="dev_hist_flex d-flex justify-content-between">
        <div class="dev_hist_item1">
            <h3 class="common_caption">
            Product
            Development
            History
            </h3>
        </div>
        <div class="dev_hist_item2">
            <div class="tab-content">
                <div id="last1" class="tab-pane fade in active show">
                    <h3>2021</h3>
                    <h5>We had a laboratory prototype</h5>
                    <p  class='common_text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s
                    </p>
                </div>
                <div id="last2" class="tab-pane fade">
                    <h3>2020</h3>
                    <h5>We had a laboratory prototype</h5>
                    <p  class='common_text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s
                    </p>
                </div>
                <div id="last3" class="tab-pane fade">
                    <h3>2019</h3>
                    <h5>We had a laboratory prototype</h5>
                    <p  class='common_text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s
                    </p>
                </div>
                <div id="last4" class="tab-pane fade">
                    <h3>2018</h3>
                    <h5>We had a laboratory prototype</h5>
                    <p  class='common_text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s
                    </p>
                </div>
            </div>
        </div>
        <div class="dev_hist_item3">
            <ul class="nav flex-column dev_hist_pills">
                <li class="active"><a data-toggle="pill" href="#last1" class="active">2021</a></li>
                <li><a data-toggle="pill" href="#last2">2020</a></li>
                <li><a data-toggle="pill" href="#last3">2019</a></li>
                <li><a data-toggle="pill" href="#last4">2018</a></li>
            </ul>
        </div>
    </div>
    </div>
</section>
<section id="submit_newsletters_home" class="seven_subscribe" style='background-image:url("{{ asset("assets/images/cover.jpg") }}")'>
<h4>Subscribe for our latest news and for our blog articles</h4>
<form  action="{{route('form-submit-home', app()->getLocale())}}#submit_newsletters_home" method='post' >
    @csrf 
    <input type="text" placeholder="@lang('navbar.pl_enter_email')" class='subsInput' name='email'>
    <button  type='submit' class="sendSubs">Send</button>
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
                        setTimeout(function () {
                        $('.submitSuccess').html('');
                    }, 3000)
                </script>
                @endif
            </div>
</section>
<section class="biological_security width85">
    <h3 class='common_caption'>Biological Security</h3>
    <div class="bio_security_flex d-flex justify-content-between">
        <div class="bio_security_item1 common_text">
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
        has been the industry's standard dummy text ever since the 1500s, when an unknown
        printer took a galley of type and scrambled it to make a type specimen book. It has
        survived not only five centuries, but also the leap into electronic typesetting, remaining
        essentially unchanged.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
        has been the industry's standard dummy text ever since the 1500s, when an unknown
        printer took a galley of type and scrambled it to make a type specimen book. It has
        survived not only five centuries, but also the leap into electronic typesetting, remaining
        essentially unchanged.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
        has been the industry's standard dummy text ever since the 1500s, when an unknown
        printer took a galley of type and scrambled it to make a type specimen book. It has
        survived not only five centuries, but also the leap into electronic typesetting, remaining
        essentially unchanged.
        </p>
        </div>
        <div class="bio_security_item2" style='background-image:url("{{ asset("assets/images/dna-and-chromosome.jpg") }}")'>

        </div>
    </div>

</section>
<section class="five_certificates">
    <h4 class='common_caption'>Cyber Tech certificates and patents</h4>
    <p>We get our first patent in may 2017. And now our certificates and patents are 19.</p>

    <div class="navigation_certificate d-flex justify-content-around special-offers-flex" >
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
                <img src="{{ asset('assets/icons/arrow right.png')}}"  alt="" class='left_right'>
                <!-- arrow right.png -->
            </span>
        </div>
        <div class="certBorder d-flex">
            <div class="certBorder_item certBorder_bottom certBorder_item_0"></div>
        </div>
    </div>
</section>
@include('includes/contact_sec')
<!-- <script src="{{ asset('assets/js/product.js')}}"></script> -->
<script src="{{ asset('assets/js/home.js')}}"></script>
@endsection