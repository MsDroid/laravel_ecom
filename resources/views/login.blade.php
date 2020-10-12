    @extends('layout.master')
    @section('page_title', 'ECOM')
    @section('container')
    <div class="container custom-login">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <form action="login" method="post">
                <div class="form-group">
                @csrf
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    @endsection



