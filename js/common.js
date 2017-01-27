/* 
 * This page container common Jquery function that are used at many Pages
 * Made By : Sanjay Kumar Chaurasia
 */
$(function () {
    
  $(".bt-ripple").click(function(e) {
     
    var rippler = $(this);

    // create .ink element if it doesn't exist
    if (rippler.find(".ripple").length == 0) {
      rippler.append("<span class='ripple'></span>");
    }

    var ink = rippler.find(".ripple");

    // prevent quick double clicks
    ink.removeClass("animate");

    // set .ripple diametr
    if (!ink.height() && !ink.width()) {
      var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
      ink.css({
        height: d,
        width: d
      });
    }

    // get click coordinates
    var x = e.pageX - rippler.offset().left - ink.width() / 2;
    var y = e.pageY - rippler.offset().top - ink.height() / 2;

    // set .ripple position and add class .animate
    ink.css({
      top: y + 'px',
      left: x + 'px'
    }).addClass("animate");
  });
});
/* ***********************************************************************
 * this function is open the menu on mouse hover 
 * Made By; Sanjay Kumar Chaurasia
 * ***********************************************************************/
/*$(function () {
    $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                $(this).toggleClass('open');
                //$('#caretmenu').toggleClass("caret caret-up");                
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                $(this).toggleClass('open');
                // $('#caretmenu').toggleClass("caret caret-up");                
            });
});*/

/* ***********************************************************************
 * This function used to show or hide the div element.
 * We have used toggle function, it hides the div , if the 
 * div is visible, and if div is hidden, it will display
 * the div.
 * Made By: Sanjay Kumar Chaurasia
 * ************************************************** ***********************/
 
    
function displayHideDiv(shw, hde) {
    shw = shw || null;
    hde = hde || null;
    if (shw != null) {
        $("#" + shw).toggle(200);
    }

    if (hde != null) {
        $("#" + hde).toggle(200);
    }
}

/* *****************************************************
 * This function is used to display the modal used on the page
 * Made by: Sanjay Kumar Chaurasia
 * ******************************************************/
function showModal(divName, divid) {
    $('#' + divName).modal('show');
    $('#' + divid).prop('disabled', false);
}

/* This function is used to open the popup window, with three url are passed in function
 * url - url of the page, 
 * w - width of the pop-up
 * h - height of the pop-up
 * Made by; Sanjay Kumar Chaurasia
 */
function popUp(url, w, h) {
    var left = (screen.width / 2) - (w / 2);
    var top = (screen.height / 2) - (h / 2);
    var sw = (screen.width * .60);
    var sh = (screen.height * .60);
    window.open(url, 'pop-up', 'width=' + sw + ', height=' + sh + ', top=' + top + ', left=' + left);
}

