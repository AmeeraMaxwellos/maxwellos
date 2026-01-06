<?php  
$pageTitle = "Careers at MaxwellOS | Join a Leading IT Company in Qatar";
$metaDescription = "Explore career opportunities at MaxwellOS, a leading IT company in Qatar offering IT solutions, software development, and marketing services. Build your future with us.";


include "../common/header.php"; ?>

<section id="page-banner" class="no-pad">
	<h1 class="page-title" style="color: black !important;">Careers</h1>
    <img src="<?php echo $BASE_URL;?>/assets/images/careers.jpg" alt=""/>
</section>
<section id="about" class="col-flex gap-3">
    <div class="row-flex m-col-flex l-col-flex ai-c same gap-5vw">
        <div class="left">
            <img class="img-responsive" src="<?php echo $BASE_URL;?>/assets/images/careerside.jpg" alt="career" />
        </div>
        <div class="right">
            <div class="feature-list">
                <div class="card">
                    <div class="image-block">
                        <img class="img-responsive" src="<?php echo $BASE_URL;?>/assets/images/team-work.png" alt="team work" />
                    </div>
                    <h3>Team Work</h3>
                    <p>Teamwork isn't just a buzzword.It's the foundation of our success. Achievements are made through collaboration and collective effort.</p>
                </div>
                <div class="card">
                    <div class="image-block">
                        <img class="img-responsive" src="<?php echo $BASE_URL;?>/assets/images/Passion.png" alt="Passion" />
                    </div>
                        
                    <h3>Passion</h3>
                    <p>Passion drives us to go above and beyond in everything we do. We are passionate about making a difference in all our endeavors.</p>
                </div>
                <div class="card">
                    <div class="image-block">
                        <img class="img-responsive" src="<?php echo $BASE_URL;?>/assets/images/innovation.png" alt="innovation" />
                    </div>
                    <h3>Innovation</h3>
                    <p>Innovation is the key to staying ahead in today's fast-paced world. Dare to be different in all areas of business from each other.</p>
                </div>
                <div class="card">
                    <div class="image-block">
                        <img class="img-responsive" src="<?php echo $BASE_URL;?>/assets/images/respect.png" alt="Respect" />
                    </div>
                    <h3>Respect</h3>
                    <p>Respect is at the core of our culture. Our commitment to respect extends to our clients, partners, and community.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="career-contact" >
    <h2 class="txt-center w-txt">First step to work with us...</h2>
<div class="row-flex same m-col-flex gap-5vw wm-800px m-auto p-2">
    <div class="col-flex ">
        <form id="contactForm" class="col-flex default" action="<?php echo $BASE_URL;?>form/career.php" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <input type="text" id="name" name="name" placeholder="Name *" required="" class="form-field-validate" data-validate="onlyalphabets|minchars_3" data-required="true">
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
                    <select name="country" id="countryName" class="country-select" required="" class="form-field-validate"  data-required="true">
                        <!-- <option value="" selected disabled>Preferred Country *</option> -->
                        <option value="Qatar" selected="">Qatar</option>
                        <option value="Bahrain" >Bahrain</option>
                        <option value="Kuwait" >Kuwait</option>
                        <option value="Oman" >Oman</option>
                        <option value="Saudi Arabia" >Saudi Arabia</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                    </select>
                    <span class="error_txt"></span>
                </div>
                <div class="input-group">
                    <select name="experience" id="experienceItem" required=""  class="form-field-validate"  data-required="true">
                        <option value="" selected="" disabled="">Experience *</option>
                        <option value="0 years">0 years</option>
                        <option value="1 years">1 years</option>
                        <option value="2 years">2 years</option>
                        <option value="3 years">3 years</option>
                        <option value="4 years">4 years</option>
                        <option value="5 years+">5 years +</option>
                    </select>
                    <span class="error_txt"></span>
                </div>
            </div>
            <div class="row-flex">
                <div class="input-group">
                    <select name="jobType" id="jobType" required="" class="form-field-validate"  data-required="true">
                        <option value="" selected="" disabled="">Job Type *</option>
                        <option value="Part time">Part time</option>
                        <option value="Full time">Full time</option>
                    </select>
                    <span class="error_txt"></span>
                </div>
                <div class="input-group">
                    <select name="jobCategory"  required="" class="form-field-validate"  data-required="true">
                        <option value="" selected="" disabled="">Job Category *</option>
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
                
            </div>
            <div class="input-group">
                <textarea name="coverletter" rows="3" placeholder="Cover Letter *" required="" class="form-field-validate" data-validate="minchars_10" data-required="true"></textarea>
                <span class="error_txt"></span>
            </div>
            <div class="input-group">
                <div class="resume-upload txt-center" >
                    <a href="javascript:void(0)">
                    <img src="<?php echo $BASE_URL;?>/assets/images/file-upload.png" alt="" class="m-auto  m-60"/>
                    <span class="w-txt" id="filename">Click Here To Upload Your Resume</span>
                    </a>
                </div>
                    <input id="resume" type="file" name="resume" placeholder="resume *" required="" accept=".pdf, .doc, .docx" class="form-field-validate"  data-required="true">
                    <span class="error_txt"></span>
                </div>
                

                
            <div class="input-group row-flex jc-e txt-right">
                <button class="submit-button row-flex ai-c gap-1" type="submit">Apply Now <svg width="29" height="13" viewBox="0 0 29 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<line x1="22.3143" y1="0.527867" x2="28.4757" y2="6.74628" stroke="black" stroke-width="1.34123"/>
<line x1="28.4764" y1="6.03109" x2="22.3149" y2="12.2495" stroke="black" stroke-width="1.34123"/>
<line y1="6.18927" x2="27.1338" y2="6.18927" stroke="black" stroke-width="1.33508"/>
</svg></button>
            </div>
        </form>
    </div>
</div>
</section>
<?php  include "../common/footer.php"; ?>