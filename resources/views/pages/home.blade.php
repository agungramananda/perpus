@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
<section>
    <div class="w-full bg-center bg-cover bg-no-repeat" style="background-image: url('images/bg.jpg'); height: 300px;">
        <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50 py-12">
            <p class="text-center text-white text-4xl font-semibold">
                Selamat Datang di Sistem Pelayanan Perpustakaan SMAN 2 Kuta
            </p>
        </div>
    </div>
</section>
<section>
    <div class="mt-2 p-6">
        <h2 class="text-xl font-semibold mb-2">Daftar Buku</h2>
        <p class="text-gray-600">Temukan berbagai buku menarik yang tersedia di perpustakaan kami.</p>
        <div class="flex flex-col items-center">
            <div class="grid grid-cols-5 gap-5">
                @php
                    $count = 0
                @endphp
                @foreach ($books as $items)
                    @php
                        $count++
                    @endphp
                    <div class="max-w-sm mt-5 bg-white border border-gray-200 rounded-lg shadow">
                        @if($items->cover==null)
                            <img class="mx-auto mt-5 block rounded-t-lg" src="/images/cover_not_found.jpeg" alt="" />
                        @else
                        <img class="mx-auto mt-5 block rounded-t-lg" src="{{$items->cover}}" alt="" />
                        @endif
                        <div class="p-5">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">{{$items->title}}</h5>
                            <span class="mb-3 font-normal text-gray-700">{{$items->book_code}}</span>
                            <p class="mb-3 font-normal text-gray-700">{{$items->slug}}</p>
                            @if($items->status=='Tersedia')
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-sky-600 rounded-lg hover:bg-sky-400">
                                    Pinjam
                                </a>
                                <p class="text-end text-gray-300 text-sm">Tersedia</p>
                            @else
                            <p class="text-end text-gray-300 text-sm">Tidak Tersedia</p>
                            @endif
                        </div>
                    </div>
                    @if($count==5)
                        @break
                    @endif
                @endforeach
            </div>    
        </div>
        <a href="/booksList" class="mt-4 inline-block bg-sky-600 hover:bg-sky-400 text-white font-semibold px-4 py-2 rounded">Lihat Daftar Buku</a>
    </div>
</section>
<section>
    <div class="container mx-auto mb-4 p-6">
        <h2 class="text-xl font-semibold mb-2">Layanan</h2>
        <p class="text-gray-600">Berikut Layanan yang Kami Sediakan</p>
        <div class="flex flex-col items-center mt-5 rounded shadow-lg">
            <div class="grid grid-cols-3 gap-[250px]">
                <div class="p-4">
                    <a href="/search">
                        <img src="images/search-book.png" class="h-48 w-48 object-cover" alt="Cari">
                        <h2 class="mt-4 text-lg font-semibold text-center">Cari Buku</h2>
                    </a>
                </div>
                <div class="p-4">
                    <img src="images/image 3.jpg" class="h-48 w-48 object-cover" alt="Pinjam">
                    <h2 class="mt-4 text-lg font-semibold text-center">Pinjam</h2>
                </div>
                <div class="p-4">
                    <img src="images/return_book.svg" class="h-48 w-48 object-cover" alt="Pengembalian">
                    <h2 class="mt-4 text-lg font-semibold text-center">Pengembalian</h2>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection