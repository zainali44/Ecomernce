@extends('master')
@section('content')    
<div class="add-container">
    <form action="addproduct" method="POST">
        @csrf
            <fieldset>
                <legend>Add a New Product</legend>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required><br><br>

                <label for="price">Price:</label>
                <input type="text" name="price" id="price" required><br><br>

                <label for="description">Description:</label><br>
                <textarea name="description" id="description" rows="4" cols="50" required></textarea><br><br>

                <label for="category">Category:</label>
                <input type="text" name="category" id="category" required><br><br>

                <label for="gallery">Gallery:</label>
                <input type="text" name="gallery" id="gallery" required><br><br>
            </fieldset>

            <input type="submit" value="Submit">
        </form>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
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
            color: #38C332;
            align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #37EA86;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 5px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: transparent;
            color: #fff;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 5px 20px;
            background-color: transparent;
            color: #85C1E9;
            border: solid 1px #fff;
            border-radius: 3px;
            cursor: pointer;
            float: center;
        }

        input[type="submit"]:hover {
            background-color: #85C1E9;
            color: #17202A;
        }
    </style>
@endsection
