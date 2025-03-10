@extends('layouts.layout')
@section('content')

    <div class="banner mt-4">
        <img src="{{asset('assets/images/banner.jpg')}}" class="w-full lg:h-[400px] md:h-[300px] sm:h-[300px] h-[200px] object-cover" alt="">
    </div>


    <div class="py-12 px-2 flex flex-col items-center bg-white">
        <span class="text-primary lg:text-3xl md:text-3xl sm:text-2xl text-2xl">Our Gallery</span>
        <div class="max-w-[1600px] grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-6 gap-6">
            <div class="w-full h-64">
                <img src="{{asset('assets/images/banner.jpg')}}" class="h-full w-full object-cover rounded-[3px]" alt="">
            </div>
            <div class="w-full h-64">
                <img src="{{asset('assets/images/banner2.png')}}" class="h-full w-full object-cover rounded-[3px]" alt="">
            </div>

        </div>
    </div>



@endsection
