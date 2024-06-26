<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{asset('/images/logo.svg')}}" type="image/x-icon">

</head>
<body class="bg-black text-white">
<main class=" px-3 mx-auto max-w-[986px]">
    <x-nav/>
    {{$slot}}
</main>
</body>
</html>
