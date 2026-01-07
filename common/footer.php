<?php
$class="";
if(isset($PAGE) && $PAGE=='contact-us'){
 $class="full-height"; 
}
?>
<section id="contact" class="<?php echo $class;?>" >
<div class="row-flex same m-col-flex gap-5vw ">
    <div class="left col-flex gap-5vw">
        <div class="col-flex ">
            <div class="row-flex ai-c jc-sb section-title-block">
                <h2>Get In <br><strong>Touch</strong></h2>
                <!-- <a  href="/services" class="row-flex ai-c jc-e gap-1 view-all">Explore <img src="./assets/images/arrow.png" alt="arrow"></a> -->
            </div>
        </div>
        <div class="col-flex">
            <div class="col-flex info-block">
                <div class="row-flex gap-1 jc-s">
                    <div class="image-block">
                        <img src="<?php echo $BASE_URL;?>/assets/images/location.webp" alt="location" />
                    </div>
                    <address>
                        <a class="office-address" href="https://maps.app.goo.gl/d2tonRPCcLtkirrK7?g_st=iw" target="_blank">
                        Near National Museum , Building No:08<br />
                        Ground Floor , Office No:2<br />
                        MKM Tower , Doha, Qatar<br />
                        </a>
                    </address>
                </div>
                <div class="col-flex">
                    <div class="row-flex gap-1 ai-c jc-s">
                        <div class="image-block"><img src="<?php echo $BASE_URL;?>/assets/images/phone.webp" alt="mobile" /></div>
                        <a class="office-address" href="tel:+974 3120 7350" target="_blank">+974 3120 7350</a> ,
                        <a class="office-address" href="tel:+974 3030 5266" target="_blank">+974 3030 5266</a> 

                    </div>
                </div>
                <div class="col-flex">
                    <div class="row-flex ai-c gap-1 jc-s">
                        <div class="image-block"><img src="<?php echo $BASE_URL;?>/assets/images/email.webp" alt="email" /></div>
                        <a class="office-address" href="mailto:info@maxwellos.com" target="_blank">info@maxwellos.com</a>
                    </div>
                </div>
            </div>
            <div class="map-container" style="width:90%;margin: 1rem 2rem 0 0; border-radius: 1rem; overflow: hidden; box-shadow: 0px 0px 0px 0px #0000009e">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.017915118663!2d51.5437786!3d25.2891872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c50e42972dcd%3A0x8c30e809dcb926e6!2sMaxwell%20Online%20Service!5e0!3m2!1sen!2s!4v169876543210!5m2!1sen!2s"
            width="100%" 
            height="250" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="Maxwell Online Service Office Location">
        </iframe>
    </div>
        </div>
    </div>
    <div class="right col-flex ">
        <form id="contactForm" class="col-flex default" action="<?php echo $BASE_URL;?>form/contact.php" method="post">
            <div class="input-group">
                <input type="text" id="name"  name="name" placeholder="Name *" required="" class="form-field-validate" data-validate="onlyalphabets|minchars_3" data-required="true">
                <span class="error_txt"></span>
            </div>
            <div class="row-flex">
                <div class="input-group">
                    <input id="emailId" type="email" name="email" placeholder="Email *" required="" class="form-field-validate" data-validate="email" data-required="true">
                    <span class="error_txt"></span>
                    
                </div>
                <div class="input-group">
                    <input id="phoneId" type="tel" name="phone" placeholder="Phone *" required="" class="form-field-validate" data-validate="phonenumber|minnums_8|maxnums_20" data-required="true">
                    <span class="error_txt"></span>
                </div>
            </div>

            <div class="row-flex">
                <div class="input-group">
                    <input type="text" id="companyName" name="companyName" placeholder="Company Name" class="form-field-validate"  data-required="true">
                    <span class="error_txt"></span>
                </div>
                <div class="input-group">
                    <select name="requirementType" id="requirementItem" required="">
                        <option value="" selected="" disabled="">Select Service *</option>
                        <option value="ERP Next">ERP Next</option>
                        <option value="Web Development">Web Development</option>
                        <option value="App Development">App Development</option>
                        <option value="E-Commerce">E-Commerce</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Branding">Branding</option>
                        <option value="Pro Services">Pro Services</option>
                        <option value="SEO">SEO</option>
                        <option value="Others">Others</option>
                    </select>
                    <span class="error_txt"></span>
                </div>
            </div>
            <div class="input-group">
                <input type="text" name="subject" placeholder="Subject *" required="" class="form-field-validate" data-validate="minchars_3" data-required="true">
                <span class="error_txt"></span>
            </div>
            <div class="input-group">
                <textarea name="message" rows="3" placeholder="Your message *" required="" class="form-field-validate" data-validate="minchars_10" data-required="true"></textarea>
                <span class="error_txt"></span>
            </div>
            <div class="input-group row-flex jc-e txt-right">
                <button class="submit-button row-flex ai-c gap-1" type="submit">Send Message <img
                        src="<?php echo $BASE_URL;?>/assets/images/arrow-small-white.webp" alt="arrow"></button>
            </div>
        </form>
    </div>
