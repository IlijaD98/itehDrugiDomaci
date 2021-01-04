@extends('master')
@section("content")
<div class="custom-product">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  
 
   <div class="col-sm-10">
   <div class="trending-wrapper">
    <h1><b>Sadrzaj korpe</b></h1>
        <a class="btn btn-success" href="ordernow">Kupi odmah</a>
    <br><br>
      @foreach($products as $item)
      <div class="row searched-item cart-list-devider">
      <div class="col-sm-3">
      <a href="detail/{{$item->id}}">
        <img class="trending-image" src="{{$item->gallery}}" alt="Chania" >
        
        </a>
      </div>


      <div class="col-sm-4">
        <div class="">
          <h2 class="naslov3">{{$item->name}}</h2>
          <h4 class="naslov3">{{$item->description}}</h4>
        </div>
        
      </div>


      <div class="col-sm-3">
       <a href="/removecart/{{$item->cart_id}}"> <button class="btn btn-warning">Izbaci iz korpe</button></a>
      </div>
      
      </div>
      @endforeach
    </div>
</div>
   </div>
@endsection