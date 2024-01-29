@extends('master')
@section('content')    
<h1>Admin Panel</h1>
<div class="admin-container">
    <button class="addButton" onclick="window.location.href='/addproduct'">Add Product</button>
    <button class="editButton" onclick="window.location.href='/editproduct'">Edit Product</button>
    <button class="deleteButton" onclick="window.location.href='/deleteproduct'">Delete Product</button>
</div>

<style>
/* CSS for Admin Panel */
h1 {
  font-family: Arial, sans-serif;
  font-size: 36px;
  text-align: center;
  margin-top: 50px;
}

.admin-container {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 50px;
}

.addButton,
.editButton,
.deleteButton {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-family: Arial, sans-serif;
  font-size: 18px;
  cursor: pointer;
  margin-right: 20px;
  transition: background-color 0.3s ease;
}

.addButton {
  background-color: #4caf50;
  color: white;
}

.editButton {
  background-color: #ff9800;
  color: white;
}

.deleteButton {
  background-color: #f44336;
  color: white;
}

.addButton:hover,
.editButton:hover,
.deleteButton:hover {
  background-color: darken(currentColor, 20%);
}

</style>
@endsection
