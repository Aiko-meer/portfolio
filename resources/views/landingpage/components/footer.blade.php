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

    <!--========== SCROLL UP ==========-->
    

    <!--========== MIXITUP FILTER ==========-->
    <script src="{{ asset('js/mixitup.min.js') }}"></script>

    <!--========== SWIPER JS ==========-->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    
    <!--========== MAIN JS ==========-->
    <script src="{{ asset('js/main.js') }}"></script>
    

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

     </script>
</body>

</html>