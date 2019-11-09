@extends('layouts.default')
@section('content')

<div class="container">
    <div class="row">
        @foreach($result as $data)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->product_name}}</h5>
                    <p class="card-text">{{ $data->review}}</p>
                    <a href="/product/{{ $data->id }}" class="card-link">View Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@stop