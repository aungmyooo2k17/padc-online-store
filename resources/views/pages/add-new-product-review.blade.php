@extends('layouts.default')
@section('content')

<div class="container">
    <form action="/product/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input name="product_name" type="text" class="form-control" id="product_name" aria-describedby="emailHelp" placeholder="Product Name" require>
        </div>
        <div class="form-group">
            <label for="review">Product Review</label>
            <textarea name="review" class="form-control" id="review" rows="3" require></textarea>
        </div>
        <input name="votes" type="hidden" class="form-control" id="votes" aria-describedby="emailHelp" placeholder="Product Name" value="0">
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@stop