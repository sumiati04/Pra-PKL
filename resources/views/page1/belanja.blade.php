<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>
        LIST BELANJA
</legend>
@foreach ($belanja as $data)
        @php
            $total = 0;
        @endphp
        Nama : {{ $data['nama'] }}<br>
        Jenis Barang : 
        @foreach($data['membeli'] as $belikan) 
        <li>
            Membeli : {{ $belikan['beli'] }}<br>
            Harga : Rp. {{ $belikan['harga'] }}<br>
</li>


    @php $total += $belikan['harga'] @endphp

    @endforeach

    Total Belanja : {{$total}}<br>
    @php 
    $cashback;
    if ($total > 500000){
        $cashback = (10/100) * $total;
    } elseif ($total > 250000){
        $cashback = (5/100) *$total
    } else{
        $cashback = 0;
    }
    @endphp

    <!-- @if ($total > 500000 )
    Selamat ! Anda Mendapatkan Cashback Sebesar 10% <br>

    @elseif ($total < 500000)
    Selamat ! Anda Mendapatkan Cashback Sebesar 5%<br>

    @else 
    Maaf, Anda Tidak Mendapatkan Cashback
    @endif

    @php $cashback = $total - (0.1 * $total); @endphp
    Total Belanja Setelah Dapat Cashback <b>{{$data['nama']}}</b>:
    {{$cashback}}<br> -->
    <hr>
        @endforeach
</fieldset>
</body>
</html>