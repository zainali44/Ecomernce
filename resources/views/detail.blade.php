@extends('master')
@section('content')

<div class="detail-container">
    <div class="row">
        <div class="col-sm-6">
            <div class="image-container">
                <div class="image-background"></div>
                <img class="detail-img" src="{{$product['gallery']}}">
            </div>
        </div>
        <div class="col-sm-6">
            <a href="/" class="go-back-link">Go Back</a>
            <h2 class="product-name">{{$product['name']}}</h2>
            <h3 class="price">Price: {{$product['price']}}</h3>
            <p class="description">Details: {{$product['description']}}</p>
            <p class="category">Category: {{$product['category']}}</p>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="add-to-cart-btn">Add to Cart</button>
            </form>

            <br><br>
            <br><br>
        </div>
    </div>
</div>

<style>
.detail-container {
  margin: 50px;
}

.image-container {
  position: relative;
  overflow: hidden;
  border-radius: 5px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.image-background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.9));
  opacity: 0;
  transition: opacity 0.3s ease;
}

.detail-img {
  display: block;
  width: 100%;
  height: auto;
  border-radius: 5px;
  transition: transform 0.3s ease;
}

.image-container:hover .image-background {
  opacity: 1;
}

.image-container:hover .detail-img {
  transform: scale(1.05);
}

.go-back-link {
  text-decoration: none;
  color: #28B463;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 10px;
}

.product-name {
  font-size: 28px;
  color: #EBEEED;
  margin-bottom: 10px;
}

.price {
  font-size: 20px;
  color: #28a745;
}

.description {
  font-size: 16px;
  color: #EBEEED;
  margin-bottom: 10px;
}

.category {
  font-size: 16px;
  color: #85C1E9;
  margin-bottom: 10px;
}

.add-to-cart-btn,
.buy-now-btn {
  padding: 10px 20px;
  font-size: 16px;
  color: #fff;
  background-color: #007bff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.add-to-cart-btn:hover,
.buy-now-btn:hover {
  background-color: #0056b3;
}

.buy-now-btn {
  background-color: #28a745;
}

.buy-now-btn:hover {
  background-color: #1e7e34;
}

</style>
@endsection
