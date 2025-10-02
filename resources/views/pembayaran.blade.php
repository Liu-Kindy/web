<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - ML Diamond Store</title>
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
            --warning: #F59E0B;
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
        
        /* Progress Steps */
        .progress-container {
            background: var(--dark-3);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .progress-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-bottom: 30px;
        }
        
        .progress-steps::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--dark-2);
            transform: translateY(-50%);
            z-index: 1;
        }
        
        .progress-bar {
            position: absolute;
            top: 50%;
            left: 0;
            height: 3px;
            background: var(--ml-primary);
            transform: translateY(-50%);
            z-index: 2;
            transition: width 0.3s ease;
        }
        
        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 3;
        }
        
        .step-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--dark-2);
            border: 3px solid var(--dark-2);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 8px;
            transition: all 0.3s;
        }
        
        .step.active .step-icon {
            background: var(--ml-primary);
            border-color: var(--ml-primary);
        }
        
        .step.completed .step-icon {
            background: var(--success);
            border-color: var(--success);
        }
        
        .step-text {
            font-size: 0.9rem;
            font-weight: 500;
            text-align: center;
        }
        
        /* Payment Container */
        .payment-container {
            background: var(--dark-3);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
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
        
        /* Order Summary */
        .order-summary {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
        }
        
        .order-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .order-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .order-total {
            display: flex;
            justify-content: space-between;
            font-weight: 700;
            font-size: 1.2rem;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 2px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Payment Methods */
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
        
        /* Payment Details */
        .payment-details {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }
        
        .payment-instruction {
            margin-bottom: 15px;
        }
        
        .payment-steps {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .payment-steps li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }
        
        .payment-steps li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--success);
            font-weight: bold;
        }
        
        .virtual-account {
            background: var(--dark-1);
            border-radius: 8px;
            padding: 15px;
            margin: 15px 0;
            text-align: center;
        }
        
        .account-number {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 2px;
            margin: 10px 0;
            color: var(--ml-primary);
        }
        
        .copy-btn {
            background: var(--ml-primary);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 15px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .copy-btn:hover {
            background: #FF6B00;
        }
        
        .countdown {
            text-align: center;
            margin: 20px 0;
            padding: 15px;
            background: rgba(239, 68, 68, 0.1);
            border-radius: 8px;
            border: 1px solid var(--danger);
        }
        
        .countdown-timer {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--danger);
            margin: 10px 0;
        }
        
        /* Buttons */
        .btn-primary {
            background: linear-gradient(135deg, var(--ml-primary), #FF6B00);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 138, 0, 0.4);
        }
        
        .btn-outline-primary {
            color: var(--ml-primary);
            border-color: var(--ml-primary);
            padding: 12px 30px;
            font-weight: 600;
        }
        
        .btn-outline-primary:hover {
            background: var(--ml-primary);
            color: var(--dark-1);
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
        
        /* QR Code */
        .qr-container {
            text-align: center;
            margin: 20px 0;
        }
        
        .qr-code {
            width: 200px;
            height: 200px;
            background: white;
            border-radius: 10px;
            padding: 15px;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .qr-placeholder {
            color: var(--dark-1);
            font-weight: 600;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .progress-steps {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .progress-steps::before {
                display: none;
            }
            
            .progress-bar {
                display: none;
            }
            
            .step {
                flex-direction: row;
                gap: 15px;
            }
            
            .step-text {
                text-align: left;
            }
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
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <!-- Progress Steps -->
        <div class="progress-container">
            <div class="progress-steps">
                <div class="progress-bar" style="width: 66%;"></div>
                <div class="step completed">
                    <div class="step-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="step-text">Pilih Produk</div>
                </div>
                <div class="step completed">
                    <div class="step-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="step-text">Konfirmasi Data</div>
                </div>
                <div class="step active">
                    <div class="step-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <div class="step-text">Pembayaran</div>
                </div>
                <div class="step">
                    <div class="step-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="step-text">Selesai</div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-8">
                    <h3 class="section-title">Metode Pembayaran</h3>
                    
                    <!-- E-Wallet Methods -->
                    <div class="payment-method selected" data-method="gopay">
                        <div class="d-flex align-items-center">
                            <i class="fab fa-google-wallet payment-icon"></i>
                            <div class="payment-info">
                                <div class="payment-name">Gopay</div>
                                <div class="payment-desc">Bayar dengan saldo Gopay atau transfer bank</div>
                            </div>
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                    </div>
                    
                    <div class="payment-method" data-method="ovo">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-mobile-alt payment-icon"></i>
                            <div class="payment-info">
                                <div class="payment-name">OVO</div>
                                <div class="payment-desc">Bayar dengan saldo OVO</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="payment-method" data-method="dana">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-wallet payment-icon"></i>
                            <div class="payment-info">
                                <div class="payment-name">DANA</div>
                                <div class="payment-desc">Bayar dengan saldo DANA</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="payment-method" data-method="linkaja">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-bolt payment-icon"></i>
                            <div class="payment-info">
                                <div class="payment-name">LinkAja</div>
                                <div class="payment-desc">Bayar dengan LinkAja</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Virtual Account Methods -->
                    <h4 class="section-title mt-4">Virtual Account</h4>
                    
                    <div class="payment-method" data-method="bca">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-university payment-icon"></i>
                            <div class="payment-info">
                                <div class="payment-name">BCA Virtual Account</div>
                                <div class="payment-desc">Transfer via BCA, BCA Mobile, atau ATM BCA</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="payment-method" data-method="bni">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-landmark payment-icon"></i>
                            <div class="payment-info">
                                <div class="payment-name">BNI Virtual Account</div>
                                <div class="payment-desc">Transfer via BNI, BNI Mobile, atau ATM BNI</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="payment-method" data-method="bri">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-piggy-bank payment-icon"></i>
                            <div class="payment-info">
                                <div class="payment-name">BRI Virtual Account</div>
                                <div class="payment-desc">Transfer via BRI, BRI Mobile, atau ATM BRI</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Payment Details for Gopay -->
                    <div class="payment-details">
                        <h5 class="mb-3">Cara Pembayaran via Gopay</h5>
                        <div class="payment-instruction">
                            <ul class="payment-steps">
                                <li>Buka aplikasi Gojek di ponsel Anda</li>
                                <li>Pilih menu "Bayar" dan scan QR code di bawah</li>
                                <li>Atau masuk ke "Bayar" → "Bayar dengan QR"</li>
                                <li>Scan QR code yang tersedia</li>
                                <li>Konfirmasi pembayaran Anda</li>
                            </ul>
                        </div>
                        
                        <div class="qr-container">
                            <div class="qr-code">
                                <div class="qr-placeholder">
                                    <i class="fas fa-qrcode fa-4x mb-2"></i>
                                    <div>QR CODE</div>
                                    <div>Gopay Payment</div>
                                </div>
                            </div>
                            <p>Scan QR code di atas menggunakan aplikasi Gojek</p>
                        </div>
                        
                        <div class="countdown">
                            <p>Selesaikan pembayaran dalam:</p>
                            <div class="countdown-timer" id="countdown">14:59</div>
                            <p>Setelah waktu habis, order akan dibatalkan secara otomatis</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="order-summary">
                        <h5 class="mb-3">Ringkasan Pesanan</h5>
                        <div class="order-item">
                            <span>Produk:</span>
                            <span>86 Diamonds</span>
                        </div>
                        <div class="order-item">
                            <span>Player ID:</span>
                            <span>123456789 (1234)</span>
                        </div>
                        <div class="order-item">
                            <span>Nickname:</span>
                            <span>ProPlayerML</span>
                        </div>
                        <div class="order-item">
                            <span>Harga Produk:</span>
                            <span>Rp 22.000</span>
                        </div>
                        <div class="order-item">
                            <span>Biaya Admin:</span>
                            <span>Rp 0</span>
                        </div>
                        <div class="order-total">
                            <span>Total:</span>
                            <span>Rp 22.000</span>
                        </div>
                    </div>
                    
                    <div class="order-summary">
                        <h5 class="mb-3">Informasi Kontak</h5>
                        <div class="order-item">
                            <span>Email:</span>
                            <span>user@example.com</span>
                        </div>
                        <div class="order-item">
                            <span>WhatsApp:</span>
                            <span>08123456789</span>
                        </div>
                        <div class="order-item">
                            <span>Order ID:</span>
                            <span>ML2023123456</span>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" id="payButton">
                            <i class="fas fa-lock me-2"></i>Bayar Sekarang
                        </button>
                        <button class="btn btn-outline-primary" id="cancelButton">
                            Batalkan Pesanan
                        </button>
                    </div>
                    
                    <div class="mt-3 text-center">
                        <small class="text-muted">
                            <i class="fas fa-shield-alt me-1"></i>
                            Pembayaran aman dan terenkripsi
                        </small>
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
                        <li><i class="fas fa-clock me-2"></i> Buka 24/7</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p class="mb-0">&copy; 2023 ML Diamond Store. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background: var(--dark-3); color: var(--light);">
                <div class="modal-body text-center p-5">
                    <div class="success-icon mb-4">
                        <i class="fas fa-check-circle" style="font-size: 4rem; color: var(--success);"></i>
                    </div>
                    <h4 class="mb-3">Pembayaran Berhasil!</h4>
                    <p class="mb-4">Terima kasih telah melakukan pembelian. Diamond akan segera diproses dan masuk ke akun Anda dalam 1-5 menit.</p>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" onclick="redirectToSuccess()">
                            Lihat Detail Pesanan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize elements
        const paymentMethods = document.querySelectorAll('.payment-method');
        const payButton = document.getElementById('payButton');
        const cancelButton = document.getElementById('cancelButton');
        const countdownElement = document.getElementById('countdown');
        const successModal = new bootstrap.Modal(document.getElementById('successModal'));
        
        let selectedMethod = 'gopay';
        let countdownTime = 15 * 60; // 15 minutes in seconds
        
        // Handle payment method selection
        paymentMethods.forEach(method => {
            method.addEventListener('click', function() {
                paymentMethods.forEach(m => {
                    m.classList.remove('selected');
                    const checkIcon = m.querySelector('.fa-check-circle');
                    if (checkIcon) checkIcon.classList.add('d-none');
                });
                
                this.classList.add('selected');
                const checkIcon = this.querySelector('.fa-check-circle');
                if (checkIcon) checkIcon.classList.remove('d-none');
                
                selectedMethod = this.getAttribute('data-method');
                updatePaymentInstructions(selectedMethod);
            });
        });
        
        // Update payment instructions based on selected method
        function updatePaymentInstructions(method) {
            // In a real application, this would update the payment details section
            // based on the selected payment method
            console.log('Selected payment method:', method);
        }
        
        // Countdown timer
        function updateCountdown() {
            const minutes = Math.floor(countdownTime / 60);
            const seconds = countdownTime % 60;
            countdownElement.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            
            if (countdownTime <= 0) {
                // Time's up - redirect or show message
                alert('Waktu pembayaran telah habis. Silakan memulai order kembali.');
                window.location.href = 'index.html';
            } else {
                countdownTime--;
                setTimeout(updateCountdown, 1000);
            }
        }
        
        // Pay button handler
        payButton.addEventListener('click', function() {
            // Simulate payment processing
            payButton.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Memproses...';
            payButton.disabled = true;
            
            // Simulate API call delay
            setTimeout(() => {
                successModal.show();
            }, 2000);
        });
        
        // Cancel button handler
        cancelButton.addEventListener('click', function() {
            if (confirm('Apakah Anda yakin ingin membatalkan pesanan?')) {
                window.location.href = 'index.html';
            }
        });
        
        // Redirect to success page
        function redirectToSuccess() {
            window.location.href = 'success.html';
        }
        
        // Start the countdown when page loads
        document.addEventListener('DOMContentLoaded', function() {
            updateCountdown();
        });
        
        // Copy virtual account number (for VA methods)
        function copyAccountNumber() {
            const accountNumber = '8881234567890';
            navigator.clipboard.writeText(accountNumber).then(() => {
                alert('Nomor virtual account berhasil disalin!');
            });
        }
    </script>
</body>
</html>