@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('assets/css/video.css') }}" rel="stylesheet" type='text/css'>
@endsection

@section('title')
Video
@endsection


@section('content')
<section class='width85'>

    <div class='navLinksDiv'>
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <?php $k = 1; ?>
            @foreach($VideoCategory as $el_category)
            <?php
            if ($k == 1) {
            ?>
                <li class="nav-item cateroy_item">
                    <a class="nav-link active" id="cat_<?php echo $k; ?>-tab" data-toggle="pill" href="#pills-Cat_<?php echo $k;
                                                                                                                    $k++; ?>" role="tab" aria-controls="pills-home" aria-selected="true">
                        @if(app()->getLocale()=='en')
                        {{$el_category->videoCategory_en}}
                        @endif
                        @if(app()->getLocale()=='arm')
                        {{$el_category->videoCategory_am}}
                        @endif
                        @if(app()->getLocale()=='ru')
                        {{$el_category->videoCategory_ru}}
                        @endif
                    </a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item cateroy_item">
                    <a class="nav-link" id="cat_<?php echo $k; ?>-tab" data-toggle="pill" href="#pills-Cat_<?php echo $k;
                                                                                                            $k++; ?>" role="tab" aria-controls="pills-home" aria-selected="true">
                        @if(app()->getLocale()=='en')
                        {{$el_category->videoCategory_en}}
                        @endif
                        @if(app()->getLocale()=='arm')
                        {{$el_category->videoCategory_am}}
                        @endif
                        @if(app()->getLocale()=='ru')
                        {{$el_category->videoCategory_ru}}
                        @endif
                    </a>
                </li>
            <?php
            }
            ?>
            @endforeach
        </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <?php $j = 1; ?>
        @foreach($VideoCategory as $el_category)
        <?php
        if ($j == 1) {
        ?>
            <div class="tab-pane fade show active" id="pills-Cat_<?php echo $j;
                                                                    $j++; ?>" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="video_flex d-flex justify-content-around flex-wrap">
                    <?php $a = 1; ?>

                    @foreach($Video as $elvideo)
                    @if($el_category-> videoCategory_en == $elvideo->videoCategory_en)
                    <div class="video_flex_item" locale_lookup>
                        <video id='video<?php echo $a;
                                        $a++; ?>' class='video_item' loop width="100%" height="100%">
                            <source src='{{ asset("assets/videos/$elvideo->videoFile") }}' type="video/mp4" />
                        </video>
                        <div class='playStop_abs'>
                            <i class="far fa-play-circle"></i>
                        </div>
                    </div>
                    @endif

                    @endforeach
                </div>
            </div>

        <?php
        } else {
        ?>
            <div class="tab-pane fade" id="pills-Cat_<?php echo $j;
                                                        ?>" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="video_flex d-flex justify-content-around flex-wrap">

                    @foreach($Video as $elvideo)
                    @if($el_category-> videoCategory_en == $elvideo->videoCategory_en)
                    <div class="video_flex_item" locale_lookup>
                        <video id='video<?php echo $a;
                                        $a++; ?>' class='video_item' loop width="100%" height="100%">
                            <source src='{{ asset("assets/videos/$elvideo->videoFile") }}' type="video/mp4" />
                        </video>
                        <div class='playStop_abs'>
                            <i class="far fa-play-circle"></i>
                        </div>
                    </div>
                    @endif

                    @endforeach
                </div>
            </div>


        <?php
            $j++;
        }
        ?>
        @endforeach



    </div>
</section>
<section class="ask_questions">
    <h3 class='common_caption'>Have any questions?</h3>
    <h5>Our specialists will be happy to answer your
        questions.</h5>
    <a href="{{route('contact', app()->getLocale())}}"><button class="blue_but">Ask Questions</button></a>

</section>

<script src="{{ asset('assets/js/video.js')}}"></script>
@endsection