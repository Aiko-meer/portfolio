<section class="about section" id="about">
    <h2 class="section__title" data-heading="My Intro">About me</h2>

    <div class="about__container container grid">
        <img src="{{ asset('image/info.jpg') }}" alt="" class="about__img">

        <div class="about__data">
            @foreach ($aboutme as $aboutme)
                
            @endforeach
            <h3 class="about__heading">Hi, i'am {{$aboutme->name}}, Based in Philippines</h3>
            <p class="about__description"> {{$aboutme->description}} </p>
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

            <!-- Button trigger modal -->
            <span class="about__button">
                Update About Info
            </span>

             <!-- Button trigger modal -->
             <a href="{{route('about.achiev')}}" class="button">
                Update Achievements
             </a>
        </div>
    </div>
    
    {{-- about modal --}}
    <div class="about__modal">
        <div class="about__modal-content">
            <i class="uil uil-times about__modal-close"></i>

            <h3 class="services__modal-title">Update Your Background Photo</h3>
            
            <div class="contact__content">
                <form method="post" action = "{{route('home.store')}}" class="contact-form">
                @csrf 
                @method('post')   
                
                <div class="input__container">
                        <input type="text" class="input" name="name"  value="{{$aboutme->name}}">
                        <label for="">Name</label>
                        <span>name</span>
                    </div>

                    <div class="input__container textarea">
                        <textarea  id="description"  class="input" name="description" value="{{$aboutme->description}}" >{{$aboutme->description}}</textarea>
                        <label for="">Description</label>
                        <span>Description</span>
                    </div>

                    <button type="submit" class="button"><i class="uil uil-navigator button__icon"></i>
                        Updates</button>
                </form>
            </div>
             
        </div>
    </div>
</section>