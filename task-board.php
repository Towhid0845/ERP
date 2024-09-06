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
        <div class="col-lg-3 col-md-5 align-self-center">
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
        <div class="col-lg-9 col-md-7 align-self-center">
          <div class="right_info text-md-end mt-2 mt-md-0">
            <ul class="list-unstyled">
              <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
              <li>Task Board</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb part end -->

    <div class="content_box">
      <div class="content_widget_box mt-4 mt-lg-0">
        <div class="widget_main">
          <div class="task_board_header">
            <div class="row">
              <div class="col-6 col-sm-9 col-md-10 align-self-center">
                <ul class="list-unstyled options d-none d-md-block">
                  <li class="active"><a class="option_link" href=""><i class="fa-regular fa-window-restore"></i> Todays Task</a></li>
                  <li><a class="option_link" href="task-list.php"><i class="fa-solid fa-list"></i>Task List</a></li>
                  <li><a class="option_link" href=""><i class="fa-solid fa-chart-gantt"></i> Completed Task</a></li>
                  <li><a class="option_link" href=""><i class="fa-solid fa-chart-gantt"></i> Gantt</a></li>
                  <li><a class="option_link" href=""><i class="fa-solid fa-calendar-days"></i> Calendar</a></li>
                  <li><button class="open_new_task option_link"><i class="fa-solid fa-plus"></i> New Task</button></li>
                  <li><button class="option_link add_new_column" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="fa-solid fa-plus"></i> Add New Column</button></li>
                </ul>

                <!-- mobile task option menu -->
                <ul class="list-unstyled options mobile_task_menu_options d-md-none">
                  <div class="close_mobile_task_menu_options">
                    <i class="fa-solid fa-xmark"></i>
                  </div>
                  <li class="active"><a class="option_link" href=""><i class="fa-regular fa-window-restore"></i> Todays Task</a></li>
                  <li><a class="option_link" href=""><i class="fa-solid fa-list"></i>Todo List</a></li>
                  <li><a class="option_link" href=""><i class="fa-solid fa-chart-gantt"></i> Completed Task</a></li>
                  <li><a class="option_link" href=""><i class="fa-solid fa-chart-gantt"></i> Gantt</a></li>
                  <li><a class="option_link" href=""><i class="fa-solid fa-calendar-days"></i> Calendar</a></li>
                  <li><button class="option_link open_new_task"><i class="fa-solid fa-plus"></i> New Task</button></li>
                  <li><button class="option_link add_new_column" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="fa-solid fa-plus"></i> Add New Column</button></li>
                </ul>

                <!-- mobile short option button -->
                <button class="mobile_short_option_btn d-md-none"><i class="fa-solid fa-arrow-up-short-wide"></i> Option</button>
              </div>
              <div class="col-6 col-sm-3 col-md-2 align-self-center">
                <ul class="list-unstyled filter text-end">
                  <li>
                    <button class="filter_menu"><i class="fa-solid fa-arrow-down-short-wide"></i> Filter</button>
                  </li>
                </ul>
              </div>

            </div>
          </div>

          <!-- add new colums modal -->
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="add_new_column_form">
                    <form action="#">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="input_groups">
                            <label>Column Name <sup class="text-danger">*</sup></label>
                            <input type="text" placeholder="Column name">
                          </div>
                        </div>
                        <div class="col-lg-12 mt-2">
                          <button type="submit" class="common_btn btn_full">Add Column</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- new task modal -->
          <div class="new_task_add_modal">
            <div class="new_task_add">
              <div class="new_task_add_header">
                <div class="row">
                  <div class="col-lg-6">
                    <h4>Create Task</h4>
                  </div>
                  <div class="col-lg-6">
                    <div class="close_new_task text-end">
                      <i class="fa-solid fa-xmark"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8">
                  <div class="task_left_side">
                    <form action="#">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="input_groups">
                            <label>Task Title <sup class="text-danger">*</sup></label>
                            <input type="text" placeholder="Title">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="input_groups">
                            <label>Start date</label>
                            <input type="text" id="datepicker1" placeholder="Start date">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="input_groups">
                            <label>End date</label>
                            <input type="text" id="datepicker2" placeholder="End date">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="input_groups">
                            <label>Duration</label>
                            <input type="time" placeholder="Duration">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="input_groups">
                            <label>Priority</label>
                            <select class="js-select2">
                              <option value="high">High</option>
                              <option value="medium">Medium</option>
                              <option value="low">Low</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="input_groups">
                            <label>Description</label>
                            <textarea placeholder="Task Description"></textarea>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <button type="submit" class="common_btn btn_full">Submit Now</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-4 ms-auto">
                  <div class="task_right_side">
                    <div class="task_info_sidebar">
                      <div class="sidebar_item mb-3">
                        <h4 class="title">In List</h4>
                        <div class="input_groups">
                          <select class="js-select2">
                            <option value="high">High</option>
                            <option value="medium">Medium</option>
                            <option value="low">Low</option>
                          </select>
                        </div>
                      </div>
                      <div class="sidebar_item mb-3">
                        <h4 class="title">Members</h4>
                        <div class="input_groups">
                          <select class="js-select2">
                            <option value="">Nahid Raj</option>
                            <option value="">Shafiq Ahamed</option>
                            <option value="">Sarfaraz</option>
                          </select>
                        </div>
                      </div>
                      <div class="sidebar_item mb-3">
                        <h4 class="title">Labels</h4>
                        <div class="form-check">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            <span class="high">High</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            <span class="medium">Medium</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            <span class="low">Low</span>
                          </label>
                        </div>
                      </div>
                      <!-- <div class="sidebar_item mb-3">
                        <h4 class="title">Actions</h4>
                        <button class="action_btn"><i class="fa-solid fa-compress"></i> Move</button>
                        <button class="action_btn"><i class="fa-regular fa-copy"></i> Copy</button>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- task offcanvas menu -->
          <div class="offcanvas_overlay"></div>
          <div class="task_offcanvas_menu">
            <button class="close_offcanvas"><i class="fa-solid fa-xmark"></i></button>
            <h4 class="title"><i class="fa-solid fa-arrow-down-wide-short"></i> Fitler</h4>
            <div class="filter_info">
              <div class="filter_block">
                <div class="input-groups">
                  <label for="">Keyword</label>
                  <input type="text" class="keyword" placeholder="Enter a keyword...">
                </div>
              </div>
              <div class="filter_block date_block">
                <h4 class="label_title">Due date</h4>
                <div class="form-check">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    <i class="date_time_icon fa-solid fa-calendar-days"></i> No Datas
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    <i class="date_time_icon fa-regular fa-clock"></i> Over due
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    <i class="date_time_icon fa-regular fa-clock"></i> Due in the next day
                  </label>
                </div>
                <button class="show_more_btn">Show more options <i class="fa-solid fa-angle-down"></i></button>
              </div>
              <div class="filter_block">
                <h4 class="label_title">Priority</h4>
                <div class="form-check">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    <span class="high">High</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    <span class="medium">Medium</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    <span class="low">Low</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- task offcanvas menu -->
          <div class="task_scroll_container">
            <button id="scroll-left" class="scroll_btn scroll_btn_left"><i class="fa-solid fa-angle-left"></i></button>
            <button id="scroll-right" class="scroll_btn scroll_btn_right"><i class="fa-solid fa-angle-right"></i></button>
            <div class="row task_body g-lg-2 g-xl-3">
              <div class="col-sm-6 col-lg-4 col-xl-3 col-xxl-3 task_label">
                <div class="task_board_title">
                  <h4 class="title"><i class="fa-solid fa-database"></i> <span class="title_content">Project Resources</span> <span class="number_count">30</span></h4>
                </div>
                <div class="task_board_column">
                  <div class="task_card">
                    <div class="image">
                      <img src="images/1.jpg" alt="1" class="img-fluid w-100">
                    </div>
                    <ul class="list-unstyled tag">
                      <li>
                        <button># Reissued</button>
                        <button class="priority_high"># High</button>
                        <button class=""><i class="fa-solid fa-paperclip"></i> &nbsp; 1</button>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>
                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="#" class="d-flex justify-content-between" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-3 col-xxl-3 task_label">
                <div class="task_board_title">
                  <h4 class="title"><i class="fa-solid fa-bars-progress"></i> <span class="title_content">Questions For Next Meeting</span> <span class="number_count">5</span></h4>
                </div>
                <div class="task_board_column">
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="task_card">
                    <div class="image">
                      <img src="images/1.jpg" alt="1" class="img-fluid w-100">
                    </div>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-3 col-xxl-3 task_label">
                <div class="task_board_title">
                  <h4 class="title"><i class="fa-solid fa-square-check"></i> <span class="title_content">Prototype Design</span> <span class="number_count">25</span></h4>
                </div>
                <div class="task_board_column">
                  <div class="task_card">
                    <div class="image">
                      <img src="images/1.jpg" alt="1" class="img-fluid w-100">
                    </div>
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
                    </ul>
                    <a href="" class="task_title">Gather data from each team member on their progress</a>
                    <button class="task_done_status"><i class="fa-regular fa-clock"></i> 10 Jan, 2020</button>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="#" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="task_card">
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="task_card">
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="task_card">
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-3 col-xxl-3 task_label">
                <div class="task_board_title">
                  <h4 class="title"><i class="fa-solid fa-user-check"></i> <span class="title_content">Requirement Analysis</span> <span class="number_count">15</span></h4>
                </div>
                <div class="task_board_column">
                  <div class="task_card">
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="task_card">
                    <div class="image">
                      <img src="images/1.jpg" alt="1" class="img-fluid w-100">
                    </div>
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="task_card">
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="task_card">
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-3 col-xxl-3 task_label">
                <div class="task_board_title">
                  <h4 class="title"><i class="fa-solid fa-folder-open"></i> <span class="title_content">Database Design</span> <span class="number_count">10</span></h4>
                </div>
                <div class="task_board_column">
                  <div class="task_card">
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="task_card">
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="task_card">
                    <div class="image">
                      <img src="images/1.jpg" alt="1" class="img-fluid w-100">
                    </div>
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="task_card">
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-3 col-xxl-3 task_label">
                <div class="task_board_title">
                  <h4 class="title"><i class="fa-solid fa-arrows-rotate"></i> <span class="title_content">Archieved</span> <span class="number_count">2</span></h4>
                </div>
                <div class="task_board_column">
                  <div class="task_card">
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>
                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="task_card">
                    <div class="image">
                      <img src="images/1.jpg" alt="1" class="img-fluid w-100">
                    </div>
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="task_card">
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="task_card">
                    <ul class="list-unstyled tag">
                      <li><button># Reissued</button></li>
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
                    <div class="time_and_status d-flex justify-content-between">
                      <div class="status">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Done
                          </label>
                        </div>

                      </div>
                      <div class="time_start d-flex align-items-center">
                        <div class="time">
                          <div id="task_countdown_timer">00:0:00</div>
                        </div>
                        <div class="start">
                          <button class="start_time"><i class="fa-solid fa-play"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="see_details">
                      <a href="" class="d-flex justify-content-between">
                        See task details <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal for task details -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="modal__image text-center parent-container">
                      <a class="" href="images/modal-image.png">
                        <img id="preview_image" src="images/modal-image.png" alt="modal-image">
                      </a>
                    </div>
                    <div class="task_info_details">
                      <div class="row">
                        <div class="col-lg-8">
                          <div class="info_item">
                            <div class="icon">
                              <i class="fa-solid fa-folder-tree"></i>
                            </div>
                            <div class="details">
                              <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et rerum quaerat consequatur.</h4>
                            </div>
                          </div>
                          <div class="info_item">
                            <div class="icon">
                              <i class="fa-solid fa-text-slash"></i>
                            </div>
                            <div class="details">
                              <h4>Description</h4>
                              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti eius eos, quae ducimus consequuntur odio dolore voluptates at perferendis. Quod blanditiis modi mollitia vero dolores natus harum ad, placeat aliquid?</p>
                            </div>
                          </div>
                          <div class="info_item">
                            <div class="icon">
                              <i class="fa-solid fa-paperclip"></i>
                            </div>
                            <div class="details">
                              <h4>Attachment</h4>
                              <div class="d-flex attachment_main">
                                <div class="attachment_image">
                                  <img src="images/attach.png" alt="attach">
                                </div>
                                <div class="attachment_text">
                                  <a href="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, nulla.</a>
                                  <span>Added Jun 2 at 1:30 AM</span>
                                </div>
                              </div>
                              <div class="d-flex attachment_main">
                                <div class="attachment_image">
                                  <img src="images/attach.png" alt="attach">
                                </div>
                                <div class="attachment_text">
                                  <a href="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, nulla.0 Lorem ipsum, dolor sit ame</a>
                                  <span>Added Jun 2 at 1:30 AM</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="task_info_sidebar">
                            <div class="sidebar_item mb-3">
                              <h4 class="title">Add to Card</h4>
                              <button class="action_btn"><i class="fa-solid fa-user"></i> Members</button>
                            </div>
                            <div class="sidebar_item mb-3">
                              <h4 class="title">Automation</h4>
                              <button class="action_btn"><i class="fa-solid fa-plus"></i> Add button</button>
                            </div>
                            <div class="sidebar_item mb-3">
                              <h4 class="title">Actions</h4>
                              <button class="action_btn"><i class="fa-solid fa-compress"></i> Move</button>
                              <button class="action_btn"><i class="fa-regular fa-copy"></i> Copy</button>
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

