@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('assets/css/blog.css') }}" rel="stylesheet" type='text/css'>
@endsection

@section('title')
Blog
@endsection


@section('content')
<section class='width85'>
    <h2 class="common_caption main_blog_title">Blog</h2>
    <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
        <li class="nav-item all_items">
            <a class="nav-link active" id="pills-all-nav" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-home" aria-selected="true">All</a>
        </li>
        <li class="nav-item all_items">
            <a class="nav-link" id="pills-Cyber-nav" data-toggle="pill" href="#pills-cyber" role="tab" aria-controls="pills-cyber" aria-selected="false">Cyber Tech</a>
        </li>
        <li class="nav-item all_items">
            <a class="nav-link" id="pills-person-nav" data-toggle="pill" href="#pills-person" role="tab" aria-controls="pills-person" aria-selected="false">Person Authentication</a>
        </li>
        <li class="nav-item all_items">
            <a class="nav-link" id="pills-industries-nav" data-toggle="pill" href="#pills-industries" role="tab" aria-controls="pills-industries" aria-selected="false">Industries</a>
        </li>
        <li class="nav-item all_items">
            <a class="nav-link" id="pills-history-nav" data-toggle="pill" href="#pills-history" role="tab" aria-controls="pills-history" aria-selected="false">History</a>
        </li>
        <li class="nav-item all_items">
            <a class="nav-link" id="pills-business-nav" data-toggle="pill" href="#pills-business" role="tab" aria-controls="pills-business" aria-selected="false">Business</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <!-- All tab content -->
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-home-tab">
            <h3 class="common_caption mt-5">Latests</h3>
            <div class="latest_blog_flex d-flex justify-content-between">
                <div class="latest_blog_item1">
                    <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $BlogLastOne->id] )}}">
                        <div class="latest_img1" style='background-image:url("{{ asset("assets/images/$BlogLastOne->image") }}")'>
                            <div class="blog_lastTree_content1">
                                <h3>{{$BlogLastOne->category_en}}</h3>
                                <h3 class='common_caption common_caption_size'>{{$BlogLastOne->title_en}}</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="latest_blog_item2">
                    <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $BlogLastSecond->id] )}}">
                        <div class="latest_img2" style='background-image:url("{{ asset("assets/images/$BlogLastSecond->image") }}")'>
                            <div class="blog_lastTree_content1">
                                <h3>{{$BlogLastSecond->category_en}}</h3>
                                <h3 class='common_caption common_caption_size'>{{$BlogLastSecond->title_en}}</h3>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $BlogLastThird->id] )}}">

                        <div class="latest_img2 mt-3" style='background-image:url("{{ asset("assets/images/$BlogLastThird->image") }}")'>
                            <div class="blog_lastTree_content1">
                                <h3>{{$BlogLastThird->category_en}}</h3>
                                <h3 class='common_caption common_caption_size'>{{$BlogLastThird->title_en}}</h3>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <section class="more_viewed">
            <h2 class="common_caption">More viewed</h2>

            <div class="more_viewed_flex1 d-flex justify-content-between">
                
                    <div class="viewd1_item1" style="background-image:url({{ asset('assets/images/'.$BlogMostViews[0]->image) }})">
                        <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $BlogMostViews[0]->id ] )}}">
                            <div class="blog_lastTree_content1">
                                <h3>{{$BlogMostViews[0]->category_en}}</h3>
                                <h3 class='common_caption common_caption_size'>{{$BlogMostViews[0]->title_en}}</h3>
                            </div>
                        </a>
                    </div>
                
                <div class="viewd1_item2" style="background-image:url({{ asset('assets/images/'.$BlogMostViews[1]->image) }})">
                    <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $BlogMostViews[1]->id ] )}}">
                        <div class="blog_lastTree_content1">
                            <h3>{{$BlogMostViews[1]->category_en}}</h3>
                            <h3 class='common_caption common_caption_size'>{{$BlogMostViews[1]->title_en}}</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="more_viewed_flex1 d-flex justify-content-between mt-4">
                <div class="viewd1_item2" style="background-image:url({{ asset('assets/images/'.$BlogMostViews[2]->image) }})">
                    <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $BlogMostViews[2]->id ] )}}">
                        <div class="blog_lastTree_content1">
                            <h3>{{$BlogMostViews[2]->category_en}}</h3>
                            <h3 class='common_caption common_caption_size'>{{$BlogMostViews[2]->title_en}}</h3>
                        </div>
                    </a>
                </div>
                <div class="viewd1_item1" style="background-image:url({{ asset('assets/images/'.$BlogMostViews[3]->image) }})">
                    <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $BlogMostViews[3]->id ] )}}">
                        <div class="blog_lastTree_content1">
                            <h3>{{$BlogMostViews[3]->category_en}}</h3>
                            <h3 class='common_caption common_caption_size'>{{$BlogMostViews[3]->title_en}}</h3>
                        </div>
                    </a>
                </div>
            </div>
            </section>
            <section class='separate_sec_blogs'>
                <h3 class="common_caption">{{$BlogCyberKey3[0]->category_en}}</h3>
                <div class="sections_flex  d-flex justify-content-around">
                    @foreach($BlogCyberKey3 as $el_cyber)
                        <div class="sections_item" style='background-image:url("{{ asset("assets/images/$el_cyber->image") }}")'>
                            <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $el_cyber->id ] )}}">
                                <div class="blog_lastTree_content1">
                                    <h3>{{$el_cyber->category_en}}</h3>
                                    <h3 class='common_caption common_caption_size'>{{$el_cyber->title_en}}</h3>
                                </div> 
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class='separate_sec_blogs'>
                <h3 class="common_caption">{{$BlogPersonAuth3[0]->category_en}}</h3>
                <div class="sections_flex  d-flex justify-content-around">
                    @foreach($BlogPersonAuth3 as $el_cyber)
                    <div class="sections_item" style='background-image:url("{{ asset("assets/images/$el_cyber->image") }}")'>
                        <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $el_cyber->id ] )}}">
                            <div class="blog_lastTree_content1">
                                <h3>{{$el_cyber->category_en}}</h3>
                                <h3 class='common_caption common_caption_size'>{{$el_cyber->title_en}}</h3>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </section>

            <section class='separate_sec_blogs'>
                <h3 class="common_caption">{{$BlogIndustries3[0]->category_en}}</h3>
                <div class="sections_flex  d-flex justify-content-around">
                    @foreach($BlogIndustries3 as $el_cyber)
                    <div class="sections_item" style='background-image:url("{{ asset("assets/images/$el_cyber->image") }}")'>
                        <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $el_cyber->id ] )}}">
                            <div class="blog_lastTree_content1">
                                <h3>{{$el_cyber->category_en}}</h3>
                                <h3 class='common_caption common_caption_size'>{{$el_cyber->title_en}}</h3>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </section>
            <section class='separate_sec_blogs'>
                <h3 class="common_caption">{{$BlogHistory3[0]->category_en}}</h3>
                <div class="sections_flex  d-flex justify-content-around">
                    @foreach($BlogHistory3 as $el_cyber)
                    <div class="sections_item" style='background-image:url("{{ asset("assets/images/$el_cyber->image") }}")'>
                        <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $el_cyber->id ] )}}">
                            <div class="blog_lastTree_content1">
                                <h3>{{$el_cyber->category_en}}</h3>
                                <h3 class='common_caption common_caption_size'>{{$el_cyber->title_en}}</h3>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </section>

            <section class='separate_sec_blogs mb-5'>
                <h3 class="common_caption">{{$BlogBusiness3[0]->category_en}}</h3>
                <div class="sections_flex  d-flex justify-content-around">
                    @foreach($BlogBusiness3 as $el_cyber)
                    <div class="sections_item" style='background-image:url("{{ asset("assets/images/$el_cyber->image") }}")'>
                        <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $el_cyber->id ] )}}">
                            <div class="blog_lastTree_content1">
                                <h3>{{$el_cyber->category_en}}</h3>
                                <h3 class='common_caption common_caption_size'>{{$el_cyber->title_en}}</h3>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </section>
        
        </div>
        <!-- end All tab content -->



        <div class="tab-pane fade mb-5 pb-3" id="pills-cyber" role="tabpanel" aria-labelledby="pills-profile-tab">
            <section class='separate_sec_blogs'>
                <h3 class="common_caption">{{$BlogCyberKey3[0]->category_en}}</h3>
                <div class="sections_flex  d-flex justify-content-around">
                    @foreach($BlogCyberKey3 as $el_cyber)
                        <div class="sections_item" style='background-image:url("{{ asset("assets/images/$el_cyber->image") }}")'>
                            <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $el_cyber->id ] )}}">
                                <div class="blog_lastTree_content1">
                                    <h3>{{$el_cyber->category_en}}</h3>
                                    <h3 class='common_caption common_caption_size'>{{$el_cyber->title_en}}</h3>
                                </div> 
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>


        <div class="tab-pane fade mb-5 pb-3" id="pills-person" role="tabpanel" aria-labelledby="pills-contact-tab">
            <section class='separate_sec_blogs'>
                <h3 class="common_caption">{{$BlogPersonAuth3[0]->category_en}}</h3>
                <div class="sections_flex  d-flex justify-content-around">
                    @foreach($BlogPersonAuth3 as $el_cyber)
                    <div class="sections_item" style='background-image:url("{{ asset("assets/images/$el_cyber->image") }}")'>
                        <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $el_cyber->id ] )}}">
                            <div class="blog_lastTree_content1">
                                <h3>{{$el_cyber->category_en}}</h3>
                                <h3 class='common_caption common_caption_size'>{{$el_cyber->title_en}}</h3>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>


        <div class="tab-pane fade mb-5 pb-3" id="pills-industries" role="tabpanel" aria-labelledby="pills-contact-tab">
            <section class='separate_sec_blogs'>
                <h3 class="common_caption">{{$BlogIndustries3[0]->category_en}}</h3>
                <div class="sections_flex  d-flex justify-content-around">
                    @foreach($BlogIndustries3 as $el_cyber)
                    <div class="sections_item" style='background-image:url("{{ asset("assets/images/$el_cyber->image") }}")'>
                        <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $el_cyber->id ] )}}">
                            <div class="blog_lastTree_content1">
                                <h3>{{$el_cyber->category_en}}</h3>
                                <h3 class='common_caption common_caption_size'>{{$el_cyber->title_en}}</h3>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </section>
        </div>
        <div class="tab-pane fade mb-5 pb-3" id="pills-history" role="tabpanel" aria-labelledby="pills-contact-tab">
            <section class='separate_sec_blogs'>
                <h3 class="common_caption">{{$BlogHistory3[0]->category_en}}</h3>
                <div class="sections_flex  d-flex justify-content-around">
                    @foreach($BlogHistory3 as $el_cyber)
                    <div class="sections_item" style='background-image:url("{{ asset("assets/images/$el_cyber->image") }}")'>
                        <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $el_cyber->id ] )}}">
                            <div class="blog_lastTree_content1">
                                <h3>{{$el_cyber->category_en}}</h3>
                                <h3 class='common_caption common_caption_size'>{{$el_cyber->title_en}}</h3>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="pills-business" role="tabpanel" aria-labelledby="pills-contact-tab">
            <section class='separate_sec_blogs mb-5'>
                <h3 class="common_caption">{{$BlogBusiness3[0]->category_en}}</h3>
                <div class="sections_flex  d-flex justify-content-around">
                    @foreach($BlogBusiness3 as $el_cyber)
                    <div class="sections_item" style='background-image:url("{{ asset("assets/images/$el_cyber->image") }}")'>
                        <a href="{{route('blog_separate', ['locale' => app()->getLocale(), 'id' => $el_cyber->id ] )}}">
                            <div class="blog_lastTree_content1">
                                <h3>{{$el_cyber->category_en}}</h3>
                                <h3 class='common_caption common_caption_size'>{{$el_cyber->title_en}}</h3>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </section>
        </div>
    </div>

</section>




<!-- for most views` https://stackoverflow.com/questions/28656448/page-view-counter-in-laravel-5/44526451 -->

@endsection