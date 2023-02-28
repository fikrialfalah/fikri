@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page"> Kategori</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Kategori</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                        <button type="submit" class="btn btn-outline-primary mt-4">
                            Perbarui Kategori
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <table class="table table-hover">
                    <thead>
                        <th scope="col">Kode Kategori</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Options</th>
                    </thead>
                    <tbody>
                        <td>KTG/20220403/001</td>
                        <td>Part Sport Kawasaki</td>
                        <td>
                            <button class="submit btn btn-outline-primary btn-sm">Edit Kategori</button>
                            <button class="submit btn btn-outline-danger btn-sm">Hapus Kategori</button>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection