<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
  <div class="max-w-2xl mx-auto mt-20 bg-white shadow p-6 rounded">
    <h1 class="text-2xl font-bold mb-4">Welcome to your Dashboard!</h1>
    <p class="text-gray-700 mb-6">
      Hello, {{ Auth::user()->name }} 👋 <br>
      Your email: {{ Auth::user()->email }}
    </p>

    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Logout</button>
    </form>
  </div>
</body>
</html>
