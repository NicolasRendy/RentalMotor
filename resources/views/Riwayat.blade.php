<html lang="id">
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Riwayat Penyewaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            width: 60%;
            margin: 50px auto;

        }

        .penyewaan-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 50vh;
            width: 50vh;
            margin: 2px auto 0;
            margin-top: 40px;
            /* jarak dengan Navbar  */

        }

        .penyewaan-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .info {
            text-align: left;
            background-color: #dce5f4;
            padding: 15px;
            border-radius: 10px;
            flex-grow: 1;

        }

        .info p {
            margin: 5px 0;

        }

        .nota-header {
            font-size: 30px;
            font-weight: bold;
            margin: 0;
            /* Hilangkan margin */
            padding: 10px 0;
            /* Tambahkan padding untuk estetika */
        }

        .kirim-button {
            display: block;
            margin: 20px auto 0;
            /* Pusatkan secara horizontal */
            padding: 10px 20px;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .kirim-button:hover {
            background: #583bb5;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="/Help" class="nav-button">Help</a>
            <a href="/daftarPenyewaan" class="nav-button">Sewa</a>
            <a href="/Riwayat" class="nav-button active">Riwayat Penyewaan</a>
            <a href="/Pembayaran" class="nav-button ">Pembayaran</a>
            <a href="/logout" class="nav-button">Log Out</a>
        </nav>
    </header><br>
    <form action="/daftarPenyewaan">

        <div class="penyewaan-container">
            <div class="nota-header">Nota Penyewaan</div>
            <div class="penyewaan-card">
                <div class="info">
                    <p><strong>Nama Pelanggan:</strong> NULL</p>
                    <p><strong>Alamat Pelanggan:</strong> NULL</p>
                    <p><strong>Jenis Motor:</strong> NULL</p>
                    <p><strong>No. Plat:</strong> NULL</p>
                    <p><strong>Tanggal Pengambilan:</strong> NULL</p>
                    <p><strong>Tanggal Pengembalian:</strong> NULL</p>
                    <p><strong>Harga:</strong> NULL</p><br>
                    <button class="kirim-button">Oke</button>
                </div>
            </div>
        </div>
    </form>

    </form>
    <br><br><br><br><br><br>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
</body>

</html>