<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    Hallo pesanan anda : <b>{{$pesanan}}</b>
   @if($pesanan == 'Pasir urug') 
   <br>harga {{$pesanan}} Rp. 50000
   @elseif($pesanan == 'Batako besar')
   <br>harga {{$pesanan}} Rp. 30000
   @elseif($pesanan == 'Bata merah')
   <br>harga {{$pesanan}} Rp. 40000
   @elseif($pesanan == 'Batu apung')
   <br>harga {{$pesanan}} Rp. 650000
   @else
   <br>
   Mohon maaf material anda tidak ada
   @endif
   <br>
   Hallo pesanan anda : <b>{{$pesanan1}}</b>
   @if($pesanan1 == 'Pasir urug') 
   <br>harga {{$pesanan1}} Rp. 50000
   @elseif($pesanan1 == 'Batako besar')
   <br>harga {{$pesanan1}} Rp. 30000
   @elseif($pesanan1 == 'Bata merah')
   <br>harga {{$pesanan1}} Rp. 40000
   @elseif($pesanan1 == 'Batu apung')
   <br>harga {{$pesanan1}} Rp. 650000
   @else
   <br>
   Mohon maaf material anda tidak ada
   @endif
   <br>
</body>
</html>