<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>happy-home</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <!-- google font "Plus Jakarta Sans" cdn for english-->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- google font "Plus Jakarta Sans" cdn for English-->
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">


  <!-- taiwind css -->
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">

  <!-- icon -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

  <!-- animate aos cdn -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <style type="text/css">

  *{
    font-family: 'Plus Jakarta Sans', sans-serif;
    line-height: initial;
    }
    .bn{
      font-family: 'Baloo Da 2', cursive;

    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }
    input[type=number] {
    -moz-appearance: textfield;
    }

    ::-webkit-scrollbar {
    width: 5px;
    }

    ::-webkit-scrollbar-track {
      background: #f4f9ff;
    }

    ::-webkit-scrollbar-thumb {
      background: #d5e0ec;
      border-radius: 50px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #bac4d0;
    }
 </style>

</head>

<body class="lg:bg-[#f4f9ff] lg:h-screen lg:flex lg:justify-center lg:items-center">
  <div class="relative lg:overflow-hidden mx-auto bg-white p-4 lg:min-h-[770px] lg:w-[380px] lg:rounded-3xl lg:border-[6px] lg:border-[#f4f9ff] lg:p-6 lg:shadow-[0_20px_50px_-20px_rgba(0,26,130,0.21)]">
    <div class="mb-12 flex h-10 justify-between">
      <ion-icon name="chevron-back-outline" class="tran h-7 w-7 cursor-pointer rounded-full bg-[#F8F8FB] p-2 text-[#8A94A6] hover:ring-1 hover:ring-slate-400"></ion-icon>


      <a href="#" class="tran flex items-center gap-3 rounded-full bg-[#F8F8FB] px-4 py-2 hover:bg-red-50 hover:text-red-500 hover:ring-1 group hover:ring-red-500 text-sm text-[#8A94A6]">Logout <ion-icon class="text-[#595F84] group-hover:text-red-500 text-lg" name="log-out-outline"></ion-icon></a>
    </div>

    <div class="mb-8 flex items-center justify-between">
      <div class="">
        <h1 class="text-xl font-semibold text-[#222950] mb-1">{{ Auth::user()->name }}</h1>
        <span class="text-[#8A94A6]">Sales officer</span>
      </div>
      <img class="h-14 w-14 rounded-2xl bg-slate-300 object-cover" src="{{ asset('storage/'.Auth::user()->sr->picture) }}" alt="" />
    </div>
    <div class="grid grid-cols-2 gap-5 pb-20 lg:max-h-[500px] lg:overflow-scroll p-1">
      <a href="#" class="home-link tran">
        <img class="mb-3 w-14" src="images/icon/Scan.svg" alt="" />
        <h3 class="font-bold text-[#363636] mb-1">Scan</h3>
        <span class="text-sm sm:text-[12px] text-[#8A94A6]">Scan Reatailer</span>
      </a>
      <a href="#" class="home-link tran">
        <img class="mb-3 w-14" src="images/icon/Dashboard.svg" alt="" />
        <h3 class="font-bold text-[#363636] mb-1">Dashboard</h3>
        <span class="text-sm sm:text-[12px] text-[#8A94A6]">information</span>
      </a>
      <a href="{{ route('front.sr.retailer') }}" class="home-link tran">
        <img class="mb-3 w-14" src="images/icon/Reatailer.svg" alt="" />
        <h3 class="font-bold text-[#363636] mb-1">Reatailer</h3>
        <span class="text-sm sm:text-[12px] text-[#8A94A6]">Reatail Store</span>
      </a>
      <a href="{{ route('front.sr.summary') }}" class="home-link tran">
        <img class="mb-3 w-14" src="images/icon/Summary.svg" alt="" />
        <h3 class="font-bold text-[#363636] mb-1">Summary</h3>
        <span class="text-sm sm:text-[12px] text-[#8A94A6]">Your Order info</span>
      </a>
      <a href="#" class="home-link tran">
        <img class="mb-3 w-14" src="images/icon/Inventory.svg" alt="" />
        <h3 class="font-bold text-[#363636] mb-1">Inventory</h3>
        <span class="text-sm sm:text-[12px] text-[#8A94A6]">Your Stock info</span>
      </a>
      <a href="{{ route('front.sr.route') }}" class="home-link tran">
        <img class="mb-3 w-14" src="images/icon/Route.svg" alt="" />
        <h3 class="font-bold text-[#363636] mb-1">Route</h3>
        <span class="text-sm sm:text-[12px] text-[#8A94A6]">Your Route</span>
      </a>

    </div>

    <!-- nav -->

    <div class="flex fixed lg:absolute bottom-0 bg-white w-full left-0 px-10 justify-between py-4 rounded-t-3xl shadow-[0_-5px_50px_0px_rgba(0,45,94,0.12)]">
      <a href="#" class="w-[50px] h-[50px] rounded-xl bg-[#F7FAFE] flex justify-center items-center group hover:bg-blue-500 tran">
        <svg class="stroke-[#0472ED] w-6 stroke-[1.5px] tran group-hover:stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z" ></path> <path d="M9 16C9.85038 16.6303 10.8846 17 12 17C13.1154 17 14.1496 16.6303 15 16" stroke-linecap="round"></path> </g></svg>
      </a>
      <a href="#" class="w-[50px] h-[50px] rounded-xl bg-[#F7FAFE] flex justify-center items-center group hover:bg-blue-500 tran">
        <svg class="stroke-[#4E5D78] w-6 stroke-[1.5px] tran group-hover:stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 22C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 18.7712 2 15" stroke-width="1.5" stroke-linecap="round"></path> <path d="M22 15C22 18.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22" stroke-width="1.5" stroke-linecap="round"></path> <path d="M14 2C17.7712 2 19.6569 2 20.8284 3.17157C22 4.34315 22 5.22876 22 9" stroke-width="1.5" stroke-linecap="round"></path> <path d="M10 2C6.22876 2 4.34315 2 3.17157 3.17157C2 4.34315 2 5.22876 2 9" stroke-width="1.5" stroke-linecap="round"></path> <path d="M2 12H22" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
      </a>
      <a href="reatailer.html" class="w-[50px] h-[50px] rounded-xl bg-[#F7FAFE] flex justify-center items-center group hover:bg-blue-500 tran">
        <svg class="stroke-[#4E5D78] w-6 stroke-[1.5px] tran group-hover:stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="6" r="4" stroke-width="1.5"></circle> <path d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" stroke-width="1.5"></path> </g></svg>
      </a>
      <a href="#" class="w-[50px] h-[50px] rounded-xl bg-[#F7FAFE] flex justify-center items-center group hover:bg-blue-500 tran relative">
        <svg class="stroke-[#4E5D78] w-6 stroke-[1.5px] tran group-hover:stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3.74181 18.5545C4.94143 20 7.17414 20 11.6395 20H12.3607C16.8261 20 19.0589 20 20.2585 18.5545M3.74181 18.5545C2.54219 17.1091 2.95365 14.9146 3.77657 10.5257C4.36179 7.40452 4.65441 5.84393 5.7653 4.92196M3.74181 18.5545C3.74181 18.5545 3.74181 18.5545 3.74181 18.5545ZM20.2585 18.5545C21.4581 17.1091 21.0466 14.9146 20.2237 10.5257C19.6385 7.40452 19.3459 5.84393 18.235 4.92196M20.2585 18.5545C20.2585 18.5545 20.2585 18.5545 20.2585 18.5545ZM18.235 4.92196C17.1241 4 15.5363 4 12.3607 4H11.6395C8.46398 4 6.8762 4 5.7653 4.92196M18.235 4.92196C18.235 4.92196 18.235 4.92196 18.235 4.92196ZM5.7653 4.92196C5.7653 4.92196 5.7653 4.92196 5.7653 4.92196Z" stroke-width="1.5"></path> <path d="M9.1709 8C9.58273 9.16519 10.694 10 12.0002 10C13.3064 10 14.4177 9.16519 14.8295 8" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
        <span class="absolute text-xs font-medium bg-blue-500 px-1 rounded-full top-0 right-0 text-white hidden">50</span>
      </a>

    </div>

  </div>




<script src="{{ asset('front/script.js') }}"></script>

</body>

</html>
