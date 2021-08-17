<section class="eight_contacts">
    <div class="contacts_flex d-flex justify-content-between">
        <div class="contacts_flex_item1" id='contact_form'>
            <h4 class='common_caption'>@lang('homepage.contacts')</h4>
            <form action="{{route('form-contact', app()->getLocale())}}#contact_form" method='post'>
                @csrf
                <div><input type="text" class="form-control cont_inps" placeholder='@lang("homepage.name")' name='userName' value="{{ old('userName') }}"></div>
                <div><input type="text" class="form-control cont_inps" placeholder='@lang("homepage.phoneNumber")' name='userPhone' value="{{ old('userPhone') }}"></div>
                <div><input type="text" class="form-control cont_inps" placeholder='@lang("homepage.email")' name='userEmail' value="{{ old('userEmail') }}"></div>
                <div><input type="text" class="form-control cont_inps" placeholder='@lang("homepage.country")' name='userCountry' value="{{ old('userCountry') }}"></div>
                <div><textarea class="form-control cont_inps" placeholder='@lang("homepage.message")' rows='5' name='userMessage'>{{ old('userMessage') }}</textarea></div>
                @if($errors->has('userEmail') || $errors->has('userPhone') || $errors->has('userEmail') || $errors->has('userCountry') || $errors->has('userMessage'))
                @foreach($errors->all() as $error)
                <div class='submitError'>{{$error}}</div>
                @endforeach

                @elseif(session()->has('success_contact'))
                <div class='submitSuccess'>@lang('validation.success_contact')</div>
                <script>
                    setTimeout(function() {
                        $('.submitSuccess').html('');
                    }, 3000)
                </script>
                @endif
                <div class='send_contact'>
                    <button type='submit' class="blue_but">
                        @lang('buttons.send')
                    </button>
                </div>
            </form>
        </div>

        <div class="contacts_flex_item2">
            <div class="contacts_flex_item2_content">
                <img src="{{asset('assets/icons/phone-call.png')}}" alt="phone" class='cont_icon'>
                @lang('homepage.PHONE')
                <div class='cont_detail'><a href="tel:+37490999999">+374 90 999999</a></div>

                <img src="{{asset('assets/icons/location.png')}}" alt="phone" class='cont_icon'>
                @lang('homepage.ADRESS')
                <div class='cont_detail'>@lang('homepage.actual')</div>

                <div class="cont_social_abs">
                    <div class='margin_buttom'> <img src="{{asset('assets/icons/in.png')}}" alt="phone" class='cont_soc'></div>
                    <div> <img src="{{asset('assets/icons/facebook.png')}}" alt="phone" class='cont_soc'></div>
                </div>
                <img src="{{asset('assets/icons/email.png')}}" alt="phone" class='cont_icon'>
                @lang('homepage.EMAILS')
                <div class='cont_detail'>
                    <span class="email_cont">
                        <a href="mailto:investor@cyberkey.xyz?Subject=Contact from Homepage" id='mailTo'>
                            investor@cyberkey.xyz
                        </a>
                    </span>
                    <span class="email_cont1">
                        <a href="mailto:investor@cyberkey.xyz?Subject=Contact from Homepage" id='mailTo'>
                            contact@cyberkey.xyz
                        </a>
                    </span>
                </div>
            </div>
        </div>

    </div>
    <div class="map_abs">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="430" height="412" id="gmap_canvas" src="https://maps.google.com/maps?q=Armenia,%20Yerevan,%20Azatutyan%2024&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
</section>