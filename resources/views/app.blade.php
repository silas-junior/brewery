<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <script src="https://unpkg.com/mitt/dist/mitt.umd.js"></script>
        <script src="{{ mix('/js/app.js') }}" defer></script>
        @routes
        <title>Breweries</title>
    </head>

    <body class="bg-gray-200 ">
{{--        <div class="px-10 mx-auto mt-20">@inertia</div>--}}
        <div class="lg:px-40 md:py-0 px-6 py-8">@inertia</div>
    </body>
</html>
