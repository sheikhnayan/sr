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
  <link rel="stylesheet" href="{{ asset('admin/delivery_order/css/style.css') }}" />
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
        <h2 class="dashboard__navbar-title">Dealer</h2>
        <input class="dashboard__navbar-search" type="text" placeholder="Search anything..." />
      </header>
      <div class="dashboard__container">
        <div class="dashboard__card-container">




        </div>

        <div class="dashboard__main-container">
          <main>

            <div class="dashboard__top-ten">
              <div class="tabs dashboard__top-tabs">
                <div class="tabs-nav-wrapper">
                  <ul id="tabs-nav">
                    <li><a href="#tab1">All Orders</a></li>
                    <li><a href="#tab2">On Delivery</a></li>
                    <li><a href="#tab3">Delivered</a></li>
                    <li><a href="#tab4">Canceled</a></li>
                    <li><a href="#tab5">Baki</a></li>
                  </ul>
                  <div class="tabs-nav-right">
                    <div class="tabs-nav-right-datefield">
                      <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20" fill="none">
                          <path
                            d="M14.3333 3.33337H2.66667C1.74619 3.33337 1 4.07957 1 5.00004V16.6667C1 17.5872 1.74619 18.3334 2.66667 18.3334H14.3333C15.2538 18.3334 16 17.5872 16 16.6667V5.00004C16 4.07957 15.2538 3.33337 14.3333 3.33337Z"
                            stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M11.832 1.66663V4.99996" stroke="#64748B" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                          <path d="M5.16797 1.66663V4.99996" stroke="#64748B" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                          <path d="M1 8.33325H16" stroke="#64748B" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        </svg>
                      </div>
                      <p class="tabs-nav-right-date">April 11 - April 24</p>
                    </div>
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
                          <th>Orders
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                              <path opacity="0.2"
                                d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z"
                                fill="#0F172A" />
                            </svg>
                          </th>
                          <th>Date
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                              <path opacity="0.2"
                                d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z"
                                fill="#0F172A" />
                            </svg>
                          </th>
                          <th>Retailer
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                              <path opacity="0.2"
                                d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z"
                                fill="#0F172A" />
                            </svg>
                          </th>
                          <th>Amount
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                              <path opacity="0.2"
                                d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z"
                                fill="#0F172A" />
                            </svg>
                          </th>
                          <th>Total QTY
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
                          <td>SKN1200</td>
                          <td>Apr 24, 2022</td>
                          <td>Mohammad Rasel</td>
                          <td>৳105.62</td>
                          <td>5000</td>
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
                          <td>SKN1200</td>
                          <td>Apr 24, 2022</td>
                          <td>Mohammad Rasel</td>
                          <td>৳105.62</td>
                          <td>5000</td>
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
                          <td>SKN1200</td>
                          <td>Apr 24, 2022</td>
                          <td>Mohammad Rasel</td>
                          <td>৳105.62</td>
                          <td>5000</td>
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
                          <td>SKN1200</td>
                          <td>Apr 24, 2022</td>
                          <td>Mohammad Rasel</td>
                          <td>৳105.62</td>
                          <td>5000</td>
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
                          <td>SKN1200</td>
                          <td>Apr 24, 2022</td>
                          <td>Mohammad Rasel</td>
                          <td>৳105.62</td>
                          <td>5000</td>
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
                  <div class="show_result-wrapper">
                    <h2 class="show_result-title">Show result:</h2>
                    <input class="show_resultfild" type="text" placeholder="6">
                  </div>
                  <div class="dashboard__page__navigator">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M12.5 5L7.5 10L12.5 15" stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <p class="dashboard__page__navigator-btn">1</p>
                    <p class="dashboard__page__navigator-btn">2</p>
                    <p class="dashboard__page__navigator-btn">3</p>
                    <p class="dashboard__page__navigator-btn">4</p>
                    <p>...</p>
                    <p class="dashboard__page__navigator-btn">20</p>
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M7.5 5L12.5 10L7.5 15" stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </div>
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
  <script src="{{ asset('admin/delivery_order/js/index.js') }}"></script>
</body>

</html>