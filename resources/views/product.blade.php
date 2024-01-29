@extends('master')
@section('content')
<div class="container-product">
    <div class="row">
        <h2>Our Products</h2>
        @foreach($products as $item)
        <div class="item">
            <a href="detail/{{$item['id']}}">
                <img class="slider-img" src="{{$item['gallery']}}">
                <div class="">
                    <h3>{{$item['name']}}</h3>
                    <p>{{$item['description']}}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<style>
.container-product {
  display: flex;
  justify-content: center;
  align-items: center;
}

h2 {
  text-align: center;
  color: #D5F5E3;
  font-size: 24px;
  margin-bottom: 20px;
  font-family: Arial, sans-serif;
  font-weight: bold;
}



.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  max-width: 1200px; /* Adjust the max-width as needed */
  margin: 0 auto;
}

.item {
  width: calc(33.333% - 20px);
  margin: 20px 10px;
  padding: 15px;
  text-align: center;
  background-color: #f1f1f1;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.item img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 5px;
}

.item h3 {
  font-size: 20px;
  margin-bottom: 5px;
}

.item p {
  font-size: 14px;
  color: #888;
}

.item a {
  text-decoration: none;
  color: #333;
}

.item a:hover {
  color: #2DCB6B;
}
</style>

@endsection
