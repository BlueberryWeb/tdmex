<?php 
    if(isset($_GET['success'])){
        if($_GET['success'] == 'true'){
            echo '<div class="alert alert-success"> Recibimos su información y nos pondremos en contacto lo antes posible.
            </div>';
        }else{
            echo '<div class="alert alert-warning">
                  <strong>¡Advertencia!</strong> Ocurrió un error al enviar su mensaje.
                </div>';
        }
    }
?>
<!--<header class="header-option"  >-->
  <div class="container header-option"  data-aos="zoom-in" data-aos-duration="1500">
    <div class="row flex-nowrap justify-content-between ">
      <div class="col-4 col-lg-2  text-right ">
        <a  href="index.php"><img src="images/index/tdmex.png" class="img-fluid pt-2"></a>
      </div>
      <div class="col-8 col-lg-6 offset-lg-1 text-center">
        <nav class="navbar navbar-expand-lg navbar-light  "> 
          <button class="navbar-toggler menu-responsive" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">INICIO</a>
                </li> <!--
                <li class="nav-item">
                  <a class="nav-link " href="about.php">NOSOTROS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="services.php">SERVICIOS</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link " href="contact.php">CONTACTO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " >LOGIN</a>
                </li>-->
                <li class="nav-item text-center d-block d-sm-block d-md-none">
                    <small class="text-white" > CONTÁCTANOS</small><br>
                    <a class="text-white nav-link " href="https://api.whatsapp.com/send?phone=523325070796" target="_blank" rel="noopener noreferrer"><strong><i class="fa-brands fa-whatsapp"></i>33 2507 0796</strong></a>
                </li>
              </ul> 
          </div>
        </nav> 
      </div>
      <div class="d-none d-sm-none d-lg-block col-lg-3 "> 
        <div class="contact-div text-center d-none d-sm-none d-md-block ">
          <small> CONTÁCTANOS</small><br>
          <a class="text-white" href="https://api.whatsapp.com/send?phone=523325070796" target="_blank" rel="noopener noreferrer"><strong><i class="fa-brands fa-whatsapp"></i>33 2507 0796</strong></a>
        </div>
      </div>
    </div>
  </div>
<!--</header> -->
