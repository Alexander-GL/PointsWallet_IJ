<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iglesia Juvenil Adolescentes</title>
    <script type="text/javascript" src="https://webqr.com/llqrcode.js"></script>
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    <script type="text/javascript" src="https://webqr.com/webqr.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href="../css/qr_cod.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #inicio {
          margin-top: -58.59px;
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
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-tachometer-alt"></i>Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Actividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Galardones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="usuarios.php"><i class="far fa-chart-bar"></i>Qr</a>
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

  <section>
      <div class="parallax-one h-90 text-center bg-imag"></div>
  </section>
  
  <section>
    <div class="block">
      <p><span class="first-character sc">I</span>n 1978, Brian Smith landed in Southern California with a bag of sheepskin boots and hope. He fell in love with the sheepskin experience and was convinced the world would one day share this love. The beaches of Southern California had long been an epicenter of a relaxed, casual lifestyle, a lifestyle that Brian felt was a perfect fit for his brand. So he founded the UGG brand, began selling his sheepskin boots and they were an immediate sensation. By the mid 1980's, the UGG brand became a symbol of relaxed southern California culture, gaining momentum through surf shops and other shops up and down the coast of California, from San Diego to Santa Cruz. UGG boots reached beyond the beach, popping up in big cities and small towns all over, and in every level of society. Girls wore their surfer boyfriend's pair of UGG boots like a letterman jacket. When winter came along, UGG boots were in ski shops and were seen in lodges from Mammoth to Aspen.</p>
      <p class="line-break margin-top-10"></p>
      <p class="margin-top-10">The UGG brand began to symbolize those who embraced sport and a relaxed, active lifestyle. More than that, an emotional connection and a true feeling of love began to grow for UGG boots, just as Brian had envisioned. People didn't just like wearing UGG boots, they fell in love with them and literally could not take them off. By the end of the 90's, celebrities and those in the fashion world took notice of the UGG brand. A cultural shift occurred as well - people were embracing, and feeling empowered, by living a more casual lifestyle and UGG became one of the symbols of this lifestyle. By 2000, a love that began on the beaches had become an icon of casual style. It was at this time that the love for UGG grew in the east, over the Rockies and in Chicago. In 2000, UGG Sheepskin boots were first featured on Oprah's Favorite Things® and Oprah emphatically declared that she "LOOOOOVES her UGG boots." From that point on, the world began to notice.</p>
    </div>
  </section>
  
  <section>
    <div class="parallax-two">
      <h2>NEW YORK</h2>
    </div>
  </section>
  
  <section>
    <div class="block">
      <p><span class="first-character ny">B</span>reaking into the New York fashion world is no easy task. But by the early 2000's, UGG Australia began to take it by storm. The evolution of UGG from a brand that made sheepskin boots, slippers, clogs and sandals for an active, outdoor lifestyle to a brand that was now being touted as a symbol of a stylish, casual and luxurious lifestyle was swift. Much of this was due to a brand repositioning effort that transformed UGG into a high-end luxury footwear maker. As a fashion brand, UGG advertisements now graced the pages of Vogue Magazine as well as other fashion books. In the mid 2000's, the desire for premium casual fashion was popping up all over the world and UGG was now perfectly aligned with this movement.</p>
      <p class="line-break margin-top-10"></p>
      <p class="margin-top-10">Fueled by celebrities from coast to coast wearing UGG boots and slippers on their downtime, an entirely new era of fashion was carved out. As a result, the desire and love for UGG increased as people wanted to go deeper into this relaxed UGG experience. UGG began offering numerous color and style variations on their sheepskin boots and slippers. Cold weather boots for women and men and leather casuals were added with great success. What started as a niche item, UGG sheepskin boots were now a must-have staple in everyone's wardrobe. More UGG collections followed, showcasing everything from knit boots to sneakers to wedges, all the while maintaining that luxurious feel UGG is known for all over the world. UGG products were now seen on runways and in fashion shoots from coast to coast. Before long, the love spread even further.</p>
    </div>
  </section>
  
  <section>
    <div class="parallax-three">
      <h2>ENCHANTED FOREST</h2>
    </div>
  </section>
  
  <section>
    <div class="block">
      <p><span class="first-character atw">W</span>hen the New York fashion community notices your brand, the world soon follows. The widespread love for UGG extended to Europe in the mid-2000's along with the stylish casual movement and demand for premium casual fashion. UGG boots and shoes were now seen walking the streets of London, Paris and Amsterdam with regularity. To meet the rising demand from new fans, UGG opened flagship stores in the UK and an additional location in Moscow. As the love spread farther East, concept stores were opened in Beijing, Shanghai and Tokyo. UGG Australia is now an international brand that is loved by all. This love is a result of a magical combination of the amazing functional benefits of sheepskin and the heightened emotional feeling you get when you slip them on your feet. In short, you just feel better all over when you wear UGG boots, slippers, and shoes.</p>
      <p class="line-break margin-top-10"></p>
      <p class="margin-top-10">In 2011, UGG will go back to its roots and focus on bringing the active men that brought the brand to life back with new styles allowing them to love the brand again as well. Partnering with Super Bowl champion and NFL MVP Tom Brady, UGG will invite even more men to feel the love the rest of the world knows so well. UGG will also step into the world of high fashion with UGG Collection. The UGG Collection fuses the timeless craft of Italian shoemaking with the reliable magic of sheepskin, bringing the luxurious feel of UGG to high end fashion. As the love for UGG continues to spread across the world, we have continued to offer new and unexpected ways to experience the brand. The UGG journey continues on and the love for UGG continues to spread.</p>
    </div>
  </section>
    <!-- Background image -->
    <img id="inicio" class="parallax-bank">
        </img>
        <!-- Background image -->
    <div class="container col-12 p-5">
    <div class="card-group">
    <div class="card">
    <img src="../images/ACT_02.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
    <div class="card-body">
    <h3 class="mb-3"  id="actividades">Actividades</h3>
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
    <img src="../images/ACT_01.jpg" class="card-img-top" alt="Palm Springs Road"/>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="../images/ACT_03.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
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
            <div class="row" id="galardones">
                <div class="col">
                    <div class="h-90 text-center bg-image" style=" background-image: url('../images/GALARDONES.jpg');
                                                                width: 100%;
                                                                height: 100vh;
                                                                background-size: cover;">
                    </div>
                    <div class="h-90 text-center bg-image" style=" background-image: url('../images/GALARDONES_02.jpg');
                                                                    width: 100%;
                                                                    height: 100vh;
                                                                    background-size: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="d-flex justify-content-center align-items-center">
            <h3 class="text-uppercase" id="tienda">Tienda</h3>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <h3 class="text-uppercase" id="generarqr">Generar Qr</h3>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <h3 class="text-uppercase" id="registro">Registro</h3>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <h3 class="text-uppercase" id="usuarios">Usuarios</h3>
        </div>
    </main>

<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="https://www.facebook.com/ijadolescentes"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="https://www.instagram.com/iglesiajuvenilcdo/"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="https://www.facebook.com/ijadolescentes">Facebook.com/IJAdolescentes</a>
  </div>
  <!-- Copyright -->
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="../js/animation_navbar.js"></script>
</body>
</html>