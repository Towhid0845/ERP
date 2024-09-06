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
              <li>Yearly Attendence</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb part end -->

    <div class="content_box">
      <div class="row">
        <div class="col-lg-9">
          <div class="card h-100">
            <div class="card-body">
              <div class="personal_leave_policy mb-3">
                <div class="text">
                  <h4 class="title">John Doe</h4>
                  <span>Web Designer</span>
                  <h6>Employee ID : FT-0001</h6>
                </div>
              </div>
              <div class="short_summery_widget">
                <div class="row g-4">
                  <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                    <div class="summery_item d-flex justify-content-between">
                      <div class="icon"><i class="fa-solid fa-book"></i></div>
                      <div class="info text-end">
                        <h4 class="title">Total Leave</h4>
                        <h2 class="number odometer" data-count="20"></h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                    <div class="summery_item d-flex justify-content-between">
                      <div class="icon"><i class="fa-solid fa-list-check"></i></div>
                      <div class="info text-end">
                        <h4 class="title">Medical Leave</h4>
                        <h2 class="number odometer" data-count="10"></h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                    <div class="summery_item d-flex justify-content-between">
                      <div class="icon"><i class="fa-brands fa-dropbox"></i></div>
                      <div class="info text-end">
                        <h4 class="title">Earn Leave</h4>
                        <h2 class="number odometer" data-count="12"></h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                    <div class="summery_item d-flex justify-content-between">
                      <div class="icon"><i class="fa-solid fa-money-bill-1-wave"></i></div>
                      <div class="info text-end">
                        <h4 class="title">Medical Leave Remain</h4>
                        <h2 class="number odometer" data-count="6"></h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                    <div class="summery_item d-flex justify-content-between">
                      <div class="icon"><i class="fa-solid fa-filter-circle-dollar"></i></div>
                      <div class="info text-end">
                        <h4 class="title">Earn Leave Remain</h4>
                        <h2 class="number odometer" data-count="6"></h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6 col-xxl-4 col-sm-6 summery_lable">
                    <div class="summery_item d-flex justify-content-between">
                      <div class="icon"><i class="fa-solid fa-tent-arrow-left-right"></i></div>
                      <div class="info text-end">
                        <h4 class="title">Total Leave Remain</h4>
                        <h2 class="number"><span class="odometer" data-count="12"></span>/<span class="odometer" data-count="22"></span></h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Company Leave Policy</h4>
              <div class="leave_company_policy">
                <ul class="list-unstyled">
                  <li>
                    <h5>Total Leave</h5>
                    <h6>22</h6>
                  </li>
                </ul>
                <ul class="list-unstyled">
                  <li>
                    <h5>Earn Leave</h5>
                    <h6>12 (Per month 1 leave)</h6>
                  </li>
                </ul>
                <ul class="list-unstyled">
                  <li>
                    <h5>Medical Leave</h5>
                    <h6>10</h6>
                  </li>
                </ul>
                <ul class="list-unstyled">
                  <li>
                    <h5>Casual Leave</h5>
                    <h6>0</h6>
                  </li>
                </ul>
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