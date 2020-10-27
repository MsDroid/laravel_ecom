@extends('layout.master')
@section('page_title', 'Cart-List')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Remove</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1;
          ?>
          @foreach($products as $item)

          <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$item->name}}</td>
            <td><img src="{{$item->gallery}}" style="height: 50px; width:45px"></td>
            <td>{{$item->description}}</td>
            <td>{{$item->price}}</td>
            <td><a href="/removecart/{{$item->cart_id}}"><button class="btn btn-danger">Remove</button></a></td>
          </tr>
          <?php $i++; ?>
          @endforeach
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"><a href="/order"><button class="btn btn-success">Order Now</button></a></th>
          </tr>


        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection