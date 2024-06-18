<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black text-white flex justify-center items-center min-h-screen">
    <div class="bg-white text-black p-8 shadow-lg rounded-lg max-w-md w-full">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
        <form id="login-form" action="/login" method="POST">
            @csrf
            <div class="mb-4">
                <label for="login-email" class="block text-sm font-medium mb-2">Email</label>
                <input type="email" id="login-email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="login-password" class="block text-sm font-medium mb-2">Password</label>
                <input type="password" id="login-password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit" class="w-full bg-black text-white py-2 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">Login</button>
            </div>
        </form>
        <div class="text-center mt-4">
            <p>Don't have an account? <a href="/register" class="text-black hover:underline">Register here</a></p>
        </div>
    </div>
</body>
</html>
