<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Resource</title>
    
    @vite('resources/css/app.css')

</head>
<body class = "text-center px8 py-12">
  @if (session('success'))
    <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
        {{ session('success') }}
    </div>
  @endif
    <header>
    <nav>
    <h1>List of information</h1>
    <a href="{{ route('Introduction.index') }}" class="btn mt-4 inline-block ">show List</a>
    <a href="{{ route('Introduction.create') }}" class="btn mt-4 inline-block">Create new information</a>
    </nav>
    </header>
    
    <main class="container">
    {{ $slot }}
    </main>

</body>
</html>