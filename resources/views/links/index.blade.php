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
<form class="max-w-md w-full mx-auto mt-20" action="/" method="POST">
    @csrf
    <div class="relative z-0 w-full group">
        <input type="text" name="url" id="url"
               class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
               placeholder=" " required autocomplete="off"
               value="{{ old('url') }}"
        />
        <label for="url"
               class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
            Your URL
        </label>
    </div>
    @error('url')
    <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror

    <button type="submit"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Submit
    </button>
</form>

<footer class="text-gray-300 text-center p-5">
    Made By <a class="text-blue-500" href="https://www.linkedin.com/in/marwan-zayed-394a58294/" target="_blank">Marwan
        Zayed</a>
</footer>
</body>
</html>
