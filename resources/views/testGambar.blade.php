<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Motor</title>
</head>
<body>
    <h1>Daftar Motor</h1>
    <form action="{{ route('motors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="noPlat">Nomor Plat:</label>
        <input type="text" name="noPlat" id="noPlat" required>
        <label for="gambar">Gambar:</label>
        <input type="file" name="fotoMotor" id="fotoMotor" required>
        <br><br>
        <label for="jenisMotor">Jenis Motor</label>
        <input type="text" name="jenisMotor" id="jenisMotor" required>
        <br><br>
        <label for="Harga">Harga</label>
        <input type="number" name="Harga" id="Harga" required min="1">
        <br><br>
        <button type="submit">Tambah Motor</button>
    </form>
    <h2>List Motor</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Plat</th>
                <th>Jenis Motor</th>
                <th>Harga</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($motors as $motor)
                <tr>
                    <td>{{ $motor->kodeMotor }}</td>
                    <td>{{ $motor->noPlat }}</td>
                    <td>{{ $motor->jenisMotor}}</td>
                    <td>{{ $motor->harga}}</td>
                    <td>
                        <img src="data:image/jpeg;base64,{{ base64_encode($motor->fotoMotor) }}" alt="Gambar Motor" style="width: 100px;">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
