<?php
require "./assets/header.php";
require "../assets/conn.php";
$sql = "select * from employee join services on employee.serviceID=services.serviceID";
$sqlRun = mysqli_query($conn, $sql);
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Employees</h1>
        <!-- <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">General</li>
    </ol>
  </nav> -->
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Employees</h5>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Services</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Insta</th>
                                    <th scope="col">Fb</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($sqlRun)) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <td><?php echo $row['fullName']; ?></td>
                                        <th><?php echo $row['serviceTitle']; ?></th>
                                        <td><?php echo $row['designation']; ?></td>
                                        <td><?php echo $row['instaLink']; ?></td>
                                        <td><?php echo $row['fbLink']; ?></td>
                                        <td>
                                            <div class="profile-pic">
                                                <img src="<?php echo $row['employeePic']; ?>" alt="Employee Picture">
                                            </div>
                                        </td>

                                        <td><a href="serviceUpdate.php?id=<?php echo $row['employeeID']; ?>">
                                                Update
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php require "./assets/footer.php"; ?>