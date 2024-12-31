<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rosa Salon</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/media/crownIcon.png" rel="icon">
  <link href="../assets/media/crownIcon.png" rel="apple-touch-icon">

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


  <style>
    /* own styling here */

.profile-pic {
  width: 50px; /* Change the size as needed */
  height: 50px;
  border-radius: 50%; /* Makes the div circular */
  overflow: hidden; /* Ensures the image stays inside the circle */
  display: flex;
  justify-content: center;
  align-items: center;
  border: 2px solid #ccc; /* Optional: Adds a border around the circle */
}

.profile-pic img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensures the image fills the circle without distortion */
}
.textWrapped {
    word-wrap: break-word; /* Breaks long words to fit inside the cell */
    white-space: normal;   /* Allows text to wrap to the next line */
    overflow-wrap: break-word; /* For better compatibility */
    max-width: 200px; /* Optional: Set a maximum width for the cell */
}

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a class="logo d-flex align-items-center">
        <img src="../../assets/media/new.png" alt="">
        <span class="d-none d-lg-block">Rosa Salon</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="addservices.php">
          <i class="bi bi-person"></i>
          <span>Add Services</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="addEmployee.php">
          <i class="bi bi-question-circle"></i>
          <span>Add Employee</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="packages.php">
          <i class="bi bi-envelope"></i>
          <span>Packages</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="services.php">
          <i class="bi bi-card-list"></i>
          <span>Services</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="employees.php">
          <i class="bi bi-card-list"></i>
          <span>Employees</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="appointments.php">
          <i class="bi bi-card-list"></i>
          <span>Appointment</span>
        </a>
      </li>
     
    </ul>

  </aside><!-- End Sidebar-->
