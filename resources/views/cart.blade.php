@extends('master')
@section('content')
<div class="custom-product ">

    <center>
        <div class="trending-wrapper">
            <h1>Cart Items</h1>
            <div class="products" >
                @if($products->count() != 0)
                <a href="/order" class="btn btn-success" style="margin: 10px 0;">Order Now</a>
                @endif

                @foreach($products as $item)
                <div class="row cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}" style="text-decoration: none;">
                            <img src="{{$item->gallery}}" class="trending-img" alt="...">
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <p>{{$item->name}}</p>
                    </div>

                    <div class="col-sm-3">
                        <p>₹ {{$item->price}}/-</p>
                    </div>

                    <div class="col-sm-3">
                        <a href="/remove-item/{{$item->cart_id}}" class="btn btn-warning"> X </a>
                    </div>

                </div>
                @endforeach

                @if($products->count() != 0)
                <a href="/order" class="btn btn-success" style="margin-top: 20px;">Order Now</a>
                @endif
            </div>
        </div>
    </center>

</div>
@endsection