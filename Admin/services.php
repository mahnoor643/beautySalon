<?php 
require "./assets/header.php";
require "../assets/conn.php";
$sql="SELECT * FROM services";
$sqlRun=mysqli_query($conn,$sql);
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
          <h5 class="card-title">Services</h5>

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">ID</th>
                <th scope="col">Description</th>
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
                    <td><?php echo $row['serviceTitle'];?></td>
                    <th><?php echo $row['serviceID'];?></th>
                    <td><?php echo $row['serviceDescription'];?></td>
                    <td><a href="serviceExpertise.php?id=<?php echo $row['serviceID']; ?>">
                                            Eye
                        </a>
                        <a href="serviceUpdate.php?id=<?php echo $row['serviceID']; ?>">
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