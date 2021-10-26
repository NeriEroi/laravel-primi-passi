<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            body {
                font-family: monospace;
                background-color: palegreen;
            }

            header h1 {
                text-align: center;
                padding: 20px;
                color: green;
                font-size: 100px;
                margin-bottom: 100px;
            }

            header ul {
                text-align: center;
            }

            header ul li a {
                border: 5px solid green;
                padding: 30px;
                margin: 30px;
                text-decoration: none;
                color: blue;
                font-size: 50px;
                background-color: lightyellow;
            }
            
        </style>
    </head>
    <body>
        
        <header>
            <h1>
                Home
            </h1>
            <ul>
                <li>
                    <a href="/about_us">ABOUT US</a>
                    <a href="/shop">SHOP</a>
                    <a href="/contacts">CONTACTS</a>
                </li>
            </ul>
        </header>
            
    </body>
</html>
