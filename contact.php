
<?php
error_reporting(0);
include "./assets/required/_header.php";
require "./assets/conn.php";

//insert contact data to db
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $sqlcontact="insert into contact(fullName, email, msg) values ('$name', '$email', '$message')";
    $contactAdd=mysqli_query($conn,$sqlcontact);
    if($contactAdd){
        echo "<script>alert('Your message has been sent successfully.')</script>";
    }else{
        die(mysqli_error($contactAdd));
        echo "<script>alert('Failed to send message. Please try again.')</script>";
    }
}
?>



<!-- banner Area end -->
<section class="inner-banner">
    <div class="container">
        <div class="text-center">
            <h2 class="fw-7 fs-105 lh-120 color-white mb-16">CONTACT US</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="contact.php" class="active">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- banner Area end -->

<!-- appoinment Area start -->
<section class="contact bg-dark pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-1 ">
                <div class="content mb-24">
                    <h2 class="fw-7 fs-36 font-sec lh-110 color-white mb-48">CONTACT INFO</h2>
                    <a href="tel:123" class="social-link mb-32 fs-21"><i class="fal fa-phone-alt"></i> +1 233 898
                        0897</a>
                    <a href="mailto:email@example.com" class="social-link mb-32 fs-21"><i class="fal fa-envelope"></i>
                        rosasalon.com</a>
                    <a class="social-link fs-21 mb-64"> <i class="fal fa-map-marker-alt"></i>123 Main Street, Anytown,
                        USA.</a>

                    <h2 class="fw-7 fs-36 lh-110 font-sec color-white mb-48">OPENING HOURS</h2>
                    <div class="d-flex align-items-center justify-content-start  mb-16">
                        <h5 class="fw-4 fs-21 lh-140 color-white m-0 me-4">Mon–Fri</h5>
                        <p class="fw-7 fs-21 lh-140 color-primary m-0">9 AM – 7 PM</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-start">
                        <h5 class="fw-4 fs-21 lh-140 color-white m-0 me-4">Sat–Sun</h5>
                        <p class="fw-7 fs-21 lh-140 color-primary m-0">9 AM – 5 PM</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <h2 class="fw-7 fs-36 font-sec lh-110 color-white mb-48">CONTACT FORM</h2>
                <form method="post"
                    >
                    <div class="form-group mb-24">
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Your Name">
                    </div>
                    <div class="form-group mb-24">
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
                    </div>
                    <div class="form-group mb-48">
                        <textarea class="form-control" required name="message" placeholder="Your Message"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="barber-btn">Send Message</button>
                    </div>
                    <div id="message" class="alert-msg"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- appoinment Area end -->

<?php
include "./assets/required/_footer.php";
?>