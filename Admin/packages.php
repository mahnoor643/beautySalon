<?php
require "./assets/header.php";
require "../assets/conn.php";
if(isset($_POST['submit'])){
    $package = $_POST['package'];
    $price = $_POST['price'];
    $sql = "INSERT INTO packages (packageName, packagePrice) VALUES ('$package', '$price')";
    $query=mysqli_query($conn, $sql);
    if($query) {
        echo "<script>alert('Package Added Successfully');</script>";
    } else {
        echo "Error: ". $sql. "<br>". mysqli_error($conn);
    }
}
$sql="SELECT * FROM packages";
$sqlRun=mysqli_query($conn,$sql);
?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Packages</h1>
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
                        <h5 class="card-title">Packages</h5>

                        <form method="post">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Package</label>
                                <div class="col-sm-10">
                                    <input type="text" name="package" class="form-control" id="inputText">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" min="0" name="price" class="form-control" id="inputText">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button class="btn-primary btn" name="submit" type="submit">Add</button>
                                </div>
                            </div>
                        </form>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Package</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">ID</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_array($sqlRun)) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <td><?php echo $row['packageName']; ?></td>
                                        <td><?php echo $row['packagePrice']; ?></td>
                                        <td><?php echo $row['packageID']; ?></td>
                                        <td><a
                                                href="packageDelete.php?id=<?php echo $row['packageID']; ?>">
                                                Delete
                                            </a>
                                            <a
                                                href="packageDeals.php?id=<?php echo $row['packageID']; ?>">
                                                Eyes
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