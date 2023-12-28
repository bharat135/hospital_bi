
@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
@endsection
@section('page-style')
  {{-- Page css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/dashboard-ecommerce.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
@endsection

@section('content')
<!-- Dashboard Ecommerce Starts -->

<section id="dashboard-ecommerce">
  {{--  First row of dashboard --}}
  @role('admin')
  <div class="row match-height">
    <div class="col-lg-4 col-12">
      <div class="row match-height">
        {{-- <!-- Bar Chart - Orders -->
        <div class="col-lg-6 col-md-3 col-6">
          <div class="card">
            <div class="card-body pb-50">
              <h6>Orders</h6>
              <h2 class="fw-bolder mb-1">2,76k</h2>
              <div id="statistics-order-chart"></div>
            </div>
          </div>
        </div>
        <!--/ Bar Chart - Orders -->

        <!-- Line Chart - Profit -->
        <div class="col-lg-6 col-md-3 col-6">
          <div class="card card-tiny-line-stats">
            <div class="card-body pb-50">
              <h6>Profit</h6>
              <h2 class="fw-bolder mb-1">6,24k</h2>
              <div id="statistics-profit-chart"></div>
            </div>
          </div>
        </div>
        <!--/ Line Chart - Profit --> --}}

        <!-- Earnings Card -->
        <div class="col-lg-12 col-md-6 col-12">
          <div class="card earnings-card">
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <h4 class="card-title mb-1">Total Leads</h4>
                  <div class="font-small-2">Today</div>
                  <h5 class="mb-1">1312</h5>
                  <p class="card-text text-muted font-small-2">
                    <span class="fw-bolder">10.3%</span><span> more earnings than yesterday.</span>
                  </p>
                </div>
                <div class="col-6">
                  <div id="earnings-chart"></div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <!--/ Earnings Card -->
      </div>
    </div>
  <!-- Statistics Card -->
      <div class="col-xl-8 col-md-6 col-12">
        <div class="card card-statistics">
          <div class="card-header d-flex justify-content-between align-items-start pb-0">
            <div>
              <h4 class="card-title">Statistics</h4>
              <p class="card-text font-small-2 me-25 mb-0">Today</p>
            </div>
            <div class="d-flex align-items-center">
              <i class="font-medium-2" data-feather="calendar"></i>
              <input
                type="text"
                class="form-control flat-picker bg-transparent border-0 shadow-none"
                placeholder="DD-MM-YYYY"
              />
            </div>
          </div>
          <div class="card-body statistics-body">
            <div class="row">
              <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                <div class="d-flex flex-row">
                  <div class="avatar bg-light-primary me-2">
                    <div class="avatar-content">
                      <i data-feather="trending-up" class="avatar-icon"></i>
                    </div>
                  </div>
                  <div class="my-auto">
                    <h4 class="fw-bolder mb-0">1.3k</h4>
                    <p class="card-text font-small-3 mb-0">Leads</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                <div class="d-flex flex-row">
                  <div class="avatar bg-light-danger me-2">
                    <div class="avatar-content">
                      <i data-feather="phone" class="avatar-icon"></i>
                    </div>
                  </div>
                  <div class="my-auto">
                    <h4 class="fw-bolder mb-0">8.5k</h4>
                    <p class="card-text font-small-3 mb-0">Scheduled calls</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                <div class="d-flex flex-row">
                  <div class="avatar bg-light-info me-2">
                    <div class="avatar-content">
                      <i data-feather="user" class="avatar-icon"></i>
                    </div>
                  </div>
                  <div class="my-auto">
                    <h4 class="fw-bolder mb-0">82</h4>
                    <p class="card-text font-small-3 mb-0">Visits</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="d-flex flex-row">
                  <div class="avatar bg-light-success me-2">
                    <div class="avatar-content">
                      <i data-feather="box" class="avatar-icon"></i>
                    </div>
                  </div>
                  <div class="my-auto">
                    <h4 class="fw-bolder mb-0">35</h4>
                    <p class="card-text font-small-3 mb-0">Pkg Booking</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <!--/ Statistics Card -->
    </div>
    @endrole


  {{-- / First row of dashboard --}}


  <div class="row match-height">
    <!-- Medal Card -->
    {{-- <div class="col-xl-4 col-md-6 col-12">
      <div class="card card-congratulation-medal">
        <div class="card-body">
          <h5>Congratulations 🎉 John!</h5>
          <p class="card-text font-small-3">You have won gold medal</p>
          <h3 class="mb-75 mt-2 pt-50">
            <a href="#">$48.9k</a>
          </h3>
          <button type="button" class="btn btn-primary">View Sales</button>
          <img src="{{asset('images/illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" />
        </div>
      </div>
    </div> --}}
    <!--/ Medal Card -->

     <!-- Notice Board -->
    <div class="col-lg-4 col-12">
      <div class="card card-user-timeline">
        <div class="card-header">
          <div class="d-flex align-items-center">
            <i data-feather="list" class="user-timeline-title-icon"></i>
            <h4 class="card-title">Notice Board</h4>
          </div>
        </div>
        <div class="card-body " style="height: 350px; overflow-y: auto;">
          <ul class="timeline ms-50">
            <li class="timeline-item">
              <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
              <div class="timeline-event">
                <h6 style="color:red">Attention!</h6>
                <p>The Pune OPD is scheduled for Sunday, 24 Dec 2023, from 10 AM to 4 PM.<span style="font-size: 79%"> (1 Day Ago)</span></p>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
              <div class="timeline-event">
                <h6 style="color:rgb(255, 175, 3)">Warning!</h6>
                <p>Complete your target ontime! <span style="font-size: 79%"> (23 Dec at 16:00)</span></p>
              </div>
            </li>         
            <li class="timeline-item">
              <span class="timeline-point timeline-point-success timeline-point-indicator"></span>
              <div class="timeline-event">
                <h6 style="color:rgb(15, 150, 3)">Updated !</h6>
                <p class="mb-0">New telecalling report has been updated checkout. <span style="font-size: 79%"> (09 Oct at 12:16)</span></p>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-success timeline-point-indicator"></span>
              <div class="timeline-event">
                <h6 style="color:rgb(15, 150, 3)">Updated !</h6>
                <p class="mb-0">New telecalling report has been updated checkout. <span style="font-size: 79%"> (09 Oct at 12:16)</span></p>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-success timeline-point-indicator"></span>
              <div class="timeline-event">
                <h6 style="color:rgb(15, 150, 3)">Updated !</h6>
                <p class="mb-0">New telecalling report has been updated checkout. <span style="font-size: 79%"> (09 Oct at 12:16)</span></p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--/ Notice Board -->

      <!-- Sales Stats Chart Card starts -->
      <div class="col-lg-4 col-md-6 col-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-start pb-1">
            <div>
              <h4 class="card-title mb-25">Visits</h4>
              <p class="card-text">2023</p>
            </div>
            <div class="dropdown chart-dropdown">
              <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">2022</a>
                <a class="dropdown-item" href="#">2021</a>
                <a class="dropdown-item" href="#">2020</a>
              </div>
            </div>
          </div>
          <div class="card-body">
			  {{-- <div class="d-inline-block me-1">
              <div class="d-flex align-items-center">
                <i data-feather="circle" class="font-small-3 text-primary me-50"></i>
                <h6 class="mb-0">Patients</h6>
              </div>
            </div>
            <div class="d-inline-block">
              <div class="d-flex align-items-center">
                <i data-feather="circle" class="font-small-3 text-info me-50"></i>
                <h6 class="mb-0">Package Booked</h6>
              </div>
            </div>
            <div id="sales-visit-chart" class="mt-50"></div> --}}
            {{-- <canvas id="myChart" style="width:100%;height:100%"></canvas> --}}
            <canvas id="Chartt" style="width:100%;height:100%"></canvas>
          </div>
        </div>
      </div>
      <!-- Sales Stats Chart Card ends -->
   <!-- Goal Overview Card -->
   <div class="col-lg-4 col-md-6 col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <div>
          <h4 class="card-title">Goal Overview</h4>
          <p class="card-text">Today</p>
        </div>  
        <div class="d-flex align-items-center">
          <i class="font-medium-2" data-feather="calendar"></i>
          <input
            type="text"
            class="form-control flat-picker bg-transparent border-0 shadow-none"
            placeholder="DD-MM-YYYY" value=""
    data-flatpickr='{"dateFormat": "d-m-Y", "defaultDate": "today", "inline": true}'
          />
        </div>      
      </div>
      <div class="card-body p-0">
        <div id="goal-overview-radial-bar-chart" class="my-2"></div>
        <div class="row border-top text-center mx-0">
          <div class="col-6 border-end py-1">
            <p class="card-text text-muted mb-0">Target</p>
            <h3 class="fw-bolder mb-0">50</h3>
          </div>
          
          <div class="col-6 py-1">
            <p class="card-text text-muted mb-0">Achieve</p>
            <h3 class="fw-bolder mb-0">37</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Goal Overview Card -->
     
 {{-- <!-- Revenue Report Card -->
 <div class="col-lg-8 col-12">
  <div class="card card-revenue-budget">
    <div class="row mx-0">
      <div class="col-md-8 col-12 revenue-report-wrapper">
        <div class="d-sm-flex justify-content-between align-items-center mb-3">
          <h4 class="card-title mb-50 mb-sm-0">Revenue Report</h4>
          <div class="d-flex align-items-center">
            <div class="d-flex align-items-center me-2">
              <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
              <span>Earning</span>
            </div>
            <div class="d-flex align-items-center ms-75">
              <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
              <span>Expense</span>
            </div>
          </div>
        </div>
        <div id="revenue-report-chart"></div>
      </div>
      <div class="col-md-4 col-12 budget-wrapper">
        <div class="btn-group">
          <button
            type="button"
            class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            2020
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">2020</a>
            <a class="dropdown-item" href="#">2019</a>
            <a class="dropdown-item" href="#">2018</a>
          </div>
        </div>
        <h2 class="mb-25">$25,852</h2>
        <div class="d-flex justify-content-center">
          <span class="fw-bolder me-25">Budget:</span>
          <span>56,800</span>
        </div>
        <div id="budget-chart"></div>
        <button type="button" class="btn btn-primary">Increase Budget</button>
      </div>
    </div>
  </div>
</div>
<!--/ Revenue Report Card --> --}}
  
  </div>

    <div class="row">
      <!-- Heatmap Chart Starts -->
      <div class="col-xl-6 col-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <div>
              <h4 class="card-title">Hourly talktime</h4>
              <p class="card-text">Today</p>
            </div>
            <div class="d-flex align-items-center">
              <i class="font-medium-2" data-feather="calendar"></i>
              <input
                type="text"
                class="form-control flat-picker bg-transparent border-0 shadow-none"
                placeholder="DD-MM-YYYY"
              />
            </div>
          
          </div>
          <div class="card-body">
            <div id="heatmap-chart"></div>
          </div>
        </div>
      </div>
      <!-- Heatmap Chart Ends -->
  
      <!-- RadialBar Chart Starts -->
      <div class="col-xl-6 col-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <div>
              <h4 class="card-title">Statistics</h4>
              <p class="card-text">Today</p>
            </div>
            <div class="d-flex align-items-center">
              <i class="font-medium-2" data-feather="calendar"></i>
              <input type="text" class="form-control flat-picker bg-transparent border-0 shadow-none" placeholder="DD-MM-YYYY" />
            </div>          
          </div>
          <div class="card-body">
            <canvas id="myChart" style="width:100%;height:370px"></canvas>
          </div>
        </div>
      </div>
      <!-- RadialBar Chart Ends -->
    </div>

<!-- Line Chart Starts-->
  @can('visit_graph')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h4 class="card-title">Visits</h4>
            <span class="card-subtitle text-muted">Centerwise visits</span>
            <p class="card-text">2023</p>
          </div>
          <div class="dropdown chart-dropdown">
            <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">2022</a>
              <a class="dropdown-item" href="#">2021</a>
              <a class="dropdown-item" href="#">2020</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <canvas class="line-chart-ex chartjs" data-height="450"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- Line Chart Ends-->
  @endcan
<!-- List DataTable -->
{{-- <div class="row">
  <div class="col-12">
    <div class="card invoice-list-wrapper">
      <div class="card-datatable table-responsive">
        <table class="invoice-list-table table">
          <thead>
            <tr>
              <th></th>
              <th>#</th>
              <th><i data-feather="trending-up"></i></th>
              <th>Client</th>
              <th>Total</th>
              <th class="text-truncate">Issued Date</th>
              <th>Balance</th>
              <th>Invoice Status</th>
              <th class="cell-fit">Actions</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div> --}}
<!--/ List DataTable -->
{{-- <div class="row match-height">
    <!-- Company Table Card -->
    <div class="col-lg-8 col-12">
      <div class="card card-company-table">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Company</th>
                  <th>Category</th>
                  <th>Views</th>
                  <th>Revenue</th>
                  <th>Sales</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{asset('images/icons/toolbox.svg')}}" alt="Toolbar svg" />
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Dixons</div>
                        <div class="font-small-2 text-muted">meguc@ruj.io</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Technology</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">23.4k</span>
                      <span class="font-small-2 text-muted">in 24 hours</span>
                    </div>
                  </td>
                  <td>$891.2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">68%</span>
                      <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{asset('images/icons/parachute.svg')}}" alt="Parachute svg" />
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Motels</div>
                        <div class="font-small-2 text-muted">vecav@hodzi.co.uk</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-success me-1">
                        <div class="avatar-content">
                          <i data-feather="coffee" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Grocery</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">78k</span>
                      <span class="font-small-2 text-muted">in 2 days</span>
                    </div>
                  </td>
                  <td>$668.51</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">97%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{asset('images/icons/brush.svg')}}" alt="Brush svg" />
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Zipcar</div>
                        <div class="font-small-2 text-muted">davcilse@is.gov</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-warning me-1">
                        <div class="avatar-content">
                          <i data-feather="watch" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Fashion</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">162</span>
                      <span class="font-small-2 text-muted">in 5 days</span>
                    </div>
                  </td>
                  <td>$522.29</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">62%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{asset('images/icons/star.svg')}}" alt="Star svg" />
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Owning</div>
                        <div class="font-small-2 text-muted">us@cuhil.gov</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Technology</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">214</span>
                      <span class="font-small-2 text-muted">in 24 hours</span>
                    </div>
                  </td>
                  <td>$291.01</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">88%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{asset('images/icons/book.svg')}}" alt="Book svg" />
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Cafés</div>
                        <div class="font-small-2 text-muted">pudais@jife.com</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-success me-1">
                        <div class="avatar-content">
                          <i data-feather="coffee" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Grocery</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">208</span>
                      <span class="font-small-2 text-muted">in 1 week</span>
                    </div>
                  </td>
                  <td>$783.93</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">16%</span>
                      <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{asset('images/icons/rocket.svg')}}" alt="Rocket svg" />
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Kmart</div>
                        <div class="font-small-2 text-muted">bipri@cawiw.com</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-warning me-1">
                        <div class="avatar-content">
                          <i data-feather="watch" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Fashion</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">990</span>
                      <span class="font-small-2 text-muted">in 1 month</span>
                    </div>
                  </td>
                  <td>$780.05</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">78%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{asset('images/icons/speaker.svg')}}" alt="Speaker svg" />
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Payers</div>
                        <div class="font-small-2 text-muted">luk@izug.io</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-warning me-1">
                        <div class="avatar-content">
                          <i data-feather="watch" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Fashion</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">12.9k</span>
                      <span class="font-small-2 text-muted">in 12 hours</span>
                    </div>
                  </td>
                  <td>$531.49</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">42%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--/ Company Table Card -->

    <!-- Developer Meetup Card -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card card-developer-meetup">
        <div class="meetup-img-wrapper rounded-top text-center">
          <img src="{{asset('images/illustration/email.svg')}}" alt="Meeting Pic" height="170" />
        </div>
        <div class="card-body">
          <div class="meetup-header d-flex align-items-center">
            <div class="meetup-day">
              <h6 class="mb-0">THU</h6>
              <h3 class="mb-0">24</h3>
            </div>
            <div class="my-auto">
              <h4 class="card-title mb-25">Developer Meetup</h4>
              <p class="card-text mb-0">Meet world popular developers</p>
            </div>
          </div>
          <div class="mt-0">
            <div class="avatar float-start bg-light-primary rounded me-1">
              <div class="avatar-content">
                <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
              </div>
            </div>
            <div class="more-info">
              <h6 class="mb-0">Sat, May 25, 2020</h6>
              <small>10:AM to 6:PM</small>
            </div>
          </div>
          <div class="mt-2">
            <div class="avatar float-start bg-light-primary rounded me-1">
              <div class="avatar-content">
                <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
              </div>
            </div>
            <div class="more-info">
              <h6 class="mb-0">Central Park</h6>
              <small>Manhattan, New york City</small>
            </div>
          </div>
          <div class="avatar-group">
            <div
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="bottom"
              title="Billy Hopkins"
              class="avatar pull-up"
            >
              <img src="{{asset('images/portrait/small/avatar-s-9.jpg')}}" alt="Avatar" width="33" height="33" />
            </div>
            <div
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="bottom"
              title="Amy Carson"
              class="avatar pull-up"
            >
              <img src="{{asset('images/portrait/small/avatar-s-6.jpg')}}" alt="Avatar" width="33" height="33" />
            </div>
            <div
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="bottom"
              title="Brandon Miles"
              class="avatar pull-up"
            >
              <img src="{{asset('images/portrait/small/avatar-s-8.jpg')}}" alt="Avatar" width="33" height="33" />
            </div>
            <div
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="bottom"
              title="Daisy Weber"
              class="avatar pull-up"
            >
              <img
                src="{{asset('images/portrait/small/avatar-s-20.jpg')}}"
                alt="Avatar"
                width="33"
                height="33"
              />
            </div>
            <div
              data-bs-toggle="tooltip"
              data-popup="tooltip-custom"
              data-bs-placement="bottom"
              title="Jenny Looper"
              class="avatar pull-up"
            >
              <img
                src="{{asset('images/portrait/small/avatar-s-20.jpg')}}"
                alt="Avatar"
                width="33"
                height="33"
              />
            </div>
            <h6 class="align-self-center cursor-pointer ms-50 mb-0">+42</h6>
          </div>
        </div>
      </div>
    </div>
    <!--/ Developer Meetup Card -->

    <!-- Browser States Card -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card card-browser-states">
        <div class="card-header">
          <div>
            <h4 class="card-title">Browser States</h4>
            <p class="card-text font-small-2">Counter August 2020</p>
          </div>
          <div class="dropdown chart-dropdown">
            <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href="#">Last 28 Days</a>
              <a class="dropdown-item" href="#">Last Month</a>
              <a class="dropdown-item" href="#">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="browser-states">
            <div class="d-flex">
              <img
                src="{{asset('images/icons/google-chrome.png')}}"
                class="rounded me-1"
                height="30"
                alt="Google Chrome"
              />
              <h6 class="align-self-center mb-0">Google Chrome</h6>
            </div>
            <div class="d-flex align-items-center">
              <div class="fw-bold text-body-heading me-1">54.4%</div>
              <div id="browser-state-chart-primary"></div>
            </div>
          </div>
          <div class="browser-states">
            <div class="d-flex">
              <img
                src="{{asset('images/icons/mozila-firefox.png')}}"
                class="rounded me-1"
                height="30"
                alt="Mozila Firefox"
              />
              <h6 class="align-self-center mb-0">Mozila Firefox</h6>
            </div>
            <div class="d-flex align-items-center">
              <div class="fw-bold text-body-heading me-1">6.1%</div>
              <div id="browser-state-chart-warning"></div>
            </div>
          </div>
          <div class="browser-states">
            <div class="d-flex">
              <img
                src="{{asset('images/icons/apple-safari.png')}}"
                class="rounded me-1"
                height="30"
                alt="Apple Safari"
              />
              <h6 class="align-self-center mb-0">Apple Safari</h6>
            </div>
            <div class="d-flex align-items-center">
              <div class="fw-bold text-body-heading me-1">14.6%</div>
              <div id="browser-state-chart-secondary"></div>
            </div>
          </div>
          <div class="browser-states">
            <div class="d-flex">
              <img
                src="{{asset('images/icons/internet-explorer.png')}}"
                class="rounded me-1"
                height="30"
                alt="Internet Explorer"
              />
              <h6 class="align-self-center mb-0">Internet Explorer</h6>
            </div>
            <div class="d-flex align-items-center">
              <div class="fw-bold text-body-heading me-1">4.2%</div>
              <div id="browser-state-chart-info"></div>
            </div>
          </div>
          <div class="browser-states">
            <div class="d-flex">
              <img src="{{asset('images/icons/opera.png')}}" class="rounded me-1" height="30" alt="Opera Mini" />
              <h6 class="align-self-center mb-0">Opera Mini</h6>
            </div>
            <div class="d-flex align-items-center">
              <div class="fw-bold text-body-heading me-1">8.4%</div>
              <div id="browser-state-chart-danger"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Browser States Card -->

 <!-- App Design Card -->
 <div class="col-lg-4 col-md-6 col-12">
  <div class="card card-app-design">
    <div class="card-body">
      <span class="badge badge-light-primary">03 Sep, 20</span>
      <h4 class="card-title mt-1 mb-75 pt-25">App design</h4>
      <p class="card-text font-small-2 mb-2">
        You can Find Only Post and Quotes Related to IOS like ipad app design, iphone app design
      </p>
      <div class="design-group mb-2 pt-50">
        <h6 class="section-label">Team</h6>
        <span class="badge badge-light-warning me-1">Figma</span>
        <span class="badge badge-light-primary">Wireframe</span>
      </div>
      <div class="design-group pt-25">
        <h6 class="section-label">Members</h6>
        <div class="avatar">
          <img src="{{asset('images/portrait/small/avatar-s-9.jpg')}}" width="34" height="34" alt="Avatar" />
        </div>
        <div class="avatar bg-light-danger">
          <div class="avatar-content">PI</div>
        </div>
        <div class="avatar">
          <img
            src="{{asset('images/portrait/small/avatar-s-14.jpg')}}"
            width="34"
            height="34"
            alt="Avatar"
          />
        </div>
        <div class="avatar">
          <img src="{{asset('images/portrait/small/avatar-s-7.jpg')}}" width="34" height="34" alt="Avatar" />
        </div>
        <div class="avatar bg-light-secondary">
          <div class="avatar-content">AL</div>
        </div>
      </div>
      <div class="design-planning-wrapper mb-2 py-75">
        <div class="design-planning">
          <p class="card-text mb-25">Due Date</p>
          <h6 class="mb-0">12 Apr, 21</h6>
        </div>
        <div class="design-planning">
          <p class="card-text mb-25">Budget</p>
          <h6 class="mb-0">$49251.91</h6>
        </div>
        <div class="design-planning">
          <p class="card-text mb-25">Cost</p>
          <h6 class="mb-0">$840.99</h6>
        </div>
      </div>
      <button type="button" class="btn btn-primary w-100">Join Team</button>
    </div>
  </div>
</div>
<!--/ App Design Card -->
<!-- Transaction Card -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card card-transaction">
        <div class="card-header">
          <h4 class="card-title">Transactions</h4>
          <div class="dropdown chart-dropdown">
            <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href="#">Last 28 Days</a>
              <a class="dropdown-item" href="#">Last Month</a>
              <a class="dropdown-item" href="#">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-primary rounded float-start">
                <div class="avatar-content">
                  <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Wallet</h6>
                <small>Starbucks</small>
              </div>
            </div>
            <div class="fw-bolder text-danger">- $74</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-success rounded float-start">
                <div class="avatar-content">
                  <i data-feather="check" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Bank Transfer</h6>
                <small>Add Money</small>
              </div>
            </div>
            <div class="fw-bolder text-success">+ $480</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-danger rounded float-start">
                <div class="avatar-content">
                  <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Paypal</h6>
                <small>Add Money</small>
              </div>
            </div>
            <div class="fw-bolder text-success">+ $590</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-warning rounded float-start">
                <div class="avatar-content">
                  <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Mastercard</h6>
                <small>Ordered Food</small>
              </div>
            </div>
            <div class="fw-bolder text-danger">- $23</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-info rounded float-start">
                <div class="avatar-content">
                  <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Transfer</h6>
                <small>Refund</small>
              </div>
            </div>
            <div class="fw-bolder text-success">+ $98</div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Transaction Card -->
  </div> --}}
