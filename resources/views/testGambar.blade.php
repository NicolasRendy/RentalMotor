<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor List</title>
</head>
<body>
    <h1>Daftar Motor</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No. Plat</th>
                <th>Jenis Motor</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($motors as $motor)
                <tr>
                    <td>{{ $motor->noPlat }}</td>
                    <td>{{ $motor->jenisMotor }}</td>
                    <td>{{ $motor->harga }}</td>
                    <td>{{ $motor->status == 0 ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    <td>
                        <img src="data:image/jpeg;base64,{{ base64_encode($motor->fotoMotor) }}" alt="{{ $motor->jenisMotor }}" width="100">
                    </td>
                    <td>
                        <!-- Form untuk hapus -->
                        <form action="{{ route('motors.destroy', $motor->kodeMotor) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus motor ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: red; color: white; border: none; padding: 5px 10px; cursor: pointer;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
