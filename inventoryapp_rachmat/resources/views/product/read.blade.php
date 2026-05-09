@extends('layout.master')
@section('title', 'List Product')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(Auth::check() && Auth::user()->role === 'admin')
<a href="/product/create" class="btn btn-sm btn-primary my-3">Tambah</a>
@endif
<div class="row">
    @forelse ($products as $item)
    <div class="col-4">
        <div class="card">
        <img src="{{asset('image/'.$item->image)}}" width="100px" height="300px" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$item->name}}</h5>
        <span class="badge bg-info text-dark">{{$item->category->name}}</span>
        <p class="card-text">{{Str::limit($item->description, 10) }}</p>
        <div class="d-grid">
            <a href="/product/{{$item->id}}" class="btn btn-primary">Read More</a>
        </div>
        @if(Auth::check() && Auth::user()->role === 'admin') 
        <div class="row my-3">
            <div class="col">
                <div class="d-grid">
                 <a href="/product/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                 </div>
            </div>
            <div class="col">
                <div class="d-grid">
                    <form action="/product/{{$item->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

    </div>
        
    @empty
        <h4>Data Masih Kosong</h4>
    @endforelse

</div>

@endsection