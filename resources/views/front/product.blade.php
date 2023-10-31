<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product</title>

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

      .popup.openPopup {
        display: flex;
        animation: popup .3s ease;
      }
      .popup.cartPopup {
        display: flex;
        animation: cartpopup .3s ease;
      }

      @keyframes popup {
        0% {
          opacity: 0;
        }

        100% {
          opacity: 1;
        }
      }
      @keyframes cartpopup {
        0% {
          bottom: -800px;
          filter: blur(10px);
        }

        100% {
          bottom: 0;
          filter: blur(0);
        }
      }


      /* radio */
      [type="radio"]:checked,
[type="radio"]:not(:checked) {
  display: none;
}

[type="radio"]:checked + label,
[type="radio"]:not(:checked) + label {
  position: relative;
  padding-left: 30px;
  cursor: pointer;
}

[type="radio"]:checked + label:before,
[type="radio"]:not(:checked) + label:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 20px;
  height: 20px;
  border: 1px solid #007AFF;
  border-radius: 50px;
}
[type="radio"]:checked + label:after,
[type="radio"]:not(:checked) + label:after {
  content: "";
  width: 12px;
  height: 12px;
  background: #007AFF;
  position: absolute;
  top: 4px;
  left: 4px;
  border-radius: 100%;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
[type="radio"]:not(:checked) + label:after {
  opacity: 0;
  -webkit-transform: scale(0);
  transform: scale(0);
}
[type="radio"]:checked + label:after {
  opacity: 1;
  -webkit-transform: scale(1);
  transform: scale(1);
}

/* quntity */

input[type="number"] {
  -webkit-appearance: textfield;
  -moz-appearance: textfield;
  appearance: textfield;
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
}
@media screen and (max-width : 380px){
  .happy-popup{
    transform: scale(0.8);
}
}
    </style>
  </head>

  <body class="lg:flex lg:h-screen lg:items-center lg:justify-center lg:bg-[#f4f9ff]">
    <div class="relative mx-auto bg-white p-4 lg:min-h-[770px] lg:w-[380px] lg:overflow-hidden lg:rounded-3xl lg:border-[6px] lg:border-[#f4f9ff] lg:p-6 lg:shadow-[0_20px_50px_-20px_rgba(0,26,130,0.21)]">
      <div class="mb-8 flex h-11 items-center justify-between">
        <a href="reatailer.html">
          <ion-icon name="chevron-back-outline" class="tran h-7 w-7 cursor-pointer rounded-full bg-[#F8F8FB] p-2 text-[#8A94A6] hover:ring-1 hover:ring-slate-400"> </ion-icon>
        </a>

        <h1 class="font bn text-[17px] font-semibold text-[#222950]">মোহাম্মদ নাজমুল আলী</h1>
        <span class="w-7"></span>
      </div>

      <div class="p-[2px] pb-20 lg:max-h-[600px] lg:overflow-auto">
        <!-- product c -->
        <div class="grid grid-cols-3 gap-4">
          <a href="#" class="product-c tran">
            <img class="mb-4 w-12" src="images/icon/c1.png" alt="" />
            <h3 class="bn text-[10px] font-semibold xs:text-sm">ক্যান্ডি</h3>
          </a>
          <a href="#" class="product-c tran">
            <img class="mb-4 w-12" src="images/icon/c2.png" alt="" />
            <h3 class="bn text-[10px] font-semibold xs:text-sm">স্ন্যাকস</h3>
          </a>
          <a href="#" class="product-c tran">
            <img class="mb-4 w-12" src="images/icon/c3.png" alt="" />
            <h3 class="bn text-[10px] font-semibold xs:text-sm">তেল</h3>
          </a>
          <a href="#" class="product-c tran">
            <img class="mb-4 w-12" src="images/icon/c4.png" alt="" />
            <h3 class="bn text-[10px] font-semibold xs:text-sm">বিস্কিট</h3>
          </a>
          <a href="#" class="product-c tran">
            <img class="mb-4 w-12" src="images/icon/c5.png" alt="" />
            <h3 class="bn text-[10px] font-semibold xs:text-sm">পানীয়</h3>
          </a>
          <a href="#" class="product-c tran">
            <img class="mb-4 w-12" src="images/icon/c6.png" alt="" />
            <h3 class="bn text-[10px] font-semibold xs:text-sm">চিপস</h3>
          </a>
        </div>

        <!-- title -->
        <a href="#" class="my-8 flex justify-between">
          <h1 class="text-lg font-semibold text-[#222950]">Featured products</h1>
          <ion-icon class="tran h-5 w-5 rounded-full bg-slate-100 p-1 text-[#8A94A6] hover:text-slate-700" name="chevron-forward-outline"></ion-icon>
        </a>
        <!-- product -->
        <div class="grid grid-cols-2 gap-6">
          <div class="s-product" onclick="productView()">
            <div class="mb-4 flex h-24 w-full justify-center p-2">
              <!-- NOTE: image size 100x100 px -->
              <img class="w-full object-contain" src="images/product/pusti-happy-time.png" alt="" />
            </div>
            <h4 class="bn mb-4 text-[14px] font-medium text-[#222950]">মিল্ক বিস্কুট<span class="bn ml-2 text-[12px] text-[#8094AA]">(50g)</span></h4>
            <div class="flex items-center justify-between">
              <h1 class="text-lg font-bold text-[#007AFF]">৳ 4.0</h1>
              <a href="#" class="add-to">
                <ion-icon class="text-2xl" name="add-outline"></ion-icon>
              </a>
            </div>
          </div>
          <div class="s-product"onclick="productView()">
            <div class="mb-4 flex h-24 w-full justify-center p-2">
              <!-- NOTE: image size 100x100 px -->
              <img class="w-full object-contain" src="images/product/pusti-happy-time.png" alt="" />
            </div>
            <h4 class="bn mb-4 text-[14px] font-medium text-[#222950]">মিল্ক বিস্কুট<span class="bn ml-2 text-[12px] text-[#8094AA]">(50g)</span></h4>
            <div class="flex items-center justify-between">
              <h1 class="text-lg font-bold text-[#007AFF]">৳ 4.0</h1>
              <a href="#" class="add-to">
                <ion-icon class="text-2xl" name="add-outline"></ion-icon>
              </a>
            </div>
          </div>
          <div class="s-product" onclick="productView()">
            <div class="mb-4 flex h-24 w-full justify-center p-2">
              <!-- NOTE: image size 100x100 px -->
              <img class="w-full object-contain" src="images/product/pusti-happy-time.png" alt="" />
            </div>
            <h4 class="bn mb-4 text-[14px] font-medium text-[#222950]">মিল্ক বিস্কুট<span class="bn ml-2 text-[12px] text-[#8094AA]">(50g)</span></h4>
            <div class="flex items-center justify-between">
              <h1 class="text-lg font-bold text-[#007AFF]">৳ 4.0</h1>
              <a href="#" class="add-to">
                <ion-icon class="text-2xl" name="add-outline"></ion-icon>
              </a>
            </div>
          </div>
          <div class="s-product" onclick="productView()">
            <div class="mb-4 flex h-24 w-full justify-center p-2">
              <!-- NOTE: image size 100x100 px -->
              <img class="w-full object-contain" src="images/product/pusti-happy-time.png" alt="" />
            </div>
            <h4 class="bn mb-4 text-[14px] font-medium text-[#222950]">মিল্ক বিস্কুট<span class="bn ml-2 text-[12px] text-[#8094AA]">(50g)</span></h4>
            <div class="flex items-center justify-between">
              <h1 class="text-lg font-bold text-[#007AFF]">৳ 4.0</h1>
              <a href="#" class="add-to">
                <ion-icon class="text-2xl" name="add-outline"></ion-icon>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Product details popup -->
      <div class="productDetails popup_bg popup !z-[100] overflow-auto">
        <div class="relative mt-20 min-w-[280px] rounded-xl border-4 border-white bg-[#F2F3F9] md:min-w-[580px] happy-popup">
          <ion-icon onclick="closeProductDetails()" class="absolute -top-16 right-0 h-6 w-6 cursor-pointer overflow-hidden rounded-full bg-white p-2 text-blue-600" name="close-outline"></ion-icon>
      
          <div class="flex h-60 w-full items-center justify-center overflow-hidden">
            <img class="h-44 w-52 object-contain" src="images/product/pusti-happy-time.png" alt="" />
          </div>
          <div class="rounded-t-2xl bg-white px-6 pt-8 pb-5">
            <div class="mb-5 flex items-start justify-between">
              <h4 class="bn mb-4 text-lg font-bold text-[#222950]">মিল্ক বিস্কুট<span class="bn ml-3 text-sm text-[#8094AA]">(50g)</span></h4>
              <!-- price -->
              
              <input class="rounded-full border border-[#EBEDF5] px-4 py-2 text-[#393d58] outline-none w-[100px] text-center" type="text" name="price" id="price" placeholder="5000">

            </div>
      
            <div class="mb-5 flex gap-8">
              <div>
                <input type="radio" id="box" name="product_type" value="box" checked />
                <label class="bn font-semibold text-[#8A94A6]" for="box">বক্স</label>
              </div>
              <div>
                <input type="radio" id="pc" name="product_type" value="pc" />
                <label class="bn font-semibold text-[#8A94A6]" for="pc">পিচ</label><br />
              </div>
            </div>
      
            <div class="mb-5 flex flex-col gap-2 rounded-lg border border-[#EBEDF5] px-3 py-2">
              <p class="bn flex items-center justify-between text-sm font-semibold text-[#595F84]">মোট : <span class="text-red-500 bn">২৫০.০০</span></p>
              <hr class="border-[#EBEDF5]" />
              <p class="bn flex items-center justify-between text-sm font-semibold text-[#595F84]">প্রতি পিস : <span class="text-red-500 bn">২৫০.০০</span></p>
            </div>
      
            <div class="mb-4 flex justify-between gap-4">
              <button class="tran flex h-[50px] min-w-[50px] items-center justify-center rounded-lg bg-[#F2F3F9] hover:bg-blue-500 group" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                <ion-icon class="text-2xl text-[#007AFF] group-hover:text-white tran" name="remove-outline"></ion-icon>
              </button>
              <input class="quantity tran w-full rounded-lg border-2 border-[#EBEDF5] text-center outline-none focus:border-blue-500" min="0" name="quantity" value="1" type="number" />
              <button class="tran flex h-[50px] min-w-[50px] items-center justify-center rounded-lg bg-[#F2F3F9] hover:bg-blue-500 group" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                <ion-icon class="text-2xl text-[#007AFF] group-hover:text-white tran" name="add-outline"></ion-icon>
              </button>
            </div>
      
            <button type="#" class="tran w-full rounded-xl bg-gradient-to-t from-[#0063FF] to-[#258AFF] py-3.5 font-semibold text-white focus:outline-none focus:ring focus:ring-blue-300 active:bg-blue-700">Add to cart</button>
          </div>
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
          <svg class="tran w-6 stroke-[#4E5D78] stroke-[1.5px] group-hover:stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <circle cx="12" cy="6" r="4" stroke-width="1.5"></circle>
              <path d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" stroke-width="1.5"></path>
            </g>
          </svg>
        </a>
        <a href="#" onclick="myCart()" class="tran group flex h-[50px] w-[50px] items-center justify-center rounded-xl bg-[#F7FAFE] hover:bg-blue-500 relative">
          <svg class="tran w-6 stroke-[#4E5D78] stroke-[1.5px] group-hover:stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path d="M3.74181 18.5545C4.94143 20 7.17414 20 11.6395 20H12.3607C16.8261 20 19.0589 20 20.2585 18.5545M3.74181 18.5545C2.54219 17.1091 2.95365 14.9146 3.77657 10.5257C4.36179 7.40452 4.65441 5.84393 5.7653 4.92196M3.74181 18.5545C3.74181 18.5545 3.74181 18.5545 3.74181 18.5545ZM20.2585 18.5545C21.4581 17.1091 21.0466 14.9146 20.2237 10.5257C19.6385 7.40452 19.3459 5.84393 18.235 4.92196M20.2585 18.5545C20.2585 18.5545 20.2585 18.5545 20.2585 18.5545ZM18.235 4.92196C17.1241 4 15.5363 4 12.3607 4H11.6395C8.46398 4 6.8762 4 5.7653 4.92196M18.235 4.92196C18.235 4.92196 18.235 4.92196 18.235 4.92196ZM5.7653 4.92196C5.7653 4.92196 5.7653 4.92196 5.7653 4.92196Z" stroke-width="1.5"></path>
              <path d="M9.1709 8C9.58273 9.16519 10.694 10 12.0002 10C13.3064 10 14.4177 9.16519 14.8295 8" stroke-width="1.5" stroke-linecap="round"></path>
            </g>
          </svg>
          <span class="absolute text-xs font-medium bg-blue-500 px-[6px] py-[1px] rounded-full top-0 right-0 text-white">10</span>
        </a>
      </div>

     <!-- my cart popup hidden-->
      <div class="myCart hidden popup !z-[100] fixed sm:absolute inset-0 bg-black/50 backdrop-blur-sm"> 
        <div class="absolute w-full rounded-t-3xl bg-white h-[95%] overflow-auto bottom-0 p-5 xs:p-7 lg:p-5 flex flex-col justify-between">
          <div>
          <div class="flex justify-between items-center mb-8">
            <h1 class="text-lg text-[#222950] font-bold">My Cart</h1>
            <ion-icon onclick="closemyCart()" class="h-6 w-6 cursor-pointer overflow-hidden rounded-full bg-[#F2F3F9] p-2 text-blue-600" name="close-outline"></ion-icon>
          </div>
          <div class="flex flex-col gap-4 mb-8 min-h-[320px] lg:min-h-[420px]">
            <!-- cart item -->
            <div class="cart-item">
              <!-- delete item -->
              <a href="#" class="delete-item"><ion-icon name="trash-outline"></ion-icon></a>
      
              <img class="mr-4 h-[80px] w-[80px] object-contain" src="images/product/pusti-happy-time.png" alt="" />
      
              <div class="flex flex-col">
                <h4 class="bn mb-4 font-bold text-[#222950]">মিল্ক বিস্কুট<span class="bn ml-3 text-xs text-[#8094AA]">(50g)</span></h4>
                <div class="flex items-center gap-3">
                  <div class="flex justify-between gap-1">
                    <button class="tran group flex h-[28px] min-w-[28px] items-center justify-center rounded bg-[#F2F3F9] hover:bg-blue-500" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <ion-icon class="tran text-xl text-[#007AFF] group-hover:text-white" name="remove-outline"></ion-icon>
                    </button>
                    <input class="quantity tran w-full rounded-lg border-2 border-[#EBEDF5] text-center outline-none focus:border-blue-500" min="0" name="quantity" value="1" type="number" />
                    <button class="tran group flex h-[28px] min-w-[28px] items-center justify-center rounded bg-[#F2F3F9] hover:bg-blue-500" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <ion-icon class="tran text-xl text-[#007AFF] group-hover:text-white" name="add-outline"></ion-icon>
                    </button>
                  </div>
                  <p class="min-w-[70px] rounded-full border border-[#EBEDF5] text-center text-[#595F84] text-sm py-1 font-semibold">৳ 500</p>
                </div>
              </div>
            </div>
            <!-- cart item -->
            <div class="cart-item">
              <!-- delete item -->
              <a href="#" class="delete-item"><ion-icon name="trash-outline"></ion-icon></a>
      
              <img class="mr-4 h-[80px] w-[80px] object-contain" src="images/product/pusti-happy-time.png" alt="" />
      
              <div class="flex flex-col">
                <h4 class="bn mb-4 font-bold text-[#222950]">মিল্ক বিস্কুট<span class="bn ml-3 text-xs text-[#8094AA]">(50g)</span></h4>
                <div class="flex items-center gap-3">
                  <div class="flex justify-between gap-1">
                    <button class="tran group flex h-[28px] min-w-[28px] items-center justify-center rounded bg-[#F2F3F9] hover:bg-blue-500" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <ion-icon class="tran text-xl text-[#007AFF] group-hover:text-white" name="remove-outline"></ion-icon>
                    </button>
                    <input class="quantity tran w-full rounded-lg border-2 border-[#EBEDF5] text-center outline-none focus:border-blue-500" min="0" name="quantity" value="1" type="number" />
                    <button class="tran group flex h-[28px] min-w-[28px] items-center justify-center rounded bg-[#F2F3F9] hover:bg-blue-500" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <ion-icon class="tran text-xl text-[#007AFF] group-hover:text-white" name="add-outline"></ion-icon>
                    </button>
                  </div>
                  <p class="min-w-[70px] rounded-full border border-[#EBEDF5] text-center text-[#595F84] text-sm py-1 font-semibold">৳ 500</p>
                </div>
              </div>
            </div>
            <!-- cart item -->
            <div class="cart-item">
              <!-- delete item -->
              <a href="#" class="delete-item"><ion-icon name="trash-outline"></ion-icon></a>
      
              <img class="mr-4 h-[80px] w-[80px] object-contain" src="images/product/pusti-happy-time.png" alt="" />
      
              <div class="flex flex-col">
                <h4 class="bn mb-4 font-bold text-[#222950]">মিল্ক বিস্কুট<span class="bn ml-3 text-xs text-[#8094AA]">(50g)</span></h4>
                <div class="flex items-center gap-3">
                  <div class="flex justify-between gap-1">
                    <button class="tran group flex h-[28px] min-w-[28px] items-center justify-center rounded bg-[#F2F3F9] hover:bg-blue-500" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <ion-icon class="tran text-xl text-[#007AFF] group-hover:text-white" name="remove-outline"></ion-icon>
                    </button>
                    <input class="quantity tran w-full rounded-lg border-2 border-[#EBEDF5] text-center outline-none focus:border-blue-500" min="0" name="quantity" value="1" type="number" />
                    <button class="tran group flex h-[28px] min-w-[28px] items-center justify-center rounded bg-[#F2F3F9] hover:bg-blue-500" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <ion-icon class="tran text-xl text-[#007AFF] group-hover:text-white" name="add-outline"></ion-icon>
                    </button>
                  </div>
                  <p class="min-w-[70px] rounded-full border border-[#EBEDF5] text-center text-[#595F84] text-sm py-1 font-semibold">৳ 500</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
            <div class="mb-5 flex flex-col gap-2 rounded-lg bg-[#F2F3F9] p-3">
              <p class="flex items-center justify-between text-sm font-medium text-[#595F84]">Total item : <span>03</span></p>
              <hr class="border-slate-200" />
              <p class="flex items-center justify-between text-sm font-bold text-[#007AFF]">Subtotal : <span>৳ 600</span></p>
            </div>
            <a href="order-complete.html"><button type="#" class="tran w-full rounded-xl bg-gradient-to-t from-[#0063FF] to-[#258AFF] py-3.5 font-semibold text-white focus:outline-none focus:ring focus:ring-blue-300 active:bg-blue-700">Check out</button></a>
          </div>

        </div>
        </div>
      </div>

    </div>

    <script src="{{ asset('front/script.js') }}"></script>
    <script>

      // productView popup
      var productDetails = document.querySelector(".productDetails");
      function productView() {
        productDetails.classList.add("openPopup");
      }
      function closeProductDetails() {
        productDetails.classList.remove("openPopup");
      }

      // productView popup
      var cartItem = document.querySelector(".myCart");
      function myCart() {
        cartItem.classList.add("cartPopup");
      }
      function closemyCart() {
        cartItem.classList.remove("cartPopup");
      }
    </script>
  </body>
</html>
