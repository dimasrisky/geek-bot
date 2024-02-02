@extends('fragments.initial-structure')
@section('content')
<div>
    @include('fragments.navbar')
    <div class="w-full bg-white text-slate-700 px-[5rem] py-[2rem]">
        <h1 class="text-[5rem] font-semibold">Welcome To Geek Bot!</h1>
        <p class="text-[1.5rem]">Check Out our latest product that might be what you need for your next project in our gallery </p>
    </div>
</div>
<div class="w-screen h-full bg-[url('/assets/img/bg.jpg')]">
    <form action="" method="post" class="w-[90vw] px-5 bg-white mx-auto">
        <div>
            <h1 class="font-semibold text-[3rem]">Geek Bot Shop</h1>
            <div class="w-full flex flex-col gap-4 border-y-4 border-cyan-400 py-[1rem] h-[30rem] overflow-scroll">
                @foreach ($dataProduk as $index => $produk)
                {{-- card --}}
                <div class="bg-slate-200 flex justify-between p-[1rem]">
                    <div class="flex flex-col">
                        <h1 class="font-bold text-2xl">{{ $produk->id }} - {{ $produk->namaProduk }}</h1>
                        <p>{{ $produk->beratProduk }} (berat) / blue / {{ $produk->tanggalProduksi->format('Y-m-d') }}</p>
                    </div>
                    <div class="flex flex-col items-start text-xl font-semibold">
                        <h1 id="hargaSatuan-{{ $index }}">{{ $produk->hargaProduk }}</h1>
                        <p>{{ $produk->kategori->namaKategori }}</p>
                    </div>
                    <div class="flex flex-col">
                        <input type="number" name="quantity" id="quantity-{{ $index }}" class="border rounded-md text-black">
                        <p id="totalHarga-{{ $index }}">Rp 0</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="flex flex-col items-center py-7 border-b-4 border-cyan-400 w-full">
            <div class="flex justify-between items-center w-full">
                <div>
                    <h1 class="font-semibold text-3xl">Paket Pengiriman</h1>
                    <div class=" flex items-center gap-8 mt-4">
                        <h1 class="font-semibold text-md">Pilih Paket</h1>
                        <select name="opsi-kirim" id="opsi-kirim" class="border px-3">
                            @foreach ($dataKirim as $kirim)
                                <option value="{{ $kirim->hargaPaket }}">{{ $kirim->namaPaket }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <p class="font-semibold text-xl" id="harga-kirim">Rp 0</p>
            </div>
            <div class="w-full border-t-4 border-cyan-400 mt-[3rem] py-5">
                <h1 class="font-semibold text-xl text-right" id="total-akhir">Total : Rp 60000</h1>
            </div>
            @auth
                <button type="submit" class="px-6 py-1 bg-green-600 text-white text-xs rounded-md mt-[2rem]">Pesan</button>
            @endauth
        </div>
    </form>
</div>

<script>
    // Script untuk menampilkan metode pengiriman dan juga harganya
    let totalAkhirElement = document.getElementById('total-akhir')
    let totalAkhir = 0
    let metodeKirim = document.getElementById('opsi-kirim')
    let hargakirim = document.getElementById('harga-kirim')
    metodeKirim.addEventListener('change', () => {
        hargakirim.textContent = `Rp ${metodeKirim.value}`
        totalAkhir += parseInt(metodeKirim.value)
    })

    // script untuk mentotalkan quantity
    for (let i = 0; i < {{ $dataProduk->count() }}; i++) {
        let hargaSatuan = document.getElementById(`hargaSatuan-${i}`).textContent
        let quantity = document.getElementById(`quantity-${i}`)
        let totalHarga = document.getElementById(`totalHarga-${i}`)
        quantity.addEventListener('change', () => {
          totalHarga.textContent = `Rp ${parseInt(hargaSatuan) * quantity.value}`
          totalAkhir += parseInt(hargaSatuan) * quantity.value
        })
    }

    setInterval(() => {
        totalAkhirElement.textContent = `Total Akhir : Rp ${totalAkhir}`
    }, 1);
</script>
@endsection