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
            <h2>Stasiun TV Digital</h2>
        </legend>
        @foreach ($tv as $data)
        @php
        $total= 0;
        @endphp
        Stasiun : {{$data['siaran']}} <br>
        Acara : {{$data['acara']}} <br>
        Jam Tayang : {{$data['jam_tayang']}} <br>
        Tanggal Tayang : {{$data['tanggal']}} <br>
        <hr>
        @endforeach
    </fieldset>
</body>
</html>