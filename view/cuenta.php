<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Iglesia Juvenil Adolescentes</title>
      <link rel="stylesheet" type="text/css" href="../css/navbar.css">
      <link rel="stylesheet" type="text/css" href="../css/styles.css">
      <link rel="stylesheet" type="text/css" href="../css/tarjeta.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
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
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-custom navbar-mainbg p-0 m-0">
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                    <li class="nav-item">
                        <a class="nav-link" href="main.php"><i class="fas fa-tachometer-alt"></i>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Galardones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Tienda</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="cuenta.php"><i class="far fa-chart-bar"></i>Qr</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="qrCode.php"><i class="far fa-clone"></i>Cuenta</a>
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

<div id="app" :class="{open: view}">
  <header>
    <i class="mdi mdi-menu"></i>
    <p> Balance </p>
    <img src="http://picsum.photos/200" alt="avatar">
  </header>

  <section class="credit-card">
    <p> BALANCE </p>
    <h2> 20000 </h2>
    <p> **** **** **** 1234 </p>
  </section>

  <section class="stats">
    <div>
      <p> INCOME <i class="mdi mdi-chevron-up"></i> </p>
      <p style="color: #66BB6A;"> 21</p>
    </div>
    <div>
      <p> OUTCOME <i class="mdi mdi-chevron-down"></i> </p>
      <p style="color: #EF5350;"> 18 </p>
    </div>
  </section>

  <section class="transactions">
    <button class="indicator" @click="view = !view"> </button>
    <div class="expense" v-for="(expense, i) in expenses" :key="`exp-${i}`" :class="expense.type">
      <p class="avatar">
        <i class="mdi" :class="(expense.type == 'income') ? 'mdi-chevron-up' : 'mdi-chevron-down'"></i>
      </p>
      <p class="date"> {{ expense.date }} </p>
      <p class="title"> {{ expense.title }} </p>
      <p class="amount"> {{ expense.amount }} </p>
    </div>
  </section>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/entradas_salidas.js"></script>
<script type="text/javascript" src="../js/animation_navbar.js"></script>
</body>
</html>