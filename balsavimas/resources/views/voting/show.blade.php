@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Show User Pools</h1>
            <div class="card-body">
                    {{$voting->title}}
                    {{$voting->contentas}}
            </div>
        </div>
    </div>
</div>
@endsection
