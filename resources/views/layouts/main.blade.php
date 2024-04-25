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
    {{-- navbar --}}
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
    <div class="flex item-center me-6">
        <span class="capitalize">md christien</span>
        <div class="dropdown">
            <div tabindex="0" role="button" class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Settings</a></li>
                <li><a>Logout</a></li>
            </ul>
        </div>
    </div>
  </div>
    </div>
  </nav>
</body>
</html>