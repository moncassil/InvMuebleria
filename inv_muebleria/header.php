<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Template HTML</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <style>
    #encabezado{
      background: #FF6767;
      height: 70px;
      width: 100%;
    }

    #sidebar{
      background: #FFBABA;
      height: 500px;
      width: 100%;

    }

    #contenidoPrincipal{
      background: #D8D8D8;
      height: 700px;
      width: 100%;
    }

    #barraDerecha{
      background: #4CDDB8;
      height: 500px;
      width: 100%;
    }

    .caja{
      background: blue;
      height: 170px;
    }

    .caja2{
      background: firebrick;
    }
  </style>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Navbar content -->
  <div class="container-fluid">
          <ul class="nav nav">
        <li>
           <a class="nav-link" href="#"> <img src="imagenesMue/logoMue.png" width="35px" height="35px">Muebleria | ITA</a>
        </li>

       <li class="nav-item dropdown">
         <!--  <a class=" p-1 nav-link disabled dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><font SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;Productos</a></font> -->
          <div class="dropdown-menu">
          </div>
       </li>

       <li class="nav-item">
        <a class="p-1 nav-link disabled" href="#"><font SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INICIO</font></a>
       </li>

       <li class="nav-item">
       <!-- <a class=" p-1 nav-link disabled" href="#"><font SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;INFORMACION DE LA EMPRESA</a></font> -->
       </li>

       <li class="nav-item">
        <a class=" p-1 nav-link disabled" href="#"><font SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOCALIZACIÓN</font></a>
       </li>

       <li class="nav-item soportetecnico dropdown">
        <a class="nav-link p-1 dropdown-toggle" href="#" id="navbarDropdown"  role="button" data-toggle="dropdown"><font SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INFORMACIÓN DE LA EMPRESA</font></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">VISION Y MISION</a></li>
          <li><a class="dropdown-item" href="#">POLITICAS DE LA EMPRESA</a></li>
        </ul>
       </li>
      <li class="nav-item soportetecnico dropdown">
        <a class="nav-link p-1 dropdown-toggle" href="#" id="navbarDropdown"  role="button" data-toggle="dropdown"><font SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CATALOGO</font></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#"></a></li>
          <li><a class="dropdown-item" href="#"></a></li>
        </ul>
       </li>

      <li class="nav-item">
         <a class=" p-1 nav-link disabled" href="#"><font SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONTACTO</font></a> 
      </li>
       
      <li>
        <a class="nav-link" href="#">ITA | Muebleria<img src="imagenesMue/logoMue.png" width="35px" height="35px"></a>
      </li>

  
      <li class="nav-item">
        <!--<a class="p-1 nav-link disabled btn btn-outline-dark" href="#"><font SIZE=1>&nbsp;Visual studio gratuito</a></font>-->
      </li>

   <li class="nav-item todomicrosoft">
   <!-- <a class="p-1 nav-link disabled dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><font SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;Todo Microsoft</a></font>-->
      <ul class="dropdown-menu">
      </ul>
    </li>
    
    <li class="nav-item">
    <!--<a class="p-1 nav-link disabled" href="#"><font SIZE=1>&nbsp;&nbsp;&nbsp;&nbsp;Sign in</a></font> -->
    </li>
  </ul>
  </div>  
 </nav>