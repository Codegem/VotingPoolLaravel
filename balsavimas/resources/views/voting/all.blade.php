@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Show User Pools</h1>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">User</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($voting as $vote)
                    <tr>
                    <th scope="row">{{$vote->id}}</th>
                    <td>{{$vote->title}}</td>
                    <td>{{$vote->contentas}}</td>
                    <!-- sujungiu user ir vote kad gaut username -->
                    <td>{{ implode(',', $vote->user()->get()->pluck('name')->toArray()) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
