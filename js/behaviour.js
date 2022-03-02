$(document).ready(function() {
    
    $("#burger").click(function(){
      document.getElementById("mySidenav").style.width = "250px";
      $("#burger").hide();
      $(".closebtn").show();
      $(".sidenav a").removeClass("animated fadeOut fast").addClass("animated fadeIn fast");
    });

    $(".closebtn").click(function(){
      document.getElementById("mySidenav").style.width = "0";
      $("#burger").show();
      $(".closebtn").hide();
      $(".sidenav a").removeClass("animated fadeIn fast").addClass("animated fadeOut fast");
    });
//END

 $(window).scroll( function(){
     $('#tabs').each( function(i){
     ///////////////description fadein abo5e     
         var bottom_of_element = $(this).offset().top + $(this).outerHeight();
         var bottom_of_window = $(window).scrollTop() + $(window).height();
          
         if( bottom_of_window > 800 ){
             $(this).css({"background-color":"rgba(12,12,12,.98)",
                           "box-shadow": "0 1px 20px  #111"
                         });
         }
         else{
              $(this).css({"background-color":"transparent",
                           "box-shadow": "none"
                           });
         }
          
     });

       $('.para').each( function(i){
     
         var bottom_of_element = $(this).offset().top + $(this).outerHeight();
         var bottom_of_window = $(window).scrollTop() + $(window).height();
           this.style.opacity = 0;
         if( bottom_of_window > ( bottom_of_element ) ){
             $(this).addClass("animated fadeInUp slow");
         }
         else{
             $(this).removeClass("fadeInUp");
         }

       });
        
        $('.fademe').each( function(i){
     
         var bottom_of_element = $(this).offset().top + $(this).outerHeight();
         var bottom_of_window = $(window).scrollTop() + $(window).height();
           this.style.opacity = 0;
         if( bottom_of_window > ( bottom_of_element ) ){
             $(this).addClass("animated fadeIn slow");
         }
         else{
             $(this).removeClass("fadeIn");
         }
       })
  
        $('.shakeme').each( function(i){
     
         var bottom_of_element = $(this).offset().top + $(this).outerHeight();
         var bottom_of_window = $(window).scrollTop() + $(window).height();
         if( bottom_of_window > ( bottom_of_element ) ){
             $(this).addClass("animated pulse fast");
         }
         else{
             $(this).removeClass("pulse");
         }

       })     
      
      
       $('.albumname').each( function(i){
         var bottom_of_element = $(this).offset().top + $(this).outerHeight();
         var bottom_of_window = $(window).scrollTop() + $(window).height();
           this.style.opacity = 0;
         if( bottom_of_window > ( bottom_of_element ) ){
             $(this).addClass("animated fadeInDown slow");
         }
         else{
             $(this).removeClass("fadeInUp");
         }

       })
      
  })



})