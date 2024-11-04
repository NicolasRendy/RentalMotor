<html lang="id">
    <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Rental Motor Tunas Baru</title>
    <style>
        .content {
            display: flex;
            justify-content: center;
            flex-grow: 1;
        }

        .registration-container {
            background: white;
            padding: 2em;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 300px;
            height: 400px;
            text-align: center;
        }

        .registration-container h2 {
            margin-bottom: 1em;
        }

        .registration-container input[type="nama"],
        .registration-container input[type="alamat"],
        .registration-container input[type="email"],
        .registration-container input[type="nomorTelpon"],
        .registration-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .registration-container input[type="submit"] {
            width: calc(100% - 20px);
            padding: 10px;
            background-color: #af4c4c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .registration-container input[type="submit"]:hover {
            background-color: #a04545;
        }
    </style>

</head>

<body>
    <header>
        <nav>
            <a href="/home" class="nav-button">Home</a>
            <a href="/layanan" class="nav-button">Melihat Layanan</a>
            <a href="/login" class="nav-button">Login</a>
            <a href="/Registrasi" class="nav-button">Registrasi</a>
        </nav>
    </header><br><br>

    <div class="content">
        <div class="registration-container">
            <h2>Registrasi Pengguna</h2>
            <form action="../model/register_user.php" method="POST">
                <input type="nama" id="nama" name="nama" placeholder="Nama Lengkap" required><br>
                <input type="alamat" id="alamat" name="alamat" placeholder="Alamat" required><br>
                <input type="email" id="email" name="email" placeholder="Email" required><br>
                <input type="nomorTelpon" id="nomorTelpon" name="nomorTelpon" placeholder="Nomor Telepon" required><br>
                <input type="password" id="password" name="password" placeholder="Kata Sandi" required><br><br>
                <input type="submit" name="daftar" value="Daftar">
            </form>
        </div>
    </div>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>

</body>

</html>