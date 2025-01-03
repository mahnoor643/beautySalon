
<?php
error_reporting(0);
include "assets/required/_header.php";
include "./assets/conn.php";
?>

<!-- banner Area end -->
<section class="banner">
    <div class="container">
        <h5 class="fw-7 fs-21 lh-140 color-white m-0">ELEVATE YOUR STYLE </h5>
        <h4 class="fw-7 fs-80 lh-110 color-white mb-8">ROSA Salon </h4>
        <h2 class="fw-7 title color-primary font-sec lh-100">YOU</h2>
        <p class="fs-21 color-gray-3 lh-140">At ROSA Salon , we specialize in transforming<br> your look with precision and care.From expert grooming <br>
        to flawless styling,every service is designed to highlight<br> our unique beauty. Let’s redefine your style together! Let’s go! </p>
        <button class="barber-btn modal-popup">Book Appointment</button>
    </div>
</section>
<!-- banner Area end -->
<!-- about Area start -->
<section class="about bg-dark pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 mb-24 mb-lg-0">
                <h2 class="fw-7 fs-80 lh-110 color-white font-sec mb-16">ABOUT US</h2>
                <p class="color-gray-3 lh-150 mb-96">At ROSA Salon , we are committed to enhancing your natural
                     beauty with exceptional grooming and styling services. Step into our elegant 
                     and relaxing space, where our skilled professionals use advanced techniques 
                     to deliver results that match your unique style and personality. </p>
                <h4 class="fw-7 fs-36 lh-110 font-sec color-white mb-16">OUR JOURNEY</h4>
                <div class="text-rotate">
                    <br>
                    <h6 class="fs-36">2000</h6>
                    <p class="light-text">Since opening our doors in 2000, ROSA Salon  
                        has been a trusted name in beauty and self-care. With years of expertise, 
                        a passion for creativity, and a focus on client satisfaction, 
                        we have built a legacy of delivering outstanding services that make every visit memorable.</p>
                </div>
                <a href="about.php" class="barber-btn">Learn More</a>
            </div>
            <div class="col-xxl-7 col-xl-6 col-12">
                <div class="img-block">
                    <div class="timing bg-dark-2 ">
                        <h2 class="fw-7 fs-36 lh-110 font-sec color-white mb-24">OPENING HOURS</h2>
                        <div class="d-flex align-items-center justify-content-between position-relative line mb-16">
                            <h5 class="fs-21">Mon–Fri</h5>
                            <p class="fs-21">9 AM – 7 PM</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between position-relative line">
                            <h5 class="fs-21">Sat–Sun</h5>
                            <p class="fs-21">9 AM – 5 PM</p>
                        </div>
                    </div>
                    <img src="assets\media\about-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about Area end -->
