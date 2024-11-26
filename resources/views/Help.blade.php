<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Help</title>
    <style>
        .p {
            margin-top: 20px;
        }
        .p ul {
            list-style-type: none;
            padding: 0;
        }
        .p li {
            margin: 10px 0;
            cursor: pointer;
            color: #007BFF;
        }
        .p li:hover {
            text-decoration: underline;
        }
        .jawaban {
            margin-top: 10px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="/Help" class="nav-button active">Help</a>
            <a href="/layanan" class="nav-button">Melihat Layanan</a>
            <a href="/login" class="nav-button">Login</a>
            <a href="/Registrasi" class="nav-button">Registrasi</a>
        </nav>
    </header>

    <div class="p">
        <h3>Pertanyaan:</h3>
        <ul>
            <li onclick="tampilkanJawaban('Apa saja motor yang tersedia untuk disewa?')">Apa saja motor yang tersedia untuk disewa?</li>
            <li onclick="tampilkanJawaban('Bagaimana cara melakukan pembayaran?')">Bagaimana cara melakukan pembayaran?</li>
        </ul>
        <div id="jawaban" class="jawaban"></div>
    </div>

    <script>
        function tampilkanJawaban(pertanyaan) {
            let jawaban;
            switch (pertanyaan) {
                case 'Apa saja motor yang tersedia untuk disewa?':
                    jawaban = 'Kami memiliki berbagai jenis motor. Silakan cek daftar motor kami untuk informasi lebih lanjut.';
                    break;
                case 'Bagaimana cara melakukan pembayaran?':
                    jawaban = 'Anda dapat melakukan pembayaran melalui transfer bank dan cash.';
                    break;
            }
            document.getElementById("jawaban").innerText = jawaban;
        }
    </script>
</body>
</html>
