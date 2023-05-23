@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student Dashboard') }}</div>
                   <nav class="navbar navbar-expand-lg navbar-light bg-light">
                   </nav>
                <div class="card-body">
                    @foreach ($subject as $subject)
                    <div class="d-flex justify-content-between">
       <div>
         <a href="{{route('subjects.show',$subject->id)}}">

           {{$subject->name}}
         </a>
       </div>
 @auth
 {{-- @can('create')


 @endcan --}}

 @endauth


   </div>

 @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
