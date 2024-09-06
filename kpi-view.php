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
          <div class="row">
            <div class="col-lg-12">
              <div class="printable_option">
                <div class="text-end">
                  <button class="print_btn btn_label">Print <i class="fa-solid fa-print"></i></button>
                  <button class="pdf_btn btn_label">Pdf <i class="fa-regular fa-file-pdf"></i></button>
                  <button class="excel_btn btn_label">Excel <i class="fa-solid fa-file-excel"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="kpi_title">
                <h5>
                  Month: January
                </h5>
                <span>Evolution Date: 02 June, 2022</span>
              </div>
            </div>
          </div>
          <div class="table-responsive text-nowrap">
            <table class="table data_table table-hover table-bordered mb-0 table-striped">
              <thead class="table_head">
                <tr>
                  <th style="width: 40px;">#</th>
                  <th>Image <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Employee Name <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Employee ID <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Total Attendance <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Total Leave <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Total Late <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Total Task completed
                    <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span>
                  </th>
                  <th>Behavior
                    <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span>
                  </th>
                  <th>Learning capacity
                    <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span>
                  </th>
                  <th>Others
                    <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span>
                  </th>
                  <th>Total KPI
                    <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span>
                  </th>
                  <th>Position
                    <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><img class="employee_avatar rounded-pill" width="35" height="35" src="images/avatar-02.jpg" alt=""></td>
                  <td>Arif</td>
                  <td> 04</td>
                  <td>20 </td>
                  <td>02</td>
                  <td>
                    05
                  </td>
                  <td>1052</td>
                  <td>10/10</td>
                  <td>00</td>
                  <td>---</td>
                  <td>09/10</td>
                  <td>First</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td><img class="employee_avatar rounded-pill" width="35" height="35" src="images/avatar-02.jpg" alt=""></td>
                  <td>Arif</td>
                  <td> 04</td>
                  <td>20 </td>
                  <td>02</td>
                  <td>
                    05
                  </td>
                  <td>1052</td>
                  <td>10/10</td>
                  <td>00</td>
                  <td>---</td>
                  <td>09/10</td>
                  <td>First</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td><img class="employee_avatar rounded-pill" width="35" height="35" src="images/avatar-02.jpg" alt=""></td>
                  <td>Arif</td>
                  <td> 04</td>
                  <td>20 </td>
                  <td>02</td>
                  <td>
                    05
                  </td>
                  <td>1052</td>
                  <td>10/10</td>
                  <td>00</td>
                  <td>---</td>
                  <td>09/10</td>
                  <td>First</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td><img class="employee_avatar rounded-pill" width="35" height="35" src="images/avatar-02.jpg" alt=""></td>
                  <td>Arif</td>
                  <td> 04</td>
                  <td>20 </td>
                  <td>02</td>
                  <td>
                    05
                  </td>
                  <td>1052</td>
                  <td>10/10</td>
                  <td>00</td>
                  <td>---</td>
                  <td>09/10</td>
                  <td>First</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td><img class="employee_avatar rounded-pill" width="35" height="35" src="images/avatar-02.jpg" alt=""></td>
                  <td>Arif</td>
                  <td> 04</td>
                  <td>20 </td>
                  <td>02</td>
                  <td>
                    05
                  </td>
                  <td>1052</td>
                  <td>10/10</td>
                  <td>00</td>
                  <td>---</td>
                  <td>09/10</td>
                  <td>First</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td><img class="employee_avatar rounded-pill" width="35" height="35" src="images/avatar-02.jpg" alt=""></td>
                  <td>Arif</td>
                  <td> 04</td>
                  <td>20 </td>
                  <td>02</td>
                  <td>
                    05
                  </td>
                  <td>1052</td>
                  <td>10/10</td>
                  <td>00</td>
                  <td>---</td>
                  <td>09/10</td>
                  <td>First</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td><img class="employee_avatar rounded-pill" width="35" height="35" src="images/avatar-02.jpg" alt=""></td>
                  <td>Arif</td>
                  <td> 04</td>
                  <td>20 </td>
                  <td>02</td>
                  <td>
                    05
                  </td>
                  <td>1052</td>
                  <td>10/10</td>
                  <td>00</td>
                  <td>---</td>
                  <td>09/10</td>
                  <td>First</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td><img class="employee_avatar rounded-pill" width="35" height="35" src="images/avatar-02.jpg" alt=""></td>
                  <td>Arif</td>
                  <td> 04</td>
                  <td>20 </td>
                  <td>02</td>
                  <td>
                    05
                  </td>
                  <td>1052</td>
                  <td>10/10</td>
                  <td>00</td>
                  <td>---</td>
                  <td>09/10</td>
                  <td>First</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="remarks_options mt-4">
            <div class="row">
              <div class="col-lg-10">
                <div class="input_groups">
                  <label>Remarks <sup class="text-danger">*</sup></label>
                  <textarea placeholder="Remarks"></textarea>
                </div>
              </div>
              <div class="col-lg-2 align-self-center">
                <label class="d-block opacity-0">Remarks</label>
                <button type="button" class="common_btn">Approved</button>
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