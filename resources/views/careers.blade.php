@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('assets/css/careers.css') }}" rel="stylesheet" type='text/css'>

@endsection

@section('title')
Careers
@endsection


@section('content')
<div class="ab_us_top"></div>
<section class="job_meet">
    <h1 class="common_caption common_caption_bigger">Let’s build industry-changing projects together!</h1>
    <div class="job_meet_flex d-flex justify-content-between">
        <div class="job_meet_item">
            <img src="{{ asset('assets/icons/portfolio.png') }}" alt="" class='job_meet_item_img'>
            <h3 class="common_caption common_caption_smaller">Job Openings</h3>
            <p class="common_text">Give your career a new twist</p>
            <a href="#job_openings" class='a_no_dec'>
                <img src="{{ asset('assets/icons/down arrow.png') }}" alt="" class='job_meet_item_img1'>
            </a>
        </div>
        <div class="job_meet_item">
            <img src="{{ asset('assets/icons/XMLID_10_.png') }}" alt="" class='job_meet_item_img'>
            <h3 class="common_caption common_caption_smaller">Meet Us</h3>
            <p class="common_text">Give your career a new twist</p>
            <a href="#meet_team" class='a_no_dec'>
                <span class="roll_down"><i class="fas fa-arrow-circle-down"></i></span>
            </a>
        </div>
    </div>
</section>
<section class="posted_jobs width85" id='job_openings'>
    <div class="search_jobs_flex d-flex justify-content-between">
        <div class="search_jobs_item1">
            <h3 class="common_caption">We are hiring</h3>
            <p class="common_text">Find a job opening that matches your qualifications and
                send us your CV
            </p>
        </div>
        <div class="search_jobs_item d-flex">
            <div class='search_jobs_item_item1'>
                <select class="form-control search_job_input" name="cars" id="jobs_select">
                    <option value='all'>All available jobs</option>
                    @foreach($jobTitleEn as $el_title)
                    <option value='{{$el_title->job_title}}'>{{$el_title->job_title}}</option>
                    @endforeach
                </select>
            </div>
            <div class='search_jobs_item_item2'>
                <button class='blue_but' id='find_job_but'>Find Jobs</button>
            </div>
        </div>
    </div>
    <div class="posted_jobs_flex d-flex justify-content-start flex-wrap">
        @foreach($careers as $el_car)
        <div class='posted_jobs_item'>
            <div class="abs_img_posted_jobs">
                <img class='w23' src="{{ asset('assets/icons/account.png') }}" alt="">
            </div>
            <h4 class='sp'>{{$el_car->job_title}}</h4>
            <p class='common_text'>We are looking for a talented {{$el_car->job_title}} to join us
            </p>
            <div class='text-right'>
                <a href="{{route('jobs_separate', ['locale' => app()->getLocale(), 'id' => $el_car->id] )}}" class='a_no_dec'>
                    <span class='common_text'>
                        Learn More
                        <img class='ml-3' src="{{ asset('assets/icons/left-arrow.png') }}" alt="">
                    </span>
                </a>
            </div>
        </div>
        @endforeach
    </div>


</section>
<section class='width85 meet_team'>
    <h3 class="common_caption" id='meet_team'>Meet Our Team</h3>
    <p class="common_text our_team_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
    </p>
    <div class="our_team_img" style='background-image:url("{{ asset("assets/images/team.jpg") }}")'>
    </div>
    <h3 class="common_caption mt-5 pt-4" id='meet_team'>Our Leadership</h3>
    <div class="our_leadership_flex d-flex justify-content-around">
        <div class="leadership_item">
            <div class="leadership_item_img" style='background-image:url("{{ asset("assets/images/Mask Group 14.jpg") }}")'>
            </div>
            <h5>Name Surname</h5>
            <p class="common_text">Chief Customer Officer</p>
        </div>

        <div class="leadership_item">
            <div class="leadership_item_img" style='background-image:url("{{ asset("assets/images/Mask Group 14.jpg") }}")'>
            </div>
            <h5>Name Surname</h5>
            <p class="common_text">Chief Customer Officer</p>
        </div>

        <div class="leadership_item">
            <div class="leadership_item_img" style='background-image:url("{{ asset("assets/images/Mask Group 14.jpg") }}")'>
            </div>
            <h5>Name Surname</h5>
            <p class="common_text">Chief Customer Officer</p>
        </div>
    </div>
</section>
<script>
    var job_items = document.getElementsByClassName('posted_jobs_item');
    $('#find_job_but').on('click', function() {
        $selected_job = $('#jobs_select').val();
        var eachJob = $(".posted_jobs_item");
        eachJob.each(function(index, element) {
            if ($selected_job !== 'all') {
                if ($(this).find('.sp').text() == $selected_job) {
                    $(this).css('display', 'block');
                } else {
                    $(this).css('display', 'none');
                }
            } else {
                $(this).css('display', 'block');
            }
        });
    });
    // !!!!!!!!!!!! fle job vor amen toxi erkrordy margin left u right unena
    if (window.innerWidth > 1115) {
        for (let i = 0; i < job_items.length; i++) {
            if (i % 3 == 1) {
                job_items[i].style.marginLeft = "26px";
                job_items[i].style.marginRight = "26px";
            }
        }
    }
    if (window.innerWidth < 1115 || window.innerWidth > 768) {
        var job_items = document.getElementsByClassName('posted_jobs_item');
        for (let i = 0; i < job_items.length; i++) {
            if (i % 3 == 1) {
                job_items[i].style.marginLeft = "15px";
                job_items[i].style.marginRight = "15px";
            }
        }
    } else {
        for (let i = 0; i < job_items.length; i++) {
            job_items[i].style.width = "90%";
            job_items[i].style.margin = "auto";
        }
    }
</script>


@endsection