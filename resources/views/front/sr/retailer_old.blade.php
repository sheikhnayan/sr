<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>happy-Reatailer</title>

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
    .popup.openPopup{
  display: flex;
  animation: popup .3s ease;
}
@keyframes popup {
  0%{ opacity: 0;}
  100%{ opacity: 1;}
}
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  /* SVG icon */
  background-image: url("images/icon/arrow-down.svg");
  background-size: 15px;
  background-position: calc(100% - 1.2em) center;
  background-repeat: no-repeat;
}
select::-ms-expand {
  display: none;
}
@media screen and (max-width : 380px){
  .happy-popup{
    transform: scale(0.8);
}
}


 </style>

</head>

<body class="lg:bg-[#f4f9ff] lg:h-screen lg:flex lg:justify-center lg:items-center">

    <div class="relative mx-auto bg-white p-4 lg:min-h-[770px] lg:w-[380px] lg:overflow-hidden lg:rounded-3xl lg:border-[6px] lg:border-[#f4f9ff] lg:p-6 lg:shadow-[0_20px_50px_-20px_rgba(0,26,130,0.21)]">
        <div class="mb-8 flex h-11 justify-between">
          <a href="home.html"><ion-icon name="chevron-back-outline" class="tran h-7 w-7 cursor-pointer rounded-full bg-[#F8F8FB] p-2 text-[#8A94A6] hover:ring-1 hover:ring-slate-400"></ion-icon></a>

          <div class="relative min-w-[250px]">
            <input type="search" name="search" class="tran w-full h-full rounded-full bg-[#F2F3F9] px-5 text-[#8A94A6] outline-none focus:ring-2" placeholder="Search Reatailer" />
            <ion-icon class="absolute right-3 top-3 text-xl text-[#595F84]" name="search-outline"></ion-icon>
          </div>
          <!-- <ion-icon name="options-outline" class="tran h-7 w-7 cursor-pointer rounded-full bg-[#F8F8FB] p-2 text-blue-600 hover:ring-1"></ion-icon> -->
        </div>

        <div class="relative flex h-24 justify-center">
          <img class="tran h-full w-full rounded-xl object-cover hover:scale-95" src="{{ asset('front/images/my-route.png') }}" alt="" />
          <div onclick="myRoute()" class="tran absolute -bottom-6 z-10 flex w-[90%] justify-between items-center rounded-xl border border-[#2E318514] bg-white px-4 py-3 cursor-pointer shadow-lg shadow-blue-800/5 hover:shadow-blue-800/10">
            <h3 class="text-[15px] text-[#595F84] bn font-medium">আমার রুট</h3>
            <ion-icon class="w-5 text-[#C3CAD9]" name="chevron-down-outline"></ion-icon>
          </div>
        </div>


    <!-- route list popup -->
    <div class="myRoute popup_bg popup !z-[100] overflow-auto">

      <div class="relative mt-20 rounded-xl bg-white p-5 min-w-[315px] md:min-w-[580px]">

        <ion-icon onclick="closeP()" class="absolute -top-16 right-0 h-6 w-6 text-blue-600 p-2 bg-white overflow-hidden rounded-full cursor-pointer" name="close-outline"></ion-icon>

        <div class="mb-8 flex items-center justify-between">
          <h1 class="bn text-[18px] font-semibold text-[#595F84]">আমার রুট</h1>
          <a href="#"><button class="tran rounded-full bg-[#E6F8F5] px-3 py-1 text-sm font-medium text-[#05B59B] hover:opacity-80 bn">Add New</button></a>
        </div>
        <div class="">
          <ul class="flex flex-col gap-2">
            <li class="flex justify-between items-center rounded-lg bg-[#EBF5FF] px-3 py-2">
              <label class="flex items-center gap-3">
                <input type="checkbox" name="store" id="store" checked/>
                <span class="font-medium text-[#595F84]">1 -</span>
                <p class="font-medium text-[#595F84] bn">ফরিদপুর বাজার</p>
              </label>
              <span class="flex items-center justify-center rounded-full bg-[#1F84FF] px-2 h-5 text-sm text-white">6</span>
            </li>
            <li class="flex justify-between items-center rounded-lg px-3 py-2">
              <label class="flex items-center gap-3">
                <input type="checkbox" name="store" id="store" />
                <span class="font-medium text-[#595F84]">2 -</span>
                <p class="font-medium text-[#595F84] bn">ফরিদপুর বাজার</p>
              </label>
              <span class="flex items-center justify-center rounded-full px-2 h-5 text-sm text-[#595F84]">6</span>
            </li>
            <li class="flex justify-between items-center rounded-lg px-3 py-2">
              <label class="flex items-center gap-3">
                <input type="checkbox" name="store" id="store" />
                <span class="font-medium text-[#595F84]">3 -</span>
                <p class="font-medium text-[#595F84] bn">ফরিদপুর বাজার</p>
              </label>
              <span class="flex items-center justify-center rounded-full px-2 h-5 text-sm text-[#595F84]">6</span>
            </li>
            <li class="flex justify-between items-center rounded-lg px-3 py-2">
              <label class="flex items-center gap-3">
                <input type="checkbox" name="store" id="store" />
                <span class="font-medium text-[#595F84]">4 -</span>
                <p class="font-medium text-[#595F84] bn">ফরিদপুর বাজার</p>
              </label>
              <span class="flex items-center justify-center rounded-full px-2 h-5 text-sm text-[#595F84]">6</span>
            </li>
            <li class="flex justify-between items-center rounded-lg px-3 py-2">
              <label class="flex items-center gap-3">
                <input type="checkbox" name="store" id="store" />
                <span class="font-medium text-[#595F84]">5 -</span>
                <p class="font-medium text-[#595F84] bn">ফরিদপুর বাজার</p>
              </label>
              <span class="flex items-center justify-center rounded-full px-2 h-5 text-sm text-[#595F84]">6</span>
            </li>
            <li class="flex justify-between items-center rounded-lg px-3 py-2">
              <label class="flex items-center gap-3">
                <input type="checkbox" name="store" id="store" />
                <span class="font-medium text-[#595F84]">6 -</span>
                <p class="font-medium text-[#595F84] bn">ফরিদপুর বাজার</p>
              </label>
              <span class="flex items-center justify-center rounded-full px-2 h-5 text-sm text-[#595F84]">6</span>
            </li>


          </ul>
        </div>

      </div>

    </div>

        <div class="flex flex-col gap-8 p-1 pb-20 pt-14 lg:max-h-[500px] lg:overflow-auto">

          <div class="grid grid-cols-2 gap-4">
            <a href="product.html" class="reatailer-info tran">
              <div class="relative mb-4 flex justify-center">
                <img class="mb-3 h-[70px] w-[70px] rounded-xl object-cover" src="{{ asset('front/images/user/user (1).png') }}" alt="" />
                <span class="rea-serial">#01</span>
              </div>
              <h3 class="mb-1 text-[14px] font-semibold text-[#222950] bn">মোহাম্মদ নাজমুল আলী</h3>
              <p class="mb-1 text-[14px] font-medium text-blue-500 bn">নাজমুল ট্রেডার্স</p>
              <span class="text-[13px] text-[#3c424d] bn">কাকড়ামারি বাজার</span>
            </a>
            <a href="product.html" class="reatailer-info tran">
              <div class="relative mb-4 flex justify-center">
                <img class="mb-3 h-[70px] w-[70px] rounded-xl object-cover" src="{{ asset('front/images/user/user (2).png') }}" alt="" />
                <span class="rea-serial">#01</span>
              </div>
              <h3 class="mb-1 text-[14px] font-semibold text-[#222950] bn">মোহাম্মদ নাজমুল আলী</h3>
              <p class="mb-1 text-[14px] font-medium text-blue-500 bn">নাজমুল ট্রেডার্স</p>
              <span class="text-[13px] text-[#3c424d] bn">কাকড়ামারি বাজার</span>
            </a>
            <a href="product.html" class="reatailer-info tran">
              <div class="relative mb-4 flex justify-center">
                <img class="mb-3 h-[70px] w-[70px] rounded-xl object-cover" src="{{ asset('front/images/user/user (3).png') }}" alt="" />
                <span class="rea-serial">#01</span>
              </div>
              <h3 class="mb-1 text-[14px] font-semibold text-[#222950] bn">মোহাম্মদ নাজমুল আলী</h3>
              <p class="mb-1 text-[14px] font-medium text-blue-500 bn">নাজমুল ট্রেডার্স</p>
              <span class="text-[13px] text-[#3c424d] bn">কাকড়ামারি বাজার</span>
            </a>
            <a href="product.html" class="reatailer-info tran">
              <div class="relative mb-4 flex justify-center">
                <img class="mb-3 h-[70px] w-[70px] rounded-xl object-cover" src="{{ asset('front/images/user/user (4).png') }}" alt="" />
                <span class="rea-serial">#01</span>
              </div>
              <h3 class="mb-1 text-[14px] font-semibold text-[#222950] bn">মোহাম্মদ নাজমুল আলী</h3>
              <p class="mb-1 text-[14px] font-medium text-blue-500 bn">নাজমুল ট্রেডার্স</p>
              <span class="text-[13px] text-[#3c424d] bn">কাকড়ামারি বাজার</span>
            </a>
          </div>

            <!-- location name -->
        <div class="flex justify-center items-center bg-[#F7FAFE] py-2 rounded-xl gap-2">

          <ion-icon class="w-6 text-[#3796FF]" name="location"></ion-icon>
          <h1 class="text-[#222950] font-semibold bn">ক্ষমতার মোড়</h1>
        </div>

          <div class="grid grid-cols-2 gap-4">
            <a href="product.html" class="reatailer-info tran">
              <div class="relative mb-4 flex justify-center">
                <img class="mb-3 h-[70px] w-[70px] rounded-xl object-cover" src="{{ asset('front/images/user/user (5).png') }}" alt="" />
                <span class="rea-serial">#01</span>
              </div>
              <h3 class="mb-1 text-[14px] font-semibold text-[#222950] bn">মোহাম্মদ নাজমুল আলী</h3>
              <p class="mb-1 text-[14px] font-medium text-blue-500 bn">নাজমুল ট্রেডার্স</p>
              <span class="text-[13px] text-[#3c424d] bn">কাকড়ামারি বাজার</span>
            </a>
            <a href="product.html" class="reatailer-info tran">
              <div class="relative mb-4 flex justify-center">
                <img class="mb-3 h-[70px] w-[70px] rounded-xl object-cover" src="{{ asset('front/images/user/user (6).png') }}" alt="" />
                <span class="rea-serial">#01</span>
              </div>
              <h3 class="mb-1 text-[14px] font-semibold text-[#222950] bn">মোহাম্মদ নাজমুল আলী</h3>
              <p class="mb-1 text-[14px] font-medium text-blue-500 bn">নাজমুল ট্রেডার্স</p>
              <span class="text-[13px] text-[#3c424d] bn">কাকড়ামারি বাজার</span>
            </a>
          </div>
        </div>


        <!-- add new icon -->
        <div onclick="addreatailer()" class="fixed lg:absolute bottom-[100px] z-20 right-10 w-[50px] h-[50px] rounded-full bg-blue-500 tran hover:bg-blue-600 cursor-pointer flex justify-center items-center ring-2 ring-white shadow-md">
          <ion-icon class="text-3xl text-white" name="add-outline"></ion-icon>
        </div>

        <!-- add reatailer popup -->
        <div class="addreatailer popup_bg popup !z-[100]">

          <div class="relative mt-20 min-w-[315px] rounded-xl bg-white p-5 md:min-w-[580px]">
            <ion-icon onclick="closeReatailer()" class="absolute -top-16 right-0 h-6 w-6 cursor-pointer overflow-hidden rounded-full bg-white p-2 text-blue-600" name="close-outline"></ion-icon>

            <div class="mb-8 flex items-center justify-between">
              <h1 class="bn text-[18px] font-semibold text-[#595F84]">Add New Retailer</h1>
            </div>

            <form action="" class="flex flex-col gap-4">
              <input id="name" name="name" type="number" placeholder="Phone Number" class="reatailer-input" />
              <select name="union" id="union" class="reatailer-input text-[#222950]">
                <option value="">Select Union</option>
                <option value="union">Union Name</option>
                <option value="union">Union Name</option>
                <option value="union">Union Name</option>
                <option value="union">Union Name</option>
              </select>
              <select name="bazar" id="bazar" class="reatailer-input text-[#222950]">
                <option value="">Select Bazar</option>
                <option value="bazar">Bazar Name</option>
                <option value="bazar">Bazar Name</option>
                <option value="bazar">Bazar Name</option>
                <option value="bazar">Bazar Name</option>
              </select>
              <input id="name" name="name" type="text" autocomplete="name" placeholder="Reatailer Name" class="reatailer-input" />
              <input id="name" name="name" type="text" placeholder="Shop Name" class="reatailer-input" />
              <input id="name" name="name" type="text" placeholder="Area" class="reatailer-input" />
              <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-t from-[#0063FF] to-[#258AFF] font-semibold text-white transition-all duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 active:bg-blue-700">Add Reatailer</button>
            </form>
          </div>

        </div>



        <!-- nav -->

        <div class="fixed bottom-0 left-0 flex w-full justify-between rounded-t-3xl bg-white px-10 py-4 shadow-[0_-5px_50px_0px_rgba(0,45,94,0.12)] lg:absolute">
          <a href="home.html" class="tran group flex h-[50px] w-[50px] items-center justify-center rounded-xl bg-[#F7FAFE] hover:bg-blue-500">
            <svg class="tran w-6 stroke-[#4E5D78] stroke-[1.5px] group-hover:stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"></path>
                <path d="M9 16C9.85038 16.6303 10.8846 17 12 17C13.1154 17 14.1496 16.6303 15 16" stroke-linecap="round"></path>
              </g>
            </svg>
          </a>
          <a href="#" class="tran group flex h-[50px] w-[50px] items-center justify-center rounded-xl bg-[#F7FAFE] hover:bg-blue-500">
            <svg class="tran w-6 stroke-[#4E5D78] stroke-[1.5px] group-hover:stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M10 22C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 18.7712 2 15" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M22 15C22 18.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M14 2C17.7712 2 19.6569 2 20.8284 3.17157C22 4.34315 22 5.22876 22 9" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M10 2C6.22876 2 4.34315 2 3.17157 3.17157C2 4.34315 2 5.22876 2 9" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M2 12H22" stroke-width="1.5" stroke-linecap="round"></path>
              </g>
            </svg>
          </a>
          <a href="reatailer.html" class="tran group flex h-[50px] w-[50px] items-center justify-center rounded-xl bg-[#F7FAFE] hover:bg-blue-500">
            <svg class="tran w-6 stroke-[#0472ED] stroke-[1.5px] group-hover:stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <circle cx="12" cy="6" r="4" stroke-width="1.5"></circle>
                <path d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" stroke-width="1.5"></path>
              </g>
            </svg>
          </a>
          <a href="#" class="tran group flex h-[50px] w-[50px] items-center justify-center rounded-xl bg-[#F7FAFE] hover:bg-blue-500">
            <svg class="tran w-6 stroke-[#4E5D78] stroke-[1.5px] group-hover:stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M3.74181 18.5545C4.94143 20 7.17414 20 11.6395 20H12.3607C16.8261 20 19.0589 20 20.2585 18.5545M3.74181 18.5545C2.54219 17.1091 2.95365 14.9146 3.77657 10.5257C4.36179 7.40452 4.65441 5.84393 5.7653 4.92196M3.74181 18.5545C3.74181 18.5545 3.74181 18.5545 3.74181 18.5545ZM20.2585 18.5545C21.4581 17.1091 21.0466 14.9146 20.2237 10.5257C19.6385 7.40452 19.3459 5.84393 18.235 4.92196M20.2585 18.5545C20.2585 18.5545 20.2585 18.5545 20.2585 18.5545ZM18.235 4.92196C17.1241 4 15.5363 4 12.3607 4H11.6395C8.46398 4 6.8762 4 5.7653 4.92196M18.235 4.92196C18.235 4.92196 18.235 4.92196 18.235 4.92196ZM5.7653 4.92196C5.7653 4.92196 5.7653 4.92196 5.7653 4.92196Z" stroke-width="1.5"></path>
                <path d="M9.1709 8C9.58273 9.16519 10.694 10 12.0002 10C13.3064 10 14.4177 9.16519 14.8295 8" stroke-width="1.5" stroke-linecap="round"></path>
              </g>
            </svg>
          </a>
        </div>
      </div>



<!-- https://play.tailwindcss.com/NkiIxjfq4q -->
<script src="{{ asset('front/script.js') }}"></script>
<script>
  var myRoutee = document.querySelector(".myRoute");
  function myRoute(){
    myRoutee.classList.add("openPopup");
  }
  function closeP(){
    myRoutee.classList.remove("openPopup");
}

// addreatailer
  var reatailer = document.querySelector(".addreatailer");
  function addreatailer(){
    reatailer.classList.add("openPopup");
  }
  function closeReatailer(){
    reatailer.classList.remove("openPopup");
}
</script>

</body>

</html>
