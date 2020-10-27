@extends('layout.master')
@section('page_title', 'ECOM')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <table class="table table-dark">

            <tbody>
                <tr>

                    <td>Price</td>
                    <td>{{$total}} Rs.</td>

                </tr>
                <tr>

                    <td>Tax</td>
                    <td>0 Rs.</td>

                </tr>
                <tr>

                    <td>Delivery</td>
                    <td>100 Rs</td>
                </tr>
                <tr>

                    <td>Total</td>
                    <td>{{$total + 100}} Rs.</td>
                </tr>
            </tbody>
        </table><br><br>
    <h1>Address Details</h1>
    <br>
    <form action="/ordernow" method="post">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      
      <input type="text" class="form-control" name="first_name" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      
      <input type="text" class="form-control" name="last_name" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" name="address_2" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState" name="state">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option name="state">Jharkhand</option>
        <option name="state">Delhi</option>
        <option name="state">Rajsthan</option>
        <option name="state">uttr pradesh</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip" >Zip</label>
      <input type="text" name="zip" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <label for="Payment Method"></label>
    <p><input type="radio" name="payment" value="Online Payment"><span>Online Payment</span></p>
    <p><input type="radio" name="payment" value="EMI Payment"><span>EMI Payment</span></p>
    <p><input type="radio" name="payment" value="Cash on Delivery"><span>Cash on Delivery</span></p>
  </div>
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
</div>
    </div>
</div>
@endsection