<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="robots" content="noindex,nofollow"/>
    <title>{{ $title ? 'MyBlog - ' . $title : 'MyBlog' }}</title>
    @vite(['resources/js/app.js'])
</head>
