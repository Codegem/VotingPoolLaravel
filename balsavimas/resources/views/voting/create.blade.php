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

                    <!-- <div class="form-group">
                        <label for="exampleContentas">Content</label>
                        <input name="contentas" type="text" class="form-control" id="contentas" aria-describedby="contentasHelp" placeholder="Enter content">
                        <small id="contentasHelp" class="form-text text-muted">Apie ka voting poolas bus.</small>
                    
                        @error('contentas')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    
                    </div> -->

                    <div class="form-group">
                        <label for="examplequestion1">First Quote</label>
                        <input name="answers[]" type="text" class="form-control" id="question1" aria-describedby="question1Help" placeholder="question-1">
                        <small id="question1Help" class="form-text text-muted">First Quote</small>
                    
                        @error('question1')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    
                    </div>

                    <div class="form-group">
                        <label for="examplequestion2">Second Quote</label>
                        <input name="answers[]" type="text" class="form-control" id="question2" aria-describedby="question2Help" placeholder="question-2">
                        <small id="question2Help" class="form-text text-muted">Second Quote</small>
                    
                        @error('question2')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    
                    </div>

                    <div class="form-group">
                        <label for="examplequestion3">Third Quote</label>
                        <input name="answers[]" type="text" class="form-control" id="question3" aria-describedby="question3Help" placeholder="question-3">
                        <small id="question3Help" class="form-text text-muted">Third Quote</small>
                    
                        @error('question3')
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
