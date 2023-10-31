<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;600;700&family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/sr/css/style.css') }}" />
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
          <h2 class="dashboard__navbar-title">SR Profile</h2>
          <input
            class="dashboard__navbar-search"
            type="text"
            placeholder="Search SO"
          />
        </header>
        <div class="dashboard__container">
          <!-- SR Proflie Start -->
          <div class="sr__profile">
            <div class="sr__details-container">
              <div class="sr__name-details">
                <img class="sr__image" src="{{ asset('storage/'.$data->picture) }}">
                <div class="sr__name-container">
                  <h2 class="sr__name">{{ $data->name }}</h2>
                  <p class="sr__mobile">{{ $data->phone }}</p>
                </div>
              </div>
              <div class="sr__company-details">
                <img class="sr__company-image" src="{{ asset('storage/'.$data->company->logo) }}">
                <h3 class="sr__company-name">{{ $data->company->name }}</h3>
              </div>
              <div class="sr__joining">
                <img src="{{ asset('admin/sr/assets/date.png') }}" class="sr__joining-icon">
                <div class="sr__joining-container">
                  <h3 class="sr__joining-title">Join Date</h3>
                  <p class="sr__joining-date">{{ Carbon\Carbon::parse($data->created_at)->format('d M Y') }}</p>
                </div>
              </div>
            </div>
            <div class="sr__activity">
              <div class="sr__activity-item">
                <p class="sr__activity-total">TOTAL ORDER</p>
                <h6 class="sr__activity-number">683</h6>
              </div>
              <div class="sr__activity-item">
                <p class="sr__activity-total">CANCELED</p>
                <h6 class="sr__activity-number">400</h6>
              </div>
              <div class="sr__activity-item">
                <p class="sr__activity-total">Delivered </p>
                <h6 class="sr__activity-number">855</h6>
              </div>
              <div class="sr__activity-item">
                <p class="sr__activity-total">o/c</p>
                <h6 class="sr__activity-number">-1.7K</h6>
              </div>
            </div>
            <button class="sr_edit-icon"><svg width="18" height="4" viewBox="0 0 18 4" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 3C9.55228 3 10 2.55228 10 2C10 1.44772 9.55228 1 9 1C8.44772 1 8 1.44772 8 2C8 2.55228 8.44772 3 9 3Z" stroke="#8A94A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M16 3C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1C15.4477 1 15 1.44772 15 2C15 2.55228 15.4477 3 16 3Z" stroke="#8A94A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#8A94A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg></button>
            <div class="sr__edit-container" style="display: none">
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
          <!-- SR Proflie End -->
          <!-- SR More Button Start -->
          <ul class="sr__details-activity-container" id="sr_activity-tabs">
            <li>
              <a href="#sr_tabs-1">
                <img src="./assets/activity-1.svg">
              <h2>Overview </h2>
              </a>
            </li>
            <li>
              <a href="#sr_tabs-2">
                <img src="./assets/activity-2.svg">
              <h2>Order </h2>
              </a>
            </li>
            <li>
              <a href="#sr_tabs-3">
                <img src="./assets/activity-3.svg">
              <h2>Route </h2>
              </a>
            </li>
            <li>
              <a href="#sr_tabs-4">
                <img src="./assets/activity-4.svg">
              <h2>Dealer </h2>
              </a>
            </li>
            <li>
              <a href="#sr_tabs-5">
                <img src="./assets/activity-5.svg">
              <h2>Summary </h2>
              </a>
            </li>
            <li>
              <a href="#sr_tabs-6">
                <img src="./assets/activity-6.svg">
              <h2>Products </h2>
              </a>
            </li>
          </ul>
          <!-- SR More Button End -->
          <div class="sr_tab-contents">
            <div id="sr_tabs-1" class="sr_tab-content">
              <div class="dashboard__main-container">
                <main>
                  <div class="dashboard__chart">
                    <div class="dashboard__chart-container">
                      <div class="dashboard__over-sell">
                        <h6 class="dasbhoard__sell">Overall Sell</h6>
                        <h5 class="dashboard__amount">
                          ৳48,574.21 <span>+20%</span>
                        </h5>
                      </div>
                      <div class="dashboard__btn-container">
                        <button class="dashboard__chart-btn">This Week</button>
                        <button class="dashboard__chart-btn">This Month</button>
                        <button class="dashboard__chart-btn">This Year</button>
                        <button class="dashboard__chart-btn">Lifetime</button>
                      </div>
                    </div>
                    <canvas
                      id="dashboard-chart"
                      class="dashboard__main-chart"
                    ></canvas>
                  </div>

                </main>
                <div class="dashboard__right-side">
                  <div class="dashboard__analytics">
                    <h2 class="dashboard__analytics-title">Analytics</h2>
                    <canvas id="analyticsChart" width="200" height="200"> </canvas>
                    <div class="dashboard__analytics-report">
                      <h6><span></span>Sale</h6>
                      <h6><span></span>Cancel</h6>
                      <h6><span></span>Return</h6>
                    </div>
                  </div>
                  <div class="top__sell">
                    <div class="top__sell-container">
                      <div class="top__sell-item">
                        <p>Top Sell By Route</p>
                        <h2>10,320 <span>-20%</span></h2>
                      </div>
                      <select class="top__select-date">
                        <option value="this-week">This Week</option>
                      </select>
                    </div>
                    <canvas id="top-sell-chart"></canvas>
                  </div>
                </div>
              </div>

              <div class="sr__order-container">
                <div class="sr-order__top-ten">
                  <h2 class="sr-order__top-title">TOP 10 List</h2>
                  <div class="tabs sr-order__top-tabs">
                    <ul id="tabs-nav">
                      <li><a href="#tab1">Product</a></li>
                      <li><a href="#tab2">Dealer</a></li>
                      <li><a href="#tab3">Reatailer</a></li>
                      <li><a href="#tab4">SR</a></li>
                      <li><a href="#tab5">Union</a></li>
                      <li><a href="#tab6">Bazar</a></li>
                    </ul>

                    <!-- END tabs-nav -->
                    <div id="tabs-content" class="sr-order__top-tabs-content">
                      <div id="tab1" class="tab-content sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$200</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="tab2" class="tab-content sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="tab3" class="tab-content sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="tab4" class="tab-content sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="tab5" class="tab-content sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="tab6" class="tab-content sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- END tabs-content -->
                  </div>
                  <!-- END tabs -->
                </div>
              </div>
            </div>
            <div id="sr_tabs-2" class="sr_tab-content">
              <div class="sr__order-container">
                <div class="sr-order__top-ten">
                  <div class="tabs sr-order__top-tabs">
                    <div class="tab-navbar-container">
                      <ul id="tabs-nav-order">
                        <li><a href="#order-tab1">All Orders</a></li>
                        <li><a href="#order-tab2">On Delivery</a></li>
                        <li><a href="#order-tab3">Delivered</a></li>
                        <li><a href="#order-tab4">Canceled</a></li>
                        <li><a href="#order-tab5">Return</a></li>
                        <li><a href="#order-tab6">Baki</a></li>
                      </ul>
                      <div class="tab-navbar-container-right-side">
                      <input
                        class="dashboard__navbar-search"
                        type="text"
                        placeholder="Search SO"
                      />
                      <input type="date">
                      <button><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5 11.5001V14.8335C16.5 15.2755 16.3244 15.6994 16.0118 16.012C15.6993 16.3245 15.2754 16.5001 14.8333 16.5001H3.16667C2.72464 16.5001 2.30072 16.3245 1.98816 16.012C1.67559 15.6994 1.5 15.2755 1.5 14.8335V11.5001" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.83203 7.33325L8.9987 11.4999L13.1654 7.33325" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 11.5V1.5" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg></button>
                      </div>
                    </div>
                    <!-- END tabs-nav -->
                    <div id="tabs-content-order" class="sr-order__top-tabs-content">
                      <div id="order-tab1" class="tab-content-order sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Orders <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>Date <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>Retailer <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>Amount <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>Total QTY <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>Payment</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody class="order-tab1-tr">
                            <tr>
                              <td>
                                SKN1200
                              </td>
                              <td>Apr 24, 2022 </td>
                              <td>Chieko Chute</td>
                              <td>৳10.62</td>
                              <td>৳10.62</td>
                              <td><button class="paid">Paid</button></td>
                              <td><button class="delivered">Delivered</button></td>
                            </tr>
                            <tr>
                              <td>
                                SKN1200
                              </td>
                              <td>Apr 24, 2022 </td>
                              <td>Chieko Chute</td>
                              <td>৳10.62</td>
                              <td>৳10.62</td>
                              <td><button class="paid">Paid</button></td>
                              <td><button class="canceled">Cancelled</button> Reason for cancellation</td>
                            </tr>
                            <tr>
                              <td>
                                SKN1200
                              </td>
                              <td>Apr 24, 2022 </td>
                              <td>Chieko Chute</td>
                              <td>৳10.62</td>
                              <td>৳10.62</td>
                              <td><button class="paid">Paid</button></td>
                              <td><button class="on-delivery">On Delivery</td>
                            </tr>
                            <tr>
                              <td>
                                SKN1200
                              </td>
                              <td>Apr 24, 2022 </td>
                              <td>Chieko Chute</td>
                              <td>৳10.62</td>
                              <td>৳10.62</td>
                              <td><button class="paid">Paid</button></td>
                              <td><button class="delivered">Delivered</button></td>
                            </tr> <tr>
                              <td>
                                SKN1200
                              </td>
                              <td>Apr 24, 2022 </td>
                              <td>Chieko Chute</td>
                              <td>৳10.62</td>
                              <td>৳10.62</td>
                              <td><button class="paid">Paid</button></td>
                              <td><button class="delivered">Delivered</button></td>
                            </tr>
                            <tr>
                              <td>
                                SKN1200
                              </td>
                              <td>Apr 24, 2022 </td>
                              <td>Chieko Chute</td>
                              <td>৳10.62</td>
                              <td>৳10.62</td>
                              <td><button class="paid">Paid</button></td>
                              <td><button class="canceled">Cancelled</button> Reason for cancellation</td>
                            </tr> <tr>
                              <td>
                                SKN1200
                              </td>
                              <td>Apr 24, 2022 </td>
                              <td>Chieko Chute</td>
                              <td>৳10.62</td>
                              <td>৳10.62</td>
                              <td><button class="baki">Baki</button></td>
                              <td><button class="canceled">Cancelled</button> Reason for cancellation</td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="pagination">
                          <div class="pagination-left">
                            <h3>Show result:</h3>
                            <button>6 <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4 6.5L8 10.5L12 6.5" stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></button>
                          </div>
                          <div class="pagination-right">
                            <button><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.5 5L7.5 10L12.5 15" stroke="#A0AEC0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </svg></button>
                            <button>1</button>
                            <button>2</button>
                            <button class="active-page">3</button>
                            <button>4</button>
                            <button>...</button>
                            <button>20</button>
                            <button><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M7.5 5L12.5 10L7.5 15" stroke="#A0AEC0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></button>
                          </div>
                        </div>
                      </div>
                      <div id="order-tab2" class="tab-content-order sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="order-tab3" class="tab-content-order sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="order-tab4" class="tab-content-order sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="order-tab5" class="tab-content-order sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="order-tab6" class="tab-content-order sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- END tabs-content -->
                  </div>
                  <!-- END tabs -->
                </div>
              </div>
            </div>
            <div id="sr_tabs-3" class="sr_tab-content">
              <div class="sr__order-container">
                <div class="sr-order__top-ten">
                  <div class="tabs sr-order__top-tabs">
                    <div class="tab-navbar-container">
                      <ul id="tabs-nav-route">
                        <li class="route-tab"><a href="#route-tab1" >শনিবার</a></li>
                        <li class="route-tab"><a href="#route-tab2" >রবিবার</a></li>
                        <li class="route-tab"><a href="#route-tab3" >সোমবার</a></li>
                        <li class="route-tab"><a href="#route-tab4" >মঙ্গলবার</a></li>
                        <li class="route-tab"><a href="#route-tab5" >বুধবার</a></li>
                        <li class="route-tab"><a href="#route-tab6" >বৃৃহস্পতিবার</a></li>
                        <li class="route-tab"><a href="#route-tab7" >শুক্রবার</a></li>
                      </ul>
                      <div class="tab-navbar-container-right-side">
                      <button class="add-route-btn">Add Route <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 1V11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1 6H11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg></button>
                      </div>
                    </div>
                    <!-- END tabs-nav -->
                    <div id="tabs-content-route" class="sr-order__top-tabs-content">
                      <div id="route-tab1" class="tab-content-route sr-order__tab-content">
                        <table>
                          <tbody class="route-tab1-tr">
                            <tr>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>

                            </tr>
                            <tr>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>

                            </tr>
                            <tr>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>

                            </tr>
                            <tr>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>

                            </tr>
                            <tr>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>

                            </tr>
                            <tr>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>

                            </tr>
                            <tr>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>
                              <td>
                                <h3>1 - বুধির হাট</h3>
                                <span>6</span>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.29998 3.72021H2.31999C1.96991 3.72021 1.63416 3.85928 1.38662 4.10683C1.13907 4.35438 1 4.69012 1 5.04021V10.9802C1 11.3303 1.13907 11.666 1.38662 11.9135C1.63416 12.1611 1.96991 12.3002 2.31999 12.3002H8.25995C8.61004 12.3002 8.94578 12.1611 9.19333 11.9135C9.44087 11.666 9.57994 11.3303 9.57994 10.9802V9.00018" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4.30054 9.00002H6.28053L11.8905 3.39006C12.1531 3.12749 12.3006 2.77138 12.3006 2.40006C12.3006 2.02874 12.1531 1.67263 11.8905 1.41007C11.6279 1.14751 11.2718 1 10.9005 1C10.5292 1 10.1731 1.14751 9.9105 1.41007L4.30054 7.02003V9.00002Z" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8.91968 2.40015L10.8997 4.38013" stroke="#94A3B8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </td>

                            </tr>

                          </tbody>
                        </table>
                        <div class="pagination">
                          <div class="pagination-left">
                            <h3>Show result:</h3>
                            <button>6 <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4 6.5L8 10.5L12 6.5" stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></button>
                          </div>
                          <div class="pagination-right">
                            <button><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.5 5L7.5 10L12.5 15" stroke="#A0AEC0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </svg></button>
                            <button>1</button>
                            <button>2</button>
                            <button class="active-page">3</button>
                            <button>4</button>
                            <button>...</button>
                            <button>20</button>
                            <button><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M7.5 5L12.5 10L7.5 15" stroke="#A0AEC0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></button>
                          </div>
                        </div>
                      </div>
                      <div id="route-tab2" class="tab-content-route sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="route-tab3" class="tab-content-route sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="route-tab4" class="tab-content-route sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="route-tab5" class="tab-content-route sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="route-tab6" class="tab-content-route sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="route-tab7" class="tab-content-route sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- END tabs-content -->
                  </div>
                  <!-- END tabs -->
                </div>
              </div>
            </div>
            <div id="sr_tabs-4" class="sr_tab-content">
              <div class="dashboard__main-so-container">
                <div class="dashboard__so">
                  <h3 class="dashboard__so-title">My Dealer</h3>
                  <div class="dashboard__so-btn-container">
                    <div class="dashboard__so-btn-group">
                      <button class="dashboard__so-btn">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <g id="Group 33727">
                            <path
                              id="Vector"
                              d="M5.63889 1H2C1.44772 1 1 1.44772 1 2V5.63889C1 6.19117 1.44772 6.63889 2 6.63889H5.63889C6.19117 6.63889 6.63889 6.19117 6.63889 5.63889V2C6.63889 1.44772 6.19117 1 5.63889 1Z"
                              stroke="#8A94A6"
                              stroke-width="1.2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              id="Vector_2"
                              d="M14.5 1H10.8611C10.3088 1 9.86108 1.44772 9.86108 2V5.63889C9.86108 6.19117 10.3088 6.63889 10.8611 6.63889H14.5C15.0523 6.63889 15.5 6.19117 15.5 5.63889V2C15.5 1.44772 15.0523 1 14.5 1Z"
                              stroke="#8A94A6"
                              stroke-width="1.2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              id="Vector_3"
                              d="M14.5 9.86111H10.8611C10.3088 9.86111 9.86108 10.3088 9.86108 10.8611V14.5C9.86108 15.0523 10.3088 15.5 10.8611 15.5H14.5C15.0523 15.5 15.5 15.0523 15.5 14.5V10.8611C15.5 10.3088 15.0523 9.86111 14.5 9.86111Z"
                              stroke="#8A94A6"
                              stroke-width="1.2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              id="Vector_4"
                              d="M5.63889 9.86111H2C1.44772 9.86111 1 10.3088 1 10.8611V14.5C1 15.0523 1.44772 15.5 2 15.5H5.63889C6.19117 15.5 6.63889 15.0523 6.63889 14.5V10.8611C6.63889 10.3088 6.19117 9.86111 5.63889 9.86111Z"
                              stroke="#8A94A6"
                              stroke-width="1.2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </g>
                        </svg>
                      </button>
                      <button class="dashboard__so-btn">
                        <svg
                          width="19"
                          height="14"
                          viewBox="0 0 19 14"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <g id="Group 33726">
                            <path
                              id="Vector"
                              d="M1.5 10.25L1.5 12.25C1.5 12.8023 1.94772 13.25 2.5 13.25L16.5 13.25C17.0523 13.25 17.5 12.8023 17.5 12.25L17.5 10.25C17.5 9.69771 17.0523 9.25 16.5 9.25L2.5 9.25C1.94772 9.25 1.5 9.69772 1.5 10.25Z"
                              stroke="#8A94A6"
                              stroke-width="1.2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              id="Vector_2"
                              d="M1.5 2.25L1.5 4.25C1.5 4.80228 1.94772 5.25 2.5 5.25L16.5 5.25C17.0523 5.25 17.5 4.80228 17.5 4.25L17.5 2.25C17.5 1.69771 17.0523 1.25 16.5 1.25L2.5 1.25C1.94772 1.25 1.5 1.69772 1.5 2.25Z"
                              stroke="#8A94A6"
                              stroke-width="1.2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </g>
                        </svg>
                      </button>
                    </div>
                    <button class="dashboard__so-btn-final">
                      <svg
                        width="21"
                        height="13"
                        viewBox="0 0 21 13"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g id="Group 33725">
                          <path
                            id="Vector"
                            d="M3.43457 6.5H17.4346"
                            stroke="#595F84"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            id="Vector_2"
                            d="M1.5 1.5H19.5"
                            stroke="#595F84"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            id="Vector_3"
                            d="M7.43457 11.5H13.4346"
                            stroke="#595F84"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </g>
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="dashboard__so-container">
                  <div class="dashboard__so-item">
                    <img
                      class="dashboard__so-item-img"
                      src="./assets/Rectangle 2388.png"
                    />
                    <h2 class="dashboard__so-item-title">রমজান আলী</h2>
                    <p class="dashboard__so-item-description">
                      Pran Food & Bavreage
                    </p>
                    <button
                      class="dashboard__view-profile-btn js-btn-profile-modal"
                    >
                      View profile
                    </button>
                  </div>
                  <div class="dashboard__so-item">
                    <img
                      class="dashboard__so-item-img"
                      src="./assets/Rectangle 2388.png"
                    />
                    <h2 class="dashboard__so-item-title">রমজান আলী</h2>
                    <p class="dashboard__so-item-description">
                      Pran Food & Bavreage
                    </p>
                    <button class="dashboard__view-profile-btn">
                      View profile
                    </button>
                  </div>
                  <div class="dashboard__so-item">
                    <img
                      class="dashboard__so-item-img"
                      src="./assets/Rectangle 2388.png"
                    />
                    <h2 class="dashboard__so-item-title">রমজান আলী</h2>
                    <p class="dashboard__so-item-description">
                      Pran Food & Bavreage
                    </p>
                    <button class="dashboard__view-profile-btn">
                      View profile
                    </button>
                  </div>
                  <div class="dashboard__so-item">
                    <img
                      class="dashboard__so-item-img"
                      src="./assets/Rectangle 2388.png"
                    />
                    <h2 class="dashboard__so-item-title">রমজান আলী</h2>
                    <p class="dashboard__so-item-description">
                      Pran Food & Bavreage
                    </p>
                    <button class="dashboard__view-profile-btn">
                      View profile
                    </button>
                  </div>
                  <div class="dashboard__so-item">
                    <img
                      class="dashboard__so-item-img"
                      src="./assets/Rectangle 2388.png"
                    />
                    <h2 class="dashboard__so-item-title">রমজান আলী</h2>
                    <p class="dashboard__so-item-description">
                      Pran Food & Bavreage
                    </p>
                    <button class="dashboard__view-profile-btn">
                      View profile
                    </button>
                  </div>
                  <div class="dashboard__so-item">
                    <img
                      class="dashboard__so-item-img"
                      src="./assets/Rectangle 2388.png"
                    />
                    <h2 class="dashboard__so-item-title">রমজান আলী</h2>
                    <p class="dashboard__so-item-description">
                      Pran Food & Bavreage
                    </p>
                    <button class="dashboard__view-profile-btn">
                      View profile
                    </button>
                  </div>
                  <div class="dashboard__so-item">
                    <img
                      class="dashboard__so-item-img"
                      src="./assets/Rectangle 2388.png"
                    />
                    <h2 class="dashboard__so-item-title">রমজান আলী</h2>
                    <p class="dashboard__so-item-description">
                      Pran Food & Bavreage
                    </p>
                    <button class="dashboard__view-profile-btn">
                      View profile
                    </button>
                  </div>
                  <div class="dashboard__so-item">
                    <img
                      class="dashboard__so-item-img"
                      src="./assets/Rectangle 2388.png"
                    />
                    <h2 class="dashboard__so-item-title">রমজান আলী</h2>
                    <p class="dashboard__so-item-description">
                      Pran Food & Bavreage
                    </p>
                    <button class="dashboard__view-profile-btn">
                      View profile
                    </button>
                  </div>
                  <div class="dashboard__so-item">
                    <img
                      class="dashboard__so-item-img"
                      src="./assets/Rectangle 2388.png"
                    />
                    <h2 class="dashboard__so-item-title">রমজান আলী</h2>
                    <p class="dashboard__so-item-description">
                      Pran Food & Bavreage
                    </p>
                    <button class="dashboard__view-profile-btn">
                      View profile
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div id="sr_tabs-5" class="sr_tab-content">
              <div class="sr__order-container">
                <div class="sr-order__top-ten">
                  <div class="tabs sr-order__top-tabs">
                    <div class="tab-navbar-container">
                      <ul id="tabs-nav-summary">
                        <li><a href="#summary-tab1">Summary</a></li>
                        <li><a href="#summary-tab2">Product Selled</a></li>
                        <li><a href="#summary-tab3">Product IN </a></li>
                      </ul>
                      <div class="tab-navbar-container-right-side">
                      <input type="date">
                      <button><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5 11.5001V14.8335C16.5 15.2755 16.3244 15.6994 16.0118 16.012C15.6993 16.3245 15.2754 16.5001 14.8333 16.5001H3.16667C2.72464 16.5001 2.30072 16.3245 1.98816 16.012C1.67559 15.6994 1.5 15.2755 1.5 14.8335V11.5001" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.83203 7.33325L8.9987 11.4999L13.1654 7.33325" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 11.5V1.5" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg></button>
                      </div>
                    </div>
                    <!-- END tabs-nav -->
                    <div id="tabs-content-summary" class="sr-order__top-tabs-content">
                      <div id="summary-tab1" class="tab-content-summary sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Product Name <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>Quantity  <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>Rate <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>toTAL rEATAILER <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>SR total <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>Total <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>O/C</th>
                            </tr>
                          </thead>
                          <tbody class="order-tab1-tr">
                            <tr>
                              <td>
                                ডাল ভাজা - 16 গ্রাম (48)
                              </td>
                              <td>5</td>
                              <td>৳10.62</td>
                              <td>100</td>
                              <td>৳60.62</td>
                              <td>৳1060.62</td>
                              <td class="plus">৳+5</td>
                            </tr>
                            <tr>
                              <td>
                                ডাল ভাজা - 16 গ্রাম (48)
                              </td>
                              <td>5</td>
                              <td>৳10.62</td>
                              <td>100</td>
                              <td>৳60.62</td>
                              <td>৳1060.62</td>
                              <td class="plus">৳+5</td>
                            </tr>
                            <tr>
                              <td>
                                ডাল ভাজা - 16 গ্রাম (48)
                              </td>
                              <td>5</td>
                              <td>৳10.62</td>
                              <td>100</td>
                              <td>৳60.62</td>
                              <td>৳1060.62</td>
                              <td class="plus">৳+5</td>
                            </tr>
                            <tr>
                              <td>
                                ডাল ভাজা - 16 গ্রাম (48)
                              </td>
                              <td>5</td>
                              <td>৳10.62</td>
                              <td>100</td>
                              <td>৳60.62</td>
                              <td>৳1060.62</td>
                              <td class="plus">৳+5</td>
                            </tr>
                            <tr>
                              <td>
                                ডাল ভাজা - 16 গ্রাম (48)
                              </td>
                              <td>5</td>
                              <td>৳10.62</td>
                              <td>100</td>
                              <td>৳60.62</td>
                              <td>৳1060.62</td>
                              <td class="plus">৳+5</td>
                            </tr>
                            <tr>
                              <td>
                                ডাল ভাজা - 16 গ্রাম (48)
                              </td>
                              <td>5</td>
                              <td>৳10.62</td>
                              <td>100</td>
                              <td>৳60.62</td>
                              <td>৳1060.62</td>
                              <td class="minus">৳+5</td>
                            </tr>
                            <tr>
                              <td>
                                ডাল ভাজা - 16 গ্রাম (48)
                              </td>
                              <td>5</td>
                              <td>৳10.62</td>
                              <td>100</td>
                              <td>৳60.62</td>
                              <td>৳1060.62</td>
                              <td class="minus">৳+5</td>
                            </tr>
                            <tr>
                              <td>
                                ডাল ভাজা - 16 গ্রাম (48)
                              </td>
                              <td>5</td>
                              <td>৳10.62</td>
                              <td>100</td>
                              <td>৳60.62</td>
                              <td>৳1060.62</td>
                              <td class="plus">৳+5</td>
                            </tr>

                          </tbody>
                        </table>
                        <div class="pagination">
                          <div class="pagination-left">
                            <h3>Show result:</h3>
                            <button>6 <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4 6.5L8 10.5L12 6.5" stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></button>
                          </div>
                          <div class="pagination-right">
                            <button><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.5 5L7.5 10L12.5 15" stroke="#A0AEC0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </svg></button>
                            <button>1</button>
                            <button>2</button>
                            <button class="active-page">3</button>
                            <button>4</button>
                            <button>...</button>
                            <button>20</button>
                            <button><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M7.5 5L12.5 10L7.5 15" stroke="#A0AEC0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></button>
                          </div>
                        </div>
                      </div>
                      <div id="summary-tab2" class="tab-content-summary sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div id="summary-tab3" class="tab-content-summary sr-order__tab-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>SR Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>600</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                            <tr>
                              <td>
                                <img src="../assets/milk-biskuit.png" />
                              </td>
                              <td>মিল্ক বিস্কুট</td>
                              <td>$100</td>
                              <td>happy-time</td>
                              <td>500</td>
                              <td>mohammad ali</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                    </div>
                    <!-- END tabs-content -->
                  </div>
                  <!-- END tabs -->
                </div>
              </div>
            </div>
            <div id="sr_tabs-6" class="sr_tab-content">
              <div class="dashboard__main-products-container">
                <div class="dashboard__products">
                  <h3 class="dashboard__products-title">All Product</h3>
                  <div class="dashboard__products-btn-container">
                    <div class="dashboard__products-btn-group">
                      <button class="dashboard__products-btn">
                        <svg
                          width="17"
                          height="17"
                          viewBox="0 0 17 17"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <g id="Group 33727">
                            <path
                              id="Vector"
                              d="M5.63889 1H2C1.44772 1 1 1.44772 1 2V5.63889C1 6.19117 1.44772 6.63889 2 6.63889H5.63889C6.19117 6.63889 6.63889 6.19117 6.63889 5.63889V2C6.63889 1.44772 6.19117 1 5.63889 1Z"
                              stroke="#8A94A6"
                              stroke-width="1.2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              id="Vector_2"
                              d="M14.5 1H10.8611C10.3088 1 9.86108 1.44772 9.86108 2V5.63889C9.86108 6.19117 10.3088 6.63889 10.8611 6.63889H14.5C15.0523 6.63889 15.5 6.19117 15.5 5.63889V2C15.5 1.44772 15.0523 1 14.5 1Z"
                              stroke="#8A94A6"
                              stroke-width="1.2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              id="Vector_3"
                              d="M14.5 9.86111H10.8611C10.3088 9.86111 9.86108 10.3088 9.86108 10.8611V14.5C9.86108 15.0523 10.3088 15.5 10.8611 15.5H14.5C15.0523 15.5 15.5 15.0523 15.5 14.5V10.8611C15.5 10.3088 15.0523 9.86111 14.5 9.86111Z"
                              stroke="#8A94A6"
                              stroke-width="1.2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              id="Vector_4"
                              d="M5.63889 9.86111H2C1.44772 9.86111 1 10.3088 1 10.8611V14.5C1 15.0523 1.44772 15.5 2 15.5H5.63889C6.19117 15.5 6.63889 15.0523 6.63889 14.5V10.8611C6.63889 10.3088 6.19117 9.86111 5.63889 9.86111Z"
                              stroke="#8A94A6"
                              stroke-width="1.2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </g>
                        </svg>
                      </button>
                      <button class="dashboard__products-btn">
                        <svg
                          width="19"
                          height="14"
                          viewBox="0 0 19 14"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <g id="Group 33726">
                            <path
                              id="Vector"
                              d="M1.5 10.25L1.5 12.25C1.5 12.8023 1.94772 13.25 2.5 13.25L16.5 13.25C17.0523 13.25 17.5 12.8023 17.5 12.25L17.5 10.25C17.5 9.69771 17.0523 9.25 16.5 9.25L2.5 9.25C1.94772 9.25 1.5 9.69772 1.5 10.25Z"
                              stroke="#8A94A6"
                              stroke-width="1.2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              id="Vector_2"
                              d="M1.5 2.25L1.5 4.25C1.5 4.80228 1.94772 5.25 2.5 5.25L16.5 5.25C17.0523 5.25 17.5 4.80228 17.5 4.25L17.5 2.25C17.5 1.69771 17.0523 1.25 16.5 1.25L2.5 1.25C1.94772 1.25 1.5 1.69772 1.5 2.25Z"
                              stroke="#8A94A6"
                              stroke-width="1.2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </g>
                        </svg>
                      </button>
                    </div>
                    <button class="dashboard__products-btn-final">
                      <svg
                        width="21"
                        height="13"
                        viewBox="0 0 21 13"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g id="Group 33725">
                          <path
                            id="Vector"
                            d="M3.43457 6.5H17.4346"
                            stroke="#595F84"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            id="Vector_2"
                            d="M1.5 1.5H19.5"
                            stroke="#595F84"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            id="Vector_3"
                            d="M7.43457 11.5H13.4346"
                            stroke="#595F84"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </g>
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="dashboard__products-container">
                  <div class="dashboard__products-item">
                    <img
                      class="dashboard__products-item-img"
                      src="./assets/canacur.png"
                    />
                    <h2 class="dashboard__products-item-title">প্রান চানাচুর</h2>
                    <p class="dashboard__products-item-description">
                      Pran Foods
                    </p>
                    <button
                      class="products-price js-btn-profile-modal"
                    >
                      <span>50 G</span> Tk 50.00
                    </button>
                  </div>
                  <div class="dashboard__products-item">
                    <img
                      class="dashboard__products-item-img"
                      src="./assets/canacur.png"
                    />
                    <h2 class="dashboard__products-item-title">প্রান চানাচুর</h2>
                    <p class="dashboard__products-item-description">
                      Pran Foods
                    </p>
                    <button
                      class="products-price js-btn-profile-modal"
                    >
                      <span>50 G</span> Tk 50.00
                    </button>
                  </div>
                  <div class="dashboard__products-item">
                    <img
                      class="dashboard__products-item-img"
                      src="./assets/canacur.png"
                    />
                    <h2 class="dashboard__products-item-title">প্রান চানাচুর</h2>
                    <p class="dashboard__products-item-description">
                      Pran Foods
                    </p>
                    <button
                      class="products-price js-btn-profile-modal"
                    >
                      <span>50 G</span> Tk 50.00
                    </button>
                  </div>
                  <div class="dashboard__products-item">
                    <img
                      class="dashboard__products-item-img"
                      src="./assets/canacur.png"
                    />
                    <h2 class="dashboard__products-item-title">প্রান চানাচুর</h2>
                    <p class="dashboard__products-item-description">
                      Pran Foods
                    </p>
                    <button
                      class="products-price js-btn-profile-modal"
                    >
                      <span>50 G</span> Tk 50.00
                    </button>
                  </div>
                  <div class="dashboard__products-item">
                    <img
                      class="dashboard__products-item-img"
                      src="./assets/canacur.png"
                    />
                    <h2 class="dashboard__products-item-title">প্রান চানাচুর</h2>
                    <p class="dashboard__products-item-description">
                      Pran Foods
                    </p>
                    <button
                      class="products-price js-btn-profile-modal"
                    >
                      <span>50 G</span> Tk 50.00
                    </button>
                  </div>
                  <div class="dashboard__products-item">
                    <img
                      class="dashboard__products-item-img"
                      src="./assets/canacur.png"
                    />
                    <h2 class="dashboard__products-item-title">প্রান চানাচুর</h2>
                    <p class="dashboard__products-item-description">
                      Pran Foods
                    </p>
                    <button
                      class="products-price js-btn-profile-modal"
                    >
                      <span>50 G</span> Tk 50.00
                    </button>
                  </div>
                  <div class="dashboard__products-item">
                    <img
                      class="dashboard__products-item-img"
                      src="./assets/canacur.png"
                    />
                    <h2 class="dashboard__products-item-title">প্রান চানাচুর</h2>
                    <p class="dashboard__products-item-description">
                      Pran Foods
                    </p>
                    <button
                      class="products-price js-btn-profile-modal"
                    >
                      <span>50 G</span> Tk 50.00
                    </button>
                  </div>
                  <div class="dashboard__products-item">
                    <img
                      class="dashboard__products-item-img"
                      src="./assets/canacur.png"
                    />
                    <h2 class="dashboard__products-item-title">প্রান চানাচুর</h2>
                    <p class="dashboard__products-item-description">
                      Pran Foods
                    </p>
                    <button
                      class="products-price js-btn-profile-modal"
                    >
                      <span>50 G</span> Tk 50.00
                    </button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('admin/sr/js/index.js') }}"></script>
  </body>
</html>
