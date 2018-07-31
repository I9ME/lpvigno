/*=========================================================================================
// INICIO MAIN JS
========================================================================================= */


jQuery(function($) {
	$(document).ready(function() {
/*
window.onload = function() {
    var element = document.createElement("script");
    //element.src = "myScript.js";
    //
   // document.body.appendChild(element);
   alert('Carregou! ')
};
*/



//=======================================================
//Aplica a animação no scroll mediante clique no menu
//=======================================================



    $(".u-isScrollDown").click(function(event){        
        event.preventDefault();
        
       

        $('html,body').animate({scrollTop:$(this.hash).offset().top - 0}, 1000);

          if ($(".Navigation--main").hasClass('u-isExpanded')){
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").removeClass("u-isExpanded")
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").addClass("u-isCollapsed");  
         }
        
        varHash = $(this).attr('href');

        
        /*if (location.hash == varHash) {
            $(this).addClass('u-isActive');
        } else {
            $(this).removeClass('u-isActive');
        }*/
        
        if(history.pushState) {
        
            history.pushState(null, null, varHash);
        
        }
        else {
        location.hash = '#myhash';
        window.location.hash = varHash;
        }

        
   });




/*$(function(){
      $.stellar({
        horizontalScrolling: false,
        verticalOffset: 40
      });
    });
*/




// =====================================
// .ScrollOn
// Detecta o Movimento da Barra de Rolagem e aplica a classe no body
// =====================================

$(window).scroll(function(){


     var scroll = jQuery(window).scrollTop();

     //Class ScrollOn
     if ( scroll > 0 ) {
      jQuery('body').addClass('u-isScrollOn');

     } else {
      jQuery('body').removeClass('u-isScrollOn');
     }

     //Class Fixed
    /* if ( scroll > 135 ) {
      jQuery('.Intro--blog-headerBar').addClass('u-isFixed');

     } else {
      jQuery('.Intro--blog-headerBar').removeClass('u-isFixed');
     }*/

});

// =====================================
// .ScrollFade
// Mostra os objetos conforme aparecem no scroll
// =====================================
 
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.u-isScrollFade').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height() + 100;
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                $(this).addClass('u-isScrollFade--on'); 
                    
            }
            
        }); 
    
    });


//=======================================================
//Aplica a animação no scroll mediante clique no menu
//=======================================================

    $(".u-isScrollDown").click(function(event){        
        event.preventDefault();
        
       

        $('html,body').animate({scrollTop:$(this.hash).offset().top - 0}, 1000);

          if ($(".Navigation--menu--main").hasClass('u-isExpanded')){
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").removeClass("u-isExpanded")
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").addClass("u-isCollapsed");  
         }
        
        varHash = $(this).attr('href');

        
        /*if (location.hash == varHash) {
            $(this).addClass('u-isActive');
        } else {
            $(this).removeClass('u-isActive');
        }*/
        
        if(history.pushState) {
        
            history.pushState(null, null, varHash);
        
        }
        else {
        location.hash = '#myhash';
        window.location.hash = varHash;
        }

        
   });


// ==========================
// Menu Toggle
// ==========================
// 



     $(".e-Toglle").click(function(event){
         event.preventDefault();
         varId = $(this).attr('id');
         varWidthWindow = $(window).width();
         
          if ($(this).hasClass('a-hzt')){
                varSide = 'a-hztResize';
             } else {
                varSide = '';
             }

            
         if ($(this).hasClass('u-isExpanded')){

            //$('body').css({'overflow':'scroll'});
            $(this).removeClass('u-isExpanded');
            $(this).addClass('u-isCollapsed');
                 $('#'+varId+'-container').stop().removeClass('u-isExpanded '+varSide);
                 $('#'+varId+'-container').stop().addClass('u-isCollapsed '+varSide);
                 //if( varId == 'MainNavigation' || varWidthWindow <= 480 ) { $('body').removeClass('u-isScrollOff'); }
                 $('#'+varId+'.SwitchIcon.u-isCollapsed .u-icon').show();
                 $('#'+varId+'.SwitchIcon .iconClose').hide();
                 $('.NavigationLink.Item-level1.is-hasSubMenu, .Navigation--subMenu').removeClass('u-isExpanded');
                 $('.NavigationLink.Item-level1.is-hasSubMenu, .Navigation--subMenu').addClass('u-isCollapsed');
                 
         }else{

             //$('body').css({'overflow':'hidden'});
             $('.u-contentHide, .u-contentHide--button, .Navigation .is-hasSubMenu, .Navigation--subMenu').removeClass('u-isExpanded').addClass('u-isCollapsed');
             $(this).removeClass('u-isCollapsed');
             $(this).addClass('u-isExpanded');
                 $('#'+varId+'-container').stop().removeClass('u-isCollapsed '+varSide);
                 $('#'+varId+'-container').stop().addClass('u-isExpanded '+varSide);
                 //if( varId == 'MainNavigation' || varWidthWindow <= 480 ) { $('body').addClass('u-isScrollOff'); }
                 $('#'+varId+'.SwitchIcon.u-isExpanded .u-icon').hide();
                 $('#'+varId+'.SwitchIcon .iconClose').show();
             }
     });



