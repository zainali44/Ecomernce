@extends('master')
@section('content')

<div class="Order-Now">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>Rs {{$total}}/-</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>Rs 0/-</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>Rs 10/-</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>Rs {{$total + 10}}/-</td>
                </tr>
            </tbody>
        </table>


        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="address" placeholder="Enter your address" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="pwd">Payment Method</label><br><br>
                <input type="radio" value="cash" name="payment"><span> Online Payment</span><br><br>
                <input type="radio" value="cash" name="payment"><span> Payment on Delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-default">Order Now</button>
        </form>
    </div>
</div>

<style>
    .Order-Now {
    margin: 20px;
    padding: 20px;
    background-color: transparent;
    }

    .Order-Now .table {
    margin-bottom: 20px;
    }

    .Order-Now td {
    padding: 10px;
    background-color: transparent;
    color: #AED6F1;
    }

    .Order-Now .form-group {
    margin-bottom: 20px;
    }

    .Order-Now textarea.form-control {
    height: 100px;
    resize: none;
    background-color: transparent;
    color: #AED6F1;
    border: 1px solid #AED6F1;
    }

    .Order-Now label {
    font-weight: bold;
    }

    .Order-Now input[type="radio"] {
    margin-right: 5px;
    }

    .Order-Now button[type="submit"] {
    background-color: transparent;
    color: #fff;
    border: 1px solid #AED6F1;
    padding: 10px 25px;
    border-radius: 5px;
    cursor: pointer;
    }

    .Order-Now button[type="submit"]:hover {
    background-color: #AED6F1;
    color: #000;
    }


</style>
@endsection
