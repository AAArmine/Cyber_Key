@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('assets/css/pressReleases.css') }}" rel="stylesheet" type='text/css'>
<link rel="stylesheet" href="{{ asset('assets/carousel/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/carousel/css/style.css')}} ">
@endsection

@section('title')
Press Releases
@endsection


@section('content')
<div class="ab_us_top"></div>
<section class="pr_re_top width85">
    <h3 class="common_caption text-center">Press Releases</h3>
    <a href="{{route('pr_separate', ['locale' => app()->getLocale(), 'id' => $pressReleases1->id] )}}" class='common_text'>
        <div class="pr_re_flex d-flex justify-content-between">

            <div class="pr_re_flex_item1">
                <div class='pr_re_item1_img' style='background-image:url("{{ asset("assets/images/$pressReleases1->image") }}")'>
                </div>
            </div>
            <div class="pr_re_flex_item2">
                <h3 class="common_caption">
                    {{$pressReleases1->title}}
                </h3>
                <p class="common_text pr_text_2line">
                    {{$pressReleases1->description}}
                </p>
                <span class='pr_date'>28 April 2021</span>
            </div>

        </div>
    </a>
    <div class="carusel-pr_re">
        @include('includes/pr_releases')
    </div>
</section>


<section class="our_news width85" id='latest_news'>
    <h3 class="common_caption">Our latest news</h3>
    <div class="navigation_our_news d-flex justify-content-around special-offers-flex">
        <?php $k = 1 ?>;
        @foreach($latestNewsAll as $elnews)

        <div class="our_news-item1" id="or_ne-<?php echo $k;
                                                $k++; ?>">
            <a class='a_no_dec' href="{{route('our_news_separate', ['locale' => app()->getLocale(), 'id' => $elnews->id] )}}">
                <div class="our_news-img our_news-img1" style='background-image:url("{{ asset("assets/images/$elnews->image") }}")'>
                </div>
                <h4>{{$elnews->title}}</h4>
                <span>{{$elnews->created_at}}</span>
            </a>
        </div>

        @endforeach




    </div>
    <div class="d-flex or_neNavigator" id='display_none'>
        <div class="or_neNavItem1">
            <span class="left_or_ne">
                <img src="{{ asset('assets/icons/arrow.png')}}" alt="" class='left_right'>
                <!-- arrow.png -->
            </span>
            <span class="right_or_ne">
                <img src="{{ asset('assets/icons/arrow right.png')}}" alt="" class='left_right'>
                <!-- arrow right.png -->
            </span>
        </div>
        <div class="or_neBorder d-flex">
            <div class="or_neBorder_item or_neBorder_bottom or_neBorder_item_0"></div>
        </div>
    </div>
</section>


<!-- events -->
<section class="events width85">
    <h3 class="common_caption events_caption" id='our_latest_events'>Events</h3>
    <div class="carusel-pr_re">
        @include('includes/events')
    </div>
</section>

<!-- media about us -->
<section class="media_about_us width85">
    <h3 class="common_caption">Media about us</h3>
    <div class="carusel-pr_re">
        @include('includes/med_about_us')
    </div>

</section>

<script src="{{ asset('assets/carousel/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/carousel/js/main.js')}}"></script>



<script src="{{ asset('assets/js/pr_releases.js')}}"></script>


@endsection