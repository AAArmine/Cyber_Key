@section('navbar')
<div class="black_bg black_top_wide">
    <div class="width85">
        <div class='topNav d-flex'>
            <div class="topNav-item1"></div>
            <div class="topNav-item2">
                <a class='a_no_dec1' href="{{route('careers', app()->getLocale())}}">
                    <span class="right_nav">
                        @lang('navbar.careers')
                    </span>
                </a>
                <a class='a_no_dec1' href="{{route('contact', app()->getLocale())}}">
                    <span class="right_nav">
                        @lang('navbar.contactUs')
                    </span>
                </a>
                <span class="right_nav">
                    <div class="dropdown">
                        <button class="btn" type="button" id="dropdownlng" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-lng='' class='active-lng-a'><?php
                                                                    foreach ($lang_arr as $value) {
                                                                        if ($value == $segment_posts) {
                                                                            echo strtoupper($value);
                                                                        }
                                                                    }
                                                                    ?></span>
                            <span class='arrow_lang'><i class="fas fa-chevron-down"></i></span>
                        </button>
                        <div class="dropdown-menu text-right" aria-labelledby="dropdownlng">
                            @foreach($lang_arr as $value)
                            @if($value != $segment_posts)
                            <a class='dropdown-item lng-a' href={{URL::toRoute($cur = Route::current(), ['locale'=> $value] + $cur->parameters(), true)}} data-lng=''><?php echo strtoupper($value); ?></a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>
<div class='width85 main_nav_wide'>
    <div class="mainnavFlex d-flex">
        <div class="mainnavFlexLogo">
            <img src="{{ asset('assets/icons/Cyber Key logo.png') }}" alt="logo" class='logoImg'>
        </div>
        <div class='center mainNav'>
            <ul class="nav justify-content-center">
                <li class="tab_menu">
                    <a href="{{route('home', app()->getLocale())}}" class='<?php if ($active_link == "") {
                                                                                echo 'activeNav';
                                                                            } ?>'>
                        @lang('navbar.nav1')
                    </a>
                </li>
                <li class="tab_menu">
                    <a href="{{route('product', app()->getLocale())}}" class='<?php if ($active_link == "product") {
                                                                                    echo 'activeNav';
                                                                                } ?>'>
                        @lang('navbar.nav2')
                    </a>
                </li>
                <li class="tab_menu">
                    <a href="{{route('technologies', app()->getLocale())}}" class='<?php if ($active_link == "technologies") {
                                                                                    echo 'activeNav';
                                                                                } ?>'>
                        @lang('navbar.nav5')
                    </a>
                </li>
                <li class="tab_menu">
                    <a href="{{route('industries', app()->getLocale())}}" class='<?php if ($active_link == "industries") {
                                                                                        echo 'activeNav';
                                                                                    } ?>'>
                        @lang('navbar.nav3')
                    </a>

                </li>
                <li class="tab_menu">
                    <a href="{{route('aboutUs', app()->getLocale())}}" class='<?php if ($active_link == "aboutUs") {
                                                                                    echo 'activeNav';
                                                                                } ?>'>
                        @lang('navbar.nav4')
                    </a>
                </li>
                
                <li class="tab_menu">
                    <a href="{{route('pressReleases', app()->getLocale())}}" class='<?php if ($active_link == "pressReleases") {
                                                                                        echo 'activeNav';
                                                                                    } ?>'>
                        @lang('navbar.nav6')
                    </a>
                </li>
                <li class="tab_menu">
                    <a href="{{route('video', app()->getLocale())}}" class='<?php if ($active_link == "video") {
                                                                                echo 'activeNav';
                                                                            } ?>'>
                        @lang('navbar.nav7')
                    </a>
                </li>
                <li class="tab_menu">
                    <a href="{{route('blog', app()->getLocale())}}" class='<?php if ($active_link == "blog") {
                                                                                echo 'activeNav';
                                                                            } ?>'>
                        @lang('navbar.nav8')
                    </a>
                </li>
                <li class="tab_menu">
                    <a href="{{route('forInvestors', app()->getLocale())}}" class='<?php if ($active_link == "blog") {
                                                                                        echo 'forInvestors';
                                                                                    } ?>'>
                        @lang('navbar.nav9')
                    </a>
                </li>

            </ul>
        </div>

    </div>
</div>



