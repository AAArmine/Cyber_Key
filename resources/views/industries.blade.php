@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('assets/css/industries.css') }}" rel="stylesheet" type='text/css'>
@endsection

@section('title')
Industries
@endsection


@section('content')
<section class="ind_top">
    <div class="width85 padding_pills">
        <ul class="nav nav-pills center-pills">
            <li><a class="active" data-toggle="pill" href="#industries_cont">Industries</a></li>
            <li><a data-toggle="pill" href="#areas_cont">Areas</a></li>
        </ul>
        <h3 class='mid_caption'>Cyber Key system / technology has already been integrated in these areas of business.
            The use of Cyber Key in these areas of business has demonstrated the high efficiency of
            the system.
        </h3>
        <div class="tab-content">
            <div id="industries_cont" class="tab-pane fade in active show ">
                <h3>Industries</h3>
                <div class='industries_flex d-flex justify-content-between flex-wrap'>
                    @foreach($industries as $el)
                    <div class="ind_flex-item">
                        <div class="ind_item_img" style='background-image:url("{{ asset("assets/images/$el->image") }}")'></div>
                        <h5>{{$el->title}}</h5>
                        <p class='common_text'>
                            {{$el->text}}
                        </p>
                        <div class='m-height'> <a href="{{route('industries_separate', ['locale' => app()->getLocale(), 'id' => $el->id] )}}" class='common_text'>Learn more <img src="{{ asset('assets/icons/left-arrow.png') }}" alt=""></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- areas -->
            <div id="areas_cont" class="tab-pane fade">
                <h3>Areas</h3>
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
        </div>
    </div>

</section>

<!-- resources sec -->
<section class="five_certificates width85">
    <h4>Resources</h4>

    <div class="navigation_certificate d-flex justify-content-around special-offers-flex">
        <div class="certificate-item1" id="cert-1">
            <div class="certificate-img certificate-img1" style="background-image: url('{{ asset('assets/images/technical-support-certificate-1-638.jpg') }}');">

            </div>
            <h3 class="under_caption">
                Mind the gap: China’s north-south
                economic divide seen worsenin
            </h3>
            <div class="common_text resources_item_text">
                Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
                Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
            </div>
            <div class="resources_item_date smaller">
                28 Apr 2021
            </div>
        </div>

        <div class="certificate-item1" id="cert-2">
            <div class="certificate-img certificate-img1" style="background-image: url('{{ asset('assets/images/sec2abs.jpg') }}');">
            </div>
            <h3 class="under_caption">
                Mind the gap: China’s north-south
                economic divide seen worsenin
            </h3>
            <div class="common_text resources_item_text">
                Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
                Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
            </div>
            <div class="resources_item_date smaller">
                28 Apr 2021
            </div>
        </div>

        <div class="certificate-item1" id="cert-3">
            <div class="certificate-img certificate-img1" style="background-image: url('{{ asset('assets/images/Mask Group 29.jpg') }}');">

            </div>
            <h3 class="under_caption">
                Mind the gap: China’s north-south
                economic divide seen worsenin
            </h3>
            <div class="common_text resources_item_text">
                Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
                Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
            </div>
            <div class="resources_item_date smaller">
                28 Apr 2021
            </div>
        </div>

        <div class="certificate-item1" id="cert-4">
            <div class="certificate-img certificate-img1" style="background-image: url('{{ asset('assets/images/pexels-luis-gomes-546819 (2).jpg') }}');">

            </div>
            <h3 class="under_caption">
                Mind the gap: China’s north-south
                economic divide seen worsenin
            </h3>
            <div class="common_text resources_item_text">
                Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
                Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
            </div>
            <div class="resources_item_date smaller">
                28 Apr 2021
            </div>
        </div>

        <div class="certificate-item1" id="cert-5">
            <div class="certificate-img certificate-img1" style="background-image: url('{{ asset('assets/images/pexels-ali-pazani-2777898.jpg') }}');">

            </div>
            <h3 class="under_caption">
                Mind the gap: China’s north-south
                economic divide seen worsenin
            </h3>
            <div class="common_text resources_item_text">
                Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
                Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
            </div>
            <div class="resources_item_date smaller">
                28 Apr 2021
            </div>
        </div>

        <div class="certificate-item1" id="cert-6">
            <div class="certificate-img certificate-img1" style="background-image: url('{{ asset('assets/images/cover.jpg') }}');">

            </div>
            <h3 class="under_caption">
                Mind the gap: China’s north-south
                economic divide seen worsenin
            </h3>
            <div class="common_text resources_item_text">
                Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
                Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
            </div>
            <div class="resources_item_date smaller">
                28 Apr 2021
            </div>
        </div>
        <div class="certificate-item1" id="cert-7">
            <div class="certificate-img certificate-img1" style="background-image: url('{{ asset('assets/images/technical-support-certificate-1-638.jpg') }}');">

            </div>
            <h3 class="under_caption">
                Mind the gap: China’s north-south
                economic divide seen worsenin
            </h3>
            <div class="common_text resources_item_text">
                Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
                Nomura estimates northern China’s share of the national
                economy shrank to 35.2% last year from 42.9% in 2012.
            </div>
            <div class="resources_item_date smaller">
                28 Apr 2021
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
@include('includes/contact_sec')
<!-- <script src="{{ asset('assets/js/product.js')}}"></script> -->
<script src="{{ asset('assets/js/home.js')}}"></script>
@endsection