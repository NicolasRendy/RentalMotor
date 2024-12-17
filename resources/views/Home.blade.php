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


</body>
</html>