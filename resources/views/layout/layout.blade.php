<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    {{-- yield is where the page's content is stored
    remove this comment later --}}
    @yield('content')
</body>
</html>
