<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Layanan Rental Motor Tunas Baru</title>
    <style>
        h1 {
            text-align: center;
            margin: 40px 0 10px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #d7e2fc;

        }

        tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        @media (max-width: 768px) {
            table {
                width: 100%;
            }

            nav {
                flex-direction: column;
            }

            .nav-button {
                margin: 5px 0;
            }
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
    @if($jadwalMaintenance->isEmpty())
    <h1>Belum ada data jadwal Maintenance yang di masukan.</h1>
    @else
    <h1>Lihat Jadwal Service</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Motor</th>
                <th>Nomor Plat</th>
                <th>Tanggal Service Pertama</th>
                <th>Tanggal Service Kedua</th>
            </tr>
            @foreach ($jadwalMaintenance as $jadwal)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$jadwal->jenisMotor}}</td>
                <td>{{$jadwal->noPlat}}</td>
                <td>{{$jadwal->tanggal_pertama}}</td>
                <td>{{$jadwal->tanggal_kedua}}</td>
            </tr>
            @endforeach
        </thead>
    </table>
    @endif
    <br><br><br><br><br><br>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
</body>

</html>