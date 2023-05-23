@extends('layouts.app')
@section('content')

<form action="{{route('departments.update',$department->id)}}"  method="POST">
@csrf
@method("PUT")
<div>
    <label >Name</label>
    <input class="form-control" type="text" name="name" value="{{$department->name}}">
</div>
<div>
    <label >Code</label>
    <input class="form-control" type="text"  name="code" value="{{$department->code}}">
</div>

<button type="submit" class="btn btn-success mt-4">Save</button>
</form>

@endsection
