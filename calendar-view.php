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
          <!-- <div class="row">
            <div class="col-lg-12">
              <div class="printable_option">
                <div class="text-end">
                  <button class="print_btn btn_label">Print <i class="fa-solid fa-print"></i></button>
                  <button class="pdf_btn btn_label">Pdf <i class="fa-regular fa-file-pdf"></i></button>
                  <button class="excel_btn btn_label">Excel <i class="fa-solid fa-file-excel"></i></button>
                </div>
              </div>
            </div>
          </div> -->
          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="kpi_title">
                <h5>
                  Year: 2022
                </h5>
                <span>Weekend: 42</span>
              </div>
            </div>
          </div>
          <div class="table-responsive text-nowrap">
            <table class="table data_table table-hover table-bordered mb-0 table-striped">
              <thead class="table_head">
                <tr>
                  <th style="width: 40px;">#</th>
                  <th>Vacation Reason <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Start Date<span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>End Date <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Days <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Sum of Total Day <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>   
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Going to coxbazar</td>
                  <td>05 June, 2021</td>
                  <td>05 June, 2024 </td>
                  <td>3 years</td>
                  <td>3 years</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Going to coxbazar</td>
                  <td>05 June, 2021</td>
                  <td>05 June, 2024 </td>
                  <td>3 years</td>
                  <td>3 years</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Going to coxbazar</td>
                  <td>05 June, 2021</td>
                  <td>05 June, 2024 </td>
                  <td>3 years</td>
                  <td>3 years</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Going to coxbazar</td>
                  <td>05 June, 2021</td>
                  <td>05 June, 2024 </td>
                  <td>3 years</td>
                  <td>3 years</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Going to coxbazar</td>
                  <td>05 June, 2021</td>
                  <td>05 June, 2024 </td>
                  <td>3 years</td>
                  <td>3 years</td>
                </tr>
              </tbody>
            </table>
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