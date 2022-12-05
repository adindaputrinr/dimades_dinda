@extends('admin.layout')
@section('content')
    {{-- <form action="{{route('mitra.update',Crypt::encrypt($data->id))}}" method="post"> --}}
    {{-- {{csrf_field()}}
    {{method_field('PUT')}} --}}
    <div class="content">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Edit Makanan & Minuman</h2>
                    </div>
                </div>
                @include('admin.partials.flash')
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Mitra</label>
                        <select class="form-control" name="jk">
                            <option>Pilih Mitra</option>
                            <option value="Laki-Laki" >mitra 1</option>
                            <option value="Perempuan" >mitra 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Kategori</label>
                        <select class="form-control" name="jk">
                            <option>Pilih Kategori</option>
                            <option value="Laki-Laki" >Kategori 1</option>
                            <option value="Perempuan" >Kategori 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Harga</label>
                        <input type="text" name="notelp" class="form-control" value="{{old('notelp')}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Stok</label>
                        <input type="email" name="email" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-footer pt-5 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Simpan</button>
                        <a href="" class="btn btn-secondary btn-default">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection