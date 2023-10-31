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
  <link rel="stylesheet" href="{{ asset('admin/dealer_profit/css/style.css') }}" />
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
        <div class="dashboard__dealer-container">
          <div class="dashboard__dealer-card">
            <img src="../assets/image 5.png" alt="">
            <p class="dashboard__dealer-card-title">Summary </p>
          </div>
          <div class="dashboard__dealer-card">
            <img src="../assets/image 5 (1).png" alt="">
            <p class="dashboard__dealer-card-title">Company </p>
          </div>
          <div class="dashboard__dealer-card">
            <img src="../assets/image 5 (2).png" alt="">
            <p class="dashboard__dealer-card-title">Products </p>
          </div>
          <div class="dashboard__dealer-card">
            <img src="../assets/image 5 (3).png" alt="">
            <p class="dashboard__dealer-card-title">SR </p>
          </div>
          <div class="dashboard__dealer-card">
            <img src="../assets/image 5 (4).png" alt="">
            <p class="dashboard__dealer-card-title">Profit </p>
          </div>

        </div>
        <div class="dashboard__main-container">
          <main>

            <div class="dashboard__top-ten">
              <div class="tabs dashboard__top-tabs">
                <div class="tabs-nav-wrapper">
                  <div class="top__nav-left">
                    <h2 class="tabs-nav-title">Profit</h2>
                    <input class="select__field" type="text" placeholder="This Month">
                  </div>
                  <div class="tabs-nav-right">
                    <input class="select__field" type="text" placeholder="Upazila">
                    <input class="select__field" type="text" placeholder="Union">
                    <input class="select__field" type="text" placeholder="Bazar">
                    <input class="tabs-nav-right-search" type="text" placeholder="Search SR" />
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
                          <th>Phone Number</th>
                          <th>Bazar</th>
                          <th>Profit</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td class="sr-name">
                            <img src="../assets/Overlay.png">
                            <h2>Mohammad Rasel</h2>
                          </td>
                          <td>+880 45546 66814</td>
                          <td>Mirpur, Dhaka, Bangladesh</td>
                          <td class="profit__ammount">
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                  d="M17 8.5C17 3.80558 13.1944 0 8.5 0C3.80558 0 0 3.80558 0 8.5C0 13.1944 3.80558 17 8.5 17C13.1944 17 17 13.1944 17 8.5Z"
                                  fill="#1273EB" />
                                <path
                                  d="M12.0151 9.14617C12.0151 10.5802 11.3872 13.4805 8.06627 13.4805C7.05955 13.4805 6.24342 12.6644 6.24342 11.6577V8.08931H4.98535V6.79771H6.24342V5.59709C6.24342 5.59709 6.29057 5.12759 5.69258 5.12759H5.09426V3.5199H5.69258C7.13525 3.5199 8.06627 3.72343 8.06627 5.59709V6.79771H9.32434V8.08931H8.06627V11.8443C9.23734 11.8443 9.77225 11.0344 10.0166 10.3023C9.61686 10.0719 9.34791 9.64089 9.34791 9.1465C9.34791 8.41005 9.94524 7.81306 10.6813 7.81306C11.5048 7.81306 12.0148 8.46683 12.0148 9.1465L12.0151 9.14617Z"
                                  fill="white" />
                              </svg>
                            </div>
                            <p>50,000</p>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td class="sr-name">
                            <img src="../assets/Overlay.png">
                            <h2>Mohammad Rasel</h2>
                          </td>
                          <td>+880 45546 66814</td>
                          <td>Mirpur, Dhaka, Bangladesh</td>
                          <td class="profit__ammount">
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                  d="M17 8.5C17 3.80558 13.1944 0 8.5 0C3.80558 0 0 3.80558 0 8.5C0 13.1944 3.80558 17 8.5 17C13.1944 17 17 13.1944 17 8.5Z"
                                  fill="#1273EB" />
                                <path
                                  d="M12.0151 9.14617C12.0151 10.5802 11.3872 13.4805 8.06627 13.4805C7.05955 13.4805 6.24342 12.6644 6.24342 11.6577V8.08931H4.98535V6.79771H6.24342V5.59709C6.24342 5.59709 6.29057 5.12759 5.69258 5.12759H5.09426V3.5199H5.69258C7.13525 3.5199 8.06627 3.72343 8.06627 5.59709V6.79771H9.32434V8.08931H8.06627V11.8443C9.23734 11.8443 9.77225 11.0344 10.0166 10.3023C9.61686 10.0719 9.34791 9.64089 9.34791 9.1465C9.34791 8.41005 9.94524 7.81306 10.6813 7.81306C11.5048 7.81306 12.0148 8.46683 12.0148 9.1465L12.0151 9.14617Z"
                                  fill="white" />
                              </svg>
                            </div>
                            <p>50,000</p>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td class="sr-name">
                            <img src="../assets/Overlay.png">
                            <h2>Mohammad Rasel</h2>
                          </td>
                          <td>+880 45546 66814</td>
                          <td>Mirpur, Dhaka, Bangladesh</td>
                          <td class="profit__ammount">
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                  d="M17 8.5C17 3.80558 13.1944 0 8.5 0C3.80558 0 0 3.80558 0 8.5C0 13.1944 3.80558 17 8.5 17C13.1944 17 17 13.1944 17 8.5Z"
                                  fill="#1273EB" />
                                <path
                                  d="M12.0151 9.14617C12.0151 10.5802 11.3872 13.4805 8.06627 13.4805C7.05955 13.4805 6.24342 12.6644 6.24342 11.6577V8.08931H4.98535V6.79771H6.24342V5.59709C6.24342 5.59709 6.29057 5.12759 5.69258 5.12759H5.09426V3.5199H5.69258C7.13525 3.5199 8.06627 3.72343 8.06627 5.59709V6.79771H9.32434V8.08931H8.06627V11.8443C9.23734 11.8443 9.77225 11.0344 10.0166 10.3023C9.61686 10.0719 9.34791 9.64089 9.34791 9.1465C9.34791 8.41005 9.94524 7.81306 10.6813 7.81306C11.5048 7.81306 12.0148 8.46683 12.0148 9.1465L12.0151 9.14617Z"
                                  fill="white" />
                              </svg>
                            </div>
                            <p>50,000</p>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td class="sr-name">
                            <img src="../assets/Overlay.png">
                            <h2>Mohammad Rasel</h2>
                          </td>
                          <td>+880 45546 66814</td>
                          <td>Mirpur, Dhaka, Bangladesh</td>
                          <td class="profit__ammount">
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                  d="M17 8.5C17 3.80558 13.1944 0 8.5 0C3.80558 0 0 3.80558 0 8.5C0 13.1944 3.80558 17 8.5 17C13.1944 17 17 13.1944 17 8.5Z"
                                  fill="#1273EB" />
                                <path
                                  d="M12.0151 9.14617C12.0151 10.5802 11.3872 13.4805 8.06627 13.4805C7.05955 13.4805 6.24342 12.6644 6.24342 11.6577V8.08931H4.98535V6.79771H6.24342V5.59709C6.24342 5.59709 6.29057 5.12759 5.69258 5.12759H5.09426V3.5199H5.69258C7.13525 3.5199 8.06627 3.72343 8.06627 5.59709V6.79771H9.32434V8.08931H8.06627V11.8443C9.23734 11.8443 9.77225 11.0344 10.0166 10.3023C9.61686 10.0719 9.34791 9.64089 9.34791 9.1465C9.34791 8.41005 9.94524 7.81306 10.6813 7.81306C11.5048 7.81306 12.0148 8.46683 12.0148 9.1465L12.0151 9.14617Z"
                                  fill="white" />
                              </svg>
                            </div>
                            <p>50,000</p>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td class="sr-name">
                            <img src="../assets/Overlay.png">
                            <h2>Mohammad Rasel</h2>
                          </td>
                          <td>+880 45546 66814</td>
                          <td>Mirpur, Dhaka, Bangladesh</td>
                          <td class="profit__ammount">
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                  d="M17 8.5C17 3.80558 13.1944 0 8.5 0C3.80558 0 0 3.80558 0 8.5C0 13.1944 3.80558 17 8.5 17C13.1944 17 17 13.1944 17 8.5Z"
                                  fill="#1273EB" />
                                <path
                                  d="M12.0151 9.14617C12.0151 10.5802 11.3872 13.4805 8.06627 13.4805C7.05955 13.4805 6.24342 12.6644 6.24342 11.6577V8.08931H4.98535V6.79771H6.24342V5.59709C6.24342 5.59709 6.29057 5.12759 5.69258 5.12759H5.09426V3.5199H5.69258C7.13525 3.5199 8.06627 3.72343 8.06627 5.59709V6.79771H9.32434V8.08931H8.06627V11.8443C9.23734 11.8443 9.77225 11.0344 10.0166 10.3023C9.61686 10.0719 9.34791 9.64089 9.34791 9.1465C9.34791 8.41005 9.94524 7.81306 10.6813 7.81306C11.5048 7.81306 12.0148 8.46683 12.0148 9.1465L12.0151 9.14617Z"
                                  fill="white" />
                              </svg>
                            </div>
                            <p>50,000</p>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td class="sr-name">
                            <img src="../assets/Overlay.png">
                            <h2>Mohammad Rasel</h2>
                          </td>
                          <td>+880 45546 66814</td>
                          <td>Mirpur, Dhaka, Bangladesh</td>
                          <td class="profit__ammount">
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                  d="M17 8.5C17 3.80558 13.1944 0 8.5 0C3.80558 0 0 3.80558 0 8.5C0 13.1944 3.80558 17 8.5 17C13.1944 17 17 13.1944 17 8.5Z"
                                  fill="#1273EB" />
                                <path
                                  d="M12.0151 9.14617C12.0151 10.5802 11.3872 13.4805 8.06627 13.4805C7.05955 13.4805 6.24342 12.6644 6.24342 11.6577V8.08931H4.98535V6.79771H6.24342V5.59709C6.24342 5.59709 6.29057 5.12759 5.69258 5.12759H5.09426V3.5199H5.69258C7.13525 3.5199 8.06627 3.72343 8.06627 5.59709V6.79771H9.32434V8.08931H8.06627V11.8443C9.23734 11.8443 9.77225 11.0344 10.0166 10.3023C9.61686 10.0719 9.34791 9.64089 9.34791 9.1465C9.34791 8.41005 9.94524 7.81306 10.6813 7.81306C11.5048 7.81306 12.0148 8.46683 12.0148 9.1465L12.0151 9.14617Z"
                                  fill="white" />
                              </svg>
                            </div>
                            <p>50,000</p>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td class="sr-name">
                            <img src="../assets/Overlay.png">
                            <h2>Mohammad Rasel</h2>
                          </td>
                          <td>+880 45546 66814</td>
                          <td>Mirpur, Dhaka, Bangladesh</td>
                          <td class="profit__ammount">
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                  d="M17 8.5C17 3.80558 13.1944 0 8.5 0C3.80558 0 0 3.80558 0 8.5C0 13.1944 3.80558 17 8.5 17C13.1944 17 17 13.1944 17 8.5Z"
                                  fill="#1273EB" />
                                <path
                                  d="M12.0151 9.14617C12.0151 10.5802 11.3872 13.4805 8.06627 13.4805C7.05955 13.4805 6.24342 12.6644 6.24342 11.6577V8.08931H4.98535V6.79771H6.24342V5.59709C6.24342 5.59709 6.29057 5.12759 5.69258 5.12759H5.09426V3.5199H5.69258C7.13525 3.5199 8.06627 3.72343 8.06627 5.59709V6.79771H9.32434V8.08931H8.06627V11.8443C9.23734 11.8443 9.77225 11.0344 10.0166 10.3023C9.61686 10.0719 9.34791 9.64089 9.34791 9.1465C9.34791 8.41005 9.94524 7.81306 10.6813 7.81306C11.5048 7.81306 12.0148 8.46683 12.0148 9.1465L12.0151 9.14617Z"
                                  fill="white" />
                              </svg>
                            </div>
                            <p>50,000</p>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td class="sr-name">
                            <img src="../assets/Overlay.png">
                            <h2>Mohammad Rasel</h2>
                          </td>
                          <td>+880 45546 66814</td>
                          <td>Mirpur, Dhaka, Bangladesh</td>
                          <td class="profit__ammount">
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                  d="M17 8.5C17 3.80558 13.1944 0 8.5 0C3.80558 0 0 3.80558 0 8.5C0 13.1944 3.80558 17 8.5 17C13.1944 17 17 13.1944 17 8.5Z"
                                  fill="#1273EB" />
                                <path
                                  d="M12.0151 9.14617C12.0151 10.5802 11.3872 13.4805 8.06627 13.4805C7.05955 13.4805 6.24342 12.6644 6.24342 11.6577V8.08931H4.98535V6.79771H6.24342V5.59709C6.24342 5.59709 6.29057 5.12759 5.69258 5.12759H5.09426V3.5199H5.69258C7.13525 3.5199 8.06627 3.72343 8.06627 5.59709V6.79771H9.32434V8.08931H8.06627V11.8443C9.23734 11.8443 9.77225 11.0344 10.0166 10.3023C9.61686 10.0719 9.34791 9.64089 9.34791 9.1465C9.34791 8.41005 9.94524 7.81306 10.6813 7.81306C11.5048 7.81306 12.0148 8.46683 12.0148 9.1465L12.0151 9.14617Z"
                                  fill="white" />
                              </svg>
                            </div>
                            <p>50,000</p>
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
  <script src="{{ asset('admin/dealer_profit/js/index.js') }}"></script>
</body>

</html>