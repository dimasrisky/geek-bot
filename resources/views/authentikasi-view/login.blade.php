@extends('fragments.initial-structure')
@section('content')
@include('fragments.navbar')
<div class="w-screen h-screen flex justify-center items-center bg-[url('/assets/img/bg.jpg')] bg-center bg-cover">
    <form action="{{ route('login-handle') }}" method="post" class="w-[25rem] mx-auto flex flex-col justify-center items-center gap-5 text-center p-[2rem] bg-blue-900 text-white border-[0.8rem] border-blue-200 rounded-2xl">
        @csrf
        <h1 class="font-bold text-[2rem]">Login</h1>
        <img src="/assets/icons/profile.svg" alt="profile" class="w-[10rem]">
        <div class="flex flex-col">
            <label for="email">Email</label>
            <input type="text" name="email" class="border" required>
        </div>
        <div class="flex flex-col">
            <label for="email">Pssword</label>
            <input type="password" name="password" class="border" required>
        </div>
        <button type="submit" class="px-10 py-2 bg-blue-400 rounded-full">Login</button>
    </form>
</div>
@endsection