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
              <li>Leave History</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb part end -->

    <div class="content_box">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Leave History</h4>
          <!-- search -->
          <div class="search__">
            <form action="#">
              <div class="row gx-3">
                <div class="col-md-2">
                  <div class="input_groups">
                    <label>Leave Type <sup class="text-danger">*</sup></label>
                    <select class="js-select2">
                      <option value="high">Casual Leave 12 Days</option>
                      <option value="high">Medical Leave</option>
                      <option value="high">Earn Leave</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input_groups">
                    <label>Start date</label>
                    <input type="text" id="datepicker3" placeholder="Start date">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input_groups">
                    <label>End date</label>
                    <input type="text" id="datepicker4" placeholder="End date">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="input_groups">
                    <label>Status <sup class="text-danger">*</sup></label>
                    <select class="js-select2">
                      <option value="high">Approved</option>
                      <option value="high">New</option>
                      <option value="high">Rejected</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <label class="opacity-0">Button</label>
                  <div class="button_groups">
                    <button class="search_btn_" type="submit">Search</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="table-responsive text-nowrap">
            <table class="table data_table table-hover table-bordered mb-0 table-striped">
              <thead class="table_head">
                <tr>
                  <th style="width: 40px;">#</th>
                  <th>Leave Type <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>From Date <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>To Date <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>No. of Days <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Reason <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Status <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Approved By <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Medical Leave </td>
                  <td>27 Feb 2019 </td>
                  <td> 27 Feb 2019 </td>
                  <td>1 day </td>
                  <td>Going to Hospital </td>
                  <td>
                    <div class="action-label">
                      <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                        <i class="fa-regular fa-circle-dot text-success"></i> Approved
                      </a>
                    </div>
                  </td>
                  <td>Richard Miles</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Hospitalisation </td>
                  <td>27 Feb 2019 </td>
                  <td> 27 Feb 2019 </td>
                  <td>1 day </td>
                  <td>Going to Hospital </td>
                  <td>
                    <div class="action-label">
                      <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                        <i class="fa-regular fa-circle-dot text-purple"></i> New
                      </a>
                    </div>
                  </td>
                  <td>Richard Miles</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Hospitalisation </td>
                  <td>27 Feb 2019 </td>
                  <td> 27 Feb 2019 </td>
                  <td>1 day </td>
                  <td>Going to Hospital </td>
                  <td>
                    <div class="action-label">
                      <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                        <i class="fa-regular fa-circle-dot text-danger"></i> Rejected
                      </a>
                    </div>
                  </td>
                  <td>Richard Miles</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Medical Leave </td>
                  <td>27 Feb 2019 </td>
                  <td> 27 Feb 2019 </td>
                  <td>1 day </td>
                  <td>Going to Hospital </td>
                  <td>
                    <div class="action-label">
                      <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                        <i class="fa-regular fa-circle-dot text-success"></i> Approved
                      </a>
                    </div>
                  </td>
                  <td>Richard Miles</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Hospitalisation </td>
                  <td>27 Feb 2019 </td>
                  <td> 27 Feb 2019 </td>
                  <td>1 day </td>
                  <td>Going to Hospital </td>
                  <td>
                    <div class="action-label">
                      <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                        <i class="fa-regular fa-circle-dot text-purple"></i> New
                      </a>
                    </div>
                  </td>
                  <td>Richard Miles</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Hospitalisation </td>
                  <td>27 Feb 2019 </td>
                  <td> 27 Feb 2019 </td>
                  <td>1 day </td>
                  <td>Going to Hospital </td>
                  <td>
                    <div class="action-label">
                      <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                        <i class="fa-regular fa-circle-dot text-danger"></i> Rejected
                      </a>
                    </div>
                  </td>
                  <td>Richard Miles</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Medical Leave </td>
                  <td>27 Feb 2019 </td>
                  <td> 27 Feb 2019 </td>
                  <td>1 day </td>
                  <td>Going to Hospital </td>
                  <td>
                    <div class="action-label">
                      <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                        <i class="fa-regular fa-circle-dot text-success"></i> Approved
                      </a>
                    </div>
                  </td>
                  <td>Richard Miles</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Hospitalisation </td>
                  <td>27 Feb 2019 </td>
                  <td> 27 Feb 2019 </td>
                  <td>1 day </td>
                  <td>Going to Hospital </td>
                  <td>
                    <div class="action-label">
                      <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                        <i class="fa-regular fa-circle-dot text-purple"></i> New
                      </a>
                    </div>
                  </td>
                  <td>Richard Miles</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Hospitalisation </td>
                  <td>27 Feb 2019 </td>
                  <td> 27 Feb 2019 </td>
                  <td>1 day </td>
                  <td>Going to Hospital </td>
                  <td>
                    <div class="action-label">
                      <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                        <i class="fa-regular fa-circle-dot text-danger"></i> Rejected
                      </a>
                    </div>
                  </td>
                  <td>Richard Miles</td>
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