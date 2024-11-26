<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .header {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #6f99df;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            height: 20px;
        }

        .header h1 {
            flex-grow: 1;
            margin: 0;
            color: white;
            text-align: left;
        }

        .back-button {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: white;
            padding: 5px 10px;
        }

        .pembayaran-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

        }

        .info-pembayaran {
            text-align: left;
            background-color: #dce5f4;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .info-pembayaran p {
            margin: 10px 0;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .salin-button,
        .ok-button {
            background-color: #3d80e4;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .salin-button:hover,
        .ok-button:hover {
            background-color: #2c66b8;
        }

        footer {
            background-color: #6f99df;
            color: white;
            text-align: center;
            padding: 0px;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 45px;
        }
    </style>
</head>

<body>
    <header class="header">
        <button class="back-button">&lt;</button>
        <h1>Pembayaran</h1>
    </header>
    <form action="/daftarPenyewaan"></form>
    <div class="pembayaran-container">
        <div class="info-pembayaran">
            <p><strong>Total Pesanan:</strong> RP 75.000</p><br>
            <p><strong>Bank:</strong> BNI</p>
            <p><strong>No. Rekening:</strong> 8086002924864365</p>
            <p>Proses verifikasi kurang dari 5 menit setelah pembayaran berhasil.</p>
            <p>Bayar pesanan ke Virtual Account di atas sebelum membuat pesanan kembali dengan Virtual Account agar
                nomor tetap sama.</p>
            <p><strong>Hanya menerima dari Bank BNI</strong></p>
        </div>
        <div class="info-pembayaran">
            <p><strong>Petunjuk Transfer mBanking:</strong></p>
            <ol>
                
                <li>Pilih Transfer > Virtual Account Billing.</li>
                <li>Pilih Rekening Debet > Masukkan nomor Virtual Account  pada menu Input Baru.
                <strong>8086002924864365</strong>.</li>
                <li>Tagihan yang harus dibayar akan muncul pada layar konfirmasi.</li>
                <li>Periksa informasi yang tertera di layar. Pastikan Merchant adalah Shopee, Total tagihan sudah benar . Jika benar, masukkan password transaksi dan pilih Lanjut </li>
            </ol>
        </div>
        <script>
            function goToSewa() {
                window.location.href = '/daftarPenyewaan'; // Ganti '/classSewa' dengan URL halaman yang sesuai
            }
        </script>

        <div class="button-container">
            <button class="ok-button" onclick="goToSewa()">OK</button>
        </div>

    </div>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
</body>

</html>