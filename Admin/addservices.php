<?php 
require "./assets/header.php";
require "../assets/conn.php";

// Add Service
if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO services (serviceTitle, serviceDescription) VALUES ('$title', '$desc')";
    $query=mysqli_query($conn, $sql);
    if($query) {
        echo "<script>alert('Service Added Successfully');</script>";
    } else {
        echo "Error: ". $sql. "<br>". mysqli_error($conn);
    }
}
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Service Add</h1>
        <!-- <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Layouts</li>
    </ol>
  </nav> -->
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Service</h5>

                        <!-- Horizontal Form -->
                        <form method="post">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="inputText">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea rows="6" name="desc" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button class="btn-primary btn" name="submit" type="submit">Add</button>
                                </div>
                            </div>
                        </form><!-- End Horizontal Form -->

                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->




<?php require "./assets/footer.php"; ?>