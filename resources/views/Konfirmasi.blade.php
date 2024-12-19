<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Layanan Rental Motor Tunas Baru</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        h1 {
            text-align: center;
            margin: 40px 0 10px;
        }

        table {
            width: 95%;
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

        .btn-konfirmasi {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-konfirmasi:hover {
            background-color: #45a049;
        }

        .btn-kembali {
            background-color: #ff9800;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-kembali:hover {
            background-color: #fb8c00;
        }

        .btn-disabled {
            background-color: #d3d3d3;
            color: #a9a9a9;
            cursor: not-allowed;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .modal-buttons {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }

        .btn-modal {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-ya {
            background-color: #4CAF50;
            color: white;
        }

        .btn-batal {
            background-color: #f44336;
            color: white;
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
            <a href="/Konfirmasi" class="nav-button active">Konfirmasi</a>
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

    <h1>Konfirmasi Pengambilan</h1>
    @if($sewa->isEmpty())
    <h1>Belum ada pesanan yang datang</h1>
    @else
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Motor</th>
                <th>Nomor Plat</th>
                <th>Tanggal Pengambilan</th>
                <th>Tanggal Pengembalian</th>
                <th>Konfirmasi Pengambilan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sewa as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$item->jenisMotor}}</td>
                <td>{{$item->noPlat}}</td>
                <!-- <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal">Data user</button></td> -->
                <td>{{$item->tanggalPengambilan}}</td>
                <td>{{$item->tanggalPengembalian}}</td>
                <td> 
                <a href="{{ route('konfirmasi.ambil', ['kodePesan' => $item->id_pesan]) }}" class="btn btn-konfirmasi">
                    Konfirmasi Ambil
                </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

    <h1>Konfirmasi Pengembalian Motor</h1>
    @if($transaksi->isEmpty())
    <h1>Semua Motor tersedia dan belum ada pengambilan</h1>
    @else
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Motor</th>
                <th>Nomor Plat</th>
                <th>Tanggal Pengambilan</th>
                <th>Tanggal Pengembalian</th>
                <th>Konfirmasi Pengembalian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$item->jenisMotor}}</td>
                <td>{{$item->noPlat}}</td>
                <!--  -->
                <td>{{$item->tanggalAmbil}}</td>
                <td>{{$item->tanggalKembali}}</td>
                <td> 
                <a href="{{ route('konfirmasi.kembali', ['kodeTransaksi' => $item->id_Transaksi]) }}" class="btn btn-kembali">
                    Konfirmasi Pengembalian
                </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

    <br>
    <br>
    <br>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
</body>

</html>