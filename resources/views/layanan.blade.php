<html lang="id">
    <!DOCTYPE html>
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
            background-color: #f77801;
            border: none;
            padding: 0.5em 1em;
            cursor: pointer;
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
    </header>

    <div class="container">
        <section>
            <h2 align=center>Unit Kami </h2>
            <p align=center> Kami Menyediakan berbagai jenis kendaraan dengan standar dan kualitas terjamin,
                selalu dalam kondisi terbaik melalui perawatan rutin , sehingga anda dapat berkendara tanpa kekhawatiran
            </p><br>
            <div class="motor-list">
                <div class="motor-item">
                    <img src="{{ asset('images/Vario 125.jpg') }}" alt="Honda ">
                    <h3>Honda Vario 125</h3>
                    <p>Harga: Rp 85,000/hari</p>
                    <button onclick="pilihMotor('honda')">Pesan Motor</button>
                </div>
                <div class="motor-item">
                    <img src="{{ asset('images/Honda Beat FI.jpg') }}" alt="Honda">
                    <h3>Honda Beat FI</h3>
                    <p>Harga: Rp 75,000/hari</p>
                    <button onclick="pilihMotor('honda')">Pesan Motor</button>
                </div>
                <div class="motor-item">
                    <img src="{{ asset('images/Honda genio.png') }}" alt="Honda">
                    <h3>Honda Genio</h3>
                    <p>Harga: Rp 75,000/hari</p>
                    <button onclick="pilihMotor('honda')">Pesan Motor</button>
                </div>
                <div class="motor-item">
                    <img src="{{ asset('images/Honda Scoopy.jpg') }}" alt="Honda">
                    <h3>Honda Scoopy</h3>
                    <p>Harga: Rp 85,000/hari</p>
                    <button onclick="pilihMotor('honda')">Pesan Motor</button>
                </div>
                <div class="motor-item">
                    <img src="{{ asset('images/Honda Vario 150.png') }}" alt="Honda">
                    <h3>Honda Vario 150</h3>
                    <p>Harga: Rp 85,000/hari</p>
                    <button onclick="pilihMotor('honda')">Pesan Motor</button>
                </div>
                <div class="motor-item">
                    <img src="{{ asset('images/Yamaha Mio.png') }}" alt="Yamaha">
                    <h3>Yamaha Mio</h3>
                    <p>Harga: Rp 100,000/hari</p>
                    <button onclick="pilihMotor('yamaha')">Pesan Motor</button>
                </div>
                <div class="motor-item">
                    <img src="{{ asset('images/Yamaha Gear 125.png') }}" alt="Yamaha">
                    <h3>Yamaha Gear 125</h3>
                    <p>Harga: Rp 85,000/hari</p>
                    <button onclick="pilihMotor('yamaha')">Pesan Motor</button>
                </div>
                <div class="motor-item">
                    <img src="{{ asset('images/Suzuki Burgman.jpg') }}" alt="Suzuki">
                    <h3>Suzuki Burgman</h3>
                    <p>Harga: Rp 85,000/hari</p>
                    <button onclick="pilihMotor('suzuki')">Pesan Motor</button>
                </div>
                <div class="motor-item">
                    <img src="{{ asset('images/Honda Skuter.jpg') }}" alt="Honda">
                    <h3>Honda Skuter</h3>
                    <p>Harga: Rp 75,000/hari</p>
                    <button onclick="pilihMotor('honda')">Pesan Motor</button>
                </div>
            </div>
        </section>
    </div> <br><br><br><br><br><br>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
</body>

</html>