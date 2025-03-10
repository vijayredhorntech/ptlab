<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dr. Prince Tiwari Lab</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/smallLogo.jpg')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <style>
        ::-webkit-scrollbar {
            width: 2px;
            height: 2px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #001A6E;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }


        input[type="date"]::-webkit-datetime-edit {
            color: #172432b3; /* Change placeholder text color */
        }
        input[type="date"]::-webkit-calendar-picker-indicator {
            opacity: 0;
        }


        select {
            -webkit-appearance: none !important; /* Hides the arrow in WebKit-based browsers (Chrome, Safari, Edge) */
            -moz-appearance: none !important;    /* Hides the arrow in Firefox */
            appearance: none !important;         /* Standard property */
            background: white !important ;
            color: rgba(75, 85, 99, 0.7);/* Removes background if needed */
        }
        select option {
            color: rgba(75, 85, 99, 0.9); /* Match placeholder text */
            background-color: #ffffff; /* Ensure options have a white background */
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#001A6E',
                        secondary: '#074799',
                        primaryLight: '#E1FFBB',
                        secondaryLight: '#009990',

                        white: '#FFFFFF',
                        black: '#000000',
                        danger: '#FF0000',
                        success: '#28a745',
                        warning: '#FFA500',
                    },
                },
            },
        }
    </script>

</head>
<body class="bg-gray-200 relative"style="font-family: 'Public Sans', serif;">
<header class="mt-4 pb-2 border-b-[1px] border-b-gray-600">
    <div class="w-full lg:px-8 md:px-4 px-2 flex items-center gap-4 flex justify-between">
        <img src="{{asset('assets/images/logo.png')}}" class="lg:h-20 md:h-20 sm:h-16 h-16 w-auto" alt="">

        <i onclick="document.getElementById('navLinks').classList.toggle('hidden')" class="fa fa-bars text-2xl text-primary lg:hidden md:hidden sm:hidden block"></i>
    </div>

    <div class="flex flex-col mt-4">

        <div id="navLinks" class="w-full lg:px-8 md:px-4 px-2 mt-4 lg:flex md:flex sm:flex flex hidden  gap-4 lg:flex-row md:flex-row sm:flex-row flex-col ">
            <a href="{{route('home')}}" class="text-black text-md font-semibold {{Route::currentRouteName()==='home'?'bg-primary text-white':''}}  px-4 py-0.5 rounded-[3px] hover:text-white hover:bg-primary transition ease-in duration-2000">Home</a>
            <a href="{{route('team')}}" class="text-black text-md font-semibold {{Route::currentRouteName()==='team'?'bg-primary text-white':''}}  px-4 py-0.5 rounded-[3px] hover:text-white hover:bg-primary transition ease-in duration-2000">Team</a>
            <a href="{{route('publications')}}" class="text-black text-md font-semibold {{Route::currentRouteName()==='publications'?'bg-primary text-white':''}} px-4 py-0.5 rounded-[3px] hover:text-white hover:bg-primary transition ease-in duration-2000">Publications</a>
            <a href="{{route('gallery')}}" class="text-black text-md font-semibold {{Route::currentRouteName()==='gallery'?'bg-primary text-white':''}}  px-4 py-0.5 rounded-[3px] hover:text-white hover:bg-primary transition ease-in duration-2000">Gallery</a>
            <a href="{{route('contact')}}" class="text-black text-md font-semibold {{Route::currentRouteName()==='contact'?'bg-primary text-white':''}}  px-4 py-0.5 rounded-[3px] hover:text-white hover:bg-primary transition ease-in duration-2000">Contact</a>
        </div>
    </div>

</header>

@yield('content')
<div class="p-2 flex justify-evenly flex-wrap gap-4 bg-primary">
    <div>
        <p class="font-[200]  lg:text-lg md:text-lg sm:text-lg text-md text-center mt-4 text-gray-200">© 2025 by <a href="{{route('home')}}" class="text-white font-bold underline">PT Lab</a></p>
    </div>
    <div>
        <p class="font-[200]  lg:text-lg md:text-lg sm:text-lg text-md text-center mt-4 text-gray-200">© 2025 by <a href="https://himsoftsolution.com" class="text-white font-bold underline">Him Soft Solution</a></p>
    </div>
</div>

</body>
</html>
