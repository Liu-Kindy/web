<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up Mobile Legends - ML Diamond Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --ml-primary: #FF8A00;
            --ml-secondary: #3A0CA3;
            --ml-accent: #4361EE;
            --dark-1: #0A0E17;
            --dark-2: #121826;
            --dark-3: #1A233A;
            --light: #E2E8F0;
            --success: #10B981;
            --danger: #EF4444;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, var(--dark-1) 0%, var(--dark-2) 50%, var(--dark-1) 100%);
            color: var(--light);
            min-height: 100vh;
            padding-top: 80px;
        }
        
        /* Navbar */
        .navbar {
            background: rgba(10, 14, 23, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 138, 0, 0.2);
            padding: 15px 0;
        }
        
        .navbar-brand {
            font-weight: 800;
            color: var(--ml-primary);
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .store-icon {
            font-size: 1.8rem;
            margin-right: 10px;
        }
        
        .nav-link {
            color: var(--light);
            font-weight: 500;
            margin: 0 8px;
            transition: all 0.3s;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--ml-primary);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--ml-primary), #FF6B00);
            border: none;
            padding: 10px 20px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 138, 0, 0.4);
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(58, 12, 163, 0.9) 0%, rgba(10, 14, 23, 0.95) 100%),
                        url('https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80') center/cover;
            padding: 40px 0;
            border-radius: 20px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }
        
        .game-header {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .game-icon {
            width: 80px;
            height: 80px;
            border-radius: 12px;
            margin-right: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            border: 2px solid var(--ml-primary);
        }
        
        .game-title {
            font-weight: 800;
            margin-bottom: 5px;
            font-size: 1.8rem;
            background: linear-gradient(135deg, var(--ml-primary), var(--ml-accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        /* Category Filter */
        .category-filter {
            background: var(--dark-3);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 25px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .category-btn {
            background: var(--dark-2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 8px 16px;
            margin-right: 10px;
            margin-bottom: 10px;
            font-weight: 500;
            color: var(--light);
            transition: all 0.3s;
        }
        
        .category-btn:hover, .category-btn.active {
            background: linear-gradient(135deg, var(--ml-primary), var(--ml-secondary));
            color: white;
        }
        
        /* Product Cards */
        .product-card {
            background: linear-gradient(135deg, var(--dark-2) 0%, var(--dark-3) 100%);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            transition: all 0.3s;
            margin-bottom: 20px;
            height: 100%;
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
        }
        
        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, var(--ml-primary), var(--ml-accent));
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
        }
        
        .product-header {
            background: linear-gradient(135deg, var(--ml-secondary), var(--ml-accent));
            color: white;
            padding: 15px;
            text-align: center;
        }
        
        .product-body {
            padding: 20px;
            text-align: center;
        }
        
        .product-price {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--ml-primary);
            margin: 10px 0;
        }
        
        .product-original-price {
            text-decoration: line-through;
            color: var(--light);
            opacity: 0.6;
            font-size: 0.9rem;
        }
        
        .product-bonus {
            color: var(--success);
            font-weight: 600;
            font-size: 0.9rem;
            margin: 5px 0;
        }
        
        .product-footer {
            padding: 15px 20px 20px;
            text-align: center;
        }
        
        .btn-buy {
            background: linear-gradient(135deg, var(--ml-primary), #FF6B00);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 0;
            font-weight: 700;
            width: 100%;
            transition: all 0.3s;
        }
        
        .btn-buy:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 138, 0, 0.4);
        }
        
        .badge-popular {
            position: absolute;
            top: 10px;
            right: 10px;
            background: linear-gradient(135deg, var(--ml-primary), #FF6B00);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 700;
        }
        
        /* Section Titles */
        .section-title {
            font-weight: 700;
            color: var(--light);
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(135deg, var(--ml-primary), var(--ml-accent));
            border-radius: 2px;
        }
        
        /* Modal Konfirmasi */
        .modal-content {
            background: linear-gradient(135deg, var(--dark-2) 0%, var(--dark-3) 100%);
            color: var(--light);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
        }
        
        .modal-header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .modal-title {
            font-weight: 700;
            color: var(--ml-primary);
        }
        
        .form-control {
            background: var(--dark-2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--light);
            border-radius: 8px;
        }
        
        .form-control:focus {
            background: var(--dark-2);
            border-color: var(--ml-primary);
            color: var(--light);
            box-shadow: 0 0 0 0.2rem rgba(255, 138, 0, 0.25);
        }
        
        .form-label {
            font-weight: 600;
            color: var(--light);
        }
        
        .order-summary {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 15px;
            margin-top: 15px;
        }
        
        .order-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }
        
        .order-total {
            display: flex;
            justify-content: space-between;
            font-weight: 700;
            font-size: 1.1rem;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Payment Section */
        .payment-section {
            background: var(--dark-3);
            border-radius: 15px;
            padding: 30px;
            margin: 30px 0;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .payment-method {
            background: var(--dark-2);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 15px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .payment-method:hover {
            border-color: var(--ml-primary);
            transform: translateY(-2px);
        }
        
        .payment-method.selected {
            border-color: var(--ml-primary);
            background: rgba(255, 138, 0, 0.1);
        }
        
        .payment-icon {
            font-size: 2rem;
            margin-right: 15px;
            color: var(--ml-primary);
        }
        
        .payment-info {
            flex: 1;
        }
        
        .payment-name {
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .payment-desc {
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--dark-1) 0%, var(--dark-2) 100%);
            color: white;
            padding: 40px 0 20px;
            margin-top: 50px;
            border-top: 1px solid rgba(255, 138, 0, 0.2);
        }
        
        .footer-title {
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 1.2rem;
            color: var(--ml-primary);
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--ml-primary);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 30px;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
        }
        
        /* Breadcrumb */
        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 20px;
        }
        
        .breadcrumb-item a {
            color: var(--ml-primary);
            text-decoration: none;
        }
        
        .breadcrumb-item.active {
            color: var(--light);
        }
        
        .breadcrumb-item + .breadcrumb-item::before {
            color: var(--light);
        }
        
        /* Success Page */
        .success-container {
            text-align: center;
            padding: 50px 20px;
        }
        
        .success-icon {
            font-size: 4rem;
            color: var(--success);
            margin-bottom: 20px;
        }
        
        .order-details {
            background: var(--dark-3);
            border-radius: 15px;
            padding: 25px;
            margin: 30px auto;
            max-width: 500px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .detail-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .detail-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src=""></i>
                <span>ML Diamond Store</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Toko</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Mobile Legends</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Game Lain</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-shopping-cart me-1"></i> Keranjang
                        <span class="badge bg-danger ms-1">3</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Toko</a></li>
                <li class="breadcrumb-item"><a href="#">Pilih Game</a></li>
                <li class="breadcrumb-item active">Mobile Legends</li>
            </ol>
        </nav>
        
        <!-- Hero Section -->
        <div class="hero-section">
            <div class="game-header">
                <img src="https://cdn1.codashop.com/S/content/mobile/images/product/MLBB.jpg" alt="Mobile Legends" class="game-icon">
                <div>
                    <h2 class="game-title">Mobile Legends: Bang Bang</h2>
                    <p class="mb-0">Top up Diamond Mobile Legends dengan harga terbaik dan proses instan</p>
                </div>
            </div>
        </div>
        
        <!-- Category Filter -->
        <div class="category-filter">
            <h3 class="section-title">Kategori Diamond</h3>
            <div class="d-flex flex-wrap">
                <button class="category-btn active">Semua</button>
                <button class="category-btn">Weekly Diamond</button>
                <button class="category-btn">Starlight Member</button>
                <button class="category-btn">Twilight Pass</button>
            </div>
        </div>
        
        <!-- Products Section -->
        <section id="products" class="mb-5">
            <h3 class="section-title">Pilihan Diamond Mobile Legends</h3>
            
            <div class="row">
                <!-- Diamond sesuai ketentuan in-game -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-card">
                        <div class="product-header">
                            <h5 class="mb-0">86 Diamonds</h5>
                        </div>
                        <div class="product-body">
                            <div class="product-price">Rp 22.000</div>
                            <p class="product-original-price">Rp 25.000</p>
                            <p class="product-bonus">Bonus 5 Diamonds</p>
                        </div>
                        <div class="product-footer">
                            <button class="btn-buy" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="86 Diamonds" data-price="22000">
                                <i class="fas fa-shopping-cart me-2"></i>Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-card">
                        <div class="product-header">
                            <h5 class="mb-0">172 Diamonds</h5>
                        </div>
                        <div class="product-body">
                            <div class="product-price">Rp 44.000</div>
                            <p class="product-original-price">Rp 50.000</p>
                            <p class="product-bonus">Bonus 10 Diamonds</p>
                        </div>
                        <div class="product-footer">
                            <button class="btn-buy" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="172 Diamonds" data-price="44000">
                                <i class="fas fa-shopping-cart me-2"></i>Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-card">
                        <span class="badge-popular">POPULER</span>
                        <div class="product-header">
                            <h5 class="mb-0">257 Diamonds</h5>
                        </div>
                        <div class="product-body">
                            <div class="product-price">Rp 65.000</div>
                            <p class="product-original-price">Rp 75.000</p>
                            <p class="product-bonus">Bonus 15 Diamonds</p>
                        </div>
                        <div class="product-footer">
                            <button class="btn-buy" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="257 Diamonds" data-price="65000">
                                <i class="fas fa-shopping-cart me-2"></i>Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-card">
                        <div class="product-header">
                            <h5 class="mb-0">344 Diamonds</h5>
                        </div>
                        <div class="product-body">
                            <div class="product-price">Rp 86.000</div>
                            <p class="product-original-price">Rp 100.000</p>
                            <p class="product-bonus">Bonus 20 Diamonds</p>
                        </div>
                        <div class="product-footer">
                            <button class="btn-buy" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="344 Diamonds" data-price="86000">
                                <i class="fas fa-shopping-cart me-2"></i>Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-card">
                        <div class="product-header">
                            <h5 class="mb-0">429 Diamonds</h5>
                        </div>
                        <div class="product-body">
                            <div class="product-price">Rp 107.000</div>
                            <p class="product-original-price">Rp 125.000</p>
                            <p class="product-bonus">Bonus 25 Diamonds</p>
                        </div>
                        <div class="product-footer">
                            <button class="btn-buy" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="429 Diamonds" data-price="107000">
                                <i class="fas fa-shopping-cart me-2"></i>Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-card">
                        <span class="badge-popular">PROMO</span>
                        <div class="product-header">
                            <h5 class="mb-0">514 Diamonds</h5>
                        </div>
                        <div class="product-body">
                            <div class="product-price">Rp 128.000</div>
                            <p class="product-original-price">Rp 150.000</p>
                            <p class="product-bonus">Bonus 30 Diamonds</p>
                        </div>
                        <div class="product-footer">
                            <button class="btn-buy" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="514 Diamonds" data-price="128000">
                                <i class="fas fa-shopping-cart me-2"></i>Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-card">
                        <div class="product-header">
                            <h5 class="mb-0">706 Diamonds</h5>
                        </div>
                        <div class="product-body">
                            <div class="product-price">Rp 173.000</div>
                            <p class="product-original-price">Rp 200.000</p>
                            <p class="product-bonus">Bonus 40 Diamonds</p>
                        </div>
                        <div class="product-footer">
                            <button class="btn-buy" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="706 Diamonds" data-price="173000">
                                <i class="fas fa-shopping-cart me-2"></i>Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-card">
                        <span class="badge-popular">TERLARIS</span>
                        <div class="product-header">
                            <h5 class="mb-0">875 Diamonds</h5>
                        </div>
                        <div class="product-body">
                            <div class="product-price">Rp 215.000</div>
                            <p class="product-original-price">Rp 250.000</p>
                            <p class="product-bonus">Bonus 50 Diamonds</p>
                        </div>
                        <div class="product-footer">
                            <button class="btn-buy" data-bs-toggle="modal" data-bs-target="#orderModal" data-product="875 Diamonds" data-price="215000">
                                <i class="fas fa-shopping-cart me-2"></i>Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal Konfirmasi Order -->
    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLabel">Konfirmasi Order</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mb-3">Informasi Pemesanan</h6>
                            <div class="order-summary">
                                <div class="order-item">
                                    <span>Produk:</span>
                                    <span id="productName">-</span>
                                </div>
                                <div class="order-item">
                                    <span>Harga:</span>
                                    <span id="productPrice">-</span>
                                </div>
                                <div class="order-total">
                                    <span>Total:</span>
                                    <span id="totalPrice">-</span>
                                </div>
                            </div>
                            
                            <div class="mt-4">
                                <h6 class="mb-3">Data Akun Mobile Legends</h6>
                                <div class="mb-3">
                                    <label for="playerId" class="form-label">Player ID</label>
                                    <input type="text" class="form-control" id="playerId" placeholder="Masukkan ID Mobile Legends">
                                </div>
                                <div class="mb-3">
                                    <label for="serverId" class="form-label">Server ID</label>
                                    <input type="text" class="form-control" id="serverId" placeholder="Masukkan Server ID">
                                </div>
                                <div class="mb-3">
                                    <label for="nickname" class="form-label">Nickname</label>
                                    <input type="text" class="form-control" id="nickname" placeholder="Masukkan Nickname">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <h6 class="mb-3">Informasi Kontak</h6>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan email aktif">
                                <div class="form-text text-muted">Untuk konfirmasi dan notifikasi order</div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Nomor WhatsApp</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Contoh: 08123456789">
                                <div class="form-text text-muted">Untuk komunikasi jika ada kendala</div>
                            </div>
                            
                            <div class="mt-4">
                                <h6 class="mb-3">Metode Pembayaran</h6>
                                <div class="payment-method" data-method="gopay">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-google-wallet payment-icon"></i>
                                        <div class="payment-info">
                                            <div class="payment-name">Gopay</div>
                                            <div class="payment-desc">Bayar dengan saldo Gopay</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-method" data-method="ovo">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-mobile-alt payment-icon"></i>
                                        <div class="payment-info">
                                            <div class="payment-name">OVO</div>
                                            <div class="payment-desc">Bayar dengan OVO</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-method" data-method="dana">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-wallet payment-icon"></i>
                                        <div class="payment-info">
                                            <div class="payment-name">DANA</div>
                                            <div class="payment-desc">Bayar dengan DANA</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" id="agreeTerms">
                                <label class="form-check-label" for="agreeTerms">
                                    Saya menyetujui <a href="#" class="text-primary">Syarat dan Ketentuan</a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="confirmOrder">Konfirmasi & Bayar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Success Page (Hidden by default) -->
    <div id="paymentSuccess" style="display: none;">
        <div class="container">
            <div class="success-container">
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h2 class="mb-3">Pembayaran Berhasil!</h2>
                <p class="mb-4">Terima kasih telah melakukan pembelian. Diamond akan segera diproses.</p>
                
                <div class="order-details">
                    <h5 class="mb-3">Detail Pesanan</h5>
                    <div class="detail-item">
                        <span>Order ID:</span>
                        <span id="successOrderId">ML2023123456</span>
                    </div>
                    <div class="detail-item">
                        <span>Produk:</span>
                        <span id="successProduct">86 Diamonds</span>
                    </div>
                    <div class="detail-item">
                        <span>Player ID:</span>
                        <span id="successPlayerId">123456789</span>
                    </div>
                    <div class="detail-item">
                        <span>Total Pembayaran:</span>
                        <span id="successTotal">Rp 22.000</span>
                    </div>
                    <div class="detail-item">
                        <span>Metode Pembayaran:</span>
                        <span id="successMethod">Gopay</span>
                    </div>
                    <div class="detail-item">
                        <span>Status:</span>
                        <span class="text-success">Menunggu Proses</span>
                    </div>
                </div>
                
                <div class="mt-4">
                    <p class="text-muted mb-3">Diamond akan masuk ke akun Anda dalam waktu 1-5 menit.</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-download me-2"></i>Download Invoice
                        </a>
                        <a href="#" class="btn btn-outline-primary">
                            <i class="fas fa-shopping-cart me-2"></i>Beli Lagi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="footer-title">ML Diamond Store</h5>
                    <p>Layanan top up diamond Mobile Legends terpercaya dengan proses instan dan harga terjangkau.</p>
                </div>
                <div class="col-md-2 mb-4">
                    <h5 class="footer-title">Layanan</h5>
                    <ul class="footer-links">
                        <li><a href="#">Mobile Legends</a></li>
                        <li><a href="#">Free Fire</a></li>
                        <li><a href="#">PUBG Mobile</a></li>
                        <li><a href="#">Valorant</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4">
                    <h5 class="footer-title">Bantuan</h5>
                    <ul class="footer-links">
                        <li><a href="#">Cara Order</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Kontak</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="footer-title">Kontak Kami</h5>
                    <ul class="footer-links">
                        <li><i class="fas fa-envelope me-2"></i> cs@mldiamondstore.com</li>
                        <li><i class="fab fa-whatsapp me-2"></i> +62 812 3456 7890</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p class="mb-0">&copy; 2023 ML Diamond Store. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script untuk mengisi data produk di modal
        document.addEventListener('DOMContentLoaded', function() {
            const orderModal = document.getElementById('orderModal');
            const buyButtons = document.querySelectorAll('.btn-buy');
            const paymentMethods = document.querySelectorAll('.payment-method');
            const mainContent = document.querySelector('.container');
            const paymentSuccess = document.getElementById('paymentSuccess');
            
            let selectedProduct = '';
            let selectedPrice = '';
            let selectedMethod = '';
            
            // Handle buy button clicks
            buyButtons.forEach(button => {
                button.addEventListener('click', function() {
                    selectedProduct = this.getAttribute('data-product');
                    selectedPrice = this.getAttribute('data-price');
                    
                    document.getElementById('productName').textContent = selectedProduct;
                    document.getElementById('productPrice').textContent = 'Rp ' + parseInt(selectedPrice).toLocaleString('id-ID');
                    document.getElementById('totalPrice').textContent = 'Rp ' + parseInt(selectedPrice).toLocaleString('id-ID');
                });
            });
            
            // Handle payment method selection
            paymentMethods.forEach(method => {
                method.addEventListener('click', function() {
                    paymentMethods.forEach(m => m.classList.remove('selected'));
                    this.classList.add('selected');
                    selectedMethod = this.getAttribute('data-method');
                });
            });
            
            // Konfirmasi order
            document.getElementById('confirmOrder').addEventListener('click', function() {
                const playerId = document.getElementById('playerId').value;
                const serverId = document.getElementById('serverId').value;
                const nickname = document.getElementById('nickname').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const agreeTerms = document.getElementById('agreeTerms').checked;
                
                if (!playerId || !serverId || !nickname || !email || !phone || !selectedMethod || !agreeTerms) {
                    alert('Harap lengkapi semua data yang diperlukan dan setujui syarat & ketentuan!');
                    return;
                }
                
                // Generate random order ID
                const orderId = 'ML' + new Date().getFullYear() + Math.floor(100000 + Math.random() * 900000);
                
                // Update success page with order details
                document.getElementById('successOrderId').textContent = orderId;
                document.getElementById('successProduct').textContent = selectedProduct;
                document.getElementById('successPlayerId').textContent = playerId;
                document.getElementById('successTotal').textContent = 'Rp ' + parseInt(selectedPrice).toLocaleString('id-ID');
                document.getElementById('successMethod').textContent = selectedMethod.toUpperCase();
                
                // Hide main content and show success page
                mainContent.style.display = 'none';
                paymentSuccess.style.display = 'block';
                
                // Close modal
                const modal = bootstrap.Modal.getInstance(orderModal);
                modal.hide();
                
                // Reset form
                document.getElementById('playerId').value = '';
                document.getElementById('serverId').value = '';
                document.getElementById('nickname').value = '';
                document.getElementById('email').value = '';
                document.getElementById('phone').value = '';
                document.getElementById('agreeTerms').checked = false;
                paymentMethods.forEach(m => m.classList.remove('selected'));
                selectedMethod = '';
            });
        });
    </script>
</body>
</html>
