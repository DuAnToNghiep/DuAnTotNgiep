<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angular App</title>
    <base href="/">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <app-root></app-root>
    <script src="{{ mix('js/runtime.js') }}"></script>
    <script src="{{ mix('js/polyfills.js') }}"></script>
    <script src="{{ mix('js/styles.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/main.js') }}"></script>
</body>
</html>
