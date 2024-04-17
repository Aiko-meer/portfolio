/*=============== SHOW SIDEBAR ===============*/
const navMenu = document.getElementById('sidebar');
const navToggle = document.getElementById('nav-toggle');
const navClose = document.getElementById('nav-close');

/* Validate If Constant Exists */
if (navToggle) {
    navToggle.addEventListener("click", () => {
        navMenu.classList.toggle('show-sidebar'); // Use toggle to handle show/hide functionality
    });
}

/* Validate If Constant Exists */
if (navClose) {
    navClose.addEventListener("click", () => {
        navMenu.classList.remove('show-sidebar');
    });
}


/*=============== SKILLS TABS ===============*/
const tabs =document.querySelectorAll('[data-target]'),
      tabContent = document.querySelectorAll('[data-content]')
           
tabs.forEach(tab => {
    tab.addEventListener("click", () => {
        const target = document.querySelector(tab.dataset.target)

        tabContent.forEach(tabContents => {
            tabContents.classList.remove('skills__active')
        })
        
        target.classList.add('skills__active')

        tabs.forEach(tab => {
            tab.classList.remove('skills__active')
        })

        tab.classList.add('skills__active')
    })
})

/*=============== MIXITUP FILTER PORTFOLIO ===============*/
let mixerPortfolio =mixitup('.work__container', {
    selectors: {
        target: '.work__card'
    },
    animation: {
        duration: 300
    }
});

/*===== Link Active Work =====*/
const linkWork = document.querySelectorAll('.work__item')

function activeWork() {
    linkWork.forEach(l=> l.classList.remove('active-work'))
    this.classList.add('active-work')
}

linkWork.forEach(l=> l.addEventListener("click",activeWork))


linkWork.forEach(l=> l.addEventListener("click",activeWork))

/*===== Work Popup =====*/
document.addEventListener("click", (e) => {
    if(e.target.classList.contains("work__button")) {
        togglePortfolioPopup();
        portfolioItemDetails(e.target.parentElement);
    }
})

function togglePortfolioPopup(){
    document.querySelector(".portfolio__popup").classList.toggle("open");
}

document.querySelector(".portfolio__popup-close").addEventListener("click",togglePortfolioPopup)

function portfolioItemDetails(portfolioItem){
    document.querySelector(".pp__thumbnail img").src = portfolioItem.querySelector(".work__img").src;
    document.querySelector(".portfolio__popup-subtitle span").innerHTML = portfolioItem.querySelector(".work__title").innerHTML;
    document.querySelector(".portfolio__popup-body").innerHTML = portfolioItem.querySelector(".portfolio__item-details").innerHTML;
}


/*=============== SERVICES MODAL ===============*/
const modalViews = document.querySelectorAll('.services__modal'),
      modelBtns = document.querySelectorAll('.services__button'),
      modalCloses = document.querySelectorAll('.services__modal-close')

let modal = function(modalClick) {
    modalViews[modalClick].classList.add('active-modal')
}

modelBtns.forEach((modelBtn, i) => {
    modelBtn.addEventListener('click', () => {
        modal(i)
    })
})

modalCloses.forEach((modalClose) => {
    modalClose.addEventListener("click", () => {
        modalViews.forEach((modalView) => {
            modalView.classList.remove("active-modal")
        })
    })
})

/*=============== Update MODAL ===============*/
const modalUpdates = document.querySelectorAll('.update__modal'),
      updateBtns = document.querySelectorAll('.home__button'),
     updateCloses = document.querySelectorAll('.update__modal-close')

let modals = function(modalClick) {
    modalUpdates[modalClick].classList.add('update-modal')
}

updateBtns.forEach((updateBtn, i) => {
    updateBtn.addEventListener('click', () => {
        modals(i)
    })
})

updateCloses.forEach((updateClose) => {
    updateClose.addEventListener("click", () => {
        modalUpdates.forEach((modalUpdate) => {
            modalUpdate.classList.remove("update-modal")
        })
    })
})

