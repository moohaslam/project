<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Project Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" >>

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">project</span>
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

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/logo.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Project</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Aslam Project</h6>
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
        <a class="nav-link " href="dashboard.html">
          <i class="bi bi-house-door"></i>
          <span>School Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="senior_class.html">
          <i class="bi bi-people-fill"></i>
          <span>Senior Class</span>
        </a>
      </li><!-- End Senior CLass Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="junior_class.html">
          <i class="bi bi-people-fill"></i>
          <span>Junior Class</span>
        </a>
      </li><!-- End Junior Class Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="nursery_class.html">
          <i class="bi bi-people-fill"></i>
          <span>Nursery Class</span>
        </a>
      </li><!-- End Nursery Page Nav -->
     <li class="nav-item">
      <a class="nav-link collapsed" href="index.html">
        <i class="bi bi-power"></i>
        <span>Login</span>
      </a>
     </li></ul><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
  <style>
  .col-md-4:hover{
    transform: scale(1.07);
    transition: transform 0.4s ease-in-out;
  }
  @keyframes transform {
    from {
      transform: scale(3);
    }
    to {
      transform: scale(1.07);
    }
    
  }

</style>

  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-15">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nursery Class Students</h5>
              <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                <i class="bi bi-plus-circle"></i> Add Student
              </button>
              <table class="table datatable" id="nurseryClassTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Age</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Dynamic rows will be inserted here -->
                  <tr>
                    <th scope="row">1</th>
                    <td>John Doe</td>
                    <td>Male</td>
                    <td>17</td>
                    
                </tbody>
              </table>
            </div>
          </div>

          <!-- Add/Edit Student Modal -->
          <div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="addStudentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <form id="studentForm">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addStudentModalLabel">Add/Edit Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" id="studentId">
                    <div class="mb-3">
                      <label for="studentName" class="form-label">Full Name</label>
                      <input type="text" class="form-control" id="studentName" required>
                    </div>
                    <div class="mb-3">
                      <label for="studentGender" class="form-label">Gender</label>
                      <select class="form-select" id="studentGender" required>
                        <option value="">Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="studentAge" class="form-label">Age</label>
                      <input type="number" class="form-control" id="studentAge" min="1" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <!-- View Student Modal -->
          <div class="modal fade" id="viewStudentModal" tabindex="-1" aria-labelledby="viewStudentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="viewStudentModalLabel">Student Details</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p><strong>Full Name:</strong> <span id="viewName"></span></p>
                  <p><strong>Gender:</strong> <span id="viewGender"></span></p>
                  <p><strong>Age:</strong> <span id="viewAge"></span></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

              </div>
            </div>
          </div>
        </div><!-- End Left side columns -->
      </div><!-- End row -->


          <!-- SweetAlert2 CDN -->
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script>
            let students = [];
            let editIndex = null;

            function renderTable() {
              const tbody = document.querySelector('#seniorClassTable tbody');
              tbody.innerHTML = '';
              students.forEach((student, idx) => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                  <th scope="row">${idx + 1}</th>
                  <td>${student.name}</td>
                  <td>${student.gender}</td>
                  <td>${student.age}</td>
                  <td>
                    <button class="btn btn-info btn-sm me-1" onclick="viewStudent(${idx})"><i class="bi bi-eye"></i></button>
                    <button class="btn btn-warning btn-sm me-1" onclick="editStudent(${idx})"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-danger btn-sm" onclick="deleteStudent(${idx})"><i class="bi bi-trash"></i></button>
                  </td>
                `;
                tbody.appendChild(tr);
              });
            }

            document.getElementById('studentForm').addEventListener('submit', function(e) {
              e.preventDefault();
              const name = document.getElementById('studentName').value.trim();
              const gender = document.getElementById('studentGender').value;
              const age = document.getElementById('studentAge').value;
              if (editIndex === null) {
                students.push({ name, gender, age });
                Swal.fire('Success', 'Student added successfully!', 'success');
              } else {
                students[editIndex] = { name, gender, age };
                Swal.fire('Success', 'Student updated successfully!', 'success');
              }
              renderTable();
              document.getElementById('studentForm').reset();
              editIndex = null;
              var modal = bootstrap.Modal.getInstance(document.getElementById('addStudentModal'));
              modal.hide();
            });

            function editStudent(idx) {
              editIndex = idx;
              const student = students[idx];
              document.getElementById('studentName').value = student.name;
              document.getElementById('studentGender').value = student.gender;
              document.getElementById('studentAge').value = student.age;
              var modal = new bootstrap.Modal(document.getElementById('addStudentModal'));
              modal.show();
            }

            function viewStudent(idx) {
              const student = students[idx];
              document.getElementById('viewName').textContent = student.name;
              document.getElementById('viewGender').textContent = student.gender;
              document.getElementById('viewAge').textContent = student.age;
              var modal = new bootstrap.Modal(document.getElementById('viewStudentModal'));
              modal.show();
            }

            function deleteStudent(idx) {
              Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                if (result.isConfirmed) {
                  students.splice(idx, 1);
                  renderTable();
                  Swal.fire('Deleted!', 'Student has been deleted.', 'success');
                }
              });
            }

            // Reset form and editIndex when opening modal for new student
            document.querySelector('[data-bs-target="#addStudentModal"]').addEventListener('click', function() {
              document.getElementById('studentForm').reset();
              editIndex = null;
            });

            // Initial render
            renderTable();
          </script>
          <!-- End SweetAlert2 CDN-->
          </div><!-- End Card -->
        </div><!-- End Left side columns -->
      </div><!-- End row -->
    </section><!-- End Dashboard Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>PROJECT</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">Aslam</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>