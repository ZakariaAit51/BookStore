<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="/src/style.css">
    @viteReactRefresh
    @vite(['resources/js/app.jsx','resources/css/app.css'])
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>