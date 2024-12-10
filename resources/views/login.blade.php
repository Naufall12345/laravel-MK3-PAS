<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <!-- Tambahkan Tailwind CSS dari CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-blue-400 flex items-center justify-center min-h-screen">

        <!-- Form Login -->
        <form id="loginForm" class="bg-white p-8 rounded-lg shadow-md w-96">
            <div class="mb-4">
                <label for="username" class="block text-gray-700 font-bold mb-2">Username : </label>
                <input type="text" name="username" id="username" class="w-full px-4 py-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password : </label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:border-blue-500">
            </div>
          
            <div>
                <button type="submit" class="w-full p-2 bg-blue-300 text-white font-bold rounded-md hover:bg-blue-400 transition duration-300">LOGIN</button>
            </div>
            <div class="mt-4">
                <button type="button" onclick="window.location.href='{{ route('index') }}'" class="w-full p-2 bg-blue-300 text-white font-bold rounded-md hover:bg-blue-400 transition duration-300">BACK</button>
            </div>
        </form>

        <script src="JS/script.js"></script>
    </body>
</html>