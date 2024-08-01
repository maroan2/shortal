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
<body class="bg-white dark:bg-gray-900 antialiased flex justify-between flex-col h-screen">
{{ $slot }}

<footer class="text-gray-300 text-center p-5">
    Made By <a class="text-blue-500" href="https://www.linkedin.com/in/marwan-zayed-394a58294/" target="_blank">Marwan
        Zayed</a>
</footer>
</body>
</html>
