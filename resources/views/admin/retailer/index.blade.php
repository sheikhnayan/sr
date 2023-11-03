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
  <link rel="stylesheet" href="{{ asset('admin/retailer/css/style.css') }}" />
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <div class="admin__panel-container">
    @include('admin.layouts.sidebar')


    <!--Retailer start-->
    <div class="dashboard">
      <header class="dashboard__navbar">
        <h2 class="dashboard__navbar-title">Retailer</h2>
      </header>
      <div class="dashboard__container">
        <div class="dashboard__card-container">
          <div class="dashboard__card">
            <img class="dashboard__card-img" src="./assets/Group.svg" alt="" />
            <div>
              <h3 class="dashboard__card-title">Total Retailer</h3>
              <p class="dashboard__card-amount">{{ $data->count() }}</p>
            </div>
          </div>
          <div class="dashboard__card">
            <img class="dashboard__card-img" src="./assets/group3.svg" alt="" />
            <div>
              <h3 class="dashboard__card-title">Toatal Bazar</h3>
              <p class="dashboard__card-amount">
                @php
                    $total_bazar = DB::table('bazars')->count();
                @endphp
                {{ $total_bazar }}
              </p>
            </div>
          </div>
          <div class="dashboard__card">
            <img class="dashboard__card-img" src="./assets/Group2.svg" alt="" />
            <div>
              <h3 class="dashboard__card-title">AV. Order Value</h3>
              <p class="dashboard__card-amount">1200</p>
            </div>
          </div>
          <div class="dashboard__card_with_button">
            <div class="dashboard_card_button_container">
              <button id="myBtn" class="dashboard_card_button">Add New Retailer<img class="plus_in_button"
                  src="{{ asset('admin/retailer/assets/plus.svg') }}" alt=""></button>
            </div>
          </div>
        </div>

        <!--Retailer table-->
        <div>


          <div class="sr_tab-content">
            <div class="sr__order-container">
              <div class="sr-order__top-ten">
                <div class="tabs sr-order__top-tabs">
                  <div class="tab-navbar-container">
                    <ul id="tabs-nav-order">
                      <h3 class="retailer_title">All Retailer</h3>
                    </ul>
                    <div class="tab-navbar-container-right-side">
                      <select class="option_select">
                        <option value="Upazila">Upazila</option>
                      </select>
                      <select class="option_select">
                        <option value="Union">Union</option>
                      </select>
                      <select class="option_select">
                        <option value="Bazar">Bazar</option>
                      </select>
                      <input class="dashboard__navbar-search" type="text" placeholder="Search Retailer" />

                    </div>
                  </div>
                  <!-- END tabs-nav -->
                  <div>
                    <div class="sr-order__tab-content">
                      <table>
                        <thead>
                          <tr>
                            <th>SN.</th>
                            <th>NAME</th>
                            <th>PHONE NUMBER</th>
                            <th>BAZAR</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody class="order-tab1-tr">
                            @foreach ($data as $key => $item)
                            <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>
                                <div class="reatailers_name"><img src="./assets/man.svg" alt="">
                                  <p>{{ $item->name }}</p>
                                </div>
                              </td>
                              <td>{{ $item->phone }}</td>
                              <td>{{ $item->union->name }},{{ $item->bazar->name }}
                                    @if ($item->bazar_side_input != null)
                                    ,{{ $item->bazar_side_input }}
                                    @endif
                            </td>
                              <td><img id="myBtn2" class="edit_delete_icons" src="{{ asset('admin/retailer/assets/edit.svg') }}" alt=""><img
                                  src="{{ asset('admin/retailer/assets/delete.svg') }}" alt=""></td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <div class="pagination">
                        <div class="pagination-left">
                          <h3>Show result:</h3>
                          <button>6 <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M4 6.5L8 10.5L12 6.5" stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            </svg></button>
                        </div>
                        <div class="pagination-right">
                          <button><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.5 5L7.5 10L12.5 15" stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            </svg>
                            </svg></button>
                          <button>1</button>
                          <button>2</button>
                          <button class="active-page">3</button>
                          <button>4</button>
                          <button>...</button>
                          <button>20</button>
                          <button><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M7.5 5L12.5 10L7.5 15" stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            </svg></button>
                        </div>
                      </div>
                    </div>

                    <!-- Add Modal -->
                    <div id="myModal" class="modal">

                      <!-- Modal content -->
                      <div class="modal-content">
                        <div class="close_div"><span class="close">&times;</span></div>
                        <p class="modal_heading">Add New Retailer</p>

                        <div class="modal_first_input_div">
                          <h3>Retailer Number</h3>
                          <input type="text" placeholder='+088147557555'>
                        </div>
                        <div class="modal_option_container">
                          <div>
                            <p>Shop image</p>
                            <input type="text" placeholder="Browse file">
                          </div>
                          <div>
                            <p>Retailer image</p>
                            <input type="text" placeholder="Browse file">
                          </div>
                          <div>
                            <p>Retailer Name</p>
                            <input type="text" placeholder="Rasel Hosen">
                          </div>
                          <div>
                            <p>Shop Name</p>
                            <input type="text" placeholder="Rasel Store">
                          </div>
                          <div>
                            <p>Select Upazila</p>
                            <select class="Modal_option_select">
                              <option value="Upazila">Select Upazila</option>
                            </select>
                          </div>
                          <div>
                            <p>Select union</p>
                            <select class="Modal_option_select">
                              <option value="Upazila">Select union</option>
                            </select>
                          </div>
                          <div>
                            <p>Select Bazar</p>
                            <select class="Modal_option_select">
                              <option value="Upazila">Select Bazar</option>
                            </select>
                          </div>
                          <div>
                            <p>Area</p>
                            <input type="select" placeholder="Area name">
                          </div>
                        </div>

                        <div class="modal_footer">
                          <button>Cencel</button>
                          <button>Add Retailer</button>
                        </div>
                      </div>

                    </div>


                      <!-- Edit Modal -->

                    <div id="myModalEdit" class="modal">

                      <!-- Modal content -->
                      <div class="modal-content">
                        <div class="close_div"><span class="close">&times;</span></div>
                        <p class="modal_heading">Edit Retailer</p>

                        <div class="modal_first_input_div">
                          <h3>Retailer Number</h3>
                          <input type="text" placeholder='+088147557555'>
                        </div>
                        <div class="modal_option_container">
                          <div>
                            <p>Shop image</p>
                            <input type="text" placeholder="Browse file">
                          </div>
                          <div>
                            <p>Retailer image</p>
                            <input type="text" placeholder="Browse file">
                          </div>
                          <div>
                            <p>Retailer Name</p>
                            <input type="text" placeholder="Rasel Hosen">
                          </div>
                          <div>
                            <p>Shop Name</p>
                            <input type="text" placeholder="Rasel Store">
                          </div>
                          <div>
                            <p>Select Upazila</p>
                            <select class="Modal_option_select">
                              <option value="Upazila">Select Upazila</option>
                            </select>
                          </div>
                          <div>
                            <p>Select union</p>
                            <select class="Modal_option_select">
                              <option value="Upazila">Select union</option>
                            </select>
                          </div>
                          <div>
                            <p>Select Bazar</p>
                            <select class="Modal_option_select">
                              <option value="Upazila">Select Bazar</option>
                            </select>
                          </div>
                          <div>
                            <p>Area</p>
                            <input type="select" placeholder="Area name">
                          </div>
                        </div>

                        <div class="modal_footer">
                          <button>Cencel</button>
                          <button>Add Retailer</button>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="{{ asset('admin/retailer/js/index.js') }}"></script>
</body>

</html>
