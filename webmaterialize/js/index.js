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
}
