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
              <li>Profile</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb part end -->

    <div class="content_box">
      <div class="employee_profile">
        <div class="row">
          <div class="col-lg-12">
            <div class="short_summery_widget">
              <div class="row g-4">
                <div class="col-lg-3 col-xl-3 col-xxl-3 col-sm-6 summery_lable">
                  <div class="summery_item d-flex justify-content-between">
                    <div class="icon"><i class="fa-solid fa-book"></i></div>
                    <div class="info text-end">
                      <h4 class="title">Total Attendance</h4>
                      <h2 class="number odometer odometer-auto-theme" data-count="50">
                        <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div>
                      </h2>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-xxl-3 col-sm-6 summery_lable">
                  <div class="summery_item d-flex justify-content-between">
                    <div class="icon"><i class="fa-solid fa-list-check"></i></div>
                    <div class="info text-end">
                      <h4 class="title">Total Leave</h4>
                      <h2 class="number odometer odometer-auto-theme" data-count="155">
                        <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div>
                      </h2>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-xxl-3 col-sm-6 summery_lable">
                  <div class="summery_item d-flex justify-content-between">
                    <div class="icon"><i class="fa-brands fa-dropbox"></i></div>
                    <div class="info text-end">
                      <h4 class="title">Total Late</h4>
                      <h2 class="number odometer odometer-auto-theme" data-count="80">
                        <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div>
                      </h2>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-xxl-3 col-sm-6 summery_lable">
                  <div class="summery_item d-flex justify-content-between">
                    <div class="icon"><i class="fa-solid fa-money-bill-1-wave"></i></div>
                    <div class="info text-end">
                      <h4 class="title">Total completed Task
                      </h4>
                      <h2 class="number odometer odometer-auto-theme" data-count="4000">
                        <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div>
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 mt-4">
            <div class="content_widget_box position-relative">
              <div class="widget_main profile_top_info">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="profile_image d-flex align-items-center">
                      <div class="image">
                        <img src="images/profile.jpg" alt="profile" class="img-fluid w-100">
                      </div>
                      <div class="text">
                        <h4 class="title">John Doe</h4>
                        <span>Web Designer</span>
                        <h6>Employee ID : FT-0001</h6>
                        <span>Date of Join : 1st Jan 2013</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="profile_info position-relative">
                      <button class="update_info_btn update_info_btn_1"><i class="fa-solid fa-marker"></i></button>
                      <div class="table-responsive text-nowrap">
                        <table class="table table-borderless mb-0">
                          <tbody>
                            <tr>
                              <th style="width: 240px;">Phone:</th>
                              <td><a href="tel:9876543210">9876543210</a></td>
                            </tr>
                            <tr>
                              <th>Email:</th>
                              <td><a href="mailto:johndoe@example.com">johndoe@example.com</a></td>
                            </tr>
                            <tr>
                              <th>Birthday:</th>
                              <td>24th July</td>
                            </tr>
                            <tr>
                              <th>Address:</th>
                              <td>1861 Bayonne Ave, Manchester Township, NJ, 08759</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- editable profile information -->
              <div class="widget_main edit_profile_widget edit_profile_widget_1">
                <h4 class="box_title">Edit Profile Informations</h4>
                <form action="#">
                  <div class="d-flex">
                    <div class="profile_image">
                      <div class="image position-relative">
                        <img src="images/profile.jpg" alt="profile" class="img-fluid w-100">
                        <div class="upload_box">
                          <input class="d-none" type="file" id="file">
                          <label for="file"><i class="fas fa-camera"></i></label>
                        </div>
                      </div>
                    </div>
                    <div class="editable_information">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="input_groups">
                            <label>Name <sup class="text-danger">*</sup></label>
                            <input type="text" placeholder="Name">
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="input_groups">
                            <label>Designation <sup class="text-danger">*</sup></label>
                            <input type="text" placeholder="Designation">
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="input_groups">
                            <label>Employee Id <sup class="text-danger">*</sup></label>
                            <input type="text" placeholder="Employee Id">
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="input_groups">
                            <label>Date of join <sup class="text-danger">*</sup></label>
                            <input type="text" placeholder="Date of join">
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="input_groups">
                            <label>Phone <sup class="text-danger">*</sup></label>
                            <input type="text" placeholder="Phone">
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="input_groups">
                            <label>Email <sup class="text-danger">*</sup></label>
                            <input type="text" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="input_groups">
                            <label>Birthday <sup class="text-danger">*</sup></label>
                            <input type="text" placeholder="Birthday">
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="input_groups">
                            <label>Address <sup class="text-danger">*</sup></label>
                            <input type="text" placeholder="Address">
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="submit_profile_info common_btn mt-2">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="content_widget_box h-100">
              <div class="widget_main personal_information">
                <div class="profile_info_widget position-relative">
                  <h4 class="title">Personal Informations</h4>
                  <button class="update_info_btn update_info_btn_2"><i class="fa-solid fa-marker"></i></button>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-borderless mb-0">
                      <tbody>
                        <tr>
                          <th style="width: 280px;">Passport No:</th>
                          <td>
                            9876543210</td>
                        </tr>
                        <tr>
                          <th>Passport Exp Date:</th>
                          <td>
                            9876543210</td>
                        </tr>
                        <tr>
                          <th>Tel:</th>
                          <td><a href="tel:9876543210">9876543210</a></td>
                        </tr>
                        <tr>
                          <th>Nationality:</th>
                          <td>Bangladeshi</td>
                        </tr>
                        <tr>
                          <th>Religion:</th>
                          <td>Islam</td>
                        </tr>
                        <tr>
                          <th>Marital status:</th>
                          <td>Married</td>
                        </tr>
                        <tr>
                          <th>Employment of spouse:</th>
                          <td>No</td>
                        </tr>
                        <tr>
                          <th>No. of children</th>
                          <td>2</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- editable personal information -->
              <div class="widget_main edit_profile_widget edit_profile_widget_2">
                <div class="profile_info_widget position-relative">
                  <h4 class="box_title">Edit Personal Informations</h4>
                  <form action="#">
                    <div class="editable_information">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="input_groups">
                            <label>Passport No</label>
                            <input type="text" placeholder="Passport No">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="input_groups">
                            <label>Passport Exp Date</label>
                            <input type="text" placeholder="Passport Exp Date">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="input_groups">
                            <label>Telephone <sup class="text-danger">*</sup></label>
                            <input type="text" placeholder="Telephone">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="input_groups">
                            <label>Nationality <sup class="text-danger">*</sup></label>
                            <input type="text" placeholder="Nationality">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="input_groups">
                            <label>Religion</label>
                            <select class="js-select2">
                              <option value="high">Islam</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="input_groups">
                            <label>Marital status</label>
                            <select class="js-select2">
                              <option value="high">Married</option>
                              <option value="high">Unmarried</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="submit_profile_info common_btn mt-2">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="content_widget_box">
              <div class="widget_main">
                <div class="profile_info_widget position-relative">
                  <h4 class="title">Official Informations</h4>
                  <button class="update_info_btn"><i class="fa-solid fa-marker"></i></button>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-borderless mb-0">
                      <tbody>
                        <tr>
                          <th style="width: 280px;">Company Name:</th>
                          <td>
                            Nogor Solutions Limited</td>
                        </tr>
                        <tr>
                          <th>Telephone:</th>
                          <td>
                            9876543210</td>
                        </tr>
                        <tr>
                          <th>Joining Date:</th>
                          <td>1st Jan 2013</td>
                        </tr>
                        <tr>
                          <th>Position:</th>
                          <td>Junior Software Engineer</td>
                        </tr>
                        <tr>
                          <th>Employee ID:</th>
                          <td>0004</td>
                        </tr>
                        <tr>
                          <th>Address:</th>
                          <td>1861 Bayonne Ave, Manchester Township, NJ, 08759</td>
                        </tr>
                        <tr>
                          <th>---</th>
                          <td>No</td>
                        </tr>
                        <tr>
                          <th>---</th>
                          <td>2</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="content_widget_box h-100">
              <div class="widget_main education_information">
                <div class="profile_info_widget position-relative">
                  <button class="update_info_btn update_info_btn_3"><i class="fa-solid fa-marker"></i></button>
                  <h4 class="title">Education Informations</h4>
                  <div class="experiance_box">
                    <ul class="list-unstyled">
                      <li>
                        <h5>International College of Arts and Science (UG)</h5>
                        <h6>Bsc Computer Science</h6>
                        <span>2000 - 2003</span>
                      </li>
                    </ul>
                    <ul class="list-unstyled">
                      <li>
                        <h5>International College of Arts and Science (UG)</h5>
                        <h6>Bsc Computer Science</h6>
                        <span>2000 - 2003</span>
                      </li>
                    </ul>
                    <ul class="list-unstyled">
                      <li>
                        <h5>International College of Arts and Science (UG)</h5>
                        <h6>Bsc Computer Science</h6>
                        <span>2000 - 2003</span>
                      </li>
                    </ul>
                    <ul class="list-unstyled">
                      <li>
                        <h5>International College of Arts and Science (UG)</h5>
                        <h6>Bsc Computer Science</h6>
                        <span>2000 - 2003</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- editable information -->
              <div class="widget_main edit_profile_widget edit_profile_widget_3">
                <div class="profile_info_widget position-relative">
                  <button class="update_info_btn"><i class="fa-solid fa-marker"></i></button>
                  <h4 class="title">Edit Education Informations</h4>
                  <form action="#">
                    <div class="editable_information d-flex align-items-center">
                      <fieldset>
                        <h4 class="fieldset_title">Education Information</h4>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="input_groups">
                              <label>Title</label>
                              <input type="text" placeholder="Title">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="input_groups">
                              <label>Subject</label>
                              <input type="text" placeholder="Subject">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="input_groups">
                              <label>Year <sup class="text-danger">*</sup></label>
                              <input type="text" placeholder="Year">
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <div class="add_more_option">
                        <button type="button" class="delete_btn option_btn">
                          <i class="far fa-trash-alt"></i>
                        </button>
                      </div>
                    </div>
                    <div class="editable_information d-flex align-items-center">
                      <fieldset>
                        <h4 class="fieldset_title">Education Information</h4>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="input_groups">
                              <label>Title</label>
                              <input type="text" placeholder="Title">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="input_groups">
                              <label>Subject</label>
                              <input type="text" placeholder="Subject">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="input_groups">
                              <label>Year <sup class="text-danger">*</sup></label>
                              <input type="text" placeholder="Year">
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <div class="add_more_option">
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
          <div class="col-lg-6 mt-4">
            <div class="content_widget_box h-100">
              <div class="widget_main">
                <div class="profile_info_widget position-relative">
                  <h4 class="title">Experience</h4>
                  <button class="update_info_btn"><i class="fa-solid fa-marker"></i></button>
                  <div class="experiance_box">
                    <ul class="list-unstyled">
                      <li>
                        <h5>Web Designer at Zen Corporation</h5>
                        <h6>Jan 2013 - Present (5 years 2 months)</h6>
                      </li>
                    </ul>
                    <ul class="list-unstyled">
                      <li>
                        <h5>Web Designer at Ron-tech</h5>
                        <h6>Jan 2013 - Present (5 years 2 months)</h6>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="content_widget_box h-100">
              <div class="widget_main">
                <div class="profile_info_widget position-relative">
                  <h4 class="title">Training Information</h4>
                  <button class="update_info_btn"><i class="fa-solid fa-marker"></i></button>
                  <div class="experiance_box">
                    <ul class="list-unstyled">
                      <li>
                        <h5>Web Design</h5>
                        <h6>Nogor Solutions Limited</h6>
                      </li>
                    </ul>
                    <ul class="list-unstyled">
                      <li>
                        <h5>Web Development</h5>
                        <h6>Nogor Solutions Limited</h6>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="content_widget_box h-100">
              <div class="widget_main">
                <div class="profile_info_widget position-relative">
                  <h4 class="title">Certificates / Award</h4>
                  <button class="update_info_btn"><i class="fa-solid fa-marker"></i></button>
                  <div class="award_box">
                    <div class="row g-4">
                      <div class="col-lg-4 award_label text-center">
                        <div class="award_item">
                          <div class="award_info">
                            <i class="fa-solid fa-award"></i>
                          </div>
                        </div>
                        <h4 class="award_title">Best Employee Award - year: 2024</h4>
                      </div>
                      <div class="col-lg-4 award_label text-center">
                        <div class="award_item">
                          <div class="award_info">
                            <i class="fa-solid fa-award"></i>
                          </div>
                        </div>
                        <h4 class="award_title">Best Employee Award - year 2020 to 2025</h4>
                      </div>
                      <div class="col-lg-4 award_label text-center">
                        <div class="award_item">
                          <div class="award_info">
                            <i class="fa-solid fa-award"></i>
                          </div>
                        </div>
                        <h4 class="award_title">Best Employee Award</h4>
                      </div>
                    </div>
                  </div>
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

<script>
  // edit profile js
  $(".edit_profile_widget_1").hide();

  $(".update_info_btn_1").on("click", function() {
    $(".profile_top_info").hide();
    $(".edit_profile_widget_1").show();
  })

  $(".submit_profile_info").on("click", function() {
    $(".profile_top_info").show();
    $(".edit_profile_widget_1").hide();
  })

  $(".edit_profile_widget_2").hide();

  $(".update_info_btn_2").on("click", function() {
    $(".personal_information").hide();
    $(".edit_profile_widget_2").show();
  })

  $(".submit_profile_info").on("click", function() {
    $(".personal_information").show();
    $(".edit_profile_widget_2").hide();
  })

  $(".edit_profile_widget_3").hide();

  $(".update_info_btn_3").on("click", function() {
    $(".education_information").hide();
    $(".edit_profile_widget_3").show();
  })

  $(".submit_profile_info").on("click", function() {
    $(".education_information").show();
    $(".edit_profile_widget_3").hide();
  })
</script>