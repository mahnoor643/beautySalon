
<?php
error_reporting(0);
include "./assets/required/_header.php";
require "./assets/conn.php";
?>


<!-- banner Area end -->
<section class="inner-banner">
    <div class="container">
        <div class="text-center">
            <h2 class="fw-7 fs-105 lh-120 color-white mb-16">SERVICES</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="services.php" class="active">Service</a>
                </li>
            </ul>

        </div>
    </div>
</section>
<!-- banner Area end -->

<!-- services Area start -->
<div class="service bg-dark pt-100 pb-100">
    <div class="container">
        <?php
            $sql1="SELECT * FROM services";
            $sql1Run=mysqli_query($conn,$sql1);
            while($row=mysqli_fetch_array($sql1Run)){
        ?>
        <div class="service-detail mb-48">
            <div class="row">
                <div class="col-lg-5 col-sm-8 ">
                    <img src="<?php echo $row['serviceImg']; ?>" class="mb-24 w-100" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="content mb-24">
                        <h2 class="fw-7 fs-36 color-white lh-110 font-sec title"><?php echo $row['serviceTitle']; ?></h2>
                        <p class="color-gray-3 lh-150 mb-32"><?php echo $row['serviceDescription']; ?></p>
                        <ul class="list">
                            <?php
                                $id=$row['serviceID'];
                                $sql4="select * from serviceExpertise where serviceID='$id' LIMIT 3";
                                $sql4Run=mysqli_query($conn,$sql4);
                                while($row4=mysqli_fetch_array($sql4Run)){
                            ?>
                            <li class="fs-21 mb-16"><?php echo $row4['serviceExperty']; ?></li>
                            <?php
                                }
                            ?>
                            <!-- <li class="fs-21 mb-16">Trendy and Versatile</li>
                            <li class="fs-21 mb-48">Finishing Touches</li> -->
                        </ul>
                        <button class="barber-btn modal-popup">Book Appointment</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
        <!-- <div class="service-detail mb-48">
            <div class="row">
                <div class="col-lg-5 col-sm-8 ">
                    <img src="bleach-img.png" class="mb-24 w-100" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="content mb-24">
                        <h2 class="fw-7 fs-36 color-white lh-110 font-sec title">HAIR CUT</h2>
                        <p class="color-gray-3 lh-150 mb-32">At Trim & Style, we take pride in delivering precision
                            haircuts that leave you looking sharp and confident. Our talented barbers are trained in the
                            latest cutting techniques and styles, ensuring that you receive a tailored haircut that
                            suits your face shape, hair type, and personal style. Whether you prefer a traditional,
                            clean-cut look or a modern, edgy hairstyle, we'll provide meticulous attention to detail to
                            achieve the perfect cut.</p>
                        <ul class="list">
                            <li class="fs-21 mb-16">Tailored Haircuts</li>
                            <li class="fs-21 mb-16">Clean and Precise</li>
                            <li class="fs-21 mb-48">Refresh and Transform</li>
                        </ul>
                        <button class="barber-btn modal-popup">Book Appointment</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-detail mb-48">
            <div class="row">
                <div class="col-lg-5 col-sm-8 ">
                    <img src="manicure-img.png" class="mb-24 w-100" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="content mb-24">
                        <h2 class="fw-7 fs-36 color-white lh-110 font-sec title">BEARD TRIM</h2>
                        <p class="color-gray-3 lh-150 mb-32">Our beard grooming services are designed to help you
                            maintain a well-groomed and polished appearance. Our skilled barbers specialize in beard
                            shaping, trimming, and detailing to enhance your facial features and achieve a neat and
                            stylish beard. Whether you're going for a full beard, a finely sculpted look, or a clean and
                            defined outline, we'll ensure your beard is expertly trimmed and shaped to your desired
                            specifications.</p>
                        <ul class="list">
                            <li class="fs-21 mb-16">Expert Beard Shaping</li>
                            <li class="fs-21 mb-16">Grooming and Maintenance</li>
                            <li class="fs-21 mb-48">Personalized Advice</li>
                        </ul>
                        <button class="barber-btn modal-popup">Book Appointment</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-detail mb-32">
            <div class="row">
                <div class="col-lg-5 col-sm-8 ">
                    <img src="hair-img4.png" class="mb-xl-0 mb-24 w-100" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="content mb-24">
                        <h2 class="fw-7 fs-36 color-white lh-110 font-sec title">HAIR WASH</h2>
                        <p class="color-gray-3 lh-150 mb-32">Sit back and relax while we treat you to a rejuvenating
                            hair wash experience. Our hair wash service goes beyond cleansing; it revitalizes your hair
                            and scalp, leaving them feeling refreshed and nourished. We use high-quality hair care
                            products that are tailored to your specific hair type and needs. Our attentive staff will
                            provide a soothing scalp massage, ensuring a relaxing and invigorating experience.</p>
                        <ul class="list">
                            <li class="fs-21 mb-16">Deep Cleansing and Nourishment</li>
                            <li class="fs-21 mb-16">Relaxation and Rejuvenation</li>
                            <li class="fs-21 mb-48">Healthy Hair Care</li>
                        </ul>
                        <button class="barber-btn modal-popup">Book Appointment</button>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- services Area start -->

<!-- Pricing Area start -->
<section class="pricing bg-dark pt-100 pb-100">
    <div class="container">
        <h2 class="fw-7 fs-80 font-sec lh-110 color-white mb-48 text-center">GROOM PACKAGES</h2>
        <div class="row">
            <?php
            $sql3 = "select * from packages";
            $sql3Run = mysqli_query($conn, $sql3);
            while ($row3 = mysqli_fetch_array($sql3Run)) {
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
                            <!-- <li>Face Bleach</li>
                                    <li>Neck Bleach</li>
                                    <li>Hand Bleach</li>
                                    <li>Black Head Back</li>
                                    <li>Professional Hair Cut</li>
                                    <li>Quick Manicure</li> -->
                        </ul>
                        <button class="barber-btn modal-popup">Book Now</button>
                    </div>
                </div>
            <?php } ?>
            <!-- <div class="col-lg-4 col-sm-6">
                            <div class="pricing-block mb-32 mb-lg-0">
                                <h2 class="title fs-47 fw-7 lh-120 bg-dark-3">DEAL 2</h2>
                                <h3 class="price fs-47 fw-7 lh-120 color-primary">$400</h3>
                                <ul class="offer-services unstyled">
                                    <li>Dermacos Facial</li>
                                    <li>Face Bleach</li>
                                    <li>Neck Bleach</li>
                                    <li>Hand Bleach</li>
                                    <li>Black Head Back</li>
                                    <li>Professional Hair Cut</li>
                                    <li>Quick Manicure</li>
                                </ul>
                                <button class="barber-btn modal-popup">Book Now</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 ">
                            <div class="pricing-block">
                                <h2 class="title fs-47 fw-7 lh-120 bg-dark-3">DEAL 3</h2>
                                <h3 class="price fs-47 fw-7 lh-120 color-primary">$500</h3>
                                <ul class="offer-services unstyled">
                                    <li>Dermacos Facial</li>
                                    <li>Face Bleach</li>
                                    <li>Neck Bleach</li>
                                    <li>Hand Bleach</li>
                                    <li>Black Head Back</li>
                                    <li>Professional Hair Cut</li>
                                    <li>Quick Manicure</li>
                                </ul>
                                <button class="barber-btn modal-popup">Book Now</button>
                            </div>
                        </div> -->
        </div>
    </div>
</section>
<!-- Pricing Area end -->

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

<?php
include "./assets/required/_footer.php";
?>