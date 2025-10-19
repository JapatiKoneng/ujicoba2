<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-md bg-white p-8 rounded shadow">
    <h1 class="text-2xl mb-6 font-bold text-center">Register</h1>

    @if ($errors->any())
      <div class="mb-4 text-red-600">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('register.post') }}">
      @csrf

      <label class="block mb-2">Name</label>
      <input type="text" name="name" value="{{ old('name') }}" required class="w-full border px-3 py-2 mb-4 rounded">

      <label class="block mb-2">Email</label>
      <input type="email" name="email" value="{{ old('email') }}" required class="w-full border px-3 py-2 mb-4 rounded">

      <label class="block mb-2">Password</label>
      <input type="password" name="password" required class="w-full border px-3 py-2 mb-4 rounded">

      <label class="block mb-2">Confirm Password</label>
      <input type="password" name="password_confirmation" required class="w-full border px-3 py-2 mb-4 rounded">

      <button type="submit" class="w-full bg-green-600 text-white py-2 rounded mt-2">Register</button>
    </form>

    <p class="mt-4 text-sm text-gray-600 text-center">
      Already have an account? <a href="{{ route('login') }}" class="text-blue-600">Login</a>
    </p>
  </div>
</body>
</html>
