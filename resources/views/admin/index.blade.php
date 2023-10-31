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
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('admin/admin/css/style.css') }}" />
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
          <h2 class="dashboard__navbar-title">Overview</h2>
          <input
            class="dashboard__navbar-search"
            type="text"
            placeholder="Search anything..."
          />
        </header>
        <div class="dashboard__container">
            <div class="dashboard__card-container">
                <div class="dashboard__card">
                  <img class="dashboard__card-img" src="../assets/revenue.svg" alt="" />
                 <div>
                    <h3 class="dashboard__card-title">Revenue</h3>
                    <p class="dashboard__card-amount">৳48,574.21</p>
                 </div>
                </div>
                <div class="dashboard__card">
                  <img class="dashboard__card-img" src="../assets/product2.svg" alt="" />
                  <div>
                    <h3 class="dashboard__card-title">product </h3>
                  <p class="dashboard__card-amount">500.00</p>
                  </div>
                </div>
                <div class="dashboard__card">
                  <img class="dashboard__card-img" src="../assets/completedOrder.svg" alt="" />
                  <div>
                    <h3 class="dashboard__card-title">Completed order</h3>
                  <p class="dashboard__card-amount">2,505.00</p>
                  </div>
                </div>
                <div class="dashboard__card">
                  <img class="dashboard__card-img" src="../assets/totalRetailer.svg" alt="" />
                  <div>
                    <h3 class="dashboard__card-title">Total retailer</h3>
                  <p class="dashboard__card-amount">500+</p>
                  </div>
                </div>
              </div>
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
                    <canvas id="dashboard-chart" class="dashboard__main-chart"></canvas>
                  </div>
                  <div class="dashboard__top-ten">
                    <h2 class="dashboard__top-title">TOP 10 List</h2>
                    <div class="tabs dashboard__top-tabs">
                      <ul id="tabs-nav">
                        <li><a href="#tab1">Product</a></li>
                        <li><a href="#tab2">Dealer</a></li>
                        <li><a href="#tab3">Reatailer</a></li>
                        <li><a href="#tab4">SR</a></li>
                        <li><a href="#tab5">Union</a></li>
                        <li><a href="#tab6">Bazar</a></li>
                      </ul>
                      <!-- END tabs-nav -->
                      <div id="tabs-content" class="dashboard__top-tabs-content">
                        <div id="tab1" class="tab-content dashboard__tab-content">
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
                        <div id="tab2" class="tab-content dashboard__tab-content">
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
                        <div id="tab3" class="tab-content dashboard__tab-content">
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
                        <div id="tab4" class="tab-content dashboard__tab-content">
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
                        <div id="tab5" class="tab-content dashboard__tab-content">
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
                        <div id="tab6" class="tab-content dashboard__tab-content">
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
                </main>
                <div class="dashboard__analytics">
                  <h2 class="dashboard__analytics-title">Analytics</h2>
                  <canvas id="analyticsChart" width="200" height="200">
                 
                  </canvas>
                  <div class="dashboard__analytics-report">
                    <h6><span></span>Sale</h6>
                    <h6><span></span>Cancel</h6>
                    <h6><span></span>Return</h6>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('admin/admin/js/index.js') }}"></script>
  </body>
</html>
