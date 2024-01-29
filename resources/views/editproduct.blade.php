@extends('master')
@section('content')
<div class="container-product">
    <div class="row">
        <h2>Edit Product</h2>
        @foreach($products as $item)
        <div class="product-item">
            <img class="product-image" src="{{$item['gallery']}}">
            <div class="product-details">
                <h3 class="product-name">{{$item['name']}}</h3>
                <div class="btn-group">
                    <a href="/edit/{{$item['id']}}" class="btn-edit">
                        <i class="fas fa-edit"></i> <!-- Replace with your edit icon class or SVG code -->
                    </a>
                </div>
            </div>
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

.product-item {
  width: calc(33.333% - 20px);
  margin: 20px 10px;
  padding: 15px;
  text-align: center;
  background-color: transparent;
  border-radius: 10px;
  border: 1px solid #D5F5E3;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.product-image {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 10px;
}

.product-name {
  font-size: 18px;
  margin-bottom: 10px;
  font-family: Arial, sans-serif;
  font-weight: bold;
}

.btn-group {
  display: flex;
  justify-content: center;
  align-items: center;
}

.btn-edit {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #D5F5E3;
  color: #000;
  margin: 0 5px;
  font-size: 14px;
  transition: all 0.3s ease;
}

.btn-edit:hover {
  background-color: #000;
  color: #D5F5E3;
}

</style>
@endsection