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
            --ml-dark: #0A0E17;
            --ml-darker: #05070C;
            --ml-card: #121826;
            --ml-card-hover: #1A233A;
            --light: #E2E8F0;
            --success: #10B981;
            --epic: #9C27B0;
            --legendary: #FF9800;
            --mythic: #F44336;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, var(--ml-darker) 0%, var(--ml-dark) 50%, var(--ml-darker) 100%);
            color: var(--light);
            min-height: 100vh;
            padding-top: 80px;
            background-attachment: fixed;
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
            position: relative;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--ml-primary);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--ml-primary);
            transition: width 0.3s;
        }
        
        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
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
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://www.transparenttextures.com/patterns/dark-mosaic.png');
            opacity: 0.1;
            pointer-events: none;
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
            position: relative;
            z-index: 1;
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
            background: var(--ml-card);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 25px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .category-btn {
            background: var(--ml-dark);
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
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(255, 138, 0, 0.3);
        }
        
        /* Product Cards */
        .product-card {
            background: linear-gradient(135deg, var(--ml-card) 0%, var(--ml-card-hover) 100%);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
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
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            border-color: rgba(255, 138, 0, 0.3);
        }
        
        .product-header {
            background: linear-gradient(135deg, var(--ml-secondary), var(--ml-accent));
            color: white;
            padding: 15px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .product-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            opacity: 0;
            transition: opacity 0.5s;
        }
        
        .product-card:hover .product-header::before {
            opacity: 1;
        }
        
        .product-body {
            padding: 20px;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        .product-price {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--ml-primary);
            margin: 10px 0;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
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
            position: relative;
            overflow: hidden;
        }
        
        .btn-buy::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-buy:hover::before {
            left: 100%;
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
            z-index: 2;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.3);
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
        
        /* Hover Preview */
        .preview-container {
            position: absolute;
            top: -200px;
            left: 50%;
            transform: translateX(-50%);
            width: 180px;
            height: 180px;
            background: var(--ml-card);
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 10;
            overflow: hidden;
            border: 2px solid var(--ml-primary);
        }
        
        .product-card:hover .preview-container {
            opacity: 1;
            visibility: visible;
            top: -220px;
        }
        
        .preview-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }
        
        .preview-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            padding: 10px;
            color: white;
            font-size: 0.8rem;
        }
        
        .item-rarity {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 3px 8px;
            border-radius: 10px;
            font-size: 0.7rem;
            font-weight: 700;
        }
        
        .rarity-common {
            background: #607D8B;
        }
        
        .rarity-rare {
            background: #2196F3;
        }
        
        .rarity-epic {
            background: var(--epic);
        }
        
        .rarity-legendary {
            background: var(--legendary);
        }
        
        .rarity-mythic {
            background: var(--mythic);
        }
        
        /* Modal Konfirmasi */
        .modal-content {
            background: linear-gradient(135deg, var(--ml-card) 0%, var(--ml-card-hover) 100%);
            color: var(--light);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
        }
        
        .modal-header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .modal-title {
            font-weight: 700;
            color: var(--ml-primary);
        }
        
        .form-control {
            background: var(--ml-dark);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--light);
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            background: var(--ml-dark);
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
            border: 1px solid rgba(255, 255, 255, 0.1);
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
        
        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--ml-darker) 0%, var(--ml-dark) 100%);
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
        
        /* Form validation styles */
        .is-invalid {
            border-color: #dc3545 !important;
        }
        
        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #dc3545;
        }
        
        .is-invalid ~ .invalid-feedback {
            display: block;
        }
        
        /* Floating particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }
        
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--ml-primary);
            border-radius: 50%;
            opacity: 0.3;
            animation: float 15s infinite linear;
        }
        
        @keyframes float {
            0% {
                transform: translateY(0) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 0.3;
            }
            90% {
                opacity: 0.3;
            }
            100% {
                transform: translateY(-100vh) translateX(100px);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Floating particles -->
    <div class="particles" id="particles"></div>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-crown store-icon"></i>
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
                        <div class="preview-container">
                            <img src="https://static.wikia.nocookie.net/mobile-legends/images/6/6f/Emblem_Physical.png" alt="Basic Emblem" class="preview-image">
                            <div class="preview-info">
                                <div>Basic Emblem Set</div>
                                <div class="item-rarity rarity-common">Common</div>
                            </div>
                        </div>
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
                        <div class="preview-container">
                            <img src="https://static.wikia.nocookie.net/mobile-legends/images/4/44/Skin_Franco_Heavy_Anchor.png" alt="Franco Skin" class="preview-image">
                            <div class="preview-info">
                                <div>Franco - Heavy Anchor</div>
                                <div class="item-rarity rarity-rare">Rare</div>
                            </div>
                        </div>
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
                        <div class="preview-container">
                            <img src="https://static.wikia.nocookie.net/mobile-legends/images/8/8f/Skin_Gusion_Street_Ball.png" alt="Gusion Skin" class="preview-image">
                            <div class="preview-info">
                                <div>Gusion - Street Ball</div>
                                <div class="item-rarity rarity-epic">Epic</div>
                            </div>
                        </div>
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
                        <div class="preview-container">
                            <img src="https://static.wikia.nocookie.net/mobile-legends/images/6/6e/Skin_Layla_Blazing_West.png" alt="Layla Skin" class="preview-image">
                            <div class="preview-info">
                                <div>Layla - Blazing West</div>
                                <div class="item-rarity rarity-epic">Epic</div>
                            </div>
                        </div>
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
                        <div class="preview-container">
                            <img src="https://static.wikia.nocookie.net/mobile-legends/images/1/1c/Skin_Alucard_Child_of_The_Fall.png" alt="Alucard Skin" class="preview-image">
                            <div class="preview-info">
                                <div>Alucard - Child of The Fall</div>
                                <div class="item-rarity rarity-legendary">Legendary</div>
                            </div>
                        </div>
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
                        <div class="preview-container">
                            <img src="https://static.wikia.nocookie.net/mobile-legends/images/4/4d/Skin_Gusion_Venom.png" alt="Gusion Venom" class="preview-image">
                            <div class="preview-info">
                                <div>Gusion - Venom</div>
                                <div class="item-rarity rarity-legendary">Legendary</div>
                            </div>
                        </div>
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
                        <div class="preview-container">
                            <img src="https://static.wikia.nocookie.net/mobile-legends/images/0/0c/Skin_Lancelot_Dark_Breaker.png" alt="Lancelot Skin" class="preview-image">
                            <div class="preview-info">
                                <div>Lancelot - Dark Breaker</div>
                                <div class="item-rarity rarity-mythic">Mythic</div>
                            </div>
                        </div>
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
                        <div class="preview-container">
                            <img src="https://static.wikia.nocookie.net/mobile-legends/images/7/7e/Skin_Gusion_KOF.png" alt="Gusion KOF" class="preview-image">
                            <div class="preview-info">
                                <div>Gusion - KOF Collaboration</div>
                                <div class="item-rarity rarity-mythic">Mythic</div>
                            </div>
                        </div>
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
                                    <input type="text" class="form-control" id="playerId" placeholder="Masukkan ID Mobile Legends" required>
                                    <div class="invalid-feedback">Player ID harus diisi</div>
                                </div>
                                <div class="mb-3">
                                    <label for="serverId" class="form-label">Server ID</label>
                                    <input type="text" class="form-control" id="serverId" placeholder="Masukkan Server ID" required>
                                    <div class="invalid-feedback">Server ID harus diisi</div>
                                </div>
                                <div class="mb-3">
                                    <label for="nickname" class="form-label">Nickname</label>
                                    <input type="text" class="form-control" id="nickname" placeholder="Masukkan Nickname" required>
                                    <div class="invalid-feedback">Nickname harus diisi</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <h6 class="mb-3">Informasi Kontak</h6>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan email aktif" required>
                                <div class="form-text text-muted">Untuk konfirmasi dan notifikasi order</div>
                                <div class="invalid-feedback">Email harus diisi dengan format yang benar</div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Nomor WhatsApp</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Contoh: 08123456789" required>
                                <div class="form-text text-muted">Untuk komunikasi jika ada kendala</div>
                                <div class="invalid-feedback">Nomor WhatsApp harus diisi</div>
                            </div>
                            
                            <div class="mt-4">
                                <h6 class="mb-3">Metode Pembayaran</h6>
                                <div class="mb-3">
                                    <select class="form-select" id="paymentMethod" required>
                                        <option value="" selected disabled>Pilih metode pembayaran</option>
                                        <option value="gopay">Gopay</option>
                                        <option value="ovo">OVO</option>
                                        <option value="dana">DANA</option>
                                        <option value="linkaja">LinkAja</option>
                                        <option value="bank">Transfer Bank</option>
                                    </select>
                                    <div class="invalid-feedback">Pilih metode pembayaran</div>
                                </div>
                            </div>
                            
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                <label class="form-check-label" for="agreeTerms">
                                    Saya menyetujui <a href="#" class="text-primary">Syarat dan Ketentuan</a>
                                </label>
                                <div class="invalid-feedback">Anda harus menyetujui syarat dan ketentuan</div>
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
            
            buyButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const product = this.getAttribute('data-product');
                    const price = this.getAttribute('data-price');
                    
                    document.getElementById('productName').textContent = product;
                    document.getElementById('productPrice').textContent = 'Rp ' + parseInt(price).toLocaleString('id-ID');
                    document.getElementById('totalPrice').textContent = 'Rp ' + parseInt(price).toLocaleString('id-ID');
                    
                    // Reset form validation
                    resetFormValidation();
                });
            });
            
            // Fungsi untuk reset validasi form
            function resetFormValidation() {
                const formInputs = document.querySelectorAll('#orderModal .form-control, #orderModal .form-select, #orderModal .form-check-input');
                formInputs.forEach(input => {
                    input.classList.remove('is-invalid');
                });
            }
            
            // Fungsi untuk validasi form
            function validateForm() {
                let isValid = true;
                
                // Validasi Player ID
                const playerId = document.getElementById('playerId');
                if (!playerId.value.trim()) {
                    playerId.classList.add('is-invalid');
                    isValid = false;
                } else {
                    playerId.classList.remove('is-invalid');
                }
                
                // Validasi Server ID
                const serverId = document.getElementById('serverId');
                if (!serverId.value.trim()) {
                    serverId.classList.add('is-invalid');
                    isValid = false;
                } else {
                    serverId.classList.remove('is-invalid');
                }
                
                // Validasi Nickname
                const nickname = document.getElementById('nickname');
                if (!nickname.value.trim()) {
                    nickname.classList.add('is-invalid');
                    isValid = false;
                } else {
                    nickname.classList.remove('is-invalid');
                }
                
                // Validasi Email
                const email = document.getElementById('email');
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!email.value.trim() || !emailRegex.test(email.value)) {
                    email.classList.add('is-invalid');
                    isValid = false;
                } else {
                    email.classList.remove('is-invalid');
                }
                
                // Validasi Nomor WhatsApp
                const phone = document.getElementById('phone');
                if (!phone.value.trim()) {
                    phone.classList.add('is-invalid');
                    isValid = false;
                } else {
                    phone.classList.remove('is-invalid');
                }
                
                // Validasi Metode Pembayaran
                const paymentMethod = document.getElementById('paymentMethod');
                if (!paymentMethod.value) {
                    paymentMethod.classList.add('is-invalid');
                    isValid = false;
                } else {
                    paymentMethod.classList.remove('is-invalid');
                }
                
                // Validasi Syarat dan Ketentuan
                const agreeTerms = document.getElementById('agreeTerms');
                if (!agreeTerms.checked) {
                    agreeTerms.classList.add('is-invalid');
                    isValid = false;
                } else {
                    agreeTerms.classList.remove('is-invalid');
                }
                
                return isValid;
            }
            
            // Event listener untuk tombol konfirmasi
            document.getElementById('confirmOrder').addEventListener('click', function() {
                if (validateForm()) {
                    // Simpan data order ke localStorage (opsional)
                    const orderData = {
                        product: document.getElementById('productName').textContent,
                        price: document.getElementById('totalPrice').textContent,
                        playerId: document.getElementById('playerId').value,
                        serverId: document.getElementById('serverId').value,
                        nickname: document.getElementById('nickname').value,
                        email: document.getElementById('email').value,
                        phone: document.getElementById('phone').value,
                        paymentMethod: document.getElementById('paymentMethod').value
                    };
                    
                    localStorage.setItem('orderData', JSON.stringify(orderData));
                    
                    // Tampilkan pesan sukses
                    alert('Order berhasil! Anda akan diarahkan ke halaman pembayaran.');
                    
                    // Tutup modal
                    const modal = bootstrap.Modal.getInstance(orderModal);
                    modal.hide();
                    
                    // Redirect ke halaman pembayaran setelah modal tertutup
                    setTimeout(function() {
                        window.location.href = '/home/nigg/pembayaran';
                    }, 500);
                } else {
                    alert('Harap lengkapi semua data dengan benar!');
                }
            });
            
            // Membuat partikel floating
            createParticles();
        });
        
        // Fungsi untuk membuat partikel floating
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 30;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random position
                const left = Math.random() * 100;
                const delay = Math.random() * 15;
                
                particle.style.left = `${left}%`;
                particle.style.animationDelay = `${delay}s`;
                
                particlesContainer.appendChild(particle);
            }
        }
    </script>
</body>
</html>