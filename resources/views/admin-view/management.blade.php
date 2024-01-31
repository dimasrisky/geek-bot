@extends('fragments.initial-structure')
@section('content')
    @include('fragments.navbar')
    <div class="w-screen h-full bg-[url('/assets/img/bg.jpg')] bg-cover bg-center">
        <div class="w-[90%] mx-auto bg-white px-[2rem] py-[3rem] overflow-scroll">
            {{-- Manajemen Produk --}}
            <div>
                <h1 class="text-4xl font-semibold mb-6">Product</h1>
                <a href="{{ route('produk.create') }}" class="px-10 py-2 bg-blue-500 text-white rounded-md">Add Product</a>
                <table cellpadding="15" class="mt-6 w-full">
                    <thead>
                        <tr class="text-left">
                            <th>id</th>
                            <th>Nama</th>
                            <th>Berat</th>
                            <th>Tanggal Produksi</th>
                            <th>Harga Produk</th>
                            <th>Kategori</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataProduk as $produk)
                        <tr class="border-t-2 border-black text-left">
                            <td>{{ $produk->id }}</td>
                            <td>{{ $produk->namaProduk }}</td>
                            <td>{{ $produk->beratProduk }}</td>
                            <td>{{ $produk->tanggalProduksi->format('Y-m-d') }}</td>
                            <td>Rp{{ $produk->hargaProduk }}</td>
                            <td>{{ $produk->kategori->namaKategori }}</td>
                            <td class="flex items-center gap-4">
                                <a href="{{ route('produk.edit', ['idProduk' => $produk->id]) }}" class="px-5 py-2 rounded-md bg-green-600 text-xs text-white">Edit</a>
                                <form action="{{ route('produk.destroy', ['idProduk' => $produk->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-5 py-2 rounded-md bg-red-600 text-xs text-white">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            {{-- daftar Kategori --}}
            <div class="mt-[3rem]">
                <h1 class="text-4xl font-semibold mb-6">Category</h1>
                <a href="{{ route('kategori.create') }}" class="px-10 py-2 bg-blue-500 text-white rounded-md">Add Category</a>
                <div class="w-full mt-6">
                    @foreach ($daftarKategori as $kategori)
                    <div class="w-[60%] flex justify-between items-center border-t border-black py-4 px-8">
                        <h1 class="font-semibold text-xl">{{ $kategori->namaKategori }}</h1>
                        <form action="{{ route('kategori.destroy', ['idKategori' => $kategori->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-5 py-2 rounded-md bg-red-600 text-xs text-white">Hapus</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection