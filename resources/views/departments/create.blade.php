@extends('layouts.app')
@section('content')

<form action="/departments"  method="POST">
@csrf
<div>
    <label >Name</label>
    <input class="form-control" type="text" name="name" value="{{old('name')}}">
     @error('name')
      <div  class="alert alert-danger ">
        {{$message}}
      </div>
     @enderror
</div>
<div>
    <label >Code</label>
    <input class="form-control" type="text"  name="code"  value="{{old('code')}}">
    @error('code')
    <div  class="text text-danger ">
      {{$message}}
    </div>
   @enderror
</div>

<button type="submit" class="btn btn-success mt-4">Save</button>
</form>

@endsection
