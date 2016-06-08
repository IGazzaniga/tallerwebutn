var app = {
  EnviarMensaje: function() {
    $('#preloader').show();
    $.ajax({
      url:"validador.php",
      type:"POST",
      data:$('form#contactanos').serializeArray()
    }).done(function(dato){
      console.log(dato);
      $('form#contactanos')[0].reset();
      grecaptcha.reset();
      $('#preloader').hide();
    });
  },
  ingresar: function() {
    $('#preloader').show();
    $.ajax({
      url:"valida_login.php",
      type:"POST",
      data:$('form#login').serializeArray(),
      success: done,
      error: error
    });
    function done(dato){
      console.log(dato);
      $('form#login')[0].reset();
      window.open("index.html");
      $('#preloader').hide();
    };
    function error(dato){
      console.log(dato);

      $('#resultLogin').html(dato.responseText);
      $('#preloader').hide();
    };
  },
}
