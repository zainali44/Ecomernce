<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
  $total = ProductController::cartItem();
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @keyframes logoAnimation {
      0% { transform: scale(1); }
      50% { transform: scale(1.2); }
      100% { transform: scale(1); }
    }

    nav {
      background-color: transparent;
      height: 60px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      text-align: center;
      animation: logoAnimation 2s infinite;
      position : fixed;
      top: 10px;
      left: 10px;
      padding: 10px 20px;
    }

    .logo img {
      height: 40px;
      justify-content: center;
    }

    .add-to-cart {
      color: #fff;
      font-size: 18px;
      cursor: pointer;
      position: fixed;
      top: 10px;
      right: 10px;
      padding: 10px 20px;
      display: flex;
      align-items: center;


      
    }

    .add-to-cart:hover {
      color: #007bff;
    }

    .add-to-cart i {
      margin-right: 5px;
    }
   .logout {
  color: #fff;
  font-size: 14px;
  cursor: pointer;
  position: fixed;
  top: 10px;
  right: 100px;
  padding: 4px 25px;
  margin-right: 25px;
  margin-top: 8px;
  display: inline-flex;
  align-items: center;
  border: 2px solid #fff;
  color: #fff;
  border-radius: 5px;
  background-color: transparent;
  transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
}

.logout:hover {
  background-color: #fff;
  color: #fff;
  border-color: #007bff;
}

.logout i {
  margin-right: 5px;
}

.logout a {
    color: #fff;
    text-decoration: none;
}
.logout a:hover {
    color: #2A2A2A;
    text-decoration: none;
}


    
  </style>
</head>
<body>
  <nav>
    <div class="add-to-cart">
      <i class="fas fa-shopping-cart"><a href="/cartlist" style="color: white;">({{$total}})</a></i>
    </div>
    <div class="logo">
      <a href="/" title="Image from freeiconspng.com"><img src="https://www.freeiconspng.com/uploads/leaf-icon-png-13.png" alt="Icon Leaf Svg" /></a>
    </div>
    <div class="logout">
      @if(Session::has('user') || Session::has('admin'))
      <a href="/logout">Logout</a>
      @else
      <a href="/login">Login</a>
      @endif
    </div>
  </nav>
</body>
</html>
