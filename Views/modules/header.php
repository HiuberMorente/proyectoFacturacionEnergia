
<nav class="main-header navbar navbar-expand navbar-primary navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  
  <div class="navbar-custom-menu ml-auto">
    <ul class="nav navbar-nav ">



     
      <li class="nav-item dropdown  user user-menu">
        <a href="#" class="dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">

          <span class="hidden-xs text-white">         
             <?php
               echo $_SESSION['nombre'] .' '.$_SESSION['apellido'];
              ?>
          </span>
        </a>

        

        <ul class="dropdown-menu">
          <li class="user-body dropdown-item">
            <div class="">
              <a href="salir" class="btn btn-light">Salir</a>
            </div>
          </li>

        </ul>
      </li>
    </ul>
  </div>
 
</nav>
