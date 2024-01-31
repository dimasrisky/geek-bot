@extends('fragments.initial-structure')
@section('content')
@include('fragments.navbar')
<div class="w-screen h-full py-[3rem] flex justify-center items-center bg-[url('/assets/img/bg.jpg')] bg-center bg-cover">
    <form action="{{ route('register-handle') }}" method="post" class="w-[25rem] mx-auto flex flex-col justify-center items-center gap-5 text-center p-[2rem] bg-blue-900 text-white border-[0.8rem] border-blue-200 rounded-2xl">
        @csrf
        <h1 class="font-bold text-[2rem]">Register</h1>
        <img src="/assets/icons/profile.svg" alt="profile" class="w-[10rem]">
        <div class="flex flex-col">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="border text-black" required>
        </div>
        <div class="flex flex-col">
            <label for="email">Email</label>
            <input type="text" name="email" class="border text-black" required>
        </div>
        <div class="flex flex-col">
            <label for="password">Password</label>
            <input type="password" name="password" class="border text-black" required>
        </div>
        <div class="flex flex-col">
            <label for="noHp">No Hp</label>
            <input type="text" name="noHp" class="border text-black" required>
        </div>
        <div class="flex flex-col">
            <label for="alamat">Alamat Rumah</label>
            <input type="text" name="alamat" class="border text-black" required>
        </div>
        <button type="submit" class="px-10 py-2 bg-blue-400 rounded-full">Register</button>
    </form>
</div>
@endsection