@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('assets/css/aboutUs.css') }}" rel="stylesheet" type='text/css'>
@endsection

@section('title')
About Us
@endsection


@section('content')
<section class="ab_us_top">
    <div class="ab_us_cont">
        <h3 class="common_caption">About Us</h3>
        <div class="ab_us_img" style="background-image: url('{{ asset('assets/images/pexels-cottonbro-3692887.jpg') }}');">
        </div>
        <h3 class="common_caption ab_us_capt2">About CyberKey</h3>
        <div class='dev_history_sec'>
            <p class='common_text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
            leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
            Ipsum
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
            leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
            Ipsum 
            </p>

            <div class="dev_hist_flex d-flex justify-content-between">
                <div class="dev_hist_item1">
                    <h3 class="common_caption">
                    Our History
                    </h3>
                </div>
                <div class="dev_hist_item2">
                    <div class="tab-content">
                        <div id="last1" class="tab-pane fade in active show">
                            <h3>2021</h3>
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
    </div>
</section>
<section class="ab_us_second width85">
    <div class="ab_us_sec_flex d-flex justify-content-between">
        <div class="ab_us_sec_item1">
            <div class="ab_us_sec_item1_img1" style="background-image: url('{{ asset('assets/images/Mask Group 18.jpg') }}');"></div>
            <div class="ab_us_sec_item1_img2" style="background-image: url('{{ asset('assets/images/pexels-andrea-piacquadio-3769021.jpg') }}');"></div>
        </div>
        <div class="ab_us_sec_item2">
        <h4 class='common_caption'>What is Lorem Ipsum?</h4>
        <p class="common_text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the
        1500s, when an unknown printer took a galley of type and scrambled it to
        make a type specimen book. It has survived not only five centuries,
        </p> 
        <div class='d-flex mb-3'>
            <div class="img_count"><img src="{{ asset('assets/icons/checked_ab.jpg') }}" alt="" class='ab-checked'></div>
            <div class="text_count common_text">Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type
            </div>
        </div>
        <div class='d-flex mb-3'>
            <div class="img_count"><img src="{{ asset('assets/icons/checked_ab.jpg') }}" alt="" class='ab-checked'></div>
            <div class="text_count common_text">Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type
            </div>
        </div>
        <div class='d-flex mb-3'>
            <div class="img_count"><img src="{{ asset('assets/icons/checked_ab.jpg') }}" alt="" class='ab-checked'></div>
            <div class="text_count common_text">Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type
            </div>
        </div>

        </div>
    </div>
</section>
<section class='our_vision width85'>
    <h3 class="common_caption text-center">Our vision</h3>
    <div class="our_vision_main_flex d-flex justify-content-between flex-wrap">
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
        <div class="our_vision_item d-flex justify-content-between">
            <div class="our_vision_item_item1">06</div>
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
            <h3 class="common_caption">Social responsibility</h3>
            <ul class="nav soc_res_pills flex-column">
                <li class="active"><a data-toggle="pill" href="#soc_res_id1" class='active'>Lorem Ipsum is simply dummy text1</a></li>
                <li><a data-toggle="pill" href="#soc_res_id2">Lorem Ipsum is simply dummy text2</a></li>
                <li><a data-toggle="pill" href="#soc_res_id3">Lorem Ipsum is simply dummy text3</a></li>
                <li><a data-toggle="pill" href="#soc_res_id4">Lorem Ipsum is simply dummy text4</a></li>
            </ul>
        </div>
    
        <div class="tab-content soc_res_flex_item2">
            <div id="soc_res_id1" class="tab-pane soc_res_content fade in active show">
                <div class="soc_res_img" style="background-image: url('{{ asset('assets/images/presentation.jpg') }}');"></div>
                <h4>Lorem Ipsum is simply dummy text1</h4>
                <p class='blackfion_text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. 
                </p>
            </div>
            <div id="soc_res_id2" class="tab-pane soc_res_content fade">
                <div class="soc_res_img" style="background-image: url('{{ asset('assets/images/presentation.jpg') }}');"></div>
                <h4>Lorem Ipsum is simply dummy text2</h4>
                <p class='blackfion_text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. 
                </p>
            </div>
            <div id="soc_res_id3" class="tab-pane soc_res_content fade">
                <div class="soc_res_img" style="background-image: url('{{ asset('assets/images/presentation.jpg') }}');"></div>
                <h4>Lorem Ipsum is simply dummy text3</h4>
                <p class='blackfion_text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. 
                </p>
            </div>
            <div id="soc_res_id4" class="tab-pane soc_res_content fade">
                <div class="soc_res_img" style="background-image: url('{{ asset('assets/images/presentation.jpg') }}');"></div>
                <h4>Lorem Ipsum is simply dummy text4</h4>
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
<section class='meet_our_team width85'>
    <div class="meet_team_title text-center">
        <h3 class="common_caption">Meet Our Team</h3>
        <p class="common_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
        </p>
    </div>
    <div class="meet_team_mainImg" style="background-image: url('{{ asset('assets/images/pexels-fauxels-3184419.jpg') }}');">
    </div>
    <h3 class="common_caption text-center our_lead_capt2">
        Our Leadership
    </h3>
    <div class="our_leadership d-flex justify-content-between">
        <div class="leadership_item">
            <div class="leadership_item_img" style="background-image: url('{{ asset('assets/images/Mask Group 14.jpg') }}');"></div>
            <div class="leadership_item_name"> Anna Smith1</div>
            <div class="leadership_item_position">Chief Customer Officer</div>
        </div>
        <div class="leadership_item">
            <div class="leadership_item_img" style="background-image: url('{{ asset('assets/images/Mask Group 14.jpg') }}');"></div>
            <div class="leadership_item_name"> Anna Smith2</div>
            <div class="leadership_item_position">Chief Customer Officer</div>
        </div>
        <div class="leadership_item">
            <div class="leadership_item_img" style="background-image: url('{{ asset('assets/images/Mask Group 14.jpg') }}');"></div>
            <div class="leadership_item_name"> Anna Smith3</div>
            <div class="leadership_item_position">Chief Customer Officer</div>
        </div>
    </div>

</section>
<script src="{{ asset('assets/js/home.js')}}"></script>
@endsection