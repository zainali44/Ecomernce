@extends('master')
@section('content')

<div class="order-container">
    <div class="row">
        <div class="order">
            @foreach ($orders as $item)
            <div class="order-id">
                <p>Order ID: {{$item->id}}</p>
            </div>
            <div class="order-date">
                <p>Order Date: {{$item->created_at}}</p>
            </div>
            <div class="order-status">
                <form action="/updateorder/{{$item->id}}">
                    @csrf
                    <label for="status">Order Status:</label>
                    <select name="status" id="status" onchange="this.form.submit()">
                        <option value="Pending" {{$item->status === 'Pending' ? 'selected' : ''}}>Pending</option>
                        <option value="Processing" {{$item->status === 'Processing' ? 'selected' : ''}}>Processing</option>
                        <option value="Completed" {{$item->status === 'Completed' ? 'selected' : ''}}>Completed</option>
                    </select>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>
<style>
.order-container {
  max-width: 800px;
  margin: 0 auto;
  padding: 40px 20px;
}

.order-id {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.order-date {
  font-size: 14px;
  color: #888;
  margin-bottom: 10px;
}

.order-status {
  margin-top: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

select {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  background-color: transparent;
  color: #FF691E;
  if (select.value == "Completed") {
    color: #00FF00;
  }
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='5'><polygon points='0,0 10,0 5,5'/></svg>");
  background-repeat: no-repeat;
  background-position-x: 100%;
  background-position-y: 5px;
}

select:focus {
  outline: none;
  border-color: #007bff;
}

button {
  margin-top: 10px;
  padding: 10px 20px;
  font-size: 16px;
  color: #fff;
  background-color: #007bff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

button:focus {
  outline: none;
}

button:active {
  transform: scale(0.98);
}

button:disabled {
  opacity: 0.5;
  cursor: default;
}

</style>


@endsection