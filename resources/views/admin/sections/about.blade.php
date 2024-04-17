<script>
    @if(session('success'))
        swal("Success", "{{ session('success') }}", "success");
    @endif
</script>
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
            <a href="{{route('home.resume')}}" class="button"><i class="uil uil-navigator button__icon"></i>
            MY resume</a>

            <!-- Button trigger modal -->
            <span class="about__button">
                Update About Info
            </span>

             <!-- Button trigger modal -->
             <span class="home__button" >
                Update Photo
            </span>
             <!-- Button trigger modal -->
             <a href="{{route('about.achiev')}}" style="margin-top: 30px!important" class="button">
                Update Achievements
             </a>
        </div>
    </div>
    
    {{-- about modal --}}
    <div class="about__modal">
        <div class="about__modal-content">
            <i class="uil uil-times about__modal-close"></i>

            <h3 class="services__modal-title">Update Your About me info</h3>
            
            <div class="contact__content">
                <form method="post" action = "{{route('about.info', ['id' =>$aboutme->id])}}" class="contact-form">
                @csrf 
                @method('put')   
                
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
                        Update</button>
                </form>
            </div>
             
        </div>
    </div>

      <!-- Modal image -->
      <div class="update__modal">
        <div class="update__modal-content">
            <i class="uil uil-times update__modal-close"></i>
            <h3 class="services__modal-title">Update Your Background Photo</h3>
            
            <div class="containers">
                <div class="img-area" data-img="">
                    <i class='bx bxs-cloud-upload icon'></i>
                    <h3>Upload Image</h3>
                    <p>Image size must be less than <span>2MB</span></p>
                </div>
                <button class="select-image">Select Image</button>
                <form action="{{ route('about.image', ['id' => $aboutme->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <input type="file" id="file2" accept="image/*" name="image">
                    <button type="submit" class="select-image">Save</button>
                </form>    
            </div>
        </div>
    </div>
</section>