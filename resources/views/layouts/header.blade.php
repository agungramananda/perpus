<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inder&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inder&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="bg-gray-100 fixed w-full fixed top-0 z-50 shadow-xl">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="" class="flex items-center text-[18px] space-x-1">
                <span class="text-[#1CB3E3]">SISTEM PELAYANAN </span><span class="text-[#B34AF4]">PUBLIK</span>
            </a>
            <ul class="gap-[20px] text-[16px] md:flex font-['Inder']">
                <li>
                    <a href="/home" class="inline-block rounded hover:border-gray-200 hover:text-sky-500 hover:bg-gray-200 py-1 px-3">Beranda</a>
                </li>
                <li>
                    <a href="" class="inline-block rounded hover:border-gray-200 hover:text-sky-500 hover:bg-gray-200 py-1 px-3">Profil</a>
                </li>
                <li>
                    <a href="/booksList" class="inline-block rounded hover:border-gray-200 hover:text-sky-500 hover:bg-gray-200 py-1 px-3">Daftar Buku</a>
                </li>
                <li>
                    <a href="/search" class="inline-block rounded hover:border-gray-200 hover:text-sky-500 hover:bg-gray-200 py-1 px-3">Cari Buku</a>
                </li>
                <li>
                    <a href="" class="inline-block rounded hover:border-gray-200 hover:text-sky-500 hover:bg-gray-200 py-1 px-3">Peminjaman</a>
                </li>
                <li>
                    <a href="" class="inline-block rounded hover:border-gray-200 hover:text-sky-500 hover:bg-gray-200 py-1 px-3">Pengembalian</a>
                </li>
                <li>
                    <form action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button class="inline-block rounded hover:border-gray-200 hover:text-sky-500 hover:bg-gray-200 py-1 px-3" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>