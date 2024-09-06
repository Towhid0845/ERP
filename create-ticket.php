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
              <li>Tickets</li>
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
            <h4 class="card-title">Add Ticket</h4>
          </div>
          <form action="#">
            <div class="row">
              <div class="col-lg-3">
                <div class="input_groups">
                  <label>Name <sup class="text-danger">*</sup></label>
                  <input type="text" placeholder="Name">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input_groups">
                  <label>Email <sup class="text-danger">*</sup></label>
                  <input type="email" placeholder="Email">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input_groups">
                  <label>Subject <sup class="text-danger">*</sup></label>
                  <input type="text" placeholder="Subject">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input_groups">
                  <label>Priority <sup class="text-danger">*</sup></label>
                  <select class="js-select2">
                    <option value="high">High</option>
                    <option value="high">Medium</option>
                    <option value="high">Low</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="d-flex">
              <fieldset class="flex-grow-1">
                <h4 class="fieldset_title">Attachment</h4>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="input_groups">
                      <input class="attachment" type="file" placeholder="Attachment">
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
                <h4 class="fieldset_title">Attachment</h4>
                <div class="row">
                <div class="col-lg-12">
                    <div class="input_groups">
                      <input class="attachment" type="file" placeholder="Attachment">
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