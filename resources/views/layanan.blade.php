<html lang="id">
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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

        .btn-dipesan {
            background-color: #ccc;
            color: #666;
            border: none;
            padding: 10px 20px;
            cursor: not-allowed;
        }
    </style>

</head>

<body>
    <header>
        <nav>
            <a href="/" class="nav-button">Home</a>
            <a href="/layanan" class="nav-button active">Melihat Layanan</a>
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
                @foreach ($motors as $item)
                <div class="motor-item">
                    <img src="data:image/jpeg;base64,{{ base64_encode($item->fotoMotor) }}" alt="{{ $item->jenisMotor }}" width: 100px;>
                    <h3>{{ $item->jenisMotor }}</h3>
                    <p>Harga: Rp {{ number_format($item->harga, 0, ',', '.') }}/hari</p>
                    @if ($item->status == 0)
                    <a href="/login" class="btn-pesan">
                        <button type="button">Pesan Motor</button>
                    </a>
                    @else
                        <button type="button" class="btn-dipesan" disabled>Motor Dipesan</button>
                    @endif
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <br><br><br><br><br><br>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
</body>

</html>