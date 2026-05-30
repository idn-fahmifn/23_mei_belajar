@extends('cars.template')

@section('title')
    Data Mobil
@endsection

@section('subtitle')
    Daftar mobil yang tersedia di showroom
@endsection

@section('content')
    <div class="table-responsive mt-2">


        </p>
        <table class="table table-striped">
            <thead>
                <th>Merk Mobil</th>
                <th>Jenis</th>
                <th>Stok Armada</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @forelse ($cars as $car)
                    <td> {{ $car->brand }} </td>
                    <td> {{ $car->type }} </td>
                    <td> {{ $car->stock }} </td>
                    <td>
                        <a href="#" class="btn btn-small btn-info">Detail</a>
                    </td>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
