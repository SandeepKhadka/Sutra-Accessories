<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sutra Accessories | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center">

    <div class="w-full max-w-screen-xl mx-auto flex justify-center items-center">
        <div class="w-1/2">
            <h1 class="text-5xl font-bold text-blue-900 mb-8">Sutra Accessories</h1>
        </div>
        <div class="w-1/2 flex justify-center items-center">
            <div class="w-full max-w-md">
                <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <h2 class="text-2xl mb-8 text-center text-blue-900 font-bold">Login</h2>

                    @if (session('success'))
                        <div class="bg-green-500 text-white font-bold rounded-lg px-4 py-3 mb-4">
                            {{ session('success') }}
                        </div>
                    @elseif (session('error'))
                        <div class="bg-red-500 text-white font-bold rounded-lg px-4 py-3 mb-4">
                            {{ session('error') }}
                        </div>
                    @endif

                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email Address
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="text" placeholder="Email Address" name="email" required>
                        @error('email')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <div class="relative">
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" type="password" placeholder="Password" name="password" required>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <input type="checkbox" onclick="togglePasswordVisibility()" class="form-checkbox h-5 w-5 text-gray-600">
                                <span class="ml-2 text-gray-700">Show Password</span>
                            </div>
                        </div>
                        @error('password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6 flex items-center">
                        <input type="checkbox" class="mr-2 leading-tight" id="remember" name="remember">
                        <label class="text-sm text-gray-700" for="remember">
                            Remember Me
                        </label>
                    </div>

                    <div class="flex items-center justify-center">
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Login
                        </button>
                    </div>

                    <p class="text-sm mt-4 text-center">
                        Forgot your password? <a href="{{ route('password.request') }}" class="text-blue-600 hover:text-blue-800">Reset it here</a>
                    </p>

                    <p class="text-sm mt-4 text-center">
                        Don't have an account? <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800">Register here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        }
    </script>

</body>

</html>
