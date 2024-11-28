<?php
require "./assets/header.php";
require "../assets/conn.php";
$sql = "SELECT 
    a.fullName AS appointmentFullName, 
    a.appointmentID, 
    a.email, 
    a.phoneNo, 
    services.serviceTitle, 
    employee.fullName AS employeefullName, 
    a.packageID, 
    a.userID, 
    a.Date 
FROM appointment a 
JOIN services ON services.serviceID = a.serviceID 
JOIN employee ON employee.employeeID = a.employeeID";
$sqlRun = mysqli_query($conn, $sql);
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Appointments</h1>


        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Appointments</h5>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Appointment ID</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Service</th>
                                        <th scope="col">Employee</th>
                                        <th scope="col">Package</th>
                                        <th scope="col">User ID</th>
                                        <th scope="col">Date</th>
                                        <!-- <th scope="col"></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($sqlRun)) {
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?></th>
                                            <td><?php echo $row['appointmentFullName']; ?></td>
                                            <td><?php echo $row['appointmentID']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['phoneNo']; ?></td>
                                            <td><?php echo $row['serviceTitle']; ?></td>
                                            <td><?php echo $row['employeefullName']; ?></td>
                                            <td><?php if ($row['packageID']) {
                                                echo $row['packageID'];
                                            } else {
                                                echo "Null";
                                            } ?></td>
                                            <td><?php echo $row['userID']; ?></td>
                                            <td><?php echo $row['Date']; ?></td>
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