/*=============== Update MODAL ===============*/
const modalinfos = document.querySelectorAll('.info__modal'),
      infoBtns = document.querySelectorAll('.info__button'),
    infoCloses = document.querySelectorAll('.info__modal-close')

let moda = function(modalClick) {
    modalinfos[modalClick].classList.add('update-modal')
}

infoBtns.forEach((infoBtn, i) => {
    infoBtn.addEventListener('click', () => {
        moda(i)
    })
})

infoCloses.forEach((infoClose) => {
    infoClose.addEventListener("click", () => {
        modalinfos.forEach((modalinfo) => {
            modalinfo.classList.remove("update-modal")
        })
    })
})

/*=============== social media  MODAL ===============*/
const modalsocials = document.querySelectorAll('.social__modal'),
      socialBtns = document.querySelectorAll('.social__update'),
    socialCloses = document.querySelectorAll('.social__modal-close')

let mods= function(modalClick) {
    modalsocials[modalClick].classList.add('social-update')
}

socialBtns.forEach((socialBtn, i) => {
    socialBtn.addEventListener('click', () => {
        mods(i)
    })
})

socialCloses.forEach((socialClose) => {
    socialClose.addEventListener("click", () => {
        modalsocials.forEach((modalsocial) => {
            modalsocial.classList.remove("social-update")
        })
    })
})

/*=============== whatsapp  MODAL ===============*/
const modalapps = document.querySelectorAll('.whatsapp__modal'),
      appBtns = document.querySelectorAll('.whatsapp__update'),
    appCloses = document.querySelectorAll('.whatsapp__modal-close')

let mod= function(modalClick) {
    modalapps[modalClick].classList.add('whatsapp-update')
}

appBtns.forEach((appBtn, i) => {
    appBtn.addEventListener('click', () => {
        mod(i)
    })
})

appCloses.forEach(( appClose) => {
    appClose.addEventListener("click", () => {
        modalapps.forEach((modalapp) => {
            modalapp.classList.remove("whatsapp-update")
        })
    })
})

/*=============== whatsapp  MODAL ===============*/
const modalmails = document.querySelectorAll('.email__modal'),
      mailBtns = document.querySelectorAll('.email__update'),
    mailCloses = document.querySelectorAll('.email__modal-close')

let mo= function(modalClick) {
    modalmails[modalClick].classList.add('email-update')
}

mailBtns.forEach((mailBtn, i) => {
    mailBtn.addEventListener('click', () => {
        mo(i)
    })
})

mailCloses.forEach((mailClose) => {
    mailClose.addEventListener("click", () => {
        modalmails.forEach((modalmail) => {
            modalmail.classList.remove("email-update")
        })
    })
})

/*=============== about MODAL ===============*/
const modalabouts = document.querySelectorAll('.about__modal'),
      aboutBtns = document.querySelectorAll('.about__button'),
     aboutCloses = document.querySelectorAll('.about__modal-close')

let mos = function(modalClick) {
    modalabouts[modalClick].classList.add('about-update')
}

aboutBtns.forEach((aboutBtn, i) => {
    aboutBtn.addEventListener('click', () => {
        mos(i)
    })
})

aboutCloses.forEach((aboutClose) => {
    aboutClose.addEventListener("click", () => {
        modalabouts.forEach((modalabout) => {
            modalabout.classList.remove("about-update")
        })
    })
})



/*=============== SWIPER TESTIMONIAL ===============*/
    let swiper = new Swiper(".testimonials__container", {
      spaceBetween: 24,
      loop:true,
      grabCursor:true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        576: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 48,
        },
       
      },
    });
  

/*=============== INPUT ANIMATION ===============*/
const inputs = document.querySelectorAll(".input");

function focusFunc() {
    let parent = this.parentNode;
    parent.classList.add("focus");
}

function blurFunc() {
    let parent = this.parentNode;
    if (this.value == "") {
        parent.classList.remove("focus");
    }
}

