(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

    $( "form#contactanos" ).on( "submit", function( event ) {
      event.preventDefault();
      console.log("asa");
      /*
      $.post("https://www.google.com/recaptcha/api/siteverify?secret=6LdAMCATAAAAAAKG2qeBZbLkywypC9uJO2eVVWjB&response="+grecaptcha.getResponse()).done(function(dato){
        console.dir(dato);
      });
      */
    });
  }); // end of document ready
})(jQuery); // end of jQuery name space
