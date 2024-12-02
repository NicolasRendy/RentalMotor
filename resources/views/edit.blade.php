<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan</title>
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
            margin-bottom: 120px;
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

        .penyewaan-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .penyewaan-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .motor-image img {
            border-radius: 10px;
            width: 300px;
            height: 230px;
            border: 3px solid #e0e0e0;
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

        .kirim-button {
            background-color: #3d80e4;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .kirim-button:hover {
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

        input[type="text"],
        input[type="date"] {
            appearance: none;
            /* Hapus tampilan default browser */
            -webkit-appearance: none;
            -moz-appearance: none;

            padding: 10px;
            font-size: 16px;
            font-family: Arial, sans-serif;
            border: 2px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            color: #333;
            transition: border-color 0.3s, box-shadow 0.3s;
            width: 100%;
            max-width: 300px;
            box-sizing: border-box;
        }

        /* Hover dan fokus untuk efek interaksi */
        input[type="text"]:hover,
        input[type="date"]:hover {
            border-color: #aaa;
        }

        input[type="text"]:focus,
        input[type="date"]:focus {
            outline: none;
            border-color: #5b9bd5;
            box-shadow: 0 0 5px rgba(91, 155, 213, 0.5);
        }

        /* Tambahkan ikon kalender (opsional) */
        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            background-size: 20px 20px;
            border: none;
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <header class="header">
        <button class="back-button">&lt;</button>
        <h1>Edit Deskripsi Motor</h1>
    </header>
    <div class="penyewaan-container">
        <div class="penyewaan-card">
            <div class="motor-image">
                <img src="{{ asset('images/home.jpg') }}" width="300" height="230">
            </div>
            <div class="info">
                <p><strong>Jenis Motor:</strong> <input type="text" placeholder="Masukkan jenis motor"></p>
                <p><strong>No. Plat:</strong> <input type="text" placeholder="Masukkan nomor plat"></p>
                <p><strong>Harga:</strong> <input type="text" placeholder="Masukkan harga"></p>
                <button type="button" class="kirim-button">Batal</button>
                <button type="submit" class="kirim-button">Simpan</button>
            </div>
        </div>
    </div>

    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
</body>

</html>