inputs.forEach((input) => {
    // Check if input already has a value when the page loads
    if (input.value.trim()) {
        // If it has a value, add the "focus" class to its parent container
        input.parentNode.classList.add("focus");
    }
    
    // Add event listeners for focus and blur events
    input.addEventListener("focus", focusFunc);
    input.addEventListener("blur", blurFunc);
});


/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
//get all sections that have an id defined
const sections = document.querySelectorAll("section[id]");

//add an event listener listening for scroll
window.addEventListener("scroll", navHighlighter);

function navHighlighter()
{
    //get curent scroll postion
    let scrollY = window.pageYOffset;
    //now we loop through section to get heght, top and ID values for each
    sections.forEach(current => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 50,
        sectionId = current.getAttribute("id");
        /* if our current scroll postion enters the space where current section on screen is, corresponding navigation
        link ,else remove it
        -to know which link neeed and active class we use sectionId variables we are getting while looping through section as an selector
        */
        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight)
        {
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add("active-link")
        }
        else
        {
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove("active-link")
        }
    })
}

/*=============== SHOW SCROLL UP ===============*/
/*=============== upload ===============*/
const selectImages = document.querySelectorAll('.select-image');
const inputFiles = document.querySelectorAll('input[type="file"]');
const imgAreas = document.querySelectorAll('.img-area');

selectImages.forEach((selectImage, index) => {
    selectImage.addEventListener('click', function () {
        const inputFile = inputFiles[index];
        inputFile.click();
    });
});

inputFiles.forEach((inputFile, index) => {
    inputFile.addEventListener('change', function () {
        const image = this.files[0];
        const imgArea = imgAreas[index];
        if (image.size < 10000000) {
            const reader = new FileReader();
            reader.onload = () => {
                const allImgs = imgArea.querySelectorAll('img');
                allImgs.forEach(item => item.remove());
                const imgUrl = reader.result;
                const img = document.createElement('img');
                img.src = imgUrl;
                imgArea.appendChild(img);
                imgArea.classList.add('active');
                imgArea.dataset.img = image.name;
            };
            reader.readAsDataURL(image);
        } else {
            alert("Image size more than 10MB");
        }
    });
});




// modal award

// portfolio-modal.js

$(document).ready(function () {
    // Add click event listener to portfolio cards
    $('.work__card').on('click', function () {
        const portfolioId = $(this).data('portfolio-id');
        openPortfolioModal(portfolioId);
    });

    // Add click event listener to close button
    $('#portfolioModals').on('click', '.portfolio__popup-close', function () {
        closePortfolioModal();
    });

    function openPortfolioModal(portfolioId) {
        // Fetch additional data based on the portfolioId using AJAX or use the existing data
        const portfolioData = {
            title: 'App for Technology & services',
            description: 'Lorem ipsum, dolor sit amet consectet Earum impedit vluptatibus minima.',
            technologies: 'html css',
            role: 'Frontend',
            viewLink: 'www.domain.com',
            created: '4 Dec 2020',
        };

        // Create the modal content
        const modalContent = `
            <div class="portfolio__popup">
                <div class="portfolio__popup-inner">
                    <div class="portfolio__popup-content grid">
                        <span class="portfolio__popup-close"><i class="uil uil-times"></i></span>
                        <div class="portfolio__popup-info">
                            <div class="portfolio__popup-subtitle">Featured - <span>${portfolioData.technologies}</span></div>
                            <div class="portfolio__popup-body">
                                <h3 class="details__title">${portfolioData.title}</h3>
                                <p class="details__description">${portfolioData.description}</p>
                                <ul class="details__info">
                                    <li>Created - <span>${portfolioData.created}</span></li>
                                    <li>Technologies - <span>${portfolioData.technologies}</span></li>
                                    <li>Role - <span>${portfolioData.role}</span></li>
                                    <li>View - <span><a href="${portfolioData.viewLink}" target="_blank">${portfolioData.viewLink}</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Append the modal to the portfolioModals container
        $('#portfolioModals').html(modalContent);
    }

    function closePortfolioModal() {
        // Remove the modal content from the portfolioModals container
        $('#portfolioModals').html('');
    }
});




   



