<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
{{View::make('include.header')}}
@yield('container')
{{View::make('include.footer')}}
  
</body>
<style>
.custom-login{
    height: 500px;
    padding-top: 100px;
}
.carousel-inner img {
    width: 100%;
    height: 100%;
  }
  img.slider-img{
      height: 400px !important;
      
  }
  .custom-slider{
      height : 500px;
  }

  .carousel-caption{
    color: brown;
    background-color: #00adff54;
  }
  img.trending-img{
      height: 100px;
  }
  .trending-item{
      float: left;
      width: 20%;
      padding-left: 20px;
  }
  .trending-wrapper{
      margin: 20px;
  }
  .img-detail{
      height: 400px;
  }
  .search{
      width: 500px!important;
  }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>  
<script>


</script>
</html>