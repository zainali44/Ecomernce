<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        {{View::make('header')}}
        @yield('content')
        {{View::make('footer')}}
    </div>
</body>

<style>
    .custom-login{
        height: 500px;
        padding-top: 150px;  
        margin-bottom: 100px;
        margin-left: 300px;
        justify-content: center;
    }

    body {
        background-color: #2C3E50;
        color: #fff;
    }
    .NewUser {
        margin-top: 10px;
        margin-left: 50px;
        color: #fff;
    }
    .NewUser a {
        color: #2DCB6B;
    }
    .NewUser a:hover {
        color: #55DFBB;
    }
</style>
</html>