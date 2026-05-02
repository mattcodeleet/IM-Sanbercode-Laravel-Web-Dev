@extends('layout.master')
@section('title')
    Edit Category
@endsection
@section('content')
    <form action="/category/{{$category->id}}" method="POST">
        @csrf

        @method("PUT")

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
    <option value="" disabled>Pilih</option> 
    <option value="Elektronik" {{ $category->name == 'Elektronik' ? 'selected' : '' }}>Elektronik</option> 
    <option value="Fashion" {{ $category->name == 'Fashion' ? 'selected' : '' }}>Fashion</option> 
    <option value="Parfum" {{ $category->name == 'Parfum' ? 'selected' : '' }}>Parfum</option> 
    <option value="Makanan" {{ $category->name == 'Makanan' ? 'selected' : '' }}>Makanan</option> 
  </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Category Description</label>
    <textarea name="description" class="form-control" cols="30" rows="10">{{$category->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection