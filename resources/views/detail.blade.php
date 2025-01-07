@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" class="detail-img" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/" style="text-decoration: none;">Go Back</a>
            <h3>Name : {{$product['name']}}</h3>
            <h4>Price : ₹ {{$product['price']}}/-</h4>
            <h5>Category : {{$product['category']}}</h5>
            <h6>Description : {{$product['description']}}</h6>
            <br>
            <form action="/add-to-cart" method="post" >
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <input type="submit" class="btn btn-success" value="Add To Cart">
            </form>
            <br>
        </div>
    </div>
</div>
@endsection