<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Project - Rezervasyon</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@100..700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/reservation.css">

    <style>
        :root {
            --primary-color: #2F5336;
            --secondary-color: #FFEED2;
            --accent-color: #4CAF50;
            --text-dark: #333;
            --text-light: #666;
            --border-radius: 20px;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--secondary-color) 0%, #fff 100%);
            min-height: 100vh;
        }

        .page-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1a3d26 100%);
            color: white;
            padding: 60px 0 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('/img/hotel-pattern.png') repeat;
            opacity: 0.1;
        }

        .page-header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            z-index: 2;
        }

        .page-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }

        .container-modern {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .reservation-container {
            margin-top: -50px;
            position: relative;
            z-index: 10;
        }

        .filter-card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 30px;
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .filter-card h2 {
            color: var(--primary-color);
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .filter-section {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .filter-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .filter-section h3 {
            color: var(--text-dark);
            font-size: 1.1rem;
            font-weight: 500;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 12px 15px;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
        }

        .form-check {
            margin-bottom: 12px;
            padding-left: 0;
        }

        .form-check-input {
            margin-right: 10px;
            transform: scale(1.2);
        }

        .form-check-label {
            color: var(--text-light);
            font-weight: 400;
            cursor: pointer;
        }

        .btn-filter {
            background: linear-gradient(135deg, var(--accent-color) 0%, #45a049 100%);
            border: none;
            border-radius: 12px;
            padding: 15px 30px;
            font-weight: 600;
            font-size: 1rem;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-filter:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(76, 175, 80, 0.3);
        }

        .rooms-container {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 40px;
            min-height: 600px;
        }

        .rooms-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f8f9fa;
        }

        .rooms-header h2 {
            color: var(--primary-color);
            font-size: 1.8rem;
            font-weight: 600;
            margin: 0;
        }

        .rooms-count {
            background: var(--accent-color);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .room-card {
            background: white;
            border: 1px solid #e9ecef;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .room-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .room-image {
            height: 200px;
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
            position: relative;
            overflow: hidden;
        }

        .room-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .room-price-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--accent-color);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .room-content {
            padding: 25px;
        }

        .room-title {
            color: var(--primary-color);
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .room-features {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 15px 0;
        }

        .feature-tag {
            background: #f8f9fa;
            color: var(--text-light);
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .btn-reserve {
            background: var(--primary-color);
            border: none;
            border-radius: 10px;
            padding: 12px 25px;
            color: white;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-reserve:hover {
            background: #1a3d26;
            transform: translateY(-2px);
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: var(--text-light);
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 20px;
            opacity: 0.5;
        }

        @media (max-width: 768px) {
            .page-header {
                padding: 40px 0 30px;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .filter-card {
                margin-bottom: 30px;
                position: static;
            }

            .rooms-header {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            .room-card {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Page Header -->
    <div class="page-header">
        <div class="container-modern">
            <h1><i class="bi bi-calendar-check"></i> Rezervasyon</h1>
            <p>Hayalinizdeki tatil için mükemmel odayı bulun</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container-modern">
        <div class="reservation-container">
            <div class="row">
                <!-- Filter Sidebar -->
                <div class="col-lg-4 col-xl-3">
                    <div class="filter-card">
                        <h2><i class="bi bi-funnel"></i> Filtreler</h2>

                        <form method="POST" action="/reservation">
                            <!-- Guest Count -->
                            <div class="filter-section">
                                <h3><i class="bi bi-people"></i> Kaç Kişilik</h3>
                                <select class="form-control" name="kişisay" required>
                                    <option value="">Seçiniz</option>
                                    <option value="1" <?= ($_POST['kişisay'] ?? '') == '1' ? 'selected' : '' ?>>1 Kişi</option>
                                    <option value="2" <?= ($_POST['kişisay'] ?? '') == '2' ? 'selected' : '' ?>>2 Kişi</option>
                                    <option value="3" <?= ($_POST['kişisay'] ?? '') == '3' ? 'selected' : '' ?>>3 Kişi</option>
                                    <option value="4" <?= ($_POST['kişisay'] ?? '') == '4' ? 'selected' : '' ?>>4 Kişi</option>
                                    <option value="5+" <?= ($_POST['kişisay'] ?? '') == '5+' ? 'selected' : '' ?>>5+ Kişi</option>
                                </select>
                            </div>

                            <!-- Dates -->
                            <div class="filter-section">
                                <h3><i class="bi bi-calendar-range"></i> Tarihler</h3>
                                <div class="row g-3">
                                    <div class="col-6">
                                        <label class="form-label">Giriş</label>
                                        <input type="date"
                                            name="date-start"
                                            class="form-control"
                                            value="<?= $_POST['date-start'] ?? '' ?>"
                                            min="<?= date('Y-m-d') ?>"
                                            required>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Çıkış</label>
                                        <input type="date"
                                            name="date-end"
                                            class="form-control"
                                            value="<?= $_POST['date-end'] ?? '' ?>"
                                            min="<?= date('Y-m-d', strtotime('+1 day')) ?>"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <!-- Price Range -->
                            <div class="filter-section">
                                <h3><i class="bi bi-currency-dollar"></i> Maksimum Fiyat</h3>
                                <div class="input-group">
                                    <input type="number"
                                        name="price-filter"
                                        class="form-control"
                                        placeholder="Maksimum fiyat"
                                        value="<?= $_POST['price-filter'] ?? '' ?>"
                                        min="0">
                                    <span class="input-group-text">₺</span>
                                </div>
                            </div>

                            <!-- Extra Packages -->
                            <div class="filter-section">
                                <h3><i class="bi bi-star"></i> Özel Özellikler</h3>
                                <div class="px-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="none-smoke" id="none-smoke"
                                            <?= isset($_POST['none-smoke']) ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="none-smoke">
                                            <i class="bi bi-shield-check"></i> Sigara İçilmeyen Odalar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="engelli-erişimi" id="engelli-erişimi"
                                            <?= isset($_POST['engelli-erişimi']) ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="engelli-erişimi">
                                            <i class="bi bi-universal-access"></i> Engelli Erişimine Uygun
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="romantic-packet" id="romantic-packet"
                                            <?= isset($_POST['romantic-packet']) ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="romantic-packet">
                                            <i class="bi bi-heart"></i> Romantik Paket
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn-filter">
                                <i class="bi bi-search"></i> Odaları Filtrele
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Rooms Results -->
                <div class="col-lg-8 col-xl-9">
                    <div class="rooms-container">
                        <div class="rooms-header">
                            <h2>Müsait Odalar</h2>
                            <span class="rooms-count">
                                <i class="bi bi-house"></i> 6 Oda Bulundu
                            </span>
                        </div>

                        <!-- Room Cards -->
                        <div class="row">
                            <?php for ($i = 1; $i <= 6; $i++): ?>
                                <div class="col-12">
                                    <div class="room-card">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <div class="room-image">
                                                    <img src="/img/room<?= $i ?>.jpg" alt="Oda <?= $i ?>">
                                                    <div class="room-price-badge">
                                                        <?= 150 + ($i * 50) ?>₺ / Gece
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="room-content">
                                                    <h3 class="room-title">
                                                        <?= ['Deluxe Oda', 'Standart Oda', 'Suit Oda', 'Aile Odası', 'Balayı Süiti', 'İş Odası'][$i - 1] ?>
                                                    </h3>
                                                    <p class="text-muted mb-3">
                                                        <?= ($i * 2) ?> kişilik • Deniz manzaralı • <?= 25 + ($i * 5) ?>m²
                                                    </p>

                                                    <div class="room-features">
                                                        <span class="feature-tag"><i class="bi bi-wifi"></i> Ücretsiz WiFi</span>
                                                        <span class="feature-tag"><i class="bi bi-tv"></i> Smart TV</span>
                                                        <span class="feature-tag"><i class="bi bi-snow"></i> Klima</span>
                                                        <span class="feature-tag"><i class="bi bi-cup-hot"></i> Minibar</span>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="text-muted">
                                                            <small><i class="bi bi-check-circle"></i> Ücretsiz iptal</small>
                                                        </div>
                                                        <button class="btn btn-reserve">
                                                            <i class="bi bi-calendar-check"></i> Rezervasyon Yap
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>

                        <!-- Empty State (gösterilmeyecek çünkü odalar var) -->
                        <div class="empty-state d-none">
                            <i class="bi bi-house-x"></i>
                            <h3>Üzgünüz, Oda Bulunamadı</h3>
                            <p>Arama kriterlerinizi değiştirmeyi deneyin veya farklı tarihler seçin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Tarih validasyonu
        document.addEventListener('DOMContentLoaded', function() {
            const dateStart = document.querySelector('input[name="date-start"]');
            const dateEnd = document.querySelector('input[name="date-end"]');

            dateStart.addEventListener('change', function() {
                const startDate = new Date(this.value);
                const nextDay = new Date(startDate);
                nextDay.setDate(startDate.getDate() + 1);

                dateEnd.min = nextDay.toISOString().split('T')[0];

                if (dateEnd.value && new Date(dateEnd.value) <= startDate) {
                    dateEnd.value = '';
                }
            });
        });
    </script>
</body>

</html>