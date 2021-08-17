@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('assets/css/home.css') }}" rel="stylesheet" type='text/css'>
<link href="{{ asset('assets/css/forInvestors.css') }}" rel="stylesheet" type='text/css'>

@endsection


@section('title')
For Investors
@endsection

@section('content')
<section class="topImgSection" style='background-image:url("{{ asset("assets/images/cover.jpg") }}")'>
    <div class="topImgContent">
        <h2>Cyber Key</h2>
        <h3>@lang('homepage.section1caption')</h3>
        <p>@lang('homepage.section1text')</p>
    </div>
</section>
<section class="we_guarantee">
    <div class="guarantee_flex d-flex justify-content-between">
        <div class="guarantee_item1" style='background-image:url("{{ asset("assets/images/61aeFPrcN7L._AC_.jpg") }}")'>

        </div>
        <div class="guarantee_item2">
            <div class="guarantee_item2_content_abs">
                <h3 class="common_caption text-center">We guarantee quality</h3>
                <div class="quality_flex d-flex justify-content-between text-center">
                    <div class="quality_item">
                        <div class="quality_number">15</div>
                        <div class="quality_title"> Lorem ipsum</div>
                    </div>

                    <div class="quality_item">
                        <div class="quality_number">15</div>
                        <div class="quality_title"> Lorem ipsum</div>
                    </div>

                    <div class="quality_item">
                        <div class="quality_number">15</div>
                        <div class="quality_title"> Lorem ipsum</div>
                    </div>
                </div>
            </div>
            
        </div>
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
<section class='our_vision width85'>
    <h3 class="common_caption text-center">Why invest</h3>
    <div class="our_vision_main_flex d-flex justify-content-around flex-wrap">
        <div class="our_vision_item d-flex justify-content-between">
            <div class="our_vision_item_item1">01</div>
            <div class="our_vision_item_item2">
                <h5>Our vision1</h5>
                <p class='common_text'>Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem
                Ipsum has been the industry's standard
                dummy text ever since the 1500s.
                </p>
            </div>
        </div>
        <div class="our_vision_item d-flex justify-content-between">
            <div class="our_vision_item_item1">02</div>
            <div class="our_vision_item_item2">
                <h5>Our vision1</h5>
                <p class='common_text'>Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem
                Ipsum has been the industry's standard
                dummy text ever since the 1500s.
                </p>
            </div>
        </div>
        <div class="our_vision_item d-flex justify-content-between">
            <div class="our_vision_item_item1">03</div>
            <div class="our_vision_item_item2">
                <h5>Our vision1</h5>
                <p class='common_text'>Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem
                Ipsum has been the industry's standard
                dummy text ever since the 1500s.
                </p>
            </div>
        </div>
        <div class="our_vision_item d-flex justify-content-between">
            <div class="our_vision_item_item1">04</div>
            <div class="our_vision_item_item2">
                <h5>Our vision1</h5>
                <p class='common_text'>Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem
                Ipsum has been the industry's standard
                dummy text ever since the 1500s.
                </p>
            </div>
        </div>
        <div class="our_vision_item d-flex justify-content-between">
            <div class="our_vision_item_item1">05</div>
            <div class="our_vision_item_item2">
                <h5>Our vision1</h5>
                <p class='common_text'>Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem
                Ipsum has been the industry's standard
                dummy text ever since the 1500s.
                </p>
            </div>
        </div>
    
        
    </div>
</section>

<section class="soc_responsibility">
    
    <div class="d-flex justify-content-between soc_res_flex">
        <div class='soc_res_flex_item1'>
            <h3 class="common_caption">How Invest</h3>
            <ul class="nav soc_res_pills flex-column">
                <li class="active"><a data-toggle="pill" href="#soc_res_id1" class='active'><span class="invest_num">1</span> Lorem Ipsum is simply dummy text1</a></li>
                <li><a data-toggle="pill" href="#soc_res_id2"><span class="invest_num">2</span> Lorem Ipsum is simply dummy text2</a></li>
                <li><a data-toggle="pill" href="#soc_res_id3"><span class="invest_num">3</span>Lorem Ipsum is simply dummy text3</a></li>
                <li><a data-toggle="pill" href="#soc_res_id4"><span class="invest_num">4</span>Lorem Ipsum is simply dummy text4</a></li>
            </ul>
        </div>
    
        <div class="tab-content soc_res_flex_item2">
            <div id="soc_res_id1" class="tab-pane soc_res_content fade in active show">
                <div class="invest_step">Step 1</div>
                <h4 class='common_caption'>Lorem Ipsum is simply dummy text1</h4>
                <p class='blackfion_text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. 
                </p>
            </div>
            <div id="soc_res_id2" class="tab-pane soc_res_content fade">
            <div class="invest_step">Step 2</div>
                <h4 class='common_caption'>Lorem Ipsum is simply dummy text2</h4>
                <p class='blackfion_text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. 
                </p>
            </div>
            <div id="soc_res_id3" class="tab-pane soc_res_content fade">
                <div class="invest_step">Step 3</div>
                <h4 class='common_caption'>Lorem Ipsum is simply dummy text3</h4>
                <p class='blackfion_text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. 
                </p>
            </div>
            <div id="soc_res_id4" class="tab-pane soc_res_content fade">
            <div class="invest_step">Step 4</div>
                <h4 class='common_caption'>Lorem Ipsum is simply dummy text4</h4>
                <p class='blackfion_text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. 
                </p>
            </div>
        </div>
    </div>
