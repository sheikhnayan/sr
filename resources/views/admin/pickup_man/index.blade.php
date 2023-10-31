<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pick-Up Man</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;600;700&family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('admin/pickup_man/css/style.css') }}" />
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
          <h2 class="dashboard__navbar-title">Pickup Man</h2>
        </header>


        <div class="dashboard__container">
          
          <ul class="dashboard-activity-container" id="activity-tabs">
            <li class="dashboard_tab-active">
                <a href="#">
                  <img src="./assets/Rectangle.png">
                  <h2>Dealer 1 </h2>
                </a>
            </li>
            
            <li>
                <a href="#">
                  <img src="./assets/Rectangle.png">
                  <h2>Dealer 2 </h2>
                </a>
            </li>
            <li>
              <a href="#">
                <img src="./assets/Rectangle.png">
              <h2>Dealer 3 </h2>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="./assets/Rectangle.png">
              <h2>Dealer 4  </h2>
              </a>
            </li>
          </ul>

          <div class="dashboard_tab-contents">
            <div id="sr_tabs-2" class="sr_tab-content">
              <div class="sr__order-container">
                <div class="sr-order__top-ten">
                  <div class="tabs sr-order__top-tabs">
                    <div class="tab-navbar-container">
                      <ul id="tabs-nav-order">
                        <li><a href="#order-tab1">রমজান আলী</a></li>
                        <li><a href="#">রমজান আলী</a></li>
                        <li><a href="#">রমজান আলী</a></li>
                        <li><a href="#">রমজান আলী</a></li>
                        <li><a href="#">রমজান আলী</a></li>
                        <li><a href="#">রমজান আলী</a></li>
                      </ul>
                      <div class="tab-navbar-container-right-side">
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
                              <th>PRODUCT NAME <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>QTY <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>PRICE <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>EDITED QTY <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>EDITED PRICE <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z" fill="#0F172A"/>
                              </svg></th>
                              <th>STATUS</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody class="order-tab1-tr">
                            <tr>
                              <td>
                                Fresh Water
                              </td>
                              <td>04 <span class="bot">B</span> 14  <span class="bot">P</span></td>
                              <td>৳10.62</td>
                              <td>04 <span class="bot">B</span> 14  <span class="bot">P</span></td>
                              <td>৳100.62</td>
                              <td><button class="on-delivery">EDITED</button></td>
                              <td><input type="checkbox" name="" id="" class="checkboxS" checked></td>
                            </tr>
                            <tr>
                              <td>
                                Fresh Water
                              </td>
                              <td>04 <span class="bot">B</span> 14  <span class="bot">P</span></td>
                              <td>৳10.62</td>
                              <td></td>
                              <td>৳100.62</td>
                              <td><button class="paid"></button></td>
                              <td><input type="checkbox" name="" class="checkboxS" id=""></td>
                            </tr>
                            <tr>
                              <td>
                                Fresh Water
                              </td>
                              <td>04 <span class="bot">B</span> 14  <span class="bot">P</span></td>
                              <td>৳10.62</td>
                              <td>04 <span class="bot">B</span> 14  <span class="bot">P</span></td>
                              <td>৳100.62</td>
                              <td><button class="on-delivery">EDITED</button></td>
                              <td><input type="checkbox" name="" id="" class="checkboxS" checked></td>

                            </tr>
                            <tr>
                              <td>
                                Fresh Water
                              </td>
                              <td>04 <span class="bot">B</span> 14  <span class="bot">P</span></td>
                              <td>৳10.62</td>
                              <td>04 <span class="bot">B</span> 14  <span class="bot">P</span></td>
                              <td>৳100.62</td>
                              <td><button class="on-delivery">EDITED</button></td>
                              <td><input type="checkbox" name="" id="" class="checkboxS" checked></td>

                            </tr> <tr>
                              <td>
                                Fresh Water
                              </td>
                              <td>04 <span class="bot">B</span> 14  <span class="bot">P</span></td>
                              <td>৳10.62</td>
                              <td></td>
                              <td></td>
                              <td><button class="paid"></button></td>
                              <td><input type="checkbox" name="" id="" class="checkboxS" checked></td>

                            </tr>
                            <tr>
                              <td>
                                Fresh Water
                              </td>
                              <td>04 <span class="bot">B</span> 14  <span class="bot">P</span></td>
                              <td>৳10.62</td>
                              <td></td>
                              <td></td>
                              <td><button class="paid"></button></td>
                              <td><input type="checkbox" name="" id="" class="checkboxS"></td>

                            </tr> <tr>
                              <td>
                                Fresh Water
                              </td>
                              <td>04 <span class="bot">B</span> 14  <span class="bot">P</span></td>
                              <td>৳10.62</td>
                              <td></td>
                              <td></td>
                              <td><button class="paid"></button></td>
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
                    </div>
                    <!-- END tabs-content -->
                  </div>
                  <!-- END tabs -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('admin/pickup_man/js/index.js') }}"></script>
  </body>
</html>
