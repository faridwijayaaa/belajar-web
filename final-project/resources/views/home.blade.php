<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('/ui-cards/dist/style.css') }}">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <html class="no-js" lang="en-GB">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description"
            content="An example pen showing how a basic CSS Grid container can create a nice, responsive card layout.">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>CSS Grid Cards</title>
    </head>

    </html>
    @yield('content')


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
