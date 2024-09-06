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
              <h5 class="card-title">Comparison Gantt Chart</h5>
              <div class="comparison_graph">
                <div class="project_progress_date">
                  <h4>June 03, 2022 - April 05, 2023</h4>
                </div>
                <div class="row">
                  <div class="col-lg-6 pe-5">
                    <div class="project_progress">
                      <div class="progress-wrap">
                        <div class="progress-item">
                          <h6 class="progress-title">Should be complete</h6>
                          <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar wow slideInLeft" style="width: 80%; visibility: visible; animation-delay: 0.4s; animation-name: slideInLeft;">
                            </div>
                            <span>80%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 ps-5 align-self-end">
                    <div class="project_progress">
                      <div class="progress-wrap">
                        <div class="progress-item">
                          <h6 class="progress-title">Completed</h6>
                          <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar wow slideInLeft" style="width: 60%; visibility: visible; animation-delay: 0.4s; animation-name: slideInLeft;">
                            </div>
                            <span>60%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
                        <a href="#"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus magni enim officiis impedit dignissimos accusantium animi laboriosam dolorem quam vel?s.xls</a>
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
                        <a href="#"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos cupiditate illo explicabo, veniam quam tenetur, nisi obcaecati et facere incidunt hic, exercitationem dolor. Sit, culpa labore ipsa molestias itaque nisi!.xls</a>
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
          <div class="card mt-4">
            <div class="card-body">
              <h5 class="card-title">Client Information</h5>
              <div class="project_details_client_info">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="organization_info">
                      <div class="image">
                        <img src="images/logo.png" alt="profile">
                      </div>
                      <div class="text">
                        <h4 class="title">Nogor Solutions Limited</h4>
                        <h6>Gulshan-1, Niket, Dhaka-Bangladesh</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7 ms-auto contact_person_label">
                    <h4 class="contact_person_title">Contact Person</h4>
                    <div class="contact_person position-relative d-flex">
                      <div class="image">
                        <img src="images/profile.jpg" alt="profile">
                      </div>
                      <div class="contact_info overflow-hidden">
                        <div class="table-responsive text-nowrap">
                          <table class="table table-borderless mb-0">
                            <tbody>
                              <tr>
                                <th style="width: 120px;">Name:</th>
                                <td>Jhon Doe</td>
                              </tr>
                              <tr>
                                <th style="width: 120px;">Designation:</th>
                                <td>Web Developer</td>
                              </tr>
                              <tr>
                                <th>Phone:</th>
                                <td><a href="tel:9876543210">9876543210</a></td>
                              </tr>
                              <tr>
                                <th>Email:</th>
                                <td><a href="mailto:johndoe@example.com">johndoe@example.com</a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xxl-4 ">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title m-b-20">
                Project Graph
              </h6>
              <div id="project_graph" style="width: 100%; height: 400px;"></div>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-body">
              <h5 class="card-title">Project details</h5>
              <div class="project_details">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-border">
                    <tbody>
                      <tr>
                        <td>Working Hours:</td>
                        <td class="text-end">100 Hours</td>
                      </tr>
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
                        <td><a href="comments.php" class="text-danger">Comments</a>:</td>
                        <td class="text-end">12</td>
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
              <h6 class="card-title m-b-20">
                Project Milestone
              </h6>
              <div class="project_details_milestone">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed d-block" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Prototype Design <span class="float-end">80%</span>
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <div class="table-responsive text-nowrap">
                          <table class="table table-striped table-bordered mb-0">
                            <tbody>
                              <tr>
                                <td>Milestone Start:</td>
                                <td class="text-end">25 Feb, 2019</td>
                              </tr>
                              <tr>
                                <td>Milestone End:</td>
                                <td class="text-end">25 Feb, 2019</td>
                              </tr>
                              <tr>
                                <td>Total task:</td>
                                <td class="text-end">50</td>
                              </tr>
                              <tr>
                                <td>Completed task:</td>
                                <td class="text-end">30</td>
                              </tr>
                              <tr>
                                <td>Remaining Task:</td>
                                <td class="text-end">
                                  <span class="status active">20</span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="project_progress">
                          <div class="progress-wrap">
                            <div class="progress-item">
                              <h6 class="progress-title">Milestone Progress</h6>
                              <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 80%; visibility: visible; animation-delay: 0.4s; animation-name: slideInLeft;">
                                </div>
                                <span>80%</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed d-block" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Html Design <span class="float-end">80%</span>
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <div class="table-responsive text-nowrap">
                          <table class="table table-striped table-bordered mb-0">
                            <tbody>
                              <tr>
                                <td>Milestone Start:</td>
                                <td class="text-end">25 Feb, 2019</td>
                              </tr>
                              <tr>
                                <td>Milestone End:</td>
                                <td class="text-end">25 Feb, 2019</td>
                              </tr>
                              <tr>
                                <td>Total task:</td>
                                <td class="text-end">50</td>
                              </tr>
                              <tr>
                                <td>Completed task:</td>
                                <td class="text-end">30</td>
                              </tr>
                              <tr>
                                <td>Remaining Task:</td>
                                <td class="text-end">
                                  <span class="status active">20</span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="project_progress">
                          <div class="progress-wrap">
                            <div class="progress-item">
                              <h6 class="progress-title">Milestone Progress</h6>
                              <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 80%; visibility: visible; animation-delay: 0.4s; animation-name: slideInLeft;">
                                </div>
                                <span>80%</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed d-block" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Development <span class="float-end">80%</span>
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <div class="table-responsive text-nowrap">
                          <table class="table table-striped table-bordered mb-0">
                            <tbody>
                              <tr>
                                <td>Milestone Start:</td>
                                <td class="text-end">25 Feb, 2019</td>
                              </tr>
                              <tr>
                                <td>Milestone End:</td>
                                <td class="text-end">25 Feb, 2019</td>
                              </tr>
                              <tr>
                                <td>Total task:</td>
                                <td class="text-end">50</td>
                              </tr>
                              <tr>
                                <td>Completed task:</td>
                                <td class="text-end">30</td>
                              </tr>
                              <tr>
                                <td>Remaining Task:</td>
                                <td class="text-end">
                                  <span class="status active">20</span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="project_progress">
                          <div class="progress-wrap">
                            <div class="progress-item">
                              <h6 class="progress-title">Milestone Progress</h6>
                              <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 80%; visibility: visible; animation-delay: 0.4s; animation-name: slideInLeft;">
                                </div>
                                <span>80%</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-body">
              <h6 class="card-title m-b-20">
                Assigned users
              </h6>
              <ul class="assigned_user list-unstyled">
                <li class="d-flex align-items-center justify-content-between">
                  <a href="employee-profile.php">
                    <div class="d-flex">
                      <div class="avatar">
                        <img src="images/avatar-02.jpg" alt="User Image">
                      </div>
                      <div class="info">
                        <div class="name">John Doe</div>
                        <div class="designation">Web Designer</div>
                      </div>
                    </div>
                  </a>
                  <b>
                    <span class="d-block">Contribution</span>
                    20%
                  </b>
                  <b>
                    <p class="d-block">Working</p>
                    50 Hours
                  </b>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <a href="employee-profile.php">
                    <div class="d-flex">
                      <div class="avatar">
                        <img src="images/avatar-09.jpg" alt="User Image">
                      </div>
                      <div class="info">
                        <div class="name">John Doe</div>
                        <div class="designation">Web Designer</div>
                      </div>
                    </div>
                  </a>
                  <b>
                    <span class="d-block">Contribution</span>
                    20%
                  </b>
                  <b>
                    <p class="d-block">Working</p>
                    50 Hours
                  </b>
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