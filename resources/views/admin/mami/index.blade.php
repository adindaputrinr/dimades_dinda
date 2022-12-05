@extends('admin.layout')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Data Makanan & Minuman</h2>
                    </div>
                    <div class="card-body">
                        @include('admin.partials.flash')
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Mitra</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                {{-- @forelse($data as $row) --}}
                                    <tr>
                                        <td class="text-center">{{ ++$i }}</td>
                                        <td>produk</td>
                                        <td>kategori</td>
                                        <td>mitra</td>
                                        <td>harga</td>
                                        <td>stok</td>
                                        <td class="text-center">
                                            <form action=""
                                                method="POST">
                                                <a class="btn btn-warning btn-sm"
                                                    href="">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                {{-- @empty --}}
                                    <tr>
                                        <td colspan="8">No record found</td>
                                    </tr>
                                {{-- @endforelse --}}
                            </tbody>
                        </table>
                        {{-- {{ $data->links() }} --}}
                    </div>
                    <div class="card-footer text-right">
                        <a href="" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection