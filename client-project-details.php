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
              <li>Project Details</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb part end -->

    <div class="content_box">
      <div class="row">
        <div class="col-lg-7 col-xxl-8 ">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Project Management System</h5>
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin libero vitae est consectetur, a molestie tortor consectetur. Aenean tincidunt interdum ipsum, id pellentesque diam suscipit ut. Vivamus massa mi, fermentum eget neque eget, imperdiet tristique lectus. Proin at purus ut sem pellentesque tempor sit amet ut lectus. Sed orci augue, placerat et pretium ac, hendrerit in felis. Integer scelerisque libero non metus commodo, et hendrerit diam aliquet. Proin tincidunt porttitor ligula, a tincidunt orci pellentesque nec. Ut ultricies maximus nulla id consequat. Fusce eu consequat mi, eu euismod ligula. Aliquam porttitor neque id massa porttitor, a pretium velit vehicula. Morbi volutpat tincidunt urna, vel ullamcorper ligula fermentum at.
              </p>
            </div>
          </div>

          <div class="card mt-4">
            <div class="card-body">
              <h5 class="card-title">Uploaded images</h5>
              <div class="row g-4">
                <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                  <div class="uploaded_image_box">
                    <div class="uploaded_img">
                      <img src="images/placeholder.jpg" class="img-fluid w-100" alt="Placeholder">
                    </div>
                    <div class="uploaded_img_name">
                      demo.png
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                  <div class="uploaded_image_box">
                    <div class="uploaded_img">
                      <img src="images/placeholder.jpg" class="img-fluid w-100" alt="Placeholder">
                    </div>
                    <div class="uploaded_img_name">
                      demo.png
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                  <div class="uploaded_image_box">
                    <div class="uploaded_img">
                      <img src="images/placeholder.jpg" class="img-fluid w-100" alt="Placeholder">
                    </div>
                    <div class="uploaded_img_name">
                      demo.png
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                  <div class="uploaded_image_box">
                    <div class="uploaded_img">
                      <img src="images/placeholder.jpg" class="img-fluid w-100" alt="Placeholder">
                    </div>
                    <div class="uploaded_img_name">
                      demo.png
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-body">
              <h5 class="card-title">Ticket Information</h5>
              <div class="table-responsive text-nowrap">
                <table class="table data_table table-hover table-bordered mb-0 table-striped">
                  <thead class="table_head">
                    <tr>
                      <th style="width: 40px;">#</th>
                      <th>Ticket ID <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                      <th>Ticket Type <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                      <th>Created Date <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                      <th>Assaigned To <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                      <th>Status <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                      <th>Attachment <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>#TKT-0001 </td>
                      <td>Software Issue</td>
                      <td> 27 Feb 2019 </td>
                      <td>Arif</td>
                      <td>
                        <div class="action-label">
                          <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                            <i class="fa-regular fa-circle-dot text-success"></i> Open
                          </a>
                        </div>
                      </td>
                      <td><a href="" class="table_attachment">
                          <img src="images/file.svg" alt="">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td> #TKT-0001 </td>
                      <td>Software Issue </td>
                      <td> 27 Feb 2019 </td>
                      <td>Arif </td>
                      <td>
                        <div class="action-label">
                          <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                            <i class="fa-regular fa-circle-dot text-purple"></i> New
                          </a>
                        </div>
                      </td>
                      <td><a href="" class="table_attachment">
                          <img src="images/file.svg" alt="">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td> #TKT-0001 </td>
                      <td>Software Issue </td>
                      <td> 27 Feb 2019 </td>
                      <td>Arif</td>
                      <td>
                        <div class="action-label">
                          <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                            <i class="fa-regular fa-circle-dot text-danger"></i> Closed
                          </a>
                        </div>
                      </td>
                      <td><a href="" class="table_attachment">
                          <img src="images/file.svg" alt="">
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-5 col-xxl-4 ">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Project details</h5>
              <div class="project_details">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-border">
                    <tbody>
                      <tr>
                        <td>Start Date:</td>
                        <td class="text-end">25 Feb, 2019</td>
                      </tr>
                      <tr>
                        <td>End Date:</td>
                        <td class="text-end">25 Feb, 2019</td>
                      </tr>
                      <tr>
                        <td>Number of Task:</td>
                        <td class="text-end">65</td>
                      </tr>
    
                      <tr>
                        <td>Created by:</td>
                        <td class="text-end">Barry Cuda</td>
                      </tr>
                      <tr>
                        <td>Status:</td>
                        <td class="text-end">
                          <span class="status active">Working</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="project_progress">
                  <div class="progress-wrap">
                    <div class="progress-item">
                      <h6 class="progress-title">Project Progress</h6>
                      <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar wow slideInLeft" style="width: 80%; visibility: visible; animation-delay: 0.4s; animation-name: slideInLeft;">
                        </div>
                        <span>80%</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-body">
              <h5 class="card-title m-b-20">Uploaded Attachment</h5>
              <ul class="uploaded_attachment_list list-unstyled">
                <li>
                  <div class="d-flex">
                    <div class="file_type">
                      <span class="files-icon"><i class="fa-regular fa-file-pdf"></i></span>
                    </div>
                    <div class="files_info">
                      <div class="file_name text-ellipsis">
                        <a href="#"> AHA Selfcare Mobile Application Test-Cases.xls</a>
                      </div>
                      <small class="badge bg-danger rounded-pill me-3">SRS</small>
                      <span class="file_date d-inline-block">May 31st at 6:53 PM</span>
                      <span class="file_size d-inline-block">Size: 14.8Mb</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="d-flex">
                    <div class="file_type">
                      <span class="files-icon"><i class="fa-regular fa-file-pdf"></i></span>
                    </div>
                    <div class="files_info">
                      <div class="file_name text-ellipsis">
                        <a href="#"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus magni enim officiis impedit d</a>
                      </div>
                      <small class="badge bg-danger rounded-pill me-3">SRS</small>
                      <span class="file_date d-inline-block">May 31st at 6:53 PM</span>
                      <span class="file_size d-inline-block">Size: 14.8Mb</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="d-flex">
                    <div class="file_type">
                      <span class="files-icon"><i class="fa-regular fa-file-pdf"></i></span>
                    </div>
                    <div class="files_info">
                      <div class="file_name text-ellipsis">
                        <a href="#"> AHA Selfcare Mobile Application Test-Cases.xls</a>
                      </div>
                      <small class="badge bg-danger rounded-pill me-3">BRT</small>
                      <span class="file_date d-inline-block">May 31st at 6:53 PM</span>
                      <span class="file_size d-inline-block">Size: 14.8Mb</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="d-flex">
                    <div class="file_type">
                      <span class="files-icon"><i class="fa-regular fa-file-pdf"></i></span>
                    </div>
                    <div class="files_info">
                      <div class="file_name text-ellipsis">
                        <a href="#"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos cupiditate illo e</a>
                      </div>
                      <small class="badge bg-danger rounded-pill me-3">BRT</small>
                      <span class="file_date d-inline-block">May 31st at 6:53 PM</span>
                      <span class="file_size d-inline-block">Size: 14.8Mb</span>
                    </div>
                  </div>
                </li>
              </ul>
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
  var chartDom = document.getElementById('project_graph');
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
          value: 1048,
          name: 'Completed work'
        },
        {
          value: 735,
          name: 'pending'
        }
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
</script>