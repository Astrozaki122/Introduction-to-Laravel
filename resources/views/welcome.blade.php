<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Application</title>
    @vite('resources/css/app.css')
</head>
<body class = "text-center px8 py-12">
    <h1> Welcome to My Application</h1>
    <p>Click here to find out more about the website.</p>
    <a href="/Introduction" class="btn mt-4 inline-block">
    continue</a>
</body>
</html>