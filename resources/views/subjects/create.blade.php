@extends('layouts.app')
@section('content')
@auth
<form action="/subjects"  method="POST">
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
<div>
    <label >department</label>
    <input class="form-control" type="text"  name="department"  value="{{old('department')}}">
    @error('department')
    <div  class="text text-danger ">
      {{$message}}
    </div>
   @enderror
</div>

<button type="submit" class="btn btn-success mt-4">Save</button>
</form>
@endauth
@endsection
