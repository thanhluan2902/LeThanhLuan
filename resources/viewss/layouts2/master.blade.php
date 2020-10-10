<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>My Profile</title>
    <style>
        .main {
            text-align: center;
        }

        .top {
            height: 100px;
            background: green;
            color: white;
            line-height: 100px;
            font-size: 50px;
            font-weight: 700;
        }

        .bot {
            height: 70px;
            background: green;
            color: white;
            line-height: 70px;
            font-size: 20px;
            font-weight: 700;
        }

        .lol {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        img {
            width: 100%;
            height: 500px;
        }
        .oke {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container main">
        <div class="row">

          {{-- header --}}
          @include('layouts2.header')

          @yield('body')
          
          {{-- footer --}}
          @include('layouts2.footer')

        </div>
    </div>    
</body>
</html>