<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Complete Order</title>

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

    <!-- animate aos cdn -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style type="text/css">
      * {
          font-family: 'Plus Jakarta Sans', sans-serif;
          line-height: initial;
      }

      .bn {
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
      .complete-icon{
        animation: icon .6s ease;
      }
      @keyframes icon {
        0% {
          transform: rotate(180deg) scale(0);
        }

        100% {
            transform: rotate(0deg) scale(1);
        }
      }
    </style>
  </head>

  <body class="lg:flex lg:h-screen lg:items-center lg:justify-center lg:bg-[#f4f9ff]">
    <div class="mx-auto bg-white p-4 h-screen lg:h-auto lg:min-h-[770px] lg:w-[380px] lg:rounded-3xl lg:border-[6px] lg:border-[#f4f9ff] lg:p-6 lg:shadow-[0_20px_50px_-20px_rgba(0,26,130,0.21)]">
      <div class="flex flex-col  lg:h-[710px] justify-between h-full">
        <div class=""></div>
        <div class="flex flex-col items-center">
          <img class="w-20 mb-5 complete-icon animate-ping" src="images/complete.png" alt="" />
          <h1 class="font-bold text-lg mb-1 text-[#2568EF] bn">অভিনন্দন</h1>
          <span class="text-sm text-[#8A94A6] bn">আপনার অর্ডারটি সফলভাবে সম্পন্ন হয়েছে!</span>
        </div>
        <a href="reatailer.html"><button type="#" class="tran w-full rounded-xl bg-gradient-to-t from-[#0063FF] to-[#258AFF] py-3.5 font-semibold text-white focus:outline-none focus:ring focus:ring-blue-300 active:bg-blue-700">Back to Home</button></a>
      </div>
    </div>
    <script src="{{ asset('front/script.js') }}"></script>
  </body>
</html>
