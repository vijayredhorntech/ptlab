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
    <div class="py-12 px-2 flex flex-col items-center bg-white">
        <span class="text-primary lg:text-3xl md:text-3xl sm:text-2xl text-2xl">Contact us</span>
        <div class="lg:w-[70%] mg:w-[70%] sm:w-[80%] w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6 mt-12">
            <div class="w-full">
                <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">Dr. Prince Tiwari Lab</p>
                <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">Department of Biosciences and Bioengineering, IIT Roorkee</p>
                <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">Department of Biosciences and Bioengineering</p>
                <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">Rm. F6, Department of Biosciences and Bioengineering,</p>
                <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">Indian Institute of Technology (IIT), Roorkee, India - 247667</p>
                <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">+91-1332-285142</p>
                <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">prince.tiwari@bt.iitr.ac.in</p>
            </div>
            <div class="w-full">
                <div class="w-full grid grid-cols-2 gap-2">
                    <div class="flex flex-col gap-2">
                        <label for="" class="text-primary text-sm">First Name</label>
                        <input type="text" placeholder="First Name" class="px-2 border-[0px] border-b-[1px] border-b-primary focus:outline-none focus:ring-0 ">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="" class="text-primary text-sm">Last Name</label>
                        <input type="text" placeholder="Last Name" class="px-2 border-[0px] border-b-[1px] border-b-primary focus:outline-none focus:ring-0 ">
                    </div>
                </div>
                <div class="w-full grid grid-cols-2 gap-2 mt-6">
                    <div class="flex flex-col gap-2">
                        <label for="" class="text-primary text-sm">Email</label>
                        <input type="email" placeholder="Email" class="px-2 border-[0px] border-b-[1px] border-b-primary focus:outline-none focus:ring-0 ">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="" class="text-primary text-sm">Phone</label>
                        <input type="number" placeholder="Phone" class="px-2 border-[0px] border-b-[1px] border-b-primary focus:outline-none focus:ring-0 ">
                    </div>
                </div>
                <div class="flex flex-col gap-2 mt-6">
                    <label for="" class="text-primary text-sm">Message</label>
                    <textarea type="number" placeholder="Phone" rows="4" class="px-2 border-[0px] border-b-[1px] border-b-primary focus:outline-none focus:ring-0 ">
                </textarea>
                </div>

            </div>
        </div>
    </div>



@endsection
