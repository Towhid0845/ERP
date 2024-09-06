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
              <li>Projects</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb part end -->

    <div class="content_box">
      <div class="project_list">
        <div class="row g-4">
          <div class="col-lg-3">
            <div class="project_list_item">
              <a href="project-details.php" class="project_title">Project Management System</a>
              <ul class="list-unstyled">
                <li class="sub_title">
                  <span><b>Start: </b>09 June, 2023</span>
                </li>
                <li class="sub_title">
                  <span><b>End: </b>09 June, 2024</span>
                </li>
              </ul>
              <div class="d-flex justify-content-between">
                <h5 class="clients"><b>Client Name:</b> FBCCI</h5>
                <h5 class="project_milestone"><a class="btn btn-sm shadow-sm rounded-pill border" href="project-milestone.php">Project Milestone</a></h5>
              </div>
              <span class="status active">Active</span>
              <h6 class="contribution d-flex justify-content-between align-items-center">Contribution: <span>30%</span></h6>
              <div class="project_progress">
                <div class="progress-wrap">
                  <div class="progress-item">
                    <h6 class="progress-title">Project Progress</h6>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar wow slideInLeft" style="width: 70%; visibility: visible; animation-delay: 0.4s; animation-name: slideInLeft;">
                      </div>
                      <span>70%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="project_list_item">
              <a href="project-details.php" class="project_title">Project Management System</a>
              <ul class="list-unstyled">
                <li class="sub_title">
                  <span><b>Start: </b>09 June, 2023</span>
                </li>
                <li class="sub_title">
                  <span><b>End: </b>09 June, 2024</span>
                </li>
              </ul>
              <div class="d-flex justify-content-between">
                <h5 class="clients"><b>Client Name:</b> FBCCI</h5>
                <h5 class="project_milestone"><a class="btn btn-sm shadow-sm rounded-pill border" href="project-milestone.php">Project Milestone</a></h5>

              </div>
              <span class="status not_started">Not Started</span>
              <h6 class="contribution d-flex justify-content-between align-items-center">Contribution: <span>30%</span></h6>
              <div class="project_progress">
                <div class="progress-wrap">
                  <div class="progress-item">
                    <h6 class="progress-title">Project Progress</h6>
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
          <div class="col-lg-3">
            <div class="project_list_item">
              <a href="project-details.php" class="project_title">Project Management System</a>
              <ul class="list-unstyled">
                <li class="sub_title">
                  <span><b>Start: </b>09 June, 2023</span>
                </li>
                <li class="sub_title">
                  <span><b>End: </b>09 June, 2024</span>
                </li>
              </ul>
              <div class="d-flex justify-content-between">
                <h5 class="clients"><b>Client Name:</b> FBCCI</h5>
                <h5 class="project_milestone"><a class="btn btn-sm shadow-sm rounded-pill border" href="project-milestone.php">Project Milestone</a></h5>

              </div>
              <span class="status on_hold">Hold</span>
              <h6 class="contribution d-flex justify-content-between align-items-center">Contribution: <span>30%</span></h6>
              <div class="project_progress">
                <div class="progress-wrap">
                  <div class="progress-item">
                    <h6 class="progress-title">Project Progress</h6>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar wow slideInLeft" style="width: 50%; visibility: visible; animation-delay: 0.4s; animation-name: slideInLeft;">
                      </div>
                      <span>50%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="project_list_item">
              <a href="project-details.php" class="project_title">Project Management System</a>
              <ul class="list-unstyled">
                <li class="sub_title">
                  <span><b>Start: </b>09 June, 2023</span>
                </li>
                <li class="sub_title">
                  <span><b>End: </b>09 June, 2024</span>
                </li>
              </ul>
              <div class="d-flex justify-content-between">
                <h5 class="clients"><b>Client Name:</b> FBCCI</h5>
                <h5 class="project_milestone"><a class="btn btn-sm shadow-sm rounded-pill border" href="project-milestone.php">Project Milestone</a></h5>

              </div>
              <span class="status deactive">Deactive</span>
              <h6 class="contribution d-flex justify-content-between align-items-center">Contribution: <span>30%</span></h6>
              <div class="project_progress">
                <div class="progress-wrap">
                  <div class="progress-item">
                    <h6 class="progress-title">Project Progress</h6>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar wow slideInLeft" style="width: 30%; visibility: visible; animation-delay: 0.4s; animation-name: slideInLeft;">
                      </div>
                      <span>30%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
  <!-- content part start -->

</main>

<?php
include("layout/footer.php");
?>