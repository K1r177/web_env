<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
       {{--  @foreach($products->chunk(3) as $chunk)
            <div class="row">
                @foreach($chunk as $product)
                    <div class="col-md-4">{{ $product['title'] }}</div>
                @endforeach
            </div>
        @endforeach --}}
    </div>
    @foreach($posts as $post)
        {{ $post->title }} | {{ $post->isPublished() }}<br>
    @endforeach
    <hr>
    @foreach($posts2 as $post)
        {{ $post->title }}<br>
    @endforeach
    <hr>
    @foreach($posts3 as $post)
        {{ $post->title }}<br>
    @endforeach
    <hr>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
