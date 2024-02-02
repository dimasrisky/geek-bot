@extends('fragments.initial-structure')
@section('content')
@include('fragments.navbar')
    <div class="w-scren h-full bg-[url('/assets/img/bg.jpg')] bg-center bg-cover py-[3rem]">
        <div class="w-[90%] mx-auto bg-white rounded-md p-5">
            <h1 class="text-center font-bold text-[2rem]">Edit Produk</h1>
            <form action="{{ route('produk.update', ['idProduk' => $dataProduk->id]) }}" method="post" class="py-6 px-4 flex flex-col gap-4">
                @csrf
                @method('PUT')
                <div class="flex flex-col gap-1">
                    <label for="namaProduk" class="font-semibold">Nama Produk</label>
                    <input type="text" name="namaProduk" id="namaProduk" placeholder="Nama Produk..." class="p-2 rounded-md border-2 border-black" value="{{ $dataProduk->namaProduk }}" required>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="beratProduk" class="font-semibold">Berat Produk</label>
                    <input type="number" name="beratProduk" id="beratProduk" placeholder="Berat Produk..." class="p-2 rounded-md border-2 border-black" value="{{ $dataProduk->beratProduk }}" required>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="tanggalProduksi" class="font-semibold">Tanggal Produksi</label>
                    <input type="date" name="tanggalProduksi" id="tanggalProduksi" placeholder="Tanggal Produksi" class="p-2 rounded-md border-2 border-black" required>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="hargaProduk" class="font-semibold">Harga Produk</label>
                    <input type="number" name="hargaProduk" id="hargaProduk" placeholder="Harga Produk" class="p-2 rounded-md border-2 border-black" value="{{ $dataProduk->hargaProduk }}" required>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="kategoriProduk" class="font-semibold">Kategori Produk</label>
                    <select name="kategoriProduk" id="kategoriProduk" class="border-2 border-black rounded-md p-2">
                        <option value="{{ $dataProduk->kategori_id }}">{{ $dataProduk->kategori->namaKategori }}</option>
                        @foreach ($daftarKategori as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->namaKategori }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="py-3 bg-blue-800 rounded-lg text-white text-xs w-[15%]">Masukkan Produk !</button>
            </form>
        </div>
    </div>
@endsection