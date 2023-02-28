@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                 <thead>
                     <th scope="col">Kode Categorys</th>
                     <th scope="col">Nama Barang</th>
                     <th scope="col">Options</th>
                 </thead>
                 <tbody>
                         <td>KTG/20220403/001</td>
                         <td>Part Sport Kawasaki</td>
                         <td>
                            <form action="" method="post">
                                @csrf
                                @role('admin')
                                <a href="{{route('masterbarang.create')}}" class="btn btn-outline-info">Update Stock</a>
                                <a href="{{route('masterbarang.stock.show')}}" class="btn btn-outline-danger">Tampilkan Stock</a>
                                @endrole
                                @role('customer')
                                <a href="{{route('masterbarang.databarang.rak')}}" class="btn btn-outline-warning">Buat Permintaan</a>
                                @endrole
                            </form>
                         </td>
                     </tr>
                 </tbody>
             </table>
        </div>
    </div>
</div>

@endsection