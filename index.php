<?php
include("layout/header.php");

?>

<main>
  <?php
  include("layout/sidebar.php");
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
          <div class="time_widget">
            <div class="row">
              <div class="col-md-6 col-lg-12 col-xl-6 align-self-center">
                <div class="office_time">
                  <h4 class="title">Office Time: 09:00 AM - 7:00 PM</h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-12 col-xl-6 align-self-center">
                <div class="in_time d-flex align-items-center justify-content-start justify-content-md-end justify-content-lg-start justify-content-xl-end">
                  <h4 class="title">Today Ofiice In Time:</h4>
                  <button class="intime_btn"><i class="fa-regular fa-clock"></i> 09:30</button>
                </div>
              </div>
            </div>
          </div>
          <div class="short_summery_widget">
            <div class="row g-4">
              <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                <div class="summery_item d-flex justify-content-between">
                  <div class="icon"><i class="fa-solid fa-book"></i></div>
                  <div class="info text-end">
                    <h4 class="title">Total Projects</h4>
                    <h2 class="number odometer" data-count="50"></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                <div class="summery_item d-flex justify-content-between">
                  <div class="icon"><i class="fa-solid fa-list-check"></i></div>
                  <div class="info text-end">
                    <h4 class="title">Todays Task</h4>
                    <h2 class="number odometer" data-count="155"></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                <div class="summery_item d-flex justify-content-between">
                  <div class="icon"><i class="fa-brands fa-dropbox"></i></div>
                  <div class="info text-end">
                    <h4 class="title">Completed Task</h4>
                    <h2 class="number odometer" data-count="80"></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                <div class="summery_item d-flex justify-content-between">
                  <div class="icon"><i class="fa-solid fa-money-bill-1-wave"></i></div>
                  <div class="info text-end">
                    <h4 class="title">Loan Due</h4>
                    <h2 class="number odometer" data-count="4000"></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                <div class="summery_item d-flex justify-content-between">
                  <div class="icon"><i class="fa-solid fa-filter-circle-dollar"></i></div>
                  <div class="info text-end">
                    <h4 class="title">Provident fund</h4>
                    <h2 class="number odometer" data-count="14000"></h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                <div class="summery_item d-flex justify-content-between">
                  <div class="icon"><i class="fa-solid fa-tent-arrow-left-right"></i></div>
                  <div class="info text-end">
                    <h4 class="title">Leave</h4>
                    <h2 class="number"><span class="odometer" data-count="12"></span>/<span class="odometer" data-count="22"></span></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="content_widget_box mt-4">
            <div class="widget_title with_bg ">
              <h4 class="title d-flex justify-content-between">
                Todays Assaigned tasks
                <span class="task_counter_number">12/20</span>
              </h4>
            </div>
            <div class="widget_main">
              <div class="table-responsive task_table text-nowrap">
                <table class="table table_normal table-bordered table-striped">
                  <thead class="table-head">
                    <tr>
                      <th>Task Name</th>
                      <th>Project Name</th>
                      <th>Status</th>
                      <th>Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        Design of a Portfolio
                      </td>
                      <td>
                        IDEB
                      </td>
                      <td>
                        <button class="status_btn complete">Complete</button>
                      </td>
                      <td>
                        1.5 Hours
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Task A
                      </td>
                      <td>
                        FBCCI
                      </td>
                      <td>
                        <button class="status_btn not-started">Not Started</button>
                      </td>
                      <td>
                        1.5 Hours
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Portfolio Management Office
                      </td>
                      <td>
                        MG Group
                      </td>
                      <td>
                        <button class="status_btn on-hold">On Hold</button>
                      </td>
                      <td>
                        1.5 Hours
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Task D
                      </td>
                      <td>
                        BASIS
                      </td>
                      <td>
                        <button class="status_btn working">Working</button>
                      </td>
                      <td>
                        1.5 Hours
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="content_widget_box mt-4">
            <div class="widget_title with_bg">
              <h4 class="title">Weekly Working Progress</h4>
            </div>
            <div class="widget_main">
              <div id="working_progress" style="width: 100%; height: 400px;"></div>
            </div>
          </div>
          <div class="content_widget_box mt-4">
            <div class="widget_title with_bg">
              <h4 class="title">Attendance History</h4>
            </div>
            <div class="widget_main">
              <div class="attendence_history table-responsive">
                <table class="table table_normal table-bordered table-striped">
                  <thead class="table-head">
                    <tr>
                      <th>Sunday</th>
                      <th>Monday</th>
                      <th>Tuesday</th>
                      <th>Wednesday</th>
                      <th>Thursday</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <h5 class="title">In Time: <span class="in">09:00 AM</span></h5>
                      </td>
                      <td>
                        <h5 class="title">In Time: <span class="in late_time">09:25 AM</span></h5>
                      </td>
                      <td>
                        <h5 class="title">In Time: <span class="in">09:00 AM</span></h5>
                      </td>
                      <td>
                        <h5 class="title">In Time: <span class="in">09:00 AM</span></h5>
                      </td>
                      <td>
                        <h5 class="title">In Time: <span class="in">09:00 AM</span></h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5 class="title">Out Time: <span class="out">09:00 AM</span></h5>
                      </td>
                      <td>
                        <h5 class="title">Out Time: <span class="out late_time">09:25 AM</span></h5>
                      </td>
                      <td>
                        <h5 class="title">Out Time: <span class="out">09:00 AM</span></h5>
                      </td>
                      <td>
                        <h5 class="title">Out Time: <span class="out">09:00 AM</span></h5>
                      </td>
                      <td>
                        <h5 class="title">Out Time: <span class="out">09:00 AM</span></h5>
                      </td>
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
              <h4 class="title">Running Project Review</h4>
            </div>
            <div class="widget_main">
              <div id="running_project" style="width: 100%; height: 400px;"></div>
            </div>

          </div>
          <div class="content_widget_box mt-4">
            <div class="widget_title with_bg">
              <h4 class="title">Leave taken vs remaining</h4>
            </div>
            <div class="widget_main">
              <div id="leave_info" style="width: 100%; height: 400px;"></div>
            </div>
          </div>
          <div class="content_widget_box mt-4">
            <div class="widget_title with_bg">
              <h4 class="title">Todays Task Progress</h4>
            </div>
            <div class="widget_main">
              <div id="task_progress" style="width: 100%; height: 400px;"></div>
            </div>
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

