@extends('layouts/layout')
@section('title','Create Product')
@section('content')
<div class="home container">
    <div  class="d-flex flex-wrap py-3 mb-4">
            <h1 style="margin: 0 auto;" >Buat Produk Baru</h1>
    </div>
    <form action="{{ route('create.post') }}" method="POST">
    <div style="margin:0 auto; width:50%;" class="card">
        <div class="card-body">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label >Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="">
            </div>
            <div class="form-group">
                <label >Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="">
            </div>
            <div class="form-group">
                <label >Harga</label>
                <input type="number" min="0" class="form-control" id="harga" name="harga" placeholder="">
            </div>
            <div class="form-group">
                <label >Jumlah</label>
                <input type="number" min="0" class="form-control" id="jumlah" name="jumlah" placeholder="">
            </div>

        </div>
        <div class="card-footer d-flex justify-content-end">
            <button type="submit" class="tombol btn btn-success">Tambah</button>
        </div>
    </div>
    </form>
</div>
@endsection