<style>
    .reservation {
        background-color: #2F5336;
        height: 100vh;
    }
</style>

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
    <link rel="stylesheet" href="/css/reservation.css">
</head>

<body>

    <div class="reservation">
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
                    </div>
                </div>
            </nav>
        </div>

        <div class="reservation-complety mt-4 mx-4 mb-3 p-3 rounded-5">
            <div class="row px-2">
                <div class="col-12 col-lg-3 col-md-5 p-4 rounded-4" id="filter">
                    <h1 class="text-center">Filtreleme</h1>
                    <hr>
                    <h2>Kaç Kişilik</h2>
                    <hr width="25%">
                    <form action="">
                        <input class="mb-2 form-control w-25" type="number" name="kişisay" placeholder="kaç kişilik">
                        <hr>
                        <h2>Gün</h2>
                        <div class="row">
                            <div class="col-6 col-lg-6 col-md-6">
                                <h4 class="text-center">Giriş</h4>
                                <input type="date" name="date-start" id="" class="form-control">
                            </div>
                            <div class="col-6 col-lg-6 col-md-6">
                                <h4 class="text-center">Çıkış</h4>
                                <input type="date" name="date-end" id="" class="form-control">
                            </div>
                        </div>
                        <hr>
                        <h2>Fiyat Aralığı</h2>
                        <input type="number" name="price-filter" class="form-control w-25" placeholder="fiyat-aralığı">
                        <hr>
                        <h2>Extra Paketler</h2>
                        <div class="row">
                            <div class="col-12">
                                <input type="checkbox" name="none-smoke" id=""> Sigara İçilmeyen Odalar
                            </div>
                            <div class="col-12">
                                <input type="checkbox" name="engelli-erişimi" id=""> Engelli Erişimine Uygun
                            </div>
                            <div class="col-12">
                                <input type="checkbox" name="romantic-packet" id=""> Romantik Paket
                            </div>
                        </div>
                        <div class="mt-3 text-center">
                            <input type="submit" value="Filtrele" class="btn btn-success px-4">
                        </div>
                    </form>
                </div>

                <div class="room-section col-12 col-lg-9 col-md-7 p-4 rounded-4">
                    <div class="row">
                        <div class="">
                            <?php ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>