<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iglesia Juvenil Adolescentes</title>
  <link rel="stylesheet" type="text/css" href="../css/navbar.css">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
  <style>
    /* Height for devices larger than 576px */
    @media (min-width: 992px) {
      #inicio {
        width: 100%;
        height: auto;
      }
    }
    .box{
      margin-top: 40px;
      width: 100%;
      height: auto;
      background: #CCC;
      overflow: hidden;
    }

    .box img{
      width: 100%;
      height: auto;
    }
    @supports(object-fit: cover){
        .box img{
          height: 100%;
          object-fit: cover;
          object-position: center center;
        }
    }
  </style>
</head>

<body>
  <?php 

require '../bd/conexion.php';
	/*Inicializamos la sesión y validamos si la sesion esta activa que en caso contrario
      se retorna al Login*/
        session_start();
        if(empty($_SESSION['active']))
        {
	      header('location: ../index.php');
        }
		?>
  <header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-custom navbar-mainbg p-0 m-0">
      <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <div class="hori-selector">
            <div class="left"></div>
            <div class="right"></div>
          </div>
          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fas fa-tachometer-alt"></i>Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Actividades"><i class="far fa-address-book"></i>Actividades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Galardones"><i class="far fa-clone"></i>Galardones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Tienda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cuenta.php"><i class="far fa-chart-bar"></i>Cuenta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="qrCode.php"><i class="far fa-clone"></i>Qr</a>
          </li>
        </ul>
      </div>
      <!-- Right elements -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="text-muted disabled"> <?php echo $_SESSION['nombre'].' ('.$_SESSION['emailNum'].')'?></a>
          </li>
          <li class="nav-item">
            <a href="salir.php" class="nav-link"> Cerrar sesión <i class="fa fa-door-open"></i></a>
          </li>
        </ul>
      </div>
      <!-- Right elements -->
      </div>
    </nav>
    <!-- Navbar -->

  </header>

  <div id="parallax-world-of-ugg">
      <div class="box">
        <img id="logo_bank" src="../images/GALARDONES_BANNER_01.jpg" alt="Cargando imagen...">
      </div>

    <section>
      <div class="block">
        <p><span class="first-character sc">I</span>n 1978, Brian Smith landed in Southern California with a bag of
          sheepskin boots and hope. He fell in love with the sheepskin experience and was convinced the world would one
          day share this love. The beaches of Southern California had long been an epicenter of a relaxed, casual
          lifestyle, a lifestyle that Brian felt was a perfect fit for his brand. So he founded the UGG brand, began
          selling his sheepskin boots and they were an immediate sensation. By the mid 1980's, the UGG brand became a
          symbol of relaxed southern California culture, gaining momentum through surf shops and other shops up and down
          the coast of California, from San Diego to Santa Cruz. UGG boots reached beyond the beach, popping up in big
          cities and small towns all over, and in every level of society. Girls wore their surfer boyfriend's pair of
          UGG boots like a letterman jacket. When winter came along, UGG boots were in ski shops and were seen in lodges
          from Mammoth to Aspen.</p>
        <p class="line-break margin-top-10"></p>
        <p class="margin-top-10">The UGG brand began to symbolize those who embraced sport and a relaxed, active
          lifestyle. More than that, an emotional connection and a true feeling of love began to grow for UGG boots,
          just as Brian had envisioned. People didn't just like wearing UGG boots, they fell in love with them and
          literally could not take them off. By the end of the 90's, celebrities and those in the fashion world took
          notice of the UGG brand. A cultural shift occurred as well - people were embracing, and feeling empowered, by
          living a more casual lifestyle and UGG became one of the symbols of this lifestyle. By 2000, a love that began
          on the beaches had become an icon of casual style. It was at this time that the love for UGG grew in the east,
          over the Rockies and in Chicago. In 2000, UGG Sheepskin boots were first featured on Oprah's Favorite Things®
          and Oprah emphatically declared that she "LOOOOOVES her UGG boots." From that point on, the world began to
          notice.</p>
      </div>
    </section>

    <section>
      <div id="Actividades" class="parallax-two">
        <h2>ACTIVIDADES</h2>
      </div>
    </section>

    <section>
      <div class="block-img col-12">
          <div class="card-group p-3">
            <div class="card">
              <img src="../images/ACT_02.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" />
              <div class="card-body">
                <h3 class="mb-3">Actividades</h3>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural lead-in to
                  additional content. This content is a little bit longer.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img src="../images/ACT_01.jpg" class="card-img-top" alt="Palm Springs Road" />
              <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img src="../images/ACT_03.jpg" class="card-img-top" alt="Los Angeles Skyscrapers" />
              <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural lead-in to
                  additional content. This card has even longer content than the first to show
                  that equal height action.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
  </div>
  </section>

    <section>
      <div id="Galardones" class="parallax-three">
        <h2>GALARDONES</h2>
    </section>

    <section>
    <div class="box">
    <img id="logo_bank" src="../images/GALARDONES.jpg" alt="Cargando imagen galardones...">
    <img id="logo_bank" src="../images/GALARDONES_02.jpg" alt="Cargando imagen galardones...">
      </div>
      </div>
    </section>

    </main>

    <footer class="bg-dark text-center text-white">
      <!-- Section: Social media -->
      <section id="container" class="mb-4 pt-4">
        <!-- Facebook -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;"
          href="https://www.facebook.com/ijadolescentes" role="button"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i
            class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i
            class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;"
          href="https://www.instagram.com/iglesiajuvenilcdo/" role="button"><i class="fab fa-instagram"></i></a>
      </section>
      <!-- Section: Social media -->
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-white" href="https://www.facebook.com/ijadolescentes">Facebook.com/IJAdolescentes</a>
      </div>
      <!-- Copyright -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/animation_navbar.js"></script>
</body>

</html>