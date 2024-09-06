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
      <div class="card">
        <div class="card-body">
          <div class="attendence_report">
            <div class="table_top_action">
              <div class="row">
                <div class="col-md-6 align-self-end">
                  <div class="d-flex">
                    <div class="input_groups year_">
                      <!-- <label>Select Year</label> -->
                      <select class="js-select2">
                        <option value="">2024</option>
                        <option value="">2023</option>
                        <option value="">2022</option>
                        <option value="">2021</option>
                        <option value="">2020</option>
                        <option value="">2019</option>
                        <option value="">2018</option>
                        <option value="">2017</option>
                        <option value="">2016</option>
                        <option value="">2015</option>
                        <option value="">2014</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 align-self-end">
                  <div class="text-end">
                    <button class="print_btn">Print <i class="fa-solid fa-print"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="employee_information_table">
              <div class="row">
                <div class="col-lg-6 align-self-end">
                  <div class="personal_info_report">
                    <div class="profile d-flex align-items-center">
                      <div class="text">
                        <h4 class="title">John Doe</h4>
                        <span>Web Designer</span>
                        <h6>Employee ID : FT-0001</h6>
                        <span>Date of Join : 1st Jan 2013</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 align-self-center">
                  <div class="company_info_report text-end">
                    <h3 class="title">Yearly Attendence Report</h3>
                    <h1 class="name">Nogor Solutions Limited</h1>
                    <p>House No. 69, Road No. 08, Block-D, Niketon, Gulshan-1, Dhaka-1212. </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="year">
                <h5>2024</h5>
              </div>
              <div class="table-responsive text-nowrap flex-grow-1">
                <table class="table table-bordered mb-0">
                  <thead class="table_head">
                    <tr>
                      <th>
                        <h5 class="fw-bold">Month</h5>
                      </th>
                      <th>Total Working Days</th>
                      <th>Total Present</th>
                      <th>Total Late</th>
                      <th>Total Absent</th>
                      <th>Total Leave</th>
                      <th class="off_day">Weekend</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th class="table_sidebar">January</th>
                      <td>20 Days</td>
                      <td>18 Days</td>
                      <td class="late">15 Days</td>
                      <td class="absent">2 Days</td>
                      <td>0 Day</td>
                      <td>10 Days</td>
                    </tr>
                    <tr>
                      <th class="table_sidebar">February</th>
                      <td>20 Days</td>
                      <td>18 Days</td>
                      <td class="late">15 Days</td>
                      <td class="absent">2 Days</td>
                      <td>0 Day</td>
                      <td>10 Days</td>
                    </tr>
                    <tr>
                      <th class="table_sidebar">March</th>
                      <td>20 Days</td>
                      <td>18 Days</td>
                      <td class="late">15 Days</td>
                      <td class="absent">2 Days</td>
                      <td>0 Day</td>
                      <td>10 Days</td>
                    </tr>
                    <tr>
                      <th class="table_sidebar">April</th>
                      <td>20 Days</td>
                      <td>18 Days</td>
                      <td class="late">15 Days</td>
                      <td class="absent">2 Days</td>
                      <td>0 Day</td>
                      <td>10 Days</td>
                    </tr>
                    <tr>
                      <th class="table_sidebar">May</th>
                      <td>20 Days</td>
                      <td>18 Days</td>
                      <td class="late">15 Days</td>
                      <td class="absent">2 Days</td>
                      <td>0 Day</td>
                      <td>10 Days</td>
                    </tr>
                    <tr>
                      <th class="table_sidebar">June</th>
                      <td>20 Days</td>
                      <td>18 Days</td>
                      <td class="late">15 Days</td>
                      <td class="absent">2 Days</td>
                      <td>0 Day</td>
                      <td>10 Days</td>
                    </tr>
                    <tr>
                      <th class="table_sidebar">July</th>
                      <td>20 Days</td>
                      <td>18 Days</td>
                      <td class="late">15 Days</td>
                      <td class="absent">2 Days</td>
                      <td>0 Day</td>
                      <td>10 Days</td>
                    </tr>
                    <tr>
                      <th class="table_sidebar">August</th>
                      <td>20 Days</td>
                      <td>18 Days</td>
                      <td class="late">15 Days</td>
                      <td class="absent">2 Days</td>
                      <td>0 Day</td>
                      <td>10 Days</td>
                    </tr>
                    <tr>
                      <th class="table_sidebar">September</th>
                      <td>20 Days</td>
                      <td>18 Days</td>
                      <td class="late">15 Days</td>
                      <td class="absent">2 Days</td>
                      <td>0 Day</td>
                      <td>10 Days</td>
                    </tr>
                    <tr>
                      <th class="table_sidebar">October</th>
                      <td>20 Days</td>
                      <td>18 Days</td>
                      <td class="late">15 Days</td>
                      <td class="absent">2 Days</td>
                      <td>0 Day</td>
                      <td>10 Days</td>
                    </tr>
                    <tr>
                      <th class="table_sidebar">November</th>
                      <td>20 Days</td>
                      <td>18 Days</td>
                      <td class="late">15 Days</td>
                      <td class="absent">2 Days</td>
                      <td>0 Day</td>
                      <td>10 Days</td>
                    </tr>
                    <tr>
                      <th class="table_sidebar">December</th>
                      <td>20 Days</td>
                      <td>18 Days</td>
                      <td class="late">15 Days</td>
                      <td class="absent">2 Days</td>
                      <td>0 Day</td>
                      <td>10 Days</td>
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
  <!-- content part start -->

</main>

<?php
include("layout/footer.php");
?>