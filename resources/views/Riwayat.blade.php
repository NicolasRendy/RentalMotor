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

        .nota-container {
            background-color: #e7f0ff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        .nota-header {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .nota-info {
            text-align: left;
            margin: 0 auto;
            max-width: 250px;
            padding: 10px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .nota-info div {
            margin-bottom: 8px;
        }

        .nota-info span {
            display: inline-block;
            width: 110px;
        }
    </style>

</head>

<body>
    <header>
        <nav>
            <a href="/-" class="nav-button">Help</a>
            <a href="/daftarPenyewaan" class="nav-button">Daftar Motor</a>
            <a href="/Riwayat" class="nav-button active">Riwayat Penyewaan</a>
            <a href="/login" class="nav-button">Log Out</a>
        </nav>
    </header>
    <form action="/daftarPenyewaan">
        <div class="container">
            <section>
                <div class="nota-container">
                    <div class="nota-header">Nota Penyewaan</div>
                    <div class="nota-info">
                        <p><strong>Nama:</strong> NULL</p>
                        <p><strong>Alamat:</strong> NULL</p>
                        <p><strong>Jenis Motor:</strong> NULL</p>
                        <p><strong>No. Plat:</strong> NULL</p>
                        <p><strong>Tanggal Penyewaan:</strong> NULL</p>
                        <p><strong>Tanggal Pengambilan:</strong> NULL</p>
                        <p><strong>Tanggal Pengembalian:</strong> NULL</p>
                        <p><strong>Harga:</strong> NULL</p>
                        <button class="kirim-button">Oke</button>
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