<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="for nnovation Division of EIC ">

    <title>ASTU-EIC WEB-DEVELOPMENT WORKSHOP</title>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-67918939-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-67918939-5');
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Source Sans Pro:400,600']
            }
        });
    </script>

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
</head>

<body>

    <div id="app"></div>

    @routes
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
