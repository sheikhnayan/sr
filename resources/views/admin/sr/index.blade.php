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
      href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;600;700&family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('admin/so/css/style.css') }}" />
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
          <h2 class="dashboard__navbar-title">Sales Officer</h2>
          <input
            class="dashboard__navbar-search"
            type="text"
            placeholder="Search SO"
          />
        </header>
        <div class="dashboard__container">
          <div class="dashboard__card-container">
            <div class="dashboard__card">
              <img
                class="dashboard__card-img"
                src="{{ asset('admin/so/assets/total-so.svg') }}"
                alt=""
              />
              <div>
                <h3 class="dashboard__card-title">Total SO</h3>
                <p class="dashboard__card-amount">200</p>
              </div>
            </div>
            <div class="dashboard__card">
              <img
                class="dashboard__card-img"
                src="{{ asset('admin/so/assets/product2.svg') }}"
                alt=""
              />
              <div>
                <h3 class="dashboard__card-title">All Product</h3>
                <p class="dashboard__card-amount">800+</p>
              </div>
            </div>
            <div class="dashboard__card">
              <img
                class="dashboard__card-img"
                src="{{ asset('admin/so/assets/summary.svg') }}"
                alt=""
              />
              <div>
                <h3 class="dashboard__card-title">Av. Summary Value</h3>
                <p class="dashboard__card-amount">12,000+</p>
              </div>
            </div>
            <div class="dashboard__card">
              <button class="dashboard__add-sr btn js-btn-modal">
                Add New SR +
              </button>
            </div>
          </div>
          <div class="dashboard__main-product-container">
            <div class="dashboard__so">
              <h3 class="dashboard__so-title">All SO</h3>
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
                @foreach ($data as $item)
                <div class="dashboard__so-item">
                  <img
                    class="dashboard__so-item-img"
                    src="{{ asset('storage/'.$item->picture) }}"
                  />
                  <h2 class="dashboard__so-item-title">{{ $item->name }}</h2>
                  <p class="dashboard__so-item-description">
                    {{ $item->company->name }}
                  </p>
                  <a href="{{ route('sr.profile',[$item->id]) }}" style="background: #8a94a6"
                    class="dashboard__view-profile-btn"
                  >
                    View profile
                  </a>
                </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="dashboard__sr-modal js-modal" data-id="modal">
      <form action="{{ route('sr.store') }}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="dashboard__sr-modal-row">
          <div>
            <label>Profile Picture</label>
            <div class="group-input-file">
              <input type="file" id="fileUpload" name="picture">
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
        <div class="dashboard__sr-modal-row">
          <div>
            <label for="">Name <sapn class="red-mark">*</sapn></label>
            <input type="text" name="name" placeholder="Muhammad Rasel" />
          </div>
          <div>
            <label for="company">Company <sapn class="red-mark">*</sapn></label>
            <select name="company_id" id="compnay">
                @foreach ($company as $com)
                <option value="{{ $com->id }}">{{ $com->name }}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="dashboard__sr-modal-row">
          <div>
            <label for="email">Email <sapn class="red-mark">*</sapn></label>
            <input type="email" name="email" placeholder="admin@gmail.com" />
          </div>
          <div>
            <label for="phone">Phone <sapn class="red-mark">*</sapn></label>
            <input type="text" name="phone" placeholder="+8801580580580" />
          </div>
        </div>
        <div class="dashboard__sr-modal-row">
          <div>
            <label for="nid">NID NO: <sapn class="red-mark">*</sapn></label>
            <input type="text" name="nid" placeholder="535-535-535" />
          </div>
          <div>
            <label for="company"
            >Select Dealer <sapn class="red-mark">*</sapn></label
            >
            <select name="dealer_id" id="compnay">
                @foreach ($dealer as $del)
                <option value="{{ $del->id }}">{{ $del->name }}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="dashboard__sr-modal-row">
          <div>
            <label for="set">Password <sapn class="red-mark">*</sapn></label>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <div>
            <label for="confirm">Confirm Password <sapn class="red-mark">*</sapn></label>
            <input type="password" name="password_confirmation" placeholder="Password" />
          </div>
        </div>
        <div class="dashboard__sr-modal-save">
          <button class="js-close-btn">Cancel</button>
          <button type="submit" class="js-close-btn">Save and close</button>
        </div>
      </form>
    </div>
    <div class="overlay" id="overlay"></div>
    <div class="sr__profile js-profile-modal">
      <div class="sr__profile-container">
        <div class="sr__profile-img-container">
          <img class="sr__img" src="../assets/profile.png" alt="" />
          <h3 class="sr__name">Muhammad Rasel</h3>
        </div>
        <div class="close-btn js-profile-close-btn">
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
      <div class="sr__table-container">
        <table class="sr__table">
          <tr>
            <td>Company</td>
            <td>Pran</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>resel@gmail.com</td>
          </tr>
          <tr>
            <td>Phone</td>
            <td>+88012 65656 5555</td>
          </tr>
          <tr>
            <td>NID NO</td>
            <td>535-685-3335</td>
          </tr>
          <tr>
            <td>Dealer</td>
            <td>Dealer name</td>
          </tr>
        </table>
      </div>
      <div class="sr__edit">
        <button class="js-profile-close-btn">Delete SR</button>
        <button class="js-profile-close-btn">Edit Profile</button>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('admin/so/js/index.js') }}"></script>
  </body>
</html>
