<!-- ======= Carusel ======= -->
<section id="testimonials_events" class="w-100">
  <div class="container">
    <div class="row">
      <div class="container-carusel">
        <div class="owl-carousel event-carousel" id="owl-carousel">

          @foreach($eventsAll as $elEvents)
          <div class="testimonial-item">
            <a class='a_no_dec' href="{{route('event_separate', ['locale' => app()->getLocale(), 'id' => $elEvents->id] )}}">
              <div class="row-d">
                <div class="pr_img" style='background-image:url("{{ asset("assets/images/$elEvents->image") }}")'>

                </div>
                <div class="events-content d-flex">
                  <div class="events_date text-center">{{ \Carbon\Carbon::parse($elEvents->event_date)->format('F j, Y')}}</div>
                  <div class="events_item_2">
                    <h4>{{$elEvents->title}}</h4>
                    <span class="location_event"><i class="fas fa-map-marker-alt"></i> {{$elEvents->event_address}}</span>
                  </div>

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