<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tonys tutorial</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-100 dark:bg-slate-800">
   <x-navbar />
   <div class="max-w-6xl mx-auto">
        {{ $slot }}
   </div>
</body>
</html>