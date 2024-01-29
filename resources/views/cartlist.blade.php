@extends('master')
@section('content')

<div class="cartlist">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="trending-wrapper">
                    <h3>Cart List</h3>
                    <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
                    <a class="btn btn-success2" href="myorders">My Orders</a><br><br>
                    @foreach($products as $item)
                    <div class="row searched-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-image" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                        </div>
                    </div>
                    @endforeach
        </div>
    </div>
</div>
<style>
    .cartlist {
    margin-top: 50px;
    }

    .cartlist h3 {
    font-size: 24px;
    margin-bottom: 20px;
    }

    .cartlist .trending-wrapper {
    margin-bottom: 20px;
    }

    .cartlist .btn-success {
    margin-bottom: 20px;
    background-color: transparent;
    border-radius: 5px;
    color: #AED6F1;
    border-color: #85929E;
    }

    .cartlist .searched-item {
    margin-bottom: 20px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 20px;
    }

    .cartlist .trending-image {
    width: 100%;
    max-height: 200px;
    object-fit: cover;
    border-radius: 5px;
    }

    .cartlist .col-sm-4 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    }

    .cartlist .col-sm-4 h2 {
    margin-top: 0;
    margin-bottom: 10px;
    font-size: 20px;
    }

    .cartlist .col-sm-4 h5 {
    margin-top: 0;
    color: #777;
    font-size: 16px;
    }

    .cartlist .btn-warning {
    font-size: 16px;
    padding: 8px 16px;
    background-color: #85929E;
    border-color: #85929E;
    }

    .cartlist .btn-warning:hover {
    background-color: #5D6D7E;
    border-color: #5D6D7E;
    }

    .cartlist .btn-success {
    font-size: 18px;
    padding: 10px 20px;
    }

    .cartlist .btn-success:hover {
    background-color: #5D6D7E;
    color: #fff;
    border-color: #5cb85c;
    }

    .cartlist .btn-success2 {
    font-size: 14px;
    padding: 5px 20px;
    background-color: transparent;
    border-radius: 5px;
    color: #fff;
    border-color: #85929E;
    }

    .cartlist .btn-success2:hover {
    background-color: #5cb85c;
    border-color: #5cb85c;
    }

    .cartlist .cart-list-devider {
    border-bottom: 1px solid #ddd;
    padding-bottom: 20px;
    }


</style>
@endsection
