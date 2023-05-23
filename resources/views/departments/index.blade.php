@extends('layouts.app')
@section('content')

{{-- @if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('departments') }}</div>

                <div class="card-body">
@auth
{{-- @can('create')

@endcan --}}
<h1>
    <a href="{{route('departments.create')}}">
      Add a new Department
    </a>
  </h1>
@endauth

  @foreach ($department as $department)
    <div class="d-flex justify-content-between">
        <div>
          <a href="{{route('departments.show',$department->id)}}">

            {{$department->name}}
          </a>
        </div>
@auth
{{-- @can('create')


  @endcan --}}
  <div>
    <a href="{{route('departments.edit',$department->id)}}">
        Edit
    </a>
    <form action="{{ route('departments.destroy' , $department->id) }}" method="POST" >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-link">
            Delete
        </button>
    </form>
    {{-- {!! Form::open(['action' => 'DepartmentController@destroy','route' => ['departments.destroy',$department->id],'method' => 'department', 'class' => 'float-end']) !!}
    {!! Form::hidden('_method', 'DELETE') !!}
    <div class="form-group">
        {{Form::submit('Delete', [ 'class' => 'btn btn-danger'])}}
</div>
{!! Form::close() !!} --}}
  </div>
@endauth


    </div>

  @endforeach


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
