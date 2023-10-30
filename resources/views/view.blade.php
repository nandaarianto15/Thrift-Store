<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/Pink_Typography_Swash_Letter_NO_Logo-removebg-preview (1) 3.png') }}">
    <title>Thrift House</title>
    <style>
        body {
            background-image: url({{ asset('img/image1.png') }});
        }

        img {
            position: absolute;
            width: 900px;
            height: 800px;
            left: 245px;
            bottom: ;
            top: -110px;
        }

        .text {
            position: absolute;
            width: 110px;
            height: 80px;
            left: -400px;
            top: 2px;
        }

        .login {
            position: absolute;
            width: 110px;
            height: 80px;
            left: 980px;
            top: 15px;
            text-decoration: none;
            font-family: 'Arial Black';
            font-style: italic;
            font-weight: 400;
            font-size: 20px;
            line-height: 80px;
            transition: 0.4s;
            color: #FFFFFF;
        }
        
        .login:hover {
            color: #FFB800;
            /* text-decoration: underline; */
            cursor: pointer;
        }

        .guest {
            position: absolute;
            width: 110px;
            height: 80px;
            left: 1160px;
            top: 15px;
            text-decoration: none;
            font-family: 'Arial Black';
            font-style: italic;
            font-weight: 400;
            font-size: 20px;
            line-height: 80px;
            transition: 0.4s;
            color: #FFFFFF;
        }

        .guest:hover {
            color: #FFB800;
            /* text-decoration: underline; */
            cursor: pointer;
        }
    </style>
</head>
<body>
    <img src="{{ asset('img/Pink_Typography_Swash_Letter_NO_Logo-removebg-preview (1) 3.png') }}" alt="">
    <div class="text">
        <div class="login"><a href="/login" style="text-decoration: none; color: inherit;">LOGIN</a></div>
        <div class="guest"><a href="/home" style="text-decoration: none; color:inherit;">GUEST</a></div>
    </div>
</body>
</html>