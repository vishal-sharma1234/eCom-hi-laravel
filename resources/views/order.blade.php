@extends('master')
@section('content')
<div class="">
    <center>


        <div class="col-sm-6 m-5 ">

            <table border="5px" class="table table-striped">
                <tbody>
                    <tr>
                        <td>Price</td>
                        <td>₹{{$total}}/-</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>₹0/-</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>₹100/-</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>₹{{$total + 100}}/-</td>
                    </tr>
                </tbody>
            </table>

            <form action="/payment" method="post" >
                @csrf
                <div class="mb-3">
                    <textarea class="form-control" name="address" placeholder="Enter your address" > </textarea>
                </div>
                <div class="mb-3" style=" width : 200px; ">
                    <label for="" class="form-label">Payment Method</label>
                    <div style="display: flex;">
                        <div style="padding: 0 10px;">
                            <p><input type="radio" value="Online"  name="payment"> </p>
                            <p><input type="radio" value="EMI"   name="payment"> </p>
                            <p><input type="radio" value="COD" name="payment"> </p>
                        </div>
                        <div>
                            <p>Online Payment </p>
                            <p>EMI Payment</span> </p>
                            <p>Cash On Delivery</span> </p>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </center>
</div>
@endsection