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
            <h3 class="common_caption common_caption_smaller">Job Openingssssss</h3>
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
<section class="posted_jobs width85">
    <div class="search_jobs_flex d-flex justify-content-between">
        <div class="search_jobs_item1">
            <h3 class="common_caption">We are hiring</h3>
            <p class="common_text">Find a job opening that matches your qualifications and
                send us your CV
            </p>
        </div>
        <div class="search_jobs_item d-flex">
            <div class='search_jobs_item_item1'>
                <select class="form-control search_job_input" name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
            <div class='search_jobs_item_item2'>
                <button class='blue_but'>Find Jobs</button>
            </div>
        </div>


    </div>


</section>


@endsection