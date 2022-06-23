<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Kegiatan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        
        <a href="{{ route('kegiatan.create') }}">Tambah Kegiatan</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <input type="submit" value="Logout">
        </form>
    <table class="table table-bordered" border="1">
        <tr>
            <td>No</td>
            <td>Nama Kegiatan</td>
            <td>Waktu</td>
            <td>Koordinator</td>
            <td>Jumlah Peserta</td>
            <td>Detail</td>
            <td>Link</td>
            <td>Aksi</td>
        </tr>
        @forelse ($items as $item)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $item->nama_kegiatan }}</td>
            <td>{{ $item->tanggal_waktu }}</td>
            <td>{{ $item->koordinator }}</td>
            <td>{{ $item->peserta->count() }}</td>
            <td><a href="{{ route('kegiatan.show', $item->id) }}">Detail</a></td>
            <td><a href="{{ route('peserta.create', $item->slug) }}">Link</a></td>
            <td>
                <a href="{{ route('kegiatan.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-penci"></i> Edit</a>
                <form method="POST" action="{{ route('kegiatan.destroy', $item->id) }}" onsubmit="return confirm('Yakin nih mau delete?');">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">Data Kosong</td>
        </tr>
        @endforelse
    </table>
    </div>
</body>
</html>