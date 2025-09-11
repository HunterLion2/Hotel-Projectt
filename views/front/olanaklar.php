<style>
    #olanaklar{
        background-color: rgba(255, 249, 237, 1);
        padding-bottom: 40px;
    }

    .section-title {
        font-family: "Poppins", sans-serif;
        font-size: 3.5rem;
        font-weight: 700;
        color: #fff;
        text-align: center;
        margin-bottom: 3rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        animation: fadeInDown 1s ease-out;
    }

    .feature-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        margin-bottom: 4rem;
    }

    .feature-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        padding: 2rem;
        text-align: center;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
        animation: fadeInUp 1s ease-out;
        position: relative;
        overflow: hidden;
    }

    .feature-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
        transition: left 0.5s;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(0,0,0,0.2);
    }

    .feature-card:hover::before {
        left: 100%;
    }

    .feature-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 1.5rem;
        background: linear-gradient(135deg, #649b6fff, #2F5336);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: white;
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    }

    .feature-title {
        font-family: "Poppins", sans-serif;
        font-size: 1.4rem;
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 1rem;
    }

    .feature-description {
        font-family: "Inter", sans-serif;
        font-size: 0.95rem;
        color: #718096;
        line-height: 1.6;
    }

    .info-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    .info-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 25px;
        padding: 3rem;
        backdrop-filter: blur(10px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.1);
        animation: fadeInUp 1s ease-out 0.3s both;
    }

    .info-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .info-title {
        font-family: "Poppins", sans-serif;
        font-size: 2.2rem;
        font-weight: 700;
        background: linear-gradient(135deg, #649b6fff, #2F5336);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 1rem;
    }

    .info-subtitle {
        width: 60px;
        height: 4px;
        background: linear-gradient(135deg, #649b6fff, #2F5336);
        margin: 0 auto;
        border-radius: 2px;
    }

    .info-list {
        list-style: none;
        padding: 0;
    }

    .info-item {
        font-family: "Inter", sans-serif;
        font-size: 1rem;
        color: #4a5568;
        padding: 0.8rem 0;
        border-bottom: 1px solid #e2e8f0;
        position: relative;
        padding-left: 2rem;
        transition: all 0.3s ease;
    }

    .info-item:last-child {
        border-bottom: none;
    }

    .info-item::before {
        content: '✓';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 20px;
        height: 20px;
        background: linear-gradient(135deg, #649b6fff, #2F5336);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.7rem;
        font-weight: bold;
    }

    .info-item:hover {
        color: #667eea;
        padding-left: 2.5rem;
    }

    /* Animasyonlar */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
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

    /* Responsive */
    @media (max-width: 1200px) {
        .feature-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .info-section {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
    }

    @media (max-width: 768px) {
        #olanaklar {
            padding: 40px 0;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }

        .feature-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .feature-card {
            padding: 1.5rem;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .feature-title {
            font-size: 1.2rem;
        }

        .feature-description {
            font-size: 0.9rem;
        }

        .info-card {
            padding: 2rem;
        }

        .info-title {
            font-size: 1.8rem;
        }

        .info-item {
            font-size: 0.9rem;
            padding: 0.6rem 0;
            padding-left: 1.8rem;
        }
    }

    @media (max-width: 480px) {
        .section-title {
            font-size: 2rem;
        }

        .feature-card {
            padding: 1.2rem;
        }

        .info-card {
            padding: 1.5rem;
        }

        .info-title {
            font-size: 1.5rem;
        }
    }
</style>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div id="olanaklar">
    <div class="container olanaklar-container">
        <h1 class="section-title">Otel Olanakları</h1>
        
        <!-- Feature Highlights -->
        <div class="feature-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-swimming-pool"></i>
                </div>
                <h3 class="feature-title">Wellness & Spa</h3>
                <p class="feature-description">Açık yüzme havuzu, fitness salonu ve profesyonel spa hizmetleri ile kendinizi şımartın.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3 class="feature-title">Gastronomi</h3>
                <p class="feature-description">Dünya mutfağından lezzetler sunan restoranımız ve rahatlatıcı lounge bar'ımız.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-concierge-bell"></i>
                </div>
                <h3 class="feature-title">Premium Hizmet</h3>
                <p class="feature-description">24 saat resepsiyon, concierge ve vale hizmeti ile kusursuz bir konaklama deneyimi.</p>
            </div>
        </div>

        <!-- Detailed Information -->
        <div class="info-section">
            <div class="info-card">
                <div class="info-header">
                    <h2 class="info-title">Konaklama Özellikleri</h2>
                    <div class="info-subtitle"></div>
                </div>
                <ul class="info-list">
                    <li class="info-item">Toplam 45 modern ve konforlu oda</li>
                    <li class="info-item">Standart Oda (2 Kişilik)</li>
                    <li class="info-item">Deluxe Oda (2-3 Kişilik)</li>
                    <li class="info-item">Aile Süiti (4 Kişilik)</li>
                    <li class="info-item">King Süit (özel balkon ve oturma alanı)</li>
                    <li class="info-item">Yaklaşık 120 kişi konaklama kapasitesi</li>
                    <li class="info-item">Tüm odalarda modern amenities</li>
                    <li class="info-item">Ücretsiz Wi-Fi ve klima</li>
                </ul>
            </div>

            <div class="info-card">
                <div class="info-header">
                    <h2 class="info-title">Genel Olanaklar</h2>
                    <div class="info-subtitle"></div>
                </div>
                <ul class="info-list">
                    <li class="info-item">Açık yüzme havuzu ve güneşlenme alanı</li>
                    <li class="info-item">Modern fitness center ve spa merkezi</li>
                    <li class="info-item">İş toplantıları için konferans salonu</li>
                    <li class="info-item">24/7 resepsiyon ve concierge hizmeti</li>
                    <li class="info-item">Ücretsiz otopark ve vale hizmeti</li>
                    <li class="info-item">Havalimanı transfer servisi</li>
                    <li class="info-item">Çocuk kulübü ve oyun alanı</li>
                    <li class="info-item">Doğa yürüyüşü ve bisiklet turu</li>
                    <li class="info-item">Pet-friendly konaklama seçenekleri</li>
                </ul>
            </div>
        </div>
    </div>
</div>