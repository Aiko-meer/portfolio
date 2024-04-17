<section class="about section" id="about">
    <h2 class="section__title" data-heading="My Intro">About me</h2>

    <div class="about__container container grid">
        <div class="">
            @foreach ($aboutme as $aboutme)
            <div class="image-container">
                <img id="image" src="{{ asset('upload/'.$aboutme->image) }}" alt="About Me">
            </div>
                

    
        </div>

        <div class="about__data">
           
        
            <h3 class="about__heading">Hi, i'am {{$aboutme->name}}, Based in Philippines</h3>
            <p class="about__description"> {{$aboutme->description}} </p>
            @endforeach
            <div class="about__info">
                @foreach ($achiev as $list )
                <div class="about__box">  
                    <i class="uil uil-award about__icon"></i>
                    <h3 class="about__title">{{$list->title}}</h3>
                    <span class="about__subtitle">{{$list->description}}</span>
                </div>
                @endforeach
            </div>
            <a href="" class="button"><i class="uil uil-navigator button__icon"></i>
            MY resume</a>
           
           
        </div>
    </div>
    
   
</section>