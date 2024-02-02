@extends('fragments.initial-structure')
@section('content')
@include('fragments.navbar')
    <div class="w-scren h-full bg-[url('/assets/img/bg.jpg')] bg-center bg-cover py-[3rem]">
        <div class="w-[90%] mx-auto bg-white rounded-md p-5">
            <h1 class="text-center font-bold text-[2rem]">Tambah Kategori</h1>
            <form action="{{ route('kategori.store') }}" method="post" class="py-6 px-4 flex flex-col gap-4">
                @csrf
                @method('POST')
                <div class="flex flex-col gap-1">
                    <label for="namaKategori" class="font-semibold">Nama Kategori</label>
                    <input type="text" name="namaKategori" id="namaKategori" placeholder="Nama Kategori..." class="p-2 rounded-md border-2 border-black" required>
                </div>
                <button type="submit" class="py-3 bg-blue-800 rounded-lg text-white text-xs w-[15%]">Masukkan Kategori !</button>
            </form>
        </div>
    </div>
@endsection