<script>
  // create new task js
  $(".open_new_task").on("click", function() {
    $(".new_task_add_modal").addClass("active");
  })

  $(".close_new_task").on("click", function() {
    $(".new_task_add_modal").removeClass("active");
  })


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
    return columns.length > 4;
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

  // offcanvas menu js
  $(".filter_menu").on("click", function() {
    $(".offcanvas_overlay,.task_offcanvas_menu").addClass("offcanvas_active");
  });

  $(".offcanvas_overlay,.close_offcanvas").on("click", function() {
    $(".offcanvas_overlay,.task_offcanvas_menu").removeClass("offcanvas_active");
  });

  // mobile short task option menu
  $(".mobile_short_option_btn").on("click", function() {
    $(".mobile_task_menu_options").addClass("active");
  });

  $(".close_mobile_task_menu_options").on("click", function() {
    $(".mobile_task_menu_options").removeClass("active");
  });

  // task play and pause js
  const startButtons = document.querySelectorAll(".start_time");
  startButtons.forEach(startButton => {
    const icon = startButton.querySelector("i");
    let isPlaying = false;
    startButton.addEventListener("click", function() {
      isPlaying = !isPlaying;
      if (isPlaying) {
        icon.classList.remove("fa-play");
        icon.classList.add("fa-pause");
      } else {
        icon.classList.remove("fa-pause");
        icon.classList.add("fa-play");
      }
    });
  });
</script>