</div>
</section>
</main>
<footer class="col-flex">
<div class="row-flex same top">
<div class=" row-flex jc-sb gap-5vw">
    <div class="col-flex wm-400px">
        <a href="/"><img src="<?php echo $BASE_URL;?>/assets/images/logo.webp" alt="logo" height="100" width="341" /></a>
        <p class="w-txt">Maxwell OS is a leading IT solutions provider in Qatar, dedicated to delivering innovative technology services tailored to meet the unique needs of businesses. 
            We specialize in a comprehensive range of offerings, including software development, system integration, cloud solutions, and IT consulting.
    </div>

    <div class="col-flex">
        <h3>Quick Links</h3>
        <div class="row-flex jc-sb ai-s gap-5vw">
            <div>
                <ul class="col-flex gap-1">
                    <li><a href="<?php echo $BASE_URL;?>services">Services</a></li>
                    <li><a href="<?php echo $BASE_URL;?>our-team">Our Team</a></li>
                    <li><a href="<?php echo $BASE_URL;?>careers">Careers</a></li>
                    <li><a href="<?php echo $BASE_URL;?>contact-us">Contact</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="col-flex">
        <h3>Services</h3>
        <div class="row-flex jc-s ai-s gap-5vw">
            <div>
                <ul class="col-flex gap-1">
                    <li><a href="<?php echo $BASE_URL;?>services/erp-next">ERP Next</a></li>
                    <li><a href="<?php echo $BASE_URL;?>services/web-development">Web Development</a></li>
                    <li><a href="<?php echo $BASE_URL;?>services/app-development">App Development</a></li>
                    <li><a href="<?php echo $BASE_URL;?>services/e-commerce">E-commerce</a></li>
                </ul>
            </div>
            <div>
                <ul class="col-flex gap-1">
                    <li><a href="<?php echo $BASE_URL;?>services/digital-marketing">Digital Marketing</a></li>
                    <li><a href="<?php echo $BASE_URL;?>services/branding">Branding</a></li>
                    <li><a href="<?php echo $BASE_URL;?>services/pro-services">PRO Services</a></li>
                    <li><a href="<?php echo $BASE_URL;?>services/seo">SEO</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-flex ">

        <!-- <div class="newsletter-group col-flex ">
            <h3>Stay in touch</h3>
            <p class="w-txt">Be the first to know about novelties and offers.</p>
            <form class="newsletter" action="<?php echo $BASE_URL;?>form/subscribe.php" method="POST">
                <input type="email" placeholder="@yourEmail" name="email" required />
                <button class="btn">Subscribe</button>
            </form>
            https://script.google.com/macros/s/AKfycbwMAI_D72sK4e4rnaO3kc1IZD3xjaAKWzaF1yKQKZqUtaD4ThUq2IRP5in3sshFPb4/exec
        </div> -->

        

        <div class="newsletter-group col-flex">
            <h3>Stay in touch</h3>
            <p class="w-txt">Be the first to know about novelties and offers.</p>
            <form class="newsletter" action="https://script.google.com/macros/s/AKfycbznF0PxhpGRnpFgUnkGoKXlML1uvcZGZU-jwDy6pZjhlNUX_7lIlFRxUy_VECgRbVEaQQ/exec" method="POST" onsubmit="return validateEmail()">
                <input type="email" placeholder="@yourEmail" name="email" id="email" required />
                <button class="btn" type="submit" style="cursor:pointer">Subscribe</button>
            </form>
            <p id="error-message" style="color: red; display: none;">Please enter a valid email address.</p>
        </div>



        <div class="socail-links-group col-flex">
            <h3>Follow Us On</h3>
            <ul class="socail-links">
                <li><a href="https://www.facebook.com/profile.php?id=61562772474485&mibextid=ZbWKwL"
                        target="_blank"><img src="<?php echo $BASE_URL;?>/assets/images/fb-w.webp" alt="facebook" /></a></li>
                <li><a href="https://www.instagram.com/maxwell_os_?igsh=NjBlbGwzOWw2amkw"
                        target="_blank"><img src="<?php echo $BASE_URL;?>/assets/images/insta-w.webp" alt="instagram" /></a></li>
                <li><a href="https://www.linkedin.com/in/maxwell-os-b88b9231a" target="_blank"><img
                            src="<?php echo $BASE_URL;?>/assets/images/linkedin-w.webp" alt="linkedin" /></a></li>
                <li><a href="https://x.com/Maxwelloserp" target="_blank"><img
                            src="<?php echo $BASE_URL;?>/assets/images/twitter.png" alt="twitter" /></a></li>
                <li><a href="https://www.snapchat.com/add/maxwellos123" target="_blank"><img
                            src="<?php echo $BASE_URL;?>/assets/images/snapchat.png" alt="snapchat" /></a></li>
        </div>
    </div>
