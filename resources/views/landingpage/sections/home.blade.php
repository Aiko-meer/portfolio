<section class="home" id="home" style="background: url('{{ asset('upload/'.$image[0]->image) }}'); background-size: contain; background-position: center; background-repeat: no-repeat;">


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
               
                <img src="assets/img/home-img.png" alt="" class="home__img">
                
                <div class="home__data">
                    @foreach ($homes as  $item)  
                    <h1 class="home__title">Hi, I'am {{$item->name}}</h1>
                    <h3 class="home__subtitle"> {{$item->role}}</h3>
                    <p class="home__description"> {{$item->description}}</p>
                    @endforeach
                    <a href="#about" class="button"><i class="uil uil-user button__icon"></i>
                        More info
                        </a>
                </div>

                <div class="my__info">
                    <div class="info__item">
                        <i class="uil uil-facebook-messenger info__icon"></i>

                        <div>
                            <h3 class="info__title">Messenger</h3>
                            <span class="info__subtitle">Zaeed Cervantes</span>
                        </div>
                    </div>

                    <div class="info__item">
                        <i class="uil uil-whatsapp info__icon"></i>

                        <div>
                            <h3 class="info__title">Whatsapp</h3>
                            <span class="info__subtitle">+6392 1856 2626</span>
                        </div>
                    </div>

                    <div class="info__item">
                        <i class="uil uil-envelope-edit info__icon"></i>

                        <div>
                            <h3 class="info__title">Email</h3>
                            <span class="info__subtitle">zedcervantes@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>

            
                    <!-- Modal -->
                    <div class="update__modal">
                        <div class="update__modal-content">
                            <i class="uil uil-times update__modal-close"></i>

                            <h3 class="services__modal-title">Update Your Background Photo</h3>
                            
                            <div class="containers">
                              
                            <input type="file" id="file" accept="image/*" hidden>
                            <div class="img-area" data-img="">
                                <i class='bx bxs-cloud-upload icon'></i>
                                <h3>Upload Image</h3>
                                <p>Image size must be less than <span>2MB</span></p>
                            </div>
                            <button class="select-image">Select Image</button>
                            <form action="">
                            <button type="submit" class="select-image">Save</button> 
                            </form>    
                           </div>
                             
                        </div>
                    </div>

                   
                   

                   
        </section>