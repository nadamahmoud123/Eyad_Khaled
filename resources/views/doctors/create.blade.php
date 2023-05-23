@extends('layouts.app')
@section('content')

<form action="/doctors"  method="POST">
@csrf
<div>
    <label >email</label>
    <input class="form-control" type="text" name="email" value="{{old('email')}}">
     @error('email')
      <div  class="alert alert-danger ">
        {{$message}}
      </div>
     @enderror
</div>
<div>
    <label >password</label>
    <input class="form-control" type="text"  name="password"  value="{{old('password')}}">
    @error('code')
    <div  class="text text-danger ">
      {{$message}}
    </div>
   @enderror
</div>

<button type="submit" class="btn btn-success mt-4">Save</button>
</form>

@endsection
