
@include('admin.components.header')
<body>
    @include('admin.components.sidebartable')
    <link rel="stylesheet" href="{{ asset('css/table.css')}}">
    <script>
        @if(session('success'))
            swal("Success", "{{ session('success') }}", "success");
        @endif
    </script>
    <section class="work section" id="work">
        <h2 class="section__title" data-heading="My Portfolio">Home Setting</h2>
    
        
    
        <div class="award__container container grid">
            @foreach ($awards as $list )
            <div class="award__card mix {{$list->title}}">
                <h3 class="award__title">{{$list->title}}</h3>
                <span class="award__button">Demo
                    <i class="uil uil-arrow-right award__button-icon"></i>
                </span>
                <div class="award__item-details">
                    <h3 class="award__title">Title:</h3>
                    <form action="{{ route('about.award', ['award' => $list->id]) }}" method="post">

                        @csrf 
                        @method('put')  
                    <div class="input__award">
                        <input type="text" class="inputs" name="title" placeholder="{{$list->title}}"  value="{{$list->title}}">
                        
                        <span>name</span>
                    </div>
                    <h3 class="award__title">Description:</h3>
                    <div class="input__award">
                        <input type="text" class="inputs" name="description" placeholder="{{$list->description}}"  value="{{$list->description}}">
                        
                        <span>Description</span>
                    </div>
                    <button type="submit" class="button"><i class="uil uil-navigator button__icon"></i>
                        Update</button>
                    </form>
                </div>
            </div>
            @endforeach
           
    
           
           
    
          
    
           
    
           
        </div>
    </section>
    <!-- Portfolio Popup Model-->
    <div class="award__popup">
        <div class="award__popup-inner">
            <div class="award__popup-content grid">
                <span class="award__popup-close"><i class="uil uil-times"></i></span>
                
                <div class="award__popup-info">
                    <div class="award__popup-subtitle"><span>Design</span></div>
                    <div class="award__popup-body">
                        <h3 class="award__title">App for Technology & services</h3>
                        <p class="award__description">Lorem ipsum, dolor sit amet consectet
                            Earum impedit vluptatibus minima.
                        </p>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
<section class="footer">
    <div class="footer__bg">
        <div class="footer__container container grid">
             <div>
                <h1 class="footer__title">Zaeed</h1>
                <span class="footer__subtitle">FrontEnd</span>
             </div>

             <ul class="footer__links">
                <li>
                    <a href="#services" class="footer__link">Services</a>
                </li>
                <li>
                    <a href="#work" class="footer__link">Work</a>
                </li>
                <li>
                    <a href="#contact" class="footer__link">Contact</a>
                </li>
             </ul>

             <div class="footer__socials">
                <a href="" class="footer__social">
                    <i class="uil uil-facebook-f"></i>
                </a>
                <a href="" class="footer__social">
                    <i class="uil uil-instagram"></i>
                </a>
                <a href="" class="footer__social">
                    <i class="uil uil-twitter"></i>
                </a>
             </div>
        </div>
        <p class="footer__copy">!THANK YOU FOR VISITING MY WEBSITE! </p>
    </div>
</section>
</main>


<!--========== MIXITUP FILTER ==========-->
<script src="{{ asset('js/mixitup.min.js') }}"></script>



<!-- loader -->
<script>
document.addEventListener("DOMContentLoaded", function() {
// Wait for the DOM to be fully loaded

// Delay the display of the element by 2000 milliseconds (2 seconds)
setTimeout(function() {
var delayedElement = document.getElementById("preloader");
if (delayedElement) {
    delayedElement.classList.add('active');
}
}, 3000);
});

 /*=============== MIXITUP FILTER award ===============*/
 let mixerAward =mixitup('.award__container', {
    selectors: {
        target: '.award__card'
    },
    animation: {
        duration: 300
    }
});

/*===== Link Active Work =====*/
const linkAward = document.querySelectorAll('.award__item')

function activeAward() {
    linkAward.forEach(l=> l.classList.remove('active-award'))
    this.classList.add('active-award')
}

linkAward.forEach(l=> l.addEventListener("click",activeAward))


linkAward.forEach(l=> l.addEventListener("click",activeAward))

/*===== Work Popup =====*/
document.addEventListener("click", (e) => {
    if(e.target.classList.contains("award__button")) {
        toggleAwardPopup();
        awardItemDetails(e.target.parentElement);
    }
})

function toggleAwardPopup(){
    document.querySelector(".award__popup").classList.toggle("open");
}

document.querySelector(".award__popup-close").addEventListener("click", toggleAwardPopup)

function awardItemDetails(awardItem){
  
    document.querySelector(".award__popup-subtitle span").innerHTML = awardItem.querySelector(".award__title").innerHTML;
    document.querySelector(".award__popup-body").innerHTML = awardItem.querySelector(".award__item-details").innerHTML;
}


</script>
</body>

</html>
