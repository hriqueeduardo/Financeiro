<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite(['resources/css/dashboard.css', 'resources/css/layout.css', 'resources/sass/app.scss', 'resources/js/app.js', 'resources/js/dashboard.js'])
    <title>{{ $title }}</title>
</head>

<body>

{{ $slot }}

</body>

</html>