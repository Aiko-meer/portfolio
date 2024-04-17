<script>
    @if(session('success'))
        swal("Success", "{{ session('success') }}", "success");
    @endif
</script>
<section class="work section" id="work">
    <h2 class="section__title" data-heading="My Portfolio">Recent Works</h2>

    <div class="work__filters">
        <span class="work__item active-work" data-filter="all">All</span>
        <span class="work__item" data-filter=".web">Web</span>
        <span class="work__item" data-filter=".app">App</span>
        <span class="work__item" data-filter=".design">Design</span>
    </div>

    <div class="work__container container grid">
        @foreach ($work as $list )
            
      
        <div class="work__card mix {{$list->type}}">
            <div class="work-image-container">
            <img src="{{ asset('upload/'.$list->image) }}" alt="" class="work__img">
        </div>
            <h3 class="work__title">{{$list->name}}</h3>
            <span class="work__button">View
                <i class="uil uil-arrow-right work__button-icon"></i>
            </span>
            <div class="portfolio__item-details">
                <h3 class="details__title">Project Name: {{$list->name}}</h3>
                <p class="details__description">{{$list->description}}</p>
                <ul class="details__info">
                    <li>Created - <span>{{$list->date}}</span></li>
                    <li>Technologies -<span></span>{{$list->tech}}</li>
                    <li>Role -<span></span>{{$list->role}}</li>
                    <li>View -<span><a href="">{{$list->site}}</a></span></li>
                </ul>
            </div>
        </div>

        @endforeach

       
        
       
    </div>
</section>
<!-- Portfolio Popup Model-->
<div class="portfolio__popup">
    <div class="portfolio__popup-inner">
        <div class="portfolio__popup-content grid">
            <span class="portfolio__popup-close"><i class="uil uil-times"></i></span>
            <div class="pp__thumbnail">
                <img src="{{ asset('image/aquation.png') }}" alt="" class="portfolio__popup-img">
            </div>
            <div class="portfolio__popup-info">
                <div class="portfolio__popup-subtitle">Featured - <span>Design</span></div>
                <div class="portfolio__popup-body">
                    <h3 class="details__title">App for Technology & services</h3>
                    <p class="details__description">Lorem ipsum, dolor sit amet consectet
                        Earum impedit vluptatibus minima.
                    </p>
                    <ul class="details__info">
                        <li>Created - <span>4 Dec 2020</span></li>
                        <li>Technologies - <span>html css</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>View - <span><a href="#">wwww.domain.com</a></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>