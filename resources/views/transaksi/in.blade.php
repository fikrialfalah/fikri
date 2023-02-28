@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-header">Transaksi / Barang Masuk
        <a href="{{route('masterbarang.stock.restock')}}" class="btn btn-outline-info">Tambah Stock Baru</a>
        </div>
        <div class="card border-0">
            <div class="card-body">
                <div class="alert alert-danger" role="alert">
                    Request Barang akan masuk kedalam table dibawah ini
                </div>
                <table class="table table-hoover">
                    <thead>
                        <tr>
                            <th scope="col">Referensi</th>
                            <th scope="col">Supplier</th>>
                            <th scope="col">Jumlah Permintaan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">REQ/20220403/001</th>
                            <td>Kawasaki</td>
                            <td>5</td>
                            <td>2022-04-21</td>
                            <td>2000000</td>
                            <td>
                                <a href="" class="btn btn-outline-info">Setuju</a>
                                <a href="" class="btn btn-outline-danger">Tolak</a>
                            </td>
                        </tr>
                    </tbody>
                </div>
            </div>
        </div>
    </div>
@endsection