</section>
<section class="our_latest_news width85">
    <h3 class="common_caption text-center width85">Our latest news</h3>
    <div class="latest_news_flex d-flex justify-content-between">
        @foreach($latestnews as $elNews)
            <div class="latest_news_item">
                <a class='a_no_dec' href="{{route('our_news_separate', ['locale' => app()->getLocale(), 'id' => $elNews->id] )}}">

                <div class="latest_news_img" style='background-image:url("{{ asset("assets/images/$elNews->image") }}")'></div>
                <div class='common_caption'>{{$elNews->title}}</div>
                <div class='common_text mb-3 latest_news'>{{$elNews->description}}</div>
                <div class='common_date'>{{$elNews->created_at}}</div>
                </a>
            </div>
        
        @endforeach
    </div>
    <a class='a_no_dec' href="{{route('pressReleases', app()->getLocale())}}#latest_news">
        <button class='full_length_but'>Learn More</button>
    </a>
</section>

<section class="our_latest_events width85">
    <h3 class="common_caption text-center ">Events</h3>
    <div class="events_flex d-flex justify-content-between">
    @foreach($events as $elEvents)
        <div class="events_flex-item">
            <a class='a_no_dec' href="{{route('event_separate', ['locale' => app()->getLocale(), 'id' => $elEvents->id] )}}">
            <div class="row-d">
                <div class="pr_img" style='background-image:url("{{ asset("assets/images/$elEvents->image") }}")'>

                </div>
                <div class="events-content d-flex">
                <div class="events_date text-center">{{ \Carbon\Carbon::parse($elEvents->event_date)->format('F j, Y')}}</div>
                <div class="events_item_2">
                    <h4>{{$elEvents->title}}</h4>
                    <span class="location_event"><i class="fas fa-map-marker-alt"></i> {{$elEvents->event_address}}</span>
                </div>

                </div>
            </div>
            </a>
        </div>
    @endforeach

    </div>
    <a class='a_no_dec' href="{{route('pressReleases', app()->getLocale())}}#our_latest_events">
        <button class='full_length_but'>Learn More</button>
    </a>
</section>


<!-- submit -->
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


<section class="five_certificates reports">
    <h4 class='common_caption'>Reports & presentations</h4>
    <p>We get our first patent in may 2017. And now our certificates and patents are 19.</p>

    <div class="navigation_certificate d-flex justify-content-around special-offers-flex" >
        <?php $rep=1;?>
        @foreach($report as $el_rep)
            <div class="certificate-item1" id="cert-<?php echo $rep; $rep++;?>">
                <div class="certificate-img certificate-img1" style='background-image:url("{{ asset("assets/images/$el_rep->image") }}")'>

                </div>
                <h5 class='common_text mt-2'>{{$el_rep->title}}</h5>
            </div>
        @endforeach
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
<section class='investor_email'>
    <h3 class="common_caption text-center capt_investor">Investor email alert</h3>
    <form  action="{{route('form-investor', app()->getLocale())}}#inv_email" method='post' id='inv_email'>
    
        @csrf 
        <div class="inv_border">
            <input type='text' placeholder='Your email' class='investor_input' name='investorEmail'>
            <button type='submit' class="send_inv">Send</button>
        </div>
    
    </form>
    
    @if($errors->has('investorEmail') )
        @foreach($errors->all() as $error)
        <div class='submitError1'>{{$error}}</div>
        @endforeach

    @elseif(session()->has('success_investor'))
        <div class='submitSuccess1'>@lang('validation.success')</div>
        <script>
            setTimeout(function() {
                $('.submitSuccess1').html('');
            }, 3000)
        </script>
    @endif

</section>
<script src="{{ asset('assets/js/home.js')}}"></script>
@endsection