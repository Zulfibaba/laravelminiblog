<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mini Blog</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: darkgray;
        }

        header {
            background-color: #333;
            color: #fff;
            display: flex;
            align-items: center;
            padding: 15px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            margin-right: auto;
        }


        .login-btn,
        .register-btn {
            color: #fff;
            background-color: #007bff;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            margin-left: 10px;

        }

        .login-btn:hover,
        .register-btn:hover {
            background-color: #6d757d;
        }

        footer {
            background-color: darkgrey;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">Mini Blog</div>

        <div class="user-actions">
            <a href="{{ url('login') }}" class="login-btn">Login</a>
            <a href="{{ url('register') }}" class="register-btn">Register</a>
        </div>
    </header>

    <div class="container p-5 my-5 bg-dark text-white">
        @foreach ($posts as $post)
            {{ $post->title }}<br>
            {{ $post->body }}<br>
        @endforeach
    </div>
    </div>

    <div class="container ">
        {{ $posts->links() }}
    </div>
    <footer>
        <p>Copyright © 2023 Mini Blog. All rights reserved.</p>

    </footer>
</body>

</html>
