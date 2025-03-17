@extends('layouts.layout')
@section('content')
    <div class="banner relative w-full lg:h-[300px] md:h-[200px] sm:h-[200px] h-[150px] bg-black bg-blend-darken flex justify-center items-center flex-col"
         style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('assets/images/banner.jpg') }}');
            background-size: cover;
            background-position: center;">
        <span class="text-white font-bold lg:text-5xl md:text-4xl sm:text-3xl text-2xl">MEMBERS</span>
        <span class="text-gray-200 lg:text-xl md:text-lg sm:text-md text-sm lg:mt-2 md:mt-2 mt-1"><a href="{{route('home')}}" class="text-underline mr-2 underline">Home -</a> Members</span>
    </div>


    <div class="py-12  px-2 flex flex-col  bg-white">
        <div class="max-w-[1200px] w-full mx-auto">
            <div class="border-t-[4px] border-b-[4px] border-b-black/10 border-t-black/10 pr-4 py-0.5">
                <span class="text-primary lg:text-4xl md:text-3xl sm:text-3xl text-2xl font-semibold text-center">Current Members</span>
            </div>
            <div class="w-full grid lg:grid-cols-2 gap-6 mt-6">
                   <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-4">
                       <div class="flex flex-col  lg:w-48 md:w-48 sm:w-48 w-full flex-none">
                           <img src="{{asset('assets/images/rohit.jpg')}}" class="lg:h-48 md:h-48 sm:h-48 h-28 lg:max-w-48 md:max-w-48 sm:max-w-18 max-w-32  rounded-[3px]" alt="">
                           <span class="text-primary lg:text-2xl md:text-xl sm:text-2xl text-2xl font-semibold  mt-4">Rohit Singh</span>
                           <span class="lg:text-md md:text-lg sm:text-lg text-md font-[500] text-black">PhD Student</span>
                       </div>
                       <div class="w-full flex flex-col  overflow-y-hidden h-[300px] grow relative hover:h-full cursor-pinter">
                           <p class="lg:text-sm md:text-sm sm:text-sm text-sm  font-medium text-black/80">I obtained my Bachelor's degree in Zoology, Botany, and Chemistry from Kumaon University, Almora, and my Master's degree in Zoology from SSJ University, Almora. During my Master's, I worked on identifying and evaluating potential enzyme inhibitors through in vivo and silico studies.</p>
                           <p class="lg:text-sm md:text-sm sm:text-sm text-sm  font-medium text-black/80 mt-4">I qualified for the CSIR-UGC NET Junior Research Fellowship exam with an All-India Rank of 51 and joined Dr. Prince Tiwari’s lab at IIT Roorkee as a researcher in February  2024. My research focuses on the biophysical and structural aspects of M-band proteins in the sarcomere.  </p>
                       </div>

                   </div>
                   <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-4">
                    <div class="flex flex-col  lg:w-48 md:w-48 sm:w-48 w-full flex-none">
                        <img src="{{asset('assets/images/saloni.jpg')}}" class="lg:h-48 md:h-48 sm:h-48 h-28 lg:max-w-48 md:max-w-48 sm:max-w-18 max-w-32  rounded-[3px]" alt="">
                        <span class="text-primary lg:text-2xl md:text-xl sm:text-2xl text-2xl font-semibold  mt-4">Saloni Garg</span>
                        <span class="lg:text-md md:text-lg sm:text-lg text-md font-[500] text-black">PhD Student</span>
                    </div>
                    <div class="w-full flex flex-col  overflow-y-hidden h-[300px] grow relative hover:h-full cursor-pinter">
                        <p class="lg:text-sm md:text-sm sm:text-sm text-sm  font-medium text-black/80">Embarking on a journey through biotechnology, I pursued my Bachelor of Science in Biotechnology at Panjab University, Chandigarh, from 2018 to 2021, achieving an 87% aggregate. In 2021, my academic journey was marked by several significant achievements in national-level examinations:</p>
                        <p class="lg:text-sm md:text-sm sm:text-sm text-sm  font-medium text-black/80 mt-4">At NIT Rourkela, I pursued my Master's in Life Sciences from 2021 to 2023, graduating with a  CGPA of 9.36. During the summer of 2022, I undertook a two-month research internship at the CSIR-Centre for Cellular and Molecular Biology (CCMB) in Hyderabad, under the mentorship of Dr. Mohammed Idris. This internship provided me with hands-on experience in molecular biology techniques and deepened my understanding of developmental processes. For my Master's dissertation, I worked under the guidance of Dr. Bibekanand Mallick at NIT Rourkela. My research focused on investigating the role of small non-coding RNAs in cancer treatment, aiming to elucidate their potential as therapeutic agents in oncology. In 2022, I once again qualified for GATE-XL and got admission to IIT Roorkee as a Ph.D. student, which I commenced in 2023. My doctoral research is on the structural and functional aspects of cardiac myosin-binding protein-C, a crucial sarcomeric regulatory protein. This research holds significant implications for understanding cardiac muscle physiology and potential therapeutic interventions for cardiac diseases. </p>
                    </div>

                </div>
                   <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-4">
                    <div class="flex flex-col  lg:w-48 md:w-48 sm:w-48 w-full flex-none">
                        <img src="{{asset('assets/images/Kaushiki_Photo.jpg')}}" class="lg:h-48 md:h-48 sm:h-48 h-28 lg:max-w-48 md:max-w-48 sm:max-w-18 max-w-32  rounded-[3px]" alt="">
                        <span class="text-primary lg:text-2xl md:text-xl sm:text-2xl text-2xl font-semibold  mt-4">Kaushiki Tiwari </span>
                        <span class="lg:text-md md:text-lg sm:text-lg text-md font-[500] text-black">PhD Student</span>
                    </div>
                    <div class="w-full flex flex-col  overflow-y-hidden h-[300px] grow relative hover:h-full cursor-pinter">
                        <p class="lg:text-sm md:text-sm sm:text-sm text-sm  font-medium text-black/80">I received my bachelor’s degree in microbiology from the University of Delhi (2017-2020). During my undergraduate studies, I completed an internship at the Dr. Ram Manohar Lohia (RML) Institute of Medical Sciences, Lucknow. In 2020, I qualified for GAT-B and subsequently pursued a master’s degree in biotechnology at the University of Mysore (2020-2022). Throughout my academic journey, I developed a strong interest in structural biology and protein biochemistry. To further explore this field, I joined the Molecular Reproduction and Developmental Genetics (MRDG) lab at IISc Bangalore for my dissertation, where I gained valuable research experience.</p>
                        <p class="lg:text-sm md:text-sm sm:text-sm text-sm  font-medium text-black/80 mt-4">In 2023, I qualified for GATE BT and joined my current lab as a PhD student, where I am working on the structural and functional aspects of cardiac myosin-binding protein-C (cMyBP-C), a sarcomeric regulatory protein. </p>
                        <p class="lg:text-sm md:text-sm sm:text-sm text-sm  font-medium text-black/80 mt-4">Outside the lab, I enjoy playing badminton, cooking and watching movies.  </p>
                    </div>

                </div>
                   <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col gap-4">
                    <div class="flex flex-col  lg:w-48 md:w-48 sm:w-48 w-full flex-none">
                        <img src="{{asset('assets/images/paushali.jpg')}}" class="lg:h-48 md:h-48 sm:h-48 h-28 lg:max-w-48 md:max-w-48 sm:max-w-18 max-w-32  rounded-[3px]" alt="">
                        <span class="text-primary lg:text-2xl md:text-xl sm:text-2xl text-2xl font-semibold  mt-4">Poushali Mitra</span>
                        <span class="lg:text-md md:text-lg sm:text-lg text-md font-[500] text-black">PhD Student</span>
                    </div>
                    <div class="w-full flex flex-col  overflow-y-hidden h-[300px] grow relative hover:h-full cursor-pinter">
                        <p class="lg:text-sm md:text-sm sm:text-sm text-sm  font-medium text-black/80">I obtained my bachelor's degree (B. Pharm.) from Jadavpur University, Kolkata (2014-2018). While doing my bachelor’s, I had the opportunity to learn about molecular biology techniques like cloning. I found myself intrigued by this field of biology, so I moved on to pursue my master’s degree (M.S.) from the National Institute of Pharmaceutical Education and Research, Mohali, majoring in biotechnology. There I was introduced to molecular biology and studied mycobacterium proteins using biophysical methods. Equipped with this knowledge, I decided to join the lab as a PhD research scholar in the year 2022, where I am currently working in the field of structural biology. My interests lie in studying the structure and intermolecular interactions between sarcomeric proteins using biophysical methods and CryoEM. During my free time, I enjoy painting, digital art and writing on movies and television.</p>
                    </div>

                </div>
            </div>


            <div class="border-t-[4px] border-b-[4px] border-b-black/10 border-t-black/10 pr-4 py-0.5 mt-12">
                <span class="text-primary lg:text-4xl md:text-3xl sm:text-3xl text-2xl font-semibold text-center">Other Members</span>
            </div>

            <div class="w-full flex flex-wrap gap-6 mt-6">
                    <div class="flex flex-col flex-none">
                        <img src="{{asset('assets/images/download.png')}}" class="lg:h-48 md:h-48 sm:h-48 h-28 lg:max-w-48 md:max-w-48 sm:max-w-18 max-w-32  rounded-[3px]" alt="">
                        <span class="text-primary lg:text-xl md:text-xl sm:text-lg text-lg font-semibold  mt-4">Mahendra Dudi</span>
                        <span class=" text-sm font-[500] text-black">MSc thesis student</span>
                    </div>
                    <div class="flex flex-col flex-none">
                        <img src="{{asset('assets/images/download.png')}}" class="lg:h-48 md:h-48 sm:h-48 h-28 lg:max-w-48 md:max-w-48 sm:max-w-18 max-w-32  rounded-[3px]" alt="">
                        <span class="text-primary lg:text-xl md:text-xl sm:text-lg text-lg font-semibold  mt-4">Rajshekhar Yadav</span>
                        <span class=" text-sm font-[500] text-black">B.Tech Project student</span>
                    </div>
                    <div class="flex flex-col flex-none">
                        <img src="{{asset('assets/images/download.png')}}" class="lg:h-48 md:h-48 sm:h-48 h-28 lg:max-w-48 md:max-w-48 sm:max-w-18 max-w-32  rounded-[3px]" alt="">
                        <span class="text-primary lg:text-xl md:text-xl sm:text-lg text-lg font-semibold  mt-4">Ashish Gautam</span>
                        <span class=" text-sm font-[500] text-black">M.tech Project student</span>
                    </div>
            </div>


            <div class="border-t-[4px] border-b-[4px] border-b-black/10 border-t-black/10 pr-4 py-0.5 mt-12">
                <span class="text-primary lg:text-4xl md:text-3xl sm:text-3xl text-2xl font-semibold text-center">Past Members</span>
            </div>

            <div class="w-full flex flex-wrap gap-6 mt-6">
                <div class="max-w-[600px] w-full">
                    <table class="w-full ">
                        <tr>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">1</td>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">Alka Kumari </td>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">B.Tech project </td>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">2024</td>
                        </tr>
                        <tr>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">2</td>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">Abhishek Jha  </td>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">MSc- thesis</td>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">2024</td>
                        </tr>
                        <tr>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">3</td>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">Shaleen Singh  </td>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">B.Tech project </td>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">2023</td>
                        </tr>
                        <tr>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">4</td>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">Nisha Dhanda </td>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">MSc thesis</td>
                            <td class="px-2 font-medium text-black/80 border-[1px] border-black/20">2023</td>
                        </tr>



                    </table>

                </div>

            </div>

        </div>
    </div>







@endsection
