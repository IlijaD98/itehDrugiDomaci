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

  
 
    <div class="trending-wrapper">
    <h1><b>Najpopularniji kursevi</b></h1>
    <br><br>
      @foreach($products as $item)
      <div class="trending-item">
      <a href="detail/{{$item['id']}}">
        <img class="trending-image" src="{{$item['gallery']}}" alt="Chania" >
        <div class="">
          <h3 class="naslov3">{{$item['name']}}</h3>
        </div>
        </a>
      </div>
      @endforeach
    </div>
</div>
@endsection