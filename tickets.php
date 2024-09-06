<?php
include("layout/header.php");

?>

<main>
  <?php
  include("layout/cliend-dashboard-sidebar.php");
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
            <h4 class="card-title">Tickets</h4>
            <a href="create-ticket.php" class="add_btn__"><i class="fa-solid fa-plus"></i></a>
          </div>
          <!-- search -->
          <!-- <div class="search__">
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
          </div> -->
          <div class="table-responsive text-nowrap">
            <table class="table data_table table-hover table-bordered mb-0 table-striped">
              <thead class="table_head">
                <tr>
                  <th style="width: 40px;">#</th>
                  <th>Ticket ID <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Ticket Type <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Created Date <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Assaigned To <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Details <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Status <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                  <th>Attachment <span class="sort_icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>#TKT-0001 </td>
                  <td>Software Issue</td>
                  <td> 27 Feb 2019 </td>
                  <td>Arif</td>
                  <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, ad.</td>
                  <td>
                    <div class="action-label">
                      <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                        <i class="fa-regular fa-circle-dot text-success"></i> Open
                      </a>
                    </div>
                  </td>
                  <td><a href="" class="table_attachment">
                      <img src="images/file.svg" alt="">
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td> #TKT-0001 </td>
                  <td>Software Issue </td>
                  <td> 27 Feb 2019 </td>
                  <td>Arif </td>
                  <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, ad.</td>
                  <td>
                    <div class="action-label">
                      <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                        <i class="fa-regular fa-circle-dot text-purple"></i> New
                      </a>
                    </div>
                  </td>
                  <td><a href="" class="table_attachment">
                      <img src="images/file.svg" alt="">
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td> #TKT-0001 </td>
                  <td>Software Issue </td>
                  <td> 27 Feb 2019 </td>
                  <td>Arif</td>
                  <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, ad.</td>
                  <td>
                    <div class="action-label">
                      <a class="btn btn-white btn-sm btn-rounded border rounded-pill shadow-sm" href="">
                        <i class="fa-regular fa-circle-dot text-danger"></i> Closed
                      </a>
                    </div>
                  </td>
                  <td><a href="" class="table_attachment">
                      <img src="images/file.svg" alt="">
                    </a>
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