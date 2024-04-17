<!DOCTYPE html>
<html lang="en">
    @include('admin.components.header')
    <body>
        @include('admin.components.sidebartable')

   


    <link rel="stylesheet" href="{{ asset('css/table.css')}}">
    <main class="main" id="customers_table">
        <section class="table__header">
            <h1 class="workk__update">
                Add
            </h1>
          
                <!-- Display SweetAlert message -->
<script>
    @if(session('success'))
        swal("Success", "{{ session('success') }}", "success");
    @endif
</script>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th >Project Name</th>
                        <th>Image</th>
                        <th>Created</th>
                        <th> Role </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($client as $item )
                       
                  
                 
                    <tr>
                        <td >{{$item->name}}</td>
                        <td>
                            
                                
                                    <img id="images" src="{{ asset('upload/'.$item->image  ) }}" alt="About Me">
                                
                            </td>
                        <td >{{$item->date}}</td>
                        <td >{{$item->role}}</td>
                        <td><div class="" style="display: flex; justify-content:center; gap:10px " >
                            <button class="education__button"><i class="uil uil-edit"></i></button> 
                            <div class="education__item-details">
                                <form action="{{route('client.update', ['id' =>$item->id] )}}" method="post">
                                    @csrf 
                                    @method('put')  
                                <h3 class="education__title">Testomonial</h3>
                                <h3 class="education__title">Name</h3>
                                <div class="input__education">
                                    <input type="text" class="input_educations" name="name" placeholder="{{$item->name}}"  value="{{$item->name}}">
                                    
                                    <span>name</span>
                                </div>
                                <h3 class="education__title">Role</h3>
                                <div class="input__education">
                                    <input type="text" class="input_educations" name="role" placeholder="{{$item->role}}"  value="{{$item->role}}">
                                    
                                    <span>name</span>
                                </div>
                                <p class="education__description">
                                </p>

                                <h3 class="education__title">Date</h3>
                                <div class="input__education">
                                    <input type="text" class="input_educations" name="date" placeholder="{{$item->date}}" value="{{$item->date}}">
                                    
                                    <span>name</span>
                                </div>

                               

                                <h3 class="education__title">Description</h3>
                                <div class="input__education">
                                    <textarea name="description" id="" placeholder="description"  class="input" value="{{$item->description}}">{{$item->description}}</textarea>
                                    
                                    <span>name</span>
                                </div>
                                <button type="submit" class="button"><i class="uil uil-navigator button__icon"></i>
                                    Update</button>
                            </form>
                            </div>
                          
                            <form action="" method="post">
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
                <div class="education__popup-subtitle">Update - <span>Work</span></div>
                <div class="education__popup-body">
                   
                </div>
            </div>
        </div>
    </div>
</div>

   

      <!-- Portfolio image Popup Model-->
      <div class="workimage__popup">
        <div class="workimage__popup-inner">
            <div class="workimage__popup-content grid">
                <span class="workimage__popup-close"><i class="uil uil-times"></i></span>
                <div class="workimage__popup-info">
                    <div class="workimage__popup-subtitle">Update - <span>Work</span></div>
                    <div class="workimage__popup-body">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    



<div class="workk__modal">
    <div class="workk__modal-content">
        <i class="uil uil-times workk__modal-close"></i>

        <h3 class="services__modal-title">Add Projects</h3>
       
        <div class="contact__container container grid">
            <div class="contact__content">
               
                
                            <div class="img-area" data-img="">
                                <i class='bx bxs-cloud-upload icon'></i>
                                <h3>Upload Image</h3>
                                <p>Image size must be less than <span>2MB</span></p>
                            </div>
                            <button type class="select-image">Select Image</button>
                           
            </div>

       

            <div class="contact__content">
                <form action="{{route('client.add')}}" method="POST" class="contact-form" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <input type="file" id="file" accept="image/*" name="image">
                    <div class="input__container">
                        <input type="text" class="input" name="name" placeholder="Client name">
                        <span>Client Name</span>
                    </div>

                  

                    <div class="input__container">
                        <input type="text" class="input" name="role" placeholder="Role">
                        
                        <span>Client Role</span>
                    </div>

                    <div class="input__container">
                        <input type="Date" class="input" name="date" placeholder="Date">
                        
                        <span>Date</span>
                    </div>

                    <div class="input__container textarea">
                        <textarea name="description" id="" placeholder="description"  class="input"></textarea>
                        <span>Description</span>
                    </div>

                    <button type="submit" class="button"><i class="uil uil-navigator button__icon"></i>
                        Add</button>
                </form>
            </div>
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

/*===== Work Popup =====*/
document.addEventListener("click", (e) => {
    if(e.target.classList.contains("workimage__button")) {
        toggleWorkPopup();
        WorkItemDetails(e.target.parentElement);
    }
})

function toggleWorkPopup(){
    document.querySelector(".workimage__popup").classList.toggle("open");
}

document.querySelector(".workimage__popup-close").addEventListener("click", toggleAwardPopup)

function WorkItemDetails(workItem){
  
    document.querySelector(".workimage__popup-subtitle span").innerHTML = workItem.querySelector(".workimage__title").innerHTML;
    document.querySelector(".workimage__popup-body").innerHTML = workItem.querySelector(".image-containers").innerHTML;
}
});





const modaleducations = document.querySelectorAll('.workk__modal'),
     eduBtns = document.querySelectorAll('.workk__update'),
    eduCloses = document.querySelectorAll('.workk__modal-close')

let mox= function(modalClick) {
    modaleducations[modalClick].classList.add('workk-update')
}

eduBtns.forEach((eduBtn, i) => {
    eduBtn.addEventListener('click', () => {
        mox(i)
    })
})

eduCloses.forEach((eduClose) => {
    eduClose.addEventListener("click", () => {
        modaleducations.forEach((modaleducation) => {
            modaleducation.classList.remove("workk-update")
        })
    })
})

const selectImage = document.querySelector('.select-image');
const inputFile = document.querySelector('#file');
const imgArea = document.querySelector('.img-area');

selectImage.addEventListener('click', function () {
	inputFile.click();
})

inputFile.addEventListener('change', function () {
	const image = this.files[0]
	if(image.size < 10000000) {
		const reader = new FileReader();
		reader.onload = ()=> {
			const allImg = imgArea.querySelectorAll('img');
			allImg.forEach(item=> item.remove());
			const imgUrl = reader.result;
			const img = document.createElement('img');
			img.src = imgUrl;
			imgArea.appendChild(img);
			imgArea.classList.add('active');
			imgArea.dataset.img = image.name;
		}
		reader.readAsDataURL(image);
	} else {
		alert("Image size more than 2MB");
	}
})

 </script>
</body>

</html>
