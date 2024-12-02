<html lang="id">
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .container {
            padding: 20px;
        }

        .add-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 180px;
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .card h3 {
            font-size: 16px;
            margin: 10px 0;
        }

        .card p {
            color: gray;
            font-size: 14px;
        }

        .card .price {
            font-size: 16px;
            font-weight: bold;
            color: #d32f2f;
        }

        .card .actions {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
        }

        .card button {
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .delete-button {
            background-color: #f7f1f1;
            color: white;
        }


    </style>

</head>

<body>
    <header>
        <nav>
            <a href="/kelola" class="nav-button">Kelola</a>
    </header>
    <div class="container">
        <section>
            <button class="add-button">+ Tambah Motor</button>
            <div class="motor-list">
                <div class="motor-item">
                    <img src="{{ asset('images/home.jpg') }}" width: 100px;>
                    <h3>Meongg</h3>
                    <p>Harga: Rp 500/hari</p>
                    <div class="actions">
                    <a href="/:)" class="btn-pesan">
                        <button type="button">Edit</button>
                       
                    </a>
                        
                    </div>
                </div>
                <div class="motor-item">
                    <img src="{{ asset('images/home.jpg') }}" width: 100px;>
                    <h3>Meongg</h3>
                    <p>Harga: Rp 500/hari</p>
                    <a href="/:)" class="btn-pesan">
                        <button type="button">Pesan Motor</button>
                    </a>
                </div>
                <div class="motor-item">
                    <img src="{{ asset('images/home.jpg') }}" width: 100px;>
                    <h3>Meongg</h3>
                    <p>Harga: Rp 500/hari</p>
                    <a href="/:)" class="btn-pesan">
                        <button type="button">Pesan Motor</button>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <br><br><br><br><br><br>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
</body>

</html>