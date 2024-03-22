<section class="home" id="home">
            <div class="home__container container grid">
                <div class="home__social">
                    <span class="home__social-follow">Follow ME</span>
                    <div class="home__social-links">
                        <a href="" class="home__social-link">
                            <i class="uil uil-facebook-f"></i>
                        </a>
                        <a href="" class="home__social-link">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a href="" class="home__social-link">
                            <i class="uil uil-twitter"></i>
                        </a>
                    </div>
                </div>
               
                <img src="assets/img/home-img.png" alt="" class="home__img">
                
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
                </div>

                <div class="my__info">
                    <div class="info__item">
                        <i class="uil uil-facebook-messenger info__icon"></i>

                        <div>
                            <h3 class="info__title">Social Media</h3>
                            <span class="info__subtitle">Zaeed Cervantes</span>
                             <!-- Button trigger modal -->
                                <span class="social__update">
                                    Update 
                                </span>
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

                    <!-- info Modal -->
                    <div class="info__modal">
                        <div class="info__modal-content">
                            <i class="uil uil-times info__modal-close"></i>

                            <h3 class="services__modal-title">Update Your Home info</h3>
                            
                            <div class="contact__content">
                                <form method="post" action = "{{route('home.store')}}" class="contact-form">
                                @csrf 
                                @method('post')   
                                <div class="input__container">
                                        <input type="text" class="input" name="name"  value="">
                                        <label for="">Name</label>
                                        <span>name</span>
                                    </div>

                                    <div class="input__container">
                                        <input type="text" class="input" name="role" >
                                        <label for="">Role</label>
                                        <span>Role</span>
                                    </div>

                                    <div class="input__container textarea">
                                        <textarea  id="description"  class="input" name="description" ></textarea>
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