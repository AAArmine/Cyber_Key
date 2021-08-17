<!-- ======= Carusel ======= -->
<section id="testimonials" class="w-100 pr-slide-section">
  <div class="container">
    <div class="row">
      <div class="container-carusel">
        <div class="owl-carousel birth-event-carousel" id="owl-carousel">

          @foreach($pressReleases_rest as $el)
          <div class="testimonial-item">
            <a href="{{route('pr_separate', ['locale' => app()->getLocale(), 'id' => $el->id] )}}" class='common_text'>

              <div class="row-d">
                <div class="pr_img" style='background-image:url("{{ asset("assets/images/$el->image") }}")'>
                  <div class="pr_abs">
                    {{$el->topic}}
                  </div>
                </div>
                <div class="pr_item-content">
                  <h4>{{$el->title}}</h4>
                  <span class="pr_date">{{$el->created_at}}</span>
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