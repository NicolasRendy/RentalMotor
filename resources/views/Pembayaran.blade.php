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
            /* Menambahkan margin atas */
            display: flex;
            justify-content: center;
            /* Menempatkan elemen di tengah secara horizontal */
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
        }

        .payment-method {
            margin-top: 15px;
        }

        .payment-method button {
            padding: 10px 20px;
            margin: 10px 5px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
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
            background-color: #eef3f7;
            padding: 15px;
            border-radius: 8px;
            text-align: left;
            font-size: 0.9rem;
        }

        .details p {
            margin: 5px 0;
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
            <div class="total-price">Total Harga: RP 75.000</div>
            <a href></a>
            <div class="payment-method">
                <button class="btn-transfer">Transfer</button>
                <button class="btn-cash">Cash</button>
            </div>
            <div class="details">
                <p><strong>Nama:</strong> Della</p>
                <p><strong>Alamat:</strong> Gedongkiwo</p>
                <p><strong>Jenis Motor:</strong> Honda Genio</p>
                <p><strong>No. Plat:</strong> AB 1111 UU</p>
                <p><strong>Tanggal Penyewaan:</strong> 20/10/2024</p>
                <p><strong>Tanggal Pengembalian:</strong> 21/10/2024</p>
            </div>
        </section>
    </div>
    </form>
    <br><br><br><br><br><br>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
</body>

</html>