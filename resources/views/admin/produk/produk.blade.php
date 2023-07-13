@extends('admin.layout.app')
@section('content')
@if (Auth::user()->role != 'pelanggan')
<div class="container-fluid px-4">
    <h1 class="mt-4">Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Produk</li>
    </ol>
    </div>
    <div class="card mb-4">
        <div class="card-header"> 
            @if (Auth::user()->role == 'admin')
            <a href="{{ url('admin/produk/create') }}" class="btn btn-primary">Tambah Data</a>
            @endif
        </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Produk 
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Stok</th>
                        <th>Minimal Stok</th>
                        <th>Deskripsi</th>
                        <th>Kategori Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($produk as $prod)  
                    </tr>
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $prod->kode }}</td>
                        <td>{{ $prod->nama }}</td>
                        <td>{{ $prod->harga_jual }}</td>
                        <td>{{ $prod->harga_beli }}</td>
                        <td>{{ $prod->stok }}</td>
                        <td>{{ $prod->min_stok }}</td>
                        <td>{{ $prod->deskripsi }}</td>
                        <td>{{ $prod->nama_kategori }}</td>
                        <td><a href="{{ url('admin/produk/edit/'. $prod->id) }}" class="btn btn-success">Edit</a></td>
                        @if (Auth::user()->role == 'admin')
                        <td><a href="{{ url('admin/produk/delete/'. $prod->id) }}" class="btn btn-danger">Delete</a></td>
                        @endif
                    </tr>
                    <tr>
                        @php
                            $no++
                        @endphp
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@else
@include('admin.access_denied')
@endif
@endsection