<!-- service Area start -->
<section class="service bg-dark pt-100 pb-100">
    <div class="container">
        <h2 class="fw-7 fs-80 font-sec lh-110 color-white mb-48 text-center">SERVICES</h2>
        <div class="row justify-content-between">
            <?php
            // Fetch services from database 
            $sql5 = "SELECT * FROM services LIMIT 4";
            $result5 = mysqli_query($conn, $sql5);
            if(!$result5){
                die(mysqli_error($conn));
            }
            while ($row5 = mysqli_fetch_array($result5)) {
                ?>
                <div class="col-lg-5 col-md-6">
                    <div class="service-block mb-24">
                        <div class="text-rotate text-start">
                            <h4><?php echo $row5['serviceTitle']; ?></h4>
                        </div>
                        <div class="img-block position-relative overflow-hidden text-end">
                            <img src="<?php echo $row5['serviceImg']; ?>" alt="">
                            <div class="content text-start">
                                <img src="assets/media/icon/dryer-icon.png" class="mb-64 " alt="">
                                <p class="mb-64"><?php echo $row5['serviceDescription']; ?></p>
                                <a href="services.php" class="barber-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>
       
        </div>
    </div>
</section>
<!-- service Area end -->
<!-- milestone Area start -->
<section class="milestone bg-dark">
    <div class="container">
        <h4 class="fs-105 position-absolute start-0 bg-dark-3 color-dark-2">MILESTONES</h4>
        <div
            class="d-flex align-items-center flex-lg-nowrap flex-wrap justify-content-lg-center justify-content-between">
            <div class="content bg-dark-2">
                <h2 class="fs-80">25+</h2>
                <p class="fs-21">Years of Experience</p>
            </div>
            <div class="content bg-dark-3">
                <h2 class="fs-80">1000+</h2>
                <p class="fs-21">Services Completed</p>
            </div>
            <div class="content bg-dark-2">
                <h2 class="fs-80">21</h2>
                <p class="fs-21">Experienced Staff</p>
            </div>
            <div class="content bg-dark-3">
                <h2 class="fs-80">1220+</h2>
                <p class="fs-21">Happy Customers</p>
            </div>
        </div>
        <h4 class="fs-105 position-absolute end-0 bg-dark-2 color-dark-3 d-lg-grid d-none">MILESTONES</h4>
    </div>
</section>
<!-- milestone Area end -->
<!-- team Area start -->
<section class="team bg-dark pt-100 pb-100">
    <div class="container">
        <h2 class="fw-7 fs-80 font-sec lh-110 color-white mb-48 text-center">OUR TEAM</h2>
        <div class="row">
            <?php
                $sql12="SELECT * FROM employee LIMIT 4";
                $result12=mysqli_query($conn,$sql12);
                if(!$result12){
                    die("Query Failed".mysqli_error($conn));
                }                while($row12=mysqli_fetch_array($result12)){
            ?>
            <div class="col-xl-3 col-md-6">
                <div class="img-block position-relative overflow-hidden text-end mb-24 mb-xl-0">
                    <img src="./Admin/<?php echo $row12['employeePic'];?>" class="w-100" alt="">
                    <div class="content ">
                        <ul class="social-icon list-unstyled mb-24">
                            <li>
                                <a href="<?php echo $row12['instaLink'];?>">
                                <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $row12['fbLink'];?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                           
                        </ul>
                        <h4 class="fw-7 fs-21 lh-110 font-sec color-white mb-1 text-center"><?php echo $row12['fullName'];?>
                        </h4>
                        <p class="lh-150 color-gray-3 mb-0 text-center"><?php echo $row12['designation'];?></p>
                    </div>
                </div>
            </div>

            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- team Area end -->
<!-- Pricing Area start -->
<section class="pricing bg-dark pt-100 pb-100">
    <div class="container">
        <h2 class="fw-7 fs-80 font-sec lh-110 color-white mb-48 text-center">GROOM PACKAGES</h2>
        <div class="row">
            <?php
            $sql3 = "select * from packages LIMIT 3";
            $sql3Run = mysqli_query($conn, $sql3);
            if(!$sql3Run){
                die(mysqli_error($conn));
            }            while ($row3 = mysqli_fetch_array($sql3Run)) {
                ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="pricing-block mb-32 mb-lg-0">
                        <h2 class="title fs-47 fw-7 lh-120 bg-dark-3"><?php echo $row3['packageName']; ?></h2>
                        <h3 class="price fs-47 fw-7 lh-120 color-primary">$<?php echo $row3['packagePrice']; ?></h3>

                        <ul class="offer-services unstyled">
                            <?php
                            $pID = $row3['packageID'];
                            $sql4 = "select * from packageDeals join serviceExpertise on serviceExpertise.serviceExpertiseID=packageDeals.serviceIDFK where packageID=$pID";
                            $sql4Run = mysqli_query($conn, $sql4);
                            while ($row4 = mysqli_fetch_array($sql4Run)) {
                                ?>
                                <li><?php echo $row4['serviceExperty']; ?></li>
                            <?php } ?>
                            
                        </ul>
                        <button class="barber-btn modal-popup">Book Now</button>
                    </div>
                </div>
            <?php } ?>
           
        </div>
    </div>
</section>
<!-- Pricing Area end -->

<!-- appointment Area start -->
<section class="appoinment bg-dark-3 pt-100 pb-100">
    <div class="container">
        <h2 class="fw-7 fs-80 font-sec lh-110 color-white mb-48 text-center">BOOK APPOINTMENT</h2>
        <div class="row">
            <div class="col-lg-4 offset-lg-1 ">
                <div class="content mb-24 mb-lg-0">
                    <a href="tel:123" class="social-link mb-32"><i class="fal fa-phone-alt"></i> +1 233 898
                        0897</a>
                    <a href="mailto:email@example.com" class="social-link mb-32"><i class="fal fa-envelope"></i>
                        rosasalon.com</a>
                    <a class="social-link mb-32"> <i class="fal fa-map-marker-alt"></i>123 Main Street,
                        Anytown, USA.</a>
                    <h2 class="fw-7 fs-36 lh-110 font-sec color-white mb-24">OPENING HOURS</h2>
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
            <div class="col-lg-7">
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $date = $_POST['date'];
                    $service = $_POST['service-name'];
                    $employee = $_POST['employee'];
                    $sql11 = "SELECT * FROM user where email='$email'";
                    $sql11Run = mysqli_query($conn, $sql11);
                    if (!$sql11Run) {
                        die(mysqli_error());
                    }
                    if (mysqli_num_rows($sql11Run) > 0) {
                        fetchDetails($email, $date, $service, $employee);
                    } else {
                        $sql8 = "insert into user(fullName,email,phoneNo,role) values('$name', '$email', '$phone', 'Client')";
                        $sql8Run = mysqli_query($conn, $sql8);
                        if (!$sql8Run) {
                            die(mysqli_error());
                        }
                        if ($sql8Run) {
                            fetchDetails($email, $date, $service, $employee);
                        } else {
                            echo "<script>alert('Account is aready created with this mail')</script>";
                        };
                    }

                }
                

                function fetchDetails($email, $date, $service, $employee)
                {
                    global $conn;
                    $sql9 = "SELECT * FROM user where email='$email'";
                    $sql9Run = mysqli_query($conn, $sql9);
                    if (!$sql9Run) {
                        die(mysqli_error());
                    }
                    $row9 = mysqli_fetch_array($sql9Run);
                    $userId = $row9['userID'];
                    $fullName = $row9['fullName'];
                    $phone = $row9['phoneNo'];
                    $sql10 = "insert into appointment(fullName,email,phoneNo,Date,serviceID,employeeID,packageID,userID) 
                                values('$fullName', '$email', '$phone', '$date', '$service', '$employee',NULL, '$userId')";
                    $sql10Run = mysqli_query($conn, $sql10);
                    if (!$sql10Run) {
                        die(mysqli_error());
                    }
                    if ($sql10Run) {
                        echo "<script>alert('Appointment has been booked successfully')</script>";
                    } else {
                        echo "<script>alert('Failed to book appointment')</script>";
                    }
                    ;
                }
                ?>
                <form method="post">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group mb-24">
                                <input type="text" class="form-control" id="name" name="name" required
                                    placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group mb-24">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                <small id="email-error" style="color:red; display:none;">
                                    Email is not valid
                                </small>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group mb-24">
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    placeholder="Phone Number" oninput="validatePhone(this)">
                                <small id="phone-error" style="color: red; display: none;">Phone number must be exactly
                                    11 digits.</small>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group mb-24">
                                <input type="date" name="date" id="checkIn" class="form-control date_from" required
                                    placeholder="Date">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group mb-24">
                                <select class="form-selector" name="service-name" required>
                                    <option value="1" disabled selected>Select Service</option>
                                    <?php
                                    $sql6 = "select * from services";
                                    $sql6Run = mysqli_query($conn, $sql6);
                                    while ($row6 = mysqli_fetch_array($sql6Run)) {
                                        ?>
                                        <option value="<?php echo $row6['serviceID']; ?>">
                                            <?php echo $row6['serviceTitle']; ?>
                                        </option>
                                    <?php } ?>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group mb-48">
                                <select class="form-selector" name="employee">
                                    <option value="1" disabled selected>Select Expert</option>
                                    <?php
                                    $sql7 = "select * from employee";
                                    $sql7Run = mysqli_query($conn, $sql7);
                                    while ($row7 = mysqli_fetch_array($sql7Run)) {
                                        ?>
                                        <option value="<?php echo $row7['employeeID']; ?>"><?php echo $row7['fullName']; ?>
                                        </option>
                                    <?php } ?>
                                   
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="barber-btn">Book Appointment</button>
                    </div>
                    <div id="message" class="alert-msg"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- appointment Area end -->
<!-- Instagram Feed Area start -->
<section class="instagram-feed bg-dark pt-100">
    <div class="container">
        <h2 class="fw-7 fs-80 font-sec lh-110 color-white mb-48 text-center">INSTAGRAM FEED</h2>
        <div class="d-flex align-items-center flex-wrap space-bootom">
            <div class="img-block">
                <img src="assets\media\InstaFeed\insta-img1.png" alt="">
                <div class="content text-center">
                    <a href="#" class="mb-16">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clidfdfsap0_118_786)">
                                <path
                                    d="M31.9686 9.40809C31.8937 7.7078 31.6187 6.53887 31.2248 5.52598C30.8185 4.45082 30.1934 3.48823 29.3744 2.68803C28.5742 1.87537 27.6052 1.2439 26.5425 0.843915C25.5238 0.450039 24.3609 0.175083 22.6607 0.100117C20.9477 0.0188025 20.4039 0 16.0593 0C11.7147 0 11.1709 0.0188025 9.46424 0.0937683C7.76396 0.168734 6.59503 0.443934 5.58238 0.837566C4.50697 1.2439 3.54438 1.86902 2.74418 2.68803C1.93152 3.48823 1.30029 4.45717 0.900067 5.51988C0.506191 6.53887 0.231235 7.70146 0.15627 9.40174C0.0749548 11.1147 0.0561523 11.6585 0.0561523 16.0031C0.0561523 20.3477 0.0749548 20.8915 0.149921 22.5982C0.224886 24.2984 0.500087 25.4674 0.893962 26.4803C1.30029 27.5554 1.93152 28.518 2.74418 29.3182C3.54438 30.1309 4.51332 30.7624 5.57603 31.1623C6.59503 31.5562 7.75761 31.8312 9.45814 31.9061C11.1645 31.9813 11.7086 31.9999 16.0532 31.9999C20.3978 31.9999 20.9416 31.9813 22.6482 31.9061C24.3485 31.8312 25.5174 31.5562 26.5301 31.1623C28.6806 30.3309 30.3809 28.6306 31.2124 26.4803C31.606 25.4613 31.8812 24.2984 31.9562 22.5982C32.0311 20.8915 32.05 20.3477 32.05 16.0031C32.05 11.6585 32.0436 11.1147 31.9686 9.40809ZM29.087 22.4731C29.0181 24.0359 28.7556 24.8799 28.5368 25.4425C27.9991 26.8365 26.8927 27.943 25.4986 28.4807C24.936 28.6995 24.086 28.962 22.5293 29.0306C20.8415 29.1058 20.3353 29.1243 16.0656 29.1243C11.796 29.1243 11.2834 29.1058 9.60172 29.0306C8.03891 28.962 7.195 28.6995 6.63239 28.4807C5.93865 28.2243 5.30718 27.8179 4.79463 27.2866C4.26327 26.7677 3.85694 26.1426 3.60055 25.4488C3.38175 24.8862 3.11925 24.0359 3.05063 22.4795C2.97542 20.7917 2.95687 20.2852 2.95687 16.0156C2.95687 11.7459 2.97542 11.2334 3.05063 9.55191C3.11925 7.98911 3.38175 7.14519 3.60055 6.58258C3.85694 5.8886 4.26327 5.25737 4.80098 4.74458C5.31963 4.21323 5.94475 3.8069 6.63874 3.55074C7.20135 3.33195 8.05161 3.06945 9.60807 3.00059C11.2959 2.92562 11.8023 2.90682 16.0717 2.90682C20.3477 2.90682 20.8539 2.92562 22.5356 3.00059C24.0984 3.06945 24.9424 3.33195 25.505 3.55074C26.1987 3.8069 26.8302 4.21323 27.3427 4.74458C27.8741 5.26348 28.2804 5.8886 28.5368 6.58258C28.7556 7.14519 29.0181 7.99521 29.087 9.55191C29.1619 11.2397 29.1807 11.7459 29.1807 16.0156C29.1807 20.2852 29.1619 20.7853 29.087 22.4731Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M16.0592 7.78271C11.521 7.78271 7.83887 11.4646 7.83887 16.0031C7.83887 20.5416 11.521 24.2234 16.0592 24.2234C20.5977 24.2234 24.2796 20.5416 24.2796 16.0031C24.2796 11.4646 20.5977 7.78271 16.0592 7.78271ZM16.0592 21.3354C13.115 21.3354 10.7269 18.9475 10.7269 16.0031C10.7269 13.0586 13.115 10.6707 16.0592 10.6707C19.0036 10.6707 21.3916 13.0586 21.3916 16.0031C21.3916 18.9475 19.0036 21.3354 16.0592 21.3354Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M26.5239 7.45765C26.5239 8.51743 25.6646 9.37673 24.6046 9.37673C23.5448 9.37673 22.6855 8.51743 22.6855 7.45765C22.6855 6.39763 23.5448 5.53857 24.6046 5.53857C25.6646 5.53857 26.5239 6.39763 26.5239 7.45765Z"
                                    fill="#AFB1B6" />
                            </g>
                            <defs>
                                <clipPath id="clidfdfsap0_118_786">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <h5 class="fw-4 fs-21 lh-140 color-white m-0">@rosasalon</h5>
                </div>
            </div>
            <div class="img-block">
                <img src="assets\media\InstaFeed\insta-img2.png" alt="">
                <div class="content text-center">
                    <a href="#" class="mb-16">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#cdsafsadlip0_118_786)">
                                <path
                                    d="M31.9686 9.40809C31.8937 7.7078 31.6187 6.53887 31.2248 5.52598C30.8185 4.45082 30.1934 3.48823 29.3744 2.68803C28.5742 1.87537 27.6052 1.2439 26.5425 0.843915C25.5238 0.450039 24.3609 0.175083 22.6607 0.100117C20.9477 0.0188025 20.4039 0 16.0593 0C11.7147 0 11.1709 0.0188025 9.46424 0.0937683C7.76396 0.168734 6.59503 0.443934 5.58238 0.837566C4.50697 1.2439 3.54438 1.86902 2.74418 2.68803C1.93152 3.48823 1.30029 4.45717 0.900067 5.51988C0.506191 6.53887 0.231235 7.70146 0.15627 9.40174C0.0749548 11.1147 0.0561523 11.6585 0.0561523 16.0031C0.0561523 20.3477 0.0749548 20.8915 0.149921 22.5982C0.224886 24.2984 0.500087 25.4674 0.893962 26.4803C1.30029 27.5554 1.93152 28.518 2.74418 29.3182C3.54438 30.1309 4.51332 30.7624 5.57603 31.1623C6.59503 31.5562 7.75761 31.8312 9.45814 31.9061C11.1645 31.9813 11.7086 31.9999 16.0532 31.9999C20.3978 31.9999 20.9416 31.9813 22.6482 31.9061C24.3485 31.8312 25.5174 31.5562 26.5301 31.1623C28.6806 30.3309 30.3809 28.6306 31.2124 26.4803C31.606 25.4613 31.8812 24.2984 31.9562 22.5982C32.0311 20.8915 32.05 20.3477 32.05 16.0031C32.05 11.6585 32.0436 11.1147 31.9686 9.40809ZM29.087 22.4731C29.0181 24.0359 28.7556 24.8799 28.5368 25.4425C27.9991 26.8365 26.8927 27.943 25.4986 28.4807C24.936 28.6995 24.086 28.962 22.5293 29.0306C20.8415 29.1058 20.3353 29.1243 16.0656 29.1243C11.796 29.1243 11.2834 29.1058 9.60172 29.0306C8.03891 28.962 7.195 28.6995 6.63239 28.4807C5.93865 28.2243 5.30718 27.8179 4.79463 27.2866C4.26327 26.7677 3.85694 26.1426 3.60055 25.4488C3.38175 24.8862 3.11925 24.0359 3.05063 22.4795C2.97542 20.7917 2.95687 20.2852 2.95687 16.0156C2.95687 11.7459 2.97542 11.2334 3.05063 9.55191C3.11925 7.98911 3.38175 7.14519 3.60055 6.58258C3.85694 5.8886 4.26327 5.25737 4.80098 4.74458C5.31963 4.21323 5.94475 3.8069 6.63874 3.55074C7.20135 3.33195 8.05161 3.06945 9.60807 3.00059C11.2959 2.92562 11.8023 2.90682 16.0717 2.90682C20.3477 2.90682 20.8539 2.92562 22.5356 3.00059C24.0984 3.06945 24.9424 3.33195 25.505 3.55074C26.1987 3.8069 26.8302 4.21323 27.3427 4.74458C27.8741 5.26348 28.2804 5.8886 28.5368 6.58258C28.7556 7.14519 29.0181 7.99521 29.087 9.55191C29.1619 11.2397 29.1807 11.7459 29.1807 16.0156C29.1807 20.2852 29.1619 20.7853 29.087 22.4731Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M16.0592 7.78271C11.521 7.78271 7.83887 11.4646 7.83887 16.0031C7.83887 20.5416 11.521 24.2234 16.0592 24.2234C20.5977 24.2234 24.2796 20.5416 24.2796 16.0031C24.2796 11.4646 20.5977 7.78271 16.0592 7.78271ZM16.0592 21.3354C13.115 21.3354 10.7269 18.9475 10.7269 16.0031C10.7269 13.0586 13.115 10.6707 16.0592 10.6707C19.0036 10.6707 21.3916 13.0586 21.3916 16.0031C21.3916 18.9475 19.0036 21.3354 16.0592 21.3354Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M26.5239 7.45765C26.5239 8.51743 25.6646 9.37673 24.6046 9.37673C23.5448 9.37673 22.6855 8.51743 22.6855 7.45765C22.6855 6.39763 23.5448 5.53857 24.6046 5.53857C25.6646 5.53857 26.5239 6.39763 26.5239 7.45765Z"
                                    fill="#AFB1B6" />
                            </g>
                            <defs>
                                <clipPath id="cdsafsadlip0_118_786">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <h5 class="fw-4 fs-21 lh-140 color-white m-0">@rosasalon</h5>
                </div>
            </div>
            <div class="img-block">
                <img src="assets\media\InstaFeed\insta-img3.png" alt="">
                <div class="content text-center">
                    <a href="#" class="mb-16">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#cfadlip0_118_786)">
                                <path
                                    d="M31.9686 9.40809C31.8937 7.7078 31.6187 6.53887 31.2248 5.52598C30.8185 4.45082 30.1934 3.48823 29.3744 2.68803C28.5742 1.87537 27.6052 1.2439 26.5425 0.843915C25.5238 0.450039 24.3609 0.175083 22.6607 0.100117C20.9477 0.0188025 20.4039 0 16.0593 0C11.7147 0 11.1709 0.0188025 9.46424 0.0937683C7.76396 0.168734 6.59503 0.443934 5.58238 0.837566C4.50697 1.2439 3.54438 1.86902 2.74418 2.68803C1.93152 3.48823 1.30029 4.45717 0.900067 5.51988C0.506191 6.53887 0.231235 7.70146 0.15627 9.40174C0.0749548 11.1147 0.0561523 11.6585 0.0561523 16.0031C0.0561523 20.3477 0.0749548 20.8915 0.149921 22.5982C0.224886 24.2984 0.500087 25.4674 0.893962 26.4803C1.30029 27.5554 1.93152 28.518 2.74418 29.3182C3.54438 30.1309 4.51332 30.7624 5.57603 31.1623C6.59503 31.5562 7.75761 31.8312 9.45814 31.9061C11.1645 31.9813 11.7086 31.9999 16.0532 31.9999C20.3978 31.9999 20.9416 31.9813 22.6482 31.9061C24.3485 31.8312 25.5174 31.5562 26.5301 31.1623C28.6806 30.3309 30.3809 28.6306 31.2124 26.4803C31.606 25.4613 31.8812 24.2984 31.9562 22.5982C32.0311 20.8915 32.05 20.3477 32.05 16.0031C32.05 11.6585 32.0436 11.1147 31.9686 9.40809ZM29.087 22.4731C29.0181 24.0359 28.7556 24.8799 28.5368 25.4425C27.9991 26.8365 26.8927 27.943 25.4986 28.4807C24.936 28.6995 24.086 28.962 22.5293 29.0306C20.8415 29.1058 20.3353 29.1243 16.0656 29.1243C11.796 29.1243 11.2834 29.1058 9.60172 29.0306C8.03891 28.962 7.195 28.6995 6.63239 28.4807C5.93865 28.2243 5.30718 27.8179 4.79463 27.2866C4.26327 26.7677 3.85694 26.1426 3.60055 25.4488C3.38175 24.8862 3.11925 24.0359 3.05063 22.4795C2.97542 20.7917 2.95687 20.2852 2.95687 16.0156C2.95687 11.7459 2.97542 11.2334 3.05063 9.55191C3.11925 7.98911 3.38175 7.14519 3.60055 6.58258C3.85694 5.8886 4.26327 5.25737 4.80098 4.74458C5.31963 4.21323 5.94475 3.8069 6.63874 3.55074C7.20135 3.33195 8.05161 3.06945 9.60807 3.00059C11.2959 2.92562 11.8023 2.90682 16.0717 2.90682C20.3477 2.90682 20.8539 2.92562 22.5356 3.00059C24.0984 3.06945 24.9424 3.33195 25.505 3.55074C26.1987 3.8069 26.8302 4.21323 27.3427 4.74458C27.8741 5.26348 28.2804 5.8886 28.5368 6.58258C28.7556 7.14519 29.0181 7.99521 29.087 9.55191C29.1619 11.2397 29.1807 11.7459 29.1807 16.0156C29.1807 20.2852 29.1619 20.7853 29.087 22.4731Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M16.0592 7.78271C11.521 7.78271 7.83887 11.4646 7.83887 16.0031C7.83887 20.5416 11.521 24.2234 16.0592 24.2234C20.5977 24.2234 24.2796 20.5416 24.2796 16.0031C24.2796 11.4646 20.5977 7.78271 16.0592 7.78271ZM16.0592 21.3354C13.115 21.3354 10.7269 18.9475 10.7269 16.0031C10.7269 13.0586 13.115 10.6707 16.0592 10.6707C19.0036 10.6707 21.3916 13.0586 21.3916 16.0031C21.3916 18.9475 19.0036 21.3354 16.0592 21.3354Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M26.5239 7.45765C26.5239 8.51743 25.6646 9.37673 24.6046 9.37673C23.5448 9.37673 22.6855 8.51743 22.6855 7.45765C22.6855 6.39763 23.5448 5.53857 24.6046 5.53857C25.6646 5.53857 26.5239 6.39763 26.5239 7.45765Z"
                                    fill="#AFB1B6" />
                            </g>
                            <defs>
                                <clipPath id="cfadlip0_118_786">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <h5 class="fw-4 fs-21 lh-140 color-white m-0">@rosasalon</h5>
                </div>
            </div>
            <div class="img-block">
                <img src="assets\media\InstaFeed\insta-img4.png" alt="">
                <div class="content text-center">
                    <a href="#" class="mb-16">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#cvdlip0_118_78654654)">
                                <path
                                    d="M31.9686 9.40809C31.8937 7.7078 31.6187 6.53887 31.2248 5.52598C30.8185 4.45082 30.1934 3.48823 29.3744 2.68803C28.5742 1.87537 27.6052 1.2439 26.5425 0.843915C25.5238 0.450039 24.3609 0.175083 22.6607 0.100117C20.9477 0.0188025 20.4039 0 16.0593 0C11.7147 0 11.1709 0.0188025 9.46424 0.0937683C7.76396 0.168734 6.59503 0.443934 5.58238 0.837566C4.50697 1.2439 3.54438 1.86902 2.74418 2.68803C1.93152 3.48823 1.30029 4.45717 0.900067 5.51988C0.506191 6.53887 0.231235 7.70146 0.15627 9.40174C0.0749548 11.1147 0.0561523 11.6585 0.0561523 16.0031C0.0561523 20.3477 0.0749548 20.8915 0.149921 22.5982C0.224886 24.2984 0.500087 25.4674 0.893962 26.4803C1.30029 27.5554 1.93152 28.518 2.74418 29.3182C3.54438 30.1309 4.51332 30.7624 5.57603 31.1623C6.59503 31.5562 7.75761 31.8312 9.45814 31.9061C11.1645 31.9813 11.7086 31.9999 16.0532 31.9999C20.3978 31.9999 20.9416 31.9813 22.6482 31.9061C24.3485 31.8312 25.5174 31.5562 26.5301 31.1623C28.6806 30.3309 30.3809 28.6306 31.2124 26.4803C31.606 25.4613 31.8812 24.2984 31.9562 22.5982C32.0311 20.8915 32.05 20.3477 32.05 16.0031C32.05 11.6585 32.0436 11.1147 31.9686 9.40809ZM29.087 22.4731C29.0181 24.0359 28.7556 24.8799 28.5368 25.4425C27.9991 26.8365 26.8927 27.943 25.4986 28.4807C24.936 28.6995 24.086 28.962 22.5293 29.0306C20.8415 29.1058 20.3353 29.1243 16.0656 29.1243C11.796 29.1243 11.2834 29.1058 9.60172 29.0306C8.03891 28.962 7.195 28.6995 6.63239 28.4807C5.93865 28.2243 5.30718 27.8179 4.79463 27.2866C4.26327 26.7677 3.85694 26.1426 3.60055 25.4488C3.38175 24.8862 3.11925 24.0359 3.05063 22.4795C2.97542 20.7917 2.95687 20.2852 2.95687 16.0156C2.95687 11.7459 2.97542 11.2334 3.05063 9.55191C3.11925 7.98911 3.38175 7.14519 3.60055 6.58258C3.85694 5.8886 4.26327 5.25737 4.80098 4.74458C5.31963 4.21323 5.94475 3.8069 6.63874 3.55074C7.20135 3.33195 8.05161 3.06945 9.60807 3.00059C11.2959 2.92562 11.8023 2.90682 16.0717 2.90682C20.3477 2.90682 20.8539 2.92562 22.5356 3.00059C24.0984 3.06945 24.9424 3.33195 25.505 3.55074C26.1987 3.8069 26.8302 4.21323 27.3427 4.74458C27.8741 5.26348 28.2804 5.8886 28.5368 6.58258C28.7556 7.14519 29.0181 7.99521 29.087 9.55191C29.1619 11.2397 29.1807 11.7459 29.1807 16.0156C29.1807 20.2852 29.1619 20.7853 29.087 22.4731Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M16.0592 7.78271C11.521 7.78271 7.83887 11.4646 7.83887 16.0031C7.83887 20.5416 11.521 24.2234 16.0592 24.2234C20.5977 24.2234 24.2796 20.5416 24.2796 16.0031C24.2796 11.4646 20.5977 7.78271 16.0592 7.78271ZM16.0592 21.3354C13.115 21.3354 10.7269 18.9475 10.7269 16.0031C10.7269 13.0586 13.115 10.6707 16.0592 10.6707C19.0036 10.6707 21.3916 13.0586 21.3916 16.0031C21.3916 18.9475 19.0036 21.3354 16.0592 21.3354Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M26.5239 7.45765C26.5239 8.51743 25.6646 9.37673 24.6046 9.37673C23.5448 9.37673 22.6855 8.51743 22.6855 7.45765C22.6855 6.39763 23.5448 5.53857 24.6046 5.53857C25.6646 5.53857 26.5239 6.39763 26.5239 7.45765Z"
                                    fill="#AFB1B6" />
                            </g>
                            <defs>
                                <clipPath id="cvdlip0_118_78654654">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <h5 class="fw-4 fs-21 lh-140 color-white m-0">@rosasalon</h5>
                </div>
            </div>
            <div class="img-block">
                <img src="assets\media\InstaFeed\insta-img5.png" alt="">
                <div class="content text-center">
                    <a href="#" class="mb-16">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0gfs_118_786)">
                                <path
                                    d="M31.9686 9.40809C31.8937 7.7078 31.6187 6.53887 31.2248 5.52598C30.8185 4.45082 30.1934 3.48823 29.3744 2.68803C28.5742 1.87537 27.6052 1.2439 26.5425 0.843915C25.5238 0.450039 24.3609 0.175083 22.6607 0.100117C20.9477 0.0188025 20.4039 0 16.0593 0C11.7147 0 11.1709 0.0188025 9.46424 0.0937683C7.76396 0.168734 6.59503 0.443934 5.58238 0.837566C4.50697 1.2439 3.54438 1.86902 2.74418 2.68803C1.93152 3.48823 1.30029 4.45717 0.900067 5.51988C0.506191 6.53887 0.231235 7.70146 0.15627 9.40174C0.0749548 11.1147 0.0561523 11.6585 0.0561523 16.0031C0.0561523 20.3477 0.0749548 20.8915 0.149921 22.5982C0.224886 24.2984 0.500087 25.4674 0.893962 26.4803C1.30029 27.5554 1.93152 28.518 2.74418 29.3182C3.54438 30.1309 4.51332 30.7624 5.57603 31.1623C6.59503 31.5562 7.75761 31.8312 9.45814 31.9061C11.1645 31.9813 11.7086 31.9999 16.0532 31.9999C20.3978 31.9999 20.9416 31.9813 22.6482 31.9061C24.3485 31.8312 25.5174 31.5562 26.5301 31.1623C28.6806 30.3309 30.3809 28.6306 31.2124 26.4803C31.606 25.4613 31.8812 24.2984 31.9562 22.5982C32.0311 20.8915 32.05 20.3477 32.05 16.0031C32.05 11.6585 32.0436 11.1147 31.9686 9.40809ZM29.087 22.4731C29.0181 24.0359 28.7556 24.8799 28.5368 25.4425C27.9991 26.8365 26.8927 27.943 25.4986 28.4807C24.936 28.6995 24.086 28.962 22.5293 29.0306C20.8415 29.1058 20.3353 29.1243 16.0656 29.1243C11.796 29.1243 11.2834 29.1058 9.60172 29.0306C8.03891 28.962 7.195 28.6995 6.63239 28.4807C5.93865 28.2243 5.30718 27.8179 4.79463 27.2866C4.26327 26.7677 3.85694 26.1426 3.60055 25.4488C3.38175 24.8862 3.11925 24.0359 3.05063 22.4795C2.97542 20.7917 2.95687 20.2852 2.95687 16.0156C2.95687 11.7459 2.97542 11.2334 3.05063 9.55191C3.11925 7.98911 3.38175 7.14519 3.60055 6.58258C3.85694 5.8886 4.26327 5.25737 4.80098 4.74458C5.31963 4.21323 5.94475 3.8069 6.63874 3.55074C7.20135 3.33195 8.05161 3.06945 9.60807 3.00059C11.2959 2.92562 11.8023 2.90682 16.0717 2.90682C20.3477 2.90682 20.8539 2.92562 22.5356 3.00059C24.0984 3.06945 24.9424 3.33195 25.505 3.55074C26.1987 3.8069 26.8302 4.21323 27.3427 4.74458C27.8741 5.26348 28.2804 5.8886 28.5368 6.58258C28.7556 7.14519 29.0181 7.99521 29.087 9.55191C29.1619 11.2397 29.1807 11.7459 29.1807 16.0156C29.1807 20.2852 29.1619 20.7853 29.087 22.4731Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M16.0592 7.78271C11.521 7.78271 7.83887 11.4646 7.83887 16.0031C7.83887 20.5416 11.521 24.2234 16.0592 24.2234C20.5977 24.2234 24.2796 20.5416 24.2796 16.0031C24.2796 11.4646 20.5977 7.78271 16.0592 7.78271ZM16.0592 21.3354C13.115 21.3354 10.7269 18.9475 10.7269 16.0031C10.7269 13.0586 13.115 10.6707 16.0592 10.6707C19.0036 10.6707 21.3916 13.0586 21.3916 16.0031C21.3916 18.9475 19.0036 21.3354 16.0592 21.3354Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M26.5239 7.45765C26.5239 8.51743 25.6646 9.37673 24.6046 9.37673C23.5448 9.37673 22.6855 8.51743 22.6855 7.45765C22.6855 6.39763 23.5448 5.53857 24.6046 5.53857C25.6646 5.53857 26.5239 6.39763 26.5239 7.45765Z"
                                    fill="#AFB1B6" />
                            </g>
                            <defs>
                                <clipPath id="clip0gfs_118_786">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <h5 class="fw-4 fs-21 lh-140 color-white m-0">@rosasalon</h5>
                </div>
            </div>
            <div class="img-block">
                <img src="assets\media\InstaFeed\insta-img6.png" alt="">
                <div class="content text-center">
                    <a href="#" class="mb-16">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#fdgskjclip0_118_786)">
                                <path
                                    d="M31.9686 9.40809C31.8937 7.7078 31.6187 6.53887 31.2248 5.52598C30.8185 4.45082 30.1934 3.48823 29.3744 2.68803C28.5742 1.87537 27.6052 1.2439 26.5425 0.843915C25.5238 0.450039 24.3609 0.175083 22.6607 0.100117C20.9477 0.0188025 20.4039 0 16.0593 0C11.7147 0 11.1709 0.0188025 9.46424 0.0937683C7.76396 0.168734 6.59503 0.443934 5.58238 0.837566C4.50697 1.2439 3.54438 1.86902 2.74418 2.68803C1.93152 3.48823 1.30029 4.45717 0.900067 5.51988C0.506191 6.53887 0.231235 7.70146 0.15627 9.40174C0.0749548 11.1147 0.0561523 11.6585 0.0561523 16.0031C0.0561523 20.3477 0.0749548 20.8915 0.149921 22.5982C0.224886 24.2984 0.500087 25.4674 0.893962 26.4803C1.30029 27.5554 1.93152 28.518 2.74418 29.3182C3.54438 30.1309 4.51332 30.7624 5.57603 31.1623C6.59503 31.5562 7.75761 31.8312 9.45814 31.9061C11.1645 31.9813 11.7086 31.9999 16.0532 31.9999C20.3978 31.9999 20.9416 31.9813 22.6482 31.9061C24.3485 31.8312 25.5174 31.5562 26.5301 31.1623C28.6806 30.3309 30.3809 28.6306 31.2124 26.4803C31.606 25.4613 31.8812 24.2984 31.9562 22.5982C32.0311 20.8915 32.05 20.3477 32.05 16.0031C32.05 11.6585 32.0436 11.1147 31.9686 9.40809ZM29.087 22.4731C29.0181 24.0359 28.7556 24.8799 28.5368 25.4425C27.9991 26.8365 26.8927 27.943 25.4986 28.4807C24.936 28.6995 24.086 28.962 22.5293 29.0306C20.8415 29.1058 20.3353 29.1243 16.0656 29.1243C11.796 29.1243 11.2834 29.1058 9.60172 29.0306C8.03891 28.962 7.195 28.6995 6.63239 28.4807C5.93865 28.2243 5.30718 27.8179 4.79463 27.2866C4.26327 26.7677 3.85694 26.1426 3.60055 25.4488C3.38175 24.8862 3.11925 24.0359 3.05063 22.4795C2.97542 20.7917 2.95687 20.2852 2.95687 16.0156C2.95687 11.7459 2.97542 11.2334 3.05063 9.55191C3.11925 7.98911 3.38175 7.14519 3.60055 6.58258C3.85694 5.8886 4.26327 5.25737 4.80098 4.74458C5.31963 4.21323 5.94475 3.8069 6.63874 3.55074C7.20135 3.33195 8.05161 3.06945 9.60807 3.00059C11.2959 2.92562 11.8023 2.90682 16.0717 2.90682C20.3477 2.90682 20.8539 2.92562 22.5356 3.00059C24.0984 3.06945 24.9424 3.33195 25.505 3.55074C26.1987 3.8069 26.8302 4.21323 27.3427 4.74458C27.8741 5.26348 28.2804 5.8886 28.5368 6.58258C28.7556 7.14519 29.0181 7.99521 29.087 9.55191C29.1619 11.2397 29.1807 11.7459 29.1807 16.0156C29.1807 20.2852 29.1619 20.7853 29.087 22.4731Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M16.0592 7.78271C11.521 7.78271 7.83887 11.4646 7.83887 16.0031C7.83887 20.5416 11.521 24.2234 16.0592 24.2234C20.5977 24.2234 24.2796 20.5416 24.2796 16.0031C24.2796 11.4646 20.5977 7.78271 16.0592 7.78271ZM16.0592 21.3354C13.115 21.3354 10.7269 18.9475 10.7269 16.0031C10.7269 13.0586 13.115 10.6707 16.0592 10.6707C19.0036 10.6707 21.3916 13.0586 21.3916 16.0031C21.3916 18.9475 19.0036 21.3354 16.0592 21.3354Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M26.5239 7.45765C26.5239 8.51743 25.6646 9.37673 24.6046 9.37673C23.5448 9.37673 22.6855 8.51743 22.6855 7.45765C22.6855 6.39763 23.5448 5.53857 24.6046 5.53857C25.6646 5.53857 26.5239 6.39763 26.5239 7.45765Z"
                                    fill="#AFB1B6" />
                            </g>
                            <defs>
                                <clipPath id="fdgskjclip0_118_786">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <h5 class="fw-4 fs-21 lh-140 color-white m-0">@rosasalon</h5>
                </div>
            </div>
            <div class="img-block">
                <img src="assets\media\InstaFeed\insta-img7.png" alt="">
                <div class="content text-center">
                    <a href="#" class="mb-16">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clifsdgp0_118_786)">
                                <path
                                    d="M31.9686 9.40809C31.8937 7.7078 31.6187 6.53887 31.2248 5.52598C30.8185 4.45082 30.1934 3.48823 29.3744 2.68803C28.5742 1.87537 27.6052 1.2439 26.5425 0.843915C25.5238 0.450039 24.3609 0.175083 22.6607 0.100117C20.9477 0.0188025 20.4039 0 16.0593 0C11.7147 0 11.1709 0.0188025 9.46424 0.0937683C7.76396 0.168734 6.59503 0.443934 5.58238 0.837566C4.50697 1.2439 3.54438 1.86902 2.74418 2.68803C1.93152 3.48823 1.30029 4.45717 0.900067 5.51988C0.506191 6.53887 0.231235 7.70146 0.15627 9.40174C0.0749548 11.1147 0.0561523 11.6585 0.0561523 16.0031C0.0561523 20.3477 0.0749548 20.8915 0.149921 22.5982C0.224886 24.2984 0.500087 25.4674 0.893962 26.4803C1.30029 27.5554 1.93152 28.518 2.74418 29.3182C3.54438 30.1309 4.51332 30.7624 5.57603 31.1623C6.59503 31.5562 7.75761 31.8312 9.45814 31.9061C11.1645 31.9813 11.7086 31.9999 16.0532 31.9999C20.3978 31.9999 20.9416 31.9813 22.6482 31.9061C24.3485 31.8312 25.5174 31.5562 26.5301 31.1623C28.6806 30.3309 30.3809 28.6306 31.2124 26.4803C31.606 25.4613 31.8812 24.2984 31.9562 22.5982C32.0311 20.8915 32.05 20.3477 32.05 16.0031C32.05 11.6585 32.0436 11.1147 31.9686 9.40809ZM29.087 22.4731C29.0181 24.0359 28.7556 24.8799 28.5368 25.4425C27.9991 26.8365 26.8927 27.943 25.4986 28.4807C24.936 28.6995 24.086 28.962 22.5293 29.0306C20.8415 29.1058 20.3353 29.1243 16.0656 29.1243C11.796 29.1243 11.2834 29.1058 9.60172 29.0306C8.03891 28.962 7.195 28.6995 6.63239 28.4807C5.93865 28.2243 5.30718 27.8179 4.79463 27.2866C4.26327 26.7677 3.85694 26.1426 3.60055 25.4488C3.38175 24.8862 3.11925 24.0359 3.05063 22.4795C2.97542 20.7917 2.95687 20.2852 2.95687 16.0156C2.95687 11.7459 2.97542 11.2334 3.05063 9.55191C3.11925 7.98911 3.38175 7.14519 3.60055 6.58258C3.85694 5.8886 4.26327 5.25737 4.80098 4.74458C5.31963 4.21323 5.94475 3.8069 6.63874 3.55074C7.20135 3.33195 8.05161 3.06945 9.60807 3.00059C11.2959 2.92562 11.8023 2.90682 16.0717 2.90682C20.3477 2.90682 20.8539 2.92562 22.5356 3.00059C24.0984 3.06945 24.9424 3.33195 25.505 3.55074C26.1987 3.8069 26.8302 4.21323 27.3427 4.74458C27.8741 5.26348 28.2804 5.8886 28.5368 6.58258C28.7556 7.14519 29.0181 7.99521 29.087 9.55191C29.1619 11.2397 29.1807 11.7459 29.1807 16.0156C29.1807 20.2852 29.1619 20.7853 29.087 22.4731Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M16.0592 7.78271C11.521 7.78271 7.83887 11.4646 7.83887 16.0031C7.83887 20.5416 11.521 24.2234 16.0592 24.2234C20.5977 24.2234 24.2796 20.5416 24.2796 16.0031C24.2796 11.4646 20.5977 7.78271 16.0592 7.78271ZM16.0592 21.3354C13.115 21.3354 10.7269 18.9475 10.7269 16.0031C10.7269 13.0586 13.115 10.6707 16.0592 10.6707C19.0036 10.6707 21.3916 13.0586 21.3916 16.0031C21.3916 18.9475 19.0036 21.3354 16.0592 21.3354Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M26.5239 7.45765C26.5239 8.51743 25.6646 9.37673 24.6046 9.37673C23.5448 9.37673 22.6855 8.51743 22.6855 7.45765C22.6855 6.39763 23.5448 5.53857 24.6046 5.53857C25.6646 5.53857 26.5239 6.39763 26.5239 7.45765Z"
                                    fill="#AFB1B6" />
                            </g>
                            <defs>
                                <clipPath id="clifsdgp0_118_786">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <h5 class="fw-4 fs-21 lh-140 color-white m-0">@rosasalon</h5>
                </div>
            </div>
            <div class="img-block">
                <img src="assets\media\InstaFeed\insta-img8.png" alt="">
                <div class="content text-center">
                    <a href="#" class="mb-16">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clifghsdhp0_118_786)">
                                <path
                                    d="M31.9686 9.40809C31.8937 7.7078 31.6187 6.53887 31.2248 5.52598C30.8185 4.45082 30.1934 3.48823 29.3744 2.68803C28.5742 1.87537 27.6052 1.2439 26.5425 0.843915C25.5238 0.450039 24.3609 0.175083 22.6607 0.100117C20.9477 0.0188025 20.4039 0 16.0593 0C11.7147 0 11.1709 0.0188025 9.46424 0.0937683C7.76396 0.168734 6.59503 0.443934 5.58238 0.837566C4.50697 1.2439 3.54438 1.86902 2.74418 2.68803C1.93152 3.48823 1.30029 4.45717 0.900067 5.51988C0.506191 6.53887 0.231235 7.70146 0.15627 9.40174C0.0749548 11.1147 0.0561523 11.6585 0.0561523 16.0031C0.0561523 20.3477 0.0749548 20.8915 0.149921 22.5982C0.224886 24.2984 0.500087 25.4674 0.893962 26.4803C1.30029 27.5554 1.93152 28.518 2.74418 29.3182C3.54438 30.1309 4.51332 30.7624 5.57603 31.1623C6.59503 31.5562 7.75761 31.8312 9.45814 31.9061C11.1645 31.9813 11.7086 31.9999 16.0532 31.9999C20.3978 31.9999 20.9416 31.9813 22.6482 31.9061C24.3485 31.8312 25.5174 31.5562 26.5301 31.1623C28.6806 30.3309 30.3809 28.6306 31.2124 26.4803C31.606 25.4613 31.8812 24.2984 31.9562 22.5982C32.0311 20.8915 32.05 20.3477 32.05 16.0031C32.05 11.6585 32.0436 11.1147 31.9686 9.40809ZM29.087 22.4731C29.0181 24.0359 28.7556 24.8799 28.5368 25.4425C27.9991 26.8365 26.8927 27.943 25.4986 28.4807C24.936 28.6995 24.086 28.962 22.5293 29.0306C20.8415 29.1058 20.3353 29.1243 16.0656 29.1243C11.796 29.1243 11.2834 29.1058 9.60172 29.0306C8.03891 28.962 7.195 28.6995 6.63239 28.4807C5.93865 28.2243 5.30718 27.8179 4.79463 27.2866C4.26327 26.7677 3.85694 26.1426 3.60055 25.4488C3.38175 24.8862 3.11925 24.0359 3.05063 22.4795C2.97542 20.7917 2.95687 20.2852 2.95687 16.0156C2.95687 11.7459 2.97542 11.2334 3.05063 9.55191C3.11925 7.98911 3.38175 7.14519 3.60055 6.58258C3.85694 5.8886 4.26327 5.25737 4.80098 4.74458C5.31963 4.21323 5.94475 3.8069 6.63874 3.55074C7.20135 3.33195 8.05161 3.06945 9.60807 3.00059C11.2959 2.92562 11.8023 2.90682 16.0717 2.90682C20.3477 2.90682 20.8539 2.92562 22.5356 3.00059C24.0984 3.06945 24.9424 3.33195 25.505 3.55074C26.1987 3.8069 26.8302 4.21323 27.3427 4.74458C27.8741 5.26348 28.2804 5.8886 28.5368 6.58258C28.7556 7.14519 29.0181 7.99521 29.087 9.55191C29.1619 11.2397 29.1807 11.7459 29.1807 16.0156C29.1807 20.2852 29.1619 20.7853 29.087 22.4731Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M16.0592 7.78271C11.521 7.78271 7.83887 11.4646 7.83887 16.0031C7.83887 20.5416 11.521 24.2234 16.0592 24.2234C20.5977 24.2234 24.2796 20.5416 24.2796 16.0031C24.2796 11.4646 20.5977 7.78271 16.0592 7.78271ZM16.0592 21.3354C13.115 21.3354 10.7269 18.9475 10.7269 16.0031C10.7269 13.0586 13.115 10.6707 16.0592 10.6707C19.0036 10.6707 21.3916 13.0586 21.3916 16.0031C21.3916 18.9475 19.0036 21.3354 16.0592 21.3354Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M26.5239 7.45765C26.5239 8.51743 25.6646 9.37673 24.6046 9.37673C23.5448 9.37673 22.6855 8.51743 22.6855 7.45765C22.6855 6.39763 23.5448 5.53857 24.6046 5.53857C25.6646 5.53857 26.5239 6.39763 26.5239 7.45765Z"
                                    fill="#AFB1B6" />
                            </g>
                            <defs>
                                <clipPath id="clifghsdhp0_118_786">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <h5 class="fw-4 fs-21 lh-140 color-white m-0">@rosasalon</h5>
                </div>
            </div>
            <div class="img-block d-md-block d-none">
                <img src="assets\media\InstaFeed\insta-img9.png" alt="">
                <div class="content text-center">
                    <a href="#" class="mb-16">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0gsfdg_118_786)">
                                <path
                                    d="M31.9686 9.40809C31.8937 7.7078 31.6187 6.53887 31.2248 5.52598C30.8185 4.45082 30.1934 3.48823 29.3744 2.68803C28.5742 1.87537 27.6052 1.2439 26.5425 0.843915C25.5238 0.450039 24.3609 0.175083 22.6607 0.100117C20.9477 0.0188025 20.4039 0 16.0593 0C11.7147 0 11.1709 0.0188025 9.46424 0.0937683C7.76396 0.168734 6.59503 0.443934 5.58238 0.837566C4.50697 1.2439 3.54438 1.86902 2.74418 2.68803C1.93152 3.48823 1.30029 4.45717 0.900067 5.51988C0.506191 6.53887 0.231235 7.70146 0.15627 9.40174C0.0749548 11.1147 0.0561523 11.6585 0.0561523 16.0031C0.0561523 20.3477 0.0749548 20.8915 0.149921 22.5982C0.224886 24.2984 0.500087 25.4674 0.893962 26.4803C1.30029 27.5554 1.93152 28.518 2.74418 29.3182C3.54438 30.1309 4.51332 30.7624 5.57603 31.1623C6.59503 31.5562 7.75761 31.8312 9.45814 31.9061C11.1645 31.9813 11.7086 31.9999 16.0532 31.9999C20.3978 31.9999 20.9416 31.9813 22.6482 31.9061C24.3485 31.8312 25.5174 31.5562 26.5301 31.1623C28.6806 30.3309 30.3809 28.6306 31.2124 26.4803C31.606 25.4613 31.8812 24.2984 31.9562 22.5982C32.0311 20.8915 32.05 20.3477 32.05 16.0031C32.05 11.6585 32.0436 11.1147 31.9686 9.40809ZM29.087 22.4731C29.0181 24.0359 28.7556 24.8799 28.5368 25.4425C27.9991 26.8365 26.8927 27.943 25.4986 28.4807C24.936 28.6995 24.086 28.962 22.5293 29.0306C20.8415 29.1058 20.3353 29.1243 16.0656 29.1243C11.796 29.1243 11.2834 29.1058 9.60172 29.0306C8.03891 28.962 7.195 28.6995 6.63239 28.4807C5.93865 28.2243 5.30718 27.8179 4.79463 27.2866C4.26327 26.7677 3.85694 26.1426 3.60055 25.4488C3.38175 24.8862 3.11925 24.0359 3.05063 22.4795C2.97542 20.7917 2.95687 20.2852 2.95687 16.0156C2.95687 11.7459 2.97542 11.2334 3.05063 9.55191C3.11925 7.98911 3.38175 7.14519 3.60055 6.58258C3.85694 5.8886 4.26327 5.25737 4.80098 4.74458C5.31963 4.21323 5.94475 3.8069 6.63874 3.55074C7.20135 3.33195 8.05161 3.06945 9.60807 3.00059C11.2959 2.92562 11.8023 2.90682 16.0717 2.90682C20.3477 2.90682 20.8539 2.92562 22.5356 3.00059C24.0984 3.06945 24.9424 3.33195 25.505 3.55074C26.1987 3.8069 26.8302 4.21323 27.3427 4.74458C27.8741 5.26348 28.2804 5.8886 28.5368 6.58258C28.7556 7.14519 29.0181 7.99521 29.087 9.55191C29.1619 11.2397 29.1807 11.7459 29.1807 16.0156C29.1807 20.2852 29.1619 20.7853 29.087 22.4731Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M16.0592 7.78271C11.521 7.78271 7.83887 11.4646 7.83887 16.0031C7.83887 20.5416 11.521 24.2234 16.0592 24.2234C20.5977 24.2234 24.2796 20.5416 24.2796 16.0031C24.2796 11.4646 20.5977 7.78271 16.0592 7.78271ZM16.0592 21.3354C13.115 21.3354 10.7269 18.9475 10.7269 16.0031C10.7269 13.0586 13.115 10.6707 16.0592 10.6707C19.0036 10.6707 21.3916 13.0586 21.3916 16.0031C21.3916 18.9475 19.0036 21.3354 16.0592 21.3354Z"
                                    fill="#AFB1B6" />
                                <path
                                    d="M26.5239 7.45765C26.5239 8.51743 25.6646 9.37673 24.6046 9.37673C23.5448 9.37673 22.6855 8.51743 22.6855 7.45765C22.6855 6.39763 23.5448 5.53857 24.6046 5.53857C25.6646 5.53857 26.5239 6.39763 26.5239 7.45765Z"
                                    fill="#AFB1B6" />
                            </g>
                            <defs>
                                <clipPath id="clip0gsfdg_118_786">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <h5 class="fw-4 fs-21 lh-140 color-white m-0">@rosasalon</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Feed Area End -->


