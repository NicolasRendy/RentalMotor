<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Jadwal Maintenance</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .header {
            background-color: #d32f2f;
            color: white;
            padding: 15px 20px;
            font-size: 20px;
            font-weight: bold;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header::before {
            content: '\276E';
            margin-right: 10px;
            font-size: 18px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .card {
            background-color: white;
            width: 350px;
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            padding: 25px;
            text-align: center;
            position: relative;
        }

        .card:before {
            content: '';
            background-image: url('motor-background.png'); /* Tambahkan gambar latar belakang motor sesuai kebutuhan */
            background-repeat: no-repeat;
            background-position: center;
            background-size: 80%;
            opacity: 0.08;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            border-radius: 12px;
        }

        .card-content {
            position: relative;
            z-index: 1;
        }

        .info {
            text-align: left;
            margin-bottom: 20px;
            color: #333;
            font-size: 16px;
        }

        .info div {
            margin-bottom: 8px;
        }

        .info span {
            display: inline-block;
            width: 120px;
            font-weight: bold;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group input {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            color: #555;
            text-align: center;
        }

        .input-group input:focus {
            outline: none;
            border-color: #d32f2f;
            box-shadow: 0 0 6px rgba(211, 47, 47, 0.4);
        }

        p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .button {
            background-color: #ff9800;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }

        .button:hover {
            background-color: #e68900;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="header">Input Jadwal Maintenance</div>

    <div class="container">
        <div class="card">
            <div class="card-content">
                <div class="info">
                    <div><span>Jenis Motor:</span> Honda Beat Street</div>
                    <div><span>No. Plat:</span> AB 2023 HM</div>
                </div>
                <div class="input-group">
                    <label for="start-date" style="display: block; font-weight: bold; margin-bottom: 8px;">Mulai</label>
                    <input type="date" id="start-date" value="2024-10-25">
                </div>
                <p>Service tiap 6 bulan sekali</p>
                <button class="button">Simpan</button>
            </div>
        </div>
    </div>
</body>
</html>