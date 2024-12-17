<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Layanan Rental Motor Tunas Baru</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;

        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        h1{
            text-align: center;
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
    <h1>Lihat Jadwal Service</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Plat</th>
                <th>Tanggal Service Pertama</th>
                <th>Tanggal Service Kedua</th>
            </tr>
        </thead>
        <tbody id="service-schedule">
            <!-- Jadwal service akan ditambahkan di sini secara dinamis -->
        </tbody>
    </table>

    <script>
        // Contoh data jadwal service
        const serviceData = [
            {
                motorName: "Honda Beat",
                serviceDate1: "2024-06-15",
                serviceDate2: "2024-12-15"
            },
            {
                motorName: "Yamaha NMAX",
                serviceDate1: "2024-05-10",
                serviceDate2: "2024-11-10"
            }
        ];

        // Fungsi untuk menampilkan jadwal service
        function displayServiceSchedule(data) {
            const tableBody = document.getElementById('service-schedule');

            data.forEach((item, index) => {
                const row = document.createElement('tr');

                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${item.motorName}</td>
                    <td>${item.serviceDate1}</td>
                    <td>${item.serviceDate2}</td>
                `;

                tableBody.appendChild(row);
            });
        }

        // Menampilkan data jadwal service di tabel
        displayServiceSchedule(serviceData);
    </script>
    <br><br><br><br><br><br>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
</body>

</html>