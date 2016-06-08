<?php
session_start();
#Ver COOKIES
#http://www.desarrolloweb.com/articulos/autenticar-usuario-guardar-cookie-php.html
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Login - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style_login.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body class="blue">
  <div id="login-page" class="row">

      <div class="col s12 z-depth-4 card-panel">
<div id="preloader" class="progress" style="display: none;"><div class="indeterminate"></div></div>
        <form class="login-form" id="login">
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix">person</i>
              <input id="username" name="username" type="text"  required="" aria-required="true">
              <label for="username" class="center-align">Usuario</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix">lock</i>
              <input id="password" name="password" type="password"  required="" aria-required="true">
              <label for="password">Contraseña</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m12 l12  login-text">
                <input type="checkbox" id="remember-me" name="remember-me">
                <label for="remember-me">Recordarme</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <a onclick="app.ingresar()" class="btn waves-effect waves-light col s12">Ingresar</a>
            </div>
          </div>
          <div class="row">
            <div class="col s12" id="resultLogin">

            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <p class="margin medium-small"><a href="page-register.html">Registrarme</a></p>
            </div>
            <div class="input-field col s6 m6 l6">
                <p class="margin right-align medium-small"><a href="page-forgot-password.html">Olvide contraseña</a></p>
            </div>

          </div>

        </form>
        <div class="row">
          <div class="col s12" id="geolocation">

          </div>
        </div>
      </div>
    </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/index.js"></script>
  <script>
  var x = document.getElementById("geolocation");
  function getLocation() {
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
      } else {
          x.innerHTML = "Geolocation is not supported by this browser.";
      }
  }
  function showPosition(position) {
      x.innerHTML = "Latitude: " + position.coords.latitude +
      "<br>Longitude: " + position.coords.longitude;
  }
  </script>
  </body>
</html>
