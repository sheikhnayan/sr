<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Route-Day</title>

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
      .popup.openPopup{
        display: flex;
        animation: popup .3s ease;
        }
        @keyframes popup {
        0%{ opacity: 0;}
        100%{ opacity: 1;}
        }

    </style>
  </head>
  <body class="lg:flex lg:h-screen lg:items-center lg:justify-center lg:bg-[#f4f9ff]">
    <div class="relative mx-auto bg-white p-4 lg:min-h-[770px] lg:w-[380px] lg:overflow-hidden lg:rounded-3xl lg:border-[6px] lg:border-[#f4f9ff] lg:p-6 lg:shadow-[0_20px_50px_-20px_rgba(0,26,130,0.21)]">
      <div class="mb-8 flex h-11 items-center justify-between">
        <a href="route.html">
          <ion-icon name="chevron-back-outline" class="tran h-7 w-7 cursor-pointer rounded-full bg-[#F8F8FB] p-2 text-[#8A94A6] hover:ring-1 hover:ring-slate-400"> </ion-icon>
        </a>

        <h1 class="text-lg font-bold text-[#222950] bn">{{ $day }}</h1>
        <span class="w-7"></span>
      </div>


      <!-- day list -->
      <ul class="flex flex-col gap-2">
        @foreach ($data as $key => $item)
        <li class="tran group day-list">
          <p class="bn font-medium text-[#595F84]"><span class="text-[#595F84] bn">{{ $key + 1 }} -</span> {{ $item->bazar->name }}</p>
          <span class="flex h-5 items-center justify-center rounded-full px-2 font-medium text-[#595F84]">6</span>
          <ion-icon onclick="routeEdit({{ $item->id }})" class="text-lg text-[#94A3B8] group-hover:text-blue-500 tran" name="create-outline"></ion-icon>
        </li>

        <!-- Edit bazar popup -->
        <div class="routeEdit{{ $item->id }} popup_bg popup !z-[100]">

          <div class="relative mt-20 min-w-[315px] rounded-xl bg-white p-5 md:min-w-[580px]">
            <ion-icon onclick="edit_route_close({{ $item->id }})" class="absolute -top-16 right-0 h-6 w-6 cursor-pointer overflow-hidden rounded-full bg-white p-2 text-blue-600" name="close-outline"></ion-icon>

            <div class="mb-8 flex items-center justify-between">
              <h1 class="bn text-[18px] font-semibold text-[#595F84]">Edit Route</h1>
            </div>

            <form action="" class="flex flex-col gap-4">
            {{-- <select name="number" id="number" class="reatailer-input text-[#222950]">
                <option value="">Select Number</option>
                <option value="number">01</option>
                <option value="number">02</option>
                <option value="number">03</option>
                <option value="number">04</option>
                <option value="number">05</option>
              </select> --}}
              <select name="union" id="union" name="union_id" class="reatailer-input text-[#222950]">
                <option disabled value="">Select Union</option>
                @foreach ($union as $baz)
                <option {{ $baz->id == $item->union_id ? 'selected':'' }} value="{{ $baz->id }}">{{ $baz->name }}</option>
                @endforeach
              </select>
              <select name="bazar" id="bazar" class="reatailer-input text-[#222950]">
                <option disabled value="">Select Bazar</option>
                @foreach ($bazar as $baza)
                <option {{ $baza->id == $item->bazar_id ? 'selected':'' }} value="{{ $baza->id }}">{{ $baza->name }}</option>
                @endforeach
              </select>
              <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-t from-[#0063FF] to-[#258AFF] font-semibold text-white transition-all duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 active:bg-blue-700">Save</button>
              <button type="reset" onclick="edit_route_close()" class="w-full py-4 rounded-xl border border-[#E5E7F0] hover:border-red-500/50 hover:text-red-500 tran font-semibold">Cancel</button>
            </form>
          </div>

        </div>
        @endforeach
      </ul>

        <!-- add new icon -->
        <div onclick="myRoute()" class="tran fixed bottom-8 right-8 z-20 flex h-[50px] w-[50px] cursor-pointer items-center justify-center rounded-full bg-blue-500 shadow-md ring-2 ring-white hover:bg-blue-600 lg:absolute">
          <ion-icon class="text-3xl text-white" name="add-outline"></ion-icon>
        </div>

        <!-- add route popup -->
        <div class="myRoute popup_bg popup !z-[100]">

            <div class="relative mt-20 min-w-[315px] rounded-xl bg-white p-5 md:min-w-[580px]">
              <ion-icon onclick="closeP()" class="absolute -top-16 right-0 h-6 w-6 cursor-pointer overflow-hidden rounded-full bg-white p-2 text-blue-600" name="close-outline"></ion-icon>

              <div class="mb-8 flex items-center justify-between">
                <h1 class="bn text-[18px] font-semibold text-[#595F84]">Add New Route</h1>
              </div>

              <form action="{{ route('front.sr.route.store') }}" class="flex flex-col gap-4" method="POST">
              @csrf
              <select name="day" id="day" class="reatailer-input text-[#222950]" required>
                  <option selected disabled value="">Select Day</option>
                  <option value="saturday">শনিবার</option>
                  <option value="sunday">রবিবার</option>
                  <option value="monday">সোমবার</option>
                  <option value="tuesday">মঙ্গলবার</option>
                  <option value="wednesday">বুধবার</option>
                  <option value="thursday">বৃহস্পতিবার</option>
                </select>
                <select name="union_id" id="union_new" class="reatailer-input text-[#222950]" required>
                  <option selected disabled value="">Select Union</option>
                  @foreach ($union as $item)
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                  @endforeach
                </select>
                <select name="bazar_id" id="bazar_new" class="reatailer-input text-[#222950]" required>
                  <option disabled selected value="">Select Bazar</option>
                </select>
                <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-t from-[#0063FF] to-[#258AFF] font-semibold text-white transition-all duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 active:bg-blue-700">Add Route</button>
                <button type="reset" onclick="closeP()" class="w-full py-4 rounded-xl border border-[#E5E7F0] hover:border-red-500/50 hover:text-red-500 tran font-semibold">Cancel</button>
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
        function routeEdit(id){
        var edit_route = document.querySelector(".routeEdit"+id);

        edit_route.classList.add("openPopup");
      }
      function edit_route_close(id){
        var edit_route = document.querySelector(".routeEdit"+id);

        edit_route.classList.remove("openPopup");
    }

    // add route
    var myRoutee = document.querySelector(".myRoute");
        function myRoute(){
          myRoutee.classList.add("openPopup");
        }
        function closeP(){
          myRoutee.classList.remove("openPopup");
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
  </body>
</html>
