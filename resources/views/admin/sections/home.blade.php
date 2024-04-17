<script>
    @if(session('success'))
        swal("Success", "{{ session('success') }}", "success");
    @endif
</script>
<section class="home" id="home" style="background: url('{{ asset('upload/'.$image[0]->image) }}');  object-fit:cover; background-size:contain; background-position: center; background-repeat: no-repeat;">



            <div class="home__container container grid">
                <div class="home__social">
                    <span class="home__social-follow">Follow ME</span>
                    <div class="home__social-links">
                        @foreach ($social as $social )
                            
                       
                        <a href="{{ route('social.site', ['site' => $social->site, 'link' => $social->link]) }}" target="{{ $social->site }}" class="home__social-link">

                            <i class="{{$social->icon}}"></i>
                        </a>
                        @endforeach

                     
                    </div>
                </div>
               
            
               
                
                <div class="home__data">
                    @foreach ($homes as  $item)  
                    <h1 class="home__title">Hi, I'am {{$item->name}}</h1>
                   
                    <h3 class="home__subtitle"> {{$item->role}}</h3>
                    <p class="home__description"> {{$item->description}}</p>
                    @endforeach
                    <!-- Button trigger modal -->
                    <span class="info__button">
                        Update Home info
                    </span>
                     <!-- Button trigger modal -->
                     <span class="home__button">
                        Update Photo
                    </span>
                    <a href="{{route('social.index')}}" class="button">Update Scoial Media</a>
                </div>

              
            </div>

            
                    <!-- Modal -->
                    <div class="update__modal">
                        <div class="update__modal-content">
                            <i class="uil uil-times update__modal-close"></i>
                            <h3 class="services__modal-title">Update Your Background Photo</h3>
                            
                            <div class="containers">
                                <div class="img-area" data-img="">
                                    <i class='bx bxs-cloud-upload icon'></i>
                                    <h3>Upload Image</h3>
                                    <p>Image size must be less than <span>10MB</span></p>
                                </div>
                                <button class="select-image">Select Image</button>
                                <form action="{{ route('home.upload', ['id' => $image[0]->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <input type="file" id="file" accept="image/*" name="image">
                                    <button type="submit" class="select-image">Save</button>
                                </form>    
                            </div>
                        </div>
                    </div>
                    
                  
                    

                    <!-- info Modal -->
                    <div class="info__modal">
                        <div class="info__modal-content">
                            <i class="uil uil-times info__modal-close"></i>

                            <h3 class="services__modal-title">Update Your Home info</h3>
                            <div class="contact__content">
                                <form method="post" action = "{{ route('home.update', ['id' => $item->id]) }}" class="contact-form">
                                @csrf 
                                @method('put')   
                                <div class="input__container">
                                        <input type="text" class="input" name="name"  value="{{$item->name}}" >
                                        <label for="">Name</label>
                                        <span>name</span>
                                    </div>

                                    <div class="input__container">
                                        <input type="text" class="input" name="role" value="{{$item->role}}" >
                                        <label for="">Role</label>
                                        <span>Role</span>
                                    </div>

                                    <div class="input__container textarea">
                                        <textarea  id="description"  class="input" name="description" value="{{$item->description}}" placeholder="{{$item->description}}">{{$item->description}}</textarea>
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