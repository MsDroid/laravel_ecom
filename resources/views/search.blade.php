@extends('layout.master')
@section('page_title', 'ECOM')
@section('container')
<div class="container">
<div class="row">
  <div class="col-sm-4">
      <h4>Filter</h4>
    </div>
  <div class="col-sm-8">
  <h6><u>Result Products</u></h6>
        @foreach($products as $item)
        <div class="search-item">
            <a href="detail/{{$item['id']}}">
                <img class="trending-img" src="{{$item['gallery']}}">
                <div class="">
                    <h5>{{$item['name']}}</h5>
                </div>
            </a>
            <p>{{$item['description']}}</p>
        </div>
        @endforeach
    </div>
</div>
</div>      
@endsection