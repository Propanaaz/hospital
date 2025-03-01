
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medical History</title>
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
              <a href="{{ route('patient_dashboard',["id"=>$user_id]) }}">
                <i class="bi bi-circle"></i><span>Biodata</span>
              </a>
            </li>
            <li>
              <a href="{{ route('medical_history',["id"=>$user_id]) }}">
                <i class="bi bi-circle"></i><span>Medical History</span>
              </a>
            </li>

            <li>
              <a href="{{ route('pregnancy_history',["id"=>$user_id]) }}">
                <i class="bi bi-circle"></i><span>Pregnancy History</span>
              </a>
            </li>

            <li>
              <a href="{{ route('preg_biodata',["id"=>$user_id]) }}">
                <i class="bi bi-circle"></i><span>Pregnancy Biodata</span>
              </a>
            </li>

            <li>
              <a href="{{ route('scheme',["id"=>$user_id]) }}">
                <i class="bi bi-circle"></i><span>Insurance Scheme</span>
              </a>
            </li>

            <li>
              <a href="{{ route('consultant',["id"=>$user_id]) }}">
                <i class="bi bi-circle"></i><span>Consultant</span>
              </a>
            </li>

            <li>
              <a href="{{ route('specialpoint',["id"=>$user_id]) }}">
                <i class="bi bi-circle"></i><span>Special point</span>
              </a>
            </li>

            <li>
              <a href="{{ route('test',["id"=>$user_id]) }}">
                <i class="bi bi-circle"></i><span>Test</span>
              </a>
            </li>

            <li>
              <a href="{{ route('ward',["id"=>$user_id]) }}">
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
      <h1>Medical History</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Add User</li>
          <li class="breadcrumb-item active">Medical History</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Medical History</h5>





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
              <form class="row g-3" action="{{ route('send_medical_history') }}" method="POST">
                @csrf






                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Medical Condition</label>
                  <select name="type" class="form-control" id="validationDefault02" >

                  <option value="Heart Disease">Heart Disease</option>
                  <option value="Chest Disease">Chest Disease</option>
                  <option value="Kidney Disease">Kidney Disease</option>
                  <option value="Diabetes">Diabetes</option>
                  <option value="operation">Operation</option>
                  <option value="others">others</option>
                </select>
                </div>


                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">State of Condition</label>
                    <input type="text" class="form-control" id="validationDefault02" name="answer" required>
                  </div>


                  <input type="hidden" name="user_id" value="{{ $user_id }}">

                                <div class="col-12">
                  <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                </div>
              </form>
              <!-- End Browser Default Validation -->


            </div>



          </div>
        </div>
    </section>




    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Consultant Table</h5>
                <!-- Table with stripped rows -->
                <div class="table-responsive">
                    <table class="table datatable table-striped
                  table-bordered table-hover" style="font-size: .7rem;">
                    <thead>

                         <th>#</th>
                        <th>Medical COndition</th>
                        <th>Response</th>
                        <th>Action</th>

                    </thead>
                    <tbody>
                        @forelse($history as $history)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $history['type'] }}</td>
                            <td>{{ $history['answer'] }}</td>
                            <td><a href="{{ route('delete_medical_history',['id'=>$history['id'],'user_id'=>$history['user_id']]) }}" class="btn btn-danger"><i class="bi bi-file-excel-fill"></i>Delete</a></td>


                        </tr>
                        @empty
                        <td colspan="4" style="text-align: center;">  No record</td>




                        @endforelse
                    </tbody>

                  </table>
                </div>
                <!-- End Table with stripped rows -->

              </div>
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
  <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
