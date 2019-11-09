@extends('layouts.default')
@section('content')


<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $firstPost->product_name }}</h5>
            <p class="card-text">{{ $firstPost->review}}</p>
            <a href="#" class="card-link">Update</a>

        </div>

        <hr>
        <div class="container">
            <a class="btn btn-primary" href="/product/upvote/{{$firstPost->id}}" role="button">Up</a>
            <p class="card-text">0</p>
            <a class="btn btn-primary" href="/product/downvote/{{$firstPost->id}}" role="button">Down</a>
        </div>
    </div>
</div>

@stop