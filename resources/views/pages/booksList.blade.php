@extends('layouts.main')

@section('title', 'Daftar Buku')

@section('content')
<section class="py-16">
    <div class="mt-50 p-6">
        <h1 class="text-3xl font-bold mb-2">DAFTAR BUKU</h1>
        <div class="flex row-auto flex-col items-center">
            <div class="grid grid-cols-5 gap-5">
                @foreach ($books as $items)
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
                @endforeach
            </div>    
        </div>
    </div>
</section>
@endsection