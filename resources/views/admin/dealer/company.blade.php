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
  <link rel="stylesheet" href="{{ asset('admin/dealer_company/css/style.css') }}" />
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
            <p class="dashboard__dealer-card-title">SR </p>
          </div>
          <div class="dashboard__dealer-card">
            <img src="../assets/image 5 (3).png" alt="">
            <p class="dashboard__dealer-card-title">Products </p>
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
                <div class="dashboard__top-navbar">
                  <h2 class="dashboard__top-navbar-title">All Company</h2>
                  <div>
                    <input class="dashboard__navbar-search" type="text" placeholder="Search anything..." />
                  </div>
                </div>

                <div class="company__profile-wrapper">
                  <div class="company__profile">
                    <img class="company__profile-img" src="../assets/image 10.png" alt="">
                    <h2 class="company__profile-title">Pusti Limited</h2>
                    <p class="company__profile-email">pustilimited@happy.com</p>
                  </div>
                  <div class="company__profile">
                    <img class="company__profile-img" src="../assets/image 10 (1).png" alt="">
                    <h2 class="company__profile-title">Pran Limited</h2>
                    <p class="company__profile-email">pranlimited@happy.com</p>
                  </div>
                  <div class="company__profile">
                    <img class="company__profile-img" src="../assets/image 10 (2).png" alt="">
                    <h2 class="company__profile-title">Fresh Limited</h2>
                    <p class="company__profile-email">freshlimited@happy.com</p>
                  </div>
                  <div class="company__profile">
                    <img class="company__profile-img" src="../assets/image 10 (3).png" alt="">
                    <h2 class="company__profile-title">BD FOOD</h2>
                    <p class="company__profile-email">bdfood@happy.com</p>
                  </div>
                </div>

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
  <script src="{{ asset('admin/dealer_company/js/index.js') }}"></script>
</body>

</html>