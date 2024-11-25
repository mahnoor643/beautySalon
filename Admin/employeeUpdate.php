<?php
$id=$_GET['id'];
require "./assets/header.php";
require "../assets/conn.php";

//selecting previous data
$sql2="SELECT * FROM employee WHERE employeeID='$id'";
$result2 = mysqli_query($conn, $sql2);
$data2 = mysqli_fetch_assoc($result2);

// Update Employee
if (isset($_POST['submit'])) {
    $name=$_POST['fullName'];
    $service = $_POST['service'];
    $designation=$_POST['designation'];
    $insta=$_POST['insta'];
    $fb=$_POST['fb'];
    // $img_tmp = $_FILES['img']['tmp_name'];
    // $img_name = $_FILES['img']['name'];
    // $img_type = $_FILES['img']['type'];
    // $target_folder = "assets/Employees/";
    // $imgPath=$target_folder.$img_name;

    // $allowed_ext = array('png', 'jpeg', 'jpg', 'gif', 'jfif');
    // $ext = explode('.', $img_name);
    // $img_ext = strtolower(end($ext));
    // if (in_array($img_ext, $allowed_ext) == false) {
    //     $error[] = "not required extention";
    // }
    // if (empty($error) == true) {
    //     $add_img = $target_folder.$img_name;
    //     move_uploaded_file($img_tmp, $target_folder . $img_name);
    // }

    $sql = "update employee set designation='$designation',serviceID='$service',fullName='$name',instaLink='$insta',fbLink='$fb' where employeeID='$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script>
        window.location.href = 'employees.php';
        alert('Employee Updated Successfully!');
    </script>";
    } else {
        echo "Error: ". $sql. "<br>". mysqli_error($conn);
    }
}
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Employee Update</h1>
        <!-- <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Layouts</li>
    </ol>
  </nav> -->
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Employee</h5>

                        <form method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fullName" value="<?php echo $data2['fullName']; ?>" class="form-control" id="inputText">
                                </div>
                            </div>
                            <!-- services -->
                            <div class="row mb-3">
                                <label for="serviceDropdown" class="col-sm-2 col-form-label">Services</label>
                                <div class="col-sm-10">
                                    <select name="service" id="serviceDropdown" class="form-select">
                                        <?php
                                        $sql2 = "SELECT * FROM services";
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
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Designation</label>
                                <div class="col-sm-10">
                                    <input type="text"  value="<?php echo $data2['designation']; ?>"  name="designation" class="form-control" id="inputText">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Insta</label>
                                <div class="col-sm-10">
                                    <input type="text"  value="<?php echo $data2['instaLink']; ?>"  name="insta" class="form-control" id="inputText">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">FB</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fb"  value="<?php echo $data2['fbLink']; ?>"  class="form-control" id="inputText">
                                </div>
                            </div>
                            <!-- <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Profile pic</label>
                                <div class="col-sm-10">
                                    <input type="file" name="img" class="form-control" id="inputText">
                                </div>
                            </div> -->
                            <div class="row mb-3">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button class="btn-primary btn" name="submit" type="submit">Update</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require "./assets/footer.php"; ?>