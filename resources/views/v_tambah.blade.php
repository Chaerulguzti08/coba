<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('index.store')}}">
    {{ csrf_field() }}
    
        <input type="text" name="f_nama" placeholder="nama" require>
        <input type="text" name="f_nama_depan" placeholder="nama depan" require>
        <input type="text" name="f_umur" placeholder="umur" require>
        <input type="text" name="f_alamat" placeholder="alamat" require>
        <input type="text" name="f_telepon" require placeholder="telepon">
       
        <input type="submit" value="Tambah">
    </form>

</body>
</html>