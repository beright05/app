<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Aria-Med HMS</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{asset('assets/img/ariamed.PNG')}}" />
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
											text-white"> <img alt="image" src="{{asset('assets/img/users/user-1.png')}}" class="rounded-circle">
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
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('assets/img/user.png')}}"
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
          </li>
          <li class="menu-header">Administration</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user-check"></i><span>admin mgt</span></a>
              <ul class="dropdown-menu">
                <li><a href="auth-login.html">General Setting</a></li>
             
                <li><a href="subscribe.html">Access Level Management</a></li>
                <li><a href="auth-login.html">Manage School</a></li>
                <li><a href="auth-login.html">SMS Settingt</a></li>
                <li><a href="auth-login.html">Email Setting</a></li>
                <li><a href="auth-login.html">Subscribe</a></li>
                <li><a href="auth-login.html">Backup Database</a></li>
                
              </ul>
          </li>
       
           
           
            
        </aside>
      </div>
