<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add new reatailer</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

  <!-- taiwind css -->
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">

  <!-- icon -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

  <!-- animate aos cdn -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <link rel="stylesheet" href="css/style.css">

  <style type="text/css">
    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        /* SVG icon */
        background-image: url("images/arrow-down.svg");
        background-size: 15px;
        background-position: calc(100% - 1.2em) center;
        background-repeat: no-repeat;
        }
        select::-ms-expand {
        display: none;
        }
      .popup.openPopup{
        display: flex;
        animation: popup .3s ease;
        }
        @keyframes popup {
        0%{ opacity: 0;}
        100%{ opacity: 1;}
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

 </style>

</head>

<body class="lg:bg-[#f4f9ff] lg:h-screen lg:flex lg:justify-center lg:items-center">
  <div class="relative lg:overflow-hidden mx-auto bg-white p-4 lg:min-h-[770px] lg:w-[380px] lg:rounded-3xl lg:border-[6px] lg:border-[#f4f9ff] lg:p-6 lg:shadow-[0_20px_50px_-20px_rgba(0,26,130,0.21)]">
    <div class="mb-12 flex h-10 justify-between">
    <a href="login.html">
      <ion-icon name="chevron-back-outline" class="tran h-7 w-7 cursor-pointer rounded-full bg-[#F8F8FB] p-2 text-[#8A94A6] hover:ring-1 hover:ring-slate-400"></ion-icon>
    </a>
        <div class="flex items-center gap-3">
            <a href="#" class="tran flex items-center gap-3 rounded-full bg-[#FAFCFF] px-4 py-2 text-sm text-[#007AFF] border border-[#007AFF2B] font-semibold"><img src="wallet.svg" alt=""> Tk {{ Auth::user()->wallet }}</a>
            <form action="{{ route('logout') }}" method="post">
            @csrf
            <button href="#" class="tran flex items-center gap-3 rounded-full bg-[#F8F8FB] px-4 py-2 hover:bg-red-50 hover:text-red-500 hover:ring-1 group hover:ring-red-500 text-sm text-[#8A94A6]">Logout <ion-icon class="text-[#595F84] group-hover:text-red-500 text-lg" name="log-out-outline"></ion-icon></button>
            </form>
        </div>

    </div>



    <form action="" class="flex flex-col gap-4">
        <select name="union" id="union_select" class="reatailer-input text-[#222950]">
          <option value="">Select Union</option>
          @foreach ($union as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
          @endforeach
        </select>
        <select name="bazar" id="bazar_select" class="reatailer-input text-[#222950]">
          <option value="">Select Bazar</option>
        </select>

      </form>


      <div class="grid grid-cols-2 gap-4 pb-20 pt-10 lg:max-h-[500px] lg:overflow-auto">
        @foreach ($data as $item)

        <a href="#" class="tran relative flex flex-col items-center rounded-2xl border border-[#2E318514] bg-white text-center shadow-lg shadow-blue-800/5 hover:ring-1">
            <img data-id="{{ $item->id }}" class=" edit tran absolute right-0 top-0 w-10 lg:w-8 rounded-bl-2xl rounded-tr-2xl border-b border-l border-[#2E318514] p-2 hover:bg-slate-100" src="{{ asset('front/images/edit.svg') }}"alt=""/>
            <div class="flex flex-col items-center justify-center p-4">
              <img class="mb-3 h-[80px] w-[80px] rounded-xl object-cover" src="{{ asset('storage/'.$item->photo) }}" alt="" />
              <h3 class="bn mb-0.5 text-[14px] font-semibold text-[#222950]">{{ $item->name }}</h3>
              <p class="bn mb-0.5 text-[14px] font-medium text-blue-500">{{ $item->shop_name }}</p>
              <span class="bn text-[13px] text-[#3c424d]">{{ $item->bazar->name }}</span>
            </div>
            <div class="flex w-full items-center gap-4 bg-[#007AFF0A] px-4 py-3">
              <span class="text-sm font-medium text-[#007AFF]">60%</span>
              <div class="h-2 w-full overflow-hidden rounded-full bg-[#007AFF1F]"><div class="h-full w-[60%] rounded-full bg-[#007AFF]"></div></div>
            </div>
        </a>

        <!-- edit reatailer popup -->
  <div class="editreatailer{{ $item->id }} popup_bg popup !z-[100]">
    <div class="relative mt-20 min-w-[315px] rounded-xl bg-white p-5 md:min-w-[580px]">
      <ion-icon onclick="closeEditReatailer({{ $item->id }})" class="absolute -top-16 right-0 h-6 w-6 cursor-pointer overflow-hidden rounded-full bg-white p-2 text-blue-600" name="close-outline"></ion-icon>

      <div class="mb-8 flex items-center justify-between">
        <h1 class="bn text-[18px] font-semibold text-[#595F84]">Edit Retailer</h1>
      </div>

      <form action="{{ route('front.sr.retailer.update',[$item->id]) }}" class="flex flex-col gap-4" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="flex items-center gap-4">
          <label for="upload-file" class="flex w-[80px] h-[80px] cursor-pointer items-center justify-center rounded-lg" style="border: 2px solid #007AFF52; background: #007AFF08;">
            <input id="upload-file" name="photo" type="file" class="hidden" />
            <img src="{{ asset('front/images/camera-icon.svg') }}" alt="">
          </label>

          <div class="">
            <p class="font-semibold text-[#595F84]">Profile Picture</p>
            <span class="text-sm text-[#8A94A6]">Click to upload</span>
          </div>
        </div>

        <input id="name" name="phone" type="number" value="{{ $item->phone }}" placeholder="Phone Number" class="reatailer-input bn phone" />
        <input id="name" name="name" type="text" value="{{ $item->name }}" autocomplete="name" placeholder="Reatailer Name" class="reatailer-input bn" />
        <input id="name" name="shop_name" type="text" value="{{ $item->shop_name }}" placeholder="Shop Name" class="reatailer-input bn" />
        <select name="union_id" id="union_new" name="union_id" class="reatailer-input text-[#222950]">
          <option disabled selected value="">Select Union</option>
          @foreach ($union as $un)
          <option {{ $item->union_id == $un->id ? 'selected': ''}} value="{{ $un->id }}">{{ $un->name }}</option>
          @endforeach
        </select>
        <select name="bazar_id" id="bazar_new" class="reatailer-input text-[#222950]" required>
          <option disabled value="null">Select Bazar</option>
          <option selected value="{{ $item->bazar_id }}">{{ $item->bazar->name }}</option>
        </select>
        <h1 class="font-semibold text-[#595F84]">Area</h1>
        <div class="flex gap-8">
          <div>
              <input type="radio" {{ $item->bazar_area == 'bazar-main' ? 'checked': ''}} id="bazar-main" name="product_type" value="bazar-main" class="bazar bn"  />
              <label class="bn font-semibold text-[#8A94A6]" for="bazar-main">বাজার</label><br />
            </div>
          <div>
            <input type="radio" {{ $item->bazar_area == 'bazar-side' ? 'checked': ''}} id="bazar-side" name="product_type" value="bazar-side" class="bazar bn"/>
            <label class="bn font-semibold text-[#8A94A6]" for="bazar-side">বাজার এর পাশে</label><br />
          </div>
        </div>
        @if ($item->bazar_area == 'bazar-side')

        <input id="name" name="bazar_side_input" type="text" value="{{ $item->bazar_side_input }}" placeholder="বাজার এর পাশে" class="reatailer-input bazar-side-input bn" />

        @endif
        <button type="submit" class=" submit w-full rounded-xl bg-gradient-to-t from-[#0063FF] to-[#258AFF] py-4 font-semibold text-white transition-all duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 active:bg-blue-700">Update Reatailer</button>
      </form>
    </div>
  </div>
        @endforeach



      </div>





    <!-- add new icon -->
        <div onclick="addreatailer()" class="tran fixed bottom-8 right-8 z-20 flex h-[50px] w-[50px] cursor-pointer items-center justify-center rounded-full bg-blue-500 shadow-md ring-2 ring-white hover:bg-blue-600 lg:absolute">
          <ion-icon class="text-3xl text-white" name="add-outline"></ion-icon>
        </div>

<!-- add reatailer popup -->
<div class="addreatailer popup_bg popup !z-[100]">
  <div class="relative mt-20 min-w-[315px] rounded-xl bg-white p-5 md:min-w-[580px]">
    <ion-icon onclick="closeReatailer()" class="absolute -top-16 right-0 h-6 w-6 cursor-pointer overflow-hidden rounded-full bg-white p-2 text-blue-600" name="close-outline"></ion-icon>

    <div class="mb-8 flex items-center justify-between">
      <h1 class="bn text-[18px] font-semibold text-[#595F84]">Add New Retailer</h1>
    </div>

    <form action="{{ route('front.sr.retailer.store') }}" class="flex flex-col gap-4" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="flex items-center gap-4">
        <label for="upload-file" class="flex w-[80px] h-[80px] cursor-pointer items-center justify-center rounded-lg" style="border: 2px solid #007AFF52; background: #007AFF08;">
          <input id="upload-file" name="photo" type="file" class="hidden" />
          <img src="{{ asset('front/images/camera-icon.svg') }}" alt="">
        </label>

        <div class="">
          <p class="font-semibold text-[#595F84]">Profile Picture</p>
          <span class="text-sm text-[#8A94A6]">Click to upload</span>
        </div>
      </div>

      <input id="name" name="phone" type="number" placeholder="Phone Number" class="reatailer-input bn phone" />
      <input id="name" name="name" type="text" autocomplete="name" placeholder="Reatailer Name" class="reatailer-input bn" />
      <input id="name" name="shop_name" type="text" placeholder="Shop Name" class="reatailer-input bn" />
      <select name="union_id" id="union" name="union_id" class="reatailer-input text-[#222950]">
        <option disabled selected value="">Select Union</option>
        @foreach ($union as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
      </select>
      <select name="bazar_id" id="bazar" class="reatailer-input text-[#222950]" required>
        <option disabled selected value="null">Select Bazar</option>
      </select>
      <h1 class="font-semibold text-[#595F84]">Area</h1>
      <div class="flex gap-8">
        <div>
            <input type="radio" id="bazar-main" name="product_type" value="bazar-main" class="bazar bn" checked />
            <label class="bn font-semibold text-[#8A94A6]" for="bazar-main">বাজার</label><br />
          </div>
        <div>
          <input type="radio" id="bazar-side" name="product_type" value="bazar-side" class="bazar bn"/>
          <label class="bn font-semibold text-[#8A94A6]" for="bazar-side">বাজার এর পাশে</label><br />
        </div>
      </div>
      <input id="name" name="bazar_side_input" type="text" placeholder="বাজার এর পাশে" class="reatailer-input bazar-side-input bn" style="display: none" />
      <button type="submit" class=" submit w-full rounded-xl bg-gradient-to-t from-[#0063FF] to-[#258AFF] py-4 font-semibold text-white transition-all duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 active:bg-blue-700">Add Reatailer</button>
    </form>
  </div>
</div>
  </div>




<script src="{{ asset('front/script.js') }}"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
crossorigin="anonymous"
referrerpolicy="no-referrer"
></script>
<script>
// addreatailer
var reatailer = document.querySelector(".addreatailer");
  function addreatailer(){
    reatailer.classList.add("openPopup");
  }
  function closeReatailer(){
    reatailer.classList.remove("openPopup");
}
  </script>

<script>
    // editreatailer

    $('.edit').on('click', function(){

        id = $(this).data('id');

        var reatailer = document.querySelector(".editreatailer"+id);
        reatailer.classList.add("openPopup");
    })
      function closeEditReatailer(id){
        var reatailer = document.querySelector(".editreatailer"+id);

        reatailer.classList.remove("openPopup");
    }
      </script>

<script>
    $('#union').on('change', function(){
        val = $('#union').val();

        $.ajax({
            url: "/get-bazar/"+val,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {

                html = `<option disabled value="">Select Bazar</option>`;

                res.forEach(element => {
                    html += `<option selected value=`+element.id+`>`+element.name+'</option>';
                });

                $('#bazar').html(html);

            }
        });
    })
</script>

<script>
    $('#union_new').on('change', function(){
        val = $('#union_new').val();

        $.ajax({
            url: "/get-bazar/"+val,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {

                html = `<option disabled value="">Select Bazar</option>`;

                res.forEach(element => {
                    html += `<option selected value=`+element.id+`>`+element.name+'</option>';
                });

                $('#bazar_new').html(html);

            }
        });
    })
</script>

<script>
    $('#union_select').on('change', function(){
        val = $('#union_select').val();

        $.ajax({
            url: "/get-bazar/"+val,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {

                html = `<option disabled value="">Select Bazar</option>`;

                res.forEach(element => {
                    html += `<option selected value=`+element.id+`>`+element.name+'</option>';
                });

                $('#bazar_select').html(html);

            }
        });
    })
</script>

<script>
    $('.bazar').on('change', function(){
        val = $(this).val();

        if (val == 'bazar-side') {
            $('.bazar-side-input').toggle();
        }else{
            $('.bazar-side-input').toggle();
        }
    })
</script>

<script>
    $('.phone').on('keyup', function(){
        val = $('.phone').val();

        $.ajax({
            url: "/sr/check-retailer/"+val,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {

                if (res == 0) {

                    $('.alert').hide();

                    $('.submit').removeAttr('disabled');

                } else {
                    html = ` <span class="alert alert-success" style="color:red;">Retailer Already Exist. Retailer name: <a href="#"> `+res.shop_name+` </a> </span>`;

                    $('.phone').after(html);

                    $('.submit').attr('disabled','disabled');
                }

            }
        });
    })
</script>
</body>

</html>
