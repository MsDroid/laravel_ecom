<?php

use App\Http\Controllers\ProductController;

$total = 0;
if (Session()->has('user')) {
  $total = ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Ms_E-Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
    <ul class="navbar-nav navbar-left ">
      <li class="nav-item active">
        <a class="nav-link" href="{{'/'}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Order</a>
      </li>
    </ul>
    <form action="/search" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 search" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav navbar-right ml-auto">
      <li class="nav-item cart">
        <a class="nav-link" href="cart_detail">Cart({{$total}})</a>
      </li>
      @if(Session()->has('user'))
      <li class="dropdown">
        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">{{Session()->get('user')['name']}}
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="#">Profile</a></li>
          <li><a class="nav-link" href="/logout">Logout</a></li>
        </ul>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{'/login'}}">Login</a>
      </li>
      @endif
    </ul>
  </div>
</nav>