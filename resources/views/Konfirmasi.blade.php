<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        </nav>
    </header>

    <h1>Konfirmasi Pengambilan dan Pengembalian Motor</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Motor</th>
                <th>Nomor Plat</th>
                <th>Data User</th>
                <th>Tanggal Pengambilan</th>
                <th>Konfirmasi Pengambilan</th>
                <th>Tanggal Pengembalian</th>
                <th>Konfirmasi Pengembalian</th>
            </tr>
        </thead>
        <tbody id="schedule">
            <!-- Jadwal service akan ditambahkan di sini secara dinamis -->
        </tbody>
    </table>

    <!-- Modal Dialog -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <p>Yakin ingin konfirmasi?</p>
            <div class="modal-buttons">
                <button class="btn-modal btn-ya" id="btnYa">Ya</button>
                <button class="btn-modal btn-batal" id="btnBatal">Batal</button>
            </div>
        </div>
    </div>

    <!-- Modal User Details -->
<div id="userModal" class="modal">
    <div class="modal-content">
        <img id="ktpPhoto" src="" alt="KTP Photo" style="width: 100%; height: auto; border-radius: 5px;">
        <h3 id="userName"></h3>
        <p id="userAddress"></p>
        <button class="btn-modal btn-ya" id="btnOke">Oke</button>
    </div>
</div>


    <script>
        const konfirData = [
            {
                motorName: "Honda Beat",
                platNomor: "AB123",
                user: "Userrrrrr",
                date: "2024-06-15",
                returnDate: "2024-06-20",
                konfirmasiAmbil: false,
                konfirmasiKembali: false
            },
            {
                motorName: "Yamaha NMAX",
                platNomor: "DA321",
                user: "Userrrrrr",
                date: "2024-05-10",
                returnDate: "2024-05-15",
                konfirmasiAmbil: false,
                konfirmasiKembali: false
            }
        ];

        function displayKonfir(data) {
            const tableBody = document.getElementById('schedule');
            tableBody.innerHTML = '';

            data.forEach((item, index) => {
                const row = document.createElement('tr');

                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${item.motorName}</td>
                    <td>${item.platNomor}</td>
                    <td><button class="btn-konfirmasi">${item.user}</button></td>
                    <td>${item.date}</td>
                    <td><button class="btn-konfirmasi ${item.konfirmasiAmbil ? 'btn-disabled' : ''}" onclick="openModal('ambil', ${index})" ${item.konfirmasiAmbil ? 'disabled' : ''}>Konfirmasi Ambil</button></td>
                    <td>${item.returnDate}</td>
                    <td><button class="btn-kembali ${!item.konfirmasiAmbil ? 'btn-disabled' : ''}" onclick="openModal('kembali', ${index})" ${!item.konfirmasiAmbil || item.konfirmasiKembali ? 'disabled' : ''}>Konfirmasi Kembali</button></td>
                `;

                tableBody.appendChild(row);
            });
        }

        // Modal logic
        const modal = document.getElementById('modal');
        const btnYa = document.getElementById('btnYa');
        const btnBatal = document.getElementById('btnBatal');

        let currentAction = null;
        let currentIndex = null;

        function openModal(action, index) {
            currentAction = action;
            currentIndex = index;
            modal.style.display = 'block';
        }

        function closeModal() {
            modal.style.display = 'none';
        }

        btnYa.addEventListener('click', () => {
            if (currentIndex !== null) {
                if (currentAction === 'ambil') {
                    konfirData[currentIndex].konfirmasiAmbil = true;
                } else if (currentAction === 'kembali') {
                    konfirData.splice(currentIndex, 1); // Remove the row
                }
                displayKonfir(konfirData);
                closeModal();
            }
        });

        btnBatal.addEventListener('click', closeModal);

        // Close modal if clicked outside
        window.onclick = (event) => {
            if (event.target === modal) {
                closeModal();
            }
        };

        displayKonfir(konfirData);
    </script>

    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
</body>

</html>
