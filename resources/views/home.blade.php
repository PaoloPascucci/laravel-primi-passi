<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi passi</title>
    <style>
    .content {
        text-align: center
    }

    span {
        font-size: 30px;
        vertical-align: sub
    }
    </style>
</head>

<body>
    <div class="content">
        <nav>
            <a href="/shop">Spotlight</a>
        </nav>
        <div class="title">
            <h1>
                {{ $name }} {{$number}}
            </h1>
        </div>

        @if(count($champions) > 0)

        @foreach( $champions as $champion )
        <span>{{ $champion }}</span>
        @if(!$loop->last)
        -
        @endif
        @endforeach

        @else
        <p>No Champion here</p>
        @endif
    </div>
</body>

</html>