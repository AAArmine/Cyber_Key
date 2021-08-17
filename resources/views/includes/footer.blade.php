<div class="footerMain">
    <div class="footerFlex d-flex width85">
        <div class="footerflex_item">
            <div class="footer_logo">
                <img src="{{ asset('assets/icons/Cyber Key logo.png') }}" alt="logo" class='logoImg'>
            </div>
            <div class="text_main footer_item1_text">
                Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem
                Ipsum has been the industry's standard
                dummy text ever since the 1500s,
            </div>

        </div>
        <div class="footerflex_item_a">
            <div class="footerflex_item_title bolder">@lang('navbar.links')</div>

            <div class="d-flex justify-content-between link_rows">
                <div class="first_link_row">
                    <div class='footer_links_div'>
                        <a class="footer_links" href="{{route('home', app()->getLocale())}}">
                            @lang('navbar.nav1')
                        </a>
                    </div>
                    <div class='footer_links_div'>
                        <a class="footer_links" href="{{route('product', app()->getLocale())}}">
                            @lang('navbar.nav2')
                        </a>
                    </div>
                    <div class='footer_links_div'>
                        <a class="footer_links" href="{{route('technologies', app()->getLocale())}}">
                            @lang('navbar.nav5')
                        </a>
                    </div>
                    <div class='footer_links_div'>
                        <a class="footer_links" href="{{route('industries', app()->getLocale())}}">
                            @lang('navbar.nav3')
                        </a>
                    </div>

                </div>
                <div class="second_link_row">
                    <div class='footer_links_div'>
                        <a class="footer_links" href="{{route('pressReleases', app()->getLocale())}}">
                            @lang('navbar.nav6')
                        </a>
                    </div>
                    <div class='footer_links_div'>
                        <a class="footer_links" href="{{route('video', app()->getLocale())}}">
                            @lang('navbar.nav7')
                        </a>
                    </div>
                    <div class='footer_links_div'>
                        <a class="footer_links" href="{{route('forInvestors', app()->getLocale())}}">
                            @lang('navbar.nav9')
                        </a>
                    </div>
                    <div class='footer_links_div'>
                        <a class="footer_links" href="{{route('blog', app()->getLocale())}}">
                            @lang('navbar.nav8')
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerflex_item_b">
            <div class="footerflex_item_title bolder">@lang('navbar.info')</div>
            <div class='footer_links_div'>
                <a class="footer_links" href="{{route('aboutUs', app()->getLocale())}}">
                    @lang('navbar.footAbout')
                </a>
            </div>
            <div class='footer_links_div'>
                <a class="footer_links" href="{{route('careers', app()->getLocale())}}">
                    @lang('navbar.footCareer')
                </a>
            </div>
            <div class='footer_links_div'>
                <a class="footer_links" href="{{route('contact', app()->getLocale())}}">
                    @lang('navbar.footContact')
                </a>
            </div>
        </div>
        <div class="footerflex_item">
            <div class="footerflex_item_title bolder">@lang('navbar.subscribe')</div>
            <div class="subs_footer_div">
                <form action="{{route('form-submit', app()->getLocale())}}#submit_newsletters" method='post' id="submit_newsletters">
                    @csrf
                    <input type="text" name='email' class='footer_subs_inp form-control' placeholder="@lang('navbar.pl_enter_email')">
                    <button type='submit' class='footbutSubmit'><img src="{{ asset('assets/icons/arrow.png') }}" alt="" class='arrow-rotate'></button>
                </form>
            </div>
            <div class=''>
                @if($errors->has('email'))
                @foreach($errors->all() as $error)
                <div class='submitError'>{{$error}}</div>
                @endforeach

                @elseif(session()->has('success'))
                <div class='submitSuccess'>@lang('validation.success')</div>
                @endif
            </div>
            <div class="social_icons">
                <img src="{{ asset('assets/icons/twitter.png') }}" alt="" class='social_icons_img'>
                <img src="{{ asset('assets/icons/facebook footer.png') }}" alt="" class='social_icons_img'>
                <img src="{{ asset('assets/icons/linkedin.png') }}" alt="" class='social_icons_img'>
                <img src="{{ asset('assets/icons/instagram.png') }}" alt="" class='social_icons_img'>
            </div>
        </div>

    </div>
    <div class="footer_bottom d-flex justify-content-between  width85">
        <div class="footer_bottom_item1">
            <span class="terms-policy1">
                @lang('navbar.terms_of_use')
            </span>
            <span class="terms-policy2">
                @lang('navbar.privicy_pol')
            </span>
            <span class="terms-policy3">
                @lang('navbar.accessability')
            </span>
        </div>
        <div class="footer_bottom_item2">
            Developed by <a href='https://www.cybertech.am/'>CyberTech LLC</a></span> <i class='far fa-copyright'></i> <?php echo date("Y"); ?>
        </div>
    </div>
