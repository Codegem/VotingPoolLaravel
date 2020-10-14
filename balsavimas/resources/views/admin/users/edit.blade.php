@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users Edit {{$user->name}}</div>

                    <div class="card-body">
                        <form action="{{ route('admin.users.update', $user) }}" method="POST">
                            @csrf    
                            {{ method_field('PUT') }}
                            @foreach($grupes as $grupe)
                                <div class="form-check">
                                    <input type="checkbox" name="grupes[]" value="{{ $grupe->id }}">
                                    <label>{{ $grupe->Group_Name }}</label>
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
