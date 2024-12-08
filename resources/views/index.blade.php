@extends('layouts/layout')
@section('title','Main Page')
@section('content')
<div class="home container">
    <div  class="d-flex flex-wrap py-3 mb-4 border-bottom">
        <h1 style="margin: 0 auto;" >Daftar Produk</h1>
        <a class="tombol btn btn-success" href="{{route('create')}}" role="button">
            <div class="isi-tombol">Add</div>
        </a>
    </div>
    <table class="table">
    <thead class="table-dark">
        <tr style="justify-content: center; align-items: center;">
        <th scope="col">ID</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Harga</th>
        <th scope="col">Jumlah</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($produk as $object)
        <tr>
        <th scope="row">{{$object->id}}</th>
        <td>{{$object->nama_produk}}</td>
        <td>{{$object->keterangan}}</td>
        <td>{{ format($object->harga, 'IDR', 0) }}</td>
        <td>{{$object->jumlah}}</td>
        <td>
        <div style="display: flex; justify-content: center; align-items: center; gap: 10px;">
            <a class="tombol btn btn-warning" href="{{route('edit',$object->id)}}" role="button">Edit</a>
            <form action="{{ route('delete', $object->id) }}" method="POST">
                @csrf
                <button type="submit" class="tombol btn btn-danger">Delete</button>
            </form>
        </div>   
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection