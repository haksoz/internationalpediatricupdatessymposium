<!-- get_header('Page Name','Title')-->
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>Home Page - 2nd International Pediatric Updates Symposium</title>
    <?php include('head.php') ?>
</head>

<body>
    <!-- header section -->
    <?php include('header.php') ?>
    <!-- End header section -->

    <!-- banner section -->
    <section class="xs-banner xs-bg" style="background-color: #243263;">
        <div class="container">
            <div class="row xs-banner-wraper">
                <div class=""><img alt="International Pediatric Updates Symposium" title="International Pediatric Updates Symposium" src="doc/slider-1400v3.jpg"></div>

            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- End banner section -->
    <!-- feautre section -->
    <main class="xs-main">
        <div class="xs-feautre">
            <!-- banner section -->
            <div class="xs-section-padding xs-about">
                <div class="container">
                    <!-- <div class="row">
                        <div class="xs-heading col-md-8">
                            <h2 class="xs-sub-title">Uluslararasi Pediatrik Güncellemeler Sempozyumu</h2>
                            <h3 class="xs-title">Davet</h3>
                        </div>
                    </div> -->
                    <div class="row">
                        <?php include('invitation-letter.php')?>
                    </div><!-- .row END -->
                </div><!-- .container END -->
            </div> <!-- End banner section -->
        </div>
    </main>

    <!-- footer top section -->
    <?php include('footer.php') ?>
    <!-- footer section end -->

    <?php include('script.php') ?>
</body>

</html>