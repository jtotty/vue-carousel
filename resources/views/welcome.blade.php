<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <h1>Carousel</h1>
        <div id="app">
            <carousel :autoplay="true" :wraparound="true">
                <img src="http://placeimg.com/640/480/arch">
                <img src="http://placeimg.com/640/480/arch?2">
                <img src="http://placeimg.com/640/480/arch?3">
                <img src="http://placeimg.com/640/480/arch?4">
                <img src="http://placeimg.com/640/480/arch?5">
            </carousel>
        </div>

        <h1>Tooltips</h1>
        <div id="tooltips">
            <h2>Option #1</h2>
            <p>Hello there, <span data-tooltip="I am a tooltip!" data-tooltipPlacement="right">hover over me</span>.</p>

            <h2>Option #2</h2>
            <p>Hello there, <span v-tooltip:top="'Vue tooltip wow!'">hover over me</span>.</p>

            <h2>Option #3</h2>
            <p>Hello there, <span data-tooltip-name="our-products-tooltip">learn about our products.</span>.</p>

            <tooltip name="our-products-tooltip">
                <h1>Our Products</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum assumenda a nam voluptas maiores voluptatem consequatur repellendus perferendis ut quam. Consequatur, esse? Eius necessitatibus sunt repellat quos fugit praesentium eum?</p>
            </tooltip>
        </div>

        <!-- Flickity Library JS -->
        <script src="/js/app.js"></script>
    </body>
</html>
