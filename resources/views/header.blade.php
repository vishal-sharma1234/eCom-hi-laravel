<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;


$total = ProductController::cartItem();

$user = "";

if (Auth::check()) {
    $user  = Auth::user()['name'];
}



?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">E-Comm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px; width : 70%;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/orders">Orders</a>
                </li>

                <form class="d-flex search" action="/search" style="width: 100%;">
                    <input class="form-control me-2 search-input " type="search" placeholder="Search" name="query" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </ul>


            <ul class="nav navbar-nav navbar-right">

                @if($user)

                <li><a href="/cart" class="nav-link active" style="text-decoration: none;">Cart Item({{$total}})</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" style="text-decoration:none; margin: 0 20px;" role="button" data-bs-toggle="dropdown">{{$user}}</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
                @else
                <li><a href="/cart" class="nav-link active" style="text-decoration: none;">Cart Item({{$total}})</a></li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/login">Login</a>
                </li>
                @endif

            </ul>
        </div>
    </div>
</nav>