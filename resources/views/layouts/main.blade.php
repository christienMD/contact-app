<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body class="bg-gray-100">
  <nav class="bg-white h-14 flex items-center">
    <div class="flex justify-between items-center container mx-auto">
    <div class="flex gap-3 items-center">
        <h1 class="uppercase text-red-500 font-bold text-xl">ContactApp</h1>
        <ul class="flex items-center gap-2 text-gray-500">
            <li><a href="#">Companies</a></li>
            <li><a href="#">Contacts</a></li>
        </ul>
    </div>
  <div class="flex items-center gap-2 text-gray-500">
    <button class="text-gray-500 px-3 py-1 rounded-md border border-gray-500">Login</button>
    <button class="text-blue-500 px-3 py-1 rounded-md border border-blue-500">Register</button>
    <div><span class="capitalize">md christien</span></div>
  </div>
    </div>
  </nav>
</body>
</html>