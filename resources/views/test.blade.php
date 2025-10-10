<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html><!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honkai: Star Rail Top-Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Exo+2:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Exo 2', sans-serif;
        }

        :root {
            --primary-color: #0a0a14;
            --secondary-color: #1a1a2e;
            --accent-color: #ffffff;
            --highlight-color: #00e5ff;
            --highlight-color-2: #b967ff;
            --text-color: #f0f0f0;
            --border-color: #2a2a4a;
            --success-color: #00ff9d;
        }

        body {
            background: 
                radial-gradient(circle at 20% 30%, rgba(0, 229, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(185, 103, 255, 0.1) 0%, transparent 50%),
                linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: var(--text-color);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Animated Background Elements */
        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .star {
            position: absolute;
            background-color: white;
            border-radius: 50%;
            animation: twinkle var(--duration, 5s) infinite ease-in-out;
            opacity: var(--opacity, 0.7);
        }

        @keyframes twinkle {
            0%, 100% { opacity: var(--opacity, 0.7); }
            50% { opacity: calc(var(--opacity, 0.7) * 0.3); }
        }

        .floating-rocks {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        .rock {
            position: absolute;
            width: 100px;
            height: 100px;
            background: 
                radial-gradient(circle at 30% 30%, #3a3a5a, #2a2a4a);
            border-radius: 50%;
            filter: blur(1px);
            opacity: 0.3;
            animation: float var(--duration, 30s) infinite linear;
        }

        @keyframes float {
            0% { transform: translateY(100vh) rotate(0deg); }
            100% { transform: translateY(-100px) rotate(360deg); }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            margin-bottom: 30px;
            position: relative;
        }

        header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--highlight-color), transparent);
        }

        .logo-container {
            display: flex;
            align-items: center;
            position: relative;
        }

        .logo {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--highlight-color), var(--highlight-color-2));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            box-shadow: 0 0 20px rgba(0, 229, 255, 0.5);
            animation: logoGlow 3s infinite alternate;
            position: relative;
            overflow: hidden;
        }

        .logo::before {
            content: '';
            position: absolute;
            width: 150%;
            height: 150%;
            background: conic-gradient(transparent, var(--highlight-color), transparent, var(--highlight-color-2), transparent);
            animation: rotate 4s linear infinite;
        }

        .logo::after {
            content: '';
            position: absolute;
            width: 90%;
            height: 90%;
            background: var(--secondary-color);
            border-radius: 50%;
        }

        .logo-image {
            width: 90%;
            height: 90%;
            object-fit: contain;
            border-radius: 50%;
            z-index: 1;
            position: relative;
        }

        @keyframes logoGlow {
            0% { box-shadow: 0 0 20px rgba(0, 229, 255, 0.5); }
            100% { box-shadow: 0 0 30px rgba(185, 103, 255, 0.7); }
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .logo-text {
            font-size: 32px;
            font-weight: 900;
            font-family: 'Orbitron', sans-serif;
            background: linear-gradient(90deg, var(--highlight-color), var(--highlight-color-2));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 0 0 10px rgba(0, 229, 255, 0.5);
            animation: textGlow 2s infinite alternate;
        }

        @keyframes textGlow {
            0% { text-shadow: 0 0 10px rgba(0, 229, 255, 0.5); }
            100% { text-shadow: 0 0 15px rgba(185, 103, 255, 0.7), 0 0 20px rgba(185, 103, 255, 0.5); }
        }

        .animated-text {
            font-size: 18px;
            font-weight: 300;
            color: var(--highlight-color);
            animation: glow 2s infinite alternate;
            font-family: 'Orbitron', sans-serif;
            letter-spacing: 1px;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 5px var(--highlight-color);
            }
            to {
                text-shadow: 0 0 15px var(--highlight-color), 0 0 20px var(--highlight-color);
            }
        }

        .btn-game-info {
            background: linear-gradient(135deg, var(--highlight-color), var(--highlight-color-2));
            border: none;
            border-radius: 30px;
            padding: 12px 25px;
            color: var(--primary-color);
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 229, 255, 0.3);
            font-family: 'Exo 2', sans-serif;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-game-info:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 229, 255, 0.5);
        }

        /* Logo Upload Section */
        .logo-upload {
            margin-top: 10px;
            padding: 10px;
            background: rgba(26, 26, 46, 0.5);
            border-radius: 10px;
            border: 1px dashed var(--border-color);
        }

        .logo-upload p {
            font-size: 12px;
            margin-bottom: 8px;
            color: var(--highlight-color);
        }

        .logo-upload input {
            width: 100%;
            padding: 8px;
            background: rgba(26, 26, 46, 0.8);
            border: 1px solid var(--border-color);
            border-radius: 5px;
            color: var(--text-color);
            font-size: 12px;
        }

        /* Main Content */
        .main-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .game-info {
            background: linear-gradient(135deg, rgba(45, 45, 78, 0.7), rgba(26, 26, 46, 0.9));
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            border: 1px solid var(--border-color);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .game-info::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(0, 229, 255, 0.1), transparent);
            transform: rotate(45deg);
            animation: shine 6s infinite linear;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .game-info h2 {
            color: var(--highlight-color);
            margin-bottom: 20px;
            font-size: 24px;
            display: flex;
            align-items: center;
            font-family: 'Orbitron', sans-serif;
            position: relative;
            z-index: 1;
        }

        .game-info h2 i {
            margin-right: 10px;
        }

        .game-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, var(--secondary-color), #3a3a5a);
            border-radius: 15px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
            border: 1px solid var(--border-color);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .game-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(0, 229, 255, 0.1), transparent);
            animation: imageShine 3s infinite linear;
        }

        @keyframes imageShine {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .game-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }

        .game-desc {
            line-height: 1.6;
            color: #cccccc;
            position: relative;
            z-index: 1;
        }

        /* Game Image Upload Section */
        .game-image-upload {
            margin-top: 10px;
            padding: 10px;
            background: rgba(26, 26, 46, 0.5);
            border-radius: 10px;
            border: 1px dashed var(--border-color);
        }

        .game-image-upload p {
            font-size: 12px;
            margin-bottom: 8px;
            color: var(--highlight-color);
        }

        .game-image-upload input {
            width: 100%;
            padding: 8px;
            background: rgba(26, 26, 46, 0.8);
            border: 1px solid var(--border-color);
            border-radius: 5px;
            color: var(--text-color);
            font-size: 12px;
        }

        /* Top Up Form */
        .topup-form {
            background: linear-gradient(135deg, rgba(45, 45, 78, 0.7), rgba(26, 26, 46, 0.9));
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            border: 1px solid var(--border-color);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .topup-form::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(185, 103, 255, 0.1), transparent);
            transform: rotate(45deg);
            animation: shine 8s infinite linear;
        }

        .topup-form h2 {
            color: var(--highlight-color);
            margin-bottom: 20px;
            font-size: 24px;
            display: flex;
            align-items: center;
            font-family: 'Orbitron', sans-serif;
            position: relative;
            z-index: 1;
        }

        .topup-form h2 i {
            margin-right: 10px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--highlight-color);
            font-weight: 500;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 12px 15px;
            background: rgba(26, 26, 46, 0.8);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            color: var(--text-color);
            font-size: 16px;
            transition: all 0.3s;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: var(--highlight-color);
            box-shadow: 0 0 10px rgba(0, 229, 255, 0.3), inset 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .package-options {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 10px;
        }

        .package-option {
            background: rgba(26, 26, 46, 0.8);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .package-option::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, transparent, rgba(0, 229, 255, 0.1), transparent);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .package-option:hover {
            border-color: var(--highlight-color);
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 229, 255, 0.3);
        }

        .package-option:hover::before {
            opacity: 1;
        }

        .package-option.selected {
            border-color: var(--highlight-color);
            background: rgba(0, 229, 255, 0.1);
            box-shadow: 0 0 15px rgba(0, 229, 255, 0.3);
            transform: scale(1.05);
        }

        .package-name {
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--highlight-color);
        }

        .package-price {
            font-size: 18px;
            font-weight: 700;
            color: var(--success-color);
        }

        .payment-methods {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-top: 10px;
        }

        .payment-method {
            background: rgba(26, 26, 46, 0.8);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .payment-method::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, transparent, rgba(185, 103, 255, 0.1), transparent);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .payment-method:hover {
            border-color: var(--highlight-color-2);
            transform: translateY(-3px);
        }

        .payment-method:hover::before {
            opacity: 1;
        }

        .payment-method.selected {
            border-color: var(--highlight-color-2);
            background: rgba(185, 103, 255, 0.1);
            box-shadow: 0 0 10px rgba(185, 103, 255, 0.3);
        }

        .payment-icon {
            font-size: 24px;
            margin-bottom: 5px;
            color: var(--highlight-color);
        }

        .payment-name {
            font-size: 12px;
        }

        .btn-submit {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, var(--highlight-color), var(--highlight-color-2));
            border: none;
            border-radius: 12px;
            color: var(--primary-color);
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 10px;
            box-shadow: 0 5px 15px rgba(0, 229, 255, 0.3);
            font-family: 'Orbitron', sans-serif;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--highlight-color-2), var(--highlight-color));
            opacity: 0;
            transition: opacity 0.3s;
            z-index: -1;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 229, 255, 0.5);
        }

        .btn-submit:hover::before {
            opacity: 1;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
            color: #999;
            font-size: 14px;
            position: relative;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--highlight-color), transparent);
        }

        /* Popup Game */
        .popup-game {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(10, 10, 20, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            backdrop-filter: blur(5px);
        }

        .popup-game.active {
            opacity: 1;
            visibility: visible;
        }

        .popup-content {
            background: linear-gradient(135deg, rgba(45, 45, 78, 0.9), rgba(26, 26, 46, 0.95));
            width: 90%;
            max-width: 800px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 0 30px rgba(0, 229, 255, 0.5);
            position: relative;
            border: 1px solid var(--border-color);
            animation: popupAppear 0.5s ease-out;
        }

        @keyframes popupAppear {
            0% { transform: scale(0.8); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        .popup-header {
            padding: 20px;
            background: rgba(26, 26, 46, 0.8);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border-color);
        }

        .popup-title {
            font-size: 24px;
            color: var(--highlight-color);
            font-family: 'Orbitron', sans-serif;
        }

        .close-popup {
            background: none;
            border: none;
            color: var(--text-color);
            font-size: 24px;
            cursor: pointer;
            transition: color 0.3s;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .close-popup:hover {
            color: var(--highlight-color);
            background: rgba(0, 229, 255, 0.1);
        }

        .popup-body {
            padding: 20px;
            max-height: 60vh;
            overflow-y: auto;
        }

        .popup-image {
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, #1a1a2e, #2a2a4a);
            border-radius: 15px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border: 1px solid var(--border-color);
            position: relative;
        }

        .popup-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(0, 229, 255, 0.1), transparent);
            animation: imageShine 3s infinite linear;
        }

        .popup-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }

        .popup-desc {
            line-height: 1.6;
            color: #cccccc;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-content {
                grid-template-columns: 1fr;
            }
            
            .package-options {
                grid-template-columns: 1fr;
            }
            
            .payment-methods {
                grid-template-columns: repeat(2, 1fr);
            }
            
            header {
                flex-direction: column;
                text-align: center;
            }
            
            .logo-container {
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background Elements -->
    <div class="stars" id="stars"></div>
    <div class="floating-rocks" id="rocks"></div>

    <div class="container">
        <header>
            <div class="logo-container">
                <div class="logo">
                    <!-- Logo image that can be changed -->
                    <img src="{{asset('images/Leviathan.jpg')}}" alt="Store Logo" class="logo-image" id="storeLogo">
                </div>
                <div>
                    <h1 class="logo-text">Star Rail Top-Up</h1>
                    <p class="animated-text">Top Up Oneiric Shards dengan Mudah dan Cepat</p>
                    
                    
                </div>
            </div>
            <div class="header-actions">
                <button class="btn-game-info" id="btnGameInfo">
                    <i class="fas fa-info-circle"></i> Info Game
                </button>
            </div>
        </header>

        <main class="main-content">
            <section class="game-info">
                <h2><i class="fas fa-gamepad"></i> Honkai: Star Rail</h2>
                <div class="game-image">
                    <!-- Game image that can be changed -->
                    <img src="{{asset('images/hsr.jpg')}}" alt="Honkai Star Rail" class="game-image-content" id="gameImage">
                </div>
                
                <div class="game-desc">
                    <p>Honkai: Star Rail adalah game RPG fantasi sci-fi yang dikembangkan oleh HoYoverse. Bergabunglah dengan Trailblazers dalam petualangan epik melintasi bintang-bintang.</p>
                    <p style="margin-top: 15px;">Top up Oneiric Shards untuk mendapatkan karakter dan light cone favorit Anda!</p>
                </div>
            </section>

            <section class="topup-form">
                <h2><i class="fas fa-shopping-cart"></i> Form Top-Up</h2>
                
                <div class="form-group">
                    <label for="player-id">Player ID</label>
                    <input type="text" id="player-id" placeholder="Masukkan ID Game Anda">
                </div>
                
                <div class="form-group">
                    <label for="server">Server</label>
                    <select id="server">
                        <option value="america">America</option>
                        <option value="europe">Europe</option>
                        <option value="asia">Asia</option>
                        <option value="taiwan">TW, HK, MO</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Pilih Paket Oneiric Shards</label>
                    <div class="package-options">
                        <div class="package-option" data-value="60">
                            <div class="package-name">60 Oneiric Shards</div>
                            <div class="package-price">Rp 15.000</div>
                        </div>
                        <div class="package-option" data-value="300">
                            <div class="package-name">300 + 30 Oneiric Shards</div>
                            <div class="package-price">Rp 75.000</div>
                        </div>
                        <div class="package-option" data-value="980">
                            <div class="package-name">980 + 110 Oneiric Shards</div>
                            <div class="package-price">Rp 245.000</div>
                        </div>
                        <div class="package-option" data-value="1980">
                            <div class="package-name">1980 + 260 Oneiric Shards</div>
                            <div class="package-price">Rp 490.000</div>
                        </div>
                        <div class="package-option" data-value="3280">
                            <div class="package-name">3280 + 600 Oneiric Shards</div>
                            <div class="package-price">Rp 815.000</div>
                        </div>
                        <div class="package-option" data-value="6480">
                            <div class="package-name">6480 + 1600 Oneiric Shards</div>
                            <div class="package-price">Rp 1.630.000</div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Metode Pembayaran</label>
                    <div class="payment-methods">
                        <div class="payment-method" data-value="gopay">
                            <div class="payment-icon"><i class="fas fa-mobile-alt"></i></div>
                            <div class="payment-name">GoPay</div>
                        </div>
                        <div class="payment-method" data-value="ovo">
                            <div class="payment-icon"><i class="fas fa-wallet"></i></div>
                            <div class="payment-name">OVO</div>
                        </div>
                        <div class="payment-method" data-value="dana">
                            <div class="payment-icon"><i class="fas fa-money-bill-wave"></i></div>
                            <div class="payment-name">DANA</div>
                        </div>
                        <div class="payment-method" data-value="linkaja">
                            <div class="payment-icon"><i class="fas fa-qrcode"></i></div>
                            <div class="payment-name">LinkAja</div>
                        </div>
                        <div class="payment-method" data-value="bank">
                            <div class="payment-icon"><i class="fas fa-university"></i></div>
                            <div class="payment-name">Transfer Bank</div>
                        </div>
                        <div class="payment-method" data-value="credit">
                            <div class="payment-icon"><i class="fas fa-credit-card"></i></div>
                            <div class="payment-name">Kartu Kredit</div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="payment-number">Nomor Pembayaran</label>
                    <input type="text" id="payment-number" placeholder="Masukkan nomor sesuai metode pembayaran">
                </div>
                
                <button class="btn-submit">Konfirmasi & Bayar</button>
            </section>
        </main>

        <footer>
            <p>&copy; 2023 Star Rail Top-Up. All rights reserved. Honkai: Star Rail is a trademark of HoYoverse.</p>
        </footer>
    </div>

    <!-- Popup Game Info -->
    <div class="popup-game" id="popupGame">
        <div class="popup-content">
            <div class="popup-header">
                <h3 class="popup-title">Honkai: Star Rail</h3>
                <button class="close-popup" id="closePopup">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="popup-body">
                <div class="popup-image">
                    <i class="fas fa-space-shuttle" style="font-size: 80px; color: var(--highlight-color);"></i>
                </div>
                <div class="popup-desc">
                    <p>Honkai: Star Rail adalah game role-playing adventure yang dikembangkan oleh HoYoverse, pembuat Genshin Impact dan Honkai Impact 3rd. Game ini menawarkan pengalaman sci-fi fantasy dengan grafis yang memukau dan sistem pertarungan yang menarik.</p>
                    <p style="margin-top: 15px;">Dalam game ini, pemain akan menjelajahi berbagai dunia dengan karakter yang unik dan cerita yang mendalam. Oneiric Shards adalah mata uang premium dalam game yang dapat digunakan untuk membeli item, karakter, dan light cone.</p>
                    <p style="margin-top: 15px;">Dengan top-up di website kami, proses pengisian Oneiric Shards menjadi lebih mudah, cepat, dan aman. Nikmati berbagai promo dan bonus yang kami tawarkan!</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Create animated stars
        const starsContainer = document.getElementById('stars');
        for (let i = 0; i < 150; i++) {
            const star = document.createElement('div');
            star.classList.add('star');
            star.style.left = `${Math.random() * 100}%`;
            star.style.top = `${Math.random() * 100}%`;
            star.style.width = `${Math.random() * 3}px`;
            star.style.height = star.style.width;
            star.style.setProperty('--duration', `${5 + Math.random() * 10}s`);
            star.style.setProperty('--opacity', `${0.3 + Math.random() * 0.7}`);
            starsContainer.appendChild(star);
        }

        // Create floating rocks
        const rocksContainer = document.getElementById('rocks');
        for (let i = 0; i < 15; i++) {
            const rock = document.createElement('div');
            rock.classList.add('rock');
            rock.style.left = `${Math.random() * 100}%`;
            rock.style.width = `${50 + Math.random() * 100}px`;
            rock.style.height = rock.style.width;
            rock.style.setProperty('--duration', `${20 + Math.random() * 40}s`);
            rocksContainer.appendChild(rock);
        }

        // Logo Upload Functionality
        const logoUpload = document.getElementById('logoUpload');
        const storeLogo = document.getElementById('storeLogo');

        logoUpload.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    storeLogo.src = event.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Game Image Upload Functionality
        const gameImageUpload = document.getElementById('gameImageUpload');
        const gameImage = document.getElementById('gameImage');

        gameImageUpload.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    gameImage.src = event.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Package Selection
        const packageOptions = document.querySelectorAll('.package-option');
        packageOptions.forEach(option => {
            option.addEventListener('click', () => {
                packageOptions.forEach(opt => opt.classList.remove('selected'));
                option.classList.add('selected');
            });
        });

        // Payment Method Selection
        const paymentMethods = document.querySelectorAll('.payment-method');
        paymentMethods.forEach(method => {
            method.addEventListener('click', () => {
                paymentMethods.forEach(m => m.classList.remove('selected'));
                method.classList.add('selected');
                
                // Update payment number placeholder based on selected method
                const paymentNumber = document.getElementById('payment-number');
                const methodValue = method.getAttribute('data-value');
                
                if (methodValue === 'gopay' || methodValue === 'ovo' || methodValue === 'dana' || methodValue === 'linkaja') {
                    paymentNumber.placeholder = 'Masukkan nomor telepon';
                } else if (methodValue === 'bank') {
                    paymentNumber.placeholder = 'Masukkan nomor rekening';
                } else if (methodValue === 'credit') {
                    paymentNumber.placeholder = 'Masukkan nomor kartu kredit';
                }
            });
        });

        // Popup Game Info
        const btnGameInfo = document.getElementById('btnGameInfo');
        const popupGame = document.getElementById('popupGame');
        const closePopup = document.getElementById('closePopup');

        btnGameInfo.addEventListener('click', () => {
            popupGame.classList.add('active');
        });

        closePopup.addEventListener('click', () => {
            popupGame.classList.remove('active');
        });

        // Close popup when clicking outside
        popupGame.addEventListener('click', (e) => {
            if (e.target === popupGame) {
                popupGame.classList.remove('active');
            }
        });

        // Form Submission
        const btnSubmit = document.querySelector('.btn-submit');
        btnSubmit.addEventListener('click', () => {
            const playerId = document.getElementById('player-id').value;
            const server = document.getElementById('server').value;
            const selectedPackage = document.querySelector('.package-option.selected');
            const selectedPayment = document.querySelector('.payment-method.selected');
            const paymentNumber = document.getElementById('payment-number').value;
            
            if (!playerId) {
                alert('Masukkan Player ID terlebih dahulu!');
                return;
            }
            
            if (!selectedPackage) {
                alert('Pilih paket Oneiric Shards terlebih dahulu!');
                return;
            }
            
            if (!selectedPayment) {
                alert('Pilih metode pembayaran terlebih dahulu!');
                return;
            }
            
            if (!paymentNumber) {
                alert('Masukkan nomor pembayaran terlebih dahulu!');
                return;
            }
            
            // Simulasi proses pembayaran
            alert(`Top-up berhasil diproses!\n\nDetail:\nPlayer ID: ${playerId}\nServer: ${server}\nPaket: ${selectedPackage.querySelector('.package-name').textContent}\nMetode: ${selectedPayment.querySelector('.payment-name').textContent}\nNomor: ${paymentNumber}\n\nSilakan selesaikan pembayaran Anda.`);
        });

        // Add hover effect to form inputs
        const formInputs = document.querySelectorAll('input, select');
        formInputs.forEach(input => {
            input.addEventListener('mouseenter', () => {
                input.style.transform = 'translateY(-2px)';
                input.style.boxShadow = '0 5px 15px rgba(0, 229, 255, 0.2)';
            });
            
            input.addEventListener('mouseleave', () => {
                if (document.activeElement !== input) {
                    input.style.transform = 'translateY(0)';
                    input.style.boxShadow = 'inset 0 2px 5px rgba(0, 0, 0, 0.3)';
                }
            });
        });
    </script>
</body>
</html>