@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('assets/css/pr_release_separate.css') }}" rel="stylesheet" type='text/css'>

@endsection

@section('title')
Press Releases
@endsection


@section('content')

<section class="ind_top">
    <div class="dropdown share-abs">
        <button class="btn dropdown-toggle dropdown-toggle1" type="button" data-toggle="dropdown"><img src='{{ asset("assets/icons/share.png") }}' class='share-img'>
            <span class="caret"></span>
        </button>

        <ul class="dropdown-menu dropdown-menu2">
            <li>
                <a href="https://www.facebook.com/sharer/sharer.php?app_id=1204128296666901&sdk=joey&u=https://www.armhero.org/en/article-first.php" onclick="return !window.open(this.href, 'Facebook', 'width=620,height=420')">
                    <img src='{{ asset("assets/icons/facebook footer.png") }}' class="soc-icon"></img>
                </a>
            </li>
            <li>
                <a href="#" onclick="window.open('http://twitter.com/share?url=https://www.armhero.org/en/article-first.php&via=armhero&text=about Armheroes', 'Twitter Share', 'width=620, height=420'); return false;">
                    <img src='{{ asset("assets/icons/twitter.png") }}' class="soc-icon"></img>
                </a>
            </li>
            <li>
                <a href="#" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url=https://www.armhero.org/en/article-first.php&title=Read article&summary=armhero.org&source=ArmenianHeroes', 'LinkedIn Share', 'width=620, height=420'); return false;">
                    <img src='{{ asset("assets/icons/linkedin.png") }}' class="soc-icon"></img>
                </a>
            </li>
            <li>
                <a href="#" onclick="window.open('http://vk.com/share.php?url=http://www.armhero.org/en/article-first.php&title=Read article&summary=armhero.org&source=ArmenianHeroes', 'VK Share', 'width=620, height=420'); return false;">
                    <img src='{{ asset("assets/icons/vk.png") }}' class="soc-icon"></img>
                </a>
            </li>
            <li>
                <a href="#" onclick="window.open('http://armhero.org/share-link.php?val=https://armhero.org<?php
                                                                                                            echo $_SERVER['REQUEST_URI'];
                                                                                                            ?>', 'Link Share', 'width=620, height=420'); return false;">
                    <img src='{{ asset("assets/icons/link.png") }}' class="soc-icon"></img>
                </a>
            </li>
        </ul>
    </div>
    <!-- end share -->
    <div class="width85">
        <h4 class="topic mt-5">
            {{$event_data->topic}}
        </h4>
        <h3 class="common_caption width60 ">
            {{$event_data->title}}
        </h3>

        <div class="pr_main_flex d-flex justify-content-between">
            <div class="pr_main_item1">

                <div class="pr_main_item1_img" style='background-image:url("{{ asset("assets/images/$event_data->image") }}")'>
                </div>
                <p class='common_text'>
                    {{$event_data->description}}
                </p>
                <div class="event_date">
                    Event date:<span class='date_place'>{{$event_data->event_date}}</span>
                </div>
                <div class="event_place">
                    Event place:<span class='date_place'>{{$event_data->event_address}}</span>
                </div>
            </div>
            <div class="pr_main_item2">
                <h4>Last Events</h4>
                @foreach($events_last_tree as $el_pr3)
                <a class='a_no_dec' href="{{route('event_separate', ['locale' => app()->getLocale(), 'id' => $el_pr3->id] )}}">
                    <div class='pr_last3_content'>
                        <div class="pr_last3_img" style='background-image:url("{{ asset("assets/images/$el_pr3->image") }}")'>
                        </div>
                        <h5>{{$el_pr3->title}}</h5>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="topics_sec width85 mt-5 mb-5">

    <h5 class='common_caption mb-5'>You may also like</h5>
    <div class='topics_display d-flex'>
        <div class="topic_caption">Topics:</div>

        <div>
            <?php $j = 1;
            $jk = 1; ?>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                @foreach($topics as $el_top)

                <li class="nav-item nav-pr_release">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-topic<?php echo $j;
                                                                                                    $j++; ?>" role="tab" aria-controls="pills-contact" aria-selected="false"><span class='topic_span'>{{$el_top->topic}}</span> </a>
                </li>
                @endforeach

            </ul>
        </div>
    </div>


    <div class="tab-content" id="pills-tabContent">
        @foreach($topics as $el_top)
        @if($el_top->topic == $event_data->topic)
        <div class="tab-pane fade show active" id="pills-topic<?php echo $jk;
                                                                $jk++;
                                                                ?>" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class='tab_content_flex d-flex justify-content-around'>
                @foreach($events_rest as $el_rest)
                @if($event_data->topic==$el_rest->topic)
                <div class='tab_content_item'>
                    <a class='a_no_dec' href="{{route('event_separate', ['locale' => app()->getLocale(), 'id' => $el_rest->id] )}}">

                        <div class="pr_last3_img" style='background-image:url("{{ asset("assets/images/$el_rest->image") }}")'>
                        </div>
                        <h5>{{$el_rest->title}}</h5>
                        <p>{{$el_rest->topic}}</p>
                        <span class='common_date'>{{$el_rest->created_at}}</span>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        @else


        <div class="tab-pane fade" id="pills-topic<?php echo $jk;
                                                    $jk++;
                                                    ?>" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class='tab_content_flex d-flex justify-content-around'>
                @foreach($events_rest as $el_rest)
                @if($el_top->topic==$el_rest->topic)
                <div class='tab_content_item'>
                    <a class='a_no_dec' href="{{route('event_separate', ['locale' => app()->getLocale(), 'id' => $el_rest->id] )}}">

                        <div class="pr_last3_img" style='background-image:url("{{ asset("assets/images/$el_rest->image") }}")'>
                        </div>
                        <h5>{{$el_rest->title}}</h5>
                        <p>{{$el_rest->topic}}</p>
                        <span class='common_date'>{{$el_rest->created_at}}</span>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </div>


        @endif


        @endforeach

    </div>
</section>


@endsection