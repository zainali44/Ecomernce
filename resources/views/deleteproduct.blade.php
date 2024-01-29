@extends('master')
@section('content')

<div class="container">
  <div class="delete-heading">
    <h2>Delete Product</h2>
  </div>

  <div class="product-list">
    @foreach($products as $item)
    <div class="product-item">
      <img class="product-image" src="{{$item['gallery']}}">
      <div class="product-details">
        <h3 class="product-name">{{$item['name']}}</h3>
        <a href="/delete/{{$item['id']}}" class="btn-delete">
          <i class="fas fa-trash"></i> <!-- Replace with your delete icon class or SVG code -->
        </a>
      </div>
    </div>
    @endforeach
  </div>
</div>

<style>
.container {
  margin: 20px auto;
  max-width: 800px;
}

.delete-heading {
  margin-bottom: 20px;
  text-align: center;
}

.delete-heading h2 {
  font-size: 24px;
  font-weight: bold;
  color: #fff;
}

.product-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin: 0 -10px;
}

.product-item {
  width: calc(33.333% - 20px);
  margin: 10px;
  padding: 10px;
  text-align: center;
  background-color: #f1f1f1;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.product-image {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 5px;
}

.product-details {
  padding: 10px;
}

.product-name {
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: bold;
  color: #333;
}

.product-description {
  margin-bottom: 10px;
  font-size: 14px;
  color: #333;
}

.btn-delete {
  display: inline-block;
  padding: 5px 10px;
  border-radius: 5px;
  color:  #dc3545;
  text-decoration: none;
  font-size: 14px;
  font-weight: bold;
  border: 1px solid #dc3545;
  transition: background-color 0.3s;
}

.btn-delete:hover {
  background-color: #c82333;
  color: #fff;
}

@media (max-width: 767px) {
  .product-list {
    flex-direction: column;
    align-items: center;
  }
}
</style>
@endsection
