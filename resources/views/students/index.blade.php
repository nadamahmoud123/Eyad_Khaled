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
                <div class="card-header">{{ __('students') }}</div>

                <div class="card-body">
@auth
{{-- @can('create')

@endcan --}}
<h1>
    <a href="{{route('students.create')}}">
      Add a new students
    </a>
  </h1>
@endauth

  @foreach ($student as $students)
    <div class="d-flex justify-content-between">
        <div>
          <a href="{{route('students.show',$students->id)}}">

            {{$students->email}}
            {{$students->password}}
          </a>
        </div>
@auth
{{-- @can('create')


  @endcan --}}
  <div>
    <a href="{{route('students.edit',$students->id)}}">
        Edit
    </a>
    <form action="{{ route('students.destroy' , $students->id) }}" method="POST" >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-link">
            Delete
        </button>
    </form>
    {{-- {!! Form::open(['action' => 'studentsController@destroy','route' => ['students.destroy',$students->id],'method' => 'students', 'class' => 'float-end']) !!}
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
