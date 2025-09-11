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
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 0;
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
        font-family: "Kadwa", sans-serif;
        font-weight: 500;
    }

    .room-detail-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 25px;
        padding: 2rem;
        box-shadow: 0 25px 50px rgba(0,0,0,0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        animation: fadeInUp 1s ease-out 0.3s both;
        position: relative;
        overflow: hidden;
    }

    .room-detail-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(135deg, #649b6fff, #2F5336);
        border-radius: 25px 25px 0 0;
    }

    .card-title {
        font-family: "Poppins", sans-serif;
        font-size: 2.2rem;
        font-weight: 700;
        background: linear-gradient(135deg, #649b6fff, #2F5336);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 2rem;
        position: relative;
    }

    .card-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background: linear-gradient(135deg, #649b6fff, #2F5336);
        border-radius: 2px;
    }

    .amenities-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .amenity-item {
        font-family: "Inter", sans-serif;
        font-size: 1.1rem;
        color: #4a5568;
        padding: 1rem 0;
        border-bottom: 1px solid #e2e8f0;
        position: relative;
        padding-left: 3rem;
        transition: all 0.3s ease;
        opacity: 0;
        animation: slideInLeft 0.6s ease-out forwards;
    }

    .amenity-item:nth-child(1) { animation-delay: 0.1s; }
    .amenity-item:nth-child(2) { animation-delay: 0.2s; }
    .amenity-item:nth-child(3) { animation-delay: 0.3s; }
    .amenity-item:nth-child(4) { animation-delay: 0.4s; }
    .amenity-item:nth-child(5) { animation-delay: 0.5s; }
    .amenity-item:nth-child(6) { animation-delay: 0.6s; }

    .amenity-item:last-child {
        border-bottom: none;
    }

    .amenity-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 25px;
        height: 25px;
        background: linear-gradient(135deg, #649b6fff, #2F5336);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .amenity-item::after {
        content: '✓';
        position: absolute;
        left: 7px;
        top: 50%;
        transform: translateY(-50%);
        color: white;
        font-size: 0.8rem;
        font-weight: bold;
    }

    .amenity-item:hover {
        color: #667eea;
        padding-left: 3.5rem;
        background: rgba(102, 126, 234, 0.05);
        border-radius: 10px;
        margin: 0 -1rem;
        padding-right: 1rem;
        transform: translateX(5px);
    }

    .amenity-icon {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        opacity: 0.3;
        transition: all 0.3s ease;
        font-size: 1.2rem;
        color: #667eea;
    }

    .amenity-item:hover .amenity-icon {
        opacity: 1;
        transform: translateY(-50%) scale(1.1);
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
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

        .room-detail-card {
            padding: 2rem;
            margin-top: 2rem;
        }

        .card-title {
            font-size: 1.8rem;
        }

        .amenity-item {
            font-size: 1rem;
            padding: 0.8rem 0;
            padding-left: 2.5rem;
        }

        .amenity-item::before {
            width: 20px;
            height: 20px;
        }

        .amenity-item::after {
            left: 5.5px;
            font-size: 0.7rem;
        }
    }

    @media (max-width: 480px) {
        .card-title {
            font-size: 1.5rem;
        }

        .room-detail-card {
            padding: 1.5rem;
        }
    }
</style>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
                <div class="room-detail-card">
                    <h2 class="card-title">Oda Donanımları</h2>
                    
                    <ul class="amenities-list">
                        <li class="amenity-item">
                            Konforlu yataklar, yüksek kaliteli nevresim
                            <i class="fas fa-bed amenity-icon"></i>
                        </li>
                        <li class="amenity-item">
                            Klima ve ısıtma sistemi
                            <i class="fas fa-snowflake amenity-icon"></i>
                        </li>
                        <li class="amenity-item">
                            Minibar, ücretsiz çay & kahve seti
                            <i class="fas fa-coffee amenity-icon"></i>
                        </li>
                        <li class="amenity-item">
                            Smart TV ve yüksek hızlı internet
                            <i class="fas fa-wifi amenity-icon"></i>
                        </li>
                        <li class="amenity-item">
                            Balkonlu seçenekler
                            <i class="fas fa-door-open amenity-icon"></i>
                        </li>
                        <li class="amenity-item">
                            Lüks banyo ve kişisel bakım ürünleri
                            <i class="fas fa-bath amenity-icon"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>