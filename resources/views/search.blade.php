@extends('master')
@section('content')
<div class="custom-product ">

    <center>
        <div class="trending-wrapper">
            <h1>Filter Products</h1>
            <div class="products">
                @foreach($products as $item)
                <div class="trending-item">
                    <a href="detail/{{$item['id']}}" style="text-decoration: none;" >
                        <img src="{{$item['gallery']}}" class="trending-img" alt="...">
                        <div class="">
                            <h5 style="color: red;">{{$item['name']}}</h5>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </center>

</div>
@endsection