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
              <li>Gant Chart</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb part end -->

    <div class="content_box">
      <div class="card">
        <div class="card-body">
          <div class="gant_print_option">
            <div class="row">
              <div class="col-lg-3 align-self-end">
                <div class="input_groups">
                  <select class="js-select2">
                    <option value="">Project 1</option>
                    <option value="">Project 2</option>
                    <option value="">Project 3</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-9 align-self-end">
                <div class="text-end">
                  <button class="print_btn">Print <i class="fa-solid fa-print"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="gant_chart_info">
            <div class="row">
              <div class="col-lg-6 align-self-center">
                <div class="info">
                  <h4>Project Management System</h4>
                  <p><b>Start Date:</b> 05 June, 2023</p>
                  <p><b>End Date:</b> 05 June, 2024</p>
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="title text-end">
                  <h4>Project Gant Chart</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="gant_chart">
            <div class="gant_chart_details">
              <div class="gant_chart_header">
                <div class="row gx-1">
                  <div class="col-lg-2">
                    <div class="chart_dates_item">
                      <h4>Mar 3 - 7</h4>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="chart_dates_item">
                      <h4>Mar 9 - 10</h4>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="chart_dates_item">
                      <h4>Mar 11 - 14</h4>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="chart_dates_item">
                      <h4>Mar 15 - 18</h4>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="chart_dates_item">
                      <h4>Mar 20 - 24</h4>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="chart_dates_item">
                      <h4>Mar 25 - 30</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="gant_chart_body">
                <div class="gant_project_main">
                  <div class="gant_project_title">
                    <h3>Project 1</h3>
                  </div>
                  <div class="gant_project_details">
                    <div class="gant_project_item d-flex">
                      <div class="gant_task">
                        <h5>Task 1</h5>
                      </div>
                      <div class="gant_progress flex-grow-1">
                        <div class="row gx-1">
                          <div class="col-lg-12">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar" style="width:70%">70%</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gant_project_item d-flex">
                      <div class="gant_task">
                        <h5>Task 2</h5>
                      </div>
                      <div class="gant_progress flex-grow-1">
                        <div class="row gx-1">
                          <div class="col-lg-10 ms-auto">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar" style="width:80%">80%</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gant_project_item d-flex">
                      <div class="gant_task">
                        <h5>Task 3</h5>
                      </div>
                      <div class="gant_progress flex-grow-1">
                        <div class="row gx-1">
                          <div class="col-lg-12">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar" style="width:80%">80%</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="gant_project_main">
                  <div class="gant_project_title">
                    <h3>Project 1</h3>
                  </div>
                  <div class="gant_project_details">
                    <div class="gant_project_item d-flex">
                      <div class="gant_task">
                        <h5>Task 1</h5>
                      </div>
                      <div class="gant_progress flex-grow-1">
                        <div class="row gx-1">
                          <div class="col-lg-12">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar" style="width:70%">70%</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gant_project_item d-flex">
                      <div class="gant_task">
                        <h5>Task 2</h5>
                      </div>
                      <div class="gant_progress flex-grow-1">
                        <div class="row gx-1">
                          <div class="col-lg-10 ms-auto">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar" style="width:80%">80%</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gant_project_item d-flex">
                      <div class="gant_task">
                        <h5>Task 3</h5>
                      </div>
                      <div class="gant_progress flex-grow-1">
                        <div class="row gx-1">
                          <div class="col-lg-12">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar" style="width:80%">80%</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="gant_project_main">
                  <div class="gant_project_title">
                    <h3>Project 1</h3>
                  </div>
                  <div class="gant_project_details">
                    <div class="gant_project_item d-flex">
                      <div class="gant_task">
                        <h5>Task 1</h5>
                      </div>
                      <div class="gant_progress flex-grow-1">
                        <div class="row gx-1">
                          <div class="col-lg-12">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar" style="width:70%">70%</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gant_project_item d-flex">
                      <div class="gant_task">
                        <h5>Task 2</h5>
                      </div>
                      <div class="gant_progress flex-grow-1">
                        <div class="row gx-1">
                          <div class="col-lg-10 ms-auto">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar" style="width:80%">80%</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gant_project_item d-flex">
                      <div class="gant_task">
                        <h5>Task 3</h5>
                      </div>
                      <div class="gant_progress flex-grow-1">
                        <div class="row gx-1">
                          <div class="col-lg-12">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar" style="width:80%">80%</div>
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
      </div>
    </div>

  </div>
  <!-- content part start -->

</main>

<?php
include("layout/footer.php");
?>



<!-- <script>
  const progressBars = document.querySelectorAll('.progress-bar');

  progressBars.forEach((progressBar) => {
    const width = parseFloat(progressBar.style.width);

    if (width > 0 && width <= 40) {
      progressBar.style.backgroundColor = '#5D9AD0';
    } else if (width >= 41 && width <= 60) {
      progressBar.style.backgroundColor = '#4EBDDB';
    } else if (width >= 61 && width <= 80) {
      progressBar.style.backgroundColor = '#666BC9';
    } else if (width >= 81 && width <= 99) {
      progressBar.style.backgroundColor = '#FE9300';
    }
  });
</script> -->