</div>

<!-- mobile footer -->
<div class="footerMobile">
    <div class="footerMob_sec1">
        <div class="footer_logo">
            <img src="{{ asset('assets/icons/Cyber Key logo.png') }}" alt="logo" class='logoImg'>
        </div>
        <div class="text_main footer_item1_text">
            Lorem Ipsum is simply dummy text of the
            printing and typesetting industry. Lorem
            Ipsum has been the industry's standard
            dummy text ever since the 1500s,
        </div>
        <div class="social_icons">
            <img src="{{ asset('assets/icons/twitter.png') }}" alt="" class='social_icons_img'>
            <img src="{{ asset('assets/icons/facebook footer.png') }}" alt="" class='social_icons_img'>
            <img src="{{ asset('assets/icons/linkedin.png') }}" alt="" class='social_icons_img'>
            <img src="{{ asset('assets/icons/instagram.png') }}" alt="" class='social_icons_img'>
        </div>
    </div>
    <div class="footerMob_sec2 mt-5">
        <div class="footerflex_item_title bolder">@lang('navbar.links')</div>
        <div class="subs_footer_div" id='submit_newsletters_foot'>
            <form action="{{route('form-submit', app()->getLocale())}}#submit_newsletters_foot" method='post' id="submit_newsletters">
                @csrf
                <input type="text" name='email' class='bg_footer footer_subs_inp form-control' placeholder="@lang('navbar.pl_enter_email')">
                <button type='submit' class='footbutSubmit'><img src="{{ asset('assets/icons/arrow.png') }}" alt="" class='arrow-rotate'></button>
            </form>
            <!-- <input type="text" class='bg_footer footer_subs_inp form-control' placeholder='Enter your email'>
            <img src="{{ asset('assets/icons/arrow.png') }}" alt="" class='arrow-rotate'> -->
        </div>
        <div class=''>
            @if($errors->any())
            @foreach($errors->all() as $error)
            <div class='submitError'>{{$error}}</div>
            @endforeach

            @elseif(session()->has('success'))

            <div class='submitSuccess'>{{session('success')}}</div>

            @endif
        </div>
    </div>
    <div class="footerMob_sec3 mt-5">
        <div class='footer_links_div footer_links_mob'>
            <a class="footer_links" href="{{route('home', app()->getLocale())}}">
                @lang('navbar.nav1')
            </a>
        </div>
        <div class='footer_links_div footer_links_mob'>
            <a class="footer_links" href="{{route('product', app()->getLocale())}}">
                @lang('navbar.nav2')
            </a>
        </div>
        <div class='footer_links_div footer_links_mob'>
            <a class="footer_links" href="{{route('technologies', app()->getLocale())}}">
                @lang('navbar.nav5')
            </a>
        </div>
        <div class='footer_links_div footer_links_mob'>
            <a class="footer_links" href="{{route('industries', app()->getLocale())}}">
                @lang('navbar.nav3')
            </a>
        </div>
        <div class='footer_links_div footer_links_mob'>
            <a class="footer_links" href="{{route('aboutUs', app()->getLocale())}}">
                @lang('navbar.nav4')
            </a>
        </div>
        <div class='footer_links_div footer_links_mob'>
            <a class="footer_links" href="{{route('video', app()->getLocale())}}">
                @lang('navbar.nav7')
            </a>
        </div>
        <div class='footer_links_div footer_links_mob'>
            <a class="footer_links" href="{{route('forInvestors', app()->getLocale())}}">
                @lang('navbar.nav9')
            </a>
        </div>
        <div class='footer_links_div footer_links_mob'>
            <a class="footer_links" href="{{route('blog', app()->getLocale())}}">
                @lang('navbar.nav8')
            </a>
        </div>
        <div class='footer_links_div footer_links_mob'>
            <a class="footer_links" href="{{route('aboutUs', app()->getLocale())}}">
                @lang('navbar.footAbout')
            </a>
        </div>
        <div class='footer_links_div footer_links_mob'>
            <a class="footer_links" href="{{route('careers', app()->getLocale())}}">
                @lang('navbar.footCareer')
            </a>
        </div>
        <div class='footer_links_div footer_links_mob'>
            <a class="footer_links" href="{{route('contact', app()->getLocale())}}">
                @lang('navbar.footContact')
            </a>
        </div>
    </div>
    <div class="footerMob_sec3">
        <span class="terms-policy1">
            @lang('navbar.terms_of_use')
        </span>
        <span class="terms-policy2">
            @lang('navbar.privicy_pol')
        </span>
        <span class="terms-policy3">
            @lang('navbar.accessability')
        </span>
    </div>
    <div class="footer_bottom_item2 pt-3">
        Developed by <a href='https://www.cybertech.am/'>CyberTech LLC</a></span> <i class='far fa-copyright'></i> <?php echo date("Y"); ?>
    </div>
</div>