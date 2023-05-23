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
                <div class="card-header">{{ __('doctors') }}</div>

                <div class="card-body">
@auth
{{-- @can('create')

@endcan --}}
<h1>
    <a href="{{route('doctors.create')}}">
      Add a new doctors
    </a>
  </h1>
@endauth

  @foreach ($doctor as $doctors)
    <div class="d-flex justify-content-between">
        <div>
          <a href="{{route('doctors.show',$doctors->id)}}">

            {{$doctors->email}}
            {{$doctors->password}}
          </a>
        </div>
@auth
{{-- @can('create')


  @endcan --}}
  <div>
    <a href="{{route('doctors.edit',$doctors->id)}}">
        Edit
    </a>
    <form action="{{ route('doctors.destroy' , $doctors->id) }}" method="POST" >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-link">
            Delete
        </button>
    </form>
    {{-- {!! Form::open(['action' => 'doctorsController@destroy','route' => ['doctors.destroy',$doctors->id],'method' => 'doctors', 'class' => 'float-end']) !!}
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
