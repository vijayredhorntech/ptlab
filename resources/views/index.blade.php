@extends('layouts.layout')
@section('content')
    <div class="banner">
        <div class="swiffy-slider slider-nav-autoplay">
            <ul class="slider-container">
                <li><img src="{{asset('assets/images/banner3.png')}}" class="w-full lg:h-[500px] md:h-[400px] sm:h-[400px] h-[300px] object-cover" alt=""></li>
                <li><img src="{{asset('assets/images/banner.jpg')}}" class="w-full lg:h-[500px] md:h-[400px] sm:h-[400px] h-[300px] object-cover" alt=""></li>
            </ul>

            <button type="button" class="slider-nav"></button>
            <button type="button" class="slider-nav slider-nav-next"></button>

        </div>
    </div>


    <div class="py-12  px-2 flex flex-col  bg-white">
        <div class="max-w-[1200px] mx-auto">
            <div class="border-t-[4px] border-b-[4px] border-b-black/10 border-t-black/10 pr-4 py-0.5">
                <span class="text-primary lg:text-4xl md:text-3xl sm:text-3xl text-2xl font-semibold text-center">Welcome to Dr. Prince Tiwari Lab</span>
            </div>
            <div class="max-w-[1200px]">
                <p class="font-medium text-black/80 lg:text-lg md:text-md sm:text-md text-sm text-center mt-4 text-justify">My research interest is understanding how genetic mutations in muscle proteins lead to cardiovascular and other muscle diseases. As a trained protein structural biochemist, my lab used primarily TEM and cryo-TEM to understand the role of muscular regulation in cardiomyopathies and its structural implications. We also use a variety of biochemical-biophysical techniques, e.g., CD, fluorescence, DSC, ITC, SPR, and Mass spectrometry, to characterize and explore the functional details of the sarcomere proteins.</p>
            </div>
        </div>
    </div>

    <div class="pt-12 px-2 flex flex-col  bg-white">
        <div class="max-w-[1200px] mx-auto">
            <div class="border-t-[4px] border-b-[4px] border-b-black/10 border-t-black/10 pr-4 py-0.5">
                <span class="text-primary lg:text-4xl md:text-3xl sm:text-3xl text-2xl font-semibold text-center">Overview</span>
            </div>
            <div class=" mx-auto grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6 mt-8">
                <div class="w-full flex flex-col items-left">
                    <p class=" lg:text-lg md:text-lg sm:text-lg text-md  font-medium text-black/80 text-justify">My research interest is understanding how genetic mutations in muscle proteins lead to cardiovascular and other muscle diseases. As a trained protein structural biochemist, my lab used primarily TEM and cryo-TEM to understand the role of muscular regulation in cardiomyopathies and its structural implications. We also use a variety of biochemical-biophysical techniques, e.g., CD, fluorescence, DSC, ITC, SPR, and Mass spectrometry, to characterize and explore the functional details of the sarcomere proteins. </p>
                    <p class=" lg:text-lg md:text-lg sm:text-lg text-md mt-8 font-medium text-black/80 text-justify">I joined the Department of Biosciences and Bioengineering, IIT Roorkee, in mid-2022.I did an MSc at the School of Life Sciences, Devi Ahilya University, Indore and then completed PhD at IISER Mohali with Prof. Purnananda Guptasarma, where I studied calcium-binding proteins such as human epithelial (E) and neuronal (N) cadherins. I moved to the United States for postdoctoral studies and joined Roger Craig’s lab at University of Massachusetts Medical School, Worcester. In addition to having research publications published in journals like Nature and eLife, he received a prestigious American Heart Association (AHA) post-doctoral fellowship. His current research interest is Investigating cardiac myosin-binding proteins and other muscle proteins.  </p>
                    <div class="w-full mt-4">
                        <span class="text-primary lg:text-2xl text-md font-semibold">Research and Professional Experience</span>
                        <div class="w-full flex flex-col mt-4">
                            <span class="text-md mt-4 font-medium">June 2022- present	</span>
                            <span class="text-md font-semibold text-primary">Assistant Professor </span>
                            <span class="text-md font-medium text-justify">Department of Biosciences and Bioengineering,	</span>
                            <span class="text-md font-medium text-justify">IIT, Roorkee, India	</span>

                        </div>
                        <div class="w-full flex flex-col mt-4">
                            <span class="text-md font-medium">2018 – May 2022	</span>
                            <span class="text-md font-semibold text-primary">Postdoctoral Associate  </span>
                            <span class="text-md font-medium text-justify">Mentor – Prof. Roger Craig, University of Massachusetts Medical School, Worcester, MA, USA	</span>
                            <span class="text-md font-medium text-justify">Project: Structure-function of smooth and cardiac myosins. 	</span>

                        </div>
                        <div class="w-full flex flex-col mt-4">
                            <span class="text-md font-medium">2012 - 2018		</span>
                            <span class="text-md font-semibold text-primary">Ph.D. Student  </span>
                            <span class="text-md font-medium text-justify">Supervisor: Prof. Purnananda Guptasarma, Department of Biological Sciences, IISER Mohali, Punjab, India</span>
                            <span class="text-md font-medium text-justify">Project: Human epithelial (E) and neuronal (N) cadherin proteins, domain structural contents and effects of Ca-binding, and domain-domain interactions. 	</span>

                        </div>
                    </div>
                </div>

                <div class="flex flex-col ">
                    <div class="w-full  flex flex-col ">
                        <span class="text-primary lg:text-2xl text-md font-semibold">Education</span>
                        <p class="text-md mt-4 text-black text-justify font-medium">
                            <strong class="">Ph.D. in Protein biochemistry and biophysics, IISER Mohali,</strong> Punjab, India (2012-2018).
                        </p>
                        <p class="text-md mt-2 text-black text-justify font-medium">
                            <strong class="">M.Sc. in Life Sciences, Devi Ahilya University,</strong>  Indore, India (2008-2010)
                        </p>
                        <p class="text-md mt-2 text-black text-justify font-medium">
                            <strong class="">B.Sc. in Biology, Deen Dayal Upadhyay University,</strong> Gorakhpur, India (2003-2006)
                        </p>

                    </div>
                    <div class="w-full mt-4 flex flex-col ">
                        <span class="text-primary lg:text-2xl text-md font-semibold">Awards and Honors</span>
                        <p class="text-md mt-4 text-justify font-medium">•	Invited speaker in
                            <strong class="text-primary">EMSI-2024</strong>  at IIT Bombay, India
                        </p>
                        <p class="text-md mt-4 text-justify font-medium">•
                            <strong class="text-primary">American Heart Association</strong>(AHA) postdoctoral fellowship - 2022
                        </p>
                        <p class="text-md mt-4 text-justify font-medium">•	Invited speaker at the
                            <strong class="text-primary">6th Cryo-EM symposium (2021), Yale University</strong>, NH, USA
                        </p>
                        <p class="text-md mt-4 text-justify font-medium">•	BPS (USA) travel award (2021)
                        </p>
                        <p class="text-md mt-4 text-justify font-medium">•	EMBO travel grant (2017)
                        </p>
                        <p class="text-md mt-4 text-justify font-medium">•	DBT travel grant (2018)
                        </p>
                    </div>
                    <div class="w-full mt-4 flex flex-col ">
                        <div class="w-full h-[600px] overflow-y-auto">
                            <a class="twitter-timeline" href="https://twitter.com/PrinceTiwari?ref_src=twsrc%5Etfw">Tweets by PrinceTiwari</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12  px-2 flex flex-col  bg-white ">
        <div class="max-w-[1200px] w-full mx-auto">
            <div class="border-t-[4px] border-b-[4px] border-b-black/10 border-t-black/10 pr-4 py-0.5">
                <span class="text-primary lg:text-4xl md:text-3xl sm:text-3xl text-2xl font-semibold text-center">Research Funding</span>
            </div>
            <div class="w-full mt-4 flex flex-wrap gap-6 items-center">
                <img src="{{asset('assets/images/Picture4.jpg')}}" class="h-40" alt="">
                <img src="{{asset('assets/images/Picture5.jpg')}}" class="h-32" alt="">
            </div>
        </div>
    </div>




@endsection
