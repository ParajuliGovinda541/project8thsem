
@extends('layouts.master')
@section('title', 'Mero-Pasal')

@section('content')
    {{-- First Swiper --}}
    <div class="swiper mySwiper bg-gradient-to-bl from-slate-500 to-slate-700 ">
        <div class="swiper-wrapper">
            <div class="swiper-slide ">
                <div class="flex justify-between ">
                    <div class="w-1/2 pl-10 pt-10 text-justify">
                        <h2 class="text-3xl font-bold">
                            Enhance Your Productivity with Our Sleek, High-Performance Laptop
                        </h2>
                        <p class="mt-5">
                            &nbsp;&nbsp;&nbsp; "Discover our latest arrival, designed to elevate your computing experience.
                            Featuring cutting-edge technology,
                            exceptional performance, and a sleek design, this laptop is perfect for professionals, students,
                            and creatives.
                            Stay ahead of the curve with lightning-fast processing speeds, stunning visuals, and
                            long-lasting battery life.
                            Upgrade to the future of laptops today."
                        </p>
                        <div class="group relative ml-96 w-fit cursor-pointer ">
                            <p class="bg-green-500 w-fit px-5 py-2 rounded-md transition duration-500 group-hover:hidden">
                                Shop <span>Now</span>
                            </p>
                            <p
                                class="bg-yellow-500 w-fit px-5 py-2 rounded-md transition duration-500 hidden group-hover:block">
                                Price <span>45000</span>
                            </p>
                        </div>
                    </div>
                    <div>

                        <img src="{{ asset('images/landingpage.jpg') }}" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="swiper-slide ">
                <div class="flex justify-between ">
                    <div>

                        <img src="{{ asset('images/landingpage.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="w-1/2 pl-10 pt-10 text-justify">
                        <h2 class="text-3xl font-bold">
                            Enhance Your Productivity with Our Sleek, High-Performance Laptop
                        </h2>
                        <p class="mt-5">
                            &nbsp;&nbsp;&nbsp; "Discover our latest arrival, designed to elevate your computing experience.
                            Featuring cutting-edge technology,
                            exceptional performance, and a sleek design, this laptop is perfect for professionals, students,
                            and creatives.
                            Stay ahead of the curve with lightning-fast processing speeds, stunning visuals, and
                            long-lasting battery life.
                            Upgrade to the future of laptops today."
                        </p>
                        <div class="group relative ml-96 w-fit cursor-pointer ">
                            <p class="bg-green-500 w-fit px-5 py-2 rounded-md transition duration-500 group-hover:hidden">
                                Shop <span>Now</span>
                            </p>
                            <p
                                class="bg-yellow-500 w-fit px-5 py-2 rounded-md transition duration-500 hidden group-hover:block">
                                Price <span>45000</span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide ">
                <div class="flex justify-between ">
                    <div class="w-1/2 pl-10 pt-10 text-justify">
                        <h2 class="text-3xl font-bold">
                            Enhance Your Productivity with Our Sleek, High-Performance Laptop
                        </h2>
                        <p class="mt-5">
                            &nbsp;&nbsp;&nbsp; "Discover our latest arrival, designed to elevate your computing experience.
                            Featuring cutting-edge technology,
                            exceptional performance, and a sleek design, this laptop is perfect for professionals, students,
                            and creatives.
                            Stay ahead of the curve with lightning-fast processing speeds, stunning visuals, and
                            long-lasting battery life.
                            Upgrade to the future of laptops today."
                        </p>
                        <div class="group relative ml-96 w-fit cursor-pointer ">
                            <p class="bg-green-500 w-fit px-5 py-2 rounded-md transition duration-500 group-hover:hidden">
                                Shop <span>Now</span>
                            </p>
                            <p
                                class="bg-yellow-500 w-fit px-5 py-2 rounded-md transition duration-500 hidden group-hover:block">
                                Price <span>45000</span>
                            </p>
                        </div>
                    </div>
                    <div>

                        <img src="{{ asset('images/landingpage.jpg') }}" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Optional: Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>


    {{-- Start of category --}}
    <div class="px-10 my-10">
        <h1 class="my-10 text-center">Our Category</h1>

        <div>
            <div class="swiper mySwiperCard">
                <div class="swiper-wrapper mb-10">
                    <a href="{{route('category')}}" class="swiper-slide bg-[#FDF0D5] h-full w-full p-2 shadow-2xl shadow-[#ffd174]">
                        <img src="{{ asset('images/landingpage.jpg') }}" class="h-full w-full" alt="">
                        <div class="flex p-2">
                            <p>Name from database</p>
                            <p>Category</p>
                        </div>
                    </a>
                    <a href="{{route('category')}}" class="swiper-slide bg-[#FDF0D5] h-full w-full p-2 shadow-2xl shadow-[#ffd174]">
                        <img src="{{ asset('images/landingpage.jpg') }}" class="h-full w-full" alt="">
                        <div class="flex p-2">
                            <p>Name from database</p>
                            <p>Category</p>
                        </div>
                    </a>
                    <a href="{{route('category')}}" class="swiper-slide bg-[#FDF0D5] h-full w-full p-2 shadow-2xl shadow-[#ffd174]">
                        <img src="{{ asset('images/landingpage.jpg') }}" class="h-full w-full" alt="">
                        <div class="flex p-2">
                            <p>Name from database</p>
                            <p>Category</p>
                        </div>
                    </a>
                    <a href="{{route('category')}}" class="swiper-slide bg-[#FDF0D5] h-full w-full p-2 shadow-2xl shadow-[#ffd174]">
                        <img src="{{ asset('images/landingpage.jpg') }}" class="h-full w-full" alt="">
                        <div class="flex p-2">
                            <p>Name from database</p>
                            <p>Category</p>
                        </div>
                    </a>
                    <a href="{{route('category')}}" class="swiper-slide bg-[#FDF0D5] h-full w-full p-2 shadow-2xl shadow-[#ffd174]">
                        <img src="{{ asset('images/landingpage.jpg') }}" class="h-full w-full" alt="">
                        <div class="flex p-2">
                            <p>Name from database</p>
                            <p>Category</p>
                        </div>
                    </a>
                    <a href="{{route('category')}}" class="swiper-slide bg-[#FDF0D5] h-full w-full p-2 shadow-2xl shadow-[#ffd174]">
                        <img src="{{ asset('images/landingpage.jpg') }}" class="h-full w-full" alt="">
                        <div class="flex p-2">
                            <p>Name from database</p>
                            <p>Category</p>
                        </div>
                    </a>
                    <a href="{{route('category')}}" class="swiper-slide bg-[#FDF0D5] h-full w-full p-2 shadow-2xl shadow-[#ffd174]">
                        <img src="{{ asset('images/landingpage.jpg') }}" class="h-full w-full" alt="">
                        <div class="flex p-2">
                            <p>Name from database</p>
                            <p>Category</p>
                        </div>
                    </a>
                    <a href="{{route('category')}}" class="swiper-slide bg-[#FDF0D5] h-full w-full p-2 shadow-2xl shadow-[#ffd174]">
                        <img src="{{ asset('images/landingpage.jpg') }}" class="h-full w-full" alt="">
                        <div class="flex p-2">
                            <p>Name from database</p>
                            <p>Category</p>
                        </div>
                    </a>
                    <a href="{{route('category')}}" class="swiper-slide bg-[#FDF0D5] h-full w-full p-2 shadow-2xl shadow-[#ffd174]">
                        <img src="{{ asset('images/landingpage.jpg') }}" class="h-full w-full" alt="">
                        <div class="flex p-2">
                            <p>Name from database</p>
                            <p>Category</p>
                        </div>
                    </a>
                    <a href="{{route('category')}}" class="swiper-slide bg-[#FDF0D5] h-full w-full p-2 shadow-2xl shadow-[#ffd174]">
                        <img src="{{ asset('images/landingpage.jpg') }}" class="h-full w-full" alt="">
                        <div class="flex p-2">
                            <p>Name from database</p>
                            <p>Category</p>
                        </div>
                    </a>


                </div>
                <div class="swiper-pagination "></div>
            </div>
        </div>
    </div>

    {{-- End of Category --}}



    {{-- start of latest arrivals --}}
    <section class="px-10 my-10">

        <div>
            <h1 class="my-5 text-center text-xl font-bold">Latest Arrivals</h1>
        </div>
        <div class="grid grid-cols-6">

            <a href="" class="rounded-md shadow-lg bg-white m-4 border border-transparent hover:border-black hover:outline-0 cursor-pointer ">
                <img class="rounded-t-md mx-auto mt-2" src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                <div class="flex justify-between p-2">
                    <p class="mt-2">Name</p>
                    <p class="mt-2">Price</p>
                </div>
            </a>
            <a href="" class="rounded-md shadow-lg bg-white m-4 border border-transparent hover:border-black hover:outline-0 cursor-pointer ">
                <img class="rounded-t-md mx-auto mt-2" src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                <div class="flex justify-between p-2">
                    <p class="mt-2">Name</p>
                    <p class="mt-2">Price</p>
                </div>
            </a>
            <a href="" class="rounded-md shadow-lg bg-white m-4 border border-transparent hover:border-black hover:outline-0 cursor-pointer ">
                <img class="rounded-t-md mx-auto mt-2" src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                <div class="flex justify-between p-2">
                    <p class="mt-2">Name</p>
                    <p class="mt-2">Price</p>
                </div>
            </a>
            <a href="" class="rounded-md shadow-lg bg-white m-4 border border-transparent hover:border-black hover:outline-0 cursor-pointer ">
                <img class="rounded-t-md mx-auto mt-2" src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                <div class="flex justify-between p-2">
                    <p class="mt-2">Name</p>
                    <p class="mt-2">Price</p>
                </div>
            </a>
            <a href="" class="rounded-md shadow-lg bg-white m-4 border border-transparent hover:border-black hover:outline-0 cursor-pointer ">
                <img class="rounded-t-md mx-auto mt-2" src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                <div class="flex justify-between p-2">
                    <p class="mt-2">Name</p>
                    <p class="mt-2">Price</p>
                </div>
            </a>
            <a href="" class="rounded-md shadow-lg bg-white m-4 border border-transparent hover:border-black hover:outline-0 cursor-pointer ">
                <img class="rounded-t-md mx-auto mt-2" src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                <div class="flex justify-between p-2">
                    <p class="mt-2">Name</p>
                    <p class="mt-2">Price</p>
                </div>
            </a>
            <a href="" class="rounded-md shadow-lg bg-white m-4 border border-transparent hover:border-black hover:outline-0 cursor-pointer ">
                <img class="rounded-t-md mx-auto mt-2" src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                <div class="flex justify-between p-2">
                    <p class="mt-2">Name</p>
                    <p class="mt-2">Price</p>
                </div>
            </a>
            <a href="" class="rounded-md shadow-lg bg-white m-4 border border-transparent hover:border-black hover:outline-0 cursor-pointer ">
                <img class="rounded-t-md mx-auto mt-2" src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                <div class="flex justify-between p-2">
                    <p class="mt-2">Name</p>
                    <p class="mt-2">Price</p>
                </div>
            </a>
            <a href="" class="rounded-md shadow-lg bg-white m-4 border border-transparent hover:border-black hover:outline-0 cursor-pointer ">
                <img class="rounded-t-md mx-auto mt-2" src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                <div class="flex justify-between p-2">
                    <p class="mt-2">Name</p>
                    <p class="mt-2">Price</p>
                </div>
            </a>
            <a href="" class="rounded-md shadow-lg bg-white m-4 border border-transparent hover:border-black hover:outline-0 cursor-pointer ">
                <img class="rounded-t-md mx-auto mt-2" src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                <div class="flex justify-between p-2">
                    <p class="mt-2">Name</p>
                    <p class="mt-2">Price</p>
                </div>
            </a>
            <a href="" class="rounded-md shadow-lg bg-white m-4 border border-transparent hover:border-black hover:outline-0 cursor-pointer ">
                <img class="rounded-t-md mx-auto mt-2" src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                <div class="flex justify-between p-2">
                    <p class="mt-2">Name</p>
                    <p class="mt-2">Price</p>
                </div>
            </a>
            <a href="" class="rounded-md shadow-lg bg-white m-4 border border-transparent hover:border-black hover:outline-0 cursor-pointer ">
                <img class="rounded-t-md mx-auto mt-2" src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                <div class="flex justify-between p-2">
                    <p class="mt-2">Name</p>
                    <p class="mt-2">Price</p>
                </div>
            </a>
        </div>
    </section>

    {{-- end of latest arrivals --}}


        {{-- start of our  brands --}}
        <section class="px-14 my-10">

            <div>
                <h1 class="my-5 text-center text-xl font-bold">Our Brands</h1>
            </div>
            <div class="grid grid-cols-10">

                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
                <a href="" class="cursor-pointer ">
                    <img class=" mx-auto " src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                </a>
            </div>
        </section>

        {{-- end of our brands --}}
























    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 5000,
            },
            loop: true,
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiperCard", {
            slidesPerView: 1,
            spaceBetween: 10,
            autoplay: true,



            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
            },
        });
    </script>
@endsection
