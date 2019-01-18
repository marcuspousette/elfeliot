$(document).ready(function(){
    /**
    *   PRELOADER INIT
    **/
    $("#preloader").fadeOut("slow");
    $("body").fadeIn("slow");

    /**
    *      MATERIALIZE COMPONENT INITS
    **/
    $(".sidenav").sidenav(); // Initialize sidenav button
    $('.modal').modal(); // Initialize modal.
    $('select').formSelect(); // Initialize select in materialize forms.
    $('ul.tabs').tabs(); // Initialize tabs component.
    $('.parallax').parallax();
    $('.collapsible').collapsible();
    $('.tooltipped').tooltip();
    $('.dropdown-trigger').dropdown();

    // Opens tha contact modal whenever a contactModalOpener is clicked.
    $(".contactModalOpener").click(function(){
      $('#modal1').modal('open');
      // setTimeout(function(){
      //   $("#modal1 .scale-transition").removeClass("scale-out");
      // }, 700);
    });

});
