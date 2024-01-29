@extends('master')
@section('content')

<div <div class="container-product">
    <div class="row">
        <h2>Edit Product</h2>
        <form action="/edit/{{$products['id']}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$products['name']}}">
            </div>
            <div class="form-group">
                <label for="price">Product Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$products['price']}}">
            </div>
            <div class="form-group">
                <label for="description">Product Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{$products['description']}}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Product Category:</label>
                <input type="text" class="form-control" id="category" name="category" value="{{$products['category']}}">
            </div>
            <div class="form-group">
                <label for="gallery">Product Gallery:</label>
                <input type="text" class="form-control" id="gallery" name="gallery" value="{{$products['gallery']}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

            @if (Session::has('success'))
            <script>
                toastr.success("{!! Session::get('success') !!}");
            </script>
        @endif
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</div>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        text-align: center;
    }

    form {
        width: 400px;
        margin: 0 auto;
        background-color: transparent;
        position:relative;
        font-size: 12px;
    }

    fieldset {
        border: 1px solid #ccc;
        border-radius: 3px;
        padding: 10px;
        background-color: transparent;
    }

    legend {
        font-weight: bold;
        margin-bottom: 10px;
        margin-left: 60px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"],
    textarea {
        width: 95%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        font-size: 12px;
    }

    input[type="submit"] {
        width: 100px;
        padding: 5px 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
        background-color: #eee;
        cursor: pointer;
        font-size: 12px;
        float: right;
    }

    .add-container {
        width: 400px;
        margin: 0 auto;
    }

    .alert {
        width: 400px;
        margin: 0 auto;
        margin-top: 10px;
        text-align: center;
    }

    .alert-success {
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 5px;
        background-color: #eee;
        color: #333;
    }

    .alert-danger {
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 5px;
        background-color: #f2dede;
        color: #a94442;
    }

    .alert-warning {
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 5px;
        background-color: #fcf8e3;
        color: #8a6d3b;
    }

</style>
@endsection