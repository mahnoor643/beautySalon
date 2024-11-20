<?php 
$id=$_GET['id'];
require "./assets/header.php";
require "../assets/conn.php";
$sql1="SELECT * FROM services WHERE serviceID='$id'";
$sql1Run=mysqli_query($conn,$sql1);
$sql1Fetch=mysqli_fetch_array($sql1Run);
$sql="select * from serviceExpertise where serviceID='$id'";
$sqlRun=mysqli_query($conn,$sql);

//Add the service

if(isset($_POST['submit'])) {
    $expert = $_POST['experty'];
    $sql = "INSERT INTO serviceExpertise (serviceID, serviceExperty) VALUES ('$id', '$expert')";
    $query=mysqli_query($conn, $sql);
    if($query) {
        echo "<script>alert('Expertise Added Successfully');</script>";
    } else {
        echo "Error: ". $sql. "<br>". mysqli_error($conn);
    }
}
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Add Service Expertise</h1>
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
          <h5 class="card-title"><?php echo $sql1Fetch['serviceTitle'] ?></h5>
          <p><?php echo $sql1Fetch['serviceDescription'] ?></p>

           <form method="post">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Service</label>
                                <div class="col-sm-10">
                                    <input type="text" name="experty" class="form-control" id="inputText">
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
                <th scope="col">Experty</th>
                <th scope="col">ID</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                 while($row=mysqli_fetch_assoc($sqlRun)) {
                    ?>
                  <tr>
                    <th scope="row"><?php echo $i;?></th>
                    <td><?php echo $row['serviceExperty'];?></td>
                    <th><?php echo $row['serviceExpertiseID'];?></th>
                    <td><a href="serviceExpertiseDelete.php?id=<?php echo $row['serviceExpertiseID']; ?>">
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