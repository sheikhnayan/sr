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
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('admin/retailer_profile_order/css/style.css') }}" />
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <div class="admin__panel-container">
    @include('admin.layouts.sidebar')

    <div class="dashboard">
      <header class="dashboard__navbar">
        <h2 class="dashboard__navbar-title">Retailer Profile</h2>

      </header>
      <div class="dashboard__container">
        <div class="dashboard__card-container">
          <div class="dashboard__card-dots">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="4" viewBox="0 0 18 4" fill="none">
              <path
                d="M9 3C9.55228 3 10 2.55228 10 2C10 1.44772 9.55228 1 9 1C8.44772 1 8 1.44772 8 2C8 2.55228 8.44772 3 9 3Z"
                stroke="#8A94A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M16 3C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1C15.4477 1 15 1.44772 15 2C15 2.55228 15.4477 3 16 3Z"
                stroke="#8A94A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z"
                stroke="#8A94A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div class="dashboard__card-delete">
            <p class="dashboard__card-delete-option">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path
                  d="M5.47272 2.05444H1.99394C1.73033 2.05444 1.47752 2.15916 1.29112 2.34556C1.10472 2.53196 1 2.78477 1 3.04838V10.006C1 10.2696 1.10472 10.5224 1.29112 10.7088C1.47752 10.8952 1.73033 10.9999 1.99394 10.9999H8.95151C9.21512 10.9999 9.46793 10.8952 9.65433 10.7088C9.84073 10.5224 9.94545 10.2696 9.94545 10.006V6.52717"
                  stroke="#8A94A6" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M9.2006 1.30902C9.39831 1.11131 9.66645 1.00024 9.94605 1.00024C10.2257 1.00024 10.4938 1.11131 10.6915 1.30902C10.8892 1.50673 11.0003 1.77488 11.0003 2.05448C11.0003 2.33407 10.8892 2.60222 10.6915 2.79993L5.9703 7.52114L3.98242 8.01811L4.47939 6.03023L9.2006 1.30902Z"
                  stroke="#8A94A6" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              Edit Profile
            </p>
            <p class="dashboard__card-delete-option-delete">
              <svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11 12" fill="none">
                <path d="M1 3H2H10" stroke="#FF565E" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M8.99976 3V10C8.99976 10.2652 8.8944 10.5196 8.70686 10.7071C8.51933 10.8946 8.26497 11 7.99976 11H2.99976C2.73454 11 2.48019 10.8946 2.29265 10.7071C2.10511 10.5196 1.99976 10.2652 1.99976 10V3M3.49976 3V2C3.49976 1.73478 3.60511 1.48043 3.79265 1.29289C3.98019 1.10536 4.23454 1 4.49976 1H6.49976C6.76497 1 7.01933 1.10536 7.20686 1.29289C7.3944 1.48043 7.49976 1.73478 7.49976 2V3"
                  stroke="#FF565E" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4.50024 5.5V8.5" stroke="#FF565E" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6.49976 5.5V8.5" stroke="#FF565E" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              Delete
            </p>
          </div>
          <div class="retailer__data-card">
            <div class="retailer__profile">
              <img src="../assets/profile22.png" alt="">
              <div>
                <h2 class="retailer__name">Muhammad Rasel</h2>
                <p class="retailer__bazar">Bazar Name</p>
              </div>
            </div>
            <div class="retailer__contact-wrapper">
              <div class="retailer__contact">
                <button class="retailer__contact-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                    <path
                      d="M14.0074 5.01374C14.9894 5.20496 15.8918 5.68429 16.5993 6.39039C17.3067 7.09648 17.787 7.99722 17.9786 8.97731M14.0074 1C16.0476 1.22621 17.95 2.13807 19.4024 3.58586C20.8548 5.03365 21.7708 6.93131 22 8.96727M20.9946 16.9747V19.985C20.9958 20.2644 20.9384 20.5411 20.8263 20.7971C20.7141 21.0532 20.5496 21.283 20.3433 21.4719C20.1369 21.6609 19.8934 21.8047 19.6281 21.8942C19.3629 21.9838 19.0818 22.017 18.803 21.9919C15.7093 21.6563 12.7377 20.6012 10.1267 18.9113C7.69763 17.3707 5.63816 15.3152 4.0946 12.8907C2.39553 10.2729 1.33816 7.29253 1.00816 4.19092C0.983037 3.91344 1.01608 3.63378 1.10518 3.36974C1.19428 3.1057 1.33749 2.86307 1.52568 2.65729C1.71388 2.45152 1.94295 2.28712 2.19829 2.17454C2.45364 2.06197 2.72967 2.0037 3.00882 2.00343H6.02489C6.51279 1.99864 6.9858 2.17109 7.35574 2.48863C7.72568 2.80617 7.96731 3.24714 8.0356 3.72934C8.1629 4.69271 8.39899 5.63861 8.73935 6.54899C8.87461 6.90815 8.90389 7.29847 8.82371 7.67372C8.74352 8.04897 8.55724 8.39342 8.28694 8.66624L7.01014 9.9406C8.44132 12.4527 10.5253 14.5328 13.0423 15.9612L14.3191 14.6869C14.5924 14.4171 14.9375 14.2311 15.3135 14.1511C15.6895 14.0711 16.0805 14.1003 16.4404 14.2353C17.3525 14.575 18.3002 14.8107 19.2654 14.9377C19.7538 15.0065 20.1998 15.252 20.5186 15.6276C20.8375 16.0031 21.0069 16.4826 20.9946 16.9747Z"
                      stroke="#595F84" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </button>
                <div>
                  <h2 class="retailer__phone">Phone </h2>
                  <p class="retailer__number">+880125 5566 55</p>
                </div>
              </div>
              <div class="retailer__contact">
                <button class="retailer__contact-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                    <path
                      d="M17 3H3C1.89543 3 1 3.89543 1 5V19C1 20.1046 1.89543 21 3 21H17C18.1046 21 19 20.1046 19 19V5C19 3.89543 18.1046 3 17 3Z"
                      stroke="#595F84" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M14 1V5" stroke="#595F84" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M6 1V5" stroke="#595F84" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M1 9H19" stroke="#595F84" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </button>
                <div>
                  <h2 class="retailer__phone">Join Date </h2>
                  <p class="retailer__number">10 march 2023</p>
                </div>
              </div>
            </div>
          </div>
          <div class="retailer__order-wrapper">
            <div class="retailer__order">
              <h2 class="retailer__order-title">TOTAL ORDER</h2>
              <p class="retailer__order-number">200</p>
            </div>
            <div class="retailer__order">
              <h2 class="retailer__order-title">TOTAL ORDER</h2>
              <p class="retailer__order-number">200</p>
            </div>
            <div class="retailer__order">
              <h2 class="retailer__order-title">TOTAL ORDER</h2>
              <p class="retailer__order-number">200</p>
            </div>
            <div class="retailer__order">
              <h2 class="retailer__order-title">TOTAL ORDER</h2>
              <p class="retailer__order-number">200</p>
            </div>
          </div>
        </div>

        <div class="dashboard__main-container">
          <main>
            <div class="dashboard__top-ten">
              <div class="tabs dashboard__top-tabs">
                <div class="tabs-nav-wrapper">
                  <ul id="tabs-nav">
                    <li><a href="#tab1">All Orders</a></li>
                    <li><a href="#tab2">Delivered</a></li>
                    <li><a href="#tab3">Canceled</a></li>
                  </ul>
                  <div class="tabs-nav-right">

                    <div class="tabs-nav-right-download">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path
                          d="M16.5 11.5001V14.8335C16.5 15.2755 16.3244 15.6994 16.0118 16.012C15.6993 16.3245 15.2754 16.5001 14.8333 16.5001H3.16667C2.72464 16.5001 2.30072 16.3245 1.98816 16.012C1.67559 15.6994 1.5 15.2755 1.5 14.8335V11.5001"
                          stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4.83203 7.33325L8.9987 11.4999L13.1654 7.33325" stroke="#64748B" stroke-width="1.5"
                          stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9 11.5V1.5" stroke="#64748B" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                </div>
                <!-- END tabs-nav -->
                <div id="tabs-content" class="dashboard__top-tabs-content">
                  <div id="tab1" class="tab-content dashboard__tab-content">
                    <table>
                      <thead>
                        <tr>

                          <th>Date
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                              <path opacity="0.2"
                                d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z"
                                fill="#0F172A" />
                            </svg>
                          </th>
                          <th>Sr
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                              <path opacity="0.2"
                                d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z"
                                fill="#0F172A" />
                            </svg>
                          </th>
                          <th>Total items
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                              <path opacity="0.2"
                                d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z"
                                fill="#0F172A" />
                            </svg>
                          </th>
                          <th>amount
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                              <path opacity="0.2"
                                d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z"
                                fill="#0F172A" />
                            </svg>
                          </th>
                          <th>Payment
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                              <path opacity="0.2"
                                d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z"
                                fill="#0F172A" />
                            </svg>
                          </th>
                          <th>Status
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                              <path opacity="0.2"
                                d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z"
                                fill="#0F172A" />
                            </svg>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td>Apr 24, 2022</td>
                          <td>Mohammad Rasel</td>
                          <td>60</td>
                          <td>৳105.62</td>
                          <td class="paid__status">Paid</td>
                          <td class="delivery__status">
                            <div class="delivery__status-group">
                              <button class="delivery__status-btn">Delivered</button>
                              <p>20%</p>
                              <svg xmlns="http://www.w3.org/2000/svg" width="98" height="5" viewBox="0 0 98 5"
                                fill="none">
                                <rect width="98" height="5" rx="2.5" fill="#0CAF60" fill-opacity="0.17" />
                                <rect width="21" height="5" rx="2.5" fill="#0CAF60" />
                              </svg>
                            </div>
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path d="M9.7998 6.19952L6.9998 8.99952L9.7998 11.7995" stroke="#8A94A6"
                                  stroke-width="1.0625" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M0.999999 9C0.999999 13.4184 4.5816 17 9 17C13.4184 17 17 13.4184 17 9C17 4.5816 13.4184 1 9 1C4.5816 0.999999 1 4.5816 0.999999 9Z"
                                  stroke="#8A94A6" stroke-width="1.0625" stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>Apr 24, 2022</td>
                          <td>Mohammad Rasel</td>
                          <td>60</td>
                          <td>৳105.62</td>
                          <td class="paid__status">Paid</td>
                          <td class="delivery__status">
                            <div class="delivery__status-group">
                              <button class="delivery__status-btn ondelivery">On Delivery</button>

                            </div>
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path d="M9.7998 6.19952L6.9998 8.99952L9.7998 11.7995" stroke="#8A94A6"
                                  stroke-width="1.0625" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M0.999999 9C0.999999 13.4184 4.5816 17 9 17C13.4184 17 17 13.4184 17 9C17 4.5816 13.4184 1 9 1C4.5816 0.999999 1 4.5816 0.999999 9Z"
                                  stroke="#8A94A6" stroke-width="1.0625" stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>Apr 24, 2022</td>
                          <td>Mohammad Rasel</td>
                          <td>60</td>
                          <td>৳105.62</td>
                          <td class="paid__status">Paid</td>
                          <td class="delivery__status">
                            <div class="delivery__status-group">
                              <button class="delivery__status-btn">Delivered</button>
                              <p>20%</p>
                              <svg xmlns="http://www.w3.org/2000/svg" width="98" height="5" viewBox="0 0 98 5"
                                fill="none">
                                <rect width="98" height="5" rx="2.5" fill="#0CAF60" fill-opacity="0.17" />
                                <rect width="21" height="5" rx="2.5" fill="#0CAF60" />
                              </svg>
                            </div>
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path d="M9.7998 6.19952L6.9998 8.99952L9.7998 11.7995" stroke="#8A94A6"
                                  stroke-width="1.0625" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M0.999999 9C0.999999 13.4184 4.5816 17 9 17C13.4184 17 17 13.4184 17 9C17 4.5816 13.4184 1 9 1C4.5816 0.999999 1 4.5816 0.999999 9Z"
                                  stroke="#8A94A6" stroke-width="1.0625" stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>Apr 24, 2022</td>
                          <td>Mohammad Rasel</td>
                          <td>60</td>
                          <td>৳105.62</td>
                          <td class="paid__status">Paid</td>
                          <td class="delivery__status">
                            <div class="delivery__status-group">
                              <button class="delivery__status-btn cancel-btn">Cancelled</button>
                              <p class="cancel-reason">Reason for cancellation</p>
                            </div>
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path d="M9.7998 6.19952L6.9998 8.99952L9.7998 11.7995" stroke="#8A94A6"
                                  stroke-width="1.0625" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M0.999999 9C0.999999 13.4184 4.5816 17 9 17C13.4184 17 17 13.4184 17 9C17 4.5816 13.4184 1 9 1C4.5816 0.999999 1 4.5816 0.999999 9Z"
                                  stroke="#8A94A6" stroke-width="1.0625" stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>Apr 24, 2022</td>
                          <td>Mohammad Rasel</td>
                          <td>60</td>
                          <td>৳105.62</td>
                          <td class="paid__status">Paid</td>
                          <td class="delivery__status">
                            <div class="delivery__status-group">
                              <button class="delivery__status-btn">Delivered</button>
                              <p>20%</p>
                              <svg xmlns="http://www.w3.org/2000/svg" width="98" height="5" viewBox="0 0 98 5"
                                fill="none">
                                <rect width="98" height="5" rx="2.5" fill="#0CAF60" fill-opacity="0.17" />
                                <rect width="21" height="5" rx="2.5" fill="#0CAF60" />
                              </svg>
                            </div>
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path d="M6.19922 8.20001L8.99922 11L11.7992 8.20001" stroke="#595F84"
                                  stroke-width="1.0625" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M9 17C13.4184 17 17 13.4184 17 9C17 4.5816 13.4184 1 9 1C4.5816 1 1 4.5816 1 9C1 13.4184 4.5816 17 9 17Z"
                                  stroke="#595F84" stroke-width="1.0625" stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div>
                      <table>
                        <thead>
                          <tr>
                            <th>Product name</th>
                            <th>qty</th>
                            <th>Price</th>
                            <th>Sr Price</th>
                            <th>O/C</th>
                            <th>total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Fresh Water</td>
                            <td class="quantity__scop-wrapper">
                              <div class="quantity__scop">
                                <p>4</p>
                                <button>B</button>
                              </div>
                              <div class="quantity__scop">
                                <p>14</p>
                                <button>P</button>
                              </div>
                            </td>
                            <td>Tk 20</td>
                            <td>Tk 18</td>
                            <td class="oder__comission"> 10 Tk</td>
                            <td> Tk 100</td>
                          </tr>
                          <tr>
                            <td>Fresh Water</td>
                            <td class="quantity__scop-wrapper">
                              <div class="quantity__scop">
                                <p>4</p>
                                <button>B</button>
                              </div>
                              <div class="quantity__scop">
                                <p>14</p>
                                <button>P</button>
                              </div>
                            </td>
                            <td>Tk 20</td>
                            <td>Tk 18</td>
                            <td class="oder__comission comission-lose"> -10 Tk</td>
                            <td> Tk 100</td>
                          </tr>
                          <tr>
                            <td>Fresh Water</td>
                            <td class="quantity__scop-wrapper">
                              <div class="quantity__scop">
                                <p>4</p>
                                <button>B</button>
                              </div>
                              <div class="quantity__scop">
                                <p>14</p>
                                <button>P</button>
                              </div>
                            </td>
                            <td>Tk 20</td>
                            <td>Tk 18</td>
                            <td class="oder__comission"> 10 Tk</td>
                            <td> Tk 100</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total__ammount">Tk 10</td>
                            <td class="total__ammount">Tk 300</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="tab2" class="tab-content dashboard__tab-content">

                  </div>
                  <div id="tab3" class="tab-content dashboard__tab-content">

                  </div>
                </div>
                <!-- END tabs-content -->
                <div class="tabs-content-footer">
                  <div class="tabs-footer-left">
                    <div class="small-cap">
                      <p class="tabs-footer-title">Total Order : <span>06</span></p>
                    </div>
                    <div class="small-cap">
                      <p class="tabs-footer-title">O/C : <span>06</span></p>
                    </div>
                    <div class="small-cap">
                      <p class="tabs-footer-title">Cancel Amount : <span class="cancel-number"> Tk 500,00</span></p>
                    </div>
                  </div>
                  <div>
                    <p class="tabs-footer-title">Total Amount :<span>Tk 500,00</span></p>
                  </div>
                </div>
              </div>
              <!-- END tabs -->
            </div>
          </main>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="{{ asset('admin/retailer_profile_order/js/index.js') }}"></script>
</body>

</html>