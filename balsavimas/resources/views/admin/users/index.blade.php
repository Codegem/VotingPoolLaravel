@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>                          
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user -> id}} </th>
                                <td>{{$user -> name}} </td>
                                <td>{{$user -> email}} </td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $user->id)}} " class="bnt btn-primary">Edit</a>
                                    <a href="{{ route('admin.users.destroy', $user->id)}} " class="bnt btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection
