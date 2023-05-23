@extends('layouts.app')
@section('content')

<form action="{{route('doctors.update',$doctor->id)}}"  method="POST">
@csrf
@method("PUT")
<div>
    <label >email</label>
    <input class="form-control" type="text" name="email" value="{{$doctor->email}}">
</div>
<div>
    <label >password</label>
    <input class="form-control" type="text"  name="password" value="{{$doctor->password}}">
</div>

<button type="submit" class="btn btn-success mt-4">Save</button>
</form>

@endsection
