<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Summary</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <!-- google font "Plus Jakarta Sans" cdn for english-->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- google font "Plus Jakarta Sans" cdn for English-->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- taiwind css -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="{{ asset('front/css/main.css') }}" />

    <!-- icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <style type="text/css">
      * {
        font-family: 'Plus Jakarta Sans', sans-serif;
        line-height: initial;
      }
      select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        /* SVG icon */
        background-image: url("images/icon/arrow-down.svg");
        background-size: 12px;
        background-position: calc(100% - 1em) center;
        background-repeat: no-repeat;
      }
      select::-ms-expand {
        display: none;
      }
      .bn {
        font-family: 'Baloo Da 2', cursive;

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
  <body class="lg:flex lg:h-screen lg:items-center lg:justify-center lg:bg-[#f4f9ff]">
    <div class="relative mx-auto bg-white p-4 lg:min-h-[770px] lg:w-[380px] lg:overflow-hidden lg:rounded-3xl lg:border-[6px] lg:border-[#f4f9ff] lg:p-6 lg:shadow-[0_20px_50px_-20px_rgba(0,26,130,0.21)]">
      <div class="mb-8 flex h-11 items-center justify-between">
        <a href="reatailer.html">
          <ion-icon name="chevron-back-outline" class="tran h-7 w-7 cursor-pointer rounded-full bg-[#F8F8FB] p-2 text-[#8A94A6] hover:ring-1 hover:ring-slate-400"> </ion-icon>
        </a>
    
        <h1 class="text-lg font-bold text-[#222950]">Order Summary</h1>
        <span class="w-7"></span>
      </div>
      <!-- summary -->
      <div class="mb-12 flex flex-col gap-5">
        <div class="flex items-center rounded-xl border border-[#2E318514] px-5 py-5 shadow-lg shadow-blue-900/5">
          <img class="mr-5 w-12 rounded-full" src="images/icon/summary-i-1.svg" alt="" />
          <div class="">
            <p class="mb-1 text-sm text-[#8A94A6]">Order Summary</p>
            <h1 class="text-2xl font-bold text-[#222950]">৳35000</h1>
          </div>
        </div>
        <div class="relative flex items-center rounded-xl border border-[#2E318514] px-5 py-5 shadow-lg shadow-blue-900/5">
          <img class="mr-5 w-12 rounded-full" src="images/icon/summary-i-2.svg" alt="" />
          <div class="">
            <p class="mb-1 text-sm text-[#8A94A6]">Order Summary</p>
            <h1 class="text-2xl font-bold text-[#222950]">৳300</h1>
          </div>
          <input class="absolute bottom-3 right-3 w-24 text-xs border outline-none" type="date" name="" id="" />
        </div>
      </div>
      <div class="">
        <div class="mb-10 flex flex-col">
          <h1 class="text-lg font-bold text-[#222950] mb-4">Summary History</h1>
          <ul class="flex gap-2">
            <li><a href="#" class="border border-blue-200 text-blue-500 px-3 py-2 rounded-full text-xs tran hover:border-blue-500 bg-blue-50 font-semibold">This Week</a></li>
            <li><a href="#" class="border border-[#F1F5F9] text-[#64748B] px-3 py-2 rounded-full text-xs tran hover:border-blue-500 font-semibold">This Month</a></li>
            <li><a href="#" class="border border-[#F1F5F9] text-[#64748B] px-3 py-2 rounded-full text-xs tran hover:border-blue-500 font-semibold">This Year</a></li>
          </ul>
        </div>
        <div class="flex justify-between items-center mb-8">
          <div class="">
            <p class="text-[#8A94A6] text-sm mb-2">Delivery</p>
            <h1 class="text-3xl font-bold">95% <span class="text-sm text-[#24D164]">+2,5%</span></h1>
          </div>
          <!-- chart -->
          <div class="">
            <img class="w-32" src="images/icon/chart.png" alt="" />
          </div>
        </div>
        <div class="grid grid-cols-3 gap-4">
          <div class="bg-[#DAF5EF] px-2 flex flex-col items-center text-center py-6 rounded-xl">
            <img class="w-12 mb-2" src="images/icon/order.svg" alt="" />
            <span class="text-sm">Order</span>
            <h1 class="text-xl font-bold">4000</h1>
          </div>
          <div class="bg-[#FFFDCF] px-2 flex flex-col items-center text-center py-6 rounded-xl">
            <img class="w-12 mb-2" src="images/icon/delivery.svg" alt="" />
            <span class="text-sm">Delivery</span>
            <h1 class="text-xl font-bold">4000</h1>
          </div>
          <div class="bg-[#F8FAFC] px-2 flex flex-col items-center text-center py-5 rounded-xl">
            <img class="w-12 mb-2" src="images/icon/co.svg" alt="" />
            <span class="text-sm">C/O</span>
            <h1 class="text-xl font-bold text-red-500">550</h1>
          </div>
        </div>
      </div>
    </div>
    

    <script src="{{ asset('front/script.js') }}"></script>
  </body>
</html>
