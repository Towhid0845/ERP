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
        <div class="col-lg-6">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Leave Request</h4>
              <form action="leave-history.php">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="input_groups">
                      <label>Leave Type <sup class="text-danger">*</sup></label>
                      <select class="js-select2">
                        <option value="high">Casual Leave 12 Days</option>
                        <option value="high">Medical Leave</option>
                        <option value="high">Earn Leave</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input_groups">
                      <label>Number of Days</label>
                      <input type="text" placeholder="Number of days">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input_groups">
                      <label>Start date</label>
                      <input type="text" id="datepicker3" placeholder="Start date">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input_groups">
                      <label>End date</label>
                      <input type="text" id="datepicker4" placeholder="End date">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input_groups">
                      <label>Reason <sup class="text-danger">*</sup></label>
                      <textarea placeholder="Reason"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input_groups">
                      <label>Reliever <sup class="text-danger">*</sup></label>
                      <select class="js-select2">
                        <option value="high">Ahamed Shafiq</option>
                        <option value="high">Topu</option>
                        <option value="high">Arif</option>
                      </select>
                    </div>
                  </div>
                </div>
                <button type="submit" class="submit_profile_info common_btn mt-2">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Leave Request Preview</h4>
              <!-- leave application -->
              <div class="leave_application">
                <div class="header">
                  <p>Date: 26.06.2023</p>
                  <p class="my-2"><b>To</b></p>
                  <p>Mustafizur Rahman</p>
                  <p>Managing Director</p>
                  <p>NOGOR Solutions Limited</p>
                  <p>69, Road# 08, Block# D, Niketon, Gulshan, Dhaka</p>
                  <p><b>Leave Type:</b> Medical Leave</p>
                  <p><b>Start Date:</b> 05 June, 2022</p>
                  <p><b>End Date:</b> 06 June, 2022</p>
                  <p><b>Reliever:</b> Arif</p>
                </div>
                <div class="body">
                  <p class="mb-2"><b>Dear Sir,</b></p>
                  <p>With respect, inform you that I am unable to attend work on 02.07.2023 to 04.007.2023 due to going home for Eid. </p>
                  <p>Please consider my above mentioned reason & accept this letter.</p>
                </div>
                <div class="footer">
                  <p>Sincerely</p>
                  <p><b>Name: Khairul Alam Nahid</b></p>
                  <p>Web Designer</p>
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