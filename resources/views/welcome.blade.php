<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Calculator</title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Helvetica neue;
        }

        a {
            text-decoration: none;
        }
        
        .container {
            width: 100vw;
            height: 100vh;
            background-color: rgb(41,41,55);
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            align-items: center;
        }
        
        .operacao {
            min-width: 45%;
            height: 300px;
            background-color: rgb(25,26,34);
            margin-bottom: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(1,185,83);
            cursor: pointer; 
        }
    </style>
    
    </head>
    <body>
        <div class="container">
            <a href="{{ url('soma') }}" class="operacao">
                <span>SOMA</span>
            </a>
            <a href="{{ url('subtracao') }}" class="operacao">
                <span>SUBTRAÇÃO</span>
            </a>
            <a href="{{ url('divisao') }}" class="operacao">
                <span>DIVISÃO</span>
            </a>
            <a href="{{ url('multiplicacao') }}" class="operacao">
                <span>MULTIPLICAÇÃO</span>
            </a>
        </div>
    </body>
</html>
