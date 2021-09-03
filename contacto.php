<?php
        include "top.php";
        ?>


<nav class="nav-extended light-green lighten-1 text-black" >
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo text-black center"><img class="responsive-img" style="width:160px" src="img/logo 2.png"></a>
      
      <ul class="left hide-on-med-and-down ">
        <li ><a href="index.php">Inicio</a></li>
        <li class="active"><a href="contacto.php">Escribemos</a></li>
        <li ><a href="catalogo.php">Catalogo</a></li>
      </ul>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
   
  </nav>

  <ul class="sidenav floating" id="mobile-demo">
  <li><div class="user-view">
      <div class="background">
      <img class="responsive-img center-aling" src="img/logo m.png" style="width:400px; height:200px">
      
      </div>
     <br>
     <br>
     <br>
     <br>
    </div></li>
    <li><a href="index.php"><i class="material-icons">home</i>Inicio</a></li>
    
    <li><div class="divider"></div></li>
    
    <li><a href="contacto.php"><i class="material-icons">phone</i>contactanos</a></li>
    
    <li><div class="divider"></div></li>

    <li><a href="catalogo.php"><i class="material-icons">collections_bookmark</i>catalogo</a></li>
    
    
    <li><div class="divider"></div></li>
   
  </ul>



  <div class="container ocult">
  <div class="row s12 ">
  <div class="col s5"><br>
  <img class="responsive-img "src="img/logo p.png" hspace="5" vspace="5" style="float: left;  width:100%" />
  </div>
  
 <form class="col s7">
    <br>
      <div class="row">
      <div class="col s12 center">
  <h3><strong>Deja tu mensaje</strong></h3><br>
  </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" required>
          <label for="icon_prefix">Nombre y apellido</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate"required>
          <label for="icon_telephone">Telefono</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="icon_telephone" type="email" class="validate"required>
          <label for="icon_telephone">Correo electronico</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">room</i>
          <input id="icon_prefix" type="text" class="validate" required>
          <label for="icon_prefix">Direccion</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea validate" required></textarea>
          <label for="icon_prefix2">Mensaje</label>
        </div>
        <br>
        <div class="input-field col s12 center ">
        <button class="btn waves-effect waves-light indigo darken-4" type="submit">Enviar<i class="material-icons right">send</i></button>
        </div>
      </div>
 </form>

  </div>
  </div>

  

  <div class="container ocultando" id="ocultando">
  <div class="row s12">
 <form class="col s12">
    <br>
      <div class="row">
      <div class="col s12 center">
  <h3><strong>Deja tu mensaje</strong></h3><br>
  </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" required>
          <label for="icon_prefix">Nombre y apellido</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate"required>
          <label for="icon_telephone">Telefono</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="icon_telephone" type="email" class="validate"required>
          <label for="icon_telephone">Correo electronico</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">room</i>
          <input id="icon_prefix" type="text" class="validate" required>
          <label for="icon_prefix">Direccion</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea validate" required></textarea>
          <label for="icon_prefix2">Mensaje</label>
        </div>
        <br>
        <div class="input-field col s12 center ">
        <button class="btn waves-effect waves-light indigo darken-4" type="submit">Enviar<i class="material-icons right">send</i></button>
        </div>
      </div>
 </form>

  </div>
  </div>





  <?php
        include "bot.php";
        ?>