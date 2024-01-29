@extends('master')
@section('content')

<div class="my-order">
  <div class="col-sm-10">
    <div class="trending-wrapper">
      <h3>My Orders</h3>
      @foreach($orders as $item)
      <div class="searched-item">
        <div class="row">
          <div class="col-sm-3">
            <a href="detail/{{$item->id}}">
              <img class="trending-image" src="{{$item->gallery}}">
            </a>
          </div>
          <div class="col-sm-9">
            <div class="order-details">
              <h2>{{$item->name}}</h2>
              <div class="order-info">
                <div class="info-row">
                  <span class="info-label">Delivery Status:</span>
                  <span class="info-value">{{$item->status}}</span>
                </div>
                <div class="info-row">
                  <span class="info-label">Address:</span>
                  <span class="info-value">{{$item->address}}</span>
                </div>
                <div class="info-row">
                  <span class="info-label">Payment Status:</span>
                  <span class="info-value">{{$item->payment_status}}</span>
                </div>
                <div class="info-row">
                  <span class="info-label">Payment Method:</span>
                  <span class="info-value">{{$item->payment_method}}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

<style>
  .my-order {
    margin-top: 50px;
  }

  .my-order h3 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #fff;
    text-align: center;
  }

  .my-order .trending-wrapper {
    margin-bottom: 20px;
  }

  .my-order .searched-item {
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    margin-bottom: 20px;
  }

  .my-order .trending-image {
    width: 100%;
    max-height: 200px;
    object-fit: cover;
    border-radius: 5px;
    transition: transform 0.3s ease;
  }

  .my-order .trending-image:hover {
    transform: scale(1.05);
  }

  .my-order .order-details h2 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #555;
  }

  .my-order .order-details .order-info .info-row {
    display: flex;
    margin-bottom: 5px;
  }

  .my-order .order-details .order-info .info-label {
    font-weight: bold;
    color: #555;
    margin-right: 5px;
  }

  .my-order .order-details .order-info .info-value {
    color: #777;
  }
</style>
@endsection
