@extends('layout.master')
@section('title')
    Update Profile
@endsection
@section('content')
    <form action="/profile" method="POST">
        @csrf
        @method('PUT')

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

  <div class="mb-3">
    <label class="form-label">Age</label>
    <input type="number" name="age" class="form-control" value="{{old('age', $profil->age)}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Bio</label>
    <textarea name="bio" class="form-control" cols="30" rows="10">{{old('bio', $profil->bio)}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection