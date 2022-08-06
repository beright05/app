<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Aria-Med HMS</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.min.css')); ?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/components.css')); ?>">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
  <link rel='shortcut icon' type='image/x-icon' href="<?php echo e(asset('assets/img/ariamed.PNG')); ?>" />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        

      <div class="col-lg-1">
            <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
               
                <a href="#" data-toggle="dropdown" class="btn btn-warning">Website</a>
            </div>

		</div>
        <div class="col-lg-2">
            <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                <a href="#" class="btn btn-primary">Self Service</a>
            </div>

		</div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
              <span class="badge headerBadge1">
                6 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
											text-white"> <img alt="image" src="<?php echo e(asset('assets/img/users/user-1.png')); ?>" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                      Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Request for leave
                      application</span>
                    <span class="time">5 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                      Ryan</span> <span class="time messege-text">Your payment invoice is
                      generated.</span> <span class="time">12 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                      Smith</span> <span class="time messege-text">hii John, I have upload
                      doc
                      related to task.</span> <span class="time">30
                      Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                      Joshi</span> <span class="time messege-text">Please do as specify.
                      Let me
                      know if you have any query.</span> <span class="time">1
                      Days Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Client Requirements</span>
                    <span class="time">2 Days Ago</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                      Sugiharto</b> are now friends <span class="time">10 Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                      class="fas
												fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?php echo e(asset('assets/img/user.png')); ?>"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="auth-login.html" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="assets/img/logo3.PNG" class="header-logo" /> <!--<span
                class="logo-name">Aria-Med</span>-->
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Front-Desk</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="widget-chart.html">Search Patient</a></li>
                <li><a class="nav-link" href="widget-data.html">Appointment</a></li>
                <li><a class="nav-link" href="widget-data.html">Encounter History</a></li>
                <li><a class="nav-link" href="widget-data.html">Upload File</a></li>
                <li><a class="nav-link" href="widget-data.html">Encounter report</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Nursing</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="chat.html">Vitals</a></li>
                <li><a class="nav-link" href="portfolio.html">injection</a></li>
                <li><a class="nav-link" href="blog.html">Dressing/Procedure</a></li>
                <li><a class="nav-link" href="calendar.html">Immunization</a></li>
                <li><a class="nav-link" href="calendar.html">Antenatal Clinics</a></li>
                <li><a class="nav-link" href="calendar.html">Admission</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Doctors / Department</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="email-inbox.html">Opd Clinics</a></li>
                <li><a class="nav-link" href="email-compose.html">Admission</a></li>
                <li><a class="nav-link" href="email-read.html">Patient Encounter Report</a></li>
              </ul>
            </li>
            <li class="menu-header">Diagnosis Center</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Laboratory
                </span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="alert.html">Pending Request</a></li>
                <li><a class="nav-link" href="badge.html">Laboratory Result</a></li>
                <li><a class="nav-link" href="breadcrumb.html">Test Reporting Parameter</a></li>
                <li><a class="nav-link" href="buttons.html">Test Administration</a></li>
                <li><a class="nav-link" href="collapse.html">Test Category</a></li>
                <li><a class="nav-link" href="dropdown.html">Consumables Requisition</a></li>
                <li><a class="nav-link" href="checkbox-and-radio.html">Lab Report</a></li>
               <li><a class="nav-link" href="checkbox-and-radio.html">Test Request</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="shopping-bag"></i><span>Radiology</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="avatar.html">Pending Request (X-RAY)</a></li>
                <li><a class="nav-link" href="avatar.html">Pending Request (CT SCAN)</a></li>
                <li><a class="nav-link" href="avatar.html">Pending Request (ULTRASOUND)</a></li>
                <li><a class="nav-link" href="avatar.html">Pending Request (ECG)</a></li>
                <li><a class="nav-link" href="card.html">Test Result</a></li>
                <li><a class="nav-link" href="modal.html">Test Reporting Parameter</a></li>
                <li><a class="nav-link" href="sweet-alert.html">Test Administration</a></li>
                <li><a class="nav-link" href="toastr.html">Radiology Report</a></li>
                
              </ul>
            </li>
           
            <li class="menu-header">Pharmarcy Department</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Dispensary</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="basic-form.html">Opd Dispensary</a></li>
                <li><a class="nav-link" href="forms-advanced-form.html">inpatient Dispensary</a></li>
                <li><a class="nav-link" href="form-wizard.html">POs</a></li>
                 <li><a class="nav-link" href="editable-table.html">Requistion</a></li>
                <li><a class="nav-link" href="forms-editor.html">Dispensary Inventory</a></li>
                <li><a class="nav-link" href="forms-validation.html">Dispensary Report</a></li>
                <li><a class="nav-link" href="form-wizard.html">Dispensary Expiry Report</a></li>
                
              </ul>
            </li>
           <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Pharmacy Store</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="editable-table.html">Requistion</a></li>
                <li><a class="nav-link" href="basic-table.html">Vendors</a></li>
                <li><a class="nav-link" href="advance-table.html">Make Purchase</a></li>
                <li><a class="nav-link" href="datatables.html">Confirm Received Drugs</a></li>
                <li><a class="nav-link" href="export-table.html">Drug Expiry Report</a></li>
                <li><a class="nav-link" href="editable-table.html">Drug Usage</a></li>
                <li><a class="nav-link" href="editable-table.html">Inventory</a></li>

              </ul>
            </li>
           <!-- <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="pie-chart"></i><span>Charts</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="chart-amchart.html">amChart</a></li>
                <li><a class="nav-link" href="chart-apexchart.html">apexchart</a></li>
                <li><a class="nav-link" href="chart-echart.html">eChart</a></li>
                <li><a class="nav-link" href="chart-chartjs.html">Chartjs</a></li>
                <li><a class="nav-link" href="chart-sparkline.html">Sparkline</a></li>
                <li><a class="nav-link" href="chart-morris.html">Morris</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="feather"></i><span>Icons</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="icon-font-awesome.html">Font Awesome</a></li>
                <li><a class="nav-link" href="icon-material.html">Material Design</a></li>
                <li><a class="nav-link" href="icon-ionicons.html">Ion Icons</a></li>
                <li><a class="nav-link" href="icon-feather.html">Feather Icons</a></li>
                <li><a class="nav-link" href="icon-weather-icon.html">Weather Icon</a></li>
              </ul>
            </li>-->
            <li class="menu-header">Billing Dept</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="image"></i><span>HMO Authorizaion</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="light-gallery.html">Pending Authorization</a></li>
                <li><a href="gallery1.html">Approval Report</a></li>
                 <li><a href="gallery1.html">Bill Summary</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="flag"></i><span>Bills</span></a>
              <ul class="dropdown-menu">
                <li><a href="carousel.html">Review Bill</a></li>
                <li><a class="nav-link" href="owl-carousel.html">Patient Bill Reports</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="timeline.html"><i data-feather="sliders"></i><span>Service</span></a></li>
           <!-- <li class="menu-header">Maps</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="map"></i><span>Google
                  Maps</span></a>
              <ul class="dropdown-menu">
                <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                <li><a href="gmaps-marker.html">Marker</a></li>
                <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                <li><a href="gmaps-route.html">Route</a></li>
                <li><a href="gmaps-simple.html">Simple</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="vector-map.html"><i data-feather="map-pin"></i><span>Vector
                  Map</span></a></li>-->
            <li class="menu-header">Accounting Dept</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user-check"></i><span>Cashier</span></a>
              <ul class="dropdown-menu">
                <li><a href="auth-login.html">Cashier Point</a></li>
                <li><a href="auth-register.html">Deposite</a></li>
                <li><a href="auth-forgot-password.html">Refund</a></li>
                <li><a href="auth-reset-password.html">Expenses</a></li>
                <li><a href="subscribe.html">Daily Cashier Report</a></li>
                <li><a href="subscribe.html">Revenue Report</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="alert-triangle"></i><span>Accountant</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="errors-503.html">Financial Year</a></li>
                <li><a class="nav-link" href="errors-403.html">Chart of Account</a></li>
                <li><a class="nav-link" href="errors-404.html">Sub Account</a></li>
                <li><a class="nav-link" href="errors-500.html">Predefined Accounts</a></li>
                <li><a class="nav-link" href="errors-500.html">Opening Balance</a></li>
                <li><a class="nav-link" href="errors-500.html">Debt Voucher</a></li>
                <li><a class="nav-link" href="errors-500.html">Credit Voucher</a></li>
                <li><a class="nav-link" href="errors-500.html">Contra Voucher</a></li>
                <li><a class="nav-link" href="errors-500.html">Journal Voucher</a></li>
                <li><a class="nav-link" href="errors-500.html">Bank Reconciliation</a></li>
                <li><a class="nav-link" href="errors-500.html">Voucher Approval</a></li>
                <li><a class="nav-link" href="errors-500.html">Account Report</a></li>
              </ul>
            </li>
          <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="anchor"></i><span>
                  Bank</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="create-post.html">Bank</a></li>
                <li><a class="nav-link" href="posts.html">Add Bank</a></li>
                <li><a class="nav-link" href="profile.html">Bank List</a></li>
                
              </ul>
            </li>
          
                  
         <li class="menu-header">Human Resource</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user-check"></i><span>HR & Payroll</span></a>
              <ul class="dropdown-menu">
                <li><a href="auth-login.html">Attendance Form</a></li>
                <li><a href="auth-register.html">Monthly Attendance</a></li>
                <li><a href="auth-forgot-password.html">Missing Attendance</a></li>
                <li><a href="auth-reset-password.html">Lateness and early</a></li>
                <li><a href="subscribe.html">Attendance Log</a></li>
                <li><a href="subscribe.html">Department</a></li>
                <li><a href="subscribe.html">Leave</a></li>
                <li><a href="subscribe.html">Payroll</a></li>
                   <ul class="dropdown-menu">
                <li><a href="auth-login.html">Salary Advance</a></li>
                <li><a href="auth-login.html">Salary Generate</a></li>
                <li><a href="auth-login.html">Manage Employee Salary</a></li>
                
              </ul>
                
              </ul>
           </li>
           <li class="menu-header">Payroll</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user-check"></i><span>Salary Advance</span></a>
              <ul class="dropdown-menu">
                <li><a href="auth-login.html">View All Report</a></li>
                
              </ul>
            </li>
          <li class="menu-header">Reports</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user-check"></i><span>Reports</span></a>
              <ul class="dropdown-menu">
                <li><a href="auth-login.html">View All Report</a></li>
                
              </ul>
            </li>
          <li class="menu-header">Settings</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user-check"></i><span>User Mgt</span></a>
              <ul class="dropdown-menu">
                <li><a href="auth-login.html">Vaccine Management</a></li>
                <li><a href="auth-register.html">Ward Management</a></li>
                <li><a href="auth-forgot-password.html">Bed Management</a></li>
                <li><a href="auth-reset-password.html">User management</a></li>
              
                <li><a href="auth-login.html">Department Management</a></li>
                <li><a href="auth-login.html">Configure Patient</a></li>
                <li><a href="auth-login.html">Discharge Patient</a></li>
                
              </ul>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Apps</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="chat.html">Chat</a></li>
                 <li><a class="nav-link" href="multiple-upload.html">Upload Casenote</a></li>
                <li><a class="nav-link" href="pricing.html">Pricing</a></li>
                
                <li><a class="nav-link" href="calendar.html">Calendar</a></li>
              </ul>
            </li>   
          </li>
          <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Email</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="email-inbox.html">Inbox</a></li>
                <li><a class="nav-link" href="email-compose.html">Compose</a></li>
                <li><a class="nav-link" href="email-read.html">read</a></li>
              </ul>
            </li>
          <li class="menu-header">Administration</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user-check"></i><span>admin mgt</span></a>
              <ul class="dropdown-menu">
                <li><a href="auth-login.html">General Setting</a></li>
             
                <li><a href="subscribe.html">Access Level Management</a></li>
                <li><a href="auth-login.html">Manage Hospital</a></li>
                <li><a href="auth-login.html">SMS Settingt</a></li>
                <li><a href="auth-login.html">Email Setting</a></li>
                <li><a href="auth-login.html">Subscribe</a></li>
                <li><a href="auth-login.html">Backup Database</a></li>
                
              </ul>
          </li>
       
           
           
            
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">New Registration</h5>
                          <h2 class="mb-3 font-18">258</h2>
                          <p class="mb-0"><span class="col-green">10%</span> Increase</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="<?php echo e(asset('assets/img/banner/1.png')); ?>" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15"> Patient Visit Today</h5>
                          <h2 class="mb-3 font-18">1,287</h2>
                          <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="<?php echo e(asset('assets/img/banner/2.png')); ?>" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Appointment</h5>
                          <h2 class="mb-3 font-18">128</h2>
                          <p class="mb-0"><span class="col-green">18%</span>
                            Increase</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="<?php echo e(asset('assets/img/banner/3.png')); ?>" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Online Consultation</h5>
                         
                          <p class="mb-0"><span class="col-green">42%</span> Increase</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="<?php echo e(asset('assets/img/banner/4.png')); ?>" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header">
                  <h4>Revenue chart</h4>
                  <div class="card-header-action">
                    <div class="dropdown">
                      <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                      <div class="dropdown-menu">
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i>
                          Delete</a>
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary">View All</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-9">
                      <div id="chart1"></div>
                      <div class="row mb-0">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
                                class="col-green"></i>
                              <h5 class="m-b-0">#675,000</h5>
                              <p class="text-muted font-14 m-b-0">Weekly Earnings</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><i data-feather="arrow-down-circle"
                                class="col-orange"></i>
                              <h5 class="m-b-0">#96,587</h5>
                              <p class="text-muted font-14 m-b-0">Monthly Earnings</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
                                class="col-green"></i>
                              <h5 class="mb-0 m-b-0">$14,500,965</h5>
                              <p class="text-muted font-14 m-b-0">Yearly Earnings</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row mt-5">
                        <div class="col-7 col-xl-7 mb-3">Total customers</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">8,257</span>
                          <sup class="col-green">+09%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">Total Income</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">#9,012,857</span>
                          <sup class="text-danger">-18%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">Project completed</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">28</span>
                          <sup class="col-green">+16%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">Total expense</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">#5,000,287</span>
                          <sup class="col-green">+09%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">New Customers</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">684</span>
                          <sup class="col-green">+22%</sup>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Revenue</h4>
                </div>
                <div class="card-body">
                  <div id="chart4" class="chartsh"></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Patients Report</h4>
                </div>
                <div class="card-body">
                  <div class="summary">
                    <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
                      <div id="chart3" class="chartsh"></div>
                    </div>
                    <div data-tab-group="summary-tab" id="summary-text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Emergency Cases</h4>
                </div>
                <div class="card-body">
                  <div id="chart2" class="chartsh"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Online Consultation</h4>
                  <div class="card-header-form">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th class="text-center">
                          <div class="custom-checkbox custom-checkbox-table custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                              class="custom-control-input" id="checkbox-all">
                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                          </div>
                        </th>
                        <th>Task Name</th>
                        <th>Members</th>
                        <th>Task Status</th>
                        <th>Assigh Date</th>
                        <th>Due Date</th>
                        <th>Priority</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        <td class="p-0 text-center">
                          <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                              id="checkbox-1">
                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                          </div>
                        </td>
                        <td>Create a mobile app</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0 m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-8.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-9.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="John Deo"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-10.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Sarah Smith"></li>
                            <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                          </ul>
                        </td>
                        <td class="align-middle">
                          <div class="progress-text">50%</div>
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-success" data-width="50%"></div>
                          </div>
                        </td>
                        <td>2018-01-20</td>
                        <td>2019-05-28</td>
                        <td>
                          <div class="badge badge-success">Low</div>
                        </td>
                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td class="p-0 text-center">
                          <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                              id="checkbox-2">
                            <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                          </div>
                        </td>
                        <td>Redesign homepage</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0 m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-1.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-2.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="John Deo"></li>
                            <li class="avatar avatar-sm"><span class="badge badge-primary">+2</span></li>
                          </ul>
                        </td>
                        <td class="align-middle">
                          <div class="progress-text">40%</div>
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-danger" data-width="40%"></div>
                          </div>
                        </td>
                        <td>2017-07-14</td>
                        <td>2018-07-21</td>
                        <td>
                          <div class="badge badge-danger">High</div>
                        </td>
                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td class="p-0 text-center">
                          <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                              id="checkbox-3">
                            <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                          </div>
                        </td>
                        <td>Backup database</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0 m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-3.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-4.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="John Deo"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-5.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Sarah Smith"></li>
                            <li class="avatar avatar-sm"><span class="badge badge-primary">+3</span></li>
                          </ul>
                        </td>
                        <td class="align-middle">
                          <div class="progress-text">55%</div>
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-purple" data-width="55%"></div>
                          </div>
                        </td>
                        <td>2019-07-25</td>
                        <td>2019-08-17</td>
                        <td>
                          <div class="badge badge-info">Average</div>
                        </td>
                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td class="p-0 text-center">
                          <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                              id="checkbox-4">
                            <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                          </div>
                        </td>
                        <td>Android App</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0 m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-7.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="John Deo"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-8.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Sarah Smith"></li>
                            <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                          </ul>
                        </td>
                        <td class="align-middle">
                          <div class="progress-text">70%</div>
                          <div class="progress" data-height="6">
                            <div class="progress-bar" data-width="70%"></div>
                          </div>
                        </td>
                        <td>2018-04-15</td>
                        <td>2019-07-19</td>
                        <td>
                          <div class="badge badge-success">Low</div>
                        </td>
                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td class="p-0 text-center">
                          <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                              id="checkbox-5">
                            <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                          </div>
                        </td>
                        <td>Logo Design</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0 m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-9.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-10.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="John Deo"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-2.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Sarah Smith"></li>
                            <li class="avatar avatar-sm"><span class="badge badge-primary">+2</span></li>
                          </ul>
                        </td>
                        <td class="align-middle">
                          <div class="progress-text">45%</div>
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-cyan" data-width="45%"></div>
                          </div>
                        </td>
                        <td>2017-02-24</td>
                        <td>2018-09-06</td>
                        <td>
                          <div class="badge badge-danger">High</div>
                        </td>
                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td class="p-0 text-center">
                          <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                              id="checkbox-6">
                            <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                          </div>
                        </td>
                        <td>Ecommerce website</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0 m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-8.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-9.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="John Deo"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="<?php echo e(asset('assets/img/users/user-10.png')); ?>" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Sarah Smith"></li>
                            <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                          </ul>
                        </td>
                        <td class="align-middle">
                          <div class="progress-text">30%</div>
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-orange" data-width="30%"></div>
                          </div>
                        </td>
                        <td>2018-01-20</td>
                        <td>2019-05-28</td>
                        <td>
                          <div class="badge badge-info">Average</div>
                        </td>
                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-12 col-xl-6">
              <!-- Support tickets -->
              <div class="card">
                <div class="card-header">
                  <h4>Patient Feedback</h4>
                  <form class="card-header-form">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                  </form>
                </div>
                <div class="card-body">
                  <div class="support-ticket media pb-1 mb-3">
                    <img src="<?php echo e(asset('assets/img/users/user-1.png')); ?>" class="user-img mr-2" alt="">
                    <div class="media-body ml-3">
                      <div class="badge badge-pill badge-success mb-1 float-right">Feature</div>
                      <span class="font-weight-bold">#89754</span>
                      <a href="javascript:void(0)">Please add advance table</a>
                      <p class="my-1">Hi, can you please add new table for advan...</p>
                      <small class="text-muted">Created by <span class="font-weight-bold font-13">John
                          Deo</span>
                        &nbsp;&nbsp; - 1 day ago</small>
                    </div>
                  </div>
                  <div class="support-ticket media pb-1 mb-3">
                    <img src="<?php echo e(asset('assets/img/users/user-2.png')); ?>" class="user-img mr-2" alt="">
                    <div class="media-body ml-3">
                      <div class="badge badge-pill badge-warning mb-1 float-right">Bug</div>
                      <span class="font-weight-bold">#57854</span>
                      <a href="javascript:void(0)">Select item not working</a>
                      <p class="my-1">please check select item in advance form not work...</p>
                      <small class="text-muted">Created by <span class="font-weight-bold font-13">Sarah
                          Smith</span>
                        &nbsp;&nbsp; - 2 day ago</small>
                    </div>
                  </div>
                  <div class="support-ticket media pb-1 mb-3">
                    <img src="<?php echo e(asset('assets/img/users/user-3.png')); ?>" class="user-img mr-2" alt="">
                    <div class="media-body ml-3">
                      <div class="badge badge-pill badge-primary mb-1 float-right">Query</div>
                      <span class="font-weight-bold">#85784</span>
                      <a href="javascript:void(0)">Are you provide template in Angular?</a>
                      <p class="my-1">can you provide template in latest angular 8.</p>
                      <small class="text-muted">Created by <span class="font-weight-bold font-13">Ashton Cox</span>
                        &nbsp;&nbsp; -2 day ago</small>
                    </div>
                  </div>
                  <div class="support-ticket media pb-1 mb-3">
                    <img src="<?php echo e(asset('assets/img/users/user-6.png')); ?>" class="user-img mr-2" alt="">
                    <div class="media-body ml-3">
                      <div class="badge badge-pill badge-info mb-1 float-right">Enhancement</div>
                      <span class="font-weight-bold">#25874</span>
                      <a href="javascript:void(0)">About template page load speed</a>
                      <p class="my-1">Hi, John, can you work on increase page speed of template...</p>
                      <small class="text-muted">Created by <span class="font-weight-bold font-13">Hasan
                          Basri</span>
                        &nbsp;&nbsp; -3 day ago</small>
                    </div>
                  </div>
                </div>
                <a href="javascript:void(0)" class="card-footer card-link text-center small ">View
                  All</a>
              </div>
              <!-- Support tickets -->
            </div>
            <div class="col-md-6 col-lg-12 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4>HMO Authorization</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover mb-0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Client Name</th>
                          <th>Date</th>
                          <th>Payment Method</th>
                          <th>Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>John Doe </td>
                          <td>11-08-2018</td>
                          <td>NEFT</td>
                          <td>$258</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Cara Stevens
                          </td>
                          <td>15-07-2018</td>
                          <td>PayPal</td>
                          <td>$125</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>
                            Airi Satou
                          </td>
                          <td>25-08-2018</td>
                          <td>RTGS</td>
                          <td>$287</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>
                            Angelica Ramos
                          </td>
                          <td>01-05-2018</td>
                          <td>CASH</td>
                          <td>$170</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>
                            Ashton Cox
                          </td>
                          <td>18-04-2018</td>
                          <td>NEFT</td>
                          <td>$970</td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>
                            John Deo
                          </td>
                          <td>22-11-2018</td>
                          <td>PayPal</td>
                          <td>$854</td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>
                            Hasan Basri
                          </td>
                          <td>07-09-2018</td>
                          <td>Cash</td>
                          <td>$128</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="berighthillstech.com">Beright Hills Tech</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="<?php echo e(asset('assets/js/app.min.js')); ?>"></script>
  <!-- JS Libraies -->
  <script src="<?php echo e(asset('assets/bundles/apexcharts/apexcharts.min.js')); ?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo e(asset('assets/js/page/index.js')); ?>"></script>
  <!-- Template JS File -->
  <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
  <!-- Custom JS File -->
  <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
</body>


<!-- index.html  21 July 2022 03:47:04 GMT -->
</html><?php /**PATH C:\xamppsch\htdocs\myapp\resources\views/welcome.blade.php ENDPATH**/ ?>