<!-- feedback Area start -->
<section class="feedback bg-dark pt-100 pb-100">
    <div class="container">
        <h2 class="fw-7 fs-80 font-sec lh-110 color-white mb-48 text-center">CUSTOMER FEEDBACK</h2>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="customer-feed mb-32">
                    <img src="assets/media/sm-img1.png" class="costumer-logo" alt="">
                    <div class="content">
                        <h4 class="fw-7 fs-21 color-white lh-110 font-sec mb-16">Fresco Miller</h4>
                        <p class="lh-150 color-gray-3 m-0">I've been coming to Trim & Style for years, and they never
                            disappoint. The barbers are friendly, professional.</p>
                    </div>
                    <img src="assets/media/icon/qotation-icon.png" class="quite-icon" alt="">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="customer-feed mb-32">
                    <img src="assets/media/sm-img2.png" class="costumer-logo" alt="">
                    <div class="content">
                        <h4 class="fw-7 fs-21 color-white lh-110 font-sec mb-16">Dave Walker</h4>
                        <p class="lh-150 color-gray-3 m-0">I had an amazing experience at Trim & Style! The barber was
                            incredibly skilled and attentive to detail.</p>
                    </div>
                    <img src="assets/media/icon/qotation-icon.png" class="quite-icon" alt="">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="customer-feed mb-32 mb-lg-0">
                    <img src="assets/media/sm-img3.png" class="costumer-logo" alt="">
                    <div class="content">
                        <h4 class="fw-7 fs-21 color-white lh-110 font-sec mb-16">Austin Silco</h4>
                        <p class="lh-150 color-gray-3 m-0">I recently tried Trim & Style for the first time. The
                            atmosphere is welcoming, the barbers are skilled professionals.</p>
                    </div>
                    <img src="assets/media/icon/qotation-icon.png" class="quite-icon" alt="">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="customer-feed">
                    <img src="assets/media/sm-img3.png" class="costumer-logo" alt="">
                    <div class="content">
                        <h4 class="fw-7 fs-21 color-white lh-110 font-sec mb-16">Jeager Milka</h4>
                        <p class="lh-150 color-gray-3 m-0">I visited Trim & Style for a hair styling session before a
                            special event, and I couldn't have been more satisfied.</p>
                    </div>
                    <img src="assets/media/icon/qotation-icon.png" class="quite-icon" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feedback Area end -->

<?php include "assets/required/_footer.php" ?>