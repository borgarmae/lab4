<?php
// Start the PHP session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | User Profile</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  </head>

  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="../../index3.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
          <li class="nav-item">
            <a type="button" class="btn btn-dangers" href="logout.php">Logout
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.php" class="brand-link">
          <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"><?php echo $_SESSION['first_name'] . " " . $_SESSION['middle_name'] . $_SESSION['last_name']; ?></a>
            </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../../index.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../index2.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../index3.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard v3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="../widgets.php" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Widgets
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Layout Options
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">6</span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../layout/top-nav.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Top Navigation</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/top-nav-sidebar.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Top Navigation + Sidebar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/boxed.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Boxed</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/fixed-sidebar.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Sidebar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/fixed-sidebar-custom.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Sidebar <small>+ Custom Area</small></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/fixed-topnav.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Navbar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/fixed-footer.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Footer</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/collapsed-sidebar.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Collapsed Sidebar</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Charts
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../charts/chartjs.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>ChartJS</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../charts/flot.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Flot</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../charts/inline.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Inline</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../charts/uplot.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>uPlot</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                    UI Elements
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../UI/general.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>General</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/icons.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Icons</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/buttons.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Buttons</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/sliders.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sliders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/modals.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Modals & Alerts</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/navbar.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Navbar & Tabs</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/timeline.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Timeline</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/ribbons.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ribbons</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Forms
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../forms/general.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>General Elements</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../forms/advanced.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Advanced Elements</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../forms/editors.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Editors</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../forms/validation.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Validation</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Tables
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../tables/simple.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Simple Tables</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../tables/data.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>DataTables</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../tables/jsgrid.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>jsGrid</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-header">EXAMPLES</li>
              <li class="nav-item">
                <a href="../calendar.php" class="nav-link">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>
                    Calendar
                    <span class="badge badge-info right">2</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../gallery.php" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Gallery
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../kanban.php" class="nav-link">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>
                    Kanban Board
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Mailbox
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../mailbox/mailbox.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Inbox</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../mailbox/compose.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Compose</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../mailbox/read-mail.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Read</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Pages
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../examples/invoice.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Invoice</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/profile.php" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Profile</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/e-commerce.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>E-commerce</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/projects.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Projects</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/project-add.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Project Add</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/project-edit.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Project Edit</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/project-detail.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Project Detail</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/contacts.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Contacts</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/faq.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>FAQ</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/contact-us.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Contact us</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    Extras
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Login & Register v1
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="../examples/login.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Login v1</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../examples/register.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Register v1</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../examples/forgot-password.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Forgot Password v1</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../examples/recover-password.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Recover Password v1</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Login & Register v2
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="../examples/login-v2.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Login v2</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../examples/register-v2.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Register v2</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../examples/forgot-password-v2.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Forgot Password v2</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../examples/recover-password-v2.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Recover Password v2</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/lockscreen.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lockscreen</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/legacy-user-menu.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Legacy User Menu</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/language-menu.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Language Menu</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/404.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Error 404</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/500.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Error 500</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/pace.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pace</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/blank.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Blank Page</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../starter.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Starter Page</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-search"></i>
                  <p>
                    Search
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../search/simple.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Simple Search</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../search/enhanced.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Enhanced</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-header">MISCELLANEOUS</li>
              <li class="nav-item">
                <a href="../../iframe.php" class="nav-link">
                  <i class="nav-icon fas fa-ellipsis-h"></i>
                  <p>Tabbed IFrame Plugin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Documentation</p>
                </a>
              </li>
              <li class="nav-header">MULTI LEVEL EXAMPLE</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Level 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    Level 1
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Level 2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Level 2
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Level 3</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Level 3</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Level 3</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Level 2</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Level 1</p>
                </a>
              </li>
              <li class="nav-header">LABELS</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">Important</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Warning</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Informational</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Profile</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">User Profile</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center"><?php echo $_SESSION['user_name']; ?></h3>

                    <!-- <p class="text-muted text-center">Software Engineer</p> -->

                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>First name</b> <a class="float-right"><?php echo $_SESSION['first_name']; ?></a>
                      </li>
                      <li class="list-group-item">
                        <b>Middle name</b> <a class="float-right"><?php echo $_SESSION['middle_name']; ?></a>
                      </li>
                      <li class="list-group-item">
                        <b>Last name</b> <a class="float-right"><?php echo $_SESSION['last_name']; ?></a>
                      </li>
                      <li class="list-group-item">
                        <b>Email</b> <a class="float-right"><?php echo $_SESSION['email']; ?></a>
                      </li>
                    </ul>

                    <a href="#" class="btn btn-primary btn-block"><b>Edit details</b></a>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">About Me</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Education</strong>

                    <p class="text-muted">
                      B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>

                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                    <p class="text-muted">Malibu, California</p>

                    <hr>

                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                    <p class="text-muted">
                      <span class="tag tag-danger">UI Design</span>
                      <span class="tag tag-success">Coding</span>
                      <span class="tag tag-info">Javascript</span>
                      <span class="tag tag-warning">PHP</span>
                      <span class="tag tag-primary">Node.js</span>
                    </p>

                    <hr>

                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                      <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                      <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                            <span class="username">
                              <a href="#">Jonathan Burke Jr.</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Shared publicly - 7:30 PM today</span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome
                            tools to help create filler text for everyone from bacon lovers
                            to Charlie Sheen fans.
                          </p>

                          <p>
                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                            <span class="float-right">
                              <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comments (5)
                              </a>
                            </span>
                          </p>

                          <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->

                        <!-- Post -->
                        <div class="post clearfix">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                            <span class="username">
                              <a href="#">Sarah Ross</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Sent you a message - 3 days ago</span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome
                            tools to help create filler text for everyone from bacon lovers
                            to Charlie Sheen fans.
                          </p>

                          <form class="form-horizontal">
                            <div class="input-group input-group-sm mb-0">
                              <input class="form-control form-control-sm" placeholder="Response">
                              <div class="input-group-append">
                                <button type="submit" class="btn btn-danger">Send</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- /.post -->

                        <!-- Post -->
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                            <span class="username">
                              <a href="#">Adam Jones</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Posted 5 photos - 5 days ago</span>
                          </div>
                          <!-- /.user-block -->
                          <div class="row mb-3">
                            <div class="col-sm-6">
                              <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <div class="row">
                                <div class="col-sm-6">
                                  <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
                                  <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                  <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                                  <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->

                          <p>
                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                            <span class="float-right">
                              <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comments (5)
                              </a>
                            </span>
                          </p>

                          <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->
                      </div>
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        <div class="timeline timeline-inverse">
                          <!-- timeline time label -->
                          <div class="time-label">
                            <span class="bg-danger">
                              10 Feb. 2014
                            </span>
                          </div>
                          <!-- /.timeline-label -->
                          <!-- timeline item -->
                          <div>
                            <i class="fas fa-envelope bg-primary"></i>

                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i> 12:05</span>

                              <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                              <div class="timeline-body">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                quora plaxo ideeli hulu weebly balihoo...
                              </div>
                              <div class="timeline-footer">
                                <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                              </div>
                            </div>
                          </div>
                          <!-- END timeline item -->
                          <!-- timeline item -->
                          <div>
                            <i class="fas fa-user bg-info"></i>

                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                              <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                              </h3>
                            </div>
                          </div>
                          <!-- END timeline item -->
                          <!-- timeline item -->
                          <div>
                            <i class="fas fa-comments bg-warning"></i>

                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                              <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                              <div class="timeline-body">
                                Take me to your leader!
                                Switzerland is small and neutral!
                                We are more like Germany, ambitious and misunderstood!
                              </div>
                              <div class="timeline-footer">
                                <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                              </div>
                            </div>
                          </div>
                          <!-- END timeline item -->
                          <!-- timeline time label -->
                          <div class="time-label">
                            <span class="bg-success">
                              3 Jan. 2014
                            </span>
                          </div>
                          <!-- /.timeline-label -->
                          <!-- timeline item -->
                          <div>
                            <i class="fas fa-camera bg-purple"></i>

                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                              <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                              <div class="timeline-body">
                                <img src="https://placehold.it/150x100" alt="...">
                                <img src="https://placehold.it/150x100" alt="...">
                                <img src="https://placehold.it/150x100" alt="...">
                                <img src="https://placehold.it/150x100" alt="...">
                              </div>
                            </div>
                          </div>
                          <!-- END timeline item -->
                          <div>
                            <i class="far fa-clock bg-gray"></i>
                          </div>
                        </div>
                      </div>
                      <!-- /.tab-pane -->

                      <div class="tab-pane" id="settings">
                        <form action="profile-index.php" method="post" class="form-horizontal">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                              <input type="text" name="phone_number" class="form-control" placeholder="Phone number">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Gender</label>
                            <div class="form-check form-check-inline">
                              <label><input type="radio" name="gender" class="form-check-label" value="male"> Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <label><input type="radio" name="gender" class="form-check-label" value="female"> Female</label>
                            </div>
                          </div>

                          <div class=" form-group row">
                            <label class="col-sm-2 col-form-label">Birthday</label>
                            <div class="col-sm-15">
                              <input type="text" name="birth_month" class="form-control" placeholder="Month">
                            </div>
                            <div class="col-sm-20">
                              <input type="text" name="birth_day" class="form-control" placeholder="Day">
                            </div>

                            <div class="col-sm-25">
                              <input type="text" name="birth_year" class="form-control" placeholder="Year">
                            </div>
                          </div>



                          <div class="form-group row">
                            <tr>
                              <th class="col-sm-2 col-form-label">Address</th>
                              <td class="col-sm-40">
                                <input type="text" name="address" class="form-control" placeholder="Street Name, Building, House No.">
                              </td>
                            </tr>
                            <tr>
                              <th class="col-sm-25">Barangay</th>
                              <td class="col-sm-25">
                                <input type="text" name="barangay" class="form-control" placeholder="Barangay">
                              </td>
                            </tr>
                            <tr>
                              <th class="col-sm-25">City</th>
                              <td class="col-sm-25">
                                <input type="text" name="city" class="form-control" placeholder="City">
                              </td>
                            </tr>
                            <tr>
                              <th class="col-sm-20">Province</th>
                              <td class="col-sm-20">
                                <input type="text" name="province" class="form-control" placeholder="Province">
                              </td>
                            </tr>
                            <tr>
                              <th class="col-sm-15">Region</th>
                              <td class="col-sm-15">
                                <input type="text" name="region" class="form-control" placeholder="Region">
                              </td>
                            </tr>
                            <tr>
                              <th class="col-sm-25">Zip Code</th>
                              <td class="col-sm-25">
                                <input type="text" name="zip_code" class="form-control" placeholder="Zip Code">
                              </td>
                            </tr>
                          </div>

                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
      </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
  </body>

  </html>
<?php
} else {
  // If the user is not logged in then he will be redirected to the login page
  header("Location: login-v2.php");
  exit();
}
?>