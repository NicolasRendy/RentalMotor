<html lang="id">
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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
            height: 500px;
            text-align: center;
            background-color: #d7e2fc;
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
            background-color: #6f99df;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .registration-container input[type="submit"]:hover {
            background-color: #583bb5;
        }

        .custom-file-input {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .custom-file-input input[type="file"] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            cursor: pointer;
        }

        .custom-file-label {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }

        .custom-file-input input[type="file"]:focus+.custom-file-label {
            outline: 2px solid #0056b3;
        }
    </style>

</head>

<body>
    <header>
        <nav>
            <a href="/" class="nav-button">Home</a>
            <a href="/layanan" class="nav-button">Melihat Layanan</a>
            <a href="/login" class="nav-button">Login</a>
            <a href="/Registrasi" class="nav-button active">Registrasi</a>
        </nav>
    </header><br><br>

    <div class="content">
        <div class="registration-container">
            <h2>Registrasi Pengguna</h2>
            <form action="/RegistrasiProses" method="POST" enctype="multipart/form-data">
                @csrf <!-- Tambahkan ini untuk menginput token CSRF -->
                <input type="nama" id="nama" name="nama" placeholder="Nama Lengkap*" required><br>
                <input type="alamat" id="alamat" name="alamat" placeholder="Alamat*" required><br>
                <input type="email" id="email" name="email" placeholder="Email*" required><br>
                <input type="nomorTelpon" id="nomorTelpon" name="nomorTelpon" placeholder="Nomor Telepon*" required><br>
                <input type="password" id="password" name="password" placeholder="Kata Sandi*" required><br>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Konfirmasi Password*"
                    required><br><br>
                <div class="custom-file-input">
                    <input type="file" name="image" id="image" required>
                    <label for="image" class="custom-file-label" id="file-label">Foto KTP</label>
                </div><br><br>

                <input type="submit" name="daftar" value="Daftar">
            </form>
            <br><br><br><br><br><br>
        </div>
    </div>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
    <script>
        const form = document.querySelector('form');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirm-password');

        form.addEventListener('submit', function (e) {
            if (password.value !== confirmPassword.value) {
                e.preventDefault();  // Menghentikan pengiriman form
                alert('Katasandi dan Konfirmasi Katasandi tidak cocok.');
            }
        });
    </script>
    <script>
        // Menambahkan event listener untuk input file
        document.getElementById('image').addEventListener('change', function (event) {
            const fileInput = event.target;
            const fileName = fileInput.files[0].name;

            // Menampilkan nama file yang dipilih
            document.getElementById('file-label').textContent = `Foto KTP Masuk : ${fileName}`;

            // Mengubah teks tombol menjadi "Berhasil"
            // const submitButton = document.querySelector('input[type="submit"]');
            // submitButton.value = "Berhasil";
        });
    </script>

</body>

</html>