<?php
$id = $_GET['id'];
require "./assets/header.php";
require "../assets/conn.php";
$sql = "select * from packageDeals pd join packages p on p.packageID=pd.packageID join services s on s.serviceID =pd.serviceIDFK where p.packageID='$id'";
$sqlRun = mysqli_query($conn, $sql);

//Add the service
if (isset($_POST['submit'])) {
  $serviceID = $_POST['service'];
  $sql = "insert into packageDeals(serviceIDFK,packageID) values ('$serviceID','$id')";
  $query = mysqli_query($conn, $sql);
  if ($query) {
    echo "<script>alert('package Service Added Successfully');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Services</h1>
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
            <h5 class="card-title">Service Experties</h5>

            <form method="post">
              <div class="row mb-3">
                <label for="serviceDropdown" class="col-sm-2 col-form-label">Services</label>
                <div class="col-sm-10">
                  <select name="service" id="serviceDropdown" class="form-select">
                    <?php
                    $sql2 = "SELECT * FROM services s LEFT JOIN packageDeals pd ON s.serviceID = pd.serviceIDFK WHERE pd.serviceIDFK IS NULL;";
                    $sql2Run = mysqli_query($conn, $sql2);
                    while ($row2 = mysqli_fetch_array($sql2Run)) {
                      ?>
                      <option value="<?php echo $row2['serviceID']; ?>">
                        <?php echo $row2['serviceTitle']; ?>
                      </option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>


              <div class="row mb-3">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                  <button class="btn-primary btn" name="submit" type="submit">Add</button>
                </div>
              </div>
            </form><!-- End Horizontal Form -->

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Service</th>
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
                    <td><?php echo $row['serviceTitle']; ?></td>
                    <td><a href="packageServiceDelete.php?id=<?php echo $row['packageDealID']; ?>">
                        Delete
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