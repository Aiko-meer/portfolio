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
            <h2>Social Media</h2>
          
           
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th >Social Name</th>
                        <th>Icon</th>
                        <th>Site</th>
                        <th style="text-align: center"> Action </th>
                    </tr>
                </thead>
                <tbody>
                  
                    <tr>
                       @foreach ($social as $list )

                        <td >{{$list->name}}</td>
                        <td >{{$list->icon}}</td>
                        <td >{{$list->site}}</td>
                        <td><div class="" style="display: flex; justify-content:center; gap:10px " >
                            <button class="education__button"><i class="uil uil-edit"></i></button> 
                            <div class="education__item-details">
                                <form action="{{route('social.update', ['id' =>$list->id] )}}" method="post">
                                    @csrf 
                                    @method('put')  
                                <h3 class="education__title">Title</h3>
                                <div class="input__education">
                                    <input type="text" class="input_educations" name="name" placeholder="{{$list->name}}"  value="{{$list->name}}">    
                                    <span>Name</span>
                                </div>

                                <h3 class="education__title">Icon</h3>
                                <div class="input__education">
                                    <input type="text" class="input_educations" name="icon" placeholder="{{$list->icon}}"  value="{{$list->icon}}">
                                    
                                    <span>Icon</span>
                                </div>
                               
                               
                                <h3 class="education__title">Site</h3>
                                <div class="input__education">
                                    <input type="text" class="input_educations" name="site" placeholder="{{$list->site}}" value="{{$list->site}}">
                                    <span>Site</span>
                                </div>

                                <h3 class="education__title">Link</h3>
                                <div class="input__education">
                                <input type="text" class="input" name="link"  placeholder="{{$list->link}}" value="{{$list->link}}">
                                <span>Link</span>
                                </div>

                                <button type="submit" class="button"><i class="uil uil-navigator button__icon"></i>
                                    Update</button>
                            </form>
                            </div>
                            <form action="{{route('social.delete', ['id' =>$list->id])}}" method="post">
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

        <h3 class="services__modal-title">Add Social</h3>
        
        <div class="contact__content">
            <form action="{{route('social.add')}}" class="contact-form" method="post">
                @csrf 
                @method('post')  
                <h3 class="services__modal-title">Social Name</h3>
                <div class="input__container">
                    <input type="text" class="input" name="name">
                    <span>Social Name</span>
                </div>

                <h3 class="services__modal-title">Social Icon</h3>
                <div class="input__container">
                    <input type="text" class="input" name="icon">
                    <span>Icon</span>
                </div>

                <h3 class="services__modal-title">Site</h3>
                <div class="input__container">
                    <input type="text" class="input" name="site">
                    <span>Site</span>
                    <h3 class="services__modal-title">Link</h3>
                    <input type="text" class="input" name="link">
                    <span>Link</span>
                </div>
                <button type="submit" class="button" style="justify-content: center; display:flex"><i class="uil uil-navigator button__icon"></i>
                    Update</button>
            </form>
        </div>
         
    </div>
</div>

<div class="skill__modal">
    <div class="skill__modal-content">
        <i class="uil uil-times skill__modal-close"></i>

        <h3 class="services__modal-title">Add skill Category</h3>
        
        <div class="contact__content">
            <form action="{{route('skill.category')}}" class="contact-form" method="post">
                @csrf 
                @method('post')  
                <h3 class="services__modal-title">Skill Name</h3>
                <div class="input__container">
                    <input type="text" class="input" name="name">
                    <span>Work Place</span>
                </div>
                <button type="submit" class="button"><i class="uil uil-navigator button__icon"></i>
                    Save</button>
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
// skill

const modalskills = document.querySelectorAll('.skill__modal'),
     skillBtns = document.querySelectorAll('.skill__update'),
    skillCloses = document.querySelectorAll('.skill__modal-close')

let moc= function(modalClick) {
    modalskills[modalClick].classList.add('skill-update')
}

skillBtns.forEach((skillBtn, i) => {
    skillBtn.addEventListener('click', () => {
        moc(i)
    })
})

skillCloses.forEach((skillClose) => {
   skillClose.addEventListener("click", () => {
        modalskills.forEach((modalskill) => {
            modalskill.classList.remove("skill-update")
        })
    })
})



 </script>
</body>

</html>
