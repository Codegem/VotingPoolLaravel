@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create new Pool</h1>
            <div class="card-body">
                <form action="/voting" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="exampletitle">Title</label>
                        <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">
                        <small id="titleHelp" class="form-text text-muted">Voting Title</small>

                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleContentas">Content</label>
                        <input name="contentas" type="text" class="form-control" id="contentas" aria-describedby="contentasHelp" placeholder="Enter content">
                        <small id="contentasHelp" class="form-text text-muted">Apie ka voting poolas bus.</small>
                    
                        @error('contentas')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    
                    </div>

                    <button type="submit" class="btn btn-primary">Create It</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
