$(window).on('load', function () {
    
    const header = document.querySelector('header');
    const headerHeight = header.offsetHeight + 'px';
    document.documentElement.style.setProperty('--header-height', headerHeight);


   
    $('.card p').matchHeight();



    $('#client-says').owlCarousel({
        autoplay:true,
        loop: true,
        dots: false,
        nav: true,
        navText: ["<img src='./assets/images/prev.webp' alt='arrow'>","<img src='./assets/images/arrow-small-white.webp' alt='arrow'>"],
        responsive: {
            0: {
                items: 1,
                margin: 32,
            },
            600: {
                items: 1,
                margin: 32,
            },
            800: {
                items: 2,
                margin: 32,
            },
            1024: {
                items: 2,
                margin: 32,
            },
            1200: {
                items: 3,
                margin: 32,
            },
            1450: {
                items: 4,
                margin: 32,
            }
        },
    });
    $('#client-logos').owlCarousel({
        autoplay:true,
        loop: true,
        dots: false,
        nav: false,
        smartSpeed: 5000,
        slideTransition: 'linear',
        responsive: {
            0: {
                items: 2,
                margin: 32,
            },
            600: {
                items: 3,
                margin: 32,
            },
            800: {
                items: 4,
                margin: 32,
            },
            1000: {
                items: 5,
                margin: 32,
            },
            1500: {
                items: 8,
                margin: 60,
            }
        },
    });
})

class Flip {
    constructor(el) {
      this.el = $(el);  
      this.currentStep = 0;  
      console.log("Created new Flip");
  
      $('.next').on('click', this.next.bind(this));  
    }
  
    next(event) {
      if (event) {
        event.preventDefault();  
      }
  
      const nextStepNum = this.currentStep + 1;  
      const currentStepEl = this.el.find(`.step${this.currentStep}`);  
      const nextStepEl = this.el.find(`.step${nextStepNum}`);  
  
      if (nextStepEl.length) {
        console.log('we found the next step', nextStepEl);
  
        currentStepEl.prev().removeClass('down');  
        currentStepEl.removeClass('set').addClass('down');  
        nextStepEl.addClass('set').removeClass('down');  
        nextStepEl.next().removeClass('down');  
  
        this.currentStep++;  
      } else {
        this.el.find(".step").removeClass('set');  
        this.el.find(`.step${this.currentStep}`).addClass('down');  
        this.el.find(`.step:not(.step${this.currentStep})`).removeClass('down');  
  
        this.currentStep = -1;  
        this.next();  
      }
    }
  }
  

  if(document.getElementById('flipper')){
          $(document).ready(function() {
        const f = new Flip(document.getElementById('flipper'));  
      
        // Automatically call 'next' every 1.5 seconds
        setInterval(function() {
          f.next();
        }, 2000);
      });
  }


  $(document).on('click','.menu-btn',function(e){
    e.preventDefault();
    $('.side-menu').addClass('show');
  });
  $(document).on('click','.close-menu',function(e){
    e.preventDefault();
    $('.side-menu').removeClass('show');
  });

  $(document).on('click','.get-a-quote',function(e){
    e.preventDefault();
    $('body, html').animate({
        scrollTop: $("#contact").offset().top - 100
    }, 600);
  });
 $(document).on('click','.get-start',function(e){
    e.preventDefault();
    $('body, html').animate({
        scrollTop: $("#contact").offset().top - 100
    }, 600);
  });
  
  $(document).on('click','.resume-upload a',function(e){
    e.preventDefault();
    document.getElementById('resume').click(); 
  });
  const fileInput = document.getElementById('resume');
  if(fileInput){
     const fileNameDisplay = document.getElementById('filename');

    // Listen for changes on the file input
    fileInput.addEventListener('change', function() {
        const file = fileInput.files[0]; // Get the first file (there might be more if 'multiple' attribute is used)
        if (file) {
            fileNameDisplay.textContent = `${file.name}`; // Display the file name
        } else {
            fileNameDisplay.textContent = 'Click Here To Upload Your Resume'; // Clear the display if no file is selected
        }
    }); 
    
  }
  
  
function onlyalphabets(val){
         if(!/^[a-zA-Z .]*$/g.test(val)){
             return false;
         }
        return true;
    }
 function onlynumeric(val){
         if(!/^[0-9]*$/g.test(val)){
             return false;
         }
        return true;
    }   
function phonenumber(val){
    if(!/^[0-9 ]{10,20}$/i.test(val)){
        return false;
    }
    return true;
}
    
function email(val){
    if(!/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(val)){
        return false;
    }
    return true;
}

function minchars(val, count){
    return val.length >= count;
}

function maxchars(val, count){
    return val.length <= count;
}

function chars(val, count){
    return val.length <= count;
}

function minnums(val, count){
    return val.length >= count;
}

function maxnums(val, count){
    return val.length <= count;
}

function nums(val, count){
    return val.length <= count;
}

function parse(str) {
    var args = [].slice.call(arguments, 1),
        i = 0;
    return str.replace(/%s/g, () => args[i++]);
}


function check_datetime(str){
  return new Date().getTime() < Date.parse(str);
}

$(document).on('blur','.form-field-validate',function(){
    console.log('validating...')
    var form_id = $(this).closest('form').attr('id');
    var required = $(this).attr('data-required');
    var validatetype = $(this).attr('data-validate');
    var length =1;
    if(validatetype!=undefined){
        var validatetypeoption = validatetype.split('|');
        length = validatetypeoption.length;
    }

    
    var value = $(this).val();

    var error_msg = {
        'required_error' : "this field is required",
        'onlyalphabets' : 'Please enter a valid input',
        'onlynumeric' : 'Please enter a valid input',
        'phonenumber' : 'Please enter a valid phone number',
        'email' : 'Please enter a valid email',
        'minchars':'minimum length should be  %s characters ',
        'maxchars':'maximum length should be  %s characters ',
        'chars':'character length should be  %s characters ',
        'minnums':'minimum length should be  %s numbers ',
        'maxnums':'maximum length should be  %s numbers ',
        'nums':'number length should be  %s',
        'check_datetime':'Please select a valid appointment Date & Time'
    }

    var err_msg ="";

    
    if(required=="true"){
        if(value==""){
            err_msg = error_msg['required_error'];
            
        }
    }
      
    
    
    if(validatetype!=undefined && err_msg=="" ){
        validatetypeoption.forEach(function(element){
            if(element.split('_').length == 1){
                if(window[element](value)==false && err_msg=="" ){
                    err_msg = error_msg[element];
                }  
            }else{
                var values = element.split('_');
                var functionname = values[0];
                var functionaruguments = values[1];
                if(window[functionname](value,functionaruguments)==false && err_msg=="" ){
                    err_msg = parse(error_msg[functionname], functionaruguments) ;
                } 
            }
        });
    }  
    if(err_msg!=""){
        $(this).closest('.input-group').find('.error_txt').html(err_msg);
        $(this).closest('.input-group').find('.error_txt').addClass("active");
        $('#'+form_id+' input[type="submit"]').prop('disabled', true);
    }else{
        $(this).closest('.input-group').find('.error_txt').html("");
        $(this).closest('.input-group').find('.error_txt').removeClass("active");
        $('#'+form_id+' input[type="submit"]').prop('disabled', false);
    }
});


  
  
    
    


