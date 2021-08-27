<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unah</title>
</head>
<body>
@foreach($ambil as $p)
<form method="post" action="update_data">
    {{ csrf_field() }}
    <input type="hidden" value="{{$p->id}}">
    <input type="text" value="{{$p->nama}}">
    <input type="text" value="{{$p->nama_depan}}">
    <input type="text" value="{{$p->alamat}}">
    <input type="text" value="{{$p->umur}}">
    <input type="text" value="{{$p->telepon}}">
    <input type="submit" value="ubah">
    @endforeach
</form>
</body>
</html>