</div>
</div>
<div class="bottom row-flex m-col-flex jc-sb">
<p>Copyright <?php echo date('Y'); ?>  © Maxwell Online Services.</p>
<div class="row-flex m-col-flex jc-e">
    <!--<a href="/terms-and-conditions">Terms and Conditions</a>-->
    <a href="<?php echo $BASE_URL;?>privacy">Privacy and Policy</a>
</div>
</div>
</footer>
<a href="https://wa.me/97430305266?text=Hello%20MaxwellOS%20" class="float" target="_blank">
<img class="img-responsive" src="<?php echo $BASE_URL;?>/assets/images/wa.png" alt="whatsapp">
</a>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?php echo $BASE_URL;?>/assets/scripts/owl.carousel.min.js"></script>
<script src="<?php echo $BASE_URL;?>/assets/scripts/maxwellos.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js" integrity="sha512-/bOVV1DV1AQXcypckRwsR9ThoCj7FqTV2/0Bm79bL3YSyLkVideFLE3MIZkq1u5t28ke1c0n31WYCOrO01dsUg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/intlTelInput.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script>
  const input = document.querySelector("#phoneId");
  window.intlTelInput(input, {
    loadUtilsOnInit: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/utils.js",
  });
  
  intlTelInput(input, {
  initialCountry: "auto",
  geoIpLookup: function(success, failure) {
    fetch("https://ipapi.co/json")
      .then(function(res) { return res.json(); })
      .then(function(data) { success(data.country_code); })
      .catch(function() { failure(); });
  },
  hiddenInput: function(telInputName) {
    return {
      phone: "phone_full",
      country: "country_code"
    };
  }
});



function validateEmail() {
        var email = document.getElementById("email").value;
        var errorMessage = document.getElementById("error-message");
        
        // Regular expression pattern for validating an email address
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        // Test the email input against the pattern
        if (!emailPattern.test(email)) {
            errorMessage.style.display = "block"; // Show error message if email is invalid
            return false; // Prevent form submission
        }

        errorMessage.style.display = "none"; // Hide error message if email is valid
        return true; // Allow form submission
    }

  

</script>
</html>