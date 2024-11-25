<html lang="id">
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Riwayat Penyewaan</title>
    <style>
        .container {
            width: 60%;
            margin: 50px auto;
            display: flex;
            justify-content: center;
            overflow: hidden;
        }

        .title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .total-price {
            background-color: #e0e0ff;
            border-radius: 5px;
            padding: 10px;
            display: inline-block;
            margin-bottom: 20px;
            font-weight: bold;
            width: 270px;
            height: 20px;
        }

        .payment-methods {
            margin-top: 15px;
        }

        .payment-option {
            display: flex;
            align-items: center;
            background-color: #f5f5f5;
            border-radius: 10px;
            padding: 10px 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            transition: transform 0.2s, box-shadow 0.3s;
        }

        .payment-option:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .payment-option label {
            font-size: 1rem;
            margin-left: 10px;
        }

        .payment-option input[type="radio"] {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .btn-transfer {
            background-color: #6b4acc;
            color: white;
        }

        .btn-cash {
            background-color: #6bafff;
            color: white;
        }

        .details {
            margin-top: 20px;
            background-color: #e0e0ff;
            padding: 15px;
            border-radius: 8px;
            text-align: left;
            font-size: 0.9rem;
        }

        .details p {
            margin: 5px 0;
        }

        .title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            align-items: center;
        }
    </style>

</head>

<body>
    <header>
        <nav>
            <a href="/Help" class="nav-button">Help</a>
            <a href="/daftarPenyewaan" class="nav-button">Sewa</a>
            <a href="/Riwayat" class="nav-button">Riwayat Penyewaan</a>
            <a href="/Pembayaran" class="nav-button active"> Pembayaran</a>
            <a href="/login" class="nav-button">Log Out</a>
        </nav>
    </header>
    <div class="container">
        <section>
            <div class="title">Bayar Sekarang</div>
            <div class="details">
                <p><strong>Nama:</strong> Della</p>
                <p><strong>Alamat:</strong> Gedongkiwo</p>
                <p><strong>Jenis Motor:</strong> Honda Genio</p>
                <p><strong>No. Plat:</strong> AB 1111 UU</p>
                <p><strong>Tanggal Penyewaan:</strong> 20/10/2024</p>
                <p><strong>Tanggal Pengembalian:</strong> 21/10/2024</p>
            </div><br>
            <div class="total-price">Total Pesanan: Rp 75.000</div>
            <div class="payment-methods">
                <h3>Pilih metode pembayaran</h3>
                <div class="payment-option">
                    <input type="radio" id="cod" name="payment" value="cod">
                    <label for="cod">Bayar di Tempat</label>
                </div>
                <div class="payment-option">
                    <input type="radio" id="transfer" name="payment" value="transfer">
                    <label for="transfer">Transfer akun virtual</label>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
</body>

</html>
