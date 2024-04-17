<script>
    @if(session('success'))
        swal("Success", "{{ session('success') }}", "success");
    @endif
</script>
<section class="testimonials section">
            <h2 class="section__title" data-heading="My clients say">Testimonials</h2>
          

            <div class="testimonials__container container swiper">
            <a href="{{route('client.index')}}" class="button">Edit</a>
                <div class="swiper-wrapper">
                    @foreach ($client as $item )
                        
                  
                    <div class="testimonials__card swiper-slide">
                        <div class="testimonial__quote">
                            <i class='bx bxs-quote-alt-left'></i>
                        </div>
                        <p class="testimonials__description">{{$item->description}}</p>
                        <h3 class="testimonial__date">{{$item->date}}</h3>
                        <div class="testimonial__profile">
                            <img src="{{ asset('upload/'.$item->image) }}" alt="" class="testimonial__profile-img">
                            
                            <div class="testimonial__profile-data">
                                <span class="testimonial__profile-name">{{$item->name}}</span>
                                <span class="testimonial__profile-detail">{{$item->role}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>