<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 a href="{{ route ('index')}}" class="text-5xl p-5 font-bold underline bg-yellow-300 text-neutral-50 text-center ">
    About Me
  </h1>
  <div class="mt-4">
                <button type="button" onclick="window.location.href='{{ route('index') }}'" class="w-full p-2 bg-blue-300 text-white font-bold rounded-md hover:bg-blue-400 transition duration-300">BACK</button>
            </div>
</body>
</html>