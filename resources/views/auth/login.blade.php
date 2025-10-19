<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-md bg-white p-8 rounded shadow">
    <h1 class="text-2xl mb-6">Login</h1>

    @if($errors->any())
      <div class="mb-4 text-red-600">
        <ul>
          @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('login.post') }}">
      @csrf

      <label class="block mb-2">Email</label>
      <input type="email" name="email" value="{{ old('email') }}" required autofocus
             class="w-full border px-3 py-2 mb-4 rounded" />

      <label class="block mb-2">Password</label>
      <input type="password" name="password" required
             class="w-full border px-3 py-2 mb-4 rounded" />

      <div class="mb-4 flex items-center">
        <input type="checkbox" name="remember" id="remember" class="mr-2">
        <label for="remember">Remember me</label>
      </div>

      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded">Login</button>
    </form>

    <p class="mt-4 text-sm text-gray-600">
      Don't have an account? <a href="/register" class="text-blue-600">Register</a>
    </p>
  </div>
</body>
</html>
