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
  <link rel="stylesheet" href="{{ asset('admin/delivery_list/css/style.css') }}" />
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

      </header>
      <div class="dashboard__container">
        <div class="dashboard__card-container">


        </div>
        <div class="dashboard__dealer-container">
          <div class="dashboard__dealer-card-wrapper">
            <div class="dashboard__dealer-card">
              <img src="../assets/image 5.png" alt="">
              <p class="dashboard__dealer-card-title">Order </p>
            </div>
            <div class="dashboard__dealer-card">
              <img src="../assets/image 55.png" alt="">
              <p class="dashboard__dealer-card-title">Route </p>
            </div>
          </div>
          <div class="profile__section">
            <div class="profile__wrapper">
              <div>
                <img src="../assets//profile.png" alt="">
              </div>
              <div>
                <h2 class="profile__name">রমজান আলী</h2>
                <h2 class="profile__number">+88 01234 5566 </h2>
              </div>
            </div>
            <button class="profile__view-btn">view Profile</button>
          </div>

        </div>
        <div class="dashboard__main-container">
          <main>

            <div class="dashboard__top-ten">
              <div class="tabs dashboard__top-tabs">
                <div class="tabs-nav-wrapper">
                  <div>
                    <h2 class="tabs-nav-title">All Orders</h2>
                  </div>
                  <div class="tabs-nav-right">
                    <input class="select__field" type="text" placeholder="Upazila">
                    <input class="select__field" type="text" placeholder="Union">
                    <input class="select__field" type="text" placeholder="Bazar">
                    <input class="dashboard__navbar-search" type="text" placeholder="Search Order" />
                  </div>
                </div>
                <!-- END tabs-nav -->
                <div id="tabs-content" class="dashboard__top-tabs-content">
                  <div id="tab1" class="tab-content dashboard__tab-content">

                    <table>
                      <thead>
                        <tr>
                          <th>SN.</th>
                          <th>Name</th>
                          <th>Order id</th>
                          <th>Phone Number</th>
                          <th>Bazar</th>
                          <th>Action</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td class="sr-name">
                            <img src="../assets/Overlay.png">
                            <h2 class="sr-name-name">Mohammad Rasel</h2>
                          </td>
                          <td>888-00-856-99</td>
                          <td>+880 45546 66814</td>
                          <td>Mirpur, Dhaka, Bangladesh</td>
                          <td>
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="52" height="16" viewBox="0 0 52 16"
                                fill="none">
                                <path
                                  d="M4.89633 4.21167H2.55853C1.69778 4.21167 1 4.90945 1 5.7702V12.7836C1 13.6443 1.69778 14.3421 2.55853 14.3421H9.57192C10.4327 14.3421 11.1304 13.6443 11.1304 12.7836V10.4458"
                                  stroke="#8A94A6" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M4.89648 10.4457H7.23428L13.858 3.82197C14.5036 3.1764 14.5036 2.12974 13.858 1.48417C13.2125 0.838609 12.1658 0.838609 11.5202 1.48417L4.89648 8.10793V10.4457"
                                  stroke="#8A94A6" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.3511 2.65308L12.6889 4.99087" stroke="#8A94A6" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M38.3418 4.21165H50.81" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M43.0176 7.32874V12.0043" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M46.1343 7.32874V12.0043" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M39.1211 4.21167L39.9004 13.5629C39.9004 14.4236 40.5981 15.1214 41.4589 15.1214H47.693C48.5538 15.1214 49.2515 14.4236 49.2515 13.5629L50.0308 4.21167"
                                  stroke="#FF565E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M42.2383 4.21166V1.87387C42.2383 1.44349 42.5872 1.0946 43.0175 1.0946H46.1346C46.565 1.0946 46.9139 1.44349 46.9139 1.87387V4.21166"
                                  stroke="#FF565E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td class="sr-name">
                            <img src="../assets/Overlay.png">
                            <h2 class="sr-name-name">Mohammad Rasel</h2>
                          </td>
                          <td>888-00-856-99</td>
                          <td>+880 45546 66814</td>
                          <td>Mirpur, Dhaka, Bangladesh</td>
                          <td>
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="52" height="16" viewBox="0 0 52 16"
                                fill="none">
                                <path
                                  d="M4.89633 4.21167H2.55853C1.69778 4.21167 1 4.90945 1 5.7702V12.7836C1 13.6443 1.69778 14.3421 2.55853 14.3421H9.57192C10.4327 14.3421 11.1304 13.6443 11.1304 12.7836V10.4458"
                                  stroke="#8A94A6" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M4.89648 10.4457H7.23428L13.858 3.82197C14.5036 3.1764 14.5036 2.12974 13.858 1.48417C13.2125 0.838609 12.1658 0.838609 11.5202 1.48417L4.89648 8.10793V10.4457"
                                  stroke="#8A94A6" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.3511 2.65308L12.6889 4.99087" stroke="#8A94A6" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M38.3418 4.21165H50.81" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M43.0176 7.32874V12.0043" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M46.1343 7.32874V12.0043" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M39.1211 4.21167L39.9004 13.5629C39.9004 14.4236 40.5981 15.1214 41.4589 15.1214H47.693C48.5538 15.1214 49.2515 14.4236 49.2515 13.5629L50.0308 4.21167"
                                  stroke="#FF565E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M42.2383 4.21166V1.87387C42.2383 1.44349 42.5872 1.0946 43.0175 1.0946H46.1346C46.565 1.0946 46.9139 1.44349 46.9139 1.87387V4.21166"
                                  stroke="#FF565E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td class="sr-name">
                            <img src="../assets/Overlay.png">
                            <h2 class="sr-name-name">Mohammad Rasel</h2>
                          </td>
                          <td>888-00-856-99</td>
                          <td>+880 45546 66814</td>
                          <td>Mirpur, Dhaka, Bangladesh</td>
                          <td>
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="52" height="16" viewBox="0 0 52 16"
                                fill="none">
                                <path
                                  d="M4.89633 4.21167H2.55853C1.69778 4.21167 1 4.90945 1 5.7702V12.7836C1 13.6443 1.69778 14.3421 2.55853 14.3421H9.57192C10.4327 14.3421 11.1304 13.6443 11.1304 12.7836V10.4458"
                                  stroke="#8A94A6" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M4.89648 10.4457H7.23428L13.858 3.82197C14.5036 3.1764 14.5036 2.12974 13.858 1.48417C13.2125 0.838609 12.1658 0.838609 11.5202 1.48417L4.89648 8.10793V10.4457"
                                  stroke="#8A94A6" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.3511 2.65308L12.6889 4.99087" stroke="#8A94A6" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M38.3418 4.21165H50.81" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M43.0176 7.32874V12.0043" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M46.1343 7.32874V12.0043" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M39.1211 4.21167L39.9004 13.5629C39.9004 14.4236 40.5981 15.1214 41.4589 15.1214H47.693C48.5538 15.1214 49.2515 14.4236 49.2515 13.5629L50.0308 4.21167"
                                  stroke="#FF565E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M42.2383 4.21166V1.87387C42.2383 1.44349 42.5872 1.0946 43.0175 1.0946H46.1346C46.565 1.0946 46.9139 1.44349 46.9139 1.87387V4.21166"
                                  stroke="#FF565E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td class="sr-name">
                            <img src="../assets/Overlay.png">
                            <h2 class="sr-name-name">Mohammad Rasel</h2>
                          </td>
                          <td>888-00-856-99</td>
                          <td>+880 45546 66814</td>
                          <td>Mirpur, Dhaka, Bangladesh</td>
                          <td>
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="52" height="16" viewBox="0 0 52 16"
                                fill="none">
                                <path
                                  d="M4.89633 4.21167H2.55853C1.69778 4.21167 1 4.90945 1 5.7702V12.7836C1 13.6443 1.69778 14.3421 2.55853 14.3421H9.57192C10.4327 14.3421 11.1304 13.6443 11.1304 12.7836V10.4458"
                                  stroke="#8A94A6" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M4.89648 10.4457H7.23428L13.858 3.82197C14.5036 3.1764 14.5036 2.12974 13.858 1.48417C13.2125 0.838609 12.1658 0.838609 11.5202 1.48417L4.89648 8.10793V10.4457"
                                  stroke="#8A94A6" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.3511 2.65308L12.6889 4.99087" stroke="#8A94A6" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M38.3418 4.21165H50.81" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M43.0176 7.32874V12.0043" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M46.1343 7.32874V12.0043" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M39.1211 4.21167L39.9004 13.5629C39.9004 14.4236 40.5981 15.1214 41.4589 15.1214H47.693C48.5538 15.1214 49.2515 14.4236 49.2515 13.5629L50.0308 4.21167"
                                  stroke="#FF565E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M42.2383 4.21166V1.87387C42.2383 1.44349 42.5872 1.0946 43.0175 1.0946H46.1346C46.565 1.0946 46.9139 1.44349 46.9139 1.87387V4.21166"
                                  stroke="#FF565E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td class="sr-name">
                            <img src="../assets/Overlay.png">
                            <h2 class="sr-name-name">Mohammad Rasel</h2>
                          </td>
                          <td>888-00-856-99</td>
                          <td>+880 45546 66814</td>
                          <td>Mirpur, Dhaka, Bangladesh</td>
                          <td>
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="52" height="16" viewBox="0 0 52 16"
                                fill="none">
                                <path
                                  d="M4.89633 4.21167H2.55853C1.69778 4.21167 1 4.90945 1 5.7702V12.7836C1 13.6443 1.69778 14.3421 2.55853 14.3421H9.57192C10.4327 14.3421 11.1304 13.6443 11.1304 12.7836V10.4458"
                                  stroke="#8A94A6" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M4.89648 10.4457H7.23428L13.858 3.82197C14.5036 3.1764 14.5036 2.12974 13.858 1.48417C13.2125 0.838609 12.1658 0.838609 11.5202 1.48417L4.89648 8.10793V10.4457"
                                  stroke="#8A94A6" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.3511 2.65308L12.6889 4.99087" stroke="#8A94A6" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M38.3418 4.21165H50.81" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M43.0176 7.32874V12.0043" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M46.1343 7.32874V12.0043" stroke="#FF565E" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M39.1211 4.21167L39.9004 13.5629C39.9004 14.4236 40.5981 15.1214 41.4589 15.1214H47.693C48.5538 15.1214 49.2515 14.4236 49.2515 13.5629L50.0308 4.21167"
                                  stroke="#FF565E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                  d="M42.2383 4.21166V1.87387C42.2383 1.44349 42.5872 1.0946 43.0175 1.0946H46.1346C46.565 1.0946 46.9139 1.44349 46.9139 1.87387V4.21166"
                                  stroke="#FF565E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </div>
                          </td>
                        </tr>

                      </tbody>
                    </table>

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
  <script src="{{ asset('admin/delivery_list/js/index.js') }}"></script>
</body>

</html>