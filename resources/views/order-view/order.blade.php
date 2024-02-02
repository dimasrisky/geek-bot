@extends('fragments.initial-structure')
@section('content')
@include('fragments.navbar')
<div class="w-screen h-screen flex justify-center items-center">
    <form action="" method="POST">
        @csrf
        <h1>Order Anda</h1>
        <div>
            <label for=""></label>
        </div>
    </form>
</div>
@endsection