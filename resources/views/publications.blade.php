@extends('layouts.layout')
@section('content')



    <div class="banner relative w-full lg:h-[300px] md:h-[200px] sm:h-[200px] h-[150px] bg-black bg-blend-darken flex justify-center items-center flex-col"
         style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('assets/images/banner.jpg') }}');
            background-size: cover;
            background-position: center;">
        <span class="text-white font-bold lg:text-5xl md:text-4xl sm:text-3xl text-2xl">PUBLICATIONS</span>
        <span class="text-gray-200 lg:text-xl md:text-lg sm:text-md text-sm lg:mt-2 md:mt-2 mt-1"><a href="{{route('home')}}" class="text-underline mr-2 underline">Home -</a> Publications</span>
    </div>

    <div class="py-12  px-2 flex flex-col  bg-white">
        <div class="max-w-[1200px] mx-auto">
            <div class="border-t-[4px] border-b-[4px] border-b-black/10 border-t-black/10 pr-4 py-0.5">
                <span class="text-primary lg:text-3xl md:text-2xl sm:text-2xl text-xl font-semibold text-center">List of Publications</span>
            </div>



            <div class=" border-b-[4px] border-b-black/10pr-4 py-0.5 w-max mt-4">
                <span class="text-primary lg:text-xl md:text-lg sm:text-lg text-md font-semibold text-center">2020</span>
            </div>
            <p class="font-medium text-justify text-black/80 lg:text-lg md:text-md sm:text-md text-sm mt-4">
                <strong class="font-bold">1. &nbsp &nbsp </strong>	Cryo-EM structure of the inhibited (10S) form of myosin II.
                Shixin Yang*, <strong class="font-bold"><u>Prince Tiwari</u></strong>*, Kyoung Hwan Lee, Osamu Sato, Mitsuo Ikebe, Raúl Padrón and Roger Craig. Nature volume 588, pages521–525 (2020)	<strong class="font-bold"><u>(IF 69.5)
                        *Equal contribution</u></strong>

            </p>
            <p class="font-medium text-justify text-black/80 lg:text-lg md:text-md sm:text-md text-sm mt-4">
                PDB entry: <strong class="font-bold">6XE9</strong> (Smooth muscle myosin).  <strong class="font-bold">Tiwari P</strong>., Padron R. Craig R. <strong class="font-bold">Nature (2020)</strong>
            </p>


            <div class=" border-b-[4px] border-b-black/10pr-4 py-0.5 w-max mt-4">
                <span class="text-primary lg:text-xl md:text-lg sm:text-lg text-md font-semibold text-center">2019</span>
            </div>
            <p class="font-medium text-justify text-black/80 lg:text-lg md:text-md sm:text-md text-sm mt-4">
                <strong class="font-bold">2. &nbsp &nbsp</strong>	Understanding anomalous mobility of proteins on SDS‐PAGE with special reference to the highly acidic extracellular domains of human E‐ and N‐cadherins.
                <strong class="font-bold"><u>Prince Tiwari</u></strong>, Pallavi Kaila, and Purnananda Guptasarma.
                <strong class="font-bold">Electrophoresis</strong> 2019, 40,1273–1281 <strong class="font-semibold">(IF 3.6)</strong>

            </p>
            <p class="font-medium text-justify text-black/80 lg:text-lg md:text-md sm:text-md text-sm mt-4">
                <strong class="font-bold">3. &nbsp &nbsp</strong>	N-terminal domain replacement changes an archaeal monoacylglycerol lipase into a triacylglycerol lipase.
                Surabhi Soni, Sneha S. Sathe, Rutuja R. Sheth, <strong class="font-bold">Prince Tiwari</strong>, Rajesh-Kumar N. Vadgama, Annamma Anil Odaneth, Arvind M. Lali & Sanjeev K. Chandrayan
                <strong class="font-semibold">Biotechnology for Biofuels</strong> (2019) 12:110   <strong class="font-bold">(IF 7.8)</strong>

            </p>


            <div class=" border-b-[4px] border-b-black/10pr-4 py-0.5 w-max mt-4">
                <span class="text-primary lg:text-xl md:text-lg sm:text-lg text-md font-semibold text-center">2018</span>
            </div>
            <p class="font-medium text-justify text-black/80 lg:text-lg md:text-md sm:text-md text-sm mt-4">
                <strong class="font-bold">4. &nbsp &nbsp</strong>  Structural-Mechanical and Biochemical Functions of Classical Cadherins at Cellular Junctions: A Review and Some Hypotheses.
                <strong class="font-bold">Prince Tiwari</strong>, Arpita Mrigwani, Harpreet Kaur, Pallavi Kaila, Rajendra Kumar, Purnananda Guptasarma.

            </p>
            <p class="font-medium text-black/80  lg:text-lg md:text-md sm:text-md text-sm text-justify">
                <i> Biochemical and Biophysical Roles of Cell Surface Molecules</i> (2018) pp 107-138, Advances in Experimental Medicine and Biology book series (AEMB, volume 1112) <strong class="font-bold">(IF 3.7)</strong>
            </p>
            <p class="font-medium text-justify text-black/80 lg:text-lg md:text-md sm:text-md text-sm mt-4">
                <strong class="font-bold">5. &nbsp &nbsp</strong>	Multiple thermostable enzyme hydrolases on magnetic nanoparticles: An immobilized enzyme-mediated approach to saccharification through simultaneous xylanase, cellulase and amylolytic glucanotransferase action.
            </p>
            <p class="font-medium text-black/80  lg:text-lg md:text-md sm:text-md text-sm text-justify">
                Arpana Kumari, Pallavi Kaila, <strong class="font-bold"> Prince Tiwari</strong>, Vishal Singh, Sunaina Kaul, Nitin Singhal, and Purnananda Guptasarma. <strong class="font-bold">Int J Biol Macromol</strong> 2018 :1650-1658.  <strong class="font-bold">(IF 8.0)</strong>
            </p>

        </div>
    </div>


@endsection
