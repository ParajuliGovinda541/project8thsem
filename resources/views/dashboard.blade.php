<x-app-layout>


@section('content')
<div class="mt-10">
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-10 px-10">
        <div class="bg-slate-500  px-10 py-5 rounded-md text-center flex justify-between cursor-pointer ">
            <h1 class="text-2xl">Users</h1>
            <p class="text-4xl"></p>
        </div>
        {{-- <div class="shadow-lg cursor-pointer bg-red-600 px-10 py-5 rounded-md flex justify-between">
            <a href="{{route('send.mail')}}">SendMail</a>

        </div> --}}
        <div class="bg-slate-500  px-10 py-5 rounded-md text-center flex justify-between cursor-pointer ">
            <h1 class="text-2xl">Category</h1>
            <p class="text-4xl"></p>
        </div>
        <div class="bg-slate-500  px-10 py-5 rounded-md text-center flex justify-between cursor-pointer ">
            <h1 class="text-2xl">Brands</h1>
            <p class="text-4xl"></p>
        </div>
        <div class="bg-slate-500  px-10 py-5 rounded-md text-center flex justify-between cursor-pointer ">
            <h1 class="text-2xl">Products</h1>
            <p class="text-4xl"></p>
        </div>
        <div class="bg-slate-500  px-10 py-5 rounded-md text-center flex justify-between cursor-pointer ">
            <h1 class="text-2xl">Order</h1>
            <p class="text-4xl">10</p>
        </div>
        <div class="bg-slate-500  px-10 py-5 rounded-md text-center flex justify-between cursor-pointer ">
            <h1 class="text-2xl">User</h1>
            <p class="text-4xl">10</p>
        </div>
        <div class="bg-slate-500  px-10 py-5 rounded-md text-center flex justify-between cursor-pointer ">
            <h1 class="text-2xl">Gallery</h1>
            <p class="text-4xl">10</p>
        </div>

    </div>
@endsection
</x-app-layout>