<script>
  // leave chart js
  var chartDom = document.getElementById('leave_info');
  var myChart = echarts.init(chartDom);
  var option;

  option = {
    tooltip: {
      trigger: 'item'
    },
    legend: {
      top: '0%',
      left: 'center'
    },
    series: [{
      name: 'Leave Status',
      type: 'pie',
      radius: ['40%', '70%'],
      avoidLabelOverlap: false,
      itemStyle: {
        borderRadius: 10,
        borderColor: '#fff',
        borderWidth: 2
      },
      label: {
        show: false,
        position: 'center'
      },
      emphasis: {
        label: {
          show: true,
          fontSize: 14,
          fontWeight: 'bold'
        }
      },
      labelLine: {
        show: false
      },
      data: [{
          value: 22,
          name: 'Total Leave'
        },
        {
          value: 10,
          name: 'Medical Leave'
        },
        {
          value: 12,
          name: 'Earn Leave'
        },
        {
          value: 5,
          name: 'Medical Leave Remain'
        },
        {
          value: 5,
          name: 'Earn Leave Remain'
        }
      ]
    }]
  };

  option && myChart.setOption(option);


  // working progress chart js
  var chartDom = document.getElementById('working_progress');
  var myChart = echarts.init(chartDom);
  var option;

  option = {
    tooltip: {
      trigger: 'axis',
      axisPointer: {
        type: 'shadow'
      }
    },
    grid: {
      left: '3%',
      right: '4%',
      bottom: '3%',
      containLabel: true
    },
    xAxis: [{
      type: 'category',
      data: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu'],
      axisTick: {
        alignWithLabel: true
      }
    }],
    yAxis: [{
      type: 'value'
    }],
    series: [{
      type: 'bar',
      barWidth: '40%',
      data: [80, 180, 200, 320, 390],
      showBackground: true,
    }]
  };

  option && myChart.setOption(option);


  // Running project chart js
  var chartDom = document.getElementById('running_project');
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

  option && myChart.setOption(option);


  // Running project chart js

  var chartDom = document.getElementById('task_progress');
  var myChart = echarts.init(chartDom);
  var option;

  option = {
    tooltip: {
      trigger: 'item'
    },
    legend: {
      top: '5%',
      left: 'center',
      selectedMode: false
    },
    series: [{
      type: 'pie',
      radius: ['40%', '70%'],
      center: ['50%', '70%'],
      startAngle: 180,
      label: {
        show: true,
        formatter(param) {
          return param.name + ' (' + param.percent * 2 + '%)';
        }
      },
      data: [{
          value: 1048,
          name: 'Complete'
        },
        {
          value: 735,
          name: 'Incomplete'
        },
        {
          value: 580,
          name: 'On Hold'
        },
        {
          value: 484,
          name: 'Delivery'
        },
        {
          value: 1048 + 735 + 580 + 484,
          itemStyle: {
            color: 'none',
            decal: {
              symbol: 'none'
            }
          },
          label: {
            show: false
          }
        }
      ]
    }]
  };


  option && myChart.setOption(option);
</script>