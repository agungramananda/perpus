<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="w-full bg-center bg-cover" style="background-image: url('/images/bookshelf-books-education-knowledge-study.jpg');">
  <div class="flex items-center justify-center w-full h-[50px] bg-gray-900 bg-opacity-50 py-12">
      <h1 class="text-center text-3xl text-white">
        SISTEM PERPUSTAKAAN
      </h1>
  </div>
</div>
<div class="py-10 flex items-center justify-center">
  <div class="bg-gray-100 rounded-lg shadow-xl w-96">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="text-center text-2xl font-bold tracking-tight text-gray-900">Login</h2>
      </div>
      @if (session('status'))
        <span class="alert alert-danger mt-3 text-sm font-semibold italic text-red-500">
          {{ session('message') }}
        </span>
      @endif
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-5" action="#" method="POST">
          @csrf
          <div>
            <label for="username" class="block text-sm font-medium text-gray-900">Username</label>
            <div class="mt-2">
              <input id="username" name="username" type="text" required class="block w-full rounded-md border-0 pl-5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300">
            </div>
          </div>
          <div>
            <div class="flex items-center">
              <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
            </div>
            <div class="mt-2">
              <input id="password" name="password" type="password" required class="block w-full rounded-md border-0 pl-5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300">
            </div>
          </div>
          <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-sky-600 px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-sky-300">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>