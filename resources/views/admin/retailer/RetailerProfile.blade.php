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
        href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;600;700&family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
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

        <div class="dashboard">
            <header class="dashboard__navbar">
                <h2 class="dashboard__navbar-title">Retailer Profile</h2>

            </header>
            <div class="dashboard__container">
                <!-- Retailer Proflie Start -->
                <div class="sr__profile">
                    <div class="sr__details-container">
                        <div class="sr__name-details">
                            <img class="sr__image" src="./assets/Rectangle 2387.svg">
                            <div class="sr__name-container">
                                <h2 class="sr__name">Muhammad Rasel</h2>
                                <p class="sr__mobile">Bazar Name</p>
                            </div>
                        </div>
                        <div class="sr__company-details">
                            <img class="sr__joining-icon" src="./assets/Rectangle 2414.png">
                            <div class="sr__joining-container">
                                <h3 class="sr__joining-title">Phone</h3>
                                <p class="sr__joining-date">+880125 5566 55</p>
                            </div>
                        </div>
                        <div class="sr__joining">
                            <img src="./assets/date.png" class="sr__joining-icon">
                            <div class="sr__joining-container">
                                <h3 class="sr__joining-title">Join Date</h3>
                                <p class="sr__joining-date">10 march 2023</p>
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
                            <p class="sr__activity-total">AVg. order value </p>
                            <h6 class="sr__activity-number">855</h6>
                        </div>
                        <div class="sr__activity-item">
                            <p class="sr__activity-total">Delivered</p>
                            <h6 class="sr__activity-number">855</h6>
                        </div>
                        <div class="sr__activity-item">
                            <p class="sr__activity-total">o/c</p>
                            <h6 class="sr__activity-number">455</h6>
                        </div>
                    </div>
                    <button class="sr_edit-icon"><svg width="18" height="4" viewBox="0 0 18 4" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 3C9.55228 3 10 2.55228 10 2C10 1.44772 9.55228 1 9 1C8.44772 1 8 1.44772 8 2C8 2.55228 8.44772 3 9 3Z"
                                stroke="#8A94A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M16 3C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1C15.4477 1 15 1.44772 15 2C15 2.55228 15.4477 3 16 3Z"
                                stroke="#8A94A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z"
                                stroke="#8A94A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></button>
                    <div class="sr__edit-container">
                        <button class="sr__edit-btn"><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.47272 2.05434H1.99394C1.73033 2.05434 1.47752 2.15905 1.29112 2.34545C1.10472 2.53185 1 2.78467 1 3.04828V10.0058C1 10.2695 1.10472 10.5223 1.29112 10.7087C1.47752 10.8951 1.73033 10.9998 1.99394 10.9998H8.95151C9.21512 10.9998 9.46793 10.8951 9.65433 10.7087C9.84073 10.5223 9.94545 10.2695 9.94545 10.0058V6.52706"
                                    stroke="#8A94A6" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M9.2006 1.30896C9.39831 1.11125 9.66645 1.00018 9.94605 1.00018C10.2257 1.00018 10.4938 1.11125 10.6915 1.30896C10.8892 1.50667 11.0003 1.77481 11.0003 2.05441C11.0003 2.33401 10.8892 2.60216 10.6915 2.79987L5.9703 7.52108L3.98242 8.01804L4.47939 6.03017L9.2006 1.30896Z"
                                    stroke="#8A94A6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Edit Profile</button>
                        <button class="sr__delete-btn"><svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 3.00006H2H10" stroke="#FF565E" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M8.99976 3V10C8.99976 10.2652 8.8944 10.5196 8.70686 10.7071C8.51933 10.8946 8.26497 11 7.99976 11H2.99976C2.73454 11 2.48019 10.8946 2.29265 10.7071C2.10511 10.5196 1.99976 10.2652 1.99976 10V3M3.49976 3V2C3.49976 1.73478 3.60511 1.48043 3.79265 1.29289C3.98019 1.10536 4.23454 1 4.49976 1H6.49976C6.76497 1 7.01933 1.10536 7.20686 1.29289C7.3944 1.48043 7.49976 1.73478 7.49976 2V3"
                                    stroke="#FF565E" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.50024 5.5V8.5" stroke="#FF565E" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M6.49976 5.5V8.5" stroke="#FF565E" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg> Delete</button>
                    </div>
                </div>
                <!-- SR Proflie End -->

                <div class="sr_tab-content">
                    <div class="sr__order-container">
                        <div class="sr-order__top-ten">
                            <div class="tabs sr-order__top-tabs">
                                <div class="tab-navbar-container">
                                    <ul>
                                        <li><a>All Orders</a></li>
                                        <li><a>Delivered</a></li>
                                        <li><a>Canceled</a></li>
                                    </ul>
                                    <div class="tab-navbar-container-right-side">
                                        <div class="tab_navbar_month"><img src="./assets/month.svg" alt="">
                                            <p>April 11-April 24</p>
                                        </div>
                                        <button><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.5 11.5001V14.8335C16.5 15.2755 16.3244 15.6994 16.0118 16.012C15.6993 16.3245 15.2754 16.5001 14.8333 16.5001H3.16667C2.72464 16.5001 2.30072 16.3245 1.98816 16.012C1.67559 15.6994 1.5 15.2755 1.5 14.8335V11.5001"
                                                    stroke="#64748B" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M4.83203 7.33325L8.9987 11.4999L13.1654 7.33325"
                                                    stroke="#64748B" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M9 11.5V1.5" stroke="#64748B" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg></button>
                                    </div>
                                </div>

                                <!-- END tabs-nav -->
                                <div id="tabs-content-order" class="sr-order__top-tabs-content">
                                    <div id="order-tab1" class="tab-content-order sr-order__tab-content">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Date <svg width="7" height="5" viewBox="0 0 7 5" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.2"
                                                                d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z"
                                                                fill="#0F172A" />
                                                        </svg></th>
                                                    <th> sr<svg width="7" height="5" viewBox="0 0 7 5" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.2"
                                                                d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z"
                                                                fill="#0F172A" />
                                                        </svg></th>
                                                    <th>Total Items <svg width="7" height="5" viewBox="0 0 7 5"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.2"
                                                                d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z"
                                                                fill="#0F172A" />
                                                        </svg></th>
                                                    <th>Amount <svg width="7" height="5" viewBox="0 0 7 5" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.2"
                                                                d="M3.41595 4.81539C3.38695 4.78714 3.26295 4.68047 3.16095 4.5811C2.51945 3.99854 1.46945 2.47881 1.14895 1.68339C1.09745 1.56259 0.988445 1.25718 0.981445 1.09401C0.981445 0.937652 1.01745 0.788602 1.09045 0.646371C1.19245 0.46907 1.35295 0.326839 1.54245 0.248904C1.67395 0.198734 2.06745 0.120799 2.07445 0.120799C2.50495 0.0428641 3.20445 0 3.97745 0C4.71395 0 5.38495 0.0428641 5.82195 0.106673C5.82895 0.11398 6.31795 0.191914 6.48545 0.277155C6.79145 0.433512 6.98145 0.738919 6.98145 1.06576V1.09401C6.97395 1.30687 6.78395 1.75451 6.77695 1.75451C6.45595 2.50706 5.45745 3.99172 4.79395 4.58841C4.79395 4.58841 4.62345 4.75645 4.51695 4.82952C4.36395 4.9435 4.17445 5 3.98495 5C3.77345 5 3.57645 4.93619 3.41595 4.81539Z"
                                                                fill="#0F172A" />
                                                        </svg></th>
                                                    <th>Payment</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="order-tab1-tr">
                                                <tr>
                                                    <td> Apr 24,2022 </td>
                                                    <td>Romzan Ali </td>
                                                    <td>60</td>
                                                    <td>৳105.62</td>
                                                    <td class="paid">Paid</td>
                                                    <td>
                                                        <div class="order-tab1-td_last_multipale">
                                                            <button class="canceled">Cancelled</button>
                                                            <div class="order-tab1-td_last"> <span>Reason for
                                                                    cancellation</span> <img style="padding-left: 5px;"
                                                                    src="./assets/More.svg" alt=""></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> Apr 24,2022 </td>
                                                    <td>Romzan Ali </td>
                                                    <td>60</td>
                                                    <td>৳105.62</td>
                                                    <td class="paid">Paid</td>
                                                    <td>
                                                        <div class="order-tab1-td_last_multipale">
                                                            <button class="delivered">Delivered</button>
                                                            <div class="order-tab1-td_last">
                                                                <p>20%</p>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="98"
                                                                    height="5" viewBox="0 0 98 5" fill="none">
                                                                    <rect width="98" height="5" rx="2.5" fill="#0CAF60"
                                                                        fill-opacity="0.17" />
                                                                    <rect width="21" height="5" rx="2.5"
                                                                        fill="#0CAF60" />
                                                                </svg><img src="./assets/More.svg" alt="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> Apr 24,2022 </td>
                                                    <td>Romzan Ali </td>
                                                    <td>60</td>
                                                    <td>৳105.62</td>
                                                    <td class="paid">Paid</td>
                                                    <td>
                                                        <div class="order-tab1-td_last_multipale">
                                                            <button class="delivered">Delivered</button>
                                                            <div class="order-tab1-td_last">
                                                                <p>20%</p>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="98"
                                                                    height="5" viewBox="0 0 98 5" fill="none">
                                                                    <rect width="98" height="5" rx="2.5" fill="#0CAF60"
                                                                        fill-opacity="0.17" />
                                                                    <rect width="21" height="5" rx="2.5"
                                                                        fill="#0CAF60" />
                                                                </svg> <img src="./assets/down.svg" alt="">
                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> Apr 24,2022 </td>
                                                    <td>Romzan Ali </td>
                                                    <td>60</td>
                                                    <td>৳105.62</td>
                                                    <td class="paid">Paid</td>
                                                    <td>
                                                        <div class="order-tab1-td_last_multipale">
                                                            <button class="delivered">Delivered</button>
                                                            <div class="order-tab1-td_last">
                                                                <p>20%</p>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="98"
                                                                    height="5" viewBox="0 0 98 5" fill="none">
                                                                    <rect width="98" height="5" rx="2.5" fill="#0CAF60"
                                                                        fill-opacity="0.17" />
                                                                    <rect width="21" height="5" rx="2.5"
                                                                        fill="#0CAF60" />
                                                                </svg><img src="./assets/More.svg" alt="">
                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> Apr 24,2022 </td>
                                                    <td>Romzan Ali </td>
                                                    <td>60</td>
                                                    <td>৳105.62</td>
                                                    <td class="paid">Paid</td>
                                                    <td>
                                                        <div class="order-tab1-td_last_multipale">
                                                            <button class="delivered">Delivered</button>
                                                            <div class="order-tab1-td_last">
                                                                <p>20%</p>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="98"
                                                                    height="5" viewBox="0 0 98 5" fill="none">
                                                                    <rect width="98" height="5" rx="2.5" fill="#0CAF60"
                                                                        fill-opacity="0.17" />
                                                                    <rect width="21" height="5" rx="2.5"
                                                                        fill="#0CAF60" />
                                                                </svg><img src="./assets/More.svg" alt="">
                                                            </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                        <!-- END tabs-nav -->
                                        <div id="tabs-content-summary" class="sr-order__top-tabs-content">
                                            <div id="summary-tab1" class="tab-content-summary sr-order__tab-content">

                                                <div class="Retailer_table_last_container">
                                                    <div class="Retailer_table_last_container_left">
                                                        <div class="Retailer_table_last_container_left_items">
                                                            <h3>Total Order:</h3>
                                                            <span>06</span>
                                                        </div>
                                                        <div class="Retailer_table_last_container_left_items">
                                                            <img src="./assets/line.svg" alt="">
                                                        </div>
                                                        <div class="Retailer_table_last_container_left_items">
                                                            <h3>O/C:</h3>
                                                            <span>Tk 500,00</span>
                                                        </div>
                                                        <div class="Retailer_table_last_container_left_items">
                                                            <img src="./assets/line.svg" alt="">
                                                        </div>
                                                        <div class="Retailer_table_last_container_left_items">
                                                            <h3>Cancel Amount</h3>
                                                            <span style="color: #FD6A6A;">Tk 500,00</span>
                                                        </div>
                                                        <div>
                                                            <img src="./assets/line.svg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="Retailer_table_last_container-right">
                                                        <div class="Retailer_table_last_container_left_items">
                                                            <h3>Total Amount</h3>
                                                            <span>Tk 500,00</span>
                                                        </div>
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