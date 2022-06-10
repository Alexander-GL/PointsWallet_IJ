<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qr Scanner</title>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/tarjeta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                    <li class="nav-item">
                        <a class="nav-link" href="main.php"><i class="fas fa-tachometer-alt"></i>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"><i
                                class="far fa-address-book"></i>Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Galardones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Tienda</a>
                    </li>
                    <li class="nav-item active">
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
                        <a class="text-muted disabled">
                            <?php echo $_SESSION['nombre'].' ('.$_SESSION['emailNum'].')'?></a>
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
<main class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <img id="marco" src="../images/MarcoQr.png" alt="Borde QR">
                <video id="preview" width="60%"></video>
            </div>
            <div class="col-md-6 mt-5">
                <form action="asistencia.php" method="POST" class="form-horizontal">
                    <label class="text-uppercase">Asistencia QR</label>
                    <input type="text" name="text" id="text" readonly="" placeholder="Asistencia QR" class="form-control">    
                </form>
            </div>
        </div>
    </div>
</main>

        <style>
            #marco {
            display: block;
            position: relative;
            width: 530px;
            height: 400px;
            margin: 0px auto;
            z-index: 10;
            }
            #preview {
            position:absolute;
            top: 77px;
            left:117px;
            }
        </style>

        <script>
            let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
            Instascan.Camera.getCameras().then(function(cameras){
                if(cameras.length > 0){
                    scanner.start(cameras[0]);
                } else {
                    alert('No se encontro ninguna camara');
                }
            }).catch(function(e) {
                console.error(e);
            });

            scanner.addListener('scan', function(c){
                document.getElementById('text').value=c;
                document.forms[0].submit();
            });

        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="../js/load_qr.js"></script>
        <script type="text/javascript" src="../js/animation_navbar.js"></script>
</body>

</html>