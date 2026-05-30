@extends('cars.template')

@section('title')
    Detail Mobil {{ $data->brand }}
@endsection

@section('subtitle')
   {{ $data->type }}
@endsection

@section('content')
    <div class="table-responsive mt-2">

        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Merk Mobil</th>
                    <td> {{ $data->brand }} </td>
                </tr>
                <tr>
                    <th>Tipe Mobil</th>
                    <td> {{ $data->type }} </td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td> {{ $data->stock }} </td>
                </tr>
                <tr>
                    <th>Warna</th>
                    <td> {{ $data->color }} </td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td> {{ $data->desc }} </td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
