@extends('layouts.layout')
@section('content')
    <div class="banner mt-4">
        <div class="swiffy-slider slider-nav-autoplay">
            <ul class="slider-container">
                <li><img src="{{asset('assets/images/banner2.png')}}" class="w-full lg:h-[500px] md:h-[400px] sm:h-[400px] h-[300px] object-cover" alt=""></li>
                <li><img src="{{asset('assets/images/banner.jpg')}}" class="w-full lg:h-[500px] md:h-[400px] sm:h-[400px] h-[300px] object-cover" alt=""></li>
            </ul>

            <button type="button" class="slider-nav"></button>
            <button type="button" class="slider-nav slider-nav-next"></button>

        </div>
    </div>


    <div class="py-20 px-2 flex flex-col items-center bg-white">
        <span class="text-primary lg:text-3xl md:text-3xl sm:text-2xl text-2xl">Welcome to Dr. Prince Tiwari Lab</span>
        <div class="max-w-[800px]">
            <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores mollitia accusantium fuga nam! Iusto, quaerat in nam similique vel qui sunt ad iure. Praesentium unde, repellat, mollitia similique facilis consectetur provident tempore laborum quis soluta ducimus quo itaque placeat? Ipsum quam dolores necessitatibus consequatur voluptatum. Fuga esse reiciendis doloribus nobis!</p>
            <p class="font-[200] lg:text-md md:text-md sm:text-md text-sm text-center mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum numquam nam vero, quidem corporis voluptate sequi animi aliquid illo amet?</p>
        </div>
    </div>

    <div class="banner bg-white pb-8 px-2">
        <div class="max-w-[1200px] mx-auto">
            <img src="{{asset('assets/images/banner2.png')}}" class="w-full lg:h-[500px] md:h-[400px] sm:h-[400px] h-[300px] object-cover rounded-[3px]" alt="">
        </div>

    </div>



    <div class="banner py-16 px-2">
        <div class="max-w-[1200px] mx-auto flex flex-col items-center">
            <img src="{{asset('assets/images/pt.jpg')}}" class="lg:h-96 md:h-96 sm:h-72 h-64 w-auto rounded-[3px]" alt="">
            <span class="lg:text-3xl md:text-3xl sm:text-2xl text-2xl text-primary mt-4">Prince Tiwari</span>
            <span class="lg:text-md md:text-md sm:text-md text-sm font-[200]">Lab Manager</span>
            <p class="text-center lg:text-md md:text-md sm:text-md text-sm mt-8 font-[200]">My research interest is understanding how genetic mutations in muscle proteins lead to cardiovascular and other muscle diseases. As a trained protein structural biochemist, my lab used primarily TEM and cryo-TEM to understand the role of muscular regulation in cardiomyopathies and its structural implications. We also use a variety of biochemical-biophysical techniques, e.g., CD, fluorescence, DSC, ITC, SPR, and Mass spectrometry, to characterize and explore the functional details of the sarcomere proteins. </p>
        </div>

    </div>
    </div>

    <div class="py-12 px-2 flex flex-col items-center bg-white">
        <span class="text-primary lg:text-3xl md:text-3xl sm:text-2xl text-2xl">Contact us</span>
        <div class="max-w-[800px]">
            <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">Dr. Prince Tiwari Lab</p>
            <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">Department of Biosciences and Bioengineering, IIT Roorkee</p>
            <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">Department of Biosciences and Bioengineering</p>
            <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">Rm. F6, Department of Biosciences and Bioengineering,</p>
            <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">Indian Institute of Technology (IIT), Roorkee, India - 247667</p>
            <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">+91-1332-285142</p>
            <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">prince.tiwari@bt.iitr.ac.in</p>
        </div>
    </div>

@endsection
