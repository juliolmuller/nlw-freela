<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ $title ?? config('app.name', default: 'Freela') }}</title>

        <style>
            *,
            *::before,
            *::after {
                box-sizing: border-box;
                padding: 0;
                margin: 0;

                font-family: sans-serif;
            }

            body {
                padding: 32px;
            }

            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 32px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            {{ $slot }}
        </div>
    </body>

</html>
