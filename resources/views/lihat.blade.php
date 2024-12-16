<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Layanan Rental Motor Tunas Baru</title>
    <style>
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
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="/kelola" class="nav-button">Kelola</a>
            <a href="/Konfirmasi" class="nav-button">Konfirmasi</a>
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
                    <a href="/:)" class="btn-pesan">
                        <button type="button">Lihat Jadwal Service</button>
                    </a>
                </div>
                <div class="motor-item">
                    <img src="{{ asset('images/home.jpg') }}" width="100px">
                    <h3>Meongg</h3>
                    <p>Harga: Rp 500/hari</p>
                    <a href="/:)" class="btn-pesan">
                        <button type="button">Lihat Jadwal  Service</button>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <br><br><br><br><br><br>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
</body>

</html>