<!-- mobile -->
<div class="mobilenavbar d-flex justify-content-between" style="display:none">
    <div class="mobilenavbar_item img_list">
        <img src="{{ asset('assets/icons/nav bar.png') }}" alt="logo" class='listImg'>

    </div>
    <div class="mobilenavbar_item">
        <img src="{{ asset('assets/icons/Cyber Key logo.png') }}" alt="logo" class='logoImg'>
    </div>
    <div class="mobilenavbar_item">
        <span class="right_nav">
            <div class="dropdown">
                <button class="btn" type="button" id="dropdownlng1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('assets/icons/language.png') }}" alt="logo" class='langImg'>
                    <span data-lng='' class='active-lng-a'><?php
                                                            foreach ($lang_arr as $value) {
                                                                if ($value == $segment_posts) {
                                                                    echo strtoupper($value);
                                                                }
                                                            }
                                                            ?></span>
                </button>
                <div class="dropdown-menu text-right" aria-labelledby="dropdownlng1">
                    @foreach($lang_arr as $value)
                    @if($value != $segment_posts)
                    <a class='dropdown-item lng-a' href={{URL::toRoute($cur = Route::current(), ['locale'=> $value] + $cur->parameters(), true)}} data-lng=''><?php echo strtoupper($value); ?></a>
                    @endif
                    @endforeach
                </div>
            </div>

        </span>
    </div>
    <div class="abs_nav_list">
        <div class="abs_nav_list_item">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{route('home', app()->getLocale())}}" class='ordinary_link <?php if ($active_link == "") {
                                                                                                echo 'activeNav';
                                                                                            } ?>'>
                        @lang('navbar.nav1')

                </div>
                <div class="goToLink">
                    <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="abs_nav_list_item mt-3">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{route('product', app()->getLocale())}}" class='ordinary_link <?php if ($active_link == "product") {
                                                                                                echo 'activeNav';
                                                                                            } ?>'>
                        @lang('navbar.nav2')

                </div>
                <div class="goToLink">
                    <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="abs_nav_list_item mt-3">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{route('technologies', app()->getLocale())}}" class='ordinary_link <?php if ($active_link == "technologies") {
                                                                                                    echo 'activeNav';
                                                                                                } ?>'>
                        @lang('navbar.nav5')

                </div>
                <div class="goToLink">
                    <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="abs_nav_list_item mt-3">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{route('industries', app()->getLocale())}}" class='ordinary_link <?php if ($active_link == "industries") {
                                                                                                    echo 'activeNav';
                                                                                                } ?>'>
                        @lang('navbar.nav3')

                </div>
                <div class="goToLink">
                    <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

    

        <div class="abs_nav_list_item mt-3">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{route('aboutUs', app()->getLocale())}}" class='ordinary_link <?php if ($active_link == "aboutUs") {
                                                                                                echo 'activeNav';
                                                                                            } ?>'>
                        @lang('navbar.nav4')

                </div>
                <div class="goToLink">
                    <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

        

        <div class="abs_nav_list_item mt-3">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{route('pressReleases', app()->getLocale())}}" class='ordinary_link <?php if ($active_link == "pressReleases") {
                                                                                                        echo 'activeNav';
                                                                                                    } ?>'>
                        @lang('navbar.nav6')

                </div>
                <div class="goToLink">
                    <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="abs_nav_list_item mt-3">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{route('video', app()->getLocale())}}" class='ordinary_link <?php if ($active_link == "video") {
                                                                                                echo 'activeNav';
                                                                                            } ?>'>
                        @lang('navbar.nav7')

                </div>
                <div class="goToLink">
                    <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="abs_nav_list_item mt-3">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{route('blog', app()->getLocale())}}" class='ordinary_link <?php if ($active_link == "blog") {
                                                                                                echo 'activeNav';
                                                                                            } ?>'>
                        @lang('navbar.nav8')

                </div>
                <div class="goToLink">
                    <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="abs_nav_list_item mt-3">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{route('forInvestors', app()->getLocale())}}" class='ordinary_link <?php if ($active_link == "forInvestors") {
                                                                                                        echo 'activeNav';
                                                                                                    } ?>'>
                        @lang('navbar.nav9')

                </div>
                <div class="goToLink">
                    <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="abs_nav_list_item mt-3">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{route('careers', app()->getLocale())}}" class='ordinary_link <?php if ($active_link == "careers") {
                                                                                                echo 'activeNav';
                                                                                            } ?>'>
                        @lang('navbar.footCareer')

                </div>
                <div class="goToLink">
                    <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="abs_nav_list_item1 mt-3">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{route('contact', app()->getLocale())}}" class='ordinary_link <?php if ($active_link == "contact") {
                                                                                                echo 'activeNav';
                                                                                            } ?>'>
                        @lang('navbar.footContact')

                </div>
                <div class="goToLink">
                    <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
    $(document).ready(function() {
        $('#dropdownlng').click(function() {
            setTimeout(function() {
                    $('.fa-chevron-down').toggleClass('flip');
                },
                200);
        });
        $('.listImg').on('click', function() {
            if ($('.abs_nav_list').css('display') == 'none') {
                $('.abs_nav_list').css('display', 'block');
            } else {
                $('.abs_nav_list').css('display', 'none');
            }
        });


    });
</script>