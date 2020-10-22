@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        @foreach($voting as $vote)
        <div class="col-md-4 m-auto">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-circle-arrow-right"></span>
                        {{$vote->title}}
                    </h3>
                </div>
                <div class="panel-body">
                    <form action="/poolvote" method="POST" id="{$vote->id}">
                    @csrf
                    <input type="hidden" name="poolid" value="{{$vote->id}}">
                    @foreach(json_decode($vote->answers) as $answer)
                        <label id="{$vote->id}">
                            <input type="radio" value="{{$answer}}" name="poolanswer" for="{$vote->id}">
                            {{$answer}}
                        </label>
                    @endforeach
                        <button type="submit" for="{$vote->id}" class="btn btn-success btn-sm">Vote</button>
                    </form>
                    </div>
                <div class="panel-footer">
                    <!-- <button type="button" class="btn btn-primary btn-sm">
                        View Result</button> -->
                    <h6>Creator {{ implode(',', $vote->user()->get()->pluck('name')->toArray()) }}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
