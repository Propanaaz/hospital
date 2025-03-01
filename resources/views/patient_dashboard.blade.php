
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Patient Biodata </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} " rel="stylesheet">
  <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/quill/quill.snow.css') }} " rel="stylesheet">
  <link href="{{ url('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

          <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/safety-at-work.png" alt="">
              <span class="d-none d-lg-block"><span class="" ></span>TO'NASH
                  HOSPITAL</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
          </div><!-- End Logo -->



          <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

              <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                  {{-- <i class="bi bi-search"></i> --}}
                </a>
              </li><!-- End Search Icon-->

              <li class="nav-item dropdown">

              </li><!-- End Notification Nav -->

              <li class="nav-item dropdown">



                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">


                  <li class="message-item">
                    <a href="#">
                      <div>
                        <h4> {{ auth()->user()->name }}</h4>

                      </div>
                    </a>
                  </li>

                </ul><!-- End Messages Dropdown Items -->

              </li><!-- End Messages Nav -->

              <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <span class="d-none d-md-block dropdown-toggle ps-2">
                        {{ auth()->user()->name }}
                    </span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                  <li class="dropdown-header">
                    <h6>
                    </h6>
                    <span><a href="{{ route('logout') }}">Sign Out</a> </span>
                </li>
                  <li>
                  </li>

                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">

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
        <a class="nav-link collapsed" href="{{ route('all_patient') }}">
          <i class="bi bi-grid"></i>
          <span>Admin Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Update Patient Record</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content  " data-bs-parent="#sidebar-nav">

            <li>
            <a href="{{ route('patient_dashboard',["id"=>$biodata['user_id']]) }}">
              <i class="bi bi-circle"></i><span>Biodata</span>
            </a>
          </li>
          <li>
            <a href="{{ route('medical_history',["id"=>$biodata['user_id']]) }}">
              <i class="bi bi-circle"></i><span>Medical History</span>
            </a>
          </li>

          <li>
            <a href="{{ route('pregnancy_history',["id"=>$biodata['user_id']]) }}">
              <i class="bi bi-circle"></i><span>Pregnancy History</span>
            </a>
          </li>

          <li>
            <a href="{{ route('preg_biodata',["id"=>$biodata['user_id']]) }}">
              <i class="bi bi-circle"></i><span>Pregnancy Biodata</span>
            </a>
          </li>

          <li>
            <a href="{{ route('scheme',["id"=>$biodata['user_id']]) }}">
              <i class="bi bi-circle"></i><span>Insurance Scheme</span>
            </a>
          </li>

          <li>
            <a href="{{ route('consultant',["id"=>$biodata['user_id']]) }}">
              <i class="bi bi-circle"></i><span>Consultant</span>
            </a>
          </li>

          <li>
            <a href="{{ route('specialpoint',["id"=>$biodata['user_id']]) }}">
              <i class="bi bi-circle"></i><span>Special point</span>
            </a>
          </li>

          <li>
            <a href="{{ route('test',["id"=>$biodata['user_id']]) }}">
              <i class="bi bi-circle"></i><span>Test</span>
            </a>
          </li>

          <li>
            <a href="{{ route('ward',["id"=>$biodata['user_id']]) }}">
              <i class="bi bi-circle"></i><span>Ward</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->



      <!-- End Login Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Patient Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">Patient Dashboard</li>
          <li class="breadcrumb-item active">Update Record</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update Record</h5>







              @if($errors->any())
              @foreach($errors->all() as $errors)
              <ul>
                  <li>{{$errors}}</li>

              </ul>
              @endforeach
              @endif

                  @if(session()-> has("message"))
                  <h5 class="text-danger">{{session()->get("message")}}</h5>

              @endif

              <!-- Browser Default Validation -->
              <form class="row g-3" action="{{ route('send_patient_dashboard') }}" method="POST">
@csrf

                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">File No.</label>
                    <input type="text" class="form-control" id="validationDefault02" name="user_id" value="{{ $biodata['user_id'] }}" required disabled>
                  </div>

<input type="hidden" value="{{ $biodata['user_id'] }}" name='user_id'>


                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Category of Patient</label>
                  <select name="file_cat" class="form-control" id="validationDefault02" >

                  <option value="private">Private</option>
                  <option value="emergency">Emergency</option>
                  <option value="general">General</option>

                </select>
                </div>



                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Surname</label>
                  <input type="text" class="form-control" id="validationDefault02" name="lname" value="{{ $biodata['lname'] }}" required>
                </div>

                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationDefault02" name="fname" value="{{ $biodata['fname'] }}" required>
                </div>

                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Middle Name</label>
                  <input type="text" class="form-control" id="validationDefault02" name="mname" value="{{ $biodata['mname'] }}" required>
                </div>
                <div class="col-md-4">
                  <label for="validationDefault01" class="form-label">Address of Patient</label>
                  <input type="text" class="form-control" id="validationDefault01" name="address" value="{{ $biodata['address'] }}" required>
                </div>
                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Age</label>
                  <input type="number" class="form-control" id="validationDefault02" name="age" value="{{ $biodata['age'] }}" required>
                </div>

                <div class="col-md-4">
                    <label for="validationDefault04" class="form-label">Gender</label>
                    <select class="form-select" id="validationDefault04" name="sex" required>
                      <option selected disabled value="">--Choose--</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                       </select>
                  </div>

                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Occupation</label>
                    <input type="text" class="form-control" id="validationDefault02" name="occupation" value="{{ $biodata['occupation'] }}" required>
                  </div>



                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Phone No.</label>
                  <input type="number" class="form-control" id="validationDefault02" name="phone_no" value="{{ $biodata['phone_no'] }}" required>
                </div>

                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Tribe</label>
                  <input type="text" class="form-control" id="validationDefault02" name="tribe" value="{{ $biodata['tribe'] }}" required>
                </div>

                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Place of Origin</label>
                    <input type="text" class="form-control" id="validationDefault02" name="place_of_origin" value="{{ $biodata['place_of_Origin'] }}" required>
                  </div>

                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Next Of Kin's Name</label>
                  <input type="text" class="form-control" id="validationDefault02" name="nok_name" value="{{ $biodata['nok_name'] }}" required>
                </div>




                <div class="col-md-4">
                  <label for="validationDefault01" class="form-label">Next of Kin's Address</label>
                  <input type="text" class="form-control" id="validationDefault01" name="nok_address" value="{{ $biodata['nok_address'] }}" required>
                </div>
                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Next of Kin's Phone</label>
                  <input type="text" class="form-control" id="validationDefault02" name="nok_phone" value="{{ $biodata['nok_phone'] }}" required>
                </div>


                                <div class="col-12">
                  <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                </div>
              </form>
              <!-- End Browser Default Validation -->


            </div>



          </div>
        </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Brightnet NG</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ url('assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ url('assets/vendor/quill/quill.js') }}"></script>
  <script src="{{ url('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ url('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  {{-- <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script> --}}

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
