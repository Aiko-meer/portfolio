<script>
    @if(session('success'))
        swal("Success", "{{ session('success') }}", "success");
    @endif
</script>
<section class="contact section" id="contact">
            <h2 class="section__title" data-heading="Get in touch">Contact Me</h2>

            <div class="contact__container container grid">
                <div class="contact__content">
                    <div class="contact__info">
                        @foreach ($contact as  $item)
                        <form action="{{route('contact.update', ['id' =>$item->id] )}}" method="post">
                            @csrf
                            @method('put') 
                        <div class="contact__card">
                            <i class="uil uil-envelope-edit contact__card-icon"></i>
                            <h3 class="contact__card-title">{{$item->type}}</h3>
                            <input type="text" name="site" value="{{$item->site}}" class="input"> 
                            <span class="contact__card-data">{{$item->site}}</span>
                            <button type="submit" class="button"><i class="uil uil-navigator button__icon"></i>
                                Update</button>
                        </div>
                        </form>
                        @endforeach
                    </div>
                </div>

                <div class="contact__content">
                   
                        <div class="input__container">
                            <input type="text" id="username" class="input">
                            <label for="">Username</label>
                            <span>Username</span>
                        </div>

                        <div class="input__container">
                            <input type="Email" id="email" class="input">
                            <label for="">Email</label>
                            <span>email</span>
                        </div>

                        <div class="input__container">
                            <input type="tel" id="phone" class="input">
                            <label for="">Phone</label>
                            <span>Phone</span>
                        </div>

                        <div class="input__container textarea">
                            <textarea id="message" id=""  class="input"></textarea>
                            <label for="">Message</label>
                            <span>Message</span>
                        </div>

                        <button onclick="sendMail()" class="button"><i class="uil uil-navigator button__icon"></i>
                            Contact Me</button>
                    
                </div>
            </div>
        </section>
        <script>
            function sendMail() {
                var params = {
                    name: document.getElementById("username").value,
                    email: document.getElementById("email").value,
                    contact: document.getElementById("phone").value,
                    message: document.getElementById("message").value,
                };
        
                const serviceID = "service_fr3lt44";
                const templateID = "template_570hmp3";
        
                emailjs.send(serviceID, templateID, params)
                    .then(function() {
                        // Show success message using SweetAlert
                        swal("Success!", "Your OTP is generated. Please check your email.", "success");
                    })
                    .catch(function(error) {
                        // Show error message using SweetAlert
                        swal("Error!", "Failed to send email: " + error, "error");
                    });
            }
        </script>
        
            
           
    
            <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
       (function(){
        emailjs.init("2YiBp9tQp_KT3f4XQ");
       })();
    </script>