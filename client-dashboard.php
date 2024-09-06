<?php
include("layout/header.php");
?>


<main>
  <?php
  include("layout/cliend-dashboard-sidebar.php");
  ?>

  <!-- content part start -->
  <div class="content">

    <!-- breadcrumb part start -->
    <section class="bread_crumb">
      <div class="row">
        <div class="col-lg-3 col-md-5 align-items-center">
          <div class="left_info">
            <h3 class="title uppercase">Dashboard</h3>
          </div>
        </div>
        <!-- <div class="col-lg-6 align-self-start">
          <div class="notification text-center">
            <p>
              <span>***</span>
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
              <span>***</span>
            </p>
          </div>
        </div> -->
        <div class="col-lg-9 col-md-7 align-items-center">
          <div class="right_info text-md-end mt-2 mt-md-0">
            <ul class="list-unstyled">
              <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
              <li>Dashboard</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb part end -->

    <div class="content_box">

      <div class="row">
        <div class="col-lg-7 col-xl-8">
          <div class="short_summery_widget">
            <div class="row g-4">
              <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                <div class="summery_item d-flex justify-content-between">
                  <div class="icon"><i class="fa-solid fa-book"></i></div>
                  <div class="info text-end">
                    <h4 class="title">Total Projects</h4>
                    <h2 class="number odometer" data-count="5"></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                <div class="summery_item d-flex justify-content-between">
                  <div class="icon"><i class="fa-solid fa-list-check"></i></div>
                  <div class="info text-end">
                    <h4 class="title">Running Project</h4>
                    <h2 class="number odometer" data-count="4"></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                <div class="summery_item d-flex justify-content-between">
                  <div class="icon"><i class="fa-brands fa-dropbox"></i></div>
                  <div class="info text-end">
                    <h4 class="title">Completed</h4>
                    <h2 class="number odometer" data-count="3"></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                <div class="summery_item d-flex justify-content-between">
                  <div class="icon"><i class="fa-solid fa-money-bill-1-wave"></i></div>
                  <div class="info text-end">
                    <h4 class="title">Total Payment</h4>
                    <h2 class="number odometer" data-count="400000"></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                <div class="summery_item d-flex justify-content-between">
                  <div class="icon"><i class="fa-solid fa-filter-circle-dollar"></i></div>
                  <div class="info text-end">
                    <h4 class="title">Payment Done</h4>
                    <h2 class="number odometer" data-count="140000"></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                <div class="summery_item d-flex justify-content-between">
                  <div class="icon"><i class="fa-solid fa-tent-arrow-left-right"></i></div>
                  <div class="info text-end">
                    <h4 class="title">Payment Due</h4>
                    <h2 class="number"><span class="odometer" data-count="360000"></span></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="content_widget_box mt-4">
            <div class="widget_title with_bg">
              <h4 class="title">Recent Ticket History</h4>
            </div>
            <div class="widget_main">
              <div class="table-responsive text-nowrap">
                <table class="table table_normal table-bordered table-striped">
                  <thead class="table-head">
                    <tr>
                      <th>#</th>
                      <th>Ticket ID</th>
                      <th>Ticket Subject</th>
                      <th>Status</th>
                      <th>Crated Date</th>
                      <th>Attachment</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        #TKT-0001
                      </td>
                      <td>
                        Software Issue
                      </td>
                      <td>
                        <button class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm">
                          <i class="fa-regular fa-circle-dot text-success"></i>
                          Open
                        </button>
                      </td>
                      <td>
                        05 June, 2023
                      </td>
                      <td><a href="" class="table_attachment">
                          <img src="images/file.svg" alt="">
                        </a></td>
                    </tr>
                    <tr>
                      <td>
                        2
                      </td>
                      <td>
                        #TKT-0002
                      </td>
                      <td>
                        Software Issue
                      </td>
                      <td>
                        <button class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm">
                          <i class="fa-regular fa-circle-dot text-purple"></i>
                          New
                        </button>
                      </td>
                      <td>
                        05 June, 2023
                      </td>
                      <td><a href="" class="table_attachment">
                          <img src="images/file.svg" alt="">
                        </a></td>
                    </tr>
                    <tr>
                      <td>
                        2
                      </td>
                      <td>
                        #TKT-0002
                      </td>
                      <td style="width: 210px;">
                        Software Issue
                      </td>
                      <td>
                        <button class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm">
                          <i class="fa-regular fa-circle-dot text-danger"></i>
                          Closed
                        </button>
                      </td>
                      <td>
                        05 June, 2023
                      </td>
                      <td><a href="" class="table_attachment">
                          <img src="images/file.svg" alt="">
                        </a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="content_widget_box mt-4 mt-lg-0">
            <div class="widget_title with_bg">
              <h4 class="title">Project Name</h4>
            </div>
            <div class="widget_main">
              <div class="project_progress">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th class="p-0 fs-6">Project Name</th>
                      <th class="p-0 fs-6 text-end">Complete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="p-0" colspan="2">
                        <div class="progress-wrap">
                          <div class="progress-item">
                            <h6 class="progress-title">FBCCI <span class="ms-3 status active">Active</span></h6>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar wow slideInLeft" style="width: 90%">
                              </div>
                              <span>90%</span>
                            </div>
                          </div>
                          <div class="progress-item">
                            <h6 class="progress-title">Masud Group <span class="ms-3 status deactive">Deactive</span></h6>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar wow slideInLeft" data-wow-delay=".1s" style="width: 70%">
                              </div>
                              <span>70%</span>
                            </div>
                          </div>
                          <div class="progress-item">
                            <h6 class="progress-title">BMCCI <span class="ms-3 status on_hold">on hold</span></h6>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar wow slideInLeft" data-wow-delay=".2s" style="width: 85%">
                              </div>
                              <span>85%</span>
                            </div>
                          </div>
                          <div class="progress-item">
                            <h6 class="progress-title">University of Dhaka <span class="ms-3 status not_started">Not Started</span></h6>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar wow slideInLeft" data-wow-delay=".3s" style="width: 80%">
                              </div>
                              <span>80%</span>
                            </div>
                          </div>
                          <div class="progress-item">
                            <h6 class="progress-title">Golden Star</h6>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar wow slideInLeft" data-wow-delay=".4s" style="width: 70%">
                              </div>
                              <span>70%</span>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="content_widget_box mt-4">
            <div class="widget_title with_bg">
              <h4 class="title">Project Links</h4>
            </div>
            <div class="widget_main">
              <ul class="list-unstyled d-flex flex-wrap gap-3">
                <li>
                  <a href="client-project-details.php" class="btns"> FBCCI
                  </a>
                </li>
                <li>
                  <a href="client-project-details.php" class="btns"> Feni University
                  </a>
                </li>
                <li>
                  <a href="client-project-details.php" class="btns"> BMCCI
                  </a>
                </li>
                <li>
                  <a href="client-project-details.php" class="btns"> Golden Star
                  </a>
                </li>
                <li>
                  <a href="client-project-details.php" class="btns"> Dreamerzlab
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- content part start -->

