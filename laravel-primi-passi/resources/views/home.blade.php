<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            .hello {
                text-align: center;
            }
            .hello h1 {
                color: green;
            }
        </style>
    </head>
    <body>
        <div class="hello">
            <h1>
                HELLO WORLD!
            </h1>
        </div>
    </body>
</html>
