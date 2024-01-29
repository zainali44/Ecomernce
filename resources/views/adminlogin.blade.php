@extends('master')
@section('content')
  <div class="login-container">
    <h2>Admin Login</h2>
    <form action="adminlogin" method="POST">
      @csrf
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="name" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="btn-login">Login</button>
    </form>
  </div>


    <style>
    .login-container {
    max-width: 400px;
    margin: 100px auto;
    background-color: transparent;
    padding: 40px;
    color: #fff;
    }

    .login-container h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #fff;
    font-size: 24px;
    font-weight: bold;
    }

    .form-group {
    margin-bottom: 20px;
    }

    .form-group label {
    display: block;
    margin-bottom: 5px;
    color: #fff;
    }

    .form-group input[type="text"],
    .form-group input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
    }

    .btn-login {
    display: block;
    width: 100%;
    padding: 12px;
    background-color: transparent;
    border: 1px solid #AED6F1;
    border-radius: 3px;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    }

    .btn-login:hover {
    background-color: #AED6F1;
    color: #000;
    }

</style>
@endsection