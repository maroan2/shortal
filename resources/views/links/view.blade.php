@php
    $short_url = request()->getSchemeAndHttpHost(). "/$link->short_url";
@endphp
    <!doctype html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>URL Shortal</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
</head>
<body class="p-5 bg-white dark:bg-gray-900 antialiased flex justify-between flex-col h-screen text-white">
<section class="text-center max-w-md w-full mx-auto space-y-3">
    <div class="bg-gray-800 rounded-md p-3 text-lg">
        Your Shortal URL is:
        <a href="{{ $short_url }}"
           class="underline block text-base bg-gray-900 rounded-md p-2" target="__blank">
            {{ $short_url }}
        </a>
    </div>
    <div class="bg-gray-800 rounded-md p-3 text-lg">
        The Base URL Is:
        <a href="{{ $link->url }}"
           class="underline block text-base bg-gray-900 rounded-md p-2" target="__blank">
            {{ $link->url }}
        </a>
    </div>
</section>

<footer class="text-gray-300 text-center">
    Made By <a class="text-blue-500" href="https://www.linkedin.com/in/marwan-zayed-394a58294/" target="_blank">Marwan
        Zayed</a>
</footer>

</body>
</html>
