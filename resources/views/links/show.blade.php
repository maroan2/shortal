<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="og:url" content="{{ $longUrl }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{ $title }}"/>
    <meta property="og:description" content="{{ $description }}"/>
    <meta property="og:image" content="{{ $image }}"/>

    <title>{{ $title }}</title>
</head>
<body>
{{redirect($longUrl)}}
</body>
</html>
