@extends('layouts.layout')
@section('content')

    <div class="banner relative w-full lg:h-[300px] md:h-[200px] sm:h-[200px] h-[150px] bg-black bg-blend-darken flex justify-center items-center flex-col"
         style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('assets/images/banner.jpg') }}');
            background-size: cover;
            background-position: center;">
            <span class="text-white font-bold lg:text-5xl md:text-4xl sm:text-3xl text-2xl">CONTACT US</span>
           <span class="text-gray-200 lg:text-xl md:text-lg sm:text-md text-sm lg:mt-2 md:mt-2 mt-1"><a href="{{route('home')}}" class="text-underline mr-2 underline">Home -</a> Contact Us</span>
    </div>





    <div class="py-12 px-2 flex flex-col items-center bg-white">
        <div class="lg:w-[70%] mg:w-[70%] sm:w-[80%] w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6 lg:mt-16 md:mt-16 sm:mt-8 mt-6">
            <div class="w-full">
                <p class="text-justify lg:text-lg md:text-lg sm:text-lg text-md mt-4 font-medium text-black/80">Dr. Prince Tiwari Lab</p>
                <p class="text-justify lg:text-lg md:text-lg sm:text-lg text-md mt-4 font-medium text-black/80">Rm. F6, Department of Biosciences and Bioengineering,</p>
                <p class="text-justify lg:text-lg md:text-lg sm:text-lg text-md mt-4 font-medium text-black/80">Indian Institute of Technology (IIT), Roorkee, India - 247667</p>
                <p class="text-justify lg:text-lg md:text-lg sm:text-lg text-md mt-4 font-medium text-black/80">+91-1332-285142</p>
                <p class="text-justify lg:text-lg md:text-lg sm:text-lg text-md mt-4 font-medium text-black/80">prince.tiwari@bt.iitr.ac.in</p>
            </div>
            <div class="w-full">
                <div class="w-full grid grid-cols-2 gap-2">
                    <div class="flex flex-col gap-2">
                        <label for="" class="text-primary text-sm font-medium">First Name</label>
                        <input type="text" placeholder="First Name" class="px-2 border-[0px] border-b-[1px] border-b-primary focus:outline-none focus:ring-0 ">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="" class="text-primary text-sm font-medium">Last Name</label>
                        <input type="text" placeholder="Last Name" class="px-2 border-[0px] border-b-[1px] border-b-primary focus:outline-none focus:ring-0 ">
                    </div>
                </div>
                <div class="w-full grid grid-cols-2 gap-2 mt-6">
                    <div class="flex flex-col gap-2">
                        <label for="" class="text-primary text-sm font-medium">Email</label>
                        <input type="email" placeholder="Email" class="px-2 border-[0px] border-b-[1px] border-b-primary focus:outline-none focus:ring-0 ">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="" class="text-primary text-sm font-medium">Phone</label>
                        <input type="number" placeholder="Phone" class="px-2 border-[0px] border-b-[1px] border-b-primary focus:outline-none focus:ring-0 ">
                    </div>
                </div>
                <div class="flex flex-col gap-2 mt-6">
                    <label for="" class="text-primary text-sm font-medium">Message</label>
                    <textarea placeholder="Phone" rows="4" class=" px-2 border-[0px] border-b-[1px] border-b-primary focus:outline-none focus:ring-0 ">
                    </textarea>
                </div>

            </div>
            <div class="w-full mt-4 lg:col-span-2 md:col-span2 col-span-1">
                <iframe class="rounded-md" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6919.816225659527!2d77.89049119601384!3d29.86692370395539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390eb3650bfe37a7%3A0xa9d19b15af050467!2sIndian%20Institute%20Of%20Technology%20Roorkee!5e0!3m2!1sen!2sin!4v1741689425940!5m2!1sen!2sin" width="100%"  height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>


    </div>



@endsection
