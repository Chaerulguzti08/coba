<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>  
    <form method="get" action="cari">
    <input type="text" placeholder="Cari" name="cari">
    <input type="submit" value="Cari">
    </form>
    <table border="2">
        
        <tr>
            
            <th>No</th>
            <th>Nama</th>
            <th>Nama depan</th>
            <th>Alamat</th>
            <th>umur</th>
            <th>telepon</th>
        </tr>
        @foreach ($all as $k => $a)
            
        <tr>
           <td>{{$a->id}}</td>
            <td>{{ $a->nama }}</td>
            <td>{{ $a->nama_depan }}</td>
            <td>{{ $a->alamat }}</td>
            <td>{{ $a->umur }}</td>
            <td>{{ $a->telepon }}</td>
    
            <td><a href="/delete/{{$a->id}}">Hapus</a></td>
            <td><a href="/update/{{$a->id}}">Update</a></td>
        </tr>
        @endforeach

        <a href="{{ route('index.create') }}">Tambah Data</a>
    </table>
</body>
</html>