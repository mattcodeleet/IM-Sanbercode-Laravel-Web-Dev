@extends('layout.master')
@section('title')
    Tambah Product
@endsection
@section('content')
    <form action="/product" method="POST" enctype="multipart/form-data">
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
    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input type="text" name="name" class="form-control" value="{{old('name')}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" class="form-control" cols="30" rows="10" ></textarea>
    </div>    
    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="text" name="price" class="form-control" value="{{old('price')}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="text" name="stock" class="form-control" value="{{old('stock')}}">
    </div>
  <div class="mb-3">
    <label class="form-label">Kategori</label>
    <select name="categori_id" id="" class="form-control">
        <option>Pilih</option> 
        @forelse ($categories as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>          
        @empty
        <option value="">Tidak Ada</option>          
        @endforelse
    </select>
  </div>
  <div class="mb-3">
        <label class="form-label">Gambar</label>
        <input type="file" name="image" class="form-control">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection