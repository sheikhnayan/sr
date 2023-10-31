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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <style>
        .sr__table tr td{
            width: 20%;
            border-right: unset;
            border-left: unset;
            color: #595F84;
            font-family: inter;
            font-weight: 400;
        }
        .sr__table tr th{
            text-align: left;
            padding: 16px 0px;
            color: #595F84;
            font-family: inter;
            font-weight: 600;
        }
        .sr__table tr th:first-child{
            text-align: center;
        }
        .sr__table tr td:first-child{
            width: 8%;
            text-align: center;
        }
        tbody{
            background: #fff;
        }
    </style>
  </head>
  <body>
    <div class="admin__panel-container">
      @include('admin.layouts.sidebar')

      <div class="dashboard">
        <header class="dashboard__navbar">
          <h2 class="dashboard__navbar-title">Area</h2>
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
                <h3 class="dashboard__card-title">Total Bazar</h3>
                <p class="dashboard__card-amount">{{ count($data) }}</p>
              </div>
            </div>
            <div class="dashboard__card">
              <img
                class="dashboard__card-img"
                src="{{ asset('admin/so/assets/product2.svg') }}"
                alt=""
              />
              <div>
                <h3 class="dashboard__card-title">Total Union</h3>
                <p class="dashboard__card-amount">{{ count($union) }}+</p>
              </div>
            </div>
            <div class="dashboard__card">
              <img
                class="dashboard__card-img"
                src="{{ asset('admin/so/assets/summary.svg') }}"
                alt=""
              />
              <div>
                <h3 class="dashboard__card-title">Total Upazila</h3>
                <p class="dashboard__card-amount">{{ count($upazila) }}+</p>
              </div>
            </div>
            <div class="dashboard__card">
              <button class="dashboard__add-sr btn js-btn-modal">
                Add New Bazar +
              </button>
            </div>
          </div>
          <div class="dashboard__main-product-container">
            <div class="dashboard__so">
              <h3 class="dashboard__so-title">All Bazar</h3>
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
            <table class="table sr__table">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Bazar Name</th>
                        <th>Upazila</th>
                        <th>Union</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->upazila->bn_name }}</td>
                            <td>{{ $item->union->bn_name }}</td>
                            <td>
                                <a style="padding-right: 1rem;" href="#" data-id="{{ $item->id }}" class="btn btn-primary"><img src="{{ asset('admin/so/edit.png') }}" alt=""></a>
                                <a href="#" class="btn btn-danger"><img src="{{ asset('admin/so/delete.png') }}" alt=""></a>
                            </td>
                        </tr>
                        <div class="dashboard__sr-modal edit-{{ $item->id }}" data-id="modal">
                            <form action="{{ route('area.update',[$item->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                              <div class="dashboard__sr-modal-row">
                                <div>
                                  <label for="upazila">Upazila <sapn class="red-mark">*</sapn></label>
                                  <select name="upazila_id" id="compnay">
                                      @foreach ($upazila as $com)
                                      <option {{ $com->id == $item->upazila_id ? 'selected':''}} value="{{ $com->id }}">{{ $com->name }}</option>
                                      @endforeach
                                  </select>
                                </div>
                              </div>
                              <div class="dashboard__sr-modal-row">
                                  <div>
                                    <label for="union">Union <sapn class="red-mark">*</sapn></label>
                                    <select name="union_id" id="compnay">
                                        @foreach ($union as $com)
                                        <option {{ $com->id == $item->union_id ? 'selected':''}} value="{{ $com->id }}">{{ $com->bn_name }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                </div>
                                <div class="dashboard__sr-modal-row">
                                  <div>
                                    <label for="company">Bazar <sapn class="red-mark">*</sapn></label>
                                    <input type="text" value="{{ $item->name }}" name="name" placeholder="Bazar Name">
                                  </div>
                                </div>
                              <div class="dashboard__sr-modal-save">
                                <button type="button" class="close">Cancel</button>
                                <button type="submit" class="js-close-btn">Save and close</button>
                              </div>
                            </form>
                          </div>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="dashboard__sr-modal js-modal" data-id="modal">
      <form action="{{ route('area.store') }}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="dashboard__sr-modal-row">
          <div>
            <label for="upazila">Upazila <sapn class="red-mark">*</sapn></label>
            <select name="upazila_id" id="compnay">
                @foreach ($upazila as $com)
                <option value="{{ $com->id }}">{{ $com->bn_name }}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="dashboard__sr-modal-row">
            <div>
              <label for="union">Union <sapn class="red-mark">*</sapn></label>
              <select name="union_id" id="compnay">
                  @foreach ($union as $com)
                  <option value="{{ $com->id }}">{{ $com->bn_name }}</option>
                  @endforeach
              </select>
            </div>
          </div>
          <div class="dashboard__sr-modal-row">
            <div>
              <label for="company">Bazar <sapn class="red-mark">*</sapn></label>
              <input type="text" name="name" placeholder="Bazar Name">
            </div>
          </div>
        <div class="dashboard__sr-modal-save">
          <button type="button" class="close-btn js-close-btn">Cancel</button>
          <button type="submit" class="js-close-btn">Save and close</button>
        </div>
      </form>
    </div>
    <div class="overlay" id="overlay"></div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('admin/so/js/index.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <script>
        $('.btn-primary').on('click', function(){
            id = $(this).data('id');
            $('.edit-'+id).modal('show');
        })
    </script>

    <script>
        $('.close').on('click', function(){
            check = $(this).parent().parent().modal('hide');
            console.log(check);
        })
    </script>
  </body>
</html>
