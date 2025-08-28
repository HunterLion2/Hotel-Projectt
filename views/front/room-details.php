<style>
    .purple-area {
        background-image: url('/img/Rectangle 6.svg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 140px;
    }

    .number {
        font-family: "Kameron", serif;
        color: #fff;
    }

    .rooms-detail {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .purple-stats {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }

    .purple-stats img {
        width: 65px;
        height: 65px;
        object-fit: contain;
    }

    .nitelikler-title {
        color: #fff;
    }

    .room-h1 {
        font-size: 48px;
    }

    p {
        font-size: 20px;
        font-family: "Kadwa",sans-serif;
        font-weight: 500;
    }

    @media (max-width: 768px) {
        .purple-area {
            height: auto;
            padding: 20px 0;
        }

        .nitelikler-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #fff;
        }

        .number {
            font-size: 20px;
        }

        .rooms-detail {
            min-height: auto;
            padding: 30px 0;
        }

        .purple-stats {
            justify-content: center;
            margin-bottom: 15px;
            gap: 10px;
        }

        .purple-stats img {
            max-width: 30px;
        }

        .rooms-detail img {
            max-width: 100%;
            height: auto;
        }

        .img-fluid-i {
            text-align: center;
        }

    }
</style>

<div class="purple-area">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <!-- Sol stats -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="purple-stats">
                    <img src="img/bed-solid-full 1.svg" alt="Yatak" class="img-fluid-i">
                    <h1 class="number mb-0">120</h1>
                </div>
            </div>

            <!-- Başlık -->
            <div class="col-12 col-md-4 col-lg-4">
                <h1 class="nitelikler-title mb-0">Niteliklerimiz</h1>
            </div>

            <!-- Sağ stats -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="purple-stats">
                    <img src="img/Vector.svg" alt="Özellik" class="img-fluid-i">
                    <h1 class="number mb-0">35</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rooms-detail">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <img src="img/Group 15.svg" alt="Oda Detayları" class="img-fluid">
            </div>
            <div class="col-12 col-lg-5 offset-lg-1">
                <h2 class="text-center">Oda Donanımları</h2>
                <hr>
                <p class="text-center">- Konforlu yataklar, yüksek kaliteli nevresim -</p>
                <p class="text-center">- Klima ve ısıtma sistemi -</p>
                <p class="text-center">- Minibar, ücretsiz çay & kahve seti -</p>
                <p class="text-center">- Smart TV ve yüksek hızlı internet -</p>
                <p class="text-center">- Balkonlu seçenekler -</p>
                <p class="text-center">- Lüks banyo ve kişisel bakım ürünleri -</p>
            </div>
        </div>
    </div>
</div>