<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MULTIPLICAÇÃO</title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Helvetica neue;
        }
        body {
            background-color: #282837;
            position: relative;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
        }
        .container h1{
            color: rgb(1,226,100);
            margin-bottom: 20px;
        }
        .container form {
            background-color: #f8f8f8;
            width: 300px;
            height: auto;
            padding: 20px 0px 0px 0px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        form div input {
            height: 40px;
            width: 70px;
        }
        form div input:first-of-type {
            margin-right: 30px;
        }
        form input[type="submit"] {
            margin-top: 30px;
            width: 100%;
            border:0;
            background-color: rgb(1,226,100);
            color: #282837;
            padding: 10px;
            cursor: pointer;
            font-size: 20px;
        }
        .result {
            margin-top: 50px;
            color: rgb(1,226,100);
            font-size: 34px;
        }
        .links {
            position: absolute;
            bottom: 20px;
            left: 10px;
            display: flex;
            flex-direction: row;
        }
        .links a {
            background-color: rgb(1,226,100);
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            border-radius: 50%;
            text-decoration: none;
            font-size: 20px;
        }
    </style>
    
    </head>
    <body>
        <div class="container">
        <h1> MULTIPLICAÇÃO </h1>
            <form method="post" action="{{action('operacoes@multiplicacao')}}">
            {{ csrf_field() }}
                <div>
                    <input type="number" name="primeiroParametro">
                    <input type="number" name="segundoParametro">
                </div>
                <input type="submit" value="*">
            </form>
            <span class="result">
                {{  $resultado ?? ''}}
            </span>
        </div>
        <div class="links">
            <a href="{{ url('soma') }}">+</a>
            <a href="{{ url('subtracao') }}">-</a>
            <a href="{{ url('multiplicacao') }}">*</a>
            <a href="{{ url('divisao') }}">/</a>
        </div>
    </body>
</html>
