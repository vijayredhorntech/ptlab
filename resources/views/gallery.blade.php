@extends('layouts.layout')
@section('content')

    <div class="banner relative w-full lg:h-[300px] md:h-[200px] sm:h-[200px] h-[150px] bg-black bg-blend-darken flex justify-center items-center flex-col"
         style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('assets/images/banner.jpg') }}');
            background-size: cover;
            background-position: center;">
        <span class="text-white font-bold lg:text-5xl md:text-4xl sm:text-3xl text-2xl">OUR GALLERY</span>
        <span class="text-gray-200 lg:text-xl md:text-lg sm:text-md text-sm lg:mt-2 md:mt-2 mt-1"><a href="{{route('home')}}" class="text-underline mr-2 underline">Home -</a> Gallery</span>
    </div>

    <div class="py-12 px-2 flex flex-col items-center bg-white">
        <div class="max-w-[1600px] grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-6 gap-6">
            <div class="w-full h-64">
                <a href="{{asset('assets/images/banner.jpg')}}" target="_blank">
                    <img src="{{asset('assets/images/banner.jpg')}}" class="h-full w-full object-cover rounded-[3px]" alt="">
                </a>
            </div>
            <div class="w-full h-64">
                <a href="{{asset('assets/images/banner3.png')}}" target="_blank">
                    <img src="{{asset('assets/images/banner3.png')}}" class="h-full w-full object-cover rounded-[3px]" alt="">
                </a>
            </div>
            <div class="w-full h-64">
                <a href="{{asset('assets/images/banner.jpg')}}" target="_blank">
                    <img src="{{asset('assets/images/banner.jpg')}}" class="h-full w-full object-cover rounded-[3px]" alt="">
                </a>
            </div>
            <div class="w-full h-64">
                <a href="{{asset('assets/images/banner3.png')}}" target="_blank">
                    <img src="{{asset('assets/images/banner3.png')}}" class="h-full w-full object-cover rounded-[3px]" alt="">
                </a>
            </div>
            <div class="w-full h-64">
                <a href="{{asset('assets/images/banner.jpg')}}" target="_blank">
                    <img src="{{asset('assets/images/banner.jpg')}}" class="h-full w-full object-cover rounded-[3px]" alt="">
                </a>
            </div>
            <div class="w-full h-64">
                <a href="{{asset('assets/images/banner3.png')}}" target="_blank">
                    <img src="{{asset('assets/images/banner3.png')}}" class="h-full w-full object-cover rounded-[3px]" alt="">
                </a>
            </div>



        </div>
    </div>



@endsection
