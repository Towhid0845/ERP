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
          <div class="d-flex justify-content-between align-items-center">
            <h4 class="card-title">Organizational Calendar List</h4>
            <a href="calendar-form.php" class="add_btn__"><i class="fa-solid fa-plus"></i></a>
          </div>
          <div class="table-responsive text-nowrap">
            <table class="table data_table table-hover table-bordered mb-0 table-striped">
              <thead class="table_head">
                <tr>
                  <th style="width: 40px;">#</th>
                  <th>Year  <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Published Date <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Approved By <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Action <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>2022 </td>
                  <td>27 Feb 2019 </td>
                  <td>Mynul Islam Leo </td>
                  <td>
                    <ul class="list-unstyled table_action_btn">
                      <li><a href="" class="btn_ view bg-success"><i class="fa-regular fa-eye"></i></a></li>
                      <li><a href="" class="btn_ edit bg-purple"><i class="fa-solid fa-pen-clip"></i></a></li>
                      <li><a href="" class="btn_ delete bg-danger"><i class="fa-regular fa-trash-can"></i></a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>2021 </td>
                  <td>27 Feb 2019 </td>
                  <td>Mynul Islam Leo </td>
                  <td>
                    <ul class="list-unstyled table_action_btn">
                      <li><a href="" class="btn_ view bg-success"><i class="fa-regular fa-eye"></i></a></li>
                      <li><a href="" class="btn_ edit bg-purple"><i class="fa-solid fa-pen-clip"></i></a></li>
                      <li><a href="" class="btn_ delete bg-danger"><i class="fa-regular fa-trash-can"></i></a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>2020 </td>
                  <td>27 Feb 2019 </td>
                  <td>Mynul Islam Leo </td>
                  <td>
                    <ul class="list-unstyled table_action_btn">
                      <li><a href="" class="btn_ view bg-success"><i class="fa-regular fa-eye"></i></a></li>
                      <li><a href="" class="btn_ edit bg-purple"><i class="fa-solid fa-pen-clip"></i></a></li>
                      <li><a href="" class="btn_ delete bg-danger"><i class="fa-regular fa-trash-can"></i></a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>2019 </td>
                  <td>27 Feb 2019 </td>
                  <td>Mynul Islam Leo </td>
                  <td>
                    <ul class="list-unstyled table_action_btn">
                      <li><a href="" class="btn_ view bg-success"><i class="fa-regular fa-eye"></i></a></li>
                      <li><a href="" class="btn_ edit bg-purple"><i class="fa-solid fa-pen-clip"></i></a></li>
                      <li><a href="" class="btn_ delete bg-danger"><i class="fa-regular fa-trash-can"></i></a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>2018 </td>
                  <td>27 Feb 2019 </td>
                  <td>Mynul Islam Leo </td>
                  <td>
                    <ul class="list-unstyled table_action_btn">
                      <li><a href="" class="btn_ view bg-success"><i class="fa-regular fa-eye"></i></a></li>
                      <li><a href="" class="btn_ edit bg-purple"><i class="fa-solid fa-pen-clip"></i></a></li>
                      <li><a href="" class="btn_ delete bg-danger"><i class="fa-regular fa-trash-can"></i></a></li>
                    </ul>
                  </td>
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