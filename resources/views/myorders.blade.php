@extends('master')
@section('content')
<div class="custom-product ">

    <center>
        <div class="trending-wrapper">
            <h1>Order List</h1>
            <div class="products" >

                @foreach($products as $item)
                <div class="row cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->product_id}}" style="text-decoration: none;">
                            <img src="{{$item->gallery}}" class="trending-img" alt="...">
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <p>{{$item->name}}</p>
                        <p> Delivery Status <code>{{$item->status}}</code></p>
                        <p> Payment Status <code>{{$item->payment_status}}</code></p>
                        <p> Payment Method <code>{{$item->payment_method}}</code></p>
                    </div>

                    <div class="col-sm-3">
                        <p>₹ {{$item->price}}/-</p>
                    </div>

                    <div class="col-sm-3">
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </center>

</div>
@endsection