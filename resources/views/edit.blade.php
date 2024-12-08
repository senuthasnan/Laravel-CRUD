@extends('layouts/layout')
@section('title','Edit Product')
@section('content')
<div class="home container">
    <div  class="d-flex flex-wrap py-3 mb-4">
            <h1 style="margin: 0 auto;" >Edit Produk</h1>
    </div>
    <form action="{{route('update',['produk'=>$produk])}}" method="POST">
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
                <label for="formGroupExampleInput">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{$produk->nama_produk}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{$produk->keterangan}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Harga</label>
                <input type="number" min="0" class="form-control" id="harga" name="harga" value="{{$produk->harga}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Jumlah</label>
                <input type="number" min="0" class="form-control" id="jumlah" name="jumlah" value="{{$produk->jumlah}}">
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button type="submit" class="tombol btn btn-warning">Update</button>
        </div>
    </div>
    </form>
</div>
@endsection