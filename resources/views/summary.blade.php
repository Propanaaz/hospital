
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Patient Summary</title>
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
                <i class="bi bi-layout-text-window-reverse"></i><span>Patient Record</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="tables-nav" class="nav-content  " data-bs-parent="#sidebar-nav">


              <li>
                <a href="{{ route('biodata') }}">
                  <i class="bi bi-circle"></i><span>Add Record</span>
                </a>
              </li>
              <li>
                <a href="{{ route('all_patient') }}">
                  <i class="bi bi-circle"></i><span>View Record</span>
                </a>
              </li>




                          </ul>
            </li><!-- End Tables Nav -->



            <!-- End Login Page Nav -->
          </ul>

        </aside><!-- End Sidebar-->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Summary</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">Add Record</li>
          <li class="breadcrumb-item active">Summary</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->




    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Biodata</h5>
                <div class="table-responsive">
                      <table class="table  table-bordered table-hover" style="font-size:20px; ">
                    <tbody>


                        <tr>
                            <td>File No</td>
                            <td>{{ $biodata['user_id'] }}</td>
                        </tr>


                        <tr>
                            <td>File Category</td>
                            <td>{{ $biodata['file_cat'] }}</td>
                        </tr>


                        <tr>
                            <td>First Name</td>
                            <td>{{ $biodata['fname'] }}</td>
                        </tr>


                        <tr>
                            <td>Middle Name</td>
                            <td>{{ $biodata['mname'] }}</td>
                        </tr>


                        <tr>
                            <td>Last Name</td>
                            <td>{{ $biodata['lname'] }}</td>
                        </tr>


                        <tr>
                            <td>Age</td>
                            <td>{{ $biodata['age'] }}</td>
                        </tr>

                        <tr>
                            <td>Sex</td>
                            <td>{{ $biodata['sex'] }}</td>
                        </tr>


                        <tr>
                            <td>Address</td>
                            <td>{{ $biodata['address'] }}</td>
                        </tr>


                        <tr>
                            <td>Phone No</td>
                            <td>{{ $biodata['phone_no'] }}</td>
                        </tr>

                        <tr>
                            <td>Tribe</td>
                            <td>{{ $biodata['tribe'] }}</td>
                        </tr>


                        <tr>
                            <td>Place of Origin</td>
                            <td>{{ $biodata['place_of_Origin'] }}</td>
                        </tr>


                        <tr>
                            <td>Occupation</td>
                            <td>{{ $biodata['occupation'] }}</td>
                        </tr>


                        <tr>
                            <td>Next of Kin's Name</td>
                            <td>{{ $biodata['nok_name'] }}</td>
                        </tr>

                        <tr>
                            <td>Next of Kin's Address</td>
                            <td>{{ $biodata['nok_address'] }}</td>
                        </tr>

                        <tr>
                            <td>Next of Kin's Phone No.</td>
                            <td>{{ $biodata['nok_phone'] }}</td>
                        </tr>



                    </tbody>
                  </table>
                </div>
              </div>
            </div>



            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Health Insurance Scheme</h5>
                  <div class="table-responsive">
                        <table class="table  table-bordered table-hover" style="font-size:20px; ">
                      <tbody>
                        <tr>
                            <th>Scheme Name</th>
                            <th>Scheme Number</th>
                            <th>HMO's Name</th>
                            <th>HMO's Code</th>
                            <th>HMO's Phone No.</th>

                        </tr>
                        @forelse($scheme as $scheme)
                        <tr>
                            <td>{{ $scheme['type'] }}</td>
                            <td>{{ $scheme['number'] }}</td>
                            <td>{{ $scheme['hmo_name'] }}</td>
                            <td>{{ $scheme['hmo_code'] }}</td>
                            <td>{{ $scheme['hmo_no'] }}</td>


                        </tr>
                        @empty
                        <tr>
                            <td>No Record</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>





            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Medical History</h5>
                  <div class="table-responsive">
                        <table class="table  table-bordered table-hover" style="font-size:20px; ">
                      <tbody>
                        @forelse($medical_history as $medical_history)
                        <tr>
                            <td>{{ $medical_history['type'] }}</td>
                            <td>{{ $medical_history['answer'] }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td>No Record</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>



            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Consultant</h5>
                  <div class="table-responsive">
                        <table class="table  table-bordered table-hover" style="font-size:20px; ">
                      <tbody>
                        @forelse($consultant as $consultant)
                        <tr>
                            <td>{{ $consultant['type'] }}</td>
                            <td>{{ $consultant['name'] }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td>No Record</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              @if($biodata['sex'] == "Female")



              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Pregnancy Biodata</h5>
                  <div class="table-responsive">
                        <table class="table  table-bordered table-hover" style="font-size:20px; ">
                      <tbody>

                          <tr>
                              <td>Total Pregnancy</td>
                              <td>{{ $pregbio['total_preg'] }}</td>
                          </tr>

                          <tr>
                            <td>Age as at Marriage</td>
                            <td>{{ $pregbio['mage'] }}</td>
                        </tr>

                          <tr>
                            <td>Total No. Of Living Children</td>
                            <td>{{ $pregbio['total_liv_children'] }}</td>
                        </tr>

                        <tr>
                            <td>L.M.P</td>
                            <td>{{ $pregbio['lmp'] }}</td>
                        </tr>

                        <tr>
                            <td>E.D.D</td>
                            <td>{{ $pregbio['edd'] }}</td>
                        </tr>


                        <tr>
                            <td>I.P Number</td>
                            <td>{{ $pregbio['ip_num'] }}</td>
                        </tr>

                        <tr>
                            <td>O.P Num</td>
                            <td>{{ $pregbio['op_num'] }}</td>
                        </tr>

                        <tr>
                            <td>Pregnancy Duration</td>
                            <td>{{ $pregbio['preg_duration'] }}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>






              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Past Pregnancies</h5>
                  <div class="table-responsive">
                        <table class="table  table-bordered table-hover" style="font-size:20px; ">
                      <tbody>
                        <tr>
                            <th>Date of Birth</th>
                            <th>Pregnancy Duration</th>
                            <th>Birth Weight</th>
                            <th>Pregnancy Complication</th>
                            <th>Labor Complication</th>
                            <th>Premium</th>
                            <th>Age Death</th>
                            <th>Cause Death</th>



                        </tr>
                        @forelse($pregnancy_history as $pregnancy_history)
                        <tr>
                            <td>{{ $pregnancy_history['dob'] }}</td>
                            <td>{{ $pregnancy_history['preg_duration'] }}</td>
                            <td>{{ $pregnancy_history['birth_weight'] }}</td>
                            <td>{{ $pregnancy_history['preg_complication'] }}</td>
                            <td>{{ $pregnancy_history['lab_complication'] }}</td>
                            <td>{{ $pregnancy_history['premium'] }}</td>
                            <td>{{ $pregnancy_history['age_death'] }}</td>
                            <td>{{ $pregnancy_history['causedeath'] }}</td>


                        </tr>
                        @empty
                        <tr>
                            <td>No Record</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>




              @endif


              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special Points</h5>
                  <div class="table-responsive">
                        <table class="table  table-bordered table-hover" style="font-size:20px; ">
                      <tbody>
                        @forelse($specialpoint as $specialpoint)
                        <tr>
                            <td>{{ $specialpoint['name'] }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td>No Record</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>




              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Laboratory Tests</h5>
                  <div class="table-responsive">
                        <table class="table  table-bordered table-hover" style="font-size:20px; ">
                      <tbody>
                        @forelse($test as $test)
                        <tr>
                            <td>{{ $test['type'] }}</td>
                            <td>{{ $test['remark'] }}</td>

                        </tr>
                        @empty
                        <tr>
                            <td>No Record</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Ward</h5>
                  <div class="table-responsive">
                        <table class="table  table-bordered table-hover" style="font-size:20px; ">
                      <tbody>
                        @forelse($ward as $ward)
                        <tr>
                            <td>{{ $ward['name'] }}</td>

                        </tr>
                        @empty
                        <tr>
                            <td>No Record</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
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