</main>

<?php
include("layout/footer.php");
?>

<!-- project mile stone js -->

<script>
  var chartDom = document.getElementById('project_milestone');
  var myChart = echarts.init(chartDom);
  var option;

  option = {
    legend: {},
    tooltip: {},
    dataset: {
      dimensions: ['product', '2015', '2016', '2017'],
      source: [{
          product: 'Project One',
          2015: 43.3,
          2016: 85.8,
          2017: 93.7
        },
        {
          product: 'Project Two',
          2015: 83.1,
          2016: 73.4,
          2017: 55.1
        },
        {
          product: 'Project Three',
          2015: 86.4,
          2016: 65.2,
          2017: 82.5
        },
      ]
    },
    xAxis: {
      type: 'category'
    },
    yAxis: {},

    series: [{
      type: 'bar'
    }, {
      type: 'bar'
    }, {
      type: 'bar'
    }]
  };

  option && myChart.setOption(option);



  // project status chart js
  var chartDom = document.getElementById('project_status');
  var myChart = echarts.init(chartDom);
  var option;

  option = {
    title: {
      left: 'center'
    },
    tooltip: {
      trigger: 'item'
    },
    legend: {
      orient: 'vertical',
      left: 'left'
    },
    series: [{
      type: 'pie',
      radius: '50%',
      data: [{
          value: 30,
          name: 'PMS'
        },
        {
          value: 80,
          name: 'FBCCI'
        },
        {
          value: 90,
          name: 'Masud Group'
        },
        {
          value: 60,
          name: 'Energy Society'
        },
      ],
      emphasis: {
        itemStyle: {
          shadowBlur: 10,
          shadowOffsetX: 0,
          shadowColor: 'rgba(0, 0, 0, 0.5)'
        }
      }
    }]
  };

  myChart.setOption(option);
</script>