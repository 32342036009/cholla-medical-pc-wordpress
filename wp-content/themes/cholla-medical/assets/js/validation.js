
function isEmail(email) {
    
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
    }

jQuery(document).ready(function(){
  jQuery('.sentMessage').submit(function(e){
            var dataString = 'firstname='+ jQuery('#firstname').val() + '&email=' + jQuery('#email').val() + '&message=' + jQuery('#message').val();
         if(jQuery('#firstname').val()==""){
        jQuery('.error1').show().delay(5000).fadeOut();
           jQuery('#firstname').addClass('your-class');
           jQuery('#firstname').attr("placeholder" , 'This field is required');
                e.preventDefault();
         }else if(jQuery('#email').val()==""){
            jQuery('#firstname').removeClass('your-class');
            jQuery('#email').attr("placeholder" , 'This field is required');
            jQuery('#email').addClass('your-class');
            e.preventDefault();
         }else  if(isEmail($('#email').val()) == false){   
             jQuery('#emailerror').show(); 
              e.preventDefault();

         } else if(jQuery('#message').val()==""){
           jQuery('#email').removeClass('your-class');
           jQuery('#emailerror').hide(); 

           jQuery('#message').attr("placeholder" , 'This field is required');
           jQuery('#message').addClass('your-class');
           e.preventDefault();
         }else{
           jQuery('#message').removeClass('your-class');
           jQuery('#email').removeClass('your-class');
           jQuery('#firstname').removeClass('your-class');
             $.ajax({
            type: "POST",
            url: "mail.php",
            data: jQuery('#sentMessage').serialize()+"&type=home",
            success: function(data){
            jQuery('.success1').append(data);
            jQuery('.success1').show().delay(5000).fadeOut();
           document.getElementById("sentMessage").reset();            }
          });
          e.preventDefault();

         }


  })

});

