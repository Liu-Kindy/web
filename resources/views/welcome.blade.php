<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Game - Top Up Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2D6AE0;
            --secondary: #FF8A00;
            --dark-1: #0A0E17;
            --dark-2: #121826;
            --dark-3: #1A233A;
            --light: #E2E8F0;
            --success: #10B981;
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
            color: var(--secondary);
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
            color: var(--secondary);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #1c5bc7);
            border: none;
            padding: 10px 20px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(45, 106, 224, 0.4);
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(58, 12, 163, 0.9) 0%, rgba(10, 14, 23, 0.95) 100%);
            padding: 50px 0;
            border-radius: 20px;
            margin-bottom: 40px;
            text-align: center;
        }
        
        .hero-title {
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 15px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Game Grid */
        .game-section {
            margin-bottom: 50px;
        }
        
        .section-title {
            font-weight: 700;
            color: var(--light);
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
            font-size: 1.8rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            border-radius: 2px;
        }
        
        .game-card {
            background: linear-gradient(135deg, var(--dark-2) 0%, var(--dark-3) 100%);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            transition: all 0.3s;
            margin-bottom: 25px;
            height: 100%;
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
        }
        
        .game-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
        }
        
        .game-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }
        
        .game-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        
        .game-content {
            padding: 20px;
        }
        
        .game-name {
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--light);
        }
        
        .game-category {
            color: var(--secondary);
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        
        .game-features {
            list-style: none;
            padding: 0;
            margin: 15px 0;
        }
        
        .game-features li {
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: var(--light);
            opacity: 0.8;
        }
        
        .game-features i {
            color: var(--secondary);
            margin-right: 8px;
            width: 16px;
        }
        
        .btn-game {
            background: linear-gradient(135deg, var(--secondary), #FF6B00);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 0;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s;
            text-decoration: none;
            display: block;
            text-align: center;
        }
        
        .btn-game:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 138, 0, 0.4);
            color: white;
        }
        
        .badge-popular {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, var(--secondary), #FF6B00);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
            z-index: 2;
            box-shadow: 0 4px 10px rgba(255, 138, 0, 0.3);
        }
        
        /* Category Filter */
        .category-filter {
            background: var(--dark-3);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .category-btn {
            background: var(--dark-2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 10px 20px;
            margin-right: 12px;
            margin-bottom: 12px;
            font-weight: 500;
            color: var(--light);
            transition: all 0.3s;
        }
        
        .category-btn:hover, .category-btn.active {
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 138, 0, 0.3);
        }
        
        /* Search Bar */
        .search-container {
            background: var(--dark-3);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .search-box {
            position: relative;
        }
        
        .search-input {
            background: var(--dark-2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 12px 20px 12px 45px;
            color: var(--light);
            width: 100%;
            font-size: 1rem;
        }
        
        .search-input:focus {
            outline: none;
            border-color: var(--secondary);
            box-shadow: 0 0 0 2px rgba(255, 138, 0, 0.2);
        }
        
        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--light);
            opacity: 0.7;
        }
        
        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--dark-1) 0%, var(--dark-2) 100%);
            color: white;
            padding: 50px 0 20px;
            margin-top: 60px;
            border-top: 1px solid rgba(255, 138, 0, 0.2);
        }
        
        .footer-title {
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 1.3rem;
            color: var(--secondary);
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--secondary);
            padding-left: 5px;
        }
        
        .social-icons a {
            color: white;
            font-size: 1.3rem;
            margin-right: 15px;
            display: inline-block;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            color: var(--secondary);
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 25px;
            margin-top: 40px;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
        }
        
        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 25px;
        }
        
        .breadcrumb-item a {
            color: var(--secondary);
            text-decoration: none;
            font-weight: 500;
        }
        
        .breadcrumb-item.active {
            color: var(--light);
        }
        
        .breadcrumb-item + .breadcrumb-item::before {
            color: var(--light);
            opacity: 0.5;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src={{asset('images/L.png')}} style="width: auto; height: 50px;>~``~
                <i class="fas fa-crown store-icon"></i>
                <span>TopUp Games</span>
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
                        <a class="nav-link active" href="#">Toko</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cara Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
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
                <li class="breadcrumb-item active">Toko Top Up</li>
            </ol>
        </nav>
        
        <!-- Hero Section -->
        <div class="hero-section">
            <h1 class="hero-title">Top Up Game Favorit Anda</h1>
            <p class="hero-subtitle">Pilih game yang ingin Anda top up. Proses cepat, aman, dan terpercaya hanya dalam hitungan detik!</p>
        </div>
        
        <!-- Search Bar -->
        <div class="search-container">
            <div class="search-box">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Cari game...">
            </div>
        </div>
        
        <!-- Category Filter -->
        <div class="category-filter">
            <h3 class="section-title">Kategori Game</h3>
            <div class="d-flex flex-wrap">
                <button class="category-btn active">Semua Game</button>
                <button class="category-btn">Mobile</button>
                <button class="category-btn">PC</button>
                <button class="category-btn">Console</button>
                <button class="category-btn">Populer</button>
                <button class="category-btn">Promo</button>
            </div>
        </div>
        
        <!-- Game Grid -->
        <section class="game-section">
            <h3 class="section-title">Pilih Game</h3>
            
            <div class="row">
                <!-- Mobile Legends -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="game-card">
                        <span class="badge-popular">TERLARIS</span>
                        <img src="https://cdn1.codashop.com/S/content/mobile/images/product/MLBB.jpg" alt="Mobile Legends" class="game-image">
                        <div class="game-content">
                            <h4 class="game-name">Mobile Legends</h4>
                            <p class="game-category">MOBA • Mobile</p>
                            <ul class="game-features">
                                <li><i class="fas fa-bolt"></i>Proses Instan</li>
                                <li><i class="fas fa-shield-alt"></i>100% Aman</li>
                                <li><i class="fas fa-gift"></i>Bonus Diamond</li>
                            </ul>
                            <a href="/home/nigg" class="btn-game">
                                <i class="fas fa-shopping-cart me-2"></i>Top Up Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Free Fire -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="game-card">
                        <span class="badge-popular">POPULER</span>
                        <img src="https://cdn1.codashop.com/S/content/mobile/images/product/TW-FREEFIRE.jpg" alt="Free Fire" class="game-image">
                        <div class="game-content">
                            <h4 class="game-name">Free Fire</h4>
                            <p class="game-category">Battle Royale • Mobile</p>
                            <ul class="game-features">
                                <li><i class="fas fa-bolt"></i>Proses Instan</li>
                                <li><i class="fas fa-shield-alt"></i>100% Aman</li>
                                <li><i class="fas fa-gift"></i>Bonus Diamond</li>
                            </ul>
                            <a href="free-fire.html" class="btn-game">
                                <i class="fas fa-shopping-cart me-2"></i>Top Up Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- PUBG Mobile -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="game-card">
                        <img src="https://cdn1.codashop.com/S/content/mobile/images/product/TW-PUBGMOBILE.jpg" alt="PUBG Mobile" class="game-image">
                        <div class="game-content">
                            <h4 class="game-name">PUBG Mobile</h4>
                            <p class="game-category">Battle Royale • Mobile</p>
                            <ul class="game-features">
                                <li><i class="fas fa-bolt"></i>Proses Instan</li>
                                <li><i class="fas fa-shield-alt"></i>100% Aman</li>
                                <li><i class="fas fa-gift"></i>Bonus UC</li>
                            </ul>
                            <a href="pubg-mobile.html" class="btn-game">
                                <i class="fas fa-shopping-cart me-2"></i>Top Up Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Valorant -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="game-card">
                        <img src="https://cdn1.codashop.com/S/content/mobile/images/product/TW-VALORANT.jpg" alt="Valorant" class="game-image">
                        <div class="game-content">
                            <h4 class="game-name">Valorant</h4>
                            <p class="game-category">FPS • PC</p>
                            <ul class="game-features">
                                <li><i class="fas fa-bolt"></i>Proses Instan</li>
                                <li><i class="fas fa-shield-alt"></i>100% Aman</li>
                                <li><i class="fas fa-gift"></i>Bonus Points</li>
                            </ul>
                            <a href="valorant.html" class="btn-game">
                                <i class="fas fa-shopping-cart me-2"></i>Top Up Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Genshin Impact -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="game-card">
                        <span class="badge-popular">TRENDING</span>
                        <img src="https://cdn1.codashop.com/S/content/mobile/images/product/TW-GENSHINIMPACT.jpg" alt="Genshin Impact" class="game-image">
                        <div class="game-content">
                            <h4 class="game-name">Genshin Impact</h4>
                            <p class="game-category">RPG • Multiplatform</p>
                            <ul class="game-features">
                                <li><i class="fas fa-bolt"></i>Proses Instan</li>
                                <li><i class="fas fa-shield-alt"></i>100% Aman</li>
                                <li><i class="fas fa-gift"></i>Bonus Genesis Crystal</li>
                            </ul>
                            <a href="genshin-impact.html" class="btn-game">
                                <i class="fas fa-shopping-cart me-2"></i>Top Up Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Call of Duty Mobile -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="game-card">
                        <img src="https://cdn1.codashop.com/S/content/mobile/images/product/TW-CALLOFDUTYMOBILE.jpg" alt="Call of Duty Mobile" class="game-image">
                        <div class="game-content">
                            <h4 class="game-name">Call of Duty Mobile</h4>
                            <p class="game-category">FPS • Mobile</p>
                            <ul class="game-features">
                                <li><i class="fas fa-bolt"></i>Proses Instan</li>
                                <li><i class="fas fa-shield-alt"></i>100% Aman</li>
                                <li><i class="fas fa-gift"></i>Bonus CP</li>
                            </ul>
                            <a href="cod-mobile.html" class="btn-game">
                                <i class="fas fa-shopping-cart me-2"></i>Top Up Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- League of Legends: Wild Rift -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="game-card">
                        <img src="https://cdn1.codashop.com/S/content/mobile/images/product/TW-LEAGUEOFLEGENDSWILDRIFT.jpg" alt="Wild Rift" class="game-image">
                        <div class="game-content">
                            <h4 class="game-name">Wild Rift</h4>
                            <p class="game-category">MOBA • Mobile</p>
                            <ul class="game-features">
                                <li><i class="fas fa-bolt"></i>Proses Instan</li>
                                <li><i class="fas fa-shield-alt"></i>100% Aman</li>
                                <li><i class="fas fa-gift"></i>Bonus Wild Cores</li>
                            </ul>
                            <a href="wild-rift.html" class="btn-game">
                                <i class="fas fa-shopping-cart me-2"></i>Top Up Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Arena of Valor -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="game-card">
                        <img src="https://cdn1.codashop.com/S/content/mobile/images/product/TW-ARENAOFVALOR.jpg" alt="Arena of Valor" class="game-image">
                        <div class="game-content">
                            <h4 class="game-name">Arena of Valor</h4>
                            <p class="game-category">MOBA • Mobile</p>
                            <ul class="game-features">
                                <li><i class="fas fa-bolt"></i>Proses Instan</li>
                                <li><i class="fas fa-shield-alt"></i>100% Aman</li>
                                <li><i class="fas fa-gift"></i>Bonus Vouchers</li>
                            </ul>
                            <a href="aov.html" class="btn-game">
                                <i class="fas fa-shopping-cart me-2"></i>Top Up Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Clash of Clans -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="game-card">
                        <img src="https://cdn1.codashop.com/S/content/mobile/images/product/TW-CLASHOFCLANS.jpg" alt="Clash of Clans" class="game-image">
                        <div class="game-content">
                            <h4 class="game-name">Clash of Clans</h4>
                            <p class="game-category">Strategy • Mobile</p>
                            <ul class="game-features">
                                <li><i class="fas fa-bolt"></i>Proses Instan</li>
                                <li><i class="fas fa-shield-alt"></i>100% Aman</li>
                                <li><i class="fas fa-gift"></i>Bonus Gems</li>
                            </ul>
                            <a href="coc.html" class="btn-game">
                                <i class="fas fa-shopping-cart me-2"></i>Top Up Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="footer-title">TopUp Games</h5>
                    <p>Layanan top up game terpercaya dengan proses instan dan harga terjangkau.</p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
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
                        <li><i class="fas fa-envelope me-2"></i> cs@topupgames.com</li>
                        <li><i class="fab fa-whatsapp me-2"></i> +62 812 3456 7890</li>
                        <li><i class="fas fa-clock me-2"></i> Buka 24/7</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p class="mb-0">&copy; 2023 TopUp Games. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script untuk filter dan pencarian game
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.querySelector('.search-input');
            const categoryButtons = document.querySelectorAll('.category-btn');
            const gameCards = document.querySelectorAll('.game-card');
            
            // Filter berdasarkan kategori
            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    categoryButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const category = this.textContent.trim();
                    filterGames(category, searchInput.value);
                });
            });
            
            // Search functionality
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                const activeCategory = document.querySelector('.category-btn.active').textContent.trim();
                filterGames(activeCategory, searchTerm);
            });
            
            function filterGames(category, searchTerm) {
                gameCards.forEach(card => {
                    const gameName = card.querySelector('.game-name').textContent.toLowerCase();
                    const gameCategory = card.querySelector('.game-category').textContent.toLowerCase();
                    
                    const matchesCategory = category === 'Semua Game' || 
                                            (category === 'Mobile' && gameCategory.includes('mobile')) ||
                                            (category === 'PC' && gameCategory.includes('pc')) ||
                                            (category === 'Console' && gameCategory.includes('console')) ||
                                            (category === 'Populer' && card.querySelector('.badge-popular')) ||
                                            (category === 'Promo' && card.querySelector('.badge-popular'));
                    
                    const matchesSearch = gameName.includes(searchTerm) || 
                                            gameCategory.includes(searchTerm);
                    
                    if (matchesCategory && matchesSearch) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }
        });
    </script>
</body>
</html>