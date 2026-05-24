@extends('photos.template')

@section('title')
Tambah Mobil
@endsection

@section('subtitle')
Tambahkan data mobil baru dibawah
@endsection

@section('content')
    <form action="" method="post">
        <div class="form-group">
            <label for="namaMobil">Nama Mobil</label>
            <input type="text" class="form-control">
        </div>
    </form>
@endsection
