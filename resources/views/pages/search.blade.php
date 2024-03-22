@extends('layouts.main')

@section('title', 'Cari Buku')

@section('content')
<section class="py-16">
<div class="p-10">
    <form action="{{url('search')}}" method="get">
        @csrf
        <div class="grid grid-cols-4 gap-4">
            <div class="flex items-center">
                <label for="category" class="block mb-2 text-sm font-medium">Pilih Kategori</label>
                <select id="category" class="w-full px-4 py-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm">
                    <option selected>-</option>
                    @foreach($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>                            
                    @endforeach
                </select>
            </div>
            <div class="flex items-center">
                <input type="text" name="title" placeholder="Cari..." class="w-full px-4 py-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm">
                <button type="submit" class="ml-2 px-4 py-2 bg-sky-600 text-white rounded-sm hover:bg-sky-400">Cari</button>
            </div>
        </div>
    </form>
</div>
</section>
<section>
    <div class="p-6">
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