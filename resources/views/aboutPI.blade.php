@extends('layouts.layout')
@section('content')
    <div class="banner relative w-full lg:h-[300px] md:h-[200px] sm:h-[200px] h-[150px] bg-black bg-blend-darken flex justify-center items-center flex-col"
         style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('assets/images/banner.jpg') }}');
            background-size: cover;
            background-position: center;">
        <span class="text-white font-bold lg:text-5xl md:text-4xl sm:text-3xl text-2xl">ABOUT PI</span>
        <span class="text-gray-200 lg:text-xl md:text-lg sm:text-md text-sm lg:mt-2 md:mt-2 mt-1"><a href="{{route('home')}}" class="text-underline mr-2 underline">Home -</a> About Pi</span>
    </div>

    <div class="banner py-16 px-2 bg-white">
        <div class="max-w-[1200px] mx-auto grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6">
            <div class="flex flex-col lg:items-end md:items-end items-start">
                <img src="{{asset('assets/images/pt.jpg')}}" class="lg:h-96 md:h-96 sm:h-72 h-64 w-auto rounded-[3px]" alt="">
                <span class="text-primary lg:text-4xl md:text-3xl sm:text-3xl text-3xl font-semibold text-center mt-4">Prince Tiwari</span>
                <span class="lg:text-lg md:text-lg sm:text-lg text-md font-[500] text-black">Lab Manager</span>
                <div class="w-full mt-8 flex flex-col lg:items-end md:items-end items-start">
                    <span class="text-primary lg:text-2xl text-md font-semibold">Education</span>
                    <p class="text-md mt-4 lg:text-right md:text-right text-left">
                        <strong class="">Ph.D. in Protein biochemistry and biophysics, IISER Mohali,</strong> Punjab, India (2012-2018).
                    </p>
                    <p class="text-md mt-2 lg:text-right md:text-right text-left">
                        <strong class="">M.Sc. in Life Sciences, Devi Ahilya University,</strong>  Indore, India (2008-2010)
                    </p>
                    <p class="text-md mt-2 lg:text-right md:text-right text-left">
                        <strong class="">B.Sc. in Biology, Deen Dayal Upadhyay University,</strong> Gorakhpur, India (2003-2006)
                    </p>

                </div>
                <div class="w-full mt-4 flex flex-col lg:items-end md:items-end items-start">
                    <span class="text-primary lg:text-2xl text-md font-semibold">Awards and Honors</span>
                    <p class="text-md mt-4 lg:text-right md:text-right text-left">•	Invited speaker in
                        <strong class="text-primary">EMSI-2024</strong>  at IIT Bombay, India
                    </p>
                    <p class="text-md mt-4 lg:text-right md:text-right text-left">•
                        <strong class="text-primary">American Heart Association</strong>(AHA) postdoctoral fellowship - 2022
                    </p>
                    <p class="text-md mt-4 lg:text-right md:text-right text-left">•	Invited speaker at the
                        <strong class="text-primary">6th Cryo-EM symposium (2021), Yale University</strong>, NH, USA
                    </p>
                    <p class="text-md mt-4 lg:text-right md:text-right text-left">•	BPS (USA) travel award (2021)
                    </p>
                    <p class="text-md mt-4 lg:text-right md:text-right text-left">•	EMBO travel grant (2017)
                    </p>
                    <p class="text-md mt-4 lg:text-right md:text-right text-left">•	DBT travel grant (2018)
                    </p>


                </div>
            </div>
            <div class="w-full flex flex-col items-left">
                <p class=" lg:text-lg md:text-lg sm:text-lg text-md  font-[200]">My research interest is understanding how genetic mutations in muscle proteins lead to cardiovascular and other muscle diseases. As a trained protein structural biochemist, my lab used primarily TEM and cryo-TEM to understand the role of muscular regulation in cardiomyopathies and its structural implications. We also use a variety of biochemical-biophysical techniques, e.g., CD, fluorescence, DSC, ITC, SPR, and Mass spectrometry, to characterize and explore the functional details of the sarcomere proteins. </p>
                <p class=" lg:text-lg md:text-lg sm:text-lg text-md mt-8 font-[200]">I joined the Department of Biosciences and Bioengineering, IIT Roorkee, in mid-2022.I did an MSc at the School of Life Sciences, Devi Ahilya University, Indore and then completed PhD at IISER Mohali with Prof. Purnananda Guptasarma, where I studied calcium-binding proteins such as human epithelial (E) and neuronal (N) cadherins. I moved to the United States for postdoctoral studies and joined Roger Craig’s lab at University of Massachusetts Medical School, Worcester. In addition to having research publications published in journals like Nature and eLife, he received a prestigious American Heart Association (AHA) post-doctoral fellowship. His current research interest is Investigating cardiac myosin-binding proteins and other muscle proteins.  </p>


                <div class="w-full mt-4">
                    <span class="text-primary lg:text-xl text-md font-semibold">Research and Professional Experience</span>
                    <div class="w-full flex flex-col mt-4">
                        <span class="text-md mt-4">June 2022- present	</span>
                        <span class="text-md font-bold text-primary">Assistant Professor </span>
                        <span class="text-md font-normal">Department of Biosciences and Bioengineering,	</span>
                        <span class="text-md font-normal">IIT, Roorkee, India	</span>

                    </div>
                    <div class="w-full flex flex-col mt-4">
                        <span class="text-md font-[200]">2018 – May 2022	</span>
                        <span class="text-md font-bold text-primary">Postdoctoral Associate  </span>
                        <span class="text-md font-normal">Mentor – Prof. Roger Craig, University of Massachusetts Medical School, Worcester, MA, USA	</span>
                        <span class="text-md font-normal">Project: Structure-function of smooth and cardiac myosins. 	</span>

                    </div>
                    <div class="w-full flex flex-col mt-4">
                        <span class="text-md font-[200]">2012 - 2018		</span>
                        <span class="text-md font-bold text-primary">Ph.D. Student  </span>
                        <span class="text-md font-normal">Supervisor: Prof. Purnananda Guptasarma, Department of Biological Sciences, IISER Mohali, Punjab, India</span>
                        <span class="text-md font-normal">Project: Human epithelial (E) and neuronal (N) cadherin proteins, domain structural contents and effects of Ca-binding, and domain-domain interactions. 	</span>

                    </div>
                </div>



            </div>
        </div>

    </div>

@endsection
