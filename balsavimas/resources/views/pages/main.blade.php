@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Test Loged in page</h1>
            <a href="/voting/create" class="btn btn-dark">Make New Pool</a>
            <a href="/visipool" class="btn btn-primary">Show All</a>
        </div>
    </div>
</div>
@endsection
