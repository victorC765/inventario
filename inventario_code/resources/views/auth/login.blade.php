<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div>
        <form action="{{ route('login.verify') }}" method="post"
            class="bg-stone-900 ring-4 ring-orange-500 p-14 rounded-md block mx-auto w-1/4 justify-center mt-10">
            @csrf
            <h1 class="text-2xl text-center font-bold mb-4 text-orange-400">Login</h1>
            <div class="mb-4">
                <label for="email" class="text-gray-300">Email:</label>
                <input type="text" name="email" placeholder="Email" class="bg-neutral-950 text-gray-50 p-2 w-full rounded-md">
                @error('email')
                    <small class="text-red-500">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="text-gray-300">Password:</label>
                <input type="password" name="password" placeholder="Password"
                    class="bg-neutral-950 text-gray-50 p-2 w-full rounded-md">
                @error('password')
                    <small class="text-red-500">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>
            <div class="mb-4 text-center text-gray-300">
                <a href="/auth/register">registrarse</a>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-orange-600 p-5 w-full rounded-md">Login</button>
            </div>
        </form>
        @if (session('success'))
            <div class="bg-green-500 p-5 w-full rounded-md text-center">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="bg-red-500 p-5 w-full rounded-md text-center">
                {{ session('error') }}
            </div>
        @endif
    </div>
</body>

</html>
