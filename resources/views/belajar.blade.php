<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('route-belajar') }}">Menuju Respon Belajar</a>

    <form action="{{ route('kirim-data') }}" method="post">
        @csrf

        <div class="">
            <label for="nama">Nama Kamu</label>
            <input type="text" name="nama" value="{{ old('nama') }}" class="" required>
            {{-- menampilkan pesan error --}}
            @error('nama')
                <span>{{$message}}</span>
            @enderror
        </div>

        <div class="">
            <label for="umur">Umur Kamu</label>
            <input type="number" name="umur" value="{{ old('umur') }}" class="" required>
             {{-- menampilkan pesan error --}}
            @error('umur')
                <span>{{$message}}</span>
            @enderror
        </div>

        <div class="">
            <button type="submit">Masuk</button>
        </div>
    </form>

</body>
</html>