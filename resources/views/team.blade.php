@extends('layouts.layout')
@section('content')
    <div class="banner mt-4 relative w-full lg:h-[400px] md:h-[300px] sm:h-[300px] h-[200px] bg-black bg-blend-darken"
         style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('assets/images/banner.jpg') }}');
            background-size: cover;
            background-position: center;">
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

    <!-- saloni -->
    <div class="banner py-8 px-2 bg-primary">
        <div class="max-w-[1200px] mx-auto lg:grid md:grid flex flex-col-reverse lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6">
            <div class="w-full flex flex-col lg:items-end md:items-end items-start">
                <p class="lg:text-lg md:text-lg sm:text-lg text-md  font-[200] lg:text-right md:text-right text-left text-gray-300">Embarking on a journey through biotechnology, I pursued my Bachelor of Science in Biotechnology at Panjab University, Chandigarh, from 2018 to 2021, achieving an 87% aggregate. In 2021, my academic journey was marked by several significant achievements in national-level examinations:</p>
                <p class="lg:text-lg md:text-lg sm:text-lg text-md  font-[200] lg:text-right md:text-right text-left mt-4 text-gray-300">At NIT Rourkela, I pursued my Master's in Life Sciences from 2021 to 2023, graduating with a  CGPA of 9.36. During the summer of 2022, I undertook a two-month research internship at the CSIR-Centre for Cellular and Molecular Biology (CCMB) in Hyderabad, under the mentorship of Dr. Mohammed Idris. This internship provided me with hands-on experience in molecular biology techniques and deepened my understanding of developmental processes. For my Master's dissertation, I worked under the guidance of Dr. Bibekanand Mallick at NIT Rourkela. My research focused on investigating the role of small non-coding RNAs in cancer treatment, aiming to elucidate their potential as therapeutic agents in oncology. In 2022, I once again qualified for GATE-XL and got admission to IIT Roorkee as a Ph.D. student, which I commenced in 2023. My doctoral research is on the structural and functional aspects of cardiac myosin-binding protein-C, a crucial sarcomeric regulatory protein. This research holds significant implications for understanding cardiac muscle physiology and potential therapeutic interventions for cardiac diseases. </p>
            </div>
            <div class="flex flex-col items-start">
                <img src="{{asset('assets/images/saloni.jpg')}}" class="lg:h-96 md:h-96 sm:h-72 h-64 w-auto rounded-[3px]" alt="">
                <span class="text-gray-200 lg:text-4xl md:text-3xl sm:text-3xl text-3xl font-semibold text-center mt-4">Saloni Garg</span>
                <span class="lg:text-lg md:text-lg sm:text-lg text-md font-[500] text-gray-300">PhD Student</span>

                <ul class="mt-4">
                    <li class="font-[200] text-gray-300"><strong>•	GAT-B: </strong> Secured an All India Rank (AIR) of 25.</li>
                    <li class="font-[200] text-gray-300"><strong>•	PGIMER Biochemistry Entrance:  </strong> Achieved AIR 8.</li>
                    <li class="font-[200] text-gray-300"><strong>•	TIFR-JGEEBILS:  </strong>Qualified successfully.</li>
                    <li class="font-[200] text-gray-300"><strong>•	GATE-XL:  </strong> Obtained AIR 588.</li>
                    <li class="font-[200] text-gray-300"><strong>•	GATE-BT: </strong> Secured AIR 1195.</li>
                    <li class="font-[200] text-gray-300"><strong>•	IIT-JAM:  </strong>Achieved AIR 331, facilitating my admission into the Master of Science program at the National Institute of Technology (NIT), Rourkela.</li>
                </ul>
            </div>

        </div>

    </div>

    <!-- rohit -->
    <div class="banner py-8 px-2 bg-white">
        <div class="max-w-[1200px] mx-auto grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6">
            <div class="flex flex-col lg:items-end md:items-end items-start">
                <img src="{{asset('assets/images/rohit.jpg')}}" class="lg:h-72 md:h-72 sm:h-72 h-64 w-auto rounded-[3px]" alt="">
                <span class="text-primary lg:text-4xl md:text-3xl sm:text-3xl text-3xl font-semibold text-center mt-4">Rohit Singh</span>
                <span class="lg:text-lg md:text-lg sm:text-lg text-md font-[500] text-black">PhD Student</span>
            </div>
            <div class="w-full flex flex-col">
                <p class="lg:text-lg md:text-lg sm:text-lg text-md  font-[200]">I obtained my Bachelor's degree in Zoology, Botany, and Chemistry from Kumaon University, Almora, and my Master's degree in Zoology from SSJ University, Almora. During my Master's, I worked on identifying and evaluating potential enzyme inhibitors through in vivo and silico studies.</p>
                <p class="lg:text-lg md:text-lg sm:text-lg text-md  font-[200] mt-4">I qualified for the CSIR-UGC NET Junior Research Fellowship exam with an All-India Rank of 51 and joined Dr. Prince Tiwari’s lab at IIT Roorkee as a researcher in February  2024. My research focuses on the biophysical and structural aspects of M-band proteins in the sarcomere.  </p>
                <p class="lg:text-lg md:text-lg sm:text-lg text-md  font-[200] mt-4">Outside the lab, I enjoy watching movies and playing tennis.  </p>
            </div>
        </div>

    </div>

    <!--paushali -->
    <div class="banner py-8 px-2 bg-primary">
        <div class="max-w-[1200px] mx-auto lg:grid md:grid flex flex-col-reverse lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6">
            <div class="w-full flex flex-col lg:items-end md:items-end items-start">
                <p class="lg:text-lg md:text-lg sm:text-lg text-md  font-[200] lg:text-right md:text-right text-left text-gray-300">I obtained my bachelor's degree (B. Pharm.) from Jadavpur University, Kolkata (2014-2018). While doing my bachelor’s, I had the opportunity to learn about molecular biology techniques like cloning. I found myself intrigued by this field of biology, so I moved on to pursue my master’s degree (M.S.) from the National Institute of Pharmaceutical Education and Research, Mohali, majoring in biotechnology. There I was introduced to molecular biology and studied mycobacterium proteins using biophysical methods. Equipped with this knowledge, I decided to join the lab as a PhD research scholar in the year 2022, where I am currently working in the field of structural biology. My interests lie in studying the structure and intermolecular interactions between sarcomeric proteins using biophysical methods and CryoEM. During my free time, I enjoy painting, digital art and writing on movies and television.</p>
            </div>
            <div class="flex flex-col items-start">
                <img src="{{asset('assets/images/paushali.jpg')}}" class="lg:h-96 md:h-96 sm:h-72 h-64 w-auto rounded-[3px]" alt="">
                <span class="text-gray-200 lg:text-4xl md:text-3xl sm:text-3xl text-3xl font-semibold text-center mt-4">Poushali Mitra</span>
                <span class="lg:text-lg md:text-lg sm:text-lg text-md font-[500] text-gray-300">PhD Student</span>
            </div>

        </div>

    </div>

    <!-- kaushaki -->
    <div class="banner py-8 px-2 bg-white">
        <div class="max-w-[1200px] mx-auto grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6">
            <div class="flex flex-col lg:items-end md:items-end items-start">
                <img src="{{asset('assets/images/Kaushiki_Photo.jpg')}}" class="lg:h-72 md:h-72 sm:h-72 h-64 w-auto rounded-[3px]" alt="">
                <span class="text-primary lg:text-4xl md:text-3xl sm:text-3xl text-3xl font-semibold text-center mt-4">Kaushiki Tiwari </span>
                <span class="lg:text-lg md:text-lg sm:text-lg text-md font-[500] text-black">PhD Student</span>
            </div>
            <div class="w-full flex flex-col">
                <p class="lg:text-lg md:text-lg sm:text-lg text-md  font-[200]">I received my bachelor’s degree in microbiology from the University of Delhi (2017-2020). During my undergraduate studies, I completed an internship at the Dr. Ram Manohar Lohia (RML) Institute of Medical Sciences, Lucknow. In 2020, I qualified for GAT-B and subsequently pursued a master’s degree in biotechnology at the University of Mysore (2020-2022). Throughout my academic journey, I developed a strong interest in structural biology and protein biochemistry. To further explore this field, I joined the Molecular Reproduction and Developmental Genetics (MRDG) lab at IISc Bangalore for my dissertation, where I gained valuable research experience.</p>
                <p class="lg:text-lg md:text-lg sm:text-lg text-md  font-[200] mt-4">In 2023, I qualified for GATE BT and joined my current lab as a PhD student, where I am working on the structural and functional aspects of cardiac myosin-binding protein-C (cMyBP-C), a sarcomeric regulatory protein. </p>
                <p class="lg:text-lg md:text-lg sm:text-lg text-md  font-[200] mt-4">Outside the lab, I enjoy playing badminton, cooking and watching movies.  </p>
            </div>
        </div>

    </div>


    <div class="py-12 px-2 flex flex-col items-center bg-gray-200">

        <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6">
            <div class="flex flex-col lg:items-end md:items-end items-start">
                <span class="text-primary lg:text-4xl md:text-3xl sm:text-3xl text-3xl font-semibold text-center">Other Members</span>
                <div class="max-w-[800px] flex flex-col lg:items-end md:items-end items-start mt-4" >
                    <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">
                        <strong class="lg:text-lg md:text-lg sm:text-lg text-md">Mahendra Dudi</strong>: MSc thesis student
                    </p>
                    <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">
                        <strong class="lg:text-lg md:text-lg sm:text-lg text-md">Rajshekhar Yadav</strong>: B.Tech Project student
                    </p>
                    <p class="font-[200]  lg:text-md md:text-md sm:text-md text-sm text-center mt-4">
                        <strong class="lg:text-lg md:text-lg sm:text-lg text-md">Ashish Gautam</strong>: M.tech Project student
                    </p>

                </div>
            </div>
            <div>
                <span class="text-primary lg:text-4xl md:text-3xl sm:text-3xl text-3xl font-semibold text-center">Past Members</span>
                <div class="max-w-[400px]">
                    <table class="w-full mt-8">
                        <tr>
                            <td class="px-2">1</td>
                            <td class="px-2">Alka Kumari </td>
                            <td class="px-2">B.Tech project </td>
                            <td class="px-2">2024</td>
                        </tr>
                        <tr>
                            <td class="px-2">2</td>
                            <td class="px-2">Abhishek Jha  </td>
                            <td class="px-2">MSc- thesis</td>
                            <td class="px-2">2024</td>
                        </tr>
                        <tr>
                            <td class="px-2">3</td>
                            <td class="px-2">Shaleen Singh  </td>
                            <td class="px-2">B.Tech project </td>
                            <td class="px-2">2023</td>
                        </tr>
                        <tr>
                            <td class="px-2">4</td>
                            <td class="px-2">Nisha Dhanda </td>
                            <td class="px-2">MSc thesis</td>
                            <td class="px-2">2023</td>
                        </tr>



                    </table>

                </div>
            </div>
        </div>

    </div>





@endsection