</section>
<section id="toastr-types">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Types</h4>
    </div>
    <div class="card-body">
      <div class="demo-inline-spacing">
        <button type="button" class="btn btn-outline-success" id="type-success">Success</button>
        <button type="button" class="btn btn-outline-danger" id="type-error">Error</button>
        <button type="button" class="btn btn-outline-warning" id="type-warning">Warning</button>
        <button type="button" class="btn btn-outline-info" id="type-info">Info</button>
        <button type="button" class="btn btn-outline-success" id="progress-bar">Success Progress Bar</button>
      </div>
    </div>
  </div>
</section>
<!-- Dashboard Ecommerce ends -->
@endsection

@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/charts/chart.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/moment.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>

@endsection
@section('page-script')
<script>
  var xValues = ["Leads", "Popup", "Incoming calls", "Interested", "Appointments", "Cancelled Appointments", "Visited", "Booked"];
  var yValues = [1130, 800, 330, 620, 300, 70, 210, 112];
  var barColors = ["#4e2e99", "#7fdb58", "#f27638", "#fc3838", "#4287f5", "#cc0231", "#f23876", "#f5d714"];

  // Initialize the chart
  var myChart = new Chart("myChart", {
      type: "bar",
      data: {
          labels: xValues,
          datasets: [{
              backgroundColor: barColors,
              data: yValues
          }]
      },
      options: {
          legend: { display: false },
          title: {
              display: true,
              text: ""
          },
          onClick: function (event, elements) {
            
              if (elements.length > 0) {
                
                  var index = elements[0]._index;

                  var urls = [
                      "/leads",
                      "/popup",
                      "/incoming-calls",
                      "/interested",
                      "/appointments",
                      "/cancelled-appointments",
                      "/visits",
                      "/booked"
                  ];
                  window.open(urls[index], '_blank');
              }
          }
      }
  });
</script>
  <script>
    var x = ['Jan','Feb','Mar', 'Apr', 'May', 'Jun', 'Jul','Aug','Sep','Oct','Nov','Dec'];
    var y = [30,63,23,45,63,63,32,43,65,72,30,45];
    
    new Chart("Chartt", {
      type: "line",
      data: {
        labels: x,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(31, 144, 222,1.0)",
          borderColor: "rgba(31, 144, 222,0.5)",
          data: y
        }]
      },
      options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 0, max:100 }}],
        }
      }
    });
    </script>
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/pages/dashboard-ecommerce.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/dashboard-analytics.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/charts/chart-apex.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/charts/chart-chartjs.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/app-invoice-list.js')) }}"></script>
@endsection
