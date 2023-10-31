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
    </style>
  </head>
  <body class="lg:flex lg:h-screen lg:items-center lg:justify-center lg:bg-[#f4f9ff]">
    <div class="relative mx-auto bg-white p-4 lg:min-h-[770px] lg:w-[380px] lg:overflow-hidden lg:rounded-3xl lg:border-[6px] lg:border-[#f4f9ff] lg:p-6 lg:shadow-[0_20px_50px_-20px_rgba(0,26,130,0.21)]">
        <div class="mb-8 flex h-11 items-center justify-between">
          <a href="home.html">
            <ion-icon name="chevron-back-outline" class="tran h-7 w-7 cursor-pointer rounded-full bg-[#F8F8FB] p-2 text-[#8A94A6] hover:ring-1 hover:ring-slate-400"> </ion-icon>
          </a>
          <h1 class="text-lg font-bold text-[#222950]">Order History</h1>
          <span class="w-7"></span>
        </div>
      
        <div class="overflow-x-auto lg:max-h-[650px] lg:overflow-scroll">
            <div class="inline-block w-full min-w-[700px] py-2">
              <div class="overflow-hidden">
                <table class="min-w-full border border-slate-200 text-center text-sm font-light">
                  <thead class="border-b bg-slate-50 border-slate-200 font-medium text-slate-700">
                    <tr>
                      <th class="bn border-r border-slate-200 p-3">পণ্যের নাম</th>
                      <th class="bn border-r border-slate-200 p-3">পরিমান</th>
                      <th class="bn border-r border-slate-200 p-3">দাম</th>
                      <th class="bn border-r border-slate-200 p-3">দোকানদার</th>
                      <th class="bn border-r border-slate-200 p-3">মোট দাম</th>
                      <th class="bn border-r border-slate-200 p-3">O/C</th>
                    </tr>
                  </thead>
                  <tbody class="text-slate-600">
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">ঘি টোস্ট বিস্কুট (48)</td>
                      <td class="border-r border-slate-200 p-3 bn">বক্স - 27 পিছ - 0</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-green-600">-1904</td>
                    </tr>
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">পাতা নুডলস (12)</td>
                      <td class="border-r border-slate-200 p-3 bn">পলি -  29 7.92</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-red-500">-1904</td>
                    </tr>
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">পাতা নুডলস (12)</td>
                      <td class="border-r border-slate-200 p-3 bn">পলি -  29 7.92</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-green-600">-1904</td>
                    </tr>
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">ঘি টোস্ট বিস্কুট (48)</td>
                      <td class="border-r border-slate-200 p-3 bn">বক্স - 27 পিছ - 0</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-green-600">-1904</td>
                    </tr>
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">পাতা নুডলস (12)</td>
                      <td class="border-r border-slate-200 p-3 bn">পলি -  29 7.92</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-red-500">-1904</td>
                    </tr>
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">পাতা নুডলস (12)</td>
                      <td class="border-r border-slate-200 p-3 bn">পলি -  29 7.92</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-green-600">-1904</td>
                    </tr>
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">ঘি টোস্ট বিস্কুট (48)</td>
                      <td class="border-r border-slate-200 p-3 bn">বক্স - 27 পিছ - 0</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-green-600">-1904</td>
                    </tr>
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">পাতা নুডলস (12)</td>
                      <td class="border-r border-slate-200 p-3 bn">পলি -  29 7.92</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-red-500">-1904</td>
                    </tr>
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">পাতা নুডলস (12)</td>
                      <td class="border-r border-slate-200 p-3 bn">পলি -  29 7.92</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-green-600">-1904</td>
                    </tr>
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">ঘি টোস্ট বিস্কুট (48)</td>
                      <td class="border-r border-slate-200 p-3 bn">বক্স - 27 পিছ - 0</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-green-600">-1904</td>
                    </tr>
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">পাতা নুডলস (12)</td>
                      <td class="border-r border-slate-200 p-3 bn">পলি -  29 7.92</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-red-500">-1904</td>
                    </tr>
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">পাতা নুডলস (12)</td>
                      <td class="border-r border-slate-200 p-3 bn">পলি -  29 7.92</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-green-600">-1904</td>
                    </tr>
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">ঘি টোস্ট বিস্কুট (48)</td>
                      <td class="border-r border-slate-200 p-3 bn">বক্স - 27 পিছ - 0</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-green-600">-1904</td>
                    </tr>
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">পাতা নুডলস (12)</td>
                      <td class="border-r border-slate-200 p-3 bn">পলি -  29 7.92</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-red-500">-1904</td>
                    </tr>
                    <tr class="border-b border-slate-200 ">
                      <td class="border-r border-slate-200 p-3 bn">পাতা নুডলস (12)</td>
                      <td class="border-r border-slate-200 p-3 bn">পলি -  29 7.92</td>
                      <td class="border-r border-slate-200 p-3 bn">4.17</td>
                      <td class="border-r border-slate-200 p-3 bn">14</td>
                      <td class="border-r border-slate-200 p-3 bn">5205.96</td>
                      <td class="border-r border-slate-200 p-3 bn text-green-600">-1904</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

       
      

        <!-- add new icon -->
        <div class="tran fixed bottom-8 right-8 z-20 flex h-[50px] w-[50px] cursor-pointer items-center justify-center rounded-full bg-blue-500 shadow-md ring-2 ring-white hover:bg-blue-600 lg:absolute">
          <ion-icon class="text-2xl text-white" name="download-outline"></ion-icon>
        </div>

      </div>
      
    

    <script src="{{ asset('front/script.js') }}"></script>
  </body>
</html>
