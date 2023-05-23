@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Subject_Deatails') }}</div>

                <div class="card-body">
                    <h1>
                        {{$subject->name}}
                    </h1>

                    {{$subject->code}}
                    <br>
                    {{$subject->department}}



                    <br>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
