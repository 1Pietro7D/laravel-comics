<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Laravel-comics</title>
</head>

{{-- css provvisorio --}}
@include('css.css-prov')

<body>
    @include('partials.header')
    @include('partials.main')
    @include('partials.footer')
</body>

</html>
