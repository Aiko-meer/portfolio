<section class="work section" id="work">
    <h2 class="section__title" data-heading="My Portfolio">Recent Works</h2>

    <div class="work__filters">
        <span class="work__item active-work" data-filter="all">All</span>
        <span class="work__item" data-filter=".web">Web</span>
        <span class="work__item" data-filter=".app">App</span>
        <span class="work__item" data-filter=".design">Design</span>
    </div>

    <div class="work__container container grid">
        <div class="work__card mix web">
            <img src="{{ asset('image/aquation.png') }}" alt="" class="work__img">
            <h3 class="work__title">Web Design</h3>
            <span class="work__button">Demo
                <i class="uil uil-arrow-right work__button-icon"></i>
            </span>
            <div class="portfolio__item-details">
                <h3 class="details__title">The services provide for design</h3>
                <p class="details__description">my college project 4th year</p>
                <ul class="details__info">
                    <li>Created - <span>5 dec 2020</span></li>
                    <li>Technologies -<span></span>html css</li>
                    <li>Role -<span></span>frontend</li>
                    <li>View -<span><a href="">www.work.com</a></span></li>
                </ul>
            </div>
        </div>

        <div class="work__card mix app">
            <img src="{{ asset('image/aquation.png') }}" alt="" class="work__img">
            <h3 class="work__title">App Design</h3>
            <span class="work__button">Demo
                <i class="uil uil-arrow-right work__button-icon"></i>
            </span>
            <div class="portfolio__item-details">
                <h3 class="details__title">Mobile app landing design & app maintain.</h3>
                <p class="details__description">my college project 4th year</p>
                <ul class="details__info">
                    <li>Created - <span>21 March 2020</span></li>
                    <li>Technologies -<span></span>html css</li>
                    <li>Role -<span></span>frontend</li>
                    <li>View -<span><a href="">www.work.com</a></span></li>
                </ul>
            </div>
        </div>

        <div class="work__card mix design">
            <img src="{{ asset('image/aquation.png') }}" alt="" class="work__img">
            <h3 class="work__title">Brand Design</h3>
            <span class="work__button">Demo
                <i class="uil uil-arrow-right work__button-icon"></i>
            </span>
            <div class="portfolio__item-details">
                <h3 class="details__title">Logo design creativity & application</h3>
                <p class="details__description">my college project 4th year</p>
                <ul class="details__info">
                    <li>Created - <span>4 dec 2020</span></li>
                    <li>Technologies -<span></span>html css</li>
                    <li>Role -<span></span>frontend</li>
                    <li>View -<span><a href="">www.work.com</a></span></li>
                </ul>
            </div>
        </div>

        <div class="work__card mix web">
            <img src="{{ asset('image/aquation.png') }}" alt="" class="work__img">
            <h3 class="work__title">App Design</h3>
            <span class="work__button">Demo
                <i class="uil uil-arrow-right work__button-icon"></i>
            </span>
            <div class="portfolio__item-details">
                <h3 class="details__title">Mobile app landing design & services</h3>
                <p class="details__description">my college project 4th year</p>
                <ul class="details__info">
                    <li>Created - <span>4 Feb 2020</span></li>
                    <li>Technologies -<span></span>html css</li>
                    <li>Role -<span></span>Backend</li>
                    <li>View -<span><a href="">www.work.com</a></span></li>
                </ul>
            </div>
        </div>

        <div class="work__card mix ">
            <img src="{{ asset('image/add.jpg') }}" alt="" class="work__img">
            <h3 class="work__title">Add Work</h3>
           <a href="{{route('work.index')}}" class="button">Add</a>
            <div class="portfolio__item-details">
                
            </div>
        </div>

       

       
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