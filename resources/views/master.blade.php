<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>E-Comm project</title>
</head>

<body>

    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>

<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }

    img.slider-img{
        height: 400px !important ;
    }

    .custom-product{
        height: 600px;
    }

    img.trending-img{
        height: 100px;
    }

    .trending-wrapper{
        /* display: flex; */
        /* background-color: rebeccapurple; */
    }

    .trending-wrapper > .products{
        /* display: flex; */
        /* background-color: red; */
        /* text-align: center; */
        /* align-items: center; */
        /* background-color: green; */
        /* gap: 50px; */
    }

    .trending-wrapper > .products > .trending-item{
        /* width: 30%; */
        /* text-align: center; */
        /* background-color: red; */
        display: inline-block;
        margin: 0 10%;
    }

    img.detail-img{
        height: 100px;
    }

    input.search-input{
        /* width: 100%; */
    }

</style>

</html>