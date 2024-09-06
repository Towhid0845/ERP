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
              <li>Task List</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb part end -->

    <div class="content_box">
      <div class="content_widget_box">
        <div class="widget_title">
          <h4 class="title">Task List</h4>
        </div>
        <div class="p-20 pt-0">
          <div class="table-responsive text-nowrap">
            <table class="table data_table table-hover table-bordered mb-0">
              <thead class="table_head">
                <tr>
                  <th style="width: 40px;">#</th>
                  <th>Project Name <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Task Name <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Team Member <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Label <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Start Date <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>End Date <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>IDEB</td>
                  <td>Member dashboard design issue solve</td>
                  <td> Sadia Sarmin</td>
                  <td><span class="status_complete status">Complete</span></td>
                  <td>02 Jun, 2023</td>
                  <td>02 Jun, 2024</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>IDEB</td>
                  <td>Member dashboard design issue solve</td>
                  <td> Sadia Sarmin</td>
                  <td><span class="status_not_complete status">Not Complete</span></td>
                  <td>02 Jun, 2023</td>
                  <td>02 Jun, 2024</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>IDEB</td>
                  <td>Member dashboard design issue solve</td>
                  <td> Sadia Sarmin</td>
                  <td><span class="status_on_hold status">On Hold</span></td>
                  <td>02 Jun, 2023</td>
                  <td>02 Jun, 2024</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>IDEB</td>
                  <td>Member dashboard design issue solve</td>
                  <td> Sadia Sarmin</td>
                  <td><span class="status_in_progress status">In Progress</span></td>
                  <td>02 Jun, 2023</td>
                  <td>02 Jun, 2024</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>IDEB</td>
                  <td>Member dashboard design issue solve</td>
                  <td> Sadia Sarmin</td>
                  <td><span class="status_not_started status">Not Started</span></td>
                  <td>02 Jun, 2023</td>
                  <td>02 Jun, 2024</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="pagination">
            <ul class="list-unstyled">
              <li class="arrow_prev">
                <a href=""><i class="fa-solid fa-angle-left"></i></a>
              </li>
              <li class="active"><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa-solid fa-ellipsis"></i></a></li>
              <li class="arrow_next">
                <a href=""><i class="fa-solid fa-angle-right"></i></a>
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