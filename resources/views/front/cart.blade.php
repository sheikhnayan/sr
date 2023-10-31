<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Order History</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  <!-- google font "Plus Jakarta Sans" cdn for english-->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet" />

  <!-- google font "Plus Jakarta Sans" cdn for English-->
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />

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
    .happy_shadow{
        box-shadow: 0px 10px 20px 0px #052e800d;
    }
         .popup.openPopup {
        display: flex;
        animation: popup .3s ease;
      }

      @keyframes popup {
        0% {
          opacity: 0;
        }

        100% {
          opacity: 1;
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
  <div class="relative mx-auto bg-white p-4 lg:h-[770px] lg:w-[380px] lg:overflow-hidden lg:rounded-3xl lg:border-[6px] lg:border-[#f4f9ff] lg:p-6 lg:shadow-[0_20px_50px_-20px_rgba(0,26,130,0.21)]">
    <div class="mb-8 flex h-11 items-center justify-between">
      <a href="home.html">
        <ion-icon name="chevron-back-outline"
          class="tran h-7 w-7 cursor-pointer rounded-full bg-[#F8F8FB] p-2 text-[#8A94A6] hover:ring-1 hover:ring-slate-400">
        </ion-icon>
      </a>
      <h1 class="text-lg font-bold text-[#222950]">My Cart</h1>
      <span class="w-7"></span>
    </div>

    <div class="p-[2px] pb-10 lg:max-h-[450px] lg:overflow-auto">
      <!-- cart item -->
      <ul class="text-sm grid gap-5">
        <li class="rounded-xl border border-[#2E318514] happy_shadow">
          <div class="flex items-center gap-3 p-3">
            <div class="h-16 w-16 rounded-md bg-[#F5F6F8]"><img class="h-full w-full object-contain" src="images/product/horlicks_biscuits.png" alt="" />
            </div>
            <h1 class="font-semibold text-[#222950]">মিল্ক বিস্কুট (50g)</h1>
          </div>
          <div class="border-y border-[#2E318514] p-3 flex  justify-between">
            <div class="">
              <p class="mb-2 text-[#8A94A6]">QTY</p>
              <div class="flex divide-x-2">
                <h1 class="pr-2 font-bold text-[#595F84]">04
                  <span class="ml-1 rounded border border-gray-300/50 px-1 text-xs shadow-md shadow-blue-700/5">B</span>
                </h1>
                <h1 class="pl-2 font-bold text-[#595F84]">04
                  <span class="ml-1 rounded border border-gray-300/50 px-1 text-xs shadow-md shadow-blue-700/5">P</span>
                </h1>
              </div>
            </div>
            <div class="w-[1px] h-11 bg-[#2E318514]"></div>
            <div class="">
              <p class="mb-2 text-[#8A94A6]">O/C</p>
              <h1 class="pr-2 font-bold text-[#FF565E]">-10</h1>
            </div>
            <div class="w-[1px] h-11 bg-[#2E318514]"></div>

            <div class="">
              <p class="mb-2 text-[#8A94A6]">Total Price</p>
              <h1 class="pr-2 font-bold text-[#595F84]">৳ 524</h1>
            </div>
          </div>
          <div class="grid grid-cols-2 divide-x divide-[#2E318514]">
            <button class="flex items-center gap-2 p-3 justify-center w-full text-[#FF565E] font-medium tran hover:bg-red-50"><ion-icon name="trash-outline"></ion-icon>Delete</button>
            <button onclick="productEdit()" class="flex items-center gap-2 p-3 justify-center w-full text-[#007AFF] font-medium tran hover:bg-blue-50"><ion-icon name="create-outline"></ion-icon>Edit</button>
          </div>
        </li>

        <li class="rounded-xl border border-[#2E318514] happy_shadow">
          <div class="flex items-center gap-3 p-3">
            <div class="h-16 w-16 rounded-md bg-[#F5F6F8]"><img class="h-full w-full object-contain" src="images/product/horlicks_biscuits.png" alt="" />
            </div>
            <h1 class="font-semibold text-[#222950]">মিল্ক বিস্কুট (50g)</h1>
          </div>
          <div class="border-y border-[#2E318514] p-3 flex  justify-between">
            <div class="">
              <p class="mb-2 text-[#8A94A6]">QTY</p>
              <div class="flex divide-x-2">
                <h1 class="pr-2 font-bold text-[#595F84]">04
                  <span class="ml-1 rounded border border-gray-300/50 px-1 text-xs shadow-md shadow-blue-700/5">B</span>
                </h1>
                <h1 class="pl-2 font-bold text-[#595F84]">04
                  <span class="ml-1 rounded border border-gray-300/50 px-1 text-xs shadow-md shadow-blue-700/5">P</span>
                </h1>
              </div>
            </div>
            <div class="w-[1px] h-11 bg-[#2E318514]"></div>
            <div class="">
              <p class="mb-2 text-[#8A94A6]">O/C</p>
              <h1 class="pr-2 font-bold text-[#0CAF60]">45</h1>
            </div>
            <div class="w-[1px] h-11 bg-[#2E318514]"></div>

            <div class="">
              <p class="mb-2 text-[#8A94A6]">Total Price</p>
              <h1 class="pr-2 font-bold text-[#595F84]">৳ 524</h1>
            </div>
          </div>
          <div class="grid grid-cols-2 divide-x divide-[#2E318514]">
            <button class="flex items-center gap-2 p-3 justify-center w-full text-[#FF565E] font-medium tran hover:bg-red-50"><ion-icon name="trash-outline"></ion-icon>Delete</button>
            <button onclick="productEdit()" class="flex items-center gap-2 p-3 justify-center w-full text-[#007AFF] font-medium tran hover:bg-blue-50"><ion-icon name="create-outline"></ion-icon>Edit</button>
          </div>
        </li>

      </ul>
    </div>
    <div>
      <div class="mb-5 flex flex-col gap-2 rounded-lg bg-slate-50 p-3">
        <p class="flex items-center justify-between text-sm font-medium text-[#595F84]">Total item : <span>03</span></p>
        <hr class="border-slate-200">
        <p class="flex items-center justify-between text-sm font-medium text-[#595F84]">O/C :
          <span class="text-[#FF565E]">- 80</span></p>
        <hr class="border-slate-200">
        <p class="flex items-center justify-between text-sm font-bold text-[#007AFF]">Subtotal : <span>৳ 600</span></p>
      </div>
      <a
        href="order-complete.html"><button type="#" class="tran w-full rounded-xl bg-gradient-to-t from-[#0063FF] to-[#258AFF] py-3.5 font-semibold text-white focus:outline-none focus:ring focus:ring-blue-300 active:bg-blue-700">Check out</button></a>
    </div>

<!-- Product Eidt popup -->
<div class="eidtPoroduct popup_bg popup !z-[100] overflow-auto">
  <div class="happy-popup relative mt-20 min-w-[280px] rounded-xl border-4 border-white bg-[#F2F3F9] md:min-w-[580px]">
    <ion-icon onclick="closeeidtPoroduct()"
      class="absolute -top-16 right-0 h-6 w-6 cursor-pointer overflow-hidden rounded-full bg-white p-2 text-blue-600"
      name="close-outline"></ion-icon>

    <div class="rounded-t-2xl bg-white px-6 pb-5 pt-8">
      <div class="mb-8 flex items-start justify-between">
        <h4 class="bn mb-4 text-lg font-bold text-[#222950]">মিল্ক
          বিস্কুট<span class="bn ml-3 text-sm text-[#8094AA]">(50g)</span></h4>
        <!-- price -->

        <span class="text-lg font-semibold text-[#1A7EFF]">৳ 5,000</span>
      </div>

      <div class="flex items-center justify-between mb-8">
        <div class="flex gap-8">
          <div>
            <input type="radio" id="box" name="product_type" value="box" checked />
            <label class="bn font-semibold text-[#8A94A6]" for="box">বক্স</label>
          </div>
          <div>
            <input type="radio" id="pc" name="product_type" value="pc" />
            <label class="bn font-semibold text-[#8A94A6]" for="pc">পিচ</label><br />
          </div>
        </div>
        <div class="flex divide-x-2">
          <h1 class="pr-2 font-bold text-[#595F84]">
            04
            <span class="ml-1 rounded border border-gray-300/50 px-1 text-xs shadow-md shadow-blue-700/5">B</span>
          </h1>
          <h1 class="pl-2 font-bold text-[#595F84]">
            04
            <span class="ml-1 rounded border border-gray-300/50 px-1 text-xs shadow-md shadow-blue-700/5">P</span>
          </h1>
        </div>
      </div>

      <div class="mb-4 flex justify-between gap-4">
        <button class="tran group flex h-[50px] min-w-[50px] items-center justify-center rounded-lg bg-[#F2F3F9] hover:bg-blue-500" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
          <ion-icon class="tran text-2xl text-[#007AFF] group-hover:text-white" name="remove-outline"></ion-icon>
        </button>
        <input class="quantity tran w-full rounded-lg border-2 border-[#EBEDF5] text-center outline-none focus:border-blue-500" min="0" name="quantity" value="1" type="number" />
        <button class="tran group flex h-[50px] min-w-[50px] items-center justify-center rounded-lg bg-[#F2F3F9] hover:bg-blue-500" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
          <ion-icon class="tran text-2xl text-[#007AFF] group-hover:text-white" name="add-outline"></ion-icon>
        </button>
      </div>

      <button type="#" class="tran w-full rounded-xl bg-gradient-to-t from-[#0063FF] to-[#258AFF] py-3.5 font-semibold text-white focus:outline-none focus:ring focus:ring-blue-300 active:bg-blue-700">Save</button>
    </div>
  </div>
</div>
  </div>




  <script src="{{ asset('front/script.js') }}"></script>
  <script>

    // productEdit popup
    var eidtPoroduct = document.querySelector(".eidtPoroduct");
    function productEdit() {
      eidtPoroduct.classList.add("openPopup");
    }
    function closeeidtPoroduct() {
      eidtPoroduct.classList.remove("openPopup");
    }

    // productEdit popup
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
