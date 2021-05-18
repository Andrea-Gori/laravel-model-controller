<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <main>
            <div class="container">
        @foreach($movies as $boh)
                <div class="card">
                    <img src="https://teeserdev.s3.amazonaws.com/snap_TommyVI_1473103882003.png" alt="">
                    <p class="title">{{ $boh->title }}</p>
                    <p class="original-title">{{ $boh->original_title }}</p>
                    <p class="nationality">{{ $boh->nationality }}</p>
                    <p class="vote">{{ $boh->vote }}</p>
                </div>
            @endforeach
            </div>
        </main>
    </body>
</html>
