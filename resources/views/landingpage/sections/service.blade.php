
<section class="services section" id="services">
            <h2 class="section__title" data-heading="Services">What I Offer</h2>
           

            <div class="services__container container grid">
                @foreach ( $service as $item )  
                <div class="services__content">
                   
                    <div>
                        <i class="{{$item->icon}} services__icon"></i>
                        <h3 class="services__title">Web <br> Designer</h3>
                       
                    </div>
                 
                      
                 
                    <span class="services__button">
                        View More<i class="uil uil-arrow-right services__button-icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class="uil uil-times services__modal-close"></i>

                            <h3 class="services__modal-title">{{$item->title}}</h3>
                            <p class="services__modal-description">{{$item->description}}</p>

                               
                        </div>
                    </div>
                   
                </div>
                @endforeach
               

              
            </div>
        </section>