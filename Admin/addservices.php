<?php 
require "./assets/header.php";
require "../assets/conn.php";

// Add Service
if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $img_tmp = $_FILES['img']['tmp_name'];
    $img_name = $_FILES['img']['name'];
    $img_type = $_FILES['img']['type'];
    $target_folder = "assets/media/service/";
    $imgPath=$target_folder.$img_name;

    $allowed_ext = array('png', 'jpeg', 'jpg', 'gif', 'jfif');
    $ext = explode('.', $img_name);
    $img_ext = strtolower(end($ext));
    if (in_array($img_ext, $allowed_ext) == false) {
        $error[] = "not required extention";
    }
    if (empty($error) == true) {
        $add_img = $target_folder.$img_name;
        move_uploaded_file($img_tmp, $target_folder . $img_name);
    }
    $sql = "INSERT INTO services (serviceTitle, serviceDescription,serviceImg) VALUES ('$title', '$desc','$imgPath')";
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
                        <form method="post" enctype="multipart/form-data">
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
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Img</label>
                                <div class="col-sm-10">
                                <input type="file" name="img" class="form-control" id="inputText">
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