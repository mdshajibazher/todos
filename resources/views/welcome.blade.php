<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title a{
                font-size: 50px;
                color: #636b6f;
                text-decoration: none;
                border: 2px solid #ddd;
                padding: 10px;
                display: block;
                border-radius: 5px;
                -webkit-transition: .4s  ease;
                -o-transition: .4s  ease;
                transition: .4s  ease;

            }
            .title a img{
                vertical-align: middle;

            }
            .title a:hover{
                background: #636b6f;
                color: #fff;
                -webkit-transform: scale(1.1);
                -ms-transform: scale(1.1);
                -o-transform: scale(1.1);
                transform: scale(1.1);

            }
            .m-b-md {
                margin-bottom: 30px;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    <a href="todos"><img width="60" src="{{asset('public/todos.png')}}" alt="">Enter Todos</a>
                </div>
            </div>
        </div>
    </body>
</html>
