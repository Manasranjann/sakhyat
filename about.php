<?php
    require('includes/database.php');
    require('includes/function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SakhyatTech</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:600,700%7CNunito:300,400"
        rel="stylesheet">
    <link href="./css/animate.min.css" rel="stylesheet" media="screen">
    <link href="./css/fonts.css" rel="stylesheet" media="screen">
    <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="./css/style.css" rel="stylesheet" media="screen">
    <link href="team/style.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- IMPORT NAVBAR HERE  -->
    <!-- IMPORT NAVBAR HERE  -->
    <!-- IMPORT NAVBAR HERE  -->
    <!-- IMPORT NAVBAR HERE  -->
    <!-- IMPORT NAVBAR HERE  -->
    <?php
        include_once('includes/navbar.php')
    ?>
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Team</h2>
                <p>

                </p>
            </div>

        </div>
        <div class="row justify-content-center">

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="team/manas.jpg" class="img-fluid" alt="" />
                        <div class="social">
                            <a href="https://www.facebook.com/profile.php?id=100009070016485 "><i class="fab fa-facebook"></i></a>
                            <a href="https://twitter.com/Manas63334355?t=B_KsE0D39kIA-Sc2Zo15gw&s=08"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/manas_sanam_/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/manas001/"><i class="fab fa-linkedin"></i></a>
                            <a href="https://github.com/Manasranjann"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Manas Ranjan Khatua</h4>
                        <span>CODER</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="team/shubhashish.jpg" class="img-fluid" alt="" />
                        <div class="social">
                            <a href="https://www.facebook.com/shubhashish.mohanta2000?mibextid=ZbWKwL "><i class="fab fa-facebook"></i></a>
                            <a href="https://twitter.com/Shubhashis20770?t=raHIdWXU2v7f81q0b2wFug&s=08 "><i class="fab fa-twitter"></i></a>
                            <a href="https://instagram.com/just_shubhashish?igshid=ZDdkNTZiNTM="><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/shubhashish-mohanta-971914211"><i class="fab fa-linkedin"></i></a>
                            <a href="https://github.com/Shubhashhish"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Shubhashish Mohanta</h4>
                        <span>CODER</span>
                    </div>
                </div>
            </div>

          


        </div>
    </section>


    <?php
        include_once('includes/newsletter.php')
    ?>

    <?php
        include_once('includes/footer.php')
    ?>

    </div><!-- #page-wrapper end -->

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/plugins.js"></script>
    <script src="./js/main.js"></script>
   
</body>

</html>