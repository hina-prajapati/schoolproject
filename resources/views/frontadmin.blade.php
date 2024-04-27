<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets0/img/favicon.png" rel="icon">
  <link href="/assets0/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets0/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets0/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets0/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets0/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/assets0/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/assets0/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets0/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets0/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" class="">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ url('dashboard') }}" class="logo d-flex align-items-center">
        <img src="/assets0/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="/assets0/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="/assets0/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="/assets0/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="/assets0/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Posttype</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/posttype/posttype_add') }}">
              <i class="bi bi-circle"></i><span>Posttype Add</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/posttype/posttype_list') }}">
              <i class="bi bi-circle"></i><span>Posttype List</span>
            </a>
          </li>
          
        </ul>
      </li> -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Events</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/events/event_add') }}">
              <i class="bi bi-circle"></i><span>Create Events</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/events/event_list') }}">
              <i class="bi bi-circle"></i><span>All Events</span>
            </a>
          </li>
        </ul>

        <a class="nav-link collapsed" data-bs-target="#components-navad" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gallery</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-navad" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/gallery/add_images') }}">
              <i class="bi bi-circle"></i><span>Add Images</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/gallery/list_images') }}">
              <i class="bi bi-circle"></i><span>All Images</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/gallery/list_imagess') }}">
              <i class="bi bi-circle"></i><span>Multiple Uploaded Images</span>
            </a>
          </li>
        </ul>

          <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-navd" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Notice</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-navd" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/notices/create_notice') }}">
              <i class="bi bi-circle"></i><span>Create Notice</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/notices/all_notice') }}">
              <i class="bi bi-circle"></i><span>All Notice</span>
            </a>
          </li>
          
        </ul>
      </li>



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-navdd" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Home Banner</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-navdd" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/banner/add') }}">
              <i class="bi bi-circle"></i><span>Create Banner</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/banner/list') }}">
              <i class="bi bi-circle"></i><span>All Banner</span>
            </a>
          </li>
          
        </ul>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-navadd" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>About Banner</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-navadd" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/abouts/add') }}">
              <i class="bi bi-circle"></i><span>Create Banner</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/abouts/list') }}">
              <i class="bi bi-circle"></i><span>All Banner</span>
            </a>
          </li>
          
        </ul>
      </li>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-navdm" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Bulletin Board</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-navdm" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/bulletinboards/create') }}">
              <i class="bi bi-circle"></i><span>Create Notice</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/bulletinboards/list') }}">
              <i class="bi bi-circle"></i><span>All Notice</span>
            </a>
          </li>
          
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-navdam" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Contacts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-navdam" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/contacts/add') }}">
              <i class="bi bi-circle"></i><span>Create Contact</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/contacts/list') }}">
              <i class="bi bi-circle"></i><span>All Contact</span>
            </a>
          </li>
          
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-navdmm" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Admissions Notice</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-navdmm" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/addmissionNotice/add') }}">
              <i class="bi bi-circle"></i><span>Create Notice</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/addmissionNotice/list') }}">
              <i class="bi bi-circle"></i><span>All Notice</span>
            </a>
          </li>
          
        </ul>
      </li>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-navdmom" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Achievement</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-navdmom" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/achievement/add') }}">
              <i class="bi bi-circle"></i><span>Create Achievement</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/achievement/list') }}">
              <i class="bi bi-circle"></i><span>All Achievement</span>
            </a>
          </li>
          <!-- <li>
        <a href="{{ url('/achievements/list2') }}">
            <i class="bi bi-circle"></i><span>Multiple Uploaded Images</span>
        </a>
       </li> -->

        </ul>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-navdvmom" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>PTA</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-navdvmom" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/pta/add') }}">
              <i class="bi bi-circle"></i><span>Create PTA</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/pta/list') }}">
              <i class="bi bi-circle"></i><span>All PTA</span>
            </a>
          </li>
          <!-- <li>
        <a href="{{ url('/achievements/list2') }}">
            <i class="bi bi-circle"></i><span>Multiple Uploaded Images</span>
        </a>
       </li> -->

        </ul>
      </li>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Post</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ url('/post/post_add') }}">
              <i class="bi bi-circle"></i><span>Post Add</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/post/post_list') }}">
              <i class="bi bi-circle"></i><span>Post List</span>
            </a>
          </li>
          
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
</li> -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li> -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li> -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li> -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->



  @yield('main-content')
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets0/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/assets0/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets0/vendor/chart.js/chart.umd.js"></script>
  <script src="/assets0/vendor/echarts/echarts.min.js"></script>
  <script src="/assets0/vendor/quill/quill.min.js"></script>
  <script src="/assets0/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/assets0/vendor/tinymce/tinymce.min.js"></script>
  <script src="/assets0/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets0/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
         $('table').DataTable();
      
      </script>
      

      <script>
        $(document).ready(function() {
  $('#summernote').summernote();
  var plainText = $($("#summernote").summernote("code")).text()
});
      </script>
      <script>
    // Hide success message after 5 seconds
    setTimeout(function() {
        document.getElementById('successMessage').style.display = 'none';
    }, 5000); // 5000 milliseconds = 5 seconds

    // Hide error message after 5 seconds
    setTimeout(function() {
        document.getElementById('errorMessage').style.display = 'none';
    }, 5000); // 5000 milliseconds = 5 seconds
</script>

</body>

</html>