@extends('master')
@section('content')
<div class='container custom-login'>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-5">
            <h2>Login</h2>
            <form action="login" method="POST">
                <div class="mb-3">
                        @csrf
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <button type="submit" class="btn">Login</button>
            </form>

            <div class="NewUser">
                <a href="/register">New User? Register Here</a>
            </div>

            <div class="adminButton">
                <a href="/adminlogin">Admin Login</a>
                
                </div>
        </div>
    </div>
</div>

<style>
    .custom-login {
        height: 500px;
        padding-top: 90px;
    }

    .NewUser {
        padding-top: 10px;
    }
    
    h2 {
        text-align: center;
    }

    .btn {
        background-color: #007bff;
        color: #fff;
        margin-top: 10px;
        padding: 5px 30px;
        align-items: center;
        border-radius: 5px;
        margin-left: 85px;
    }

    .btn:hover {
        background-color: #0069d9;
        color: #fff;
    }

    .adminButton {
        padding-top: 10px;
        color: #fff;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 12px;
        font-weight: 500;
        letter-spacing: 1px;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .adminButton a {
        color: #fff;
        text-decoration: none;
    }

    .adminButton a:hover {
        color: #fff;
        text-decoration: none;
    }

    .adminButton a:active {
        color: #fff;
        text-decoration: none;
    }

    .adminButton a:visited {
        color: #fff;
        text-decoration: none;
    }

    .adminButton a:focus {
        color: #fff;
        text-decoration: none;
    }

    .adminButton a:link {
        color: #fff;
        text-decoration: none;
    }

    .adminButton a:visited {
        color: #fff;
        text-decoration: none;
    }

    .NewUser a {
        color: #fff;
        text-decoration: none;
    }

    .NewUser a:hover {
        color: #212529;
        text-decoration: none;
    }

    </style>

@endsection

