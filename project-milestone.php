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
              <li>Comments</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb part end -->

    <div class="content_box">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <div class="table_top_action">
                <div class="row">
                  <div class="col-md-12 align-self-end">
                    <div class="text-end">
                      <button class="print_btn">Print <i class="fa-solid fa-print"></i></button>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="project_milestone_details">
                <div class="task_scroll_container">
                  <button id="scroll-left" class="scroll_btn scroll_btn_left"><i class="fa-solid fa-angle-left"></i></button>
                  <button id="scroll-right" class="scroll_btn scroll_btn_right"><i class="fa-solid fa-angle-right"></i></button>
                  <div class="row task_body g-lg-2 g-xl-3">
                    <div class="col-sm-6 col-lg-4 col-xl-4 col-xxl-4 task_label">
                      <div class="task_board_title">
                        <h4 class="title py-3"><i class="fa-solid fa-database"></i> <span class="title_content">Prototype Design</span></h4>
                      </div>
                      <div class="task_board_column">
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li>
                              <button># Active</button>
                              <button class="priority_high"># High</button>
                            </li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>
                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_high"># High</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>

                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_low"># Low</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>
                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_medium"># Medium</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>
                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_high"># High</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>

                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_low"># Low</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>
                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_medium"># Medium</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-4 col-xxl-4 task_label">
                      <div class="task_board_title">
                        <h4 class="title py-3"><i class="fa-solid fa-database"></i> <span class="title_content">Front End Development</span></h4>
                      </div>
                      <div class="task_board_column">
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li>
                              <button># Active</button>
                              <button class="priority_high"># High</button>
                            </li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>
                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_high"># High</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>

                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_low"># Low</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>
                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_medium"># Medium</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-4 col-xxl-4 task_label">
                      <div class="task_board_title">
                        <h4 class="title py-3"><i class="fa-solid fa-database"></i> <span class="title_content">Back End Development</span></h4>
                      </div>
                      <div class="task_board_column">
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li>
                              <button># Active</button>
                              <button class="priority_high"># High</button>
                            </li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>
                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_high"># High</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>

                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_low"># Low</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>
                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_medium"># Medium</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-4 col-xxl-4 task_label">
                      <div class="task_board_title">
                        <h4 class="title py-3"><i class="fa-solid fa-database"></i> <span class="title_content">Upload on Server</span></h4>
                      </div>
                      <div class="task_board_column">
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li>
                              <button># Active</button>
                              <button class="priority_high"># High</button>
                            </li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>
                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_high"># High</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>

                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_low"># Low</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
                            </div>
                          </div>
                        </div>
                        <div class="task_card">
                          <ul class="list-unstyled tag">
                            <li><button># Reissued</button> <button class="priority_medium"># Medium</button></li>
                          </ul>
                          <a href="" class="task_title">Gather data from each team member on their progress</a>
                          <div class="dates d-flex align-items-center">
                            <div class="icon">
                              <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="info">
                              <p>
                                <b class="uppercase">Start:</b> 2023-25-04
                                <b class="uppercase">end:</b> 2023-28-04
                              </p>
                              <p><b class="uppercase">Duration:</b> 3 Days</p>
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
      </div>
    </div>

  </div>
  <!-- content part start -->

</main>

<?php
include("layout/footer.php");
?>

<!-- <div class="row">
  <div class="col-lg-4 milestone_label">
    <div class="milestone_item">
      <div class="milestone_title">
        <h4>Prototype Design <sup>(1st Stage)</sup></h4>
      </div>
      <div class="sub_title">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 120px;">Start Date</th>
                <th>Task</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>05 June, 2020</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, accusantium.</td>
              </tr>
              <tr>
                <td>05 June, 2020</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
              </tr>
              <tr>
                <td>05 June, 2020</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
              </tr>
              <tr>
                <td>05 June, 2020</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 milestone_label">
    <div class="milestone_item">
      <div class="milestone_title">
        <h4>Front End Design <sup>(2st Stage)</sup></h4>
      </div>
      <div class="sub_title">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 120px;">Start Date</th>
                <th>Task</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>05 June, 2020</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, accusantium.</td>
              </tr>
              <tr>
                <td>05 June, 2020</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
              </tr>
              <tr>
                <td>05 June, 2020</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
              </tr>
              <tr>
                <td>05 June, 2020</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 milestone_label">
    <div class="milestone_item">
      <div class="milestone_title">
        <h4>Development <sup>(3st Stage)</sup></h4>
      </div>
      <div class="sub_title">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 120px;">Start Date</th>
                <th>Task</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>05 June, 2020</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, accusantium.</td>
              </tr>
              <tr>
                <td>05 June, 2020</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
              </tr>
              <tr>
                <td>05 June, 2020</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
              </tr>
              <tr>
                <td>05 June, 2020</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div> -->


<script>
  // task scrollbar
  const scrollLeftButton = document.getElementById('scroll-left');
  const scrollRightButton = document.getElementById('scroll-right');
  const taskBody = document.querySelector('.task_body');

  // Variables to keep track of scrolling state
  let scrollInterval = null;
  const scrollAmount = 5; // Adjust the scroll speed as needed

  // Function to smoothly scroll the content
  function smoothScroll(direction) {
    taskBody.scrollLeft += direction * scrollAmount;
  }

  // Function to check if there are more than 4 columns
  function checkColumns() {
    const columns = document.querySelectorAll('.task_label');
    return columns.length > 3;
  }

  // Function to toggle scroll buttons visibility
  function toggleScrollButtons() {
    if (checkColumns()) {
      scrollLeftButton.style.display = 'block';
      scrollRightButton.style.display = 'block';
    }
  }

  // Initial check and button visibility
  toggleScrollButtons();

  // Event handler for scroll-left button mousedown
  scrollLeftButton.addEventListener('mousedown', () => {
    // Start scrolling left continuously
    scrollInterval = setInterval(() => {
      smoothScroll(-1); // Scroll left
    }, 0); // Adjust the scroll speed as needed
  });

  // Event handler for scroll-right button mousedown
  scrollRightButton.addEventListener('mousedown', () => {
    // Start scrolling right continuously
    scrollInterval = setInterval(() => {
      smoothScroll(1); // Scroll right
    }, 0); // Adjust the scroll speed as needed
  });

  // Event handler for mouseup (stop scrolling)
  window.addEventListener('mouseup', () => {
    // Stop scrolling when any mouse button is released
    clearInterval(scrollInterval);
  });

  // Event handler for when the buttons are released outside the window
  window.addEventListener('mouseout', (event) => {
    // Stop scrolling if the mouse leaves the window while holding a button
    if (event.relatedTarget === null) {
      clearInterval(scrollInterval);
    }
  });

  // Event listener for window resize to update button visibility
  window.addEventListener('resize', () => {
    toggleScrollButtons();
  });
</script>