<!-- ======= Carusel ======= -->
<section id="testimonials_med_ab_us" class="w-100">
    <div class="container">
        <div class="row">
            <div class="container-carusel">
                <div class="owl-carousel event-carousel" id="owl-carousel">

                    @foreach($mediaAboutUsAll as $elMedia)
                    <div class="testimonial-item">
                        <a class='a_no_dec' href="{{route('med_ab_us_separate', ['locale' => app()->getLocale(), 'id' => $elMedia->id] )}}">
                            <div class="row-d">
                                <div class="pr_img" style='background-image:url("{{ asset("assets/images/$elMedia->image") }}")'>
                                </div>
                                <div class="med_ab_us_content">
                                    <h4>{{$elMedia->title}}</h4>
                                    <span class="med_ab_us_date">{{$elMedia->created_at}}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>


            </div>
        </div>
    </div>
</section>