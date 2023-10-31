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
  <link rel="stylesheet" href="{{ asset('admin/delivery_route/css/style.css') }}" />
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
        <div class="dashboard__main-container">
          <main>

            <div class="dashboard__top-ten">
              <div class="tabs dashboard__top-tabs">
                <div class="tabs-nav-wrapper">
                  <ul id="tabs-nav">
                    <li><a href="#tab1">শনিবার</a></li>
                    <li><a href="#tab2">রবিবার</a></li>
                    <li><a href="#tab3">সোমবার</a></li>
                    <li><a href="#tab4">মঙ্গলবার</a></li>
                    <li><a href="#tab5">বুধবার </a></li>
                    <li><a href="#tab6">বৃৃহস্পতিবার </a></li>
                    <li><a href="#tab7">শুক্রবার </a></li>
                  </ul>
                  <div class="tabs-nav-right">
                    <button class="tabs-nav-right-btn">Add Route <svg xmlns="http://www.w3.org/2000/svg" width="12"
                        height="12" viewBox="0 0 12 12" fill="none">
                        <path d="M6 1V11" stroke="white" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path d="M1 6H11" stroke="white" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg></button>
                  </div>
                </div>
                <!-- END tabs-nav -->
                <div id="tabs-content" class="dashboard__top-tabs-content">
                  <div id="tab1" class="tab-content dashboard__tab-content">
                    <div class="route__card-wrapper">
                      <div class="route__card">
                        <p class="route-title">1 - বুধির হাট</p>
                        <p class="route-title">6</p>
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path
                              d="M4.29998 3.72012H2.31999C1.96991 3.72012 1.63416 3.85919 1.38662 4.10674C1.13907 4.35429 1 4.69003 1 5.04011V10.9801C1 11.3302 1.13907 11.6659 1.38662 11.9135C1.63416 12.161 1.96991 12.3001 2.31999 12.3001H8.25995C8.61004 12.3001 8.94578 12.161 9.19333 11.9135C9.44087 11.6659 9.57994 11.3302 9.57994 10.9801V9.00009"
                              stroke="#007AFF" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                              d="M4.30054 9.00008H6.28053L11.8905 3.39012C12.1531 3.12756 12.3006 2.77144 12.3006 2.40012C12.3006 2.0288 12.1531 1.67269 11.8905 1.41013C11.6279 1.14757 11.2718 1.00006 10.9005 1.00006C10.5292 1.00006 10.1731 1.14757 9.9105 1.41013L4.30054 7.0201V9.00008Z"
                              stroke="#007AFF" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.91968 2.40027L10.8997 4.38026" stroke="#007AFF" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>
                        </div>
                      </div>
                      <div class="route__card">
                        <p class="route-title">1 - বুধির হাট</p>
                        <p class="route-title">6</p>
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path
                              d="M4.29998 3.72012H2.31999C1.96991 3.72012 1.63416 3.85919 1.38662 4.10674C1.13907 4.35429 1 4.69003 1 5.04011V10.9801C1 11.3302 1.13907 11.6659 1.38662 11.9135C1.63416 12.161 1.96991 12.3001 2.31999 12.3001H8.25995C8.61004 12.3001 8.94578 12.161 9.19333 11.9135C9.44087 11.6659 9.57994 11.3302 9.57994 10.9801V9.00009"
                              stroke="#007AFF" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                              d="M4.30054 9.00008H6.28053L11.8905 3.39012C12.1531 3.12756 12.3006 2.77144 12.3006 2.40012C12.3006 2.0288 12.1531 1.67269 11.8905 1.41013C11.6279 1.14757 11.2718 1.00006 10.9005 1.00006C10.5292 1.00006 10.1731 1.14757 9.9105 1.41013L4.30054 7.0201V9.00008Z"
                              stroke="#007AFF" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.91968 2.40027L10.8997 4.38026" stroke="#007AFF" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>
                        </div>
                      </div>
                      <div class="route__card">
                        <p class="route-title">1 - বুধির হাট</p>
                        <p class="route-title">6</p>
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path
                              d="M4.29998 3.72012H2.31999C1.96991 3.72012 1.63416 3.85919 1.38662 4.10674C1.13907 4.35429 1 4.69003 1 5.04011V10.9801C1 11.3302 1.13907 11.6659 1.38662 11.9135C1.63416 12.161 1.96991 12.3001 2.31999 12.3001H8.25995C8.61004 12.3001 8.94578 12.161 9.19333 11.9135C9.44087 11.6659 9.57994 11.3302 9.57994 10.9801V9.00009"
                              stroke="#007AFF" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                              d="M4.30054 9.00008H6.28053L11.8905 3.39012C12.1531 3.12756 12.3006 2.77144 12.3006 2.40012C12.3006 2.0288 12.1531 1.67269 11.8905 1.41013C11.6279 1.14757 11.2718 1.00006 10.9005 1.00006C10.5292 1.00006 10.1731 1.14757 9.9105 1.41013L4.30054 7.0201V9.00008Z"
                              stroke="#007AFF" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.91968 2.40027L10.8997 4.38026" stroke="#007AFF" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>
                        </div>
                      </div>
                      <div class="route__card">
                        <p class="route-title">1 - বুধির হাট</p>
                        <p class="route-title">6</p>
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path
                              d="M4.29998 3.72012H2.31999C1.96991 3.72012 1.63416 3.85919 1.38662 4.10674C1.13907 4.35429 1 4.69003 1 5.04011V10.9801C1 11.3302 1.13907 11.6659 1.38662 11.9135C1.63416 12.161 1.96991 12.3001 2.31999 12.3001H8.25995C8.61004 12.3001 8.94578 12.161 9.19333 11.9135C9.44087 11.6659 9.57994 11.3302 9.57994 10.9801V9.00009"
                              stroke="#007AFF" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                              d="M4.30054 9.00008H6.28053L11.8905 3.39012C12.1531 3.12756 12.3006 2.77144 12.3006 2.40012C12.3006 2.0288 12.1531 1.67269 11.8905 1.41013C11.6279 1.14757 11.2718 1.00006 10.9005 1.00006C10.5292 1.00006 10.1731 1.14757 9.9105 1.41013L4.30054 7.0201V9.00008Z"
                              stroke="#007AFF" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.91968 2.40027L10.8997 4.38026" stroke="#007AFF" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>
                        </div>
                      </div>
                      <div class="route__card">
                        <p class="route-title">1 - বুধির হাট</p>
                        <p class="route-title">6</p>
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path
                              d="M4.29998 3.72012H2.31999C1.96991 3.72012 1.63416 3.85919 1.38662 4.10674C1.13907 4.35429 1 4.69003 1 5.04011V10.9801C1 11.3302 1.13907 11.6659 1.38662 11.9135C1.63416 12.161 1.96991 12.3001 2.31999 12.3001H8.25995C8.61004 12.3001 8.94578 12.161 9.19333 11.9135C9.44087 11.6659 9.57994 11.3302 9.57994 10.9801V9.00009"
                              stroke="#007AFF" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                              d="M4.30054 9.00008H6.28053L11.8905 3.39012C12.1531 3.12756 12.3006 2.77144 12.3006 2.40012C12.3006 2.0288 12.1531 1.67269 11.8905 1.41013C11.6279 1.14757 11.2718 1.00006 10.9005 1.00006C10.5292 1.00006 10.1731 1.14757 9.9105 1.41013L4.30054 7.0201V9.00008Z"
                              stroke="#007AFF" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.91968 2.40027L10.8997 4.38026" stroke="#007AFF" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>
                        </div>
                      </div>
                      <div class="route__card">
                        <p class="route-title">1 - বুধির হাট</p>
                        <p class="route-title">6</p>
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path
                              d="M4.29998 3.72012H2.31999C1.96991 3.72012 1.63416 3.85919 1.38662 4.10674C1.13907 4.35429 1 4.69003 1 5.04011V10.9801C1 11.3302 1.13907 11.6659 1.38662 11.9135C1.63416 12.161 1.96991 12.3001 2.31999 12.3001H8.25995C8.61004 12.3001 8.94578 12.161 9.19333 11.9135C9.44087 11.6659 9.57994 11.3302 9.57994 10.9801V9.00009"
                              stroke="#007AFF" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                              d="M4.30054 9.00008H6.28053L11.8905 3.39012C12.1531 3.12756 12.3006 2.77144 12.3006 2.40012C12.3006 2.0288 12.1531 1.67269 11.8905 1.41013C11.6279 1.14757 11.2718 1.00006 10.9005 1.00006C10.5292 1.00006 10.1731 1.14757 9.9105 1.41013L4.30054 7.0201V9.00008Z"
                              stroke="#007AFF" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.91968 2.40027L10.8997 4.38026" stroke="#007AFF" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>
                        </div>
                      </div>
                      <div class="route__card">
                        <p class="route-title">1 - বুধির হাট</p>
                        <p class="route-title">6</p>
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path
                              d="M4.29998 3.72012H2.31999C1.96991 3.72012 1.63416 3.85919 1.38662 4.10674C1.13907 4.35429 1 4.69003 1 5.04011V10.9801C1 11.3302 1.13907 11.6659 1.38662 11.9135C1.63416 12.161 1.96991 12.3001 2.31999 12.3001H8.25995C8.61004 12.3001 8.94578 12.161 9.19333 11.9135C9.44087 11.6659 9.57994 11.3302 9.57994 10.9801V9.00009"
                              stroke="#007AFF" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                              d="M4.30054 9.00008H6.28053L11.8905 3.39012C12.1531 3.12756 12.3006 2.77144 12.3006 2.40012C12.3006 2.0288 12.1531 1.67269 11.8905 1.41013C11.6279 1.14757 11.2718 1.00006 10.9005 1.00006C10.5292 1.00006 10.1731 1.14757 9.9105 1.41013L4.30054 7.0201V9.00008Z"
                              stroke="#007AFF" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.91968 2.40027L10.8997 4.38026" stroke="#007AFF" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>
                        </div>
                      </div>
                    </div>
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
  <script src="{{ asset('admin/delivery_route/js/index.js') }}"></script>
</body>

</html>