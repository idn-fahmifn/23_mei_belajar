@extends('photos.template')

@section('title')
Data Mobil
@endsection

@section('subtitle')
Daftar mobil yang tersedia di showroom
@endsection

@section('content')
    <div class="table-responsive mt-2">
        <p class="my-2">Author : {{$nama}}

        </p>
        <table class="table table-striped">
            <thead>
                <th>Nama Mobil</th>
                <th>Jenis</th>
                <th>Harga Sewa</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach ($daftarMobil as $mobil)
                    <tr>
                        <td>{{$mobil->merk}}</td>
                        <td>{{$mobil->jenis}}</td>
                        <td>{{$mobil->harga_sewa}}</td>
                        <td>
                            <a href="" class="btn">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
