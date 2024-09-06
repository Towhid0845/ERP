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
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title">KPI Form</h4>
          <form action="#">
            <div class="row">
              <div class="col-lg-4">
                <div class="input_groups">
                  <label>Month <sup class="text-danger">*</sup></label>
                  <select class="js-select2">
                    <option value="high">January</option>
                    <option value="high">February</option>
                    <option value="high">March</option>
                    <option value="high">April</option>
                    <option value="high">May</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="d-flex">
              <fieldset class="flex-grow-1">
                <h4 class="fieldset_title">Employee</h4>
                <div class="row">
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Employee Name <sup class="text-danger">*</sup></label>
                      <select class="js-select2">
                        <option value="high">Ahamed Shafiq</option>
                        <option value="high">Topu</option>
                        <option value="high">Arif</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Total Attendence</label>
                      <input type="text" value="40" readonly>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Total Leave</label>
                      <input type="text" value="40" readonly>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Total Late</label>
                      <input type="text" value="40" readonly>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Total Task Completed</label>
                      <input type="text" value="40" readonly>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Behavior</label>
                      <input type="text" placeholder="Ex: 08/10">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Learning capacity</label>
                      <input type="text" placeholder="Ex: 08/10">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Others</label>
                      <input type="text" placeholder="Others">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Remarks</label>
                      <input type="text" placeholder="Remarks">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Total KPI</label>
                      <input type="text" placeholder="Total KPI">
                    </div>
                  </div>
                </div>
              </fieldset>
              <div class="add_more_option align-self-center mt-3">
                <button type="button" class="delete_btn option_btn">
                  <i class="far fa-trash-alt"></i>
                </button>
              </div>
            </div>
            <div class="d-flex">
              <fieldset class="flex-grow-1">
                <h4 class="fieldset_title">Employee</h4>
                <div class="row">
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Employee Name <sup class="text-danger">*</sup></label>
                      <select class="js-select2">
                        <option value="high">Ahamed Shafiq</option>
                        <option value="high">Topu</option>
                        <option value="high">Arif</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Total Attendence</label>
                      <input type="text" value="40" readonly>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Total Leave</label>
                      <input type="text" value="40" readonly>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Total Late</label>
                      <input type="text" value="40" readonly>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Total Task Completed</label>
                      <input type="text" value="40" readonly>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Behavior</label>
                      <input type="text" placeholder="Ex: 08/10">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Learning capacity</label>
                      <input type="text" placeholder="Ex: 08/10">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Others</label>
                      <input type="text" placeholder="Others">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Remarks</label>
                      <input type="text" placeholder="Remarks">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="input_groups">
                      <label>Total KPI</label>
                      <input type="text" placeholder="Total KPI">
                    </div>
                  </div>
                </div>
              </fieldset>
              <div class="add_more_option align-self-center mt-3">
                <button type="button" class="add_more_btn option_btn">
                  <i class="fas fa-plus"></i>
                </button>
                <button type="button" class="delete_btn option_btn">
                  <i class="far fa-trash-alt"></i>
                </button>
              </div>
            </div>
            <button type="submit" class="submit_profile_info common_btn mt-3">Submit</button>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- content part start -->

</main>

<?php
include("layout/footer.php");
?>