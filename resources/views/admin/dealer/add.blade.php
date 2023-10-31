<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link
    href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;600;700&family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('admin/dealer_add/css/style.css') }}" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <div class="addNewDealer-container">
    <div class="addNewDealer">
      <div class="addNewDealer__navbar">
        <h2 class="addNewDealer__navbar-title">Add new dealer</h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none">
          <g filter="url(#filter0_d_1_10745)">
            <circle cx="37.5" cy="27.5" r="17.5" fill="white" />
            <circle cx="37.5" cy="27.5" r="17" stroke="black" stroke-opacity="0.12" />
          </g>
          <path
            d="M40.8609 22.7402C41.1813 22.4199 41.7005 22.4199 42.0209 22.7402C42.3416 23.0602 42.3416 23.5794 42.0209 23.9002L38.5407 27.3803L42.0209 30.8605C42.3412 31.1804 42.3412 31.7005 42.0209 32.0205C41.7005 32.3408 41.1813 32.3408 40.8609 32.0205L37.3808 28.5403L33.9006 32.0205C33.5798 32.3408 33.0606 32.3408 32.7402 32.0205C32.4199 31.7005 32.4199 31.1804 32.7402 30.8605L36.2204 27.3803L32.7402 23.9002C32.4199 23.5798 32.4199 23.0606 32.7402 22.7402C33.061 22.4199 33.5802 22.4199 33.9006 22.7402L37.3808 26.2204L40.8609 22.7402Z"
            fill="#8A94A6" />
          <defs>
            <filter id="filter0_d_1_10745" x="0" y="0" width="75" height="75" filterUnits="userSpaceOnUse"
              color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                result="hardAlpha" />
              <feOffset dy="10" />
              <feGaussianBlur stdDeviation="10" />
              <feComposite in2="hardAlpha" operator="out" />
              <feColorMatrix type="matrix" values="0 0 0 0 0.01875 0 0 0 0 0.181172 0 0 0 0 0.5 0 0 0 0.03 0" />
              <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_10745" />
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_10745" result="shape" />
            </filter>
          </defs>
        </svg>
      </div>
      <div class="addNewDealer__profile__pic">
        <h2 class="addNewDealer__profile__pic-title">Profile Picture</h2>
        <div class="addNewDealer__profile__pic-choose">
          <div class="addNewDealer__profile__pic-so-first">Choose file</div>
          <div class="addNewDealer__profile__pic-so-second">Browse file</div>
        </div>
      </div>
      <div class="addNewDealer__profile__data">
        <div class="addNewDealer__profile__dataso">
          <h2 class="addNewDealer__profile__name">Name</h2>
          <input class="addNewDealer__profile__datafild" type="text" placeholder="Muhammad Rasel">
        </div>
        <div class="addNewDealer__profile__dataso">
          <h2 class="addNewDealer__profile__name">Email</h2>
          <input class="addNewDealer__profile__datafild" type="text" placeholder="resel@gmail.com">
        </div>
        <div class="addNewDealer__profile__dataso">
          <h2 class="addNewDealer__profile__name">Phone</h2>
          <input class="addNewDealer__profile__datafild" type="text" placeholder="+88012 65656 5555 ">
        </div>
        <div class="addNewDealer__profile__dataso">
          <h2 class="addNewDealer__profile__name">Optional Phone</h2>
          <input class="addNewDealer__profile__datafild" type="text" placeholder="+88012 65656 5555 ">
        </div>
      </div>
      <div class="addNewDealer__profile__dataso">
        <h2 class="addNewDealer__profile__name">NID NO:</h2>
        <input class="addNewDealer__profile__nid" type="text" placeholder="535-685-3335">
      </div>
      <div class="addNewDealer__profile__password">
        <div>
          <h2 class="addNewDealer__profile__name">Password</h2>
          <input class="addNewDealer__profile__datafild" type="text" placeholder="●●●●●●●●">
        </div>
        <div>
          <h2 class="addNewDealer__profile__name">Confirm Password</h2>
          <input class="addNewDealer__profile__datafild" type="text" placeholder="●●●●●●●● ">
        </div>
      </div>
      <div class="addNewDealer__submit">
        <button class="addNewDealer__submit-btn">Cancel</button>
        <button class="addNewDealer__submit-savebtn">Save</button>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="{{ ('admin/dealer_add/js/index.js') }}"></script>
</body>

</html>