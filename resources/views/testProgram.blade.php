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
    <div>
        <label for="noPlat">No. Plat:</label>
        <input type="text" id="noPlat" name="noPlat" required>
    </div>

    <div>
        <label for="jenisMotor">Jenis Motor:</label>
        <input type="text" id="jenisMotor" name="jenisMotor" required>
    </div>

    <div>
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="Harga" required>
    </div>

    <div>
        <label for="fotoMotor">Foto Motor:</label>
        <input type="file" id="fotoMotor" name="fotoMotor" accept="image/*" required>
    </div>

    <div>
        <button type="submit">Simpan</button>
    </div>
</form>

    <h2>List Motor</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Plat</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($motors as $motor)
                <tr>
                    <td>{{ $motor->id }}</td>
                    <td>{{ $motor->noPlat }}</td>
                    <td>
                        <img src="data:image/jpeg;base64,{{ base64_encode($motor->fotoMotor) }}" alt="{{ $motor->jenisMotor }}" style="width: 100px;">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
