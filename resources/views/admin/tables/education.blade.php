<!DOCTYPE html>
<html lang="en">
@include('admin.components.header')
<body>
    @include('admin.components.sidebartable')

    <link rel="stylesheet" href="{{ asset('css/table.css')}}">
    <script>
        @if(session('success'))
            swal("Success", "{{ session('success') }}", "success");
        @endif
    </script>
    <main class="main" id="customers_table">
        <section class="table__header">
            <h1 class="educations__update">
                Add
            </h1>
            <h2>Education</h2>
           
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th >Grade</th>
                        <th>School name</th>
                        <th> Date </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($education as $item)
                    <tr>
                        <td > {{$item->grade}} </td>
                        <td > {{$item->school}}</td>
                        <td >  {{$item->year}} </td>
                        <td><div class="" style="display: flex; justify-content:center; gap:10px " >
                            <button class="education__button"><i class="uil uil-edit"></i></button> 
                            <div class="education__item-details">
                                <form action="{{route('qualification.update', ['education' => $item->id])}}" method="post">
                                    @csrf 
                                    @method('put')  
                                <h3 class="education__title">{{$item->grade}}</h3>
                                <div class="input__education">
                                    <input type="text" class="input_educations" name="grade" placeholder="{{$item->grade}}"  value="{{$item->grade}}">
                                    
                                    <span>name</span>
                                </div>
                                <h3 class="education__title">{{$item->school}}</h3>
                                <div class="input__education">
                                    <input type="text" class="input_educations" name="school" placeholder="{{$item->school}}"  value="{{$item->school}}">
                                    
                                    <span>name</span>
                                </div>
                                <p class="education__description">
                                </p>
                                <h3 class="education__title">{{$item->year}}</h3>
                                <div class="input__education">
                                    <input type="text" class="input_educations" name="year" placeholder="{{$item->year}}" value="{{$item->year}}">
                                    
                                    <span>name</span>
                                </div>
                                <button type="submit" class="button"><i class="uil uil-navigator button__icon"></i>
                                    Update</button>
                            </form>
                            </div>
                            <form action="{{route('qualification.delete', ['id' => $item->id])}}" method="post">
                                @csrf 
                                @method('delete')  
                                <button type="submit" class="button"><i class="uil uil-trash-alt"></i></button>
                                </form>
                                </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

         <!-- Portfolio Popup Model-->
<div class="education__popup">
    <div class="education__popup-inner">
        <div class="education__popup-content grid">
            <span class="education__popup-close"><i class="uil uil-times"></i></span>
            <div class="education__popup-info">
                <div class="education__popup-subtitle">Update - <span>Education</span></div>
                <div class="education__popup-body">
                   
                </div>
            </div>
        </div>
    </div>
</div>

<div class="educations__modal">
    <div class="educations__modal-content">
        <i class="uil uil-times educations__modal-close"></i>

        <h3 class="services__modal-title">Add Education</h3>
        
        <div class="contact__content">
            <form action="{{ route('qualification.add')}}" class="contact-form" method="post">
                @csrf 
                @method('post')  
                <h3 class="services__modal-title">Grade</h3>
                <div class="input__container">
                    <input type="text" class="input" name="grade">
                    <span>Grade</span>
                </div>

                <h3 class="services__modal-title">School</h3>
                <div class="input__container">
                    <input type="text" class="input" name="school">
                    <span>School</span>
                </div>

                <h3 class="services__modal-title">Year</h3>
                <div class="input__container">
                    <p>Date started & Ended</p>
                    <input type="text" class="input" name="year" placeholder="Started - Ended">    
                </div>
                <button type="submit" class="button"><i class="uil uil-navigator button__icon"></i>
                    Update</button>
            </form>
        </div>
         
    </div>
</div>

    </main>
    
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
 

<!--========== MIXITUP FILTER ==========-->
<script src="{{ asset('js/mixitup.min.js') }}"></script>

<!--========== SWIPER JS ==========-->
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>




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

/*===== Work Popup =====*/
document.addEventListener("click", (e) => {
    if(e.target.classList.contains("education__button")) {
        toggleAwardPopup();
        awardItemDetails(e.target.parentElement);
    }
})

function toggleAwardPopup(){
    document.querySelector(".education__popup").classList.toggle("open");
}

document.querySelector(".education__popup-close").addEventListener("click", toggleAwardPopup)

function awardItemDetails(awardItem){
  
    document.querySelector(".education__popup-subtitle span").innerHTML = awardItem.querySelector(".education__title").innerHTML;
    document.querySelector(".education__popup-body").innerHTML = awardItem.querySelector(".education__item-details").innerHTML;
}
});

const modaleducations = document.querySelectorAll('.educations__modal'),
     eduBtns = document.querySelectorAll('.educations__update'),
    eduCloses = document.querySelectorAll('.educations__modal-close')

let mox= function(modalClick) {
    modaleducations[modalClick].classList.add('educations-update')
}

eduBtns.forEach((eduBtn, i) => {
    eduBtn.addEventListener('click', () => {
        mox(i)
    })
})

eduCloses.forEach((eduClose) => {
    eduClose.addEventListener("click", () => {
        modaleducations.forEach((modaleducation) => {
            modaleducation.classList.remove("educations-update")
        })
    })
})



 </script>
</body>

</html>
