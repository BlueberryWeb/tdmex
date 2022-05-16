<!doctype html>
<html lang="en">
  <?php 
    include_once('head.php');
  ?>
  <body class="grey-bg"> 
    <header class="">
      <div class="overlay"></div>
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" poster="images/contactanos/banner_principal.png">
        <source src="videos/05_contacto_tdmx.mp4" type="video/mp4">
      </video>
       <?php  include_once('header.php');  ?>
       <div class="container-fluid slider">
        <div class="row services-slider main-slider">  
          <div class="col-lg-4 offset-lg-4">
            
          </div>
          <div class="col-lg-10  offset-lg-1 mt-5"  data-aos="zoom-in-up" data-aos-duration="1500">
            <p class="text-left services-title mb-0">Contáctanos</p>
            <h3 class="text-white text-left">¡Hola!</h3>  
          </div>
        </div>
      </div> 

    </header> 
    <div role="main" >        
 
      <div class="contact-map grey-section">
        <div class="container-fluid">
          <div class="row"> 
            <div class="col-lg-2 offset-lg-1  " >   
              <span class="contact-bg">Contacto</span>   
              <h2 class=" mb-5 s-in contact-title" data-aos="fade-right" data-aos-duration="1500">Contacto</h2>   
              <img data-aos="fade-left" data-aos-duration="2000" src="images/contactanos/ubicacion.png" alt="..." class="img-fluid mb-3">
              <p class="">UBICACIÓN</p>
              <p>45580 Córdoba 23, <br>
                Hacienda de Vidrio, 45580  <br>San Pedro Tlaquepaque, Jal.</p>
              <img data-aos="fade-left" data-aos-duration="2500" src="images/contactanos/whatsapp.png" alt="..." class="img-fluid mb-3 mt-5">
              <p class="">ESCRÍBENOS</p>
              <a href="https://web.whatsapp.com/send?l=en&phone=523334118254&text=Hola" target="_blank" class="grey-color">33 3411 8254</a><br><br>
              <i class="fas fa-envelope fa-2x mt-4 green-color" data-aos="fade-left" data-aos-duration="2500"></i> <br><br>
              <a href="mailto:contacto@tdmex.mx" class="grey-color mt-3" > contacto@tdmex.mx</a>
            </div>  
          </div>  
        </div>
      </div>  
 
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-12 p-0"> 
            <img  src="images/contactanos/tdmex.png" alt="..." class="img-fluid">
          </div>  
        </div>  
      </div> 

      <div class="white-section">
        <div class="container">
          <div class="row h-100  align-items-center ">  
            <div class="col-12 col-lg-8 text-center" data-aos="fade-right" data-aos-duration="1500"> 
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.075008510518!2d-103.30197448576173!3d20.62579920678965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b3a634f603eb%3A0x18609a29dd9171da!2sC%C3%B3rdoba%2023%2C%20Hacienda%20de%20Vidrio%2C%2045580%20San%20Pedro%20Tlaquepaque%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1604872797682!5m2!1ses-419!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-12 col-lg-4 " data-aos="fade-left" data-aos-duration="1500">  
              <h3 class="mt-5 ff-SourceSansPro-Regular ">Escríbenos</h3> 
              <form action="mail.php" method="post" enctype="multipart/form-data" >
                <div class="form-row">
                  <div class="col">
                      <input type="text" name="name" class="form-control nbr mb-3" placeholder="Nombre completo*" required="required"  />
                  </div>
                  <div class="col">
                      <input type="text" name="email" class="form-control nbr mb-3" placeholder="Email*" required="required"/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                      <input type="text" name="mobile" class="form-control nbr mb-3" placeholder="Celular*" required="required" />
                  </div>
                  <div class="col">
                      <input type="text" name="subject" class="form-control nbr mb-3" placeholder="Asunto*" required="required" />
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                      <textarea rows="5" name="message" class="form-control nbr mb-3" placeholder="Comentario*" required="required" ></textarea>
                  </div> 
                </div>
                <div class="form-row">
                  <div class="col">
                      <button type="submit" class="btn btn-gren-line dark-grey-color">Enviar mensaje <i class="fas fa-arrow-right"></i> </button>
                  </div> 
                </div>
              </form>
            </div>  
          </div>  
        </div>  
      </div> 

    </div> 
    <?php 
      include_once('footer.php');
    ?>  
  </body>
</html>