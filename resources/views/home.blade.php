@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>


                   <nav class="navbar navbar-expand-lg navbar-light bg-light">

                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                         <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                               <a class="nav-link" href="/home">Home <span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item">
                               <a class="nav-link" href="subjects">Subjects</a>
                            </li>
                            <li class="nav-item">
                               <a class="nav-link" href="students">Students</a>
                            </li>

                            <li class="nav-item">
                               <a class="nav-link" href="departments">Departments</a>
                            </li>
                         </ul>

                      </div>
                   </nav>

                   <!-- Bootstrap JS -->



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
