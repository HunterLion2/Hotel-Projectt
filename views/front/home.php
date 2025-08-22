<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Project - PHP MVC</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@100..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="main">
        <div class="head">
            <nav class="navbar navbar-expand-lg p-3">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item px-5">
                                <a class="nav-link " aria-current="page" href="#" style="color: #fff;">Hakkımızda</a>
                            </li>
                            <li class="nav-item px-5">
                                <a class="nav-link" href="#" style="color: #fff;">Anasayfa</a>
                            </li>
                            <li class="nav-item px-5">
                                <a class="nav-link " href="#" aria-disabled="true" style="color: #fff;">İletişim</a>
                            </li>
                        </ul>
                        <a href="#" style="text-decoration: none; border: none; "><img src="img/alarm-clock-regular-full 1.svg" alt="" style="color: white;"></a> 
                    </div>
                </div>
            </nav>
        </div>
        <div class="main-body">
            <div class="container">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <div class="col-lg-5">
                            <img src="img/image.png" alt="" width="100%">
                        </div>
                        <div class="col-lg-7 ">
                            <div class="text-center">
                                <h1 class="main-head">The Wılde</h1>
                                <a href="#" class="rooms-link text-center">Odalar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    
        require __DIR__ . "/time.php";
        require __DIR__ . "/room-details.php";

    ?>

</body>