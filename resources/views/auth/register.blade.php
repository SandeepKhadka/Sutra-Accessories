<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Sutra Accessories | Register</title>
</head>

<body class="bg-gray-100 h-screen flex items-center">

    <div class="w-full max-w-screen-xl mx-auto flex justify-center items-center">
        <div class="w-full max-w-md lg:w-1/2">
            <div class="text-center lg:text-left mb-8">
                <h1 class="text-4xl font-bold text-blue-900">Sutra Accessories</h1>
            </div>
        </div>
        <div class="w-full max-w-md lg:w-1/2">
            <form method="POST" action="{{ route('register') }}"
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full">
                <h2 class="text-2xl mb-8 text-center text-blue-900 font-bold">Create Your Account</h2>

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <strong>Oh sorry!</strong> There were some issues with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @csrf

                <!-- Full Name input -->
                <div class="mb-6">
                    <input id="full_name" name="full_name" type="text" required
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="{{ __('Full Name') }}" />
                </div>

                <!-- User Name input -->
                <div class="mb-6">
                    <input id="username" name="username" type="text" required
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="{{ __('User Name') }}" />
                </div>

                <!-- Email input -->
                <div class="mb-6">
                    <input id="email" name="email" type="text" required
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="{{ __('Email Address') }}" />
                </div>

                <!-- Phone Number input -->
                <div class="mb-6">
                    <input id="phone" name="phone" type="number" required
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="{{ __('Phone Number') }}" />
                </div>

                <!-- Password input -->
                <div class="mb-6">
                    <input id="password" name="password" type="password" required
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="{{ __('Password') }}" />
                </div>

                <!-- Confirm Password input -->
                <div class="mb-6">
                    <input id="password-confirm" type="password" name="password_confirmation" required
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="{{ __('Confirm Password') }}" />
                </div>

                <!-- Gender input -->
                <div class="mb-6">
                    <select name="gender" id="gender"
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        <option value="" disabled selected class="text-gray-700 bg-white">--Select Gender--</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </div>

                <div class="text-center">
                    <button type='submit'
                        class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                        {{ __('Register') }}
                    </button>
                </div>

                <p class="text-sm mt-4 text-center">
                    Already Registered? <a href="{{ route('login') }}"
                        class="text-blue-600 hover:text-blue-800">Login here</a>
                </p>
            </form>
        </div>
    </div>

</body>

</html>
