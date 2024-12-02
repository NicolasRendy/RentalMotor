<html lang="id">
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Rental Motor Tunas Baru</title>
    <style>
        .container {
            width: 80%;
            margin: 20px auto;
            overflow: hidden;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .content {
            margin-top: 2em;
            text-align: center;
        }

        h2 {
            color: black;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.6;
        }

        .gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .gallery img {
            max-width: 30%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="/home" class="nav-button active">Home</a>
            <a href="/layanan" class="nav-button">Melihat Layanan</a>
            <a href="/login" class="nav-button">Login</a>
            <a href="/Registrasi" class="nav-button">Registrasi</a>
        </nav>
    </header>
    <br><br>

    <div class="container">
        <div class="content">
            <h2>Selamat Datang di Rental Motor Tunas Baru</h2>
            <p>Kami menyediakan layanan rental motor dengan berbagai pilihan motor terbaru dan berkualitas. Nikmati
                perjalanan Anda dengan motor kami yang terawat dengan baik dan harga sewa yang terjangkau.</p>
            <div class="gallery">
                <img src="{{ asset('images/home.jpg') }}" alt="Motor 1" class="motor-image">
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
    <h3 id="syarat-sewa">2. Apa saja syarat untuk menyewa motor?</h3>
    <p>Syarat untuk menyewa motor adalah memiliki KTP yang valid, berusia minimal 18 tahun, dan memiliki SIM C yang berlaku. Anda juga harus melakukan registrasi dan login ke sistem kami.</p>

    <h3 id="cara-pembayaran">3. Bagaimana cara melakukan pembayaran?</h3>
    <p>Pembayaran sewa motor dapat dilakukan melalui transfer bank atau metode pembayaran yang tersedia di sistem kami. Pastikan Anda melakukan konfirmasi pembayaran setelah transfer dilakukan.</p>
    <h3 id="motor-tersedia">4. Apa saja motor yang tersedia untuk disewa?</h3>
    <p>Kami memiliki berbagai pilihan motor, mulai dari motor sport, matic, hingga motor gede. Anda dapat melihat pilihan motor yang tersedia di halaman layanan kami.</p>

    <h3 id="kontak">5. Bagaimana cara menghubungi kami?</h3>
    <p>Anda dapat menghubungi kami melalui nomor telepon: 081-233-689 atau email kami di email@TunasBaru.com. Tim kami siap membantu Anda dengan pertanyaan atau masalah yang Anda hadapi.</p>
    </div>
    </div>
</body>

</html>