function LightboxClose() {
  //alert( "clicked" );
   $('#Lightbox--container').removeClass('Lightbox--active');
   $('#Lightbox--container').addClass('Lightbox--inactive');
   $('.Lightbox-window-content').html( '' );
}

$( ".LightboxClose" ).on( "click", LightboxClose );



// =====================================
// .ScrollOn
// Detecta o Movimento da Barra de Rolagem e aplica a classe no body
// =====================================

$(window).scroll(function(){


     var scroll = $(window).scrollTop();

     //Class ScrollOn
     if ( scroll > 0 ) {

      $('body').addClass('u-isScrollOn');

     } else {
      $('body').removeClass('u-isScrollOn');
     }


});



    $(document)
        .ready(function () {
            //initialize paroller.js
            $('[data-paroller-factor]').paroller();
            //initialize paroller.js and set options for elements with .paroller class
            $('.paroller-example').paroller({
                factorXs: 0.1,
                factorSm: 0.1,
                factorMd: -0.4,
                factorLg: -0.5,
                factorXl: -0.6,
                factor: -0.4,
                type: 'foreground',
                direction: 'horizontal'
            });
        });


/*s
// Carousel
 */

$('#namidia-carousel').owlCarousel({
    loop:true,
    dots: true,
    nav: true,
    responsiveClass: true,
    responsive:{
        0:{
            items:1,
            margin:50,
            nav:false
        },
        768:{
            items:2,
            margin:25,
            //nav:false
        },
        960:{
            items:3,
            margin:25,
            //nav:true,
        }
    }
})



// /*=========================================================================================
// // CLOSE FUNCTION
// =========================================================================================*/

	});
});



function NavigationTabs(section, tab){
    //alert( section + ' , ' + tab );
    $('.Section--' + section + ' .Navigation--tabs .Navigation--tabs-items-item, .Section--' + section + ' .Items--tabs .Item, .Section--' + section + ' .Subsection-imageMain').removeClass('is-active');
    $('.Section--' + section + ' .Navigation--tabs #tab-' + tab + ', .Section--' + section + ' .Items--tabs #tabContent-' + tab +', .Section--' + section + ' #tabImage-' + tab).addClass('is-active');
    //$('.Section--' + section + ' .Subsection-imageMain .Subsection-imageMain-src').fadeOut();
    //$('.Section--' + section + ' .Subsection-imageMain#tabImage-'+ tab + ' .Subsection-imageMain-src').fadeIn();
    //alert('clicked');
    
   // $('.Section--' + section + ' .Subsection-imageMain').fadeOut(250);
    //$('.Section--' + section + ' .Subsection-imageMain#tabImage-'+ tab ).fadeIn(450);

   /* $('.Section--' + section + ' .Subsection-imageMain').fadeOut(function() {
    $('.Section--' + section + ' .Subsection-imageMain').removeClass('is-active');    
    $('.Section--' + section + ' .Subsection-imageMain#tabImage-'+ tab).addClass('is-active').fadeIn(750);*/

  //});
   
}



// Abre o Lightbox
function LightboxCall(iFrame) {
  //alert( "clicked" );
  jQuery('#Lightbox--container').removeClass('Lightbox--inactive');
  jQuery('#Lightbox--container').addClass('Lightbox--active');
  jQuery('.Lightbox-window-content').load( iFrame );
}
//$( ".LightboxCall" ).on( "click", LightboxCall );


// Fecha o lightbox quando a tecla ESC é pressionada
function KeyUpEsc(evt) {
 
 if (evt.keyCode == 27) {
       jQuery('#Lightbox--container').removeClass('Lightbox--active');
       jQuery('#Lightbox--container').addClass('Lightbox--inactive');
       jQuery('.Lightbox-window-content').html( '' );
    }
}

jQuery(document).on( "keyup", KeyUpEsc );

// Mais formas de Fechar o LightBox

