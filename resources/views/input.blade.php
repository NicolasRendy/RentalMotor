



<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Layanan Rental Motor Tunas Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #d32f2f;
            color: white;
            padding: 15px;
            font-size: 18px;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .form-container {
            background: rgb(175, 3, 3);
            padding: 2em;
            margin: 2em 0;
            box-shadow: 0 0 10px rgb(248, 245, 245);
            color: white;
            background-color: #6f99df;
        }

        label,
        input,
        select,
        button {
            color: #f7f1f1(14, 13, 13);
        }

        input[type="submit"],
        button {
            color: white;
            background-color: #6f99df;
            border: none;
            padding: 0.5em 1em;
            cursor: pointer;
        }

        button:hover {
            background: #583bb5;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #6f99df;
            min-width: 150px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content button {
            background-color: #6f99df;
            color: white;
            padding: 10px;
            text-align: left;
            border: none;
            width: 100%;
        }

        .dropdown-content button:hover {
            background-color: #583bb5;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 10;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
        }

        .modal-content .info {
            text-align: left;
            margin-bottom: 20px;
        }

        .modal-content .info span {
            display: inline-block;
            width: 100px;
        }

        .modal-content .input-group {
            margin-bottom: 15px;
        }

        .modal-content .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            text-align: center;
        }

        .modal-content .button {
            background-color: #ff9800;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .modal-content .button:hover {
            background-color: #e68900;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="/kelola" class="nav-button">Kelola</a>
            <div class="dropdown">
                <a href="maintenance" class="nav-button">Maintenance</a>
                <div class="dropdown-content">
                    <button onclick="window.location.href='/input'">Input Jadwal</button>
                    <button onclick="window.location.href='/lihat'">Lihat Jadwal</button>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <section>
            <br>
            <div class="motor-list">
                <div class="motor-item">
                    <img src="{{ asset('images/home.jpg') }}" width="100px">
                    <h3>Meongg</h3>
                    <p>Harga: Rp 500/hari</p>
                    <button type="button" onclick="showModal()">Input Service</button>
                </div>
                <div class="motor-item">
                    <img src="{{ asset('images/home.jpg') }}" width="100px">
                    <h3>Meongg</h3>
                    <p>Harga: Rp 500/hari</p>
                    <button type="button" onclick="showModal()">Input Service</button>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>

    <div class="modal" id="modal">
        <div class="modal-content">
            <div class="info">
                <div><span>Jenis Motor:</span> Honda Beat Street</div>
                <div><span>No. Plat:</span> AB 2023 HM</div>
            </div>
            <div class="input-group">
                <label for="start-date">Service setiap </label><br>
                <input type="date" id="start-date" value="2024-10-25">
            </div>
            <p>Service tiap 1 tahun sekali</p>
            <button class="button" onclick="closeModal()">Simpan</button>
        </div>
    </div>

    <script>
        function showModal() {
            document.getElementById('modal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>
</body>

</html>