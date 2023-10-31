<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin-Product</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;600;700&family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/product/css/style.css') }}" />
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
          <h2 class="dashboard__navbar-title">Product</h2>

          <input
            class="dashboard__navbar-search"
            type="text"
            placeholder="Search SO"
          />
        </header>


        <div class="dashboard__container">

          <ul class="dashboard-activity-container" id="activity-tabs">
            <li class="dashboard_tab-active">
                <a href="#pickup_tabs">
                  <img src="./assets/activity-6.svg">
                  <h2>Product </h2>
                </a>
            </li>

            <li>
                <a href="#cetagory_tabs">
                  <img src="./assets/activity-5.svg">
                  <h2>Category </h2>
                </a>
            </li>
          </ul>

          <div class="dashboard_tab-contents">
            <div id="pickup_tabs" class="dashboard_tab-content">
              <div class="dashboard__main-so-container">
                <div class="dashboard__so">
                  <h3 class="dashboard__so-title">All Product</h3>
                  <div class="dashboard__so-btn-container">
                    <div class="dashboard__so-btn-group">

                      <button class="btn"><svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Group 33785">
                        <path id="Vector" d="M1 3.52271L3.20198 1.32072C3.59251 0.930197 4.22567 0.930196 4.6162 1.32072L6.81818 3.5227" stroke="#8A94A6" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path id="Vector_2" d="M8.27272 13.7046L6.81818 13.7046C6.04664 13.7046 5.3067 13.3981 4.76114 12.8525C4.21558 12.307 3.90909 11.567 3.90909 10.7955L3.90909 0.61368" stroke="#8A94A6" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path id="Vector_3" d="M17 10.7955L14.798 12.9975C14.4075 13.388 13.7743 13.388 13.3838 12.9975L11.1818 10.7955" stroke="#8A94A6" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path id="Vector_4" d="M9.72726 0.61368L11.1818 0.61368C11.9533 0.61368 12.6933 0.920173 13.2388 1.46573C13.7844 2.01129 14.0909 2.75123 14.0909 3.52277L14.0909 13.7046" stroke="#8A94A6" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        </svg>
                      </button>

                      <select name="company" id="Pran-Foods">
                        <option>Pran Foods</option>
                      </select>

                      <button class="add-btn btn js-btn-modal">Add Product <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M6 1V11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M1 6H11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                      </button>

                    </div>
                  </div>
                </div>

                <div class="dashboard-modal js-modal" data-id="modal">
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="dashboard-modal-row">
                          <div>
                            <label>Product Photo</label>
                            <div class="group-input-file">
                              <input name="photo" type="file" id="fileUpload" />
                              <label for="fileUpload">Choose File</label>
                              <label for="fileUpload">Browse File</label>
                            </div>
                          </div>
                          <div class="close-btn js-close-btn">
                            <svg
                              width="75"
                              height="75"
                              viewBox="0 0 75 75"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <g filter="url(#filter0_d_1_962)">
                                <circle cx="37.5" cy="27.5" r="17.5" fill="white" />
                                <circle
                                  cx="37.5"
                                  cy="27.5"
                                  r="17"
                                  stroke="black"
                                  stroke-opacity="0.12"
                                />
                              </g>
                              <path
                                d="M40.8609 22.7402C41.1813 22.4199 41.7005 22.4199 42.0209 22.7402C42.3416 23.0602 42.3416 23.5794 42.0209 23.9002L38.5407 27.3803L42.0209 30.8605C42.3412 31.1804 42.3412 31.7005 42.0209 32.0205C41.7005 32.3408 41.1813 32.3408 40.8609 32.0205L37.3808 28.5403L33.9006 32.0205C33.5798 32.3408 33.0606 32.3408 32.7402 32.0205C32.4199 31.7005 32.4199 31.1804 32.7402 30.8605L36.2204 27.3803L32.7402 23.9002C32.4199 23.5798 32.4199 23.0606 32.7402 22.7402C33.061 22.4199 33.5802 22.4199 33.9006 22.7402L37.3808 26.2204L40.8609 22.7402Z"
                                fill="#FF565E"
                              />
                              <defs>
                                <filter
                                  id="filter0_d_1_962"
                                  x="0"
                                  y="0"
                                  width="75"
                                  height="75"
                                  filterUnits="userSpaceOnUse"
                                  color-interpolation-filters="sRGB"
                                >
                                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                  <feColorMatrix
                                    in="SourceAlpha"
                                    type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                    result="hardAlpha"
                                  />
                                  <feOffset dy="10" />
                                  <feGaussianBlur stdDeviation="10" />
                                  <feComposite in2="hardAlpha" operator="out" />
                                  <feColorMatrix
                                    type="matrix"
                                    values="0 0 0 0 0.01875 0 0 0 0 0.181172 0 0 0 0 0.5 0 0 0 0.03 0"
                                  />
                                  <feBlend
                                    mode="normal"
                                    in2="BackgroundImageFix"
                                    result="effect1_dropShadow_1_962"
                                  />
                                  <feBlend
                                    mode="normal"
                                    in="SourceGraphic"
                                    in2="effect1_dropShadow_1_962"
                                    result="shape"
                                  />
                                </filter>
                              </defs>
                            </svg>
                          </div>
                        </div>
                        <div class="dashboard-modal-row">
                          <div>
                            <label for="">Product Name <sapn class="red-mark">*</sapn></label>
                            <input name="name" type="text" placeholder="Product Name" />
                          </div>
                          <div>
                            <label for="company">Category <sapn class="red-mark">*</sapn></label>
                            <select name="category_id" id="compnay" required>
                                <option selected disabled value="null">Select Your Category</option>
                                @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="dashboard-modal-row">
                          <div>
                            <label for="">Piece(per box) <sapn class="red-mark">*</sapn></label>
                            <input name="piece_per_box" type="text" placeholder="60" />
                          </div>
                          <div>
                            <label for="company">Box type <sapn class="red-mark">*</sapn></label>
                            <select name="box_type" id="compnay">
                              <option value="পলি">পলি</option>
                            </select>
                          </div>
                        </div>
                        <div class="dashboard-modal-row">
                          <div>
                            <label for="set">Buying Rate <sapn class="red-mark">*</sapn></label>
                            <input name="buying_rate" type="number" placeholder="180" />
                          </div>
                          <div>
                            <label for="confirm">Profit Margin% <sapn class="red-mark">*</sapn></label>
                            <input name="profit_margin" type="number" placeholder="6" />
                          </div>
                        </div>
                        <div class="dashboard-modal-row">
                          <div>
                            <label for="set">Select Company <sapn class="red-mark">*</sapn></label>
                            <select name="company_id" id="">
                                <option selected disabled value="null">Select Your Company</option>
                                @foreach ($company as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                          </div>
                          <div>
                            <label for="confirm">Stock <sapn class="red-mark">*</sapn></label>
                            <input name="stock" type="number" placeholder="6" />
                          </div>
                        </div>
                        <div class="dashboard-modal-save">
                          <button class="js-close-btn">Cancel</button>
                          <button type="submit" class="js-success-btn">Save</button>
                        </div>
                    </form>
                </div>



                <div class="overlay" id="overlay"></div>


                <div class="dashboard__so-container">
                    @foreach ($data as $item)

                    <div class="dashboard__products-item">
                        <img
                          class="dashboard__products-item-img"
                          src="{{ asset('storage/'.$item->photo) }}"
                        />
                        <h2 class="dashboard__products-item-title">{{ $item->name }}</h2>
                        <p class="dashboard__products-item-description">
                          {{ $item->company->name }}
                        </p>
                        <a
                          class="products-price js-btn-profile-modal"
                          data-id="{{ $item->id }}"
                        >
                          <span>{{ $item->profit_margin }}%</span> Tk {{ $item->buying_rate }}
                        </a>
                    </div>

                    <div class="dashboard-modal modal-{{ $item->id }} js-modal" data-id="modal">
                        <form action="{{ route('product.update',[$item->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="dashboard-modal-row">
                              <div>
                                <label>Product Photo</label>
                                <div class="group-input-file">
                                  <input name="photo" type="file" id="fileUpload" />
                                  <label for="fileUpload">Choose File</label>
                                  <label for="fileUpload">Browse File</label>
                                </div>
                              </div>
                              <div class="close-btn js-close-btn">
                                <svg
                                  width="75"
                                  height="75"
                                  viewBox="0 0 75 75"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <g filter="url(#filter0_d_1_962)">
                                    <circle cx="37.5" cy="27.5" r="17.5" fill="white" />
                                    <circle
                                      cx="37.5"
                                      cy="27.5"
                                      r="17"
                                      stroke="black"
                                      stroke-opacity="0.12"
                                    />
                                  </g>
                                  <path
                                    d="M40.8609 22.7402C41.1813 22.4199 41.7005 22.4199 42.0209 22.7402C42.3416 23.0602 42.3416 23.5794 42.0209 23.9002L38.5407 27.3803L42.0209 30.8605C42.3412 31.1804 42.3412 31.7005 42.0209 32.0205C41.7005 32.3408 41.1813 32.3408 40.8609 32.0205L37.3808 28.5403L33.9006 32.0205C33.5798 32.3408 33.0606 32.3408 32.7402 32.0205C32.4199 31.7005 32.4199 31.1804 32.7402 30.8605L36.2204 27.3803L32.7402 23.9002C32.4199 23.5798 32.4199 23.0606 32.7402 22.7402C33.061 22.4199 33.5802 22.4199 33.9006 22.7402L37.3808 26.2204L40.8609 22.7402Z"
                                    fill="#FF565E"
                                  />
                                  <defs>
                                    <filter
                                      id="filter0_d_1_962"
                                      x="0"
                                      y="0"
                                      width="75"
                                      height="75"
                                      filterUnits="userSpaceOnUse"
                                      color-interpolation-filters="sRGB"
                                    >
                                      <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                      <feColorMatrix
                                        in="SourceAlpha"
                                        type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                        result="hardAlpha"
                                      />
                                      <feOffset dy="10" />
                                      <feGaussianBlur stdDeviation="10" />
                                      <feComposite in2="hardAlpha" operator="out" />
                                      <feColorMatrix
                                        type="matrix"
                                        values="0 0 0 0 0.01875 0 0 0 0 0.181172 0 0 0 0 0.5 0 0 0 0.03 0"
                                      />
                                      <feBlend
                                        mode="normal"
                                        in2="BackgroundImageFix"
                                        result="effect1_dropShadow_1_962"
                                      />
                                      <feBlend
                                        mode="normal"
                                        in="SourceGraphic"
                                        in2="effect1_dropShadow_1_962"
                                        result="shape"
                                      />
                                    </filter>
                                  </defs>
                                </svg>
                              </div>
                            </div>
                            <div class="dashboard-modal-row">
                              <div>
                                <label for="">Product Name <sapn class="red-mark">*</sapn></label>
                                <input name="name" value="{{ $item->name }}" type="text" placeholder="Product Name" />
                              </div>
                              <div>
                                <label for="company">Category <sapn class="red-mark">*</sapn></label>
                                <select name="category_id" id="compnay" required>
                                    <option selected disabled value="null">Select Your Category</option>
                                    @foreach ($category as $cat)
                                    <option {{ $cat->id == $item->category_id ? 'selected':''}} value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="dashboard-modal-row">
                              <div>
                                <label for="">Piece(per box) <sapn class="red-mark">*</sapn></label>
                                <input value="{{ $item->piece_per_box }}" name="piece_per_box" type="text" placeholder="60" />
                              </div>
                              <div>
                                <label for="company">Box type <sapn class="red-mark">*</sapn></label>
                                <select name="box_type" id="compnay">
                                  <option {{ 'পলি' == $item->box_type ? 'selected':''}} value="পলি">পলি</option>
                                </select>
                              </div>
                            </div>
                            <div class="dashboard-modal-row">
                              <div>
                                <label for="set">Buying Rate <sapn class="red-mark">*</sapn></label>
                                <input value="{{ $item->buying_rate }}" name="buying_rate" type="number" placeholder="180" />
                              </div>
                              <div>
                                <label for="confirm">Profit Margin% <sapn class="red-mark">*</sapn></label>
                                <input value="{{ $item->profit_margin }}" name="profit_margin" type="number" placeholder="6" />
                              </div>
                            </div>
                            <div class="dashboard-modal-row">
                              <div>
                                <label for="set">Select Company <sapn class="red-mark">*</sapn></label>
                                <select name="company_id" id="">
                                    <option selected disabled value="null">Select Your Company</option>
                                    @foreach ($company as $com)
                                    <option {{ $com->id == $item->company_id ? 'selected':''}} value="{{ $com->id }}">{{ $com->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div>
                                <label for="confirm">Stock <sapn class="red-mark">*</sapn></label>
                                <input value="{{ $item->stock }}" name="stock" type="number" placeholder="6" />
                              </div>
                            </div>
                            <div class="dashboard-modal-save">
                              <button class="js-close-btn">Cancel</button>
                              <button type="submit" class="js-success-btn">Save</button>
                            </div>
                        </form>
                    </div>

                    @endforeach
                </div>
              </div>
            </div>
          </div>




          <div class="dashboard_tab-contents">
            <div id="cetagory_tabs" class="dashboard_tab-content">
              <div class="dashboard__main-so-container">
                <div class="dashboard__so">
                  <h3 class="dashboard__so-title">All Category</h3>
                  <div class="dashboard__so-btn-container">
                    <div class="dashboard__so-btn-group catagory-add">
                      <input type="text" placeholder="Category Name"/>

                      <button id="add_category" class="">Add<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M6 1V11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M1 6H11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                      </button>

                    </div>
                  </div>
                </div>


                <div class="dashboard__so-container">
                    @foreach ($category as $key => $item)
                    <div class="dashboard__s-item">
                    <p class="dashboard__s-item-title">{{ $key + 1 }} - {{ $item->name }}</p>
                    <a href="{{ route('product.category.delete',[$item->id]) }}">
                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Group 33787">
                        <path id="Vector" d="M0.889648 3.88892H2.33409H13.8896" stroke="#A8B3C2" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path id="Vector_2" d="M12.4451 3.88889V14C12.4451 14.3831 12.2929 14.7505 12.022 15.0214C11.7511 15.2923 11.3837 15.4444 11.0007 15.4444H3.77843C3.39534 15.4444 3.02794 15.2923 2.75705 15.0214C2.48617 14.7505 2.33398 14.3831 2.33398 14V3.88889M4.50065 3.88889V2.44444C4.50065 2.06135 4.65283 1.69395 4.92372 1.42307C5.19461 1.15218 5.562 1 5.9451 1H8.83398C9.21707 1 9.58447 1.15218 9.85536 1.42307C10.1262 1.69395 10.2784 2.06135 10.2784 2.44444V3.88889" stroke="#A8B3C2" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path id="Vector_3" d="M5.94531 7.5V11.8333" stroke="#A8B3C2" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path id="Vector_4" d="M8.83398 7.5V11.8333" stroke="#A8B3C2" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        </svg>
                    </a>
                    </div>
                    @endforeach

                  <div id="add_category_modal" class="dashboard-modal js-modal" data-id="modal">
                    <div class="dashboard-modal-row">
                        <form action="{{ route('product.category') }}" method="post">
                        @csrf
                        <div>
                            <label for="">Category Name <sapn class="red-mark">*</sapn></label>
                            <input name="name" type="text" placeholder="Category Name" />
                        </div>
                    </div>
                    <div class="dashboard-modal-save">
                        <button class="js-close-btn">Cancel</button>
                        <button type="submit" class="js-success-btn">Save</button>
                    </div>
                </form>
                </div>

                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('admin/product/js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        $('#add_category').on('click', function(){
            $('#add_category_modal').modal('show');
        })
    </script>
    <script>
        $('.js-btn-profile-modal').on('click', function(){
            id = $(this).data('id');



            $('.modal-'+id).modal('show');
        })
    </script>
  </body>
</html>
