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
                    <tr>
                        <td> {{ $car->brand }} </td>
                        <td> {{ $car->type }} </td>
                        <td> {{ $car->stock }} </td>
                        <td>
                            <a href="{{ route('car.show', $car->id) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>

        <div class="my-2">
            {{ $cars }}
        </div>

    </div>
@endsection
