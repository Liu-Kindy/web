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
        /* CSS styles tetap sama seperti sebelumnya */
        :root {
            --ml-primary: #FF8A00;
            --ml-secondary: #3A0CA3;
            --ml-accent: #4361EE;
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
        
        /* ... (semua CSS styles lainnya tetap sama) ... */
        
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
    </style>
</head>
<body>
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
                <!-- Product cards tetap sama -->
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
                
                <!-- ... (product cards lainnya) ... -->
                
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
                        window.location.href = '/pembayaran';
                    }, 500);
                } else {
                    alert('Harap lengkapi semua data dengan benar!');
                }
            });
        });
    </script>
</body>
</html>