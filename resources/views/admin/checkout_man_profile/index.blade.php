<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CheakOut-Man Profile</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;600;700&family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('admin/checkout_man_profile/css/style.css') }}" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  </head>
  <body>
    <div class="admin__panel-container">
      @include('admin.layouts.sidebar')


      <div class="dashboard">
        <header class="dashboard__navbar">
          <h2 class="dashboard__navbar-title">Check out Man Profile</h2>
        </header>


        <div class="dashboard__container">
          
          <div class="sr__profile">
            <div class="sr__details-container">
              <div class="sr__name-details">
                <img class="sr__image" src="./assets/man.png">
                <div class="sr__name-container">
                  <h2 class="sr__name">Muhammad Rasel</h2>
                  <p class="sr__mobile">+880125 5566 5566</p>
                </div>
              </div>
              <div class="sr__joining">
                <img src="./assets/date.png" class="sr__joining-icon">
                <div class="sr__joining-container">
                  <h3 class="sr__joining-title">Join Date</h3>
                  <p class="sr__joining-date">10 march 2023</p>
                </div>
              </div>
            </div>
            <button class="sr_edit-icon"><svg width="18" height="4" viewBox="0 0 18 4" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 3C9.55228 3 10 2.55228 10 2C10 1.44772 9.55228 1 9 1C8.44772 1 8 1.44772 8 2C8 2.55228 8.44772 3 9 3Z" stroke="#8A94A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M16 3C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1C15.4477 1 15 1.44772 15 2C15 2.55228 15.4477 3 16 3Z" stroke="#8A94A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#8A94A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg></button>
            <div class="sr__edit-container">
              <button class="sr__edit-btn"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.47272 2.05434H1.99394C1.73033 2.05434 1.47752 2.15905 1.29112 2.34545C1.10472 2.53185 1 2.78467 1 3.04828V10.0058C1 10.2695 1.10472 10.5223 1.29112 10.7087C1.47752 10.8951 1.73033 10.9998 1.99394 10.9998H8.95151C9.21512 10.9998 9.46793 10.8951 9.65433 10.7087C9.84073 10.5223 9.94545 10.2695 9.94545 10.0058V6.52706" stroke="#8A94A6" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9.2006 1.30896C9.39831 1.11125 9.66645 1.00018 9.94605 1.00018C10.2257 1.00018 10.4938 1.11125 10.6915 1.30896C10.8892 1.50667 11.0003 1.77481 11.0003 2.05441C11.0003 2.33401 10.8892 2.60216 10.6915 2.79987L5.9703 7.52108L3.98242 8.01804L4.47939 6.03017L9.2006 1.30896Z" stroke="#8A94A6" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>Edit Profile</button>
              <button class="sr__delete-btn"><svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 3.00006H2H10" stroke="#FF565E" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.99976 3V10C8.99976 10.2652 8.8944 10.5196 8.70686 10.7071C8.51933 10.8946 8.26497 11 7.99976 11H2.99976C2.73454 11 2.48019 10.8946 2.29265 10.7071C2.10511 10.5196 1.99976 10.2652 1.99976 10V3M3.49976 3V2C3.49976 1.73478 3.60511 1.48043 3.79265 1.29289C3.98019 1.10536 4.23454 1 4.49976 1H6.49976C6.76497 1 7.01933 1.10536 7.20686 1.29289C7.3944 1.48043 7.49976 1.73478 7.49976 2V3" stroke="#FF565E" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.50024 5.5V8.5" stroke="#FF565E" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.49976 5.5V8.5" stroke="#FF565E" stroke-linecap="round" stroke-linejoin="round"/>
              </svg> Delete</button>
            </div>
          </div>

          <div class="dashboard_tab-contents">
            <div id="pickup_tabs" class="dashboard_tab-content">
              <div class="dashboard__main-so-container">
                <div class="dashboard__so">
                  <h3 class="dashboard__so-title">Pick-up Man</h3>
                  <div class="dashboard__so-btn-container">
                    <div class="dashboard__so-btn-group flex-grup">

                      <button class="dashboard__so-btn flex-grup">
                        <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="Group 33769">
                          <path id="Vector" d="M14.3333 3.33301H2.66667C1.74619 3.33301 1 4.0792 1 4.99967V16.6663C1 17.5868 1.74619 18.333 2.66667 18.333H14.3333C15.2538 18.333 16 17.5868 16 16.6663V4.99967C16 4.0792 15.2538 3.33301 14.3333 3.33301Z" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path id="Vector_2" d="M11.832 1.6665V4.99984" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path id="Vector_3" d="M5.16797 1.6665V4.99984" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path id="Vector_4" d="M1 8.33301H16" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                        </svg>  
                        <p>April 11 - April 24</p>                        
                      </button>

                      <button class="dashboard__so-btn">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect width="18" height="18" fill="#1E1E1E"/>
                          <g id="Pickup Man" clip-path="url(#clip0_0_1)">
                          <rect width="1440" height="900" transform="translate(-1355 -318)" fill="#F8FAFF"/>
                          <g id="background" filter="url(#filter0_d_0_1)">
                          <rect x="-1103" y="-21" width="1145" height="621" rx="12" fill="white"/>
                          </g>
                          <g id="Group 33722">
                          <g id="background_2">
                          <mask id="path-2-inside-1_0_1" fill="white">
                          <path d="M-1103 3C-1103 -8.31371 -1103 -13.9706 -1099.49 -17.4853C-1095.97 -21 -1090.31 -21 -1079 -21H18C29.3137 -21 34.9706 -21 38.4852 -17.4853C42 -13.9706 42 -8.31371 42 3V39H-1103V3Z"/>
                          </mask>
                          <path d="M-1103 3C-1103 -8.31371 -1103 -13.9706 -1099.49 -17.4853C-1095.97 -21 -1090.31 -21 -1079 -21H18C29.3137 -21 34.9706 -21 38.4852 -17.4853C42 -13.9706 42 -8.31371 42 3V39H-1103V3Z" fill="white"/>
                          <path d="M-1103 -21H42H-1103ZM42 40H-1103V38H42V40ZM-1103 39V-21V39ZM42 -21V39V-21Z" fill="#007AFF" fill-opacity="0.12" mask="url(#path-2-inside-1_0_1)"/>
                          </g>
                          <g id="Frame 33906">
                          <g id="Search/default">
                          <g id="Group 33768">
                          <path id="Vector" d="M16.5 11.5V14.8333C16.5 15.2754 16.3244 15.6993 16.0118 16.0118C15.6993 16.3244 15.2754 16.5 14.8333 16.5H3.16667C2.72464 16.5 2.30072 16.3244 1.98816 16.0118C1.67559 15.6993 1.5 15.2754 1.5 14.8333V11.5" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path id="Vector_2" d="M4.83203 7.33301L8.9987 11.4997L13.1654 7.33301" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path id="Vector_3" d="M9 11.5V1.5" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <rect x="-11.5" y="-11.5" width="41" height="41" rx="6.5" stroke="#E2E8F0"/>
                          </g>
                          </g>
                          </g>
                          </g>
                          <defs>
                          <filter id="filter0_d_0_1" x="-1123" y="-31" width="1185" height="661" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                          <feOffset dy="10"/>
                          <feGaussianBlur stdDeviation="10"/>
                          <feComposite in2="hardAlpha" operator="out"/>
                          <feColorMatrix type="matrix" values="0 0 0 0 0.01875 0 0 0 0 0.181172 0 0 0 0 0.5 0 0 0 0.03 0"/>
                          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_0_1"/>
                          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_0_1" result="shape"/>
                          </filter>
                          <clipPath id="clip0_0_1">
                          <rect width="1440" height="900" fill="white" transform="translate(-1355 -318)"/>
                          </clipPath>
                          </defs>
                          </svg>
                          
                      </button>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="dashboard__s-container">

            <div class="dashboard__s-item">
              <img
                class="dashboard__s-item-img"
                src="./assets/Rectangle.png"
              />
              <h2 class="dashboard__s-item-title">রমজান আলী</h2>
              <button
                class="dashboard_view-profile-btn"
              >
                View
              </button>
            </div>


            <div class="dashboard__s-item">
              <img
                class="dashboard__s-item-img"
                src="./assets/Rectangle.png"
              />
              <h2 class="dashboard__s-item-title">রমজান আলী</h2>
              <button
                class="dashboard_view-profile-btn"
              >
                View
              </button>
            </div>




            <div class="dashboard__s-item">
              <img
                class="dashboard__s-item-img"
                src="./assets/Rectangle.png"
              />
              <h2 class="dashboard__s-item-title">রমজান আলী</h2>
              <button
                class="dashboard_view-profile-btn"
              >
                View
              </button>
            </div>




            <div class="dashboard__s-item">
              <img
                class="dashboard__s-item-img"
                src="./assets/Rectangle.png"
              />
              <h2 class="dashboard__s-item-title">রমজান আলী</h2>
              <button
                class="dashboard_view-profile-btn"
              >
                View
              </button>
            </div>



            <div class="dashboard__s-item">
              <img
                class="dashboard__s-item-img"
                src="./assets/Rectangle.png"
              />
              <h2 class="dashboard__s-item-title">রমজান আলী</h2>
              <button
                class="dashboard_view-profile-btn"
              >
                View
              </button>
            </div>
          </div>




        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('admin/checkout_man_profile/js/index.js') }}"></script>
  </body>
</html>
