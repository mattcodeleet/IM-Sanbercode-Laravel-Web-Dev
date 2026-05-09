@extends('layout.master')
@section('title')
    Tambah Category
@endsection
@section('content')
    <form action="/category" method="POST">
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
    <label class="form-label">Category Name</label>
    <select class="form-control" name="name">
      <option>Pilih</option> 
      <option>Parfum Wanita</option> 
      <option>Parfum Pria</option> 
      <option>Parfum Unisex</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Category Description</label>
    <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection