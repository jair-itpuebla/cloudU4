<section id="main-slider" class="max-height"> 
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner max-height">
    <div class="carousel-item active">
      <img src="activos/img/img1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="main_header--text">
          <h1>Cloud drive</h1>
          <h2>¡Asegura, respalda y consulta tus archivos en cualquier momento!</h2>
          <?php if(isset($_SESSION['email'])){ echo '';}else{echo '<a href="?login"><button type="button" class="btn btn-primary btn-lg slider-btn">Crear cuenta</button></a>';}?>
          <br>
          <p>Regístrate y obtén 2 GB de espacio totalmente gratis</p>
        </div> 
      </div>
    </div>
    <div class="carousel-item">
      <img src="activos/img/img3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<div class="main__header">
                               

<section class="main__header--about">
  <div class="col-lg-12">  
    <div class="container-fluid">
      <div class="row justify-content-around">
        <div class="col-sm-3">
          <h3 class="main__header--title">Obtenga toda la capacidad de almacenamiento que necesite </h3>
          <p id="translate">
            Cloud Drive proporciona opciones de almacenamiento flexible, por lo que siempre tendrá espacio suficiente para sus archivos. Con la administración centralizada, la prevención de pérdida de datos y Vault para Drive, puede administrar fácilmente a los usuarios y el uso compartido de archivos a fin de satisfacer las necesidades de cumplimiento en relación con los datos. 
          </p>
        </div>
        <div class="col-sm-5 img-container">
          <img src="activos/img/lap.png" alt="laptop" style="width=12px;">
        </div>
        <aside class="col-sm-2">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="http://progweb.esy.es/eq3a" target="_blank">
                <img src="activos/img/hola.png" class="d-block w-100" alt="vjshop"></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Publicidad</h5>
                </div>
              </div>
              <div class="carousel-item">
                <a href="https://www.udemy.com" target="_blank"><img src="activos/img/hola2.png" class="d-block w-100" alt="udemy"></a>
                
                <div class="carousel-caption d-none d-md-block">
                  <h5 style="color: #fff;">Publicidad</h5>
                </div>
              </div>
              <div class="carousel-item">
                <a href="https://www.sublimetext.com" target="_blank">
                  <img src="activos/img/hola3.png" class="d-block w-100" alt="sublimetext">
                </a>
                <div class="carousel-caption d-none d-md-block">
                  <h5 style="color: #fff;">Publicidad</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>


<div class="container-fluid bg-main-info">
<div class="row">
  <div class="main__information--box col-sm-3">
    <p class="main__information--box--title">Organización</p>
    <p class="main__information--box--txt">Podras reunir en un mismo lugar tus archivos y organizarlos como tú lo decidas.</p>
    <img src="./activos/img/nube1.jpg" alt="" class="main__info--img">
</div>

<div class="main__information--box col-sm-3">
  <p class="main__information--box--title">Respaldo</p>
  <p class="main__information--box--txt">Asegura tus archivos y en un mismo lugar para evitar perderlos, siempre en contacto.</p>
  <img src="./activos/img/nube2.jpg" alt="" class="main__info--img">
</div>

<div class="main__information--box col-sm-3">
  <p class="main__information--box--title">Consulta</p>
  <p class="main__information--box--txt">Podrás consultar en cualquier momentos tus archivos y compartirlos con los demás.</p>
  <img src="./activos/img/nube3.jpg" alt="nube" class="main__info--img">
</div>

<div class="main__information--box col-sm-3">
  <p class="main__information--box--title">Seguridad</p>
  <p class="main__information--box--txt">Tener segura tu información nunca fue tan eficiente como cuando trabajas con cloud drive.</p>
  <img src="./activos/img/pass.png" alt="nube" class="main__info--img">
</div>
</div> 

<div class="lds-hourglass loader" id="loader">
<div class="intro">
        <img src="activos/img/nube.png" alt="nube">
</div>
</div>