<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Help</title>
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

        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        .nav-button {
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            margin: 0 10px;
            border-radius: 5px;
            font-size: 16px;
        }

        .nav-button.active, .nav-button:hover {
            background-color: #4CAF50;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="/home" class="nav-button">Home</a>
            <a href="/layanan" class="nav-button">Melihat Layanan</a>
            <a href="/login" class="nav-button">Login</a>
            <a href="/registrasi" class="nav-button">Registrasi</a>
            <a href="/Help" class="nav-button active">Help</a> 
        </nav>
    </header>
    
    <br><br>
    <div class="container">
        <div class="content">
            <h2>Selamat Datang di Halaman Bantuan</h2>
            <p>Di sini Anda dapat menemukan jawaban atas pertanyaan yang sering diajukan terkait layanan rental motor kami.</p>

            <h3>Berikut adalah beberapa pertanyaan umum:</h3>
            <ul>
                <li><a href="/help#cara-sewa">Bagaimana cara menyewa motor?</a></li>
                <li><a href="/help#syarat-sewa">Apa saja syarat untuk menyewa motor?</a></li>
                <li><a href="/help#cara-pembayaran">Bagaimana cara melakukan pembayaran?</a></li>
                <li><a href="/help#motor-tersedia">Apa saja motor yang tersedia untuk disewa?</a></li>
                <li><a href="/help#kontak">Bagaimana cara menghubungi kami?</a></li>
            </ul>

            <h3 id="cara-sewa">1. Bagaimana cara menyewa motor?</h3>
            <p>Untuk menyewa motor, Anda harus mendaftar sebagai member terlebih dahulu. Setelah itu, pilih motor yang ingin disewa melalui halaman layanan dan lakukan pembayaran sesuai dengan instruksi yang diberikan.</p>

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
