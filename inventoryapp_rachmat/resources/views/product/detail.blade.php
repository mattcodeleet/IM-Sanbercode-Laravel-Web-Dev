@extends('layout.master')
@section('title', 'Detail Product')

@section('content')

<img src="{{asset('image/'. $product->image)}}" width="50%" height="400" alt="">

<h1 class="text-primary">{{$product->name}}</h1>
<p>Stock: {{$product->stock}}</p>
<p>Harga: {{$product->price}}</p>
<p>{{$product->description}}</p>

<a href="/product" class="btn btn-secondary btn-sm">Kembali</a>

@endsection