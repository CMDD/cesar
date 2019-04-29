<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>César Peña Live</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type='text/css' media='all'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" type='text/css' media='all'>
    <link rel="stylesheet" href="css/admin.css" type='text/css' media='all'>
</head>

<body>
    <div id="app">
        <div class="container-fluid black">
            <div class="row">
                <div class="col">
                    <h1 class="title">César Peña <span>Live</span></h1>
                    <a href="#" class="btn out">Cerrar sesión</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
               <transmision></transmision>
                <create-user></create-user>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
