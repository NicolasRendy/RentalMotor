<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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
            padding: 25px;
            border-radius: 10px;
            /* Rounded corners */
            width: 350px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            /* Deeper shadow */
            text-align: center;
            position: relative;
            font-family: "Arial", sans-serif;
        }

        .modal-content .info {
            text-align: left;
            margin-bottom: 20px;
        }

        .modal-content .info span {
            display: inline-block;
            width: 120px;
            font-weight: bold;
            color: #333;
        }

        .modal-content h2 {
            margin-bottom: 15px;
            font-size: 22px;
            color: #4a4a4a;
            text-align: center;
        }

        .modal-content .input-group {
            margin-bottom: 15px;
        }

        .modal-content .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
            margin-top: 5px;
        }

        .modal-content p {
            font-size: 14px;
            color: #666;
        }

        .modal-content .button {
            background-color: #007bff;
            /* More vibrant color */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .modal-content .button:hover {
            background-color: #e68900;
        }

        .modal-content .close-button {
            position: absolute;
            top: 10px;
            right: 15px;
            background: none;
            border: none;
            font-size: 18px;
            color: #888;
            cursor: pointer;
            transition: color 0.3s;
        }

        .modal-content .close-button:hover {
            color: #555;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="/kelola" class="nav-button">Kelola</a>
            <a href="/Konfirmasi" class="nav-button">Konfirmasi</a>
            <a href="/Laporan" class="nav-button">Laporan Keuangan</a>
            <div class="dropdown">
                <a href="#" class="nav-button">Maintenance</a>
                <div class="dropdown-content">
                    <button onclick="window.location.href='/input'">Input Jadwal</button>
                    <button onclick="window.location.href='/lihat'">Lihat Jadwal</button>
                </div>
            </div>
            <form action="/logout" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="nav-button" style="background: none; border: none; color: inherit; cursor: pointer;">
                    Log Out
                </button>
            </form>
        </nav>
    </header>

    <div class="container">
        <section>
            <br>
            <div class="motor-list">
                @foreach ($motors as $item)
                <div class="motor-item">
                    <img src="data:image/jpeg;base64,{{ base64_encode($item->fotoMotor) }}" alt="{{ $item->jenisMotor }}" width="100px">
                    <h3>{{ $item->jenisMotor }}</h3>
                    <p>Harga: Rp {{ number_format($item->harga, 0, ',', '.') }}/hari</p>
                    <button type="button" onclick="showModal('{{ $item->jenisMotor }}', '{{ $item->noPlat }}','{{ $item->kodeMotor }}')">Input Service</button>
                </div>

                @endforeach
            </div>
        </section>
    </div>
    <br>
    <br>
    <br>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>

    <form action="{{ route('jadwal.store') }}" method="POST">
        @csrf
        <div class="modal" id="modal">
            <div class="modal-content">
                <div class="info">
                    <h2>Input Jadwal Service</h2>
                    <div><span>Jenis Motor:</span> <span id="motor-type"></span></div>
                    <div><span>No. Plat:</span> <span id="motor-plate"></span></div>
                </div>
                <input type="hidden" id="motor-code" name="kodeMotor" value="motor-code">
                <div class="input-group">
                    <label for="service-date1">Tanggal Service Pertama:</label>
                    <input type="date" id="service-date1" name="tanggalService1" required>
                    <br><br>
                    <label for="service-date2">Tanggal Service Kedua:</label>
                    <input type="date" id="service-date2" name="tanggalService2" required>
                    <br><br>
                    <p><strong>Catatan:</strong> Jadwal service dilakukan dua kali setahun.</p>
                    <button type="submit">Simpan Jadwal</button>
                    <button type="button" onclick="hideModal()">Kembali</button>
                </div>
            </div>
        </div>
    </form>


    <script>
        function showModal(jenisMotor, noPlat, kodeMotor) {
            document.getElementById('motor-type').textContent = jenisMotor;
            document.getElementById('motor-plate').textContent = noPlat;
            document.getElementById('motor-code').value = kodeMotor;
            document.getElementById('modal').style.display = 'block';
        }

        function hideModal() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>